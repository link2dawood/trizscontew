import * as walletDom from './walletDom.js';
import { getUserData, deleteDeposit, getDeposit, postDeposit } from '../ajax.js';
import { loader } from '../loader.js';
import { Alert } from '../alert.js';
import { makeid } from '../makeID.js';
import { withdraw } from './withdraw.js';
import { flutterwave } from '../payment/flutterwave.js';

const ADMIN_WALLET_PLACEHOLDER = '<p class="badge badge-info"><em>You have not purchased any plan yet</em></p>';
const logo = document.querySelector('.logo-link')?.innerHTML.trim() || '';
const DEFAULT_CRYPTO_API_IDS = {
  BTC: 'bitcoin',
  ETH: 'ethereum',
  USDT: 'tether',
  BNB: 'binancecoin',
};

let current = null;
let btcAdd = '';
let usdtAdd = '';
let ethAdd = '';
let bnbAdd = '';

if (walletDom?.adminWallet && walletDom.adminWallet !== ADMIN_WALLET_PLACEHOLDER) {
  try {
    const walletList = JSON.parse(walletDom.adminWallet);
    if (Array.isArray(walletList)) {
      walletList.forEach((item) => {
        btcAdd = item?.bitcoin || btcAdd;
        usdtAdd = item?.usdt || usdtAdd;
        ethAdd = item?.ethereum || ethAdd;
        bnbAdd = item?.bnb || bnbAdd;
      });
    }
  } catch (error) {
    // Ignore invalid admin wallet JSON.
  }
}

const normalizeCoin = (coin) => String(coin || '').trim().toUpperCase();

const getLivePrice = async (coin) => {
  const normalized = normalizeCoin(coin).replace(/[^A-Z]/g, '');
  if (!normalized) {
    return 0;
  }

  if (window.LivePrices) {
    return window.LivePrices.fetchPrice(normalized, 'usd');
  }

  const liveStore = window.liveCryptoPrices || {};
  if (Number(liveStore[normalized]) > 0) {
    return Number(liveStore[normalized]);
  }

  const apiIds = window.cryptoApiIds || DEFAULT_CRYPTO_API_IDS;
  const apiId = apiIds[normalized];
  if (!apiId) {
    return 0;
  }

  try {
    const response = await fetch(
      `crypto_api.php?command=getCryptoPrice&coin=${encodeURIComponent(apiId)}&currency=usd`
    );
    const data = await response.json();
    const price = Number(data?.price || 0);
    if (price > 0) {
      window.liveCryptoPrices = window.liveCryptoPrices || {};
      window.liveCryptoPrices[normalized] = price;
      return price;
    }
  } catch (error) {
    return 0;
  }

  return 0;
};

const getCoinConfig = (coin, prices) => {
  switch (normalizeCoin(coin)) {
    case 'BTC':
      return { address: btcAdd, rate: prices?.btcPrice };
    case 'USDT':
      return { address: usdtAdd, rate: prices?.usdtPrice };
    case 'ETH':
      return { address: ethAdd, rate: prices?.ethPrice };
    case 'BNB':
      return { address: bnbAdd, rate: prices?.bnbPrice };
    default:
      return { address: '', rate: 0 };
  }
};

const createModalElement = (html) => {
  const wrapper = document.createElement('div');
  wrapper.innerHTML = html;
  return wrapper;
};

const paymentTimeout = (paymentWrapper) => {
  const timeoutWrapper = createModalElement(`
  <div class="pop-modal timeout-modal hido">
      <div class="advance-card advance-card--type-1-v1 modal-main">
          <div style="margin-bottom: 6px">
              <p advance-card__title-text style="text-align: center; font-weight: bold;"></p>
              <p style="text-align: center">Transaction Timeout</p>
          </div>
          <div class="plan-btn-cont">
              <button class="advance-card__button btn btn-primary btn-pill" id="timeout-go">OK</button>
          </div>
      </div>
  </div>
  `);

  document.body.appendChild(timeoutWrapper);
  walletDom.toggleScreen(document.querySelector('.timeout-modal'), 'render');

  document.getElementById('timeout-go').onclick = () => {
    walletDom.toggleScreen(document.querySelector('.timeout-modal'), 'fade');
    walletDom.toggleScreen(document.querySelector('.payment-modal'), 'fade');
    document.body.removeChild(paymentWrapper);
    document.body.removeChild(timeoutWrapper);
    Alert.info('Transaction Ended', '', { displayDuration: 5000, pos: 'top' });
    withdraw();
  };
};

const confirmQuit = (paymentWrapper, pollInterval, countdownTimeout, token) => {
  const confirmWrapper = createModalElement(`
  <div class="pop-modal confirm-modal hido">
      <div class="advance-card advance-card--type-1-v1 modal-main">
          <div style="margin-bottom: 6px">
              <p advance-card__title-text style="text-align: center; font-weight: bold;">Are you sure you want to quit?</p>
          </div>
          <div style="margin-bottom: 12px">
              <p style="text-align: center">Your transaction has not been confirmed</p>
          </div>
          <div class="plan-btn-cont">
              <button class="advance-card__button btn btn-primary btn-pill" id="confirm-go">Yes</button>
              <button class="advance-card__button btn btn-primary btn-pill" id="confirm-back">Back</button>
          </div>
      </div>
  </div>
  `);

  document.body.appendChild(confirmWrapper);
  walletDom.toggleScreen(document.querySelector('.confirm-modal'), 'render');

  document.getElementById('confirm-go').onclick = async () => {
    current = null;
    deleteDeposit({ email: walletDom.userEmail, token });
    walletDom.toggleScreen(document.querySelector('.confirm-modal'), 'fade');
    walletDom.toggleScreen(document.querySelector('.payment-modal'), 'fade');
    document.body.removeChild(paymentWrapper);
    document.body.removeChild(confirmWrapper);
    clearInterval(pollInterval);
    clearTimeout(countdownTimeout);
    Alert.info('Transaction Ended', '', { displayDuration: 5000, pos: 'top' });
    withdraw();
  };

  document.getElementById('confirm-back').onclick = () => {
    walletDom.toggleScreen(document.querySelector('.confirm-modal'), 'fade');
    document.body.removeChild(confirmWrapper);
    window.history.pushState({}, null, null);
  };
};

const renderPaymentModal = (usdAmount, coin, cryptoAmount, walletAddress) => {
  const formattedUsd = walletDom.formatFigure(Number(usdAmount));
  const html = `
  <div class="pop-modal payment-modal hido">
      <div class="modal-main payment-card">
          <div class="advance-card__title">
              <h6 class="advance-card__title-text">Fund Wallet</h6>
              <svg width="55px" height="55px" viewBox="0 0 42 42" class="donut">
                  <circle id="c1" cx="21" cy="21" r="15.91549430918954" stroke-dasharray="100 0" stroke-dashoffset="100"></circle>
                  <circle id="c2" cx="21" cy="21" r="15.91549430918954" stroke-dasharray="0 100" stroke-dashoffset="0"></circle>
                  <g class="chart-text">
                      <text x="50%" y="50%" dominant-baseline="middle" text-anchor="middle" id="counterText">15</text>
                  </g>
              </svg>
          </div>
          <div style="margin-bottom: 12px">
              <p class="scan-text" style="text-align: center">Scan code to Send $${formattedUsd} to</p>
              <p style="text-align: center">${coin} Address</p>
          </div>
          <div class="barcode-area">
              <div id="barcode"></div>
          </div>
          <div class="successful-area hido">
              <p style="text-align: center">Successful</p>
          </div>
          <div class="cryp-info">
              <p class="head">Transaction Amount</p>
              <p>${formattedUsd} USD</p>
              <p>${cryptoAmount} ${coin}</p>
          </div>
          <div class="wallet-area">
              <p class="head">Wallet Address</p>
              <p>
                  <button class="addr-btn">
                      <dfn title="copy">${walletAddress}</dfn>
                  </button>
              </p>
          </div>
          <div class="plan-btn-cont">
              <button class="advance-card__button btn btn-primary btn-pill payment-portal btn-danger" id="payment-portal">Cancel Pay</button>
              <button class="advance-card__button btn btn-pill" id="payment-cancel">Cancel</button>
          </div>
      </div>
  </div>
  `;

  return createModalElement(html);
};

const startPaymentCountdown = (minutes, token, paymentWrapper) => {
  const totalSeconds = minutes * 60;
  let ticks = 1;

  const updateProgress = () => {
    const progress = (ticks / totalSeconds) * 100;
    const remaining = 100 - progress;
    document.getElementById('c1').style.strokeDasharray = [remaining, progress];
    document.getElementById('c2').style.strokeDasharray = [progress, remaining];
    document.getElementById('c1').style.strokeDashoffset = remaining;
  };

  updateProgress();

  const deadline = new Date();
  deadline.setMinutes(deadline.getMinutes() + minutes);

  const pollInterval = setInterval(async () => {
    if (!document.querySelector('.payment-modal')) {
      clearInterval(pollInterval);
      return;
    }

    const now = Date.now();
    const remainingMs = deadline.getTime() - now;
    const minutesLeft = Math.floor((remainingMs % (1000 * 60 * 60)) / (1000 * 60));
    const secondsLeft = Math.floor((remainingMs % (1000 * 60)) / 1000);

    document.getElementById('counterText').innerHTML =
      String(minutesLeft).padStart(2, '0') + ' : ' + String(secondsLeft).padStart(2, '0');

    if (remainingMs <= 0) {
      document.getElementById('counterText').innerHTML = '00 : 00';
      deleteDeposit({ email: walletDom.userEmail, token });
      paymentTimeout(paymentWrapper);
      clearInterval(pollInterval);
      clearTimeout(timeoutHandle);
      Alert.error('Transaction timeout! ', 'Error', { displayDuration: 3000, pos: 'top' });
      return;
    }

    updateProgress();
    ticks += 1;

    const depositRows = await getDeposit(walletDom.userEmail);
    const currentDeposit = Array.isArray(depositRows)
      ? depositRows.find((row) => row[5] === token)
      : null;
    const status = currentDeposit ? currentDeposit[3] : null;

    if (status === 'Approved') {
      document.querySelector('.successful-area').classList.remove('hido');
      document.querySelector('.barcode-area').classList.add('hido');
      document.querySelector('.scan-text').classList.add('hido');
      const portalButton = document.querySelector('.payment-portal');
      portalButton.classList.remove('btn-danger');
      portalButton.classList.add('btn-primary');
      portalButton.innerHTML = 'OK';
      document.querySelector('#payment-cancel').classList.add('hido');
      clearInterval(pollInterval);
      clearTimeout(timeoutHandle);
      withdraw();
    }
  }, 1000);

  const timeoutHandle = setTimeout(() => {}, 0);

  return { pollInterval, timeoutHandle };
};

const depositPayment = async (usdAmount, coin, prices) => {
  window.history.pushState({}, null, null);
  current = 'payment';

  const coinConfig = getCoinConfig(coin, prices);
  if (!coinConfig.address) {
    Alert.info('Unavailable wallet', '', { displayDuration: 4000, pos: 'top' });
    return;
  }

  const rate = Number(coinConfig.rate || 0);
  const liveRate = rate || (await getLivePrice(coin));
  if (!liveRate) {
    Alert.error('Could not fetch live price for this asset.', 'Error', {
      displayDuration: 4000,
      pos: 'top',
    });
    return;
  }

  const cryptoAmount = (Number(usdAmount) / liveRate).toFixed(5);
  const paymentWrapper = renderPaymentModal(usdAmount, coin, cryptoAmount, coinConfig.address);

  document.body.appendChild(paymentWrapper);
  walletDom.toggleScreen(document.querySelector('.payment-modal'), 'render');

  const qrValue = `${coinConfig.address}?amount=${cryptoAmount}`;
  const barcodeTarget = document.getElementById('barcode');
  barcodeTarget.innerHTML = '';
  new QRCode(barcodeTarget, qrValue);

  const token = makeid(15);
  const mode = `${coin} ${cryptoAmount}`;
  postDeposit({ email: walletDom.userEmail, amount: Number(usdAmount), mode, token });

  const { pollInterval, timeoutHandle } = startPaymentCountdown(15, token, paymentWrapper);

  const handlePaymentAction = () => {
    const portalButton = document.querySelector('.payment-portal');
    if (!portalButton) {
      return;
    }
    if (portalButton.innerHTML === 'Cancel Pay') {
      confirmQuit(paymentWrapper, pollInterval, timeoutHandle, token);
    } else if (portalButton.innerHTML === 'OK') {
      walletDom.toggleScreen(document.querySelector('.payment-modal'), 'fade');
      document.body.removeChild(paymentWrapper);
      Alert.success('Successful', 'Funds will be added to balance soon.', {
        displayDuration: 8000,
        pos: 'top',
      });
    }
  };

  document.getElementById('payment-portal').onclick = handlePaymentAction;
  document.getElementById('payment-cancel').onclick = handlePaymentAction;

  document.querySelector('.addr-btn').onclick = () => {
    navigator.clipboard.writeText(coinConfig.address);
    Alert.info('Address Copied', '', { displayDuration: 8000, pos: 'top' });
  };
};

const paymentGateway = (payload) => {
  loader(100);
  const modalWrapper = createModalElement(`
  <div class="pop-modal gateway-modal hido" style="z-index: 7000000000000 !important;">
      <div class="advance-card modal-main">
          <div class="advance-card__title">
              <h6 class="advance-card__title-text">Choose payment method</h6>
          </div>
          <div class="advance-card__title">
              <button class="advance-card__button btn btn-secondary btn-pill cryp" id="platform-pay">${walletDom.platformName} Pay</button>
          </div>
          <div class="advance-card__title ${walletDom.flutterwavePass === 'no' ? 'hido' : ''}">
              <button class="advance-card__button btn btn-secondary btn-pill cryp" id="flutterwave">Flutterwave</button>
          </div>
          <div class="advance-card__title ${walletDom.coingatePass === 'no' ? 'hido' : ''}">
              <button class="advance-card__button btn btn-secondary btn-pill cryp" id="coingate">CoinGate</button>
          </div>
          <div class="advance-card__title ${walletDom.coinpaymentsPass === 'no' ? 'hido' : ''}">
              <button class="advance-card__button btn btn-secondary btn-pill cryp" id="coinpayments">CoinPayments</button>
          </div>
          <div class="plan-btn-cont">
              <button class="advance-card__button btn btn-primary btn-pill" id="gateway-back">Cancel ?</button>
          </div>
      </div>
  </div>
  `);

  document.body.appendChild(modalWrapper);
  walletDom.toggleScreen(document.querySelector('.gateway-modal'), 'render');

  if (payload.walletAddState === false) {
    document.getElementById('platform-pay').style.display = 'none';
  }

  document.getElementById('platform-pay').onclick = () => {
    if (payload.walletAddState === false) {
      Alert.info('Unavailable wallet', '', { displayDuration: 4000, pos: 'top' });
      return;
    }
    depositPayment(Number(payload.dollarAmount), payload.coin, payload);
    walletDom.toggleScreen(document.querySelector('.gateway-modal'), 'fade');
    setTimeout(() => {
      document.body.removeChild(modalWrapper);
    }, 1000);
  };

  document.getElementById('flutterwave').onclick = () => {
    const sendRequest = (data, url) => {
      $.ajax({
        type: 'POST',
        url,
        data,
        cache: false,
        success: (response) => {
          try {
            const flutterData = JSON.parse(response);
            flutterData.logo = logo;
            flutterData.platform = walletDom.platformName;
            flutterwave(flutterData);
          } catch (error) {
            Alert.error(`An error: ${error} occurred`, 'Error', { displayDuration: 4000, pos: 'top' });
          }
        },
        error: () => {
          Alert.error('Could not connect to server', 'Error', { displayDuration: 4000, pos: 'top' });
        },
      });
    };

    sendRequest({ data: JSON.stringify(payload) }, 'bundle/payment/flutterwave/flutterpay_deposit.php');
  };

  document.getElementById('coingate').onclick = () => {
    const sendRequest = (data, url) => {
      $.ajax({
        type: 'POST',
        url,
        data,
        cache: false,
        success: (response) => {
          let trimmed = response.trim();
          try {
            if (trimmed.includes('url:')) {
              trimmed = trimmed.replace('url:', '');
              location.href = trimmed;
            } else {
              Alert.error('An error occurred', 'Error', { displayDuration: 4000, pos: 'top' });
            }
          } catch (error) {
            Alert.error(`An error ${error} occured`, 'Error', { displayDuration: 4000, pos: 'top' });
          }
        },
        error: (err) => {
          console.log('Error!', err);
          Alert.error('Could not connect to server', 'Error', { displayDuration: 4000, pos: 'top' });
        },
      });
    };

    sendRequest({ data: JSON.stringify(payload) }, 'bundle/payment/coingate/coingate_pay.php');
  };

  document.getElementById('coinpayments').onclick = () => {
    const sendRequest = (data, url) => {
      $.ajax({
        type: 'POST',
        url,
        data,
        cache: false,
        success: (response) => {
          let trimmed = response.trim();
          try {
            if (trimmed.includes('url:')) {
              trimmed = trimmed.replace('url:', '');
              location.href = trimmed;
            } else {
              Alert.error('An error occurred', 'Error', { displayDuration: 4000, pos: 'top' });
            }
          } catch (error) {
            Alert.error(`An error ${error} occured`, 'Error', { displayDuration: 4000, pos: 'top' });
          }
        },
        error: (err) => {
          console.log('Error!', err);
          Alert.error('Could not connect to server', 'Error', { displayDuration: 4000, pos: 'top' });
        },
      });
    };

    sendRequest(
      { data: JSON.stringify(payload) },
      'bundle/payment/coinpayments/coinpayments_pay_deposit.php'
    );
  };

  document.getElementById('gateway-back').onclick = () => {
    walletDom.toggleScreen(document.querySelector('.gateway-modal'), 'fade');
    setTimeout(() => {
      document.body.removeChild(modalWrapper);
    }, 1000);
  };
};

const depositCoin = (amount) => {
  const modalWrapper = createModalElement(`
  <div class="pop-modal coin-modal hido">
      <div class="advance-card modal-main">
          <div class="advance-card__title">
              <h6 class="advance-card__title-text">Choose Crypto Wallet</h6>
          </div>
          <div class="advance-card__title">
              <button class="advance-card__button btn btn-secondary btn-pill cryp" id="BTC">BTC</button>
          </div>
          <div class="advance-card__title">
              <button class="advance-card__button btn btn-secondary btn-pill cryp" id="USDT">USDT</button>
          </div>
          <div class="advance-card__title">
              <button class="advance-card__button btn btn-secondary btn-pill cryp" id="ETH">ETH</button>
          </div>
          <div class="advance-card__title">
              <button class="advance-card__button btn btn-secondary btn-pill cryp" id="BNB">BNB</button>
          </div>
          <div class="plan-btn-cont">
              <button class="advance-card__button btn btn-primary btn-pill" id="coin-back">Cancel ?</button>
          </div>
      </div>
  </div>
  `);

  document.body.appendChild(modalWrapper);
  walletDom.toggleScreen(document.querySelector('.coin-modal'), 'render');

  document.querySelectorAll('.cryp').forEach((button) => {
    const rawId = String(button.id || '');
    const coinId = normalizeCoin(rawId);
    let walletAddState = true;

    if (rawId.includes('*') || rawId === '' || rawId === 'undefined') {
      walletAddState = false;
    }

    if (!getCoinConfig(coinId, {}).address) {
      walletAddState = false;
    }

    button.onclick = async () => {
      walletDom.toggleScreen(document.querySelector('.coin-modal'), 'fade');
      loader(1000);

      const user = await getUserData(walletDom.userEmail);
      const coinMeta = user?.crypto?.find((entry) => normalizeCoin(entry?.shortname) === coinId) || null;
      const price = coinMeta && coinMeta.price ? Number(coinMeta.price) : 1;
      const cryptoAmount = Number(amount) / Number(price);

      const payload = {
        user,
        cryptoAmount: parseFloat(cryptoAmount).toFixed(5),
        dollarAmount: parseFloat(amount).toFixed(2),
        currency: 'USD',
        coin: coinId,
        walletAddState,
        btcPrice: user?.crypto?.find((entry) => normalizeCoin(entry?.shortname) === 'BTC')?.price || 0,
        usdtPrice: user?.crypto?.find((entry) => normalizeCoin(entry?.shortname) === 'USDT')?.price || 0,
        ethPrice: user?.crypto?.find((entry) => normalizeCoin(entry?.shortname) === 'ETH')?.price || 0,
        bnbPrice: user?.crypto?.find((entry) => normalizeCoin(entry?.shortname) === 'BNB')?.price || 0,
      };

      paymentGateway(payload);
    };
  });

  document.getElementById('coin-back').onclick = () => {
    walletDom.toggleScreen(document.querySelector('.coin-modal'), 'fade');
    document.body.removeChild(modalWrapper);
  };
};

const depositAmount = () => {
  const modalWrapper = createModalElement(`
  <div class="pop-modal deposit-modal hido">
      <div class="advance-card modal-main">
          <div class="advance-card__title">
              <h6 class="advance-card__title-text">Fund Wallet</h6>
          </div>
          <div style="margin-bottom: 12px">
              <p style="text-align: center">Input amount in ($) to deposit</p>
              <p style="text-align: center"></p>
          </div>
          <div class="advance-card__forms-currency">
              <input type="number" class="advance-card__button btn btn-secondary btn-pill deposit-input">
          </div>
          <div class="plan-btn-cont">
              <button class="advance-card__button btn btn-primary btn-pill" id="deposit-proceed">Proceed</button>
              <button class="advance-card__button btn btn-primary btn-pill" id="deposit-back">Back</button>
          </div>
      </div>
  </div>
  `);

  document.body.appendChild(modalWrapper);
  walletDom.toggleScreen(document.querySelector('.deposit-modal'), 'render');

  document.getElementById('deposit-proceed').onclick = () => {
    const amount = document.querySelector('.deposit-input').value;
    if (amount === '' || Number(amount) === 0) {
      Alert.info('Input an amount', '', { displayDuration: 4000, pos: 'top' });
      return;
    }

    walletDom.toggleScreen(document.querySelector('.deposit-modal'), 'fade');
    document.body.removeChild(modalWrapper);
    depositCoin(amount);
  };

  document.getElementById('deposit-back').onclick = () => {
    walletDom.toggleScreen(document.querySelector('.deposit-modal'), 'fade');
    document.body.removeChild(modalWrapper);
    document.querySelector('.deposit-input').value = '';
  };
};

export const deposit = (walletDomState) => {
  const showVerification = (message) => {
    const modalWrapper = createModalElement(`
    <div class="pop-modal verif-modal hido" style="z-index: 7000000000000 !important;">
        <div class="advance-card advance-card--type-1-v1 modal-main">
            <div style="margin-bottom: 6px">
                <p advance-card__title-text style="text-align: center; font-weight: bold;"></p>
            </div>
            <div style="margin-bottom: 12px">
                <p style="text-align: center">${message}</p>
            </div>
            <div class="plan-btn-cont">
                <button class="advance-card__button btn btn-primary btn-pill" id="verif-go">OK</button>
            </div>
        </div>
    </div>
    `);

    document.body.appendChild(modalWrapper);
    walletDomState.toggleScreen(document.querySelector('.verif-modal'), 'render');

    document.getElementById('verif-go').onclick = () => {
      walletDomState.toggleScreen(document.querySelector('.verif-modal'), 'fade');
      document.body.removeChild(modalWrapper);
    };
  };

  walletDomState.depBtn.onclick = () => {
    if (walletDomState.verifDep === 'yes') {
      depositAmount();
      return;
    }

    if (walletDomState.vComplete === 'yes') {
      depositAmount();
      return;
    }

    if (walletDomState.vStatus === 'yes') {
      showVerification(
        'We are currently processing your verification. You can check your verification status in the verification center.'
      );
    } else {
      showVerification(
        'You need to be verified to make deposits. Go to the verification center to start your verification.'
      );
    }
  };
};
