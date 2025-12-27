(function () {
  const DEFAULT_API_IDS = {
    BTC: 'bitcoin',
    ETH: 'ethereum',
    USDT: 'tether',
    BNB: 'binancecoin',
  };

  const LOADING_GIF = '../assets/media/Loading.gif';

  const normalizeSymbol = (value) => String(value || '').trim().toUpperCase().replace(/[^A-Z]/g, '');

  const getApiIds = () => window.cryptoApiIds || DEFAULT_API_IDS;

  const resolveCoinId = (symbolOrId) => {
    const apiIds = getApiIds();
    const normalized = normalizeSymbol(symbolOrId);
    if (apiIds[normalized]) {
      return apiIds[normalized];
    }
    return String(symbolOrId || '').trim().toLowerCase();
  };

  const resolveSymbol = (symbolOrId) => {
    const apiIds = getApiIds();
    const normalized = normalizeSymbol(symbolOrId);
    if (apiIds[normalized]) {
      return normalized;
    }
    const coinId = String(symbolOrId || '').trim().toLowerCase();
    const found = Object.keys(apiIds).find((key) => apiIds[key] === coinId);
    return found || normalized || coinId.toUpperCase();
  };

  const getEndpoint = () => window.livePricesEndpoint || 'crypto_api.php';

  const ensureLivePrices = () => {
    window.liveCryptoPrices = window.liveCryptoPrices || {};
    return window.liveCryptoPrices;
  };

  const fetchPrice = async (symbolOrId, currency) => {
    const coinId = resolveCoinId(symbolOrId);
    if (!coinId) {
      return 0;
    }

    try {
      const cacheBust = Date.now();
      const response = await fetch(
        `${getEndpoint()}?command=getCryptoPrice&coin=${encodeURIComponent(
          coinId
        )}&currency=${encodeURIComponent(currency || 'usd')}&_=${cacheBust}`
      );
      const data = await response.json();
      let price = Number(data && data.price ? data.price : 0);
      if (!price) {
        const direct = await fetch(
          `https://api.coingecko.com/api/v3/simple/price?ids=${encodeURIComponent(
            coinId
          )}&vs_currencies=${encodeURIComponent(currency || 'usd')}&_=${cacheBust}`
        );
        const directData = await direct.json();
        price = Number(directData?.[coinId]?.[currency || 'usd'] || 0);
      }
      if (price > 0) {
        const symbol = resolveSymbol(symbolOrId);
        const prices = ensureLivePrices();
        prices[symbol] = price;
        return price;
      }
    } catch (error) {
      console.warn('Live price fetch failed', coinId, error);
      return 0;
    }

    return 0;
  };

  const fetchMarketChart = async (coinId, days, currency) => {
    const resolved = resolveCoinId(coinId);
    if (!resolved) {
      return [];
    }

    try {
      const cacheBust = Date.now();
      const response = await fetch(
        `${getEndpoint()}?command=getMarketChart&coin=${encodeURIComponent(
          resolved
        )}&days=${encodeURIComponent(days || 1)}&currency=${encodeURIComponent(
          currency || 'usd'
        )}&_=${cacheBust}`
      );
      const data = await response.json();
      return data && Array.isArray(data.prices) ? data.prices : [];
    } catch (error) {
      return [];
    }
  };

  const refreshPrices = async (items) => {
    const apiIds = getApiIds();
    const symbols = Array.isArray(items)
      ? items.map((item) =>
          typeof item === 'string' ? item : item && item.coincode ? item.coincode : ''
        )
      : Object.keys(apiIds);

    const unique = Array.from(
      new Set(
        symbols
          .map((symbol) => resolveSymbol(symbol))
          .filter((symbol) => symbol && apiIds[symbol])
      )
    );

    await Promise.all(
      unique.map(async (symbol) => {
        await fetchPrice(symbol, 'usd');
      })
    );

    return ensureLivePrices();
  };

  const getPrice = (symbol) => {
    const prices = ensureLivePrices();
    return Number(prices[resolveSymbol(symbol)] || 0);
  };

  const formatCurrency = (value) =>
    Number(Number(value || 0).toFixed(2)).toLocaleString('en-US');

  const parseAmount = (text) => {
    if (!text) {
      return 0;
    }
    const cleaned = String(text).replace(/[^0-9.]/g, '');
    return Number(cleaned || 0);
  };

  const maskWalletPrices = () => {
    const cards = Array.from(document.querySelectorAll('.standard-card--type-6-v1'));
    if (!cards.length) {
      return;
    }
    const loadingImg = `<img src="${LOADING_GIF}" alt="Loading" width="16" height="16">`;
    cards.forEach((card) => {
      const priceEl = card.querySelector('.standard-card__content-price-2');
      if (priceEl) {
        priceEl.innerHTML = loadingImg;
      }
    });
    document.querySelectorAll('.avail-balance-cont, .balance-cont').forEach((el) => {
      el.innerHTML = loadingImg;
    });
  };

  const updateWalletPrices = async () => {
    if (!document.querySelector('.wallet')) {
      return;
    }

    const cards = Array.from(document.querySelectorAll('.standard-card--type-6-v1'));
    if (!cards.length) {
      return;
    }

    const symbols = cards
      .map((card) => {
        const symbolEl = card.querySelector('.standard-card__content-currency-name');
        return normalizeSymbol(symbolEl ? symbolEl.textContent : '');
      })
      .filter((symbol) => symbol && symbol !== 'UNDEFINED');

    if (!symbols.length) {
      return;
    }

    maskWalletPrices();

    await refreshPrices(symbols);

    let total = 0;
    cards.forEach((card) => {
      const symbolEl = card.querySelector('.standard-card__content-currency-name');
      const symbol = normalizeSymbol(symbolEl ? symbolEl.textContent : '');
      if (!symbol || symbol === 'UNDEFINED') {
        card.style.display = 'none';
        return;
      }

      const amountEl = card.querySelector('.standard-card__content-price-1');
      const priceEl = card.querySelector('.standard-card__content-price-2');
      const amount = parseAmount(amountEl ? amountEl.textContent : '');
      const live = getPrice(symbol);
      if (!amount || !live) {
        return;
      }

      const usdValue = amount * live;
      total += usdValue;

      if (priceEl) {
        const prefixMatch = String(priceEl.textContent || '').match(/^[^\d]+/);
        const prefix = prefixMatch ? prefixMatch[0] : '$';
        priceEl.textContent = `${prefix}${formatCurrency(usdValue)}`;
      }
    });

    if (total > 0) {
      document.querySelectorAll('.avail-balance-cont, .balance-cont').forEach((el) => {
        const text = String(el.textContent || '').trim();
        const codeMatch = text.match(/[A-Z]{2,5}$/);
        const code = codeMatch ? codeMatch[0] : 'USD';
        el.textContent = `${formatCurrency(total)} ${code}`;
      });
    }
  };

  const startWalletUpdater = () => {
    maskWalletPrices();
    updateWalletPrices();
    setInterval(updateWalletPrices, 30000);

    const walletContainer = document.querySelector('.wallet .asset-div');
    if (walletContainer && window.MutationObserver) {
      const observer = new MutationObserver(() => {
        maskWalletPrices();
        updateWalletPrices();
      });
      observer.observe(walletContainer, { childList: true, subtree: true });
    }
  };

  window.LivePrices = {
    fetchPrice,
    fetchMarketChart,
    refreshPrices,
    getPrice,
    normalizeSymbol,
    resolveCoinId,
    resolveSymbol,
  };

  if (document.readyState === 'loading') {
    document.addEventListener('DOMContentLoaded', startWalletUpdater);
  } else {
    startWalletUpdater();
  }
})();
