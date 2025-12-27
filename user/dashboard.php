<?php
session_start();
foreach (glob("bundle/connect/platform.php") as $platform) {
	include $platform;
}
foreach (glob("bundle/connect/theme.php") as $theme) {
	include $theme;
}
foreach (glob("bundle/dashboard/index.php") as $index) {
	include $index;
}
foreach (glob("bundle/refer/refer.php") as $refer ){include $refer;}
      foreach (glob("bundle/refer/refer_earning.php") as $referer_earning ){include $referer_earning;}

// Cryptocurrency arrays
// Map cryptocurrency names to symbols
$crypto_symbols = array(
    'Bitcoin' => 'BTC',
    'Ethereum' => 'ETH',
    'Tether' => 'USDT',
    'BNB' => 'BNB',
);

// Map symbols to CoinGecko API IDs (lowercase names used in API)
$crypto_api_ids = array(
    'BTC' => 'bitcoin',
    'ETH' => 'ethereum',
    'USDT' => 'tether',
    'BNB' => 'binancecoin',
);

// Reverse mapping: API IDs to symbols
$crypto_id_to_symbol = array_flip($crypto_api_ids);

// Complete cryptocurrency data
$cryptocurrencies = array(
    'bitcoin' => array(
        'name' => 'Bitcoin',
        'symbol' => 'BTC',
        'icon' => '../assets/media/images/icons/Bitcoin.svg'
    ),
    'ethereum' => array(
        'name' => 'Ethereum',
        'symbol' => 'ETH',
        'icon' => '../assets/media/images/icons/ETH.svg'
    ),
    'tether' => array(
        'name' => 'Tether',
        'symbol' => 'USDT',
        'icon' => '../assets/media/images/icons/logo-usdt.svg'
    ),
    'binancecoin' => array(
        'name' => 'Binance Coin',
        'symbol' => 'BNB',
        'icon' => '../assets/media/images/icons/logo-bnb.svg'
    )
);

$crypto_icons = array();
foreach ($cryptocurrencies as $crypto_data) {
    $crypto_icons[$crypto_data['symbol']] = $crypto_data['icon'];
}

// Helper function to get crypto data by symbol
function getCryptoBySymbol($symbol) {
    global $crypto_api_ids, $cryptocurrencies;
    $api_id = $crypto_api_ids[$symbol] ?? null;
    return $api_id ? $cryptocurrencies[$api_id] : null;
}

// Helper function to get crypto data by API ID
function getCryptoById($api_id) {
    global $cryptocurrencies;
    return $cryptocurrencies[$api_id] ?? null;
}

// Helper function to get all crypto symbols
function getAllCryptoSymbols() {
    global $cryptocurrencies;
    return array_column($cryptocurrencies, 'symbol');
}

?> 
 

<!doctype html>
<html lang="en">

<meta http-equiv="content-type" content="text/html;charset=UTF-8" />

<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width,initial-scale=1" />
    <title class="notranslate"><?php echo(strip_tags($platform_name))?> | Dashboard</title>
    <meta content="<?php echo(strip_tags($platform_name))?> trading platform" class="notranslate" property="og:title">
    <meta content="<?php echo(strip_tags($platform_name))?> trading platform" class="notranslate" property="twitter:title">
    <meta name="description" content="<?php echo(strip_tags($platform_name))?> trading platform" class="notranslate" />
    <meta name="theme-color" content="#1E1F25">
    <link rel="stylesheet" href="../assets/plugins/swiper/swiper-bundle.min.css"/>
    <script src="../assets/plugins/swiper/swiper-bundle.min.js"></script>
    <link rel="stylesheet" href="css/vendor/assets/libs/sweetalert2/dist/sweetalert2.min.css" />
    <link rel="stylesheet" href="../assets/plugins/nice-select/nice-select.min.css" />
    <link rel="stylesheet" href="css/vendor/assets/extra-libs/taskboard/css/jquery-ui.min.css" />
    <link href="bundle/logo/<?php echo($icon)?>" rel="shortcut icon" type="image/x-icon" />
    <link href="../assets/css/styles.bundle.css" rel="stylesheet" />
    <link href="../assets/plugins/apexcharts/apexcharts.css" rel="stylesheet" />
    <link href="../assets/css/pages/dashboard-v1.css" rel="stylesheet" />
    <link href="<?php echo($style)?>" rel="stylesheet" />
    <script src="css/vendor/assets/libs/jquery/dist/jquery.min.js"></script>
    <style>
        .graph-area {
            margin-right: .4rem;
            border: none;
            outline: none;
        }

        .graph-area img {
            width: 120px;
            border: none;
            outline: none;
        }

        .withdraw-profit {
            margin-left: 2rem;
            outline: none;
            border: none;
            color: #fff;
            background: #1B65F2;
            font-weight: 100;
            font-size: 12px;
            padding: .25rem;
            border-radius: 9px;
            transition: all .5s ease-in;
        }

        .withdraw-profit:hover,  .withdraw-profit:focus,  .withdraw-profit:active {
            background: #133A83;
            color: #F7F7F7;
        }

        /* Carousel horizontal fix */
        .assets__carousel {
            display: flex;
            flex-direction: row;
            gap: 1rem;
            overflow-x: auto;
            overflow-y: hidden;
            scroll-behavior: smooth;
            -webkit-overflow-scrolling: touch;
            padding-bottom: 1rem;
        }

        .assets__carousel::-webkit-scrollbar {
            height: 6px;
        }

        .assets__carousel::-webkit-scrollbar-track {
            background: rgba(255, 255, 255, 0.1);
            border-radius: 10px;
        }

        .assets__carousel::-webkit-scrollbar-thumb {
            background: rgba(255, 255, 255, 0.3);
            border-radius: 10px;
        }

        .assets__carousel .assets__item {
            flex: 0 0 auto;
            min-width: 280px;
            max-width: 320px;
        }

        .assets {
            width: 100%;
            position: relative;
        }

        /* Header and content spacing fix */
        body {
            padding-top: 0 !important;
            margin-top: 0 !important;
        }

        .header {
            position: relative !important;
            background: #1E1F25;
            padding-top: 0 !important;
            margin-top: 0 !important;
        }

        .header .to-add.container {
            padding-top: 0.5rem;
            padding-bottom: 0.5rem;
        }

        .dashboard.dash-body {
            margin-top: 0;
            padding-top: 1rem;
        }

        .container.container--dashboard {
            padding-top: 0;
        }

        .complete-card.complete-card--type-1-v1.main-board {
            margin-top: 0;
        }
        .header.transparent {
            padding: 0 !important;
            position: relative !important;
            width: 100%;
            top: 0;
            background-color: #141518 !important;
            /* border-bottom: 1px solid #9295AB !important; */
            border: 0;
            left: 0;
            z-index: 999;
        }

        /* Growth Monitor styling fix */
        .current-chart-info {
            min-height: 40px;
            display: flex;
            flex-direction: column;
            gap: 0.4rem;
        }

        .current-chart-info:empty::before {
            content: "Loading...";
            color: #9295AB;
            font-size: 13px;
        }

        /* Hide NaN values */
        .current-chart-info:has(*:empty) {
            display: none;
        }

        .complete-card__head-title {
            margin-bottom: 0;
        }

        .growth-dot {
            display: inline-block;
            width: 8px;
            height: 8px;
            background: #4CAF50;
            border-radius: 50%;
            margin-left: 8px;
            animation: pulse 2s infinite;
        }

        @keyframes pulse {
            0%, 100% {
                opacity: 1;
            }
            50% {
                opacity: 0.5;
            }
        }

        /* Fix Growth Monitor tabs */
        .complete-card__head-tabs .nav-link {
            cursor: pointer;
            transition: all 0.3s ease;
        }

        .complete-card__head-tabs .nav-link:hover {
            opacity: 0.8;
        }

        .complete-card__head-tabs .nav-link.active {
            color: #fff !important;
            font-weight: bold;
        }

        .dropdown-menu .dropdown-item {
            cursor: pointer;
        }

        .dropdown-menu .dropdown-item.active {
            background-color: #1B65F2;
            color: #fff;
        }

        /* Hide undefined/NaN in tooltips */
        .apexcharts-tooltip-title:empty {
            display: none !important;
        }

        .apexcharts-tooltip:empty {
            display: none !important;
        }

        /* Hide tooltips containing undefined */
        .apexcharts-tooltip-text-y-value:contains('undefined'),
        .apexcharts-tooltip-title:contains('undefined') {
            display: none !important;
        }

    </style>
    <script>window.cryptoApiIds = <?php echo json_encode($crypto_api_ids); ?>;</script>
    <script>window.cryptoIcons = <?php echo json_encode($crypto_icons); ?>;</script>
</head>

<body class="">
<div id="google_translate_element"></div>

    <!-- Preloader -->
	<div id="preloader">
		<div class="spinney"></div>
	</div>
    <!-- Preloader end-->

    <!-- Header -->
    <?php
    $activePage = 'dashboard';
    $headerContainerClass = 'to-add container';
    $showTopBalance = true;
    $linkDashboard = '#';
    $linkWallet = 'wallet';
    $linkMarket = 'market';
    include 'bundle/header.php';
    ?>
    <!-- Header End -->

    
    <div class="dashboard dash-body dashboard--v1">
    <ul style="display: none;">
        <li id="user_id">
            <?php echo($id)?>
        </li>
        <li id="user_email">
            <?php echo($email)?>
        </li>
        <li id="user_fname">
            <?php echo($fname)?>
        </li>
        <li id="user_lname">
            <?php echo($lname)?>
        </li>
        <li id="user_country">
            <?php echo($country)?>
        </li>
        <li id="user_phone">
            <?php echo($phone)?>
        </li>
        <li id="ref_code">
            <?php echo($ref_code)?>
        </li>
        <li id="currency_code">
            <?php echo($ip_addr)?>
        </li>
        <li id="screen">
            <?php echo($profit)?>
        </li>
        <li id="verif_complete">
            <?php echo($verif_complete)?>
        </li>
        <li id="verif_status">
            <?php echo($verif_status)?>
        </li>
        <li id="user_account_detail">
            <?php require 'bundle/connect/useraccountget.php' ?>
        </li>
        <li id="admin_wallet">
            <?php require 'bundle/connect/walletadminget.php' ?>
        </li>
        <li id="referral_earnings">
            <?php require 'bundle/connect/referralget.php' ?>
        </li>
    </ul>
        <div class="container container--dashboard">
            <div class="dashboard__group">
                <div class="complete-card complete-card--type-1-v1 main-board">
                    <div class="complete-card__balance">
                        <div class="complete-card__balance-head">
                            <div class="complete-card__balance-head__title">
                                <h6 class="complete-card__balance-head__title-text">Total Balance</h6>
                                <div class="complete-card__balance-head__title-influsion">
                                    <p
                                        class="fb-regular fb-regular--bold complete-card__balance-head__title-influsion-value text-bullish">
                                        <div class="balance-crypto-area">
                                        <img
                                            class="standard-card__content-arrow hido total-balance-arrow"
                                            src="" alt="">
                                            <p class="standard-card__content-percentage total-balance-change"></p></div></p>
                                </div>
                            </div>
                            <div class="balance-string">
                                <div class="balance-usd complete-card__balance-head__value"><span class="notranslate"><?php echo($ip_addr)?></span> 0</div>
                                
                            </div>
                        </div>
                        <div class="complete-card__balance-revenue">
                            <div class="complete-card__balance-revenue__income">
                                <div class="balance-revenue__income-title"><img
                                        src="../assets/media/images/icons/arrow-bullish.svg" alt=""
                                        class="balance-revenue__income-title-icon">
                                    <p class="fb-regular balance-revenue__income-title-text">Free Margin</p>
                                </div>
                                <p class="fd-sm fd-sm--bold balance-revenue__income-value"><span class="notranslate"><?php echo($ip_addr)?></span> 0</p>
                            </div>
                            <div class="complete-card__balance-revenue__separator"></div>
                            <div class="complete-card__balance-revenue__expenses">
                                <div class="balance-revenue__expenses-title"><img
                                        src="../assets/media/images/icons/arrow-bearish.svg" alt=""
                                        class="balance-revenue__expenses-title-icon">
                                    <p class="fb-regular balance-revenue__expenses-title-text">Equity</p>
                                </div>
                                <p class="fd-sm fd-sm--bold balance-revenue__expenses-value"><span class="notranslate"><?php echo($ip_addr)?></span> 0</p>
                            </div>
                        </div>
                    </div>
                    <div class="complete-card__separator"></div>
                    <!-- start-area-start -->
                    <div class="complete-card__wallet start-area">
                        
                        <div class="complete-card__wallet-head">
                            <h6 class="complete-card__wallet-head__title-text">Start Trading</h6>
                            <p class="fb-regular complete-card__wallet-head__title-total-currencies">Secure</p>
                        </div>
                        <div class="complete-card__wallet-data">
                            <div class="complete-card__wallet-data__chart pulse-wrapper">
                                <div class="centy">
                                    <button class="pulse pulser start-btn" id="">
                                        Start
                                    </button>
                                </div>
                            </div>
                            <div class="complete-card__wallet-data__currencies">
                                <div class="wallet-data__currency"><img src="../assets/media/images/icons/transaction-arrow-green.svg"
                                        alt="" class="wallet-data__currency-icon">
                                    <div class="wallet-data__currency-text">
                                        <p class="fb-regular fb-regular--bold wallet-data__currency-text-acronym" id="start-step-1">
                                             -<span></span>
                                        </p>
                                        <p class="fb-regular wallet-data__currency-text-name">Crypto</p>
                                    </div>
                                    
                                </div>
                                <div class="wallet-data__currency"><img src="../assets/media/images/icons/transaction-arrow-green.svg"
                                        alt="" class="wallet-data__currency-icon">
                                    <div class="wallet-data__currency-text">
                                        <p class="fb-regular fb-regular--bold wallet-data__currency-text-acronym" id="start-step-2">
                                            -<span></span>
                                        </p>
                                        <p class="fb-regular wallet-data__currency-text-name">Wallet</p>
                                    </div>
                                   
                                </div>
                                <div class="wallet-data__currency"><img src="../assets/media/images/icons/transaction-arrow-green.svg"
                                        alt="" class="wallet-data__currency-icon">
                                    <div class="wallet-data__currency-text">
                                        <p class="fb-regular fb-regular--bold wallet-data__currency-text-acronym" id="start-step-3">
                                            -<span></span>
                                        </p>
                                        <p class="fb-regular wallet-data__currency-text-name">Trade</p>
                                    </div>
                                    
                                </div>
                            </div>
                        </div>
                        <div class="dash-buttons-board">
                            <div class="box dep">
                                <div class="icon">
                                    <svg viewBox="0 0 24 24" width="30" height="30" xmlns="http://www.w3.org/2000/svg"><title/><path d="M18,20H6a1,1,0,0,1,0-2H18a1,1,0,0,1,0,2Z" fill="#ffffff"/><path d="M15.92,11.62A1,1,0,0,0,15,11H13V5a1,1,0,0,0-2,0v6H9a1,1,0,0,0-.92.62,1,1,0,0,0,.21,1.09l3,3a1,1,0,0,0,.33.21.94.94,0,0,0,.76,0,1,1,0,0,0,.33-.21l3-3A1,1,0,0,0,15.92,11.62Z" fill="#ffffff"/></svg>
                                </div>
                                <div class="title">Deposit</div>
                            </div>
                            <div class="box swap">
                                <div class="icon">
                                    <svg height="30" viewBox="0 0 21 21" width="30" xmlns="http://www.w3.org/2000/svg"><g fill="ffffff" fill-rule="evenodd" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" transform="matrix(0 1 -1 0 18.5 2.5)"><g transform="matrix(0 -1 1 0 .5 16.5)"><path d="m16 0v5h-5" transform="matrix(0 1 1 0 11 -11)"/><path d="m16 5c-2.8366699-3.33333333-5.6700033-5-8.5-5-2.82999674 0-5.32999674 1-7.5 3"/></g><g transform="matrix(0 1 -1 0 14 1)"><path d="m16 0v5h-5" transform="matrix(0 1 1 0 11 -11)"/><path d="m16 5c-2.8366699-3.33333333-5.6700033-5-8.5-5-2.82999674 0-5.32999674 1-7.5 3"/></g></g></svg>
                                </div>
                                <div class="title">Swap</div>
                            </div>
                            <div class="box sell <?php echo($hidebuysell)?>">
                                <div class="icon">
                                    <svg class="bi bi-dash" fill="currentColor" height="30" viewBox="0 0 16 16" width="30" xmlns="http://www.w3.org/2000/svg"><path d="M4 8a.5.5 0 0 1 .5-.5h7a.5.5 0 0 1 0 1h-7A.5.5 0 0 1 4 8z"/></svg>
                                </div>
                                <div class="title">Sell</div>
                            </div>
                            <div class="box send">
                                <div class="icon">
                                    <svg fill="currentColor" height="34" width="34" viewBox="-5 -5 24 24" width="24" xmlns="http://www.w3.org/2000/svg"><path d="M8 3.414v5.642a1 1 0 1 1-2 0V3.414L4.879 4.536A1 1 0 0 1 3.464 3.12L6.293.293a1 1 0 0 1 1.414 0l2.829 2.828A1 1 0 1 1 9.12 4.536L8 3.414zM1 12h12a1 1 0 0 1 0 2H1a1 1 0 0 1 0-2z"/></svg>
                                </div>
                                <div class="title">Send</div>
                            </div>
                        </div>
                    </div>
                    <!-- start-area-end -->
                    <div class="assets-nav"></div>
                    <div class="assets-div"></div>
                </div>
                
                <!-- Investment start -->
                <div id="investments" class="standard-card standard-card--type-5-v2">
                    <div class="container">
                        <div class="standard-card__head">
                            <h6 class="standard-card__title">Investments <span style="font-size: 11.5px;">(click on any for details)</span></h6>
                        </div>
                        <div class="standard-card__content investments-area"></div>
                        <div class="standard-card__vignette"></div>
                    </div>
                    
                </div>
                <!-- Investment end -->



                <div id="exchange" class="advance-card advance-card--type-1-v1">
                    <div class="advance-card__title">
                        <h6 class="advance-card__title-text">Exchange</h6><p class="exchange-bal"><span class="cur-balance-crypto"></span><span style="color: #9295AB;" class="cur-pay-coin"></span></p>
                    </div>
                    <div class="advance-card__price">
                        <div class="advance-card__price-crypto">
                            <p class="advance-card__price-crypto-value one-val">1</p>
                            <p class="advance-card__price-crypto-name cur-pay-coin">BTC</p>
                        </div><img src="../assets/media/images/icons/arrow-right-white.svg" alt=""
                            class="advance-card__price-arrow">
                        <div class="advance-card__price-currency">
                            <p class="advance-card__price-currency-value cur-coin-price"></p>
                            <p class="advance-card__price-currency-name cur-get-coin">USDT</p>
                        </div>
                    </div>
                    <div class="advance-card__forms-currency">
                        <div class="advance-card__forms-currency--get">
                            <p class="advance-card__forms-currency__title">Pay</p>
                            <div class="forms-currency forms-currency--advance-card">
                                <div class="forms-group forms-group--value"><input id="pay-value" type="number" min="0" value=""
                                        class="form-control forms-currency__value"></div>
                                <div class="forms-currency__line"></div>
                                <div class="forms-group forms-group--currency js-forms-group--currency"
                                    id="custom-select-currency-1">
                                    <div class="forms-group__items main-exchange-item exchange-item selected active" data-selected="btc"><img
                                            class="fg-items__icon main-exchange-item-img" src="" alt="">
                                    </div><img class="forms-currency__icon-arrow-down"
                                        src="../assets/media/images/icons/arrow-down.svg" alt="">
                                    <div class="forms-group__dropdown js-forms-group__dropdown pay-dropdown">
                                        
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="advance-card__forms-currency--pay">
                            <p class="advance-card__forms-currency__title">Get</p>
                            <div class="forms-currency forms-currency--advance-card">
                                <div class="forms-group forms-group--value"><input readonly id="get-value" type="number" min="0" value="0"
                                        class="form-control forms-currency__value"></div>
                                <div class="forms-currency__line"></div>
                                <div class="forms-group forms-group--currency js-forms-group--currency"
                                    id="custom-select-currency-2">
                                    <div class="forms-group__items crypto-item active selected" id="usd" data-selected="usd"><img
                                            class="fg-items__icon" src="../assets/media/images/icons/usdt.svg"
                                            alt=""></div>
                                            
                                            <img class="forms-currency__icon-arrow-down"
                                        src="../assets/media/images/icons/arrow-down.svg" alt="">
                                    <div class="forms-group__dropdown js-forms-group__dropdown get-select get-dropdown">
                                        <?php foreach($cryptocurrencies as $crypto_id => $crypto_data):
                                            $symbol_lower = strtolower($crypto_data['symbol']);
                                        ?>
                                        <div class="forms-group__items crypto-item" id="<?php echo $symbol_lower; ?>" data-selected="<?php echo $symbol_lower; ?>"><img
                                                class="fg-items__icon" src="<?php echo $crypto_data['icon']; ?>"
                                                alt=""></div>
                                        <?php endforeach; ?>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div><button class="advance-card__button btn btn-primary btn-pill" id="exch-btn">Exchange</button>
                </div>
                <!-- copy -->
                <div class="complete-card complete-card--type-2-v1">
                    <div class="complete-card__head">
                        <div style="display: flex; flex-direction: column; gap: .3rem;">
                        <h6 style="display: flex;" class="complete-card__head-title">Growth Monitor <span class="growth-dot"></span></h6>
                        <div class="current-chart-info" style="display: flex; flex-direction: column; width: 100%; gap: .4rem;"> </div>
                        </div>
                        <nav class="navbar">
                            <ul class="complete-card__head-tabs" id="pills-tab" role="tablist">
                               
                                <li class="complete-card__head-tab nav-item">
                                    <p class="complete-card__head-tab-text nav-link" id="pills-overall-line-24-h-tab"
                                        data-bs-toggle="pill" data-bs-target="#pills-overall-line-24-h" role="tab"
                                        aria-controls="pills-overall-line-24-h" aria-selected="false">24 hours</p>
                                </li>
                                <li class="complete-card__head-tab nav-item">
                                    <p class="complete-card__head-tab-text nav-link active" id="pills-overall-line-1-w-tab"
                                        data-bs-toggle="pill" data-bs-target="#pills-overall-line-1-w" role="tab"
                                        aria-controls="pills-overall-line-1-w" aria-selected="true">1 week</p>
                                </li>
                                
                            </ul>
                        </nav>
                        <div class="dropdown complete-card__dropdown"><button class="btn btn-secondary dropdown-toggle"
                                type="button" id="dropdownMenuButton1" data-bs-toggle="dropdown" aria-expanded="false">1
                                week <img src="../assets/media/images/icons/arrow-down.svg" alt=""></button>
                            <ul class="dropdown-menu" aria-labelledby="dropdownMenuButton1" id="pills-tab"
                                role="tablist">
                               
                                <li><a class="dropdown-item" href="#" id="pills-overall-line-24-h-tab"
                                        data-bs-toggle="pill" data-bs-target="#pills-overall-line-24-h" role="tab"
                                        aria-controls="pills-overall-line-24-h" aria-selected="false">24 hours</a></li>
                                <li><a class="dropdown-item active" href="#" id="pills-overall-line-1-w-tab"
                                        data-bs-toggle="pill" data-bs-target="#pills-overall-line-1-w" role="tab"
                                        aria-controls="pills-overall-line-1-w" aria-selected="true">1 week</a></li>
                                
                            </ul>
                        </div>
                    </div>
                    
                    <div class="tab-content">
                        
                        <!-- 24 hours -->
                        <div class="tab-pane fade" id="pills-overall-line-24-h" role="tabpanel"
                            aria-labelledby="pills-overall-line-24-h-tab">
                            <div class="complete-card__chart-wrapper">
                                <div id="complete-card__chart-area-3" class="complete-card__chart-render"></div>
                                <div class="complete-card__chart-area-vignette--left"></div>
                                <div class="complete-card__chart-area-vignette--top"></div>
                                <div class="complete-card__chart-area-vignette--right"></div>
                            </div>
                        </div>
                        <!-- 1 week -->
                        <div class="tab-pane fade show active" id="pills-overall-line-1-w" role="tabpanel"
                            aria-labelledby="pills-overall-line-1-w-tab">
                            <div class="complete-card__chart-wrapper">
                                <div id="complete-card__chart-area-4" class="complete-card__chart-render"></div>
                                <div class="complete-card__chart-area-vignette--left"></div>
                                <div class="complete-card__chart-area-vignette--top"></div>
                                <div class="complete-card__chart-area-vignette--right"></div>
                            </div>
                        </div>
                       
                        
                    </div>
                </div>
                <div class="assets">
                    <div class="assets__carousel">
                        <?php foreach($cryptocurrencies as $crypto_id => $crypto_data):
                            $symbol_lower = strtolower($crypto_data['symbol']);
                        ?>
                        <div class="standard-card standard-card--type-3-v1 assets__item">
                            <div class="container">
                                <div class="standard-card__content">
                                    <div class="standard-card__content-graph"><img
                                            src="<?php echo $crypto_data['icon']; ?>" alt=""
                                            class="standard-card__content-image">
                                        <div class="standard-card__content-chart-wrapper graph-area">
                                            <img class="<?php echo $symbol_lower; ?>-graph" src="" alt="">
                                        </div>
                                    </div>
                                    <div class="standard-card__content-percentage"><img
                                            class="standard-card__content-arrow <?php echo $symbol_lower; ?>-arrow"
                                            src="" alt="">
                                        <p class="standard-card__content-value <?php echo $symbol_lower; ?>-change"></p>
                                    </div>
                                    <div class="standard-card__content-desc">
                                        <p class="standard-card__content-desc-currency"><?php echo $crypto_data['name']; ?></p>
                                        <div class="standard-card__content-desc-prices">
                                            <p class="standard-card__content-desc-price <?php echo $symbol_lower; ?>-price"><span class="notranslate"><?php echo($ip_addr)?></span> 0.00</p>
                                            <p class="standard-card__content-desc-token"><?php echo $crypto_data['symbol']; ?></p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <?php endforeach; ?>
                    </div>
                    <div class="slick__pagination">
                        <div class="assets-carousel__arrows"><a href="#" class="assets-carousel__prev"><img
                                    src="../assets/media/images/icons/light-circle-arrow-left.svg" alt="Previous">
                            </a><a href="#" class="assets-carousel__next"><img
                                    src="../assets/media/images/icons/light-circle-arrow-right.svg" alt="Next"></a>
                        </div>
                        <div class="assets-carousel__pagination slick__pagination--dots">
                            <div class="assets-carousel__slick-slider-dots slick-slider-dots"></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Menubar -->
	<div class="menubar-area">
		<div class="toolbar-inner menubar-nav">
			<a href="#" class="nav-link active">
				<svg xmlns="http://www.w3.org/2000/svg" width="22" height="22" fill="none" xmlns:v="https://vecta.io/nano"><path d="M21.44 11.035a.75.75 0 0 1-.69.465H18.5V19a2.25 2.25 0 0 1-2.25 2.25h-3a.75.75 0 0 1-.75-.75V16a.75.75 0 0 0-.75-.75h-1.5a.75.75 0 0 0-.75.75v4.5a.75.75 0 0 1-.75.75h-3A2.25 2.25 0 0 1 3.5 19v-7.5H1.25a.75.75 0 0 1-.69-.465.75.75 0 0 1 .158-.818l9.75-9.75A.75.75 0 0 1 11 .246a.75.75 0 0 1 .533.222l9.75 9.75a.75.75 0 0 1 .158.818z" fill="#b5b5b5"/></svg>
			</a>
            
            <a href="wallet" class="nav-link">
            <svg viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg" width="22" height="22" fill="#b5b5b5"><path d="M0 4c0-1.1.9-2 2-2h15a1 1 0 0 1 1 1v1H2v1h17a1 1 0 0 1 1 1v10a2 2 0 0 1-2 2H2a2 2 0 0 1-2-2V4zm16.5 9a1.5 1.5 0 1 0 0-3 1.5 1.5 0 0 0 0 3z"/></svg>
			</a>
			
			<a href="market" class="nav-link">
            <svg viewBox="0 0 576 512" xmlns="http://www.w3.org/2000/svg" width="30" height="30" fill="#b5b5b5"><path d="M576 128v160c0 17.67-14.31 32-32 32s-32-14.33-32-32V205.3l-169.4 169.4C336.4 380.9 328.2 384 320 384s-16.38-3.125-22.62-9.375L192 269.3l-137.4 137.4C48.38 412.9 40.19 416 32 416c-18.28 0-32-14.95-32-32c0-8.188 3.125-16.38 9.375-22.62l160-160C175.6 195.1 183.8 192 192 192s16.38 3.125 22.62 9.375L320 306.8L466.8 160H384c-17.69 0-32-14.33-32-32s14.31-32 32-32h160C560.8 96 576 109.4 576 128z"/></svg>
			</a>

            
			<p class="nav-link side-opener">
				<svg xmlns="http://www.w3.org/2000/svg" width="16" height="21" fill="#b5b5b5" xmlns:v="https://vecta.io/nano"><path d="M8 7.75a3.75 3.75 0 1 0 0-7.5 3.75 3.75 0 1 0 0 7.5zm7.5 9v1.5c-.002.199-.079.39-.217.532C13.61 20.455 8.57 20.5 8 20.5s-5.61-.045-7.282-1.718C.579 18.64.501 18.449.5 18.25v-1.5a7.5 7.5 0 1 1 15 0z"/></svg>
            </p>
		</div>
	</div>
	<!-- Menubar --> 
    
        <div class="floating-pulse <?php echo($start_pos)?> hider">
            <div class="cont start-btn">
                <svg width="94px" height="94px" viewBox="0 0 42 42" class="donut">
                    <circle id="d1" cx="21" cy="21" r="15.91549430918954" stroke-dasharray="100 0" stroke-dashoffset="100"></circle>
                    <circle id="d2" cx="21" cy="21" r="15.91549430918954" stroke-dasharray="0 100" stroke-dashoffset="0"></circle>
                    
                </svg>
                <div class="">
                        <button class="pulse pulser start-float" id="">
                            Start
                        </button>
                </div>
            </div>
        </div>
        <div class="admin-support hido"><?php echo($platform_email)?></div>
        <div class="referral-percent hido"><?php echo($referralpercent)?></div>
        <div class="referral-instance hido"><?php echo($refinstance)?></div>
        <div class="verif-dep hido"><?php echo($dep)?></div>
        <div class="verif-withd hido"><?php echo($withd)?></div>
        <div class="verif-inv hido"><?php echo($inv)?></div>
        <div class="end_detail hido"><?php echo($domain_url)?></div>
        <div class="platform-name hido"><?php echo(strip_tags($platform_name))?></div>
        <div class="logo-link hido"><?php echo($icon)?></div>
        <div class="investment-pass hido"><?php echo($investment)?></div>
        <div class="loan-pass hido"><?php echo($loan)?></div>
        <div class="buysell-pass hido"><?php echo($buysell)?></div>
        <div class="p2psend-pass hido"><?php echo($p2psend)?></div>
        <div class="coinpayments-pass hido"><?php echo($coinpayments)?></div>
        <div class="flutterwave-pass hido"><?php echo($flutterwave)?></div>
        <div class="coingate-pass hido"><?php echo($coingate)?></div>
    </div>

    <script>
	// jQuery loaded in head, so $ is now available
	$(document).ready(function () {
  $(".control").click(function () {
    var spinner = $(this).closest("div").find("div[class*='spinner-']");
    $(spinner).toggleClass("stop");

    if ($(this).text() == "Play") {
      $(this).text("Stop");
    } else {
      $(this).text("Play");
    }
  });

  // Fix NaN display in Growth Monitor
  setInterval(function() {
    $('.current-chart-info').each(function() {
      var text = $(this).text();
      if (text.includes('NaN')) {
        $(this).html(text.replace(/NaN/g, '0').replace(/\+0%/g, '--'));
      }
    });
  }, 1000);

  // Update Growth Monitor with real crypto history (CoinGecko)
  async function updateGrowthMonitor() {
    var apiIds = window.cryptoApiIds || {};
    var icons = window.cryptoIcons || {};
    var symbols = Object.keys(apiIds);
    if (!symbols.length || typeof ApexCharts === 'undefined') return;

    function toPercentSeries(prices) {
      if (!prices || prices.length < 2) return null;
      var base = prices[0][1];
      if (!base) return null;
      return prices.map(function(point) {
        return ((point[1] - base) / base) * 100;
      });
    }

    function toLabels(prices, isDay) {
      return prices.map(function(point) {
        var date = new Date(point[0]);
        return isDay
          ? date.toLocaleTimeString('en-GB', { hour: '2-digit', minute: '2-digit' })
          : date.toLocaleDateString('en-GB', { day: 'numeric', month: 'short' });
      });
    }

    function downsample(series, labels, target) {
      if (!series || series.length === 0) return { series: [], labels: [] };
      if (series.length <= target) return { series: series, labels: labels };
      var outSeries = [];
      var outLabels = [];
      for (var i = 0; i < target; i++) {
        var idx = Math.round(i * (series.length - 1) / (target - 1));
        outSeries.push(series[idx]);
        outLabels.push(labels[idx] || '');
      }
      return { series: outSeries, labels: outLabels };
    }

    function updateChart(chartId, series, labels) {
      if (!series || series.length === 0) return;
      var barData = series.map(function(value) {
        return Math.abs(value) * 0.2;
      });
      var min = Math.min.apply(null, series.concat(barData));
      var max = Math.max.apply(null, series.concat(barData));
      ApexCharts.exec(chartId, 'updateOptions', {
        series: [
          { name: 'Change', type: 'line', data: series },
          { name: 'Change', type: 'line', data: series },
          { name: 'Bar', type: 'column', data: barData }
        ],
        xaxis: { categories: labels },
        yaxis: {
          min: Math.floor(Math.min(0, min - 1)),
          max: Math.ceil(Math.max(1, max + 1))
        }
      }, false, true);
    }

    var bestSymbol = null;
    var bestChange = -Infinity;
    var bestDaySeries = null;
    var bestDayLabels = null;
    var bestWeekSeries = null;
    var bestWeekLabels = null;

    for (var i = 0; i < symbols.length; i++) {
      var symbol = symbols[i];
      var apiId = apiIds[symbol];
      try {
        var dayPrices = window.LivePrices
          ? await window.LivePrices.fetchMarketChart(apiId, 1, 'usd')
          : [];
        var weekPrices = window.LivePrices
          ? await window.LivePrices.fetchMarketChart(apiId, 7, 'usd')
          : [];
        var daySeries = toPercentSeries(dayPrices);
        if (!daySeries || daySeries.length === 0) continue;

        var change = daySeries[daySeries.length - 1];
        if (change > bestChange) {
          bestChange = change;
          bestSymbol = symbol;
          bestDaySeries = daySeries;
          bestDayLabels = toLabels(dayPrices, true);
          bestWeekSeries = toPercentSeries(weekPrices);
          bestWeekLabels = weekPrices ? toLabels(weekPrices, false) : [];
        }
      } catch (e) {}
    }

    if (!bestSymbol || !bestDaySeries) return;

    var dayPack = downsample(bestDaySeries, bestDayLabels, 14);
    var weekPack = downsample(bestWeekSeries || bestDaySeries, bestWeekLabels || bestDayLabels, 12);
    updateChart('growth-day', dayPack.series, dayPack.labels);
    updateChart('growth-week', weekPack.series, weekPack.labels);

    var currentChartInfo = $('.current-chart-info');
    if (currentChartInfo.length > 0) {
      var changeText = (bestChange > 0 ? '+' : '') + bestChange.toFixed(2);
      var changeColor = bestChange > 0 ? '#11CABE' : '#D82122';
      var icon = icons[bestSymbol] || '';
      var html = '<p style="display: flex; align-items: center; gap: .3rem;">' +
                 '<img class="fg-items__icon" style="width: 19px;" src="' + icon + '" alt="">' +
                 '<span style="font-weight: bold;">' + bestSymbol + '</span>' +
                 '<span style="width: 10px; height: 4px; background: #BD47FB;"></span></p>' +
                 '<p><span style="font-size: 12px;"><span style="color: ' + changeColor + ';">' + changeText + '%</span> in 24 hours</span></p>';
      currentChartInfo.html(html);
    }
  }

  // Update immediately and then every 60 seconds
  updateGrowthMonitor();
  setInterval(updateGrowthMonitor, 60000);

  // Fix tab switching for Growth Monitor
  setTimeout(function() {
    // Handle navbar tabs
    $('#pills-tab .nav-link').off('click').on('click', function(e) {
      e.preventDefault();
      var target = $(this).data('bs-target');

      // Remove active from all tabs
      $('#pills-tab .nav-link').removeClass('active');
      $('.tab-pane').removeClass('show active');

      // Add active to clicked tab
      $(this).addClass('active');
      $(target).addClass('show active');

      // Update dropdown text for mobile
      var tabText = $(this).text().trim();
      $('#dropdownMenuButton1').html(tabText + ' <img src="../assets/media/images/icons/arrow-down.svg" alt="">');
    });

    // Handle dropdown items (mobile)
    $('.dropdown-menu .dropdown-item').off('click').on('click', function(e) {
      e.preventDefault();
      var target = $(this).data('bs-target');

      // Remove active from all
      $('.dropdown-menu .dropdown-item').removeClass('active');
      $('#pills-tab .nav-link').removeClass('active');
      $('.tab-pane').removeClass('show active');

      // Add active
      $(this).addClass('active');
      var correspondingNavLink = $('#pills-tab .nav-link[data-bs-target="' + target + '"]');
      correspondingNavLink.addClass('active');
      $(target).addClass('show active');

      // Update dropdown button text
      var tabText = $(this).text().trim();
      $('#dropdownMenuButton1').html(tabText + ' <img src="../assets/media/images/icons/arrow-down.svg" alt="">');
    });
  }, 500);

  // Simple fix for tooltips - just hide "undefined" text
  setInterval(function() {
    $('.apexcharts-tooltip').each(function() {
      var $tooltip = $(this);
      var text = $tooltip.text();

      if (text.includes('undefined')) {
        $tooltip.find('.apexcharts-tooltip-title').each(function() {
          if ($(this).text() === 'undefined') {
            $(this).hide();
          }
        });

        $tooltip.find('.apexcharts-tooltip-series-group').each(function() {
          var seriesText = $(this).text();
          if (seriesText.includes('undefined')) {
            $(this).find('.apexcharts-tooltip-text-y-label').each(function() {
              if ($(this).text() === 'undefined:') {
                $(this).text('');
              }
            });
          }
        });
      }
    });
  }, 100);
});

	</script>


<script>

    // Preloader ============
var handlePreloader = function(){
  setTimeout(function() {
          jQuery('#preloader').fadeOut(300);
  },300);
};
handlePreloader();


var headerProfileAvatar = document.getElementById("avatarWrapper")
var headerProfileDropdownArrow = document.getElementById("dropdownWrapperArrow");
var headerProfileDropdown = document.getElementById("dropdownWrapper");

document.addEventListener("click", function(event) {
  var headerProfileDropdownClickedWithin = headerProfileDropdown.contains(event.target);
  
  if (!headerProfileDropdownClickedWithin) {
    if (headerProfileDropdown.classList.contains("active")) {
      headerProfileDropdown.classList.remove("active");
      headerProfileDropdownArrow.classList.remove("active");
    }
  }
});

headerProfileAvatar.addEventListener("click", function(event) {
  headerProfileDropdown.classList.toggle("active");
  headerProfileDropdownArrow.classList.toggle("active");
  event.stopPropagation();
});

</script>
    <?php if(!empty($file)): ?>
    <script src="<?php echo $file; ?>"></script>
    <?php endif; ?>
    <script>
        window.locales = window.locales || ['en'];
        window.googleTranslateElementInit = function(){
            const langs = Array.isArray(window.locales) ? window.locales : ['en'];
            if (typeof window.languages === 'undefined' || !window.languages) {
                window.languages = Array.isArray(langs) ? langs.join(',') : langs;
            }
            if (typeof google === 'undefined' || !google.translate || !google.translate.TranslateElement) {
                console.warn('google translate API not available');
                return;
            }
            new google.translate.TranslateElement({pageLanguage: 'en', includedLanguages: window.languages, layout: google.translate.TranslateElement.InlineLayout.SIMPLE}, 'google_translate_element');
        };
    </script>
    <?php
    $includeSweetAlert = true;
    $includeNiceSelect = true;
    $includeJqueryUi = true;
    $includeTranslate = true;
    $includeGoogleTranslate = false;
    $includeApexCharts = true;
    $includeSlick = true;
    $includeLivePrices = true;
    $includeHaptics = true;
    $pageModule = $js . 'dashboard.js';
    include 'bundle/scripts.php';
    ?>
    <script>
        // Complete AJAX Request function
        function sendAjaxRequest(url, method, data, successCallback, errorCallback) {
            $.ajax({
                url: url,
                type: method || 'GET',
                data: data || {},
                dataType: 'json',
                success: function(response) {
                    if (typeof successCallback === 'function') {
                        successCallback(response);
                    }
                },
                error: function(xhr, status, error) {
                    console.error('AJAX Error:', status, error);
                    if (typeof errorCallback === 'function') {
                        errorCallback(xhr, status, error);
                    }
                }
            });
        }

        function getExchangeRate(coin, currency) {
            if (window.LivePrices) {
                window.LivePrices.fetchPrice(coin, currency).then(function(price) {
                    console.log('Exchange Rate:', price);
                });
                return;
            }

            sendAjaxRequest('crypto_api.php?command=getCryptoPrice', 'GET', { coin: coin, currency: currency }, function(response) {
                console.log('Exchange Rate Response:', response);
                if (response && typeof response.price !== 'undefined') {
                    console.log('Exchange Rate:', response.price);
                } else {
                    console.error('Invalid response format', response);
                }
            }, function(xhr, status, error) {
                console.error('AJAX request failed', error);
            });
        }

        // Document ready - add your code here
        $(document).ready(function () {
            // Your code here
            getExchangeRate('bitcoin', 'usd');
        });
    </script>
    <script>
        (function () {
            const defaultApiIds = {
                BTC: 'bitcoin',
                ETH: 'ethereum',
                USDT: 'tether',
                BNB: 'binancecoin',
            };

            const normalize = (value) => String(value || '').trim().toUpperCase().replace(/[^A-Z]/g, '');

            const formatRate = (rate) => {
                const numeric = Number(rate);
                if (!Number.isFinite(numeric)) {
                    return '--';
                }
                if (numeric < 0.09) {
                    return String(numeric);
                }
                if (numeric < 0.9) {
                    return numeric.toFixed(5);
                }
                if (numeric >= 1 && numeric < 9.9) {
                    return numeric.toFixed(5);
                }
                return Number(numeric.toFixed(2)).toLocaleString('en-US');
            };

            const fetchLivePrice = async (symbol) => {
                if (window.LivePrices) {
                    return window.LivePrices.fetchPrice(symbol, 'usd');
                }
                const apiIds = window.cryptoApiIds || defaultApiIds;
                const apiId = apiIds[symbol];
                if (!apiId) {
                    return 0;
                }
                try {
                    const response = await fetch(
                        `crypto_api.php?command=getCryptoPrice&coin=${encodeURIComponent(apiId)}&currency=usd`
                    );
                    const data = await response.json();
                    const price = Number(data && data.price ? data.price : 0);
                    if (price > 0) {
                        window.liveCryptoPrices = window.liveCryptoPrices || {};
                        window.liveCryptoPrices[symbol] = price;
                        return price;
                    }
                } catch (error) {
                    return 0;
                }
                return 0;
            };

            const getSelectedSymbol = () => {
                const payItem = document.querySelector('.main-exchange-item');
                const getItem =
                    document.querySelector('.crypto-item.active') ||
                    document.querySelector('.crypto-item.selected');

                const payRaw =
                    payItem?.id ||
                    payItem?.getAttribute('data-selected') ||
                    document.querySelector('.cur-pay-coin')?.textContent ||
                    '';
                const getRaw =
                    getItem?.id ||
                    getItem?.getAttribute('data-selected') ||
                    document.querySelector('.cur-get-coin')?.textContent ||
                    '';

                let pay = normalize(payRaw === 'btc-1' ? 'btc' : payRaw);
                let get = normalize(getRaw === 'usd' ? 'usdt' : getRaw);

                if (pay === 'USD') {
                    pay = 'USDT';
                }
                if (get === 'USD') {
                    get = 'USDT';
                }

                return { pay, get };
            };

            const updateExchangeDisplay = async () => {
                const { pay, get } = getSelectedSymbol();
                if (!pay || !get) {
                    return;
                }

                const livePrices = window.liveCryptoPrices || {};
                let payPrice = Number(livePrices[pay] || 0);
                let getPrice = Number(livePrices[get] || 0);

                if (!payPrice) {
                    payPrice = await fetchLivePrice(pay);
                }
                if (!getPrice) {
                    getPrice = await fetchLivePrice(get);
                }

                if (!payPrice || !getPrice) {
                    return;
                }

                const rate = payPrice / getPrice;
                const rateElement = document.querySelector('.cur-coin-price');
                if (rateElement) {
                    rateElement.textContent = formatRate(rate);
                }

                const payInput = document.getElementById('pay-value');
                const getInput = document.getElementById('get-value');
                if (payInput && getInput) {
                    const payValue = Number(payInput.value || 0);
                    if (payValue > 0) {
                        getInput.value = (payValue * rate).toFixed(4);
                    }
                }
            };

            document.addEventListener('click', (event) => {
                if (event.target.closest('.exchange-item') || event.target.closest('.crypto-item')) {
                    updateExchangeDisplay();
                }
            });

            document.addEventListener('input', (event) => {
                if (event.target && event.target.id === 'pay-value') {
                    updateExchangeDisplay();
                }
            });

            updateExchangeDisplay();
            setInterval(updateExchangeDisplay, 30000);
        })();
    </script>

</body>
 
</html>

