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
    <title class="notranslate"><?php echo(strip_tags($platform_name))?> | Dashboard</title>
    <meta content="<?php echo(strip_tags($platform_name))?> trading platform" class="notranslate" property="og:title">
    <meta content="<?php echo(strip_tags($platform_name))?> trading platform" class="notranslate" property="twitter:title">
    <meta name="description" content="<?php echo(strip_tags($platform_name))?> trading platform" class="notranslate" />
    <meta name="theme-color" content="#1E1F25">
    <link rel="stylesheet" href="https://unpkg.com/swiper@8/swiper-bundle.min.css"/>
    <script src="https://unpkg.com/swiper@8/swiper-bundle.min.js"></script>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/sweetalert2@11/dist/sweetalert2.min.css" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/jquery-nice-select/1.1.0/css/nice-select.min.css" integrity="sha512-gZ++tSY7j9g1X5pdl66iRS0LlwM651c01qmPvvrLpzjAU6YewsGmmKzBSSMSmc5QwDFi1Cdm42Hc6iJgA4Hf7Q==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="https://code.jquery.com/ui/1.13.2/themes/base/jquery-ui.min.css" integrity="sha256-SPgQ7ALL0hXuv5BjENqa51GZ1SO/CP1N1X/gN8fV8z0=" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link href="bundle/logo/<?php echo($icon)?>" rel="shortcut icon" type="image/x-icon" />
    <link href="../assets/css/styles.bundle.css" rel="stylesheet" />
    <link href="../assets/plugins/apexcharts/apexcharts.css" rel="stylesheet" />
    <link href="../assets/css/pages/dashboard-v1.css" rel="stylesheet" />
    <link href="<?php echo($style)?>" rel="stylesheet" />
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

    </style>
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
		<div class="to-add container">
			<div class="main-bar">
				<div class="left-content notranslate">
					<h4 class="title mb-0 page-title">Home</h4>
                    <a class="navbar-brand outside"
                            href="../index" style="font-size: 25px; display: flex; align-items: center;"><img class="navbar-brand__icon <?php echo($keep_default)?>"
            src="bundle/logo/<?php echo($logo)?>" style="width: <?php echo($logo_width)?>px;" alt="C" /><p class="<?php echo($name_header)?>"><?php echo($platform_name)?></p>
                            </a>
				</div>
                
                
				<div class="mid-content">
                <p class="top-balance balance-usd hider">USD 0</p>
                    <!-- old nav -->
                    <nav class="navbar outside navbar-expand-lg header-navbar header-navbar-dashboard--v1">
                        <div class="container container--dashboard-nav"><button class="navbar-toggler outside ml-auto" type="button"
                            data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent"
                            aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation"><img
                                src="../assets/media/images/icons/menu.svg" alt="MENU" /></button> 
                                
                            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                                <div class="navbar-collapse__content">
                                    <ul class="navbar-nav me-auto">
                                    <li class="nav-item"><a class="nav-link active" href="#">Dashboard</a></li>
                                        
                                        <li class="nav-item"><a class="nav-link" href="wallet">Wallet</a></li>
                                        <li class="nav-item"><a class="nav-link" href="market">Market</a></li>
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
                                        
                                        <!-- <div class="forms-group__items crypto-item" id="usdt" data-selected="usd"><img
                                                class="fg-items__icon" src="../assets/media/images/icons/usdt.svg"
                                                alt=""></div>
                                                <div class="forms-group__items crypto-item" id="btc" data-selected="btc"><img
                                                class="fg-items__icon" src="../assets/media/images/icons/logo-btc.svg"
                                                alt=""></div>
                                        <div class="forms-group__items crypto-item" id="eth" data-selected="eth"><img class="fg-items__icon"
                                                src="../assets/media/images/icons/logo-eth.svg" alt=""></div>
                                        <div class="forms-group__items crypto-item" id="bnb" data-selected="bnb"><img class="fg-items__icon"
                                                src="../assets/media/images/icons/logo-bnb.svg" alt=""></div> -->
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
                        <div class="standard-card standard-card--type-3-v1 assets__item">
                            <div class="container">
                                <div class="standard-card__content">
                                    <div class="standard-card__content-graph"><img
                                            src="../assets/media/images/icons/Bitcoin.svg" alt=""
                                            class="standard-card__content-image">
                                        <div class="standard-card__content-chart-wrapper graph-area">
                                            <img class="btc-graph" src="" alt="">
                                            <!-- <div id="standard-card__content-chart-3"
                                                class="standard-card__content-chart-render"></div> -->
                                        </div>
                                    </div>
                                    <div class="standard-card__content-percentage"><img
                                            class="standard-card__content-arrow btc-arrow"
                                            src="" alt="">
                                        <p class="standard-card__content-value btc-change"></p>
                                    </div>
                                    <div class="standard-card__content-desc">
                                        <p class="standard-card__content-desc-currency">Bitcoin</p>
                                        <div class="standard-card__content-desc-prices">
                                            <p class="standard-card__content-desc-price btc-price"><span class="notranslate"><?php echo($ip_addr)?></span> 0.00</p>
                                            <p class="standard-card__content-desc-token">BTC</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="standard-card standard-card--type-3-v1 assets__item">
                            <div class="container">
                                <div class="standard-card__content">
                                    <div class="standard-card__content-graph"><img
                                            src="../assets/media/images/icons/ETH.svg" alt=""
                                            class="standard-card__content-image">
                                        <div class="standard-card__content-chart-wrapper graph-area">
                                        <img class="eth-graph" src="" alt="">
                                            <!-- <div id="standard-card__content-chart-5"
                                                class="standard-card__content-chart-render"></div> -->
                                        </div>
                                    </div>
                                    <div class="standard-card__content-percentage"><img
                                            class="standard-card__content-arrow eth-arrow"
                                            src="" alt="">
                                        <p class="standard-card__content-value eth-change"></p>
                                    </div>
                                    <div class="standard-card__content-desc">
                                        <p class="standard-card__content-desc-currency">Ethereum</p>
                                        <div class="standard-card__content-desc-prices">
                                            <p class="standard-card__content-desc-price eth-price"><span class="notranslate"><?php echo($ip_addr)?></span> 0.00</p>
                                            <p class="standard-card__content-desc-token">ETH</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="standard-card standard-card--type-3-v1 assets__item">
                            <div class="container">
                                <div class="standard-card__content">
                                    <div class="standard-card__content-graph"><img
                                            src="../assets/media/images/icons/logo-usdt.svg" alt=""
                                            class="standard-card__content-image">
                                        <div class="standard-card__content-chart-wrapper graph-area">
                                        <img class="usdt-graph" src="" alt="">
                                            <!-- <div id="standard-card__content-chart-3-2"
                                                class="standard-card__content-chart-render"></div> -->
                                        </div>
                                    </div>
                                    <div class="standard-card__content-percentage"><img
                                            class="standard-card__content-arrow usdt-arrow"
                                            src="" alt="">
                                        <p class="standard-card__content-value usdt-change"></p>
                                    </div>
                                    <div class="standard-card__content-desc">
                                        <p class="standard-card__content-desc-currency">Tether</p>
                                        <div class="standard-card__content-desc-prices">
                                            <p class="standard-card__content-desc-price usdt-price"><span class="notranslate"><?php echo($ip_addr)?></span> 0.00</p>
                                            <p class="standard-card__content-desc-token">USDT</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="standard-card standard-card--type-3-v1 assets__item">
                            <div class="container">
                                <div class="standard-card__content">
                                    <div class="standard-card__content-graph"><img
                                            src="../assets/media/images/icons/logo-bnb.svg" alt=""
                                            class="standard-card__content-image">
                                        <div class="standard-card__content-chart-wrapper graph-area">
                                        <img class="bnb-graph" src="" alt="">
                                            <!-- <div id="standard-card__content-chart-5-2"
                                                class="standard-card__content-chart-render"></div> -->
                                        </div>
                                    </div>
                                    <div class="standard-card__content-percentage"><img
                                            class="standard-card__content-arrow bnb-arrow"
                                            src="" alt="">
                                        <p class="standard-card__content-value bnb-change"></p>
                                    </div>
                                    <div class="standard-card__content-desc">
                                        <p class="standard-card__content-desc-currency">Binance Coin</p>
                                        <div class="standard-card__content-desc-prices">
                                            <p class="standard-card__content-desc-price bnb-price"><span class="notranslate"><?php echo($ip_addr)?></span> 0.00</p>
                                            <p class="standard-card__content-desc-token">BNB</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
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
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.1.0/jquery.min.js"></script>
    <?php if(!empty($file)): ?>
    <script src="<?php echo $file; ?>"></script>
    <?php endif; ?>
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11/dist/sweetalert2.all.min.js" integrity="sha256-JuxMxDPZWS9ep66F/1PfrxGX2YeliYg+6TSGT+b/xGaxOmQ=" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-nice-select/1.1.0/js/jquery.nice-select.min.js" integrity="sha512-3gCbm7AzYhW+xhNN6EQeNE5r0Qa2bUyGJPD7W82dManIeZDV4SSQdlqzTeWY5Avzkdxl3pNGdisz8wjr3/x6iQ==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <script src="https://code.jquery.com/ui/1.13.2/jquery-ui.min.js" integrity="sha256-lHWgXPm9Y1w4vFvS+s8KekJy5o+1OtMQS8gkP7vGD18=" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <script src="<?php echo($js)?>translate.js"></script>
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
    <script type="text/javascript" src="//translate.google.com/translate_a/element.js?cb=googleTranslateElementInit"></script>
    <script type="module" defer src="<?php echo($js)?>dashboard.js"></script>
    <script type="text/javascript" src="//raw.githubusercontent.com/shantanubala/haptics.js/master/haptics.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/apexcharts@3.44.0/dist/apexcharts.min.js" integrity="sha256-0DPZWS9ep66F/1PfrxGX2YeliYg+6TSGT+b/xGaxOmQ=" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.min.js" integrity="sha256-0g0N3zrciJ6TP2PzefDs2fzGEylh4G6dkprdFMDBvlA=" crossorigin="anonymous"></script>

</body>
 
</html>