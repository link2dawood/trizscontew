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
?>

<!doctype html>
<html lang="en">

<meta http-equiv="content-type" content="text/html;charset=UTF-8" />

<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width,initial-scale=1" />
    <title class="notranslate"><?php echo(strip_tags($platform_name))?> | Market</title>
    <meta content="<?php echo(strip_tags($platform_name))?> trading platform" class="notranslate" property="og:title">
    <meta content="<?php echo(strip_tags($platform_name))?> trading platform" class="notranslate" property="twitter:title">
    <meta name="description" content="<?php echo(strip_tags($platform_name))?> trading platform" class="notranslate" />
    <meta name="theme-color" content="#1E1F25">
    <link href="bundle/logo/<?php echo($icon)?>" rel="shortcut icon" type="image/x-icon" />
    <link href="../assets/css/styles.bundle.css" rel="stylesheet" />
    <link href="../assets/plugins/apexcharts/apexcharts.css" rel="stylesheet" />
    <link href="../assets/css/pages/market-v1.css" rel="stylesheet" />
    <link href="<?php echo($style)?>" rel="stylesheet" />
</head>

<body class="">
<div id="google_translate_element"></div>
<!-- Preloader -->
<div id="preloader">
		<div class="spinney"></div>
	</div>
    <!-- Preloader end-->

<!-- Header -->
<header class="header transparent">
		<div class="container">
			<div class="main-bar">
            <div class="left-content notranslate">
					<h4 class="title mb-0 page-title">Home</h4>
                    <a class="navbar-brand outside"
                            href="../index" style="font-size: 25px; display: flex; align-items: center;"><img class="navbar-brand__icon <?php echo($keep_default)?>"
            src="bundle/logo/<?php echo($logo)?>" style="width: <?php echo($logo_width)?>px;" alt="C" /><p class="<?php echo($name_header)?>"><?php echo($platform_name)?></p>
                            </a>
				</div>
                
				<div class="mid-content">
                    <!-- old nav -->
                    <nav class="navbar outside navbar-expand-lg header-navbar header-navbar-dashboard--v1">
                        <div class="container container--dashboard-nav"><button class="navbar-toggler outside ml-auto" type="button"
                            data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent"
                            aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation"><img
                                src="../assets/media/images/icons/menu.svg" alt="MENU" /></button> 
                            
                            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                                <div class="navbar-collapse__content">
                                    <ul class="navbar-nav me-auto">
                                    <li class="nav-item"><a class="nav-link" href="dashboard">Dashboard</a></li>
                                        
                                        <li class="nav-item"><a class="nav-link" href="wallet">Wallet</a></li>
                                        <li class="nav-item"><a class="nav-link active" href="#">Market</a></li>
                                    </ul>
                                </div>
                            </div>
                        
                            <div class="navbar-search-popup"><input class="navbar-search-popup__input js-navbar-search-popup__input"
                                    placeholder="Search"> <img src="../assets/media/images/icons/search.svg" alt="search-icon"
                                    class="navbar-search-popup__image"> <img src="../assets/media/images/icons/plus-icon.svg"
                                    alt="cancel-icon" class="navbar-search-popup__image--cancel js-navbar-search-popup__image--cancel">
                            </div>
                        </div>
                    </nav>
                    <!-- old nav -->
				</div>

				<div class="right-content d-flex align-items-center">
                <button class="nav-link settings-icon settings-icon1">Settings</button>
                <button class="nav-link settings-icon settings-icon2 hido">Settings</button>
                <button class="nav-link verif-icon hido">Verification</button>

                <!-- Language selector -->
                <div class="trans-dropdown" tab-index="0">
                    <button id="trans-dropdown-btn"></button>
                    <ul class="trans-dropdown-content" id="trans-dropdown-content"></ul>
                </div>

                
                    <!-- Profile dropdown start -->
                    <div class="profile">
                         <div id="avatarWrapper" class="avatar-wrapper">
                         <h5 class="user-head">Hi,<span class="notranslate"> <?php echo($fname)?></span></h5>
                              <img src="<?php echo($avatar)?>" class="avatar-photo">
                              <svg viewbox="0 0 24 24" xmlns:xlink="http://www.w3.org/2000/svg" class="avatar-dropdown-arrow"
                                   id="dropdownWrapperArrow" width="24" height="24" fill="currentColor">
                                   
                                   <path d="M12 14.5c-.2 0-.3-.1-.5-.2l-3.8-3.6c-.2-.2-.2-.4-.2-.5 0-.1 0-.3.2-.5.3-.3.7-.3 1 0l3.3 3.1 3.3-3.1c.2-.2.5-.2.8-.1.3.1.4.4.4.6 0
                                    .2-.1.4-.2.5l-3.8 3.6c-.1.1-.3.2-.5.2z" />
                              </svg>
                         </div>
                         <div id="dropdownWrapper" class="dropdown-wrapper" style="width: 256px;">
                              <div class="dropdown-profile-details">
                                   <span><span class="dropdown-profile-details--name user-name navbar-profile-menu__text notranslate"><?php echo($fname)?> <?php echo($lname)?></span><span class="trader-type"></span></span>
                                   <span class="dropdown-profile-details--email notranslate"><?php echo($email)?></span>
                                   <span class="dropdown-profile-details--email dropdown-ref"><span style="color: #D82122;"><strong>Ref ID:</strong></span> <span class="notranslate"><?php echo($ref_code)?></span></span>
                              </div>
                              
                              <div class="dropdown-links">
                                   <a class="logout" href="logout.php">
                                        <span class="logout-icon"><svg data-name="Layer 1" id="Layer_1" viewBox="0 0 64 64" xmlns="http://www.w3.org/2000/svg"><defs><style>.cls-1{fill:none;stroke:#D82122;stroke-linecap:round;stroke-linejoin:round;stroke-width:2px;}</style></defs><title/><path class="cls-1" d="M13.13,8.63,32,16V56L13.25,47.87A2,2,0,0,1,12,46V10a2,2,0,0,1,2-2H41a2,2,0,0,1,2,2V46a2,2,0,0,1-2,2H32"/><line class="cls-1" x1="27.91" x2="24.13" y1="35.06" y2="33.5"/><polyline class="cls-1" points="50 32.24 54.24 28 50 23.76"/><line class="cls-1" x1="54" x2="43" y1="28" y2="28"/></svg></span> 
                                        <span class="logout-text">Sign out</span>
                                    </a>
                                    <button class="desktop-settings side-opener">
                                        <span class="logout-icon"></span> 
                                        
                                   </button>
                              </div>
                         </div>
                    </div>
                    <!-- Profile dropdown end -->
				</div>
			</div>
		</div>
	</header>
	<div class="dark-overlay"></div>
    <!-- Header End -->


    <div class="market dash-body market--v1">
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
            <div class="market-group">
                <div class="market-update">
                    <div class="market-update__heading">
                        <p class="fb-regular market-update__subtitle">In the past 24 hours</p>
                        <p class="fd-md fd-md--bold"><span class="market-is"></span> <span class="up-down"></span> <span class="up-down-percent"></span></p>
                    </div>
                    <div class="standard-card standard-card--type-1">
                        <div class="container">
                            <p class="standard-card__title">Top gainer (24h)</p>
                            <div class="standard-card__content"><img src="" alt=""
                                    class="standard-card__content-image top-gainer-icon">
                                <div class="standard-card__content-desc">
                                    <p class="standard-card__content-desc-price top-gainer-price"></p>
                                    <p class="standard-card__content-desc-currency top-gainer-name"></p>
                                    <p class="standard-card__content-desc-token top-gainer-short"></p>
                                </div>
                                <div class="standard-card__content-graph">
                                    <div class="standard-card__content-percentage"><img
                                            class="standard-card__content-arrow"
                                            src="../assets/media/images/icons/green-arrow-up.svg" alt="">
                                        <p class="standard-card__content-value top-gainer-percent"></p>
                                    </div>
                                    <div class="standard-card__content-chart-wrapper">
                                        <div id="standard-card__content-chart-1"
                                            class="standard-card__content-chart-render"></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- <div class="standard-card standard-card--type-2">
                        <div class="container">
                            <p class="standard-card__title">New listing</p>
                            <div class="standard-card__content"><img src="../assets/media/images/icons/ITC.svg" alt=""
                                    class="standard-card__content-image">
                                <div class="standard-card__content-desc">
                                    <p class="standard-card__content-desc-price new-listing-price"></p>
                                    <p class="standard-card__content-desc-currency">IoT Chain</p>
                                    <p class="standard-card__content-desc-token">ITC</p>
                                </div>
                                <div class="standard-card__content-graph">
                                    <p class="standard-card__content-date">Added Apr, 13</p>
                                    <div class="standard-card__content-chart-wrapper">
                                        <div id="standard-card__content-chart-2"
                                            class="standard-card__content-chart-render"></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div> -->
                    <div class="standard-card standard-card--type-1">
                        <div class="container">
                            <p class="standard-card__title">Highest volume (24h)</p>
                            <div class="standard-card__content"><img src=""
                                    alt="" class="standard-card__content-image highest-vol-icon">
                                <div class="standard-card__content-desc">
                                    <p class="standard-card__content-desc-price highest-vol"></p>
                                    <p class="standard-card__content-desc-currency highest-vol-name"></p>
                                    <p class="standard-card__content-desc-token highest-vol-short"></p>
                                </div>
                                <div class="standard-card__content-graph">
                                    <!-- <div class="standard-card__content-percentage"><img
                                            class="standard-card__content-arrow"
                                            src="../assets/media/images/icons/green-arrow-up.svg" alt="">
                                        <p class="standard-card__content-value">0.53%</p>
                                    </div> -->
                                    <!-- <div class="standard-card__content-chart-wrapper">
                                        <div id="standard-card__content-chart-1-2"
                                            class="standard-card__content-chart-render"></div>
                                    </div> -->
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- <div class="standard-card standard-card--type-1">
                        <div class="container">
                            <p class="standard-card__title">Most visited</p>
                            <div class="standard-card__content"><img src="../assets/media/images/icons/logo-ogn.svg"
                                    alt="" class="standard-card__content-image">
                                <div class="standard-card__content-desc">
                                    <p class="standard-card__content-desc-price most-visit-price"></p>
                                    <p class="standard-card__content-desc-currency">Orogin Protocol</p>
                                    <p class="standard-card__content-desc-token">OGN</p>
                                </div>
                                <div class="standard-card__content-graph">
                                    <div class="standard-card__content-percentage"><img
                                            class="standard-card__content-arrow"
                                            src="../assets/media/images/icons/green-arrow-up.svg" alt="">
                                        <p class="standard-card__content-value">2.23%</p>
                                    </div>
                                    <div class="standard-card__content-chart-wrapper">
                                        <div id="standard-card__content-chart-1-3"
                                            class="standard-card__content-chart-render"></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div> -->
                </div>
                <div class="market-table">
                    <div class="table-wrapper table--type-2">
                        <div class="table__title">
                            <h6 class="table__title-text">Market Table</h6>
                            <nav class="navbar">
                                <div class="table__title-tabs" id="pills-tab" role="tablist">
                                    <li class="nav-item">
                                        <p class="fb-regular fb-regular--bold table__title-tab active"
                                            id="pills-market-table-all-tab" data-bs-toggle="pill"
                                            data-bs-target="#pills-market-table-all" role="tab"
                                            aria-controls="pills-market-table-all" aria-selected="true">All Assets</p>
                                    </li>
                                    <!-- <li class="nav-item">
                                        <p class="fb-regular fb-regular--bold table__title-tab"
                                            id="pills-market-table-gainers-tab" data-bs-toggle="pill"
                                            data-bs-target="#pills-market-table-gainers" role="tab"
                                            aria-controls="pills-market-table-gainers" aria-selected="false">Gainers</p>
                                    </li>
                                    <li class="nav-item">
                                        <p class="fb-regular fb-regular--bold table__title-tab"
                                            id="pills-market-table-losers-tab" data-bs-toggle="pill"
                                            data-bs-target="#pills-market-table-losers" role="tab"
                                            aria-controls="pills-market-table-losers" aria-selected="false">Losers</p>
                                    </li>
                                    <li class="nav-item">
                                        <p class="fb-regular fb-regular--bold table__title-tab"
                                            id="pills-market-table-tradeble-tab" data-bs-toggle="pill"
                                            data-bs-target="#pills-market-table-tradeble" role="tab"
                                            aria-controls="pills-market-table-tradeble" aria-selected="false">Tradeble
                                        </p>
                                    </li> -->
                                </div>
                            </nav>
                            <div class="dropdown table__dropdown"><button class="btn btn-secondary dropdown-toggle"
                                    type="button" id="dropdownMenuButton1" data-bs-toggle="dropdown"
                                    aria-expanded="false">All Assets <img
                                        src="../assets/media/images/icons/arrow-down.svg" alt=""></button>
                                <!-- <ul class="dropdown-menu" aria-labelledby="dropdownMenuButton1" id="pills-tab"
                                    role="tablist">
                                    <li><a class="dropdown-item active" href="#" id="pills-market-table-all-tab"
                                            data-bs-toggle="pill" data-bs-target="#pills-market-table-all" role="tab"
                                            aria-controls="pills-market-table-all" aria-selected="true">All Assets</a>
                                    </li>
                                    <li><a class="dropdown-item" href="#" id="pills-market-table-gainers-tab"
                                            data-bs-toggle="pill" data-bs-target="#pills-market-table-gainers"
                                            role="tab" aria-controls="pills-market-table-gainers"
                                            aria-selected="false">Gainers</a></li>
                                    <li><a class="dropdown-item" href="#" id="pills-market-table-losers-tab"
                                            data-bs-toggle="pill" data-bs-target="#pills-market-table-losers" role="tab"
                                            aria-controls="pills-market-table-losers" aria-selected="false">Losers</a>
                                    </li>
                                    <li><a class="dropdown-item" href="#" id="pills-market-table-tradeble-tab"
                                            data-bs-toggle="pill" data-bs-target="#pills-market-table-tradeble"
                                            role="tab" aria-controls="pills-market-table-tradeble"
                                            aria-selected="false">Tradeble</a></li>
                                </ul> -->
                            </div>
                        </div>
                        <div class="tab-content">
                            <!-- All assets -->
                            <div class="tab-pane fade show active" id="pills-market-table-all" role="tabpanel"
                                aria-labelledby="pills-market-table-all-tab">
                                <div class="table-container">
                                    <table class="table table-content">
                                        <thead>
                                            <tr>
                                                <th class="fb-regular table__head" colspan="2">Assets</th>
                                                <th class="fb-regular table__head <?php echo($hidebuysell)?>">Trade</th>
                                                <th class="fb-regular table__head">Last Price</th>
                                                <th class="fb-regular table__head">Market Cap</th>
                                                <th class="fb-regular table__head">Change 24hr</th>
                                                <th class="fb-regular table__head">Last 7 Days</th>
                                                
                                            </tr>
                                        </thead>
                                        <tbody class="assets-list">
                                            
                                           
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                            <div class="tab-pane fade" id="pills-market-table-gainers" role="tabpanel"
                                aria-labelledby="pills-market-table-gainers-tab">
                                <div class="table-container">
                                    <table class="table table-content">
                                        <thead>
                                            <tr>
                                                <th class="fb-regular table__head" colspan="2">Assets</th>
                                                <th class="fb-regular table__head">Last Price</th>
                                                <th class="fb-regular table__head">Market Cap</th>
                                                <th class="fb-regular table__head">Change</th>
                                                <th class="fb-regular table__head">Last 7 Days</th>
                                                <th class="fb-regular table__head">Trade</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr>
                                                <td class="table__assets">
                                                    <div class="table__assets-crypto"><img
                                                            src="../assets/media/images/icons/logo-btc.svg" alt=""
                                                            class="table__assets-crypto-icon">
                                                        <p
                                                            class="fb-regular fb-regular--bold table__assets-crypto-abbr">
                                                            BTC</p>
                                                    </div>
                                                </td>
                                                <td>
                                                    <p class="fb-regular table__assets-name">Bitcoin</p>
                                                </td>
                                                <td>
                                                    <p class="fb-regular">USD 53,261.20</p>
                                                </td>
                                                <td>
                                                    <p class="fb-regular">USD 53,262.20</p>
                                                </td>
                                                <td>
                                                    <p class="fb-regular table__market text-bullish">0.25%</p>
                                                </td>
                                                <td class="table__chart">
                                                    <div class="table__chart-wrapper">
                                                        <div id="table__chart-1" class="table__chart-render"></div>
                                                    </div>
                                                </td>
                                                <td><button
                                                        class="btn btn-primary btn-sm btn-pill table__btn buy-btn">Buy</button>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td class="table__assets">
                                                    <div class="table__assets-crypto"><img
                                                            src="../assets/media/images/icons/logo-eth.svg" alt=""
                                                            class="table__assets-crypto-icon">
                                                        <p
                                                            class="fb-regular fb-regular--bold table__assets-crypto-abbr">
                                                            ETH</p>
                                                    </div>
                                                </td>
                                                <td>
                                                    <p class="fb-regular table__assets-name">Ethereum</p>
                                                </td>
                                                <td>
                                                    <p class="fb-regular">USD 53,260.20</p>
                                                </td>
                                                <td>
                                                    <p class="fb-regular">USD 53,260.20</p>
                                                </td>
                                                <td>
                                                    <p class="fb-regular table__market text-bullish">0.25%</p>
                                                </td>
                                                <td class="table__chart">
                                                    <div class="table__chart-wrapper">
                                                        <div id="table__chart-2" class="table__chart-render"></div>
                                                    </div>
                                                </td>
                                                <td><button
                                                        class="btn btn-primary btn-sm btn-pill table__btn buy-btn">Buy</button>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td class="table__assets">
                                                    <div class="table__assets-crypto"><img
                                                            src="../assets/media/images/icons/logo-bnb.svg" alt=""
                                                            class="table__assets-crypto-icon">
                                                        <p
                                                            class="fb-regular fb-regular--bold table__assets-crypto-abbr">
                                                            BNB</p>
                                                    </div>
                                                </td>
                                                <td>
                                                    <p class="fb-regular table__assets-name">Binance Coin</p>
                                                </td>
                                                <td>
                                                    <p class="fb-regular">USD 247.72</p>
                                                </td>
                                                <td>
                                                    <p class="fb-regular">USD 247.72</p>
                                                </td>
                                                <td>
                                                    <p class="fb-regular table__market text-bearish">2.43%</p>
                                                </td>
                                                <td class="table__chart">
                                                    <div class="table__chart-wrapper">
                                                        <div id="table__chart-3" class="table__chart-render"></div>
                                                    </div>
                                                </td>
                                                <td><button
                                                        class="btn btn-primary btn-sm btn-pill table__btn buy-btn">Buy</button>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td class="table__assets">
                                                    <div class="table__assets-crypto"><img
                                                            src="../assets/media/images/icons/logo-xrp.svg" alt=""
                                                            class="table__assets-crypto-icon">
                                                        <p
                                                            class="fb-regular fb-regular--bold table__assets-crypto-abbr">
                                                            XRP</p>
                                                    </div>
                                                </td>
                                                <td>
                                                    <p class="fb-regular table__assets-name">XRP</p>
                                                </td>
                                                <td>
                                                    <p class="fb-regular">USD 0.5657</p>
                                                </td>
                                                <td>
                                                    <p class="fb-regular">USD 0.5657</p>
                                                </td>
                                                <td>
                                                    <p class="fb-regular table__market text-bullish">2.42%</p>
                                                </td>
                                                <td class="table__chart">
                                                    <div class="table__chart-wrapper">
                                                        <div id="table__chart-4" class="table__chart-render"></div>
                                                    </div>
                                                </td>
                                                <td><button
                                                        class="btn btn-primary btn-sm btn-pill table__btn buy-btn">Buy</button>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td class="table__assets">
                                                    <div class="table__assets-crypto"><img
                                                            src="../assets/media/images/icons/logo-usdt.svg" alt=""
                                                            class="table__assets-crypto-icon">
                                                        <p
                                                            class="fb-regular fb-regular--bold table__assets-crypto-abbr">
                                                            USDT</p>
                                                    </div>
                                                </td>
                                                <td>
                                                    <p class="fb-regular table__assets-name">Tether</p>
                                                </td>
                                                <td>
                                                    <p class="fb-regular">USD 0.9999</p>
                                                </td>
                                                <td>
                                                    <p class="fb-regular">USD 0.9999</p>
                                                </td>
                                                <td>
                                                    <p class="fb-regular table__market text-bearish">0.40%</p>
                                                </td>
                                                <td class="table__chart">
                                                    <div class="table__chart-wrapper">
                                                        <div id="table__chart-5" class="table__chart-render"></div>
                                                    </div>
                                                </td>
                                                <td><button
                                                        class="btn btn-primary btn-sm btn-pill table__btn buy-btn">Buy</button>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td class="table__assets">
                                                    <div class="table__assets-crypto"><img
                                                            src="../assets/media/images/icons/logo-act.svg" alt=""
                                                            class="table__assets-crypto-icon">
                                                        <p
                                                            class="fb-regular fb-regular--bold table__assets-crypto-abbr">
                                                            ACT</p>
                                                    </div>
                                                </td>
                                                <td>
                                                    <p class="fb-regular table__assets-name">Achain</p>
                                                </td>
                                                <td>
                                                    <p class="fb-regular">USD 40,355.12</p>
                                                </td>
                                                <td>
                                                    <p class="fb-regular">USD 40,355.12</p>
                                                </td>
                                                <td>
                                                    <p class="fb-regular table__market text-bullish">0.05%</p>
                                                </td>
                                                <td class="table__chart">
                                                    <div class="table__chart-wrapper">
                                                        <div id="table__chart-6" class="table__chart-render"></div>
                                                    </div>
                                                </td>
                                                <td><button
                                                        class="btn btn-primary btn-sm btn-pill table__btn buy-btn">Buy</button>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td class="table__assets">
                                                    <div class="table__assets-crypto"><img
                                                            src="../assets/media/images/icons/logo-ogn.svg" alt=""
                                                            class="table__assets-crypto-icon">
                                                        <p
                                                            class="fb-regular fb-regular--bold table__assets-crypto-abbr">
                                                            OGN</p>
                                                    </div>
                                                </td>
                                                <td>
                                                    <p class="fb-regular table__assets-name">Origin Protocol</p>
                                                </td>
                                                <td>
                                                    <p class="fb-regular">USD 3,152.93</p>
                                                </td>
                                                <td>
                                                    <p class="fb-regular">USD 3,152.93</p>
                                                </td>
                                                <td>
                                                    <p class="fb-regular table__market text-bearish">0.22%</p>
                                                </td>
                                                <td class="table__chart">
                                                    <div class="table__chart-wrapper">
                                                        <div id="table__chart-7" class="table__chart-render"></div>
                                                    </div>
                                                </td>
                                                <td><button
                                                        class="btn btn-primary btn-sm btn-pill table__btn buy-btn">Buy</button>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td class="table__assets">
                                                    <div class="table__assets-crypto"><img
                                                            src="../assets/media/images/icons/logo-itc.svg" alt=""
                                                            class="table__assets-crypto-icon">
                                                        <p
                                                            class="fb-regular fb-regular--bold table__assets-crypto-abbr">
                                                            ITC</p>
                                                    </div>
                                                </td>
                                                <td>
                                                    <p class="fb-regular table__assets-name">IoT Chain</p>
                                                </td>
                                                <td>
                                                    <p class="fb-regular">USD 21,222.20</p>
                                                </td>
                                                <td>
                                                    <p class="fb-regular">USD 21,222.20</p>
                                                </td>
                                                <td>
                                                    <p class="fb-regular table__market text-bullish">0.23%</p>
                                                </td>
                                                <td class="table__chart">
                                                    <div class="table__chart-wrapper">
                                                        <div id="table__chart-8" class="table__chart-render"></div>
                                                    </div>
                                                </td>
                                                <td><button
                                                        class="btn btn-primary btn-sm btn-pill table__btn buy-btn">Buy</button>
                                                </td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                            <div class="tab-pane fade" id="pills-market-table-losers" role="tabpanel"
                                aria-labelledby="pills-market-table-losers-tab">
                                <div class="table-container">
                                    <table class="table table-content">
                                        <thead>
                                            <tr>
                                                <th class="fb-regular table__head" colspan="2">Assets</th>
                                                <th class="fb-regular table__head">Last Price</th>
                                                <th class="fb-regular table__head">Market Cap</th>
                                                <th class="fb-regular table__head">Change</th>
                                                <th class="fb-regular table__head">Last 7 Days</th>
                                                <th class="fb-regular table__head">Trade</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr>
                                                <td class="table__assets">
                                                    <div class="table__assets-crypto"><img
                                                            src="../assets/media/images/icons/logo-btc.svg" alt=""
                                                            class="table__assets-crypto-icon">
                                                        <p
                                                            class="fb-regular fb-regular--bold table__assets-crypto-abbr">
                                                            BTC</p>
                                                    </div>
                                                </td>
                                                <td>
                                                    <p class="fb-regular table__assets-name">Bitcoin</p>
                                                </td>
                                                <td>
                                                    <p class="fb-regular">USD 53,260.20</p>
                                                </td>
                                                <td>
                                                    <p class="fb-regular">USD 53,260.20</p>
                                                </td>
                                                <td>
                                                    <p class="fb-regular table__market text-bullish">0.25%</p>
                                                </td>
                                                <td class="table__chart">
                                                    <div class="table__chart-wrapper">
                                                        <div id="table__chart-1" class="table__chart-render"></div>
                                                    </div>
                                                </td>
                                                <td><button
                                                        class="btn btn-primary btn-sm btn-pill table__btn buy-btn">Buy</button>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td class="table__assets">
                                                    <div class="table__assets-crypto"><img
                                                            src="../assets/media/images/icons/logo-eth.svg" alt=""
                                                            class="table__assets-crypto-icon">
                                                        <p
                                                            class="fb-regular fb-regular--bold table__assets-crypto-abbr">
                                                            ETH</p>
                                                    </div>
                                                </td>
                                                <td>
                                                    <p class="fb-regular table__assets-name">Ethereum</p>
                                                </td>
                                                <td>
                                                    <p class="fb-regular">USD 53,260.20</p>
                                                </td>
                                                <td>
                                                    <p class="fb-regular">USD 53,260.20</p>
                                                </td>
                                                <td>
                                                    <p class="fb-regular table__market text-bullish">0.25%</p>
                                                </td>
                                                <td class="table__chart">
                                                    <div class="table__chart-wrapper">
                                                        <div id="table__chart-2" class="table__chart-render"></div>
                                                    </div>
                                                </td>
                                                <td><button
                                                        class="btn btn-primary btn-sm btn-pill table__btn buy-btn">Buy</button>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td class="table__assets">
                                                    <div class="table__assets-crypto"><img
                                                            src="../assets/media/images/icons/logo-bnb.svg" alt=""
                                                            class="table__assets-crypto-icon">
                                                        <p
                                                            class="fb-regular fb-regular--bold table__assets-crypto-abbr">
                                                            BNB</p>
                                                    </div>
                                                </td>
                                                <td>
                                                    <p class="fb-regular table__assets-name">Binance Coin</p>
                                                </td>
                                                <td>
                                                    <p class="fb-regular">USD 247.72</p>
                                                </td>
                                                <td>
                                                    <p class="fb-regular">USD 247.72</p>
                                                </td>
                                                <td>
                                                    <p class="fb-regular table__market text-bearish">2.43%</p>
                                                </td>
                                                <td class="table__chart">
                                                    <div class="table__chart-wrapper">
                                                        <div id="table__chart-3" class="table__chart-render"></div>
                                                    </div>
                                                </td>
                                                <td><button
                                                        class="btn btn-primary btn-sm btn-pill table__btn buy-btn">Buy</button>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td class="table__assets">
                                                    <div class="table__assets-crypto"><img
                                                            src="../assets/media/images/icons/logo-xrp.svg" alt=""
                                                            class="table__assets-crypto-icon">
                                                        <p
                                                            class="fb-regular fb-regular--bold table__assets-crypto-abbr">
                                                            XRP</p>
                                                    </div>
                                                </td>
                                                <td>
                                                    <p class="fb-regular table__assets-name">XRP</p>
                                                </td>
                                                <td>
                                                    <p class="fb-regular">USD 0.5657</p>
                                                </td>
                                                <td>
                                                    <p class="fb-regular">USD 0.5657</p>
                                                </td>
                                                <td>
                                                    <p class="fb-regular table__market text-bullish">2.42%</p>
                                                </td>
                                                <td class="table__chart">
                                                    <div class="table__chart-wrapper">
                                                        <div id="table__chart-4" class="table__chart-render"></div>
                                                    </div>
                                                </td>
                                                <td><button
                                                        class="btn btn-primary btn-sm btn-pill table__btn buy-btn">Buy</button>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td class="table__assets">
                                                    <div class="table__assets-crypto"><img
                                                            src="../assets/media/images/icons/logo-usdt.svg" alt=""
                                                            class="table__assets-crypto-icon">
                                                        <p
                                                            class="fb-regular fb-regular--bold table__assets-crypto-abbr">
                                                            USDT</p>
                                                    </div>
                                                </td>
                                                <td>
                                                    <p class="fb-regular table__assets-name">Tether</p>
                                                </td>
                                                <td>
                                                    <p class="fb-regular">USD 0.9999</p>
                                                </td>
                                                <td>
                                                    <p class="fb-regular">USD 0.9999</p>
                                                </td>
                                                <td>
                                                    <p class="fb-regular table__market text-bearish">0.40%</p>
                                                </td>
                                                <td class="table__chart">
                                                    <div class="table__chart-wrapper">
                                                        <div id="table__chart-5" class="table__chart-render"></div>
                                                    </div>
                                                </td>
                                                <td><button
                                                        class="btn btn-primary btn-sm btn-pill table__btn buy-btn">Buy</button>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td class="table__assets">
                                                    <div class="table__assets-crypto"><img
                                                            src="../assets/media/images/icons/logo-act.svg" alt=""
                                                            class="table__assets-crypto-icon">
                                                        <p
                                                            class="fb-regular fb-regular--bold table__assets-crypto-abbr">
                                                            ACT</p>
                                                    </div>
                                                </td>
                                                <td>
                                                    <p class="fb-regular table__assets-name">Achain</p>
                                                </td>
                                                <td>
                                                    <p class="fb-regular">USD 40,355.12</p>
                                                </td>
                                                <td>
                                                    <p class="fb-regular">USD 40,355.12</p>
                                                </td>
                                                <td>
                                                    <p class="fb-regular table__market text-bullish">0.05%</p>
                                                </td>
                                                <td class="table__chart">
                                                    <div class="table__chart-wrapper">
                                                        <div id="table__chart-6" class="table__chart-render"></div>
                                                    </div>
                                                </td>
                                                <td><button
                                                        class="btn btn-primary btn-sm btn-pill table__btn buy-btn">Buy</button>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td class="table__assets">
                                                    <div class="table__assets-crypto"><img
                                                            src="../assets/media/images/icons/logo-ogn.svg" alt=""
                                                            class="table__assets-crypto-icon">
                                                        <p
                                                            class="fb-regular fb-regular--bold table__assets-crypto-abbr">
                                                            OGN</p>
                                                    </div>
                                                </td>
                                                <td>
                                                    <p class="fb-regular table__assets-name">Origin Protocol</p>
                                                </td>
                                                <td>
                                                    <p class="fb-regular">USD 3,152.93</p>
                                                </td>
                                                <td>
                                                    <p class="fb-regular">USD 3,152.93</p>
                                                </td>
                                                <td>
                                                    <p class="fb-regular table__market text-bearish">0.22%</p>
                                                </td>
                                                <td class="table__chart">
                                                    <div class="table__chart-wrapper">
                                                        <div id="table__chart-7" class="table__chart-render"></div>
                                                    </div>
                                                </td>
                                                <td><button
                                                        class="btn btn-primary btn-sm btn-pill table__btn buy-btn">Buy</button>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td class="table__assets">
                                                    <div class="table__assets-crypto"><img
                                                            src="../assets/media/images/icons/logo-itc.svg" alt=""
                                                            class="table__assets-crypto-icon">
                                                        <p
                                                            class="fb-regular fb-regular--bold table__assets-crypto-abbr">
                                                            ITC</p>
                                                    </div>
                                                </td>
                                                <td>
                                                    <p class="fb-regular table__assets-name">IoT Chain</p>
                                                </td>
                                                <td>
                                                    <p class="fb-regular">USD 21,222.20</p>
                                                </td>
                                                <td>
                                                    <p class="fb-regular">USD 21,222.20</p>
                                                </td>
                                                <td>
                                                    <p class="fb-regular table__market text-bullish">0.23%</p>
                                                </td>
                                                <td class="table__chart">
                                                    <div class="table__chart-wrapper">
                                                        <div id="table__chart-8" class="table__chart-render"></div>
                                                    </div>
                                                </td>
                                                <td><button
                                                        class="btn btn-primary btn-sm btn-pill table__btn buy-btn">Buy</button>
                                                </td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                            <div class="tab-pane fade" id="pills-market-table-tradeble" role="tabpanel"
                                aria-labelledby="pills-market-table-tradeble-tab">
                                <div class="table-container">
                                    <table class="table table-content">
                                        <thead>
                                            <tr>
                                                <th class="fb-regular table__head" colspan="2">Assets</th>
                                                <th class="fb-regular table__head">Last Price</th>
                                                <th class="fb-regular table__head">Market Cap</th>
                                                <th class="fb-regular table__head">Change</th>
                                                <th class="fb-regular table__head">Last 7 Days</th>
                                                <th class="fb-regular table__head">Trade</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr>
                                                <td class="table__assets">
                                                    <div class="table__assets-crypto"><img
                                                            src="../assets/media/images/icons/logo-btc.svg" alt=""
                                                            class="table__assets-crypto-icon">
                                                        <p
                                                            class="fb-regular fb-regular--bold table__assets-crypto-abbr">
                                                            BTC</p>
                                                    </div>
                                                </td>
                                                <td>
                                                    <p class="fb-regular table__assets-name">Bitcoin</p>
                                                </td>
                                                <td>
                                                    <p class="fb-regular">USD 53,260.20</p>
                                                </td>
                                                <td>
                                                    <p class="fb-regular">USD 53,260.20</p>
                                                </td>
                                                <td>
                                                    <p class="fb-regular table__market text-bullish">0.25%</p>
                                                </td>
                                                <td class="table__chart">
                                                    <div class="table__chart-wrapper">
                                                        <div id="table__chart-1" class="table__chart-render"></div>
                                                    </div>
                                                </td>
                                                <td><button
                                                        class="btn btn-primary btn-sm btn-pill table__btn buy-btn">Buy</button>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td class="table__assets">
                                                    <div class="table__assets-crypto"><img
                                                            src="../assets/media/images/icons/logo-eth.svg" alt=""
                                                            class="table__assets-crypto-icon">
                                                        <p
                                                            class="fb-regular fb-regular--bold table__assets-crypto-abbr">
                                                            ETH</p>
                                                    </div>
                                                </td>
                                                <td>
                                                    <p class="fb-regular table__assets-name">Ethereum</p>
                                                </td>
                                                <td>
                                                    <p class="fb-regular">USD 53,260.20</p>
                                                </td>
                                                <td>
                                                    <p class="fb-regular">USD 53,260.20</p>
                                                </td>
                                                <td>
                                                    <p class="fb-regular table__market text-bullish">0.25%</p>
                                                </td>
                                                <td class="table__chart">
                                                    <div class="table__chart-wrapper">
                                                        <div id="table__chart-2" class="table__chart-render"></div>
                                                    </div>
                                                </td>
                                                <td><button
                                                        class="btn btn-primary btn-sm btn-pill table__btn buy-btn">Buy</button>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td class="table__assets">
                                                    <div class="table__assets-crypto"><img
                                                            src="../assets/media/images/icons/logo-bnb.svg" alt=""
                                                            class="table__assets-crypto-icon">
                                                        <p
                                                            class="fb-regular fb-regular--bold table__assets-crypto-abbr">
                                                            BNB</p>
                                                    </div>
                                                </td>
                                                <td>
                                                    <p class="fb-regular table__assets-name">Binance Coin</p>
                                                </td>
                                                <td>
                                                    <p class="fb-regular">USD 247.72</p>
                                                </td>
                                                <td>
                                                    <p class="fb-regular">USD 247.72</p>
                                                </td>
                                                <td>
                                                    <p class="fb-regular table__market text-bearish">2.43%</p>
                                                </td>
                                                <td class="table__chart">
                                                    <div class="table__chart-wrapper">
                                                        <div id="table__chart-3" class="table__chart-render"></div>
                                                    </div>
                                                </td>
                                                <td><button
                                                        class="btn btn-primary btn-sm btn-pill table__btn buy-btn">Buy</button>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td class="table__assets">
                                                    <div class="table__assets-crypto"><img
                                                            src="../assets/media/images/icons/logo-xrp.svg" alt=""
                                                            class="table__assets-crypto-icon">
                                                        <p
                                                            class="fb-regular fb-regular--bold table__assets-crypto-abbr">
                                                            XRP</p>
                                                    </div>
                                                </td>
                                                <td>
                                                    <p class="fb-regular table__assets-name">XRP</p>
                                                </td>
                                                <td>
                                                    <p class="fb-regular">USD 0.5657</p>
                                                </td>
                                                <td>
                                                    <p class="fb-regular">USD 0.5657</p>
                                                </td>
                                                <td>
                                                    <p class="fb-regular table__market text-bullish">2.42%</p>
                                                </td>
                                                <td class="table__chart">
                                                    <div class="table__chart-wrapper">
                                                        <div id="table__chart-4" class="table__chart-render"></div>
                                                    </div>
                                                </td>
                                                <td><button
                                                        class="btn btn-primary btn-sm btn-pill table__btn buy-btn">Buy</button>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td class="table__assets">
                                                    <div class="table__assets-crypto"><img
                                                            src="../assets/media/images/icons/logo-usdt.svg" alt=""
                                                            class="table__assets-crypto-icon">
                                                        <p
                                                            class="fb-regular fb-regular--bold table__assets-crypto-abbr">
                                                            USDT</p>
                                                    </div>
                                                </td>
                                                <td>
                                                    <p class="fb-regular table__assets-name">Tether</p>
                                                </td>
                                                <td>
                                                    <p class="fb-regular">USD 0.9999</p>
                                                </td>
                                                <td>
                                                    <p class="fb-regular">USD 0.9999</p>
                                                </td>
                                                <td>
                                                    <p class="fb-regular table__market text-bearish">0.40%</p>
                                                </td>
                                                <td class="table__chart">
                                                    <div class="table__chart-wrapper">
                                                        <div id="table__chart-5" class="table__chart-render"></div>
                                                    </div>
                                                </td>
                                                <td><button
                                                        class="btn btn-primary btn-sm btn-pill table__btn buy-btn">Buy</button>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td class="table__assets">
                                                    <div class="table__assets-crypto"><img
                                                            src="../assets/media/images/icons/logo-act.svg" alt=""
                                                            class="table__assets-crypto-icon">
                                                        <p
                                                            class="fb-regular fb-regular--bold table__assets-crypto-abbr">
                                                            ACT</p>
                                                    </div>
                                                </td>
                                                <td>
                                                    <p class="fb-regular table__assets-name">Achain</p>
                                                </td>
                                                <td>
                                                    <p class="fb-regular">USD 40,355.12</p>
                                                </td>
                                                <td>
                                                    <p class="fb-regular">USD 40,355.12</p>
                                                </td>
                                                <td>
                                                    <p class="fb-regular table__market text-bullish">0.05%</p>
                                                </td>
                                                <td class="table__chart">
                                                    <div class="table__chart-wrapper">
                                                        <div id="table__chart-6" class="table__chart-render"></div>
                                                    </div>
                                                </td>
                                                <td><button
                                                        class="btn btn-primary btn-sm btn-pill table__btn buy-btn">Buy</button>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td class="table__assets">
                                                    <div class="table__assets-crypto"><img
                                                            src="../assets/media/images/icons/logo-ogn.svg" alt=""
                                                            class="table__assets-crypto-icon">
                                                        <p
                                                            class="fb-regular fb-regular--bold table__assets-crypto-abbr">
                                                            OGN</p>
                                                    </div>
                                                </td>
                                                <td>
                                                    <p class="fb-regular table__assets-name">Origin Protocol</p>
                                                </td>
                                                <td>
                                                    <p class="fb-regular">USD 3,152.93</p>
                                                </td>
                                                <td>
                                                    <p class="fb-regular">USD 3,152.93</p>
                                                </td>
                                                <td>
                                                    <p class="fb-regular table__market text-bearish">0.22%</p>
                                                </td>
                                                <td class="table__chart">
                                                    <div class="table__chart-wrapper">
                                                        <div id="table__chart-7" class="table__chart-render"></div>
                                                    </div>
                                                </td>
                                                <td><button
                                                        class="btn btn-primary btn-sm btn-pill table__btn buy-btn">Buy</button>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td class="table__assets">
                                                    <div class="table__assets-crypto"><img
                                                            src="../assets/media/images/icons/logo-itc.svg" alt=""
                                                            class="table__assets-crypto-icon">
                                                        <p
                                                            class="fb-regular fb-regular--bold table__assets-crypto-abbr">
                                                            ITC</p>
                                                    </div>
                                                </td>
                                                <td>
                                                    <p class="fb-regular table__assets-name">IoT Chain</p>
                                                </td>
                                                <td>
                                                    <p class="fb-regular">USD 21,222.20</p>
                                                </td>
                                                <td>
                                                    <p class="fb-regular">USD 21,222.20</p>
                                                </td>
                                                <td>
                                                    <p class="fb-regular table__market text-bullish">0.23%</p>
                                                </td>
                                                <td class="table__chart">
                                                    <div class="table__chart-wrapper">
                                                        <div id="table__chart-8" class="table__chart-render"></div>
                                                    </div>
                                                </td>
                                                <td><button
                                                        class="btn btn-primary btn-sm btn-pill table__btn buy-btn">Buy</button>
                                                </td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                        <div class="table__vignette"></div>
                    </div>
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
        <div class="growth-dot hido"></div>
        <div class="current-chart-info hido"></div>
        <div id="complete-card__chart-area-4" class="hido"></div>
        <div id="complete-card__chart-area-3" class="hido"></div>
        <div class="investment-pass hido"><?php echo($investment)?></div>
        <div class="loan-pass hido"><?php echo($loan)?></div>
        <div class="buysell-pass hido"><?php echo($buysell)?></div>
        <div class="p2psend-pass hido"><?php echo($p2psend)?></div>
        <div class="coinpayments-pass hido"><?php echo($coinpayments)?></div>
        <div class="flutterwave-pass hido"><?php echo($flutterwave)?></div>
        <div class="coingate-pass hido"><?php echo($coingate)?></div>

        <!-- Menubar -->
	<div class="menubar-area">
		<div class="toolbar-inner menubar-nav">
			<a href="dashboard" class="nav-link">
				<svg xmlns="http://www.w3.org/2000/svg" width="22" height="22" fill="none" xmlns:v="https://vecta.io/nano"><path d="M21.44 11.035a.75.75 0 0 1-.69.465H18.5V19a2.25 2.25 0 0 1-2.25 2.25h-3a.75.75 0 0 1-.75-.75V16a.75.75 0 0 0-.75-.75h-1.5a.75.75 0 0 0-.75.75v4.5a.75.75 0 0 1-.75.75h-3A2.25 2.25 0 0 1 3.5 19v-7.5H1.25a.75.75 0 0 1-.69-.465.75.75 0 0 1 .158-.818l9.75-9.75A.75.75 0 0 1 11 .246a.75.75 0 0 1 .533.222l9.75 9.75a.75.75 0 0 1 .158.818z" fill="#b5b5b5"/></svg>
			</a>
            
            <a href="wallet" class="nav-link">
            <svg viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg" width="22" height="22" fill="#b5b5b5"><path d="M0 4c0-1.1.9-2 2-2h15a1 1 0 0 1 1 1v1H2v1h17a1 1 0 0 1 1 1v10a2 2 0 0 1-2 2H2a2 2 0 0 1-2-2V4zm16.5 9a1.5 1.5 0 1 0 0-3 1.5 1.5 0 0 0 0 3z"/></svg>
			</a>
			
			<a href="#" class="nav-link active">
            <svg viewBox="0 0 576 512" xmlns="http://www.w3.org/2000/svg" width="30" height="30" fill="none"><path d="M576 128v160c0 17.67-14.31 32-32 32s-32-14.33-32-32V205.3l-169.4 169.4C336.4 380.9 328.2 384 320 384s-16.38-3.125-22.62-9.375L192 269.3l-137.4 137.4C48.38 412.9 40.19 416 32 416c-18.28 0-32-14.95-32-32c0-8.188 3.125-16.38 9.375-22.62l160-160C175.6 195.1 183.8 192 192 192s16.38 3.125 22.62 9.375L320 306.8L466.8 160H384c-17.69 0-32-14.33-32-32s14.31-32 32-32h160C560.8 96 576 109.4 576 128z"/></svg>
			</a>

            
			<p class="nav-link side-opener">
				<svg xmlns="http://www.w3.org/2000/svg" width="16" height="21" fill="#b5b5b5" xmlns:v="https://vecta.io/nano"><path d="M8 7.75a3.75 3.75 0 1 0 0-7.5 3.75 3.75 0 1 0 0 7.5zm7.5 9v1.5c-.002.199-.079.39-.217.532C13.61 20.455 8.57 20.5 8 20.5s-5.61-.045-7.282-1.718C.579 18.64.501 18.449.5 18.25v-1.5a7.5 7.5 0 1 1 15 0z"/></svg>
            </p>
		</div>
	</div>
	<!-- Menubar -->
    </div>

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
    <script src="https://checkout.flutterwave.com/v3.js"></script>
    <script src="<?php echo($file)?>"></script>
    <script src="<?php echo($js)?>translate.js"></script>
    <script type="text/javascript" src="//translate.google.com/translate_a/element.js?cb=googleTranslateElementInit"></script>
    <script type="text/javascript" src="//translate.google.com/#en/hi/Hello"></script> 
    <script type="module" defer src="<?php echo($js)?>market/market.js"></script>
    <script type="text/javascript" src="//raw.githubusercontent.com/shantanubala/haptics.js/master/haptics.js"></script>
    <script src="../assets/js/scripts.bundle.js"></script>
    <script src="../assets/js/custom/sidebar.js"></script>
    <script src="../assets/plugins/apexcharts/apexcharts.min.js"></script>
    <script src="../assets/js/pages/market-page-v1.js"></script>
    <script src="../assets/js/custom/navbar.js"></script>
</body>


</html>