import * as dashboardDom from '../dashboardDom.js';
import { getWithdrawal } from '../ajax.js';
import { Alert } from '../alert.js';
import { exchange } from './exchange.js';

const assetsNav = document.querySelector('.assets-nav');
const assetsDiv = document.querySelector('.assets-div');
const payDropdown = document.querySelector('.pay-dropdown');
const getDropdown = document.querySelector('.get-dropdown');
const mainExchangeItem = document.querySelector('.main-exchange-item');
const mainExchangeItemImg = document.querySelector('.main-exchange-item-img');
const oneVal = document.querySelector('.one-val');

const DEFAULT_CRYPTO_API_IDS = {
  BTC: 'bitcoin',
  ETH: 'ethereum',
  USDT: 'tether',
  BNB: 'binancecoin',
};

const LOADING_GIF = '../assets/media/Loading.gif';

let currentUser = null;
let currentAssets = [];
let handlersBound = false;

const normalizeSymbol = (value) => String(value || '').toUpperCase().replace(/[^A-Z]/g, '');

const resolveAssetImage = (asset, user) => {
  if (asset && asset.img) {
    return asset.img;
  }
  const symbol = normalizeSymbol(asset?.shortname);
  if (window.cryptoIcons && window.cryptoIcons[symbol]) {
    return window.cryptoIcons[symbol];
  }
  const userCrypto = Array.isArray(user?.crypto) ? user.crypto : [];
  const match = userCrypto.find((coin) => normalizeSymbol(coin.coincode) === symbol);
  return match?.coinimage || '';
};

const formatFigure = (value) => {
  const numeric = Number(value);
  if (numeric < 0.09) {
    return numeric;
  }
  if (numeric < 0.9) {
    return numeric.toFixed(5);
  }
  if (numeric >= 1 && numeric < 9.9) {
    return numeric.toFixed(5);
  }
  return Number(numeric.toFixed(2)).toLocaleString('en-US');
};

const setAssetsLayout = (count) => {
  if (!assetsDiv || !assetsNav) {
    return;
  }

  const layoutClass =
    count === 1
      ? 'one'
      : count === 2
      ? 'two'
      : count === 3
      ? 'three'
      : count >= 4
      ? 'four'
      : '';

  const mainBoard = document.querySelector('.main-board');

  ['one', 'two', 'three', 'four'].forEach((className) => {
    assetsDiv.classList.remove(className);
    assetsNav.classList.remove(className);
    if (mainBoard) {
      mainBoard.classList.remove(className);
    }
  });

  if (layoutClass) {
    assetsDiv.classList.add(layoutClass);
    assetsNav.classList.add(layoutClass);
    if (mainBoard) {
      mainBoard.classList.add(layoutClass);
    }
  }
};

const buildAssetsHtml = (assets, user, blur) => {
  const blurClass = blur === 'yes' ? 'blurers' : '';
  return assets.map((asset) => {
    const amount = Number(asset.value || 0).toFixed(5);
    const currencyValue = formatFigure(Number(asset.currencyValue || 0));
    return `
        <div class="standard-card asset-element">
            <div class="container">
                <div class="left">
                    <img src="${resolveAssetImage(asset, user)}" alt="">
                    <p>${asset.name}</p>
                </div>
                <div class="right">
                    <p class="${blurClass}">${user.curSymbol}${currencyValue}</p>
                    <p class="${blurClass}">${amount} ${asset.shortname}</p>
                </div>
            </div>
        </div>
        `;
  });
};

const updateTotals = (assets, user) => {
  const total = assets.reduce((sum, asset) => sum + Number(asset.currencyValue || 0), 0);

  if (dashboardDom.balanceUsd) {
    dashboardDom.balanceUsd.forEach((element) => {
      element.innerHTML = `${user.currency} ${formatFigure(total)}`;
    });
  }

  if (dashboardDom.freeMarginCont) {
    dashboardDom.freeMarginCont.innerHTML = `${user.currency} ${formatFigure(total)}`;
  }

  if (dashboardDom.equityCont) {
    dashboardDom.equityCont.innerHTML = `${user.currency} 0`;
  }
};

const setLoadingState = (isLoading) => {
  if (assetsDiv && isLoading) {
    assetsDiv.innerHTML = `
        <div class="standard-card asset-element">
            <div class="container" style="justify-content:center;">
                <img src="${LOADING_GIF}" alt="Loading" width="20" height="20">
            </div>
        </div>
        `;
  }

  const loadingImg = `<img src="${LOADING_GIF}" alt="Loading" width="16" height="16">`;
  if (dashboardDom.btcPrice) {
    dashboardDom.btcPrice.innerHTML = isLoading ? loadingImg : dashboardDom.btcPrice.innerHTML;
  }
  if (dashboardDom.ethPrice) {
    dashboardDom.ethPrice.innerHTML = isLoading ? loadingImg : dashboardDom.ethPrice.innerHTML;
  }
  if (dashboardDom.usdtPrice) {
    dashboardDom.usdtPrice.innerHTML = isLoading ? loadingImg : dashboardDom.usdtPrice.innerHTML;
  }
  if (dashboardDom.bnbPrice) {
    dashboardDom.bnbPrice.innerHTML = isLoading ? loadingImg : dashboardDom.bnbPrice.innerHTML;
  }
};

const applyLivePricesToAssets = (assets, user) => {
  const livePrices = window.liveCryptoPrices || {};
  assets.forEach((asset) => {
    const symbol = normalizeSymbol(asset.shortname);
    const livePrice = Number(livePrices[symbol] || 0);
    if (livePrice > 0) {
      asset.price = livePrice;
    }
    const price = Number(asset.price || 0);
    const amount = Number(asset.value || 0);
    asset.currencyValue = amount * price * Number(user.curValue || 1);
  });
};

const updateCarouselPrices = (user) => {
  const livePrices = window.liveCryptoPrices || {};
  const priceTargets = [
    { symbol: 'BTC', element: dashboardDom.btcPrice, fallback: user.btcPrice },
    { symbol: 'ETH', element: dashboardDom.ethPrice, fallback: user.ethPrice },
    { symbol: 'USDT', element: dashboardDom.usdtPrice, fallback: user.usdtPrice },
    { symbol: 'BNB', element: dashboardDom.bnbPrice, fallback: user.bnbPrice },
  ];

  priceTargets.forEach(({ symbol, element, fallback }) => {
    if (!element) {
      return;
    }
    const live = Number(livePrices[symbol] || 0);
    const price = live || Number(fallback || 0);
    if (!price) {
      return;
    }
    const formatted = Number((price * Number(user.curValue || 1)).toFixed(2)).toLocaleString('en-US');
    element.innerHTML = `${user.currency} ${formatted}`;
  });
};

const getChangeTargets = () => {
  if (!dashboardDom.totalChangeCont) {
    return [];
  }
  if (typeof dashboardDom.totalChangeCont.forEach === 'function') {
    return dashboardDom.totalChangeCont;
  }
  return [dashboardDom.totalChangeCont];
};

const updateTotalChange = (assets) => {
  if (!dashboardDom.totalChangeArrow) {
    return;
  }

  const targets = getChangeTargets();
  if (!targets.length) {
    return;
  }

  if (!assets.length) {
    targets.forEach((element, index) => {
      if (index === 0) {
        element.innerHTML = 'No balance';
      }
    });
    return;
  }

  const totalChange = assets
    .map((asset) => Number(asset.change || 0))
    .reduce((sum, value) => sum + value, 0);
  const topAsset = [...assets].sort((a, b) => Number(b.change || 0) - Number(a.change || 0))[0];
  const isPositive = topAsset ? Boolean(topAsset.pos) : false;

  dashboardDom.totalChangeArrow.classList.remove('hido');

  if (isPositive) {
    targets.forEach((element) => {
      element.classList.add('text-bullish');
      element.classList.remove('text-bearish');
      element.innerHTML = `${Number(totalChange).toFixed(2)}%`;
    });
    dashboardDom.totalChangeArrow.src = '../assets/media/images/icons/green-arrow-up.svg';
  } else {
    targets.forEach((element) => {
      element.classList.add('text-bearish');
      element.classList.remove('text-bullish');
      element.innerHTML = `${Number(totalChange).toFixed(2)}%`;
    });
    dashboardDom.totalChangeArrow.src = '../assets/media/images/icons/red-arrow-down.svg';
  }
};

const buildPayDropdown = (assets) => {
  if (!payDropdown) {
    return;
  }

  payDropdown.innerHTML = '';
  assets.forEach((asset) => {
    const imgSrc = resolveAssetImage(asset, currentUser);
    const item = document.createElement('div');
    item.className = 'forms-group__items exchange-item';
    item.id = String(asset.shortname || '').toLowerCase();
    item.setAttribute('data-selected', asset.shortname || '');
    item.innerHTML = `${asset.shortname || ''} <img class="fg-items__icon" src="${imgSrc}" alt="${asset.shortname}">`;
    payDropdown.appendChild(item);
  });
};

const buildGetDropdown = (cryptoList) => {
  if (!getDropdown) {
    return;
  }

  getDropdown.innerHTML = '';
  cryptoList.forEach((coin) => {
    if (isNaN(Number(coin.price))) {
      return;
    }

    const item = document.createElement('div');
    item.className = 'forms-group__items crypto-item';
    item.id = String(coin.coincode || '').toLowerCase();
    item.setAttribute('data-selected', coin.coincode || '');
    item.innerHTML = `<img class="fg-items__icon" src="${coin.coinimage}" alt="${coin.coincode}">`;
    getDropdown.appendChild(item);
  });
};

const fetchLivePrice = async (symbol) => {
  const normalized = normalizeSymbol(symbol);
  if (window.LivePrices) {
    return window.LivePrices.fetchPrice(normalized, 'usd');
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
      console.log('Fetched live price', normalized, price);
      return price;
    }
  } catch (error) {
    return 0;
  }

  return 0;
};

const refreshLivePrices = async (cryptoList) => {
  if (!Array.isArray(cryptoList) || cryptoList.length === 0) {
    return;
  }

  if (window.LivePrices) {
    const prices = await window.LivePrices.refreshPrices(cryptoList);
    cryptoList.forEach((coin) => {
      const symbol = normalizeSymbol(coin.coincode);
      const price = Number(prices[symbol] || 0);
      if (price > 0) {
        coin.price = price;
      }
    });
    return;
  }

  const apiIds = window.cryptoApiIds || DEFAULT_CRYPTO_API_IDS;
  window.liveCryptoPrices = window.liveCryptoPrices || {};

  await Promise.all(
    cryptoList.map(async (coin) => {
      const symbol = normalizeSymbol(coin.coincode);
      const apiId = apiIds[symbol];
      if (!apiId) {
        return;
      }
      try {
        const response = await fetch(
          `crypto_api.php?command=getCryptoPrice&coin=${encodeURIComponent(apiId)}&currency=usd`
        );
        const data = await response.json();
        const price = Number(data?.price || 0);
        if (price > 0) {
          coin.price = price;
          window.liveCryptoPrices[symbol] = price;
          console.log('Live price', symbol, price);
        }
      } catch (error) {
        return;
      }
    })
  );
};

const updateExchangeRate = async () => {
  if (!currentUser) {
    return;
  }

  const paySelected =
    document.querySelector('.exchange-item.active') || document.querySelector('.exchange-item.selected');
  const getSelected =
    document.querySelector('.crypto-item.active') || document.querySelector('.crypto-item.selected');

  if (!paySelected || !getSelected) {
    return;
  }

  let payId = paySelected.id || '';
  let getId = getSelected.id || '';

  if (payId === 'btc-1') {
    payId = 'btc';
  }
  if (getId === 'usd') {
    getId = 'usdt';
  }

  const paySymbol = normalizeSymbol(payId === 'USD' ? 'USDT' : payId);
  const getSymbol = normalizeSymbol(getId === 'USD' ? 'USDT' : getId);

  const userCrypto = Array.isArray(currentUser.crypto) ? currentUser.crypto : [];
  const payCoin = userCrypto.find(
    (coin) => normalizeSymbol(coin.coincode) === paySymbol
  );
  const getCoin = userCrypto.find(
    (coin) => normalizeSymbol(coin.coincode) === getSymbol
  );

  let payPrice = Number((window.liveCryptoPrices && window.liveCryptoPrices[paySymbol]) || 0);
  let getPrice = Number((window.liveCryptoPrices && window.liveCryptoPrices[getSymbol]) || 0);

  if (!payPrice) {
    payPrice = Number(payCoin?.price || 0);
  }
  if (!getPrice) {
    getPrice = Number(getCoin?.price || 0);
  }

  if (!payPrice) {
    payPrice = await fetchLivePrice(paySymbol);
  }
  if (!getPrice) {
    getPrice = await fetchLivePrice(getSymbol);
  }

  if (!payPrice || !getPrice) {
    return;
  }

  const rate = payPrice / getPrice;
  dashboardDom.curCoinPrice.innerHTML = dashboardDom.formatFigure(rate);
  dashboardDom.curPayCoin.forEach((element) => {
    element.innerHTML = paySymbol || payId.toUpperCase();
  });
  dashboardDom.curGetCoin.innerHTML = getSymbol || getId.toUpperCase();

  const payValue = Number(dashboardDom.payValue.value || 0);
  if (payValue > 0) {
    dashboardDom.getValue.value = (payValue * rate).toFixed(4);
  }

  console.log('Live exchange rate', paySymbol, '/', getSymbol, rate);
};

const closeDropdowns = () => {
  document.querySelectorAll('.forms-group__dropdown').forEach((dropdown) => {
    dropdown.classList.remove('is-open');
  });
};

const updateSelectedItem = (wrapper, item) => {
  const selected = wrapper.querySelector('.forms-group__items.selected');
  if (!selected) {
    return;
  }

  const newSelected = item.getAttribute('data-selected') || item.id || '';
  selected.setAttribute('data-selected', newSelected);

  const selectedIcon = selected.querySelector('.fg-items__icon');
  const newIcon = item.querySelector('.fg-items__icon');
  if (selectedIcon && newIcon) {
    selectedIcon.setAttribute('src', newIcon.getAttribute('src'));
  }

  const selectedValue = selected.querySelector('.fg-items__value');
  const newValue = item.querySelector('.fg-items__value');
  if (selectedValue && newValue) {
    selectedValue.textContent = newValue.textContent;
  }
};

const bindDropdownHandlers = () => {
  if (handlersBound) {
    return;
  }
  handlersBound = true;

  document.addEventListener('click', (event) => {
    const dropdownItem = event.target.closest('.forms-group__dropdown .forms-group__items');
    if (dropdownItem) {
      event.preventDefault();
      event.stopPropagation();
      const wrapper = dropdownItem.closest('.js-forms-group--currency');
      if (wrapper) {
        updateSelectedItem(wrapper, dropdownItem);
      }
      closeDropdowns();
      updateExchangeRate();
      return;
    }

    const wrapper = event.target.closest('.js-forms-group--currency');
    if (wrapper) {
      event.preventDefault();
      event.stopPropagation();
      const dropdown = wrapper.querySelector('.forms-group__dropdown');
      if (!dropdown) {
        return;
      }
      const isOpen = dropdown.classList.contains('is-open');
      closeDropdowns();
      if (!isOpen) {
        dropdown.classList.add('is-open');
      }
      return;
    }

    closeDropdowns();
  });

  document.addEventListener('input', (event) => {
    if (event.target && event.target.id === 'pay-value') {
      updateExchangeRate();
    }
  });
};

export const displayAssets = async (user, screen) => {
  currentUser = user;

  const withdrawals = await getWithdrawal(dashboardDom.userEmail);
  const withdrawalList = withdrawals || [];
  const pending = withdrawalList.filter((row) => row[4] === 'Pending');

  let assets = Array.isArray(user.myCryptoAssets) ? user.myCryptoAssets.map((asset) => ({ ...asset })) : [];

  if (!assets.length) {
    mainExchangeItem.setAttribute('id', '');
    mainExchangeItemImg.src = '';
    dashboardDom.exchangeSection.classList.add('hido');
    oneVal.classList.add('hido');
    const targets = getChangeTargets();
    targets.forEach((element, index) => {
      if (index === 0) {
        element.innerHTML = 'No balance';
      }
    });
    return;
  }

  if (pending.length > 0) {
    const raw = pending[0][2] || '';
    const [symbol, amount] = String(raw).split(' ');
    const target = assets.find((asset) => asset.shortname === symbol);
    if (target) {
      const currentValue = Number(target.value || 0);
      const reduction = Number(amount || 0);
      const nextValue = currentValue - reduction;
      target.value = Number(nextValue);
      target.currencyValue = Number(nextValue) * Number(target.price || 0) * Number(user.curValue || 1);
    }
  }

  assets = assets.filter((asset) => asset.value !== 0 && asset.shortname && asset.name);
  currentAssets = assets;

  if (assets.length) {
    mainExchangeItem.setAttribute('id', String(assets[0].shortname).toLowerCase());
    mainExchangeItemImg.src = resolveAssetImage(assets[0], user);
    dashboardDom.exchangeSection.classList.remove('hido');
    oneVal.classList.remove('hido');
  } else {
    mainExchangeItem.setAttribute('id', '');
    mainExchangeItemImg.src = '';
    dashboardDom.exchangeSection.classList.add('hido');
    oneVal.classList.add('hido');
  }

  buildPayDropdown(assets);
  buildGetDropdown(Array.isArray(user.crypto) ? user.crypto : []);

  setLoadingState(true);
  await refreshLivePrices(Array.isArray(user.crypto) ? user.crypto : []);
  applyLivePricesToAssets(assets, user);
  updateTotals(assets, user);
  if (assetsDiv && assetsNav) {
    const displayAssets = assets.slice(0, 4);
    setAssetsLayout(displayAssets.length);
    assetsDiv.innerHTML = buildAssetsHtml(displayAssets, user, screen).join('</div>');
    assetsNav.innerHTML = '<p>Assets</p><a href="assets">View all</a>';
  }
  updateTotalChange(assets);
  updateCarouselPrices(user);
  updateExchangeRate();
  setLoadingState(false);

  exchange(user, document.querySelectorAll('.exchange-item'), document.querySelectorAll('.crypto-item'), assets);

  bindDropdownHandlers();
};
