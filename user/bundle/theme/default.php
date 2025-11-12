<?php

$file = fopen("../../../index.php", "w");
fwrite($file, 


'

<?php
foreach (glob("user/bundle/db/config.php") as $config){include_once($config);}
foreach (glob("user/bundle/connect/platform.php") as $platform) {
	include $platform;
}
foreach (glob("user/bundle/connect/theme.php") as $theme) {
	include $theme;
}
?>

<!doctype html>
<html lang="en">

<meta http-equiv="content-type" content="text/html;charset=UTF-8" />

<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width,initial-scale=1" />
    <title class="notranslate"><?php echo(strip_tags($platform_name))?></title>
    <meta content="<?php echo(strip_tags($platform_name))?> trading platform" class="notranslate" property="og:title">
    <meta content="<?php echo(strip_tags($platform_name))?> trading platform" class="notranslate" property="twitter:title">
    <meta name="description" content="<?php echo(strip_tags($platform_name))?> trading platform" class="notranslate" />
    <link href="user/bundle/logo/<?php echo($icon)?>" rel="shortcut icon" type="image/x-icon" />
    <link href="assets/css/styles.bundle.css" rel="stylesheet" />
    <link href="assets/plugins/slick/slick.css" rel="stylesheet" />
    <link href="assets/css/pages/landing-page-v1.css" rel="stylesheet" />
    <link href="<?php echo($style)?>" rel="stylesheet" />
</head>

<body class="">
    <!-- Language selector start -->
    <div id="google_translate_element"></div>
    <div class="trans-dropdown trans-dropdown-home" tab-index="0">
        <button id="trans-dropdown-btn"></button>
        <ul class="trans-dropdown-content" id="trans-dropdown-content"></ul>
    </div>
    <!-- Language selector end -->
    <nav class="navbar navbar-expand-lg header-navbar header-navbar--v1">
        <div class="container"><a class="navbar-brand notranslate" href="#"><img class="navbar-brand__icon <?php echo($logo_header)?>"
                    src="user/bundle/logo/<?php echo($logo)?>" style="width: <?php echo($logo_width)?>px;" alt="C" /> <p style="font-size: 22px;" class="<?php echo($name_header)?>"><?php echo($platform_name)?>
                    
        </p> </a><button
                class="navbar-toggler js-navbar-toggler ml-auto" type="button" data-bs-toggle="collapse"
                data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false"
                aria-label="Toggle navigation"><img src="assets/media/images/icons/menu.svg" alt="MENU" /></button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <div class="navbar-collapse__content">
                    <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                        
                        <li class="nav-item"><a class="nav-link" href="#">Home</a></li>
                        
                        <li class="nav-item"><a class="nav-link" href="terms.php">Terms</a></li>
                        <li class="nav-item"><a class="nav-link" href="privacy.php">Privacy Policy</a></li>
                    </ul>
                    <div class="navbar-buttons navbar-buttons--mobile"><a href="user/login.php" class="btn btn-secondary btn-sm">Sign
                        in</a> <a href="user/register.php" class="btn btn-primary btn-sm">Get Started</a></div>
            </div>
        </div>
        <div class="navbar-buttons navbar-buttons--dekstop"><a href="user/login.php" class="btn btn-secondary btn-sm">Sign in</a>
            <a href="user/register.php" class="btn btn-primary btn-sm">Get Started</a></div>
    </div>
    </nav>
    <section class="hero">
        <div class="hero__background hero__background--gradient"><img class="hero__gradient-bg"
                src="assets/media/images/landing-page-gradient-bg.svg" alt="Background Gradient Hero" /></div>
        <div class="hero__background hero__background--pattern"><img class="hero__pattern-bg"
                src="assets/media/images/landing-page-pattern.svg" alt="Background Pattern Hero" /></div>
        <div class="hero__background--mobile hero__background--gradient"><img class="hero__gradient-bg"
                src="assets/media/images/mobile-responsive/mobile-landing-page-hero-gradient.png"
                alt="Background Gradient Hero" /></div>
        <div class="hero__background--mobile hero__background--pattern"><img class="hero__pattern-bg"
                src="assets/media/images/mobile-responsive/mobile-landing-page-hero-pattern.png"
                alt="Background Pattern Hero" /></div>
        <div class="container">
            <div class="hero__content">
                <h1 class="hero__title mx-auto">A trusted and secure cryptocurrency trading platform.</h1>
                <p class="fb-lg mx-auto hero__subtitle">Your guide to the world of an open financial system. Get started
                    with the easiest and most secure platform to buy and trade cryptocurrency.</p><a
                    href="user/register.php" class="btn btn-primary btn-lg btn-pill mx-auto hero__button">Get Started Now</a>
            </div>
        </div>
    </section>
    <section class="grid-graph">
        <div class="container">
            <div class="grid-graph__group assets-div" style="position: relative;">
                <div class="grid-graph__item">
                    <div class="grid-graph-item__content">
                        <div class="grid-graph-item"><img class="grid-graph-item__crypto-icon"
                                src="assets/media/images/icons/logo-btc.svg" alt="btc"></div>
                        <div class="grid-graph-item grid-graph-item__detail">
                            <p class="fb-regular grid-graph-item__name">Bitcoin</p>
                            <p class="fd-md fd-md--bold grid-graph-item__price btc-price">USD 0.00</p>
                        </div>
                        <div class="grid-graph-item">
                            <p class="fb-regular grid-graph-item__code">BTC</p>
                        </div>
                    </div>
                    <div class="grid-graph-item__graph">
                        <div class="grid-grap-item-graph__img"><img src="assets/media/images/graph/btc-graph.svg"
                                alt="btc graph"></div>
                        <div class="grid-grap-item-graph__inflution grid-grap-item-graph__inflution--bullish"><img
                                src="assets/media/images/icons/arrow-bullish.svg" alt="Up">
                            <p class="fd-lg--bold">0.00%</p>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </section>
    <section class="feature">
        <div class="feature__background feature__background--gradient"><img class="feature__gradient-bg"
                src="assets/media/images/landing-page-featured-gradient.svg" alt="Background Gradient Feature" />
        </div>
        <div class="feature__background feature__background--pattern"><img class="feature__pattern-bg"
                src="assets/media/images/landing-page-featured-pattern.svg" alt="Background Pattern Feature" /></div>
        <div class="feature__background--mobile feature__background--gradient"><img class="feature__gradient-bg"
                src="assets/media/images/mobile-responsive/mobile-landing-page-featured-gradient.png"
                alt="Background Gradient Feature" /></div>
        <div class="feature__background--mobile feature__background--pattern"><img class="feature__pattern-bg"
                src="assets/media/images/mobile-responsive/mobile-landing-page-featured-pattern.png"
                alt="Background Pattern Feature" /></div>
        <div class="container">
            <h2 class="text-center feature__title">The most trusted cryptocurrency platform.</h2>
            <p class="fb-regular text-center feature__subtitle"><?php echo(strip_tags($platform_name))?> has a variety of features that make it the
                best place to start trading</p>
            <div class="feature__group">
                <div class="feature__items">
                    <div class="feature-items__img"><img src="assets/media/images/icons/icon-portofolio-manager.svg"
                            alt="Portofolio Manager"></div>
                    <h5 class="feature-items__title">Portfolio Manager</h5>
                    <p class="fb-regular feature-items__desc">Buy and sell popular digital currencies, keep track of
                        them in the one place.</p>
                </div>
                <div class="feature__items">
                    <div class="feature-items__img"><img src="assets/media/images/icons/phone.svg" alt="Mobile Apps">
                    </div>
                    <h5 class="feature-items__title">Mobile Apps</h5>
                    <p class="fb-regular feature-items__desc">Stay on top of the markets with the <?php echo(strip_tags($platform_name))?> app for
                        Android or iOS.</p>
                </div>
                <div class="feature__items">
                    <div class="feature-items__img"><img src="assets/media/images/icons/lock.svg"
                            alt="Vault protection"></div>
                    <h5 class="feature-items__title">Vault protection</h5>
                    <p class="fb-regular feature-items__desc">For added security, store your funds in a vault with time
                        delayed withdrawals.</p>
                </div>
            </div>
        </div>
    </section>
    <section class="buy-sell">
        <div class="buy-sell__background--mobile buy-sell__background--pattern"><img class="buy-sell__pattern-bg"
                src="assets/media/images/mobile-responsive/mobile-landing-page-buy-sell-pattern.png"
                alt="Background Pattern Buy Sell" /></div>
        <div class="container">
            <h2 class="text-center buy-sell__title">One click, instant payout with credit or debit card.</h2>
            <p class="fb-regular text-center buy-sell__subtitle">Become a crypto owner in minutes using your debit or
                credit card and quickly purchase top cryptocurrencies.</p>
            <div class="buy-sell-cards">
                <div class="buy-sell-cards__container">
                    <ul class="buy-sell-cards__header nav nav-tabs" id="buySellTab" role="tablist">
                        <li class="nav-item" role="presentation"><button
                                class="nav-link fb-lg--bold buy-sell-cards__link active" id="buy-tab"
                                data-bs-toggle="tab" data-bs-target="#buy-tab-pane" type="button" role="tab"
                                aria-controls="buy-tab-pane" aria-selected="true">Buy</button></li><span
                            class="separator"></span>
                        <!-- <li class="nav-item" role="presentation"><button
                                class="nav-link fb-lg--bold buy-sell-cards__link" id="sell-tab" data-bs-toggle="tab"
                                data-bs-target="#sell-tab-pane" type="button" role="tab" aria-controls="sell-tab-pane"
                                aria-selected="false">Sell</button></li> -->
                    </ul>
                    <div class="tab-content" id="buySellTabContent">
                        <div class="tab-pane fade show active" id="buy-tab-pane" role="tabpanel"
                            aria-labelledby="buy-tab" tabindex="0">
                            <div class="buy-sell-cards__detail text-center">
                                <p class="fb-regular notes">1 <span class="cur-coin"></span> is roughly</p>
                                <p class="fd-sm fd-sm--bold value"><span class="cur-coin-price"></span> <span class="fb-lg currency">USD</span></p>
                            </div>
                            <div class="buy-sell-cards__forms">
                                <div class="d-block forms-currency__box">
                                    <div class="forms-currency">
                                        <div class="forms-group forms-group--value"><input id="pay-value" type="number" min="0"
                                                class="form-control forms-currency__value"></div>
                                        <div class="forms-currency__line"></div>
                                        <div class="forms-group forms-group--currency js-forms-group--currency"
                                            id="custom-select1">
                                            <div class="forms-group__items selected" data-selected="usd"><img
                                                    class="fg-items__icon" src="assets/media/images/icons/usd.svg"
                                                    alt="">
                                                <p class="fg-items__value">USD</p>
                                            </div><img class="forms-currency__icon-arrow-down"
                                                src="assets/media/images/icons/arrow-down.svg" alt="">
                                            
                                        </div>
                                    </div>
                                </div>
                                <div class="d-block forms-currency__box">
                                    <div class="forms-currency">
                                        <div class="forms-group forms-group--value"><input readonly id="get-value" type="number" min="0"
                                                value="0" class="form-control forms-currency__value"></div>
                                        <div class="forms-currency__line"></div>
                                        <div class="forms-group forms-group--currency js-forms-group--currency"
                                            id="custom-select2">
                                            <div class="forms-group__items crypto-item active selected" id="btcs" data-selected="btc"><img
                                                    class="fg-items__icon"
                                                    src="assets/media/images/icons/logo-btc.svg" alt="">
                                                <p class="fg-items__value">BTC</p>
                                            </div><img class="forms-currency__icon-arrow-down"
                                                src="assets/media/images/icons/arrow-down.svg" alt="">
                                            <div class="forms-group__dropdown js-forms-group__dropdown get-select">
                                                <div class="forms-group__items crypto-item active" id="btc" data-selected="btc"><img
                                                        class="fg-items__icon"
                                                        src="assets/media/images/icons/logo-btc.svg" alt="">
                                                    <p class="fg-items__value">BTC</p>
                                                </div>
                                                <!-- <div class="forms-group__items crypto-item" id="usd" data-selected="usd"><img
                                                        class="fg-items__icon"
                                                        src="assets/media/images/icons/usd.svg" alt="">
                                                    <p class="fg-items__value">USD</p>
                                                </div> -->
                                                <div class="forms-group__items crypto-item" id="eth" data-selected="eth"><img
                                                        class="fg-items__icon"
                                                        src="assets/media/images/icons/logo-eth.svg" alt="">
                                                    <p class="fg-items__value">ETH</p>
                                                </div>
                                                <div class="forms-group__items crypto-item" id="bnb" data-selected="bnb"><img
                                                        class="fg-items__icon"
                                                        src="assets/media/images/icons/logo-bnb.svg" alt="">
                                                    <p class="fg-items__value">BNB</p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div><a href="user/login.php" class="btn btn-primary btn-lg btn-pill" id="exch-btn">Buy Now</a>
                            </div>
                        </div>
                        <div class="tab-pane fade" id="sell-tab-pane" role="tabpanel" aria-labelledby="sell-tab"
                            tabindex="0">
                            <div class="buy-sell-cards__detail text-center">
                                <p class="fb-regular notes">1 BTC is roughly</p>
                                <p class="fd-sm fd-sm--bold value">53,260.20 <span class="fb-lg currency">USD</span></p>
                            </div>
                            <div class="buy-sell-cards__forms">
                                <div class="d-block forms-currency__box">
                                    <div class="forms-currency">
                                        <div class="forms-group forms-group--value"><input type="number" min="0"
                                                value="5000" class="form-control forms-currency__value"></div>
                                        <div class="forms-currency__line"></div>
                                        <div class="forms-group forms-group--currency js-forms-group--currency"
                                            id="custom-select3">
                                            <div class="forms-group__items selected" data-selected="usd"><img
                                                    class="fg-items__icon" src="assets/media/images/icons/usd.svg"
                                                    alt="">
                                                <p class="fg-items__value">USD</p>
                                            </div><img class="forms-currency__icon-arrow-down"
                                                src="assets/media/images/icons/arrow-down.svg" alt="">
                                            <div class="forms-group__dropdown js-forms-group__dropdown">
                                                <div class="forms-group__items active" data-selected="usd"><img
                                                        class="fg-items__icon"
                                                        src="assets/media/images/icons/usd.svg" alt="">
                                                    <p class="fg-items__value">USD</p>
                                                </div>
                                                <div class="forms-group__items" data-selected="btc"><img
                                                        class="fg-items__icon"
                                                        src="assets/media/images/icons/logo-btc.svg" alt="">
                                                    <p class="fg-items__value">BTC</p>
                                                </div>
                                                <div class="forms-group__items" data-selected="eth"><img
                                                        class="fg-items__icon"
                                                        src="assets/media/images/icons/logo-eth.svg" alt="">
                                                    <p class="fg-items__value">ETH</p>
                                                </div>
                                                <div class="forms-group__items" data-selected="bnb"><img
                                                        class="fg-items__icon"
                                                        src="assets/media/images/icons/logo-bnb.svg" alt="">
                                                    <p class="fg-items__value">BNB</p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="d-block forms-currency__box">
                                    <div class="forms-currency">
                                        <div class="forms-group forms-group--value"><input type="number" min="0"
                                                value="0.8511" class="form-control forms-currency__value"></div>
                                        <div class="forms-currency__line"></div>
                                        <div class="forms-group forms-group--currency js-forms-group--currency"
                                            id="custom-select4">
                                            <div class="forms-group__items selected" data-selected="usd"><img
                                                    class="fg-items__icon" src="assets/media/images/icons/usd.svg"
                                                    alt="">
                                                <p class="fg-items__value">USD</p>
                                            </div><img class="forms-currency__icon-arrow-down"
                                                src="assets/media/images/icons/arrow-down.svg" alt="">
                                            <div class="forms-group__dropdown js-forms-group__dropdown">
                                                <div class="forms-group__items active" data-selected="usd"><img
                                                        class="fg-items__icon"
                                                        src="assets/media/images/icons/usd.svg" alt="">
                                                    <p class="fg-items__value">USD</p>
                                                </div>
                                                <div class="forms-group__items" data-selected="btc"><img
                                                        class="fg-items__icon"
                                                        src="assets/media/images/icons/logo-btc.svg" alt="">
                                                    <p class="fg-items__value">BTC</p>
                                                </div>
                                                <div class="forms-group__items" data-selected="eth"><img
                                                        class="fg-items__icon"
                                                        src="assets/media/images/icons/logo-eth.svg" alt="">
                                                    <p class="fg-items__value">ETH</p>
                                                </div>
                                                <div class="forms-group__items" data-selected="bnb"><img
                                                        class="fg-items__icon"
                                                        src="assets/media/images/icons/logo-bnb.svg" alt="">
                                                    <p class="fg-items__value">BNB</p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div><button class="btn btn-primary btn-lg btn-pill">Buy Now</button>
                            </div>
                        </div>
                    </div>
                </div><img class="buy-sell-cards__illustration" src="assets/media/images/buy-sell-illustration.svg"
                    alt="Illustration">
            </div>
        </div>
    </section>
    <section class="why-choose-us">
        <div class="why-choose-us__background why-choose-us__background--gradient"><img
                class="why-choose-us__gradient-bg" src="assets/media/images/landing-page-why-choose-us-gradient.svg"
                alt="Background Gradient Feature" /></div>
        <div class="why-choose-us__background why-choose-us__background--pattern"><img class="why-choose-us__pattern-bg"
                src="assets/media/images/landing-page-why-choose-us-pattern.png" alt="Background Pattern Feature" />
        </div>
        <div class="why-choose-us__background--mobile why-choose-us__background--gradient"><img
                class="why-choose-us__gradient-bg"
                src="assets/media/images/mobile-responsive/mobile-landing-page-why-choose-us-gradient.png"
                alt="Background Gradient Why Choose Us" /></div>
        <div class="why-choose-us__background--mobile why-choose-us__background--pattern"><img
                class="why-choose-us__pattern-bg"
                src="assets/media/images/mobile-responsive/mobile-landing-page-why-choose-us-pattern.png"
                alt="Background Pattern Why Choose Us" /></div>
        <div class="why-choose-us__background--mobile why-choose-us__background--pattern-2"><img
                class="why-choose-us__pattern-bg"
                src="assets/media/images/mobile-responsive/mobile-landing-page-why-choose-us-pattern-2.png"
                alt="Background Pattern Why Choose Us" /></div>
        <div class="container">
            <h2 class="text-center why-choose-us__title">We are the most trusted cryptocurrency platform.</h2>
            <p class="fb-regular text-center why-choose-us__subtitle">We believe <?php echo(strip_tags($platform_name))?> is here to stay — and that a
                future worth building is one which opens its doors and invites everyone in.</p>
            <div class="why-choose-us__groups">
                <div class="why-choose-us__items">
                    <div class="why-choose-us-items__header"><img class="why-choose-us-items__icon"
                            src="assets/media/images/icons/eyes.svg" alt="Clarity" /></div>
                    <div class="why-choose-us-items__content">
                        <h5 class="why-choose-us-item__title">Clarity</h5>
                        <p class="fb-regular why-choose-us-item__desc">We help you make sense of the coins, the terms,
                            the dense charts and market changes.</p>
                    </div>
                </div>
                <div class="why-choose-us__items">
                    <div class="why-choose-us-items__header"><img class="why-choose-us-items__icon"
                            src="assets/media/images/icons/shield-done.svg" alt="Confidence" /></div>
                    <div class="why-choose-us-items__content">
                        <h5 class="why-choose-us-item__title">Confidence</h5>
                        <p class="fb-regular why-choose-us-item__desc">Our markets are always up to date, sparking
                            curiosity with<br>real-world relevance.</p>
                    </div>
                </div>
                <div class="why-choose-us__items">
                    <div class="why-choose-us-items__header"><img class="why-choose-us-items__icon"
                            src="assets/media/images/icons/community.svg" alt="Community" /></div>
                    <div class="why-choose-us-items__content">
                        <h5 class="why-choose-us-item__title">Community</h5>
                        <p class="fb-regular why-choose-us-item__desc">We supports the crypto community, putting data in
                            the hands which need it most.</p>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="testimony">
        <div class="testimony__background testimony__background--gradient"><img class="testimony__gradient-bg"
                src="assets/media/images/landing-page-testimony-gradient.png" alt="Background Gradient Testimony" />
        </div>
        <div class="testimony__background testimony__background--pattern"><img class="testimony__pattern-bg"
                src="assets/media/images/landing-page-testimony-pattern.png" alt="Background Pattern Testimony" />
        </div>
        <div class="container">
            <h2 class="text-center testimony__title">What media says about <?php echo(strip_tags($platform_name))?>?</h2>
            <div class="testimony__container">
                <div class="testimony__carousel">
                    <div class="tetimony__items" data-slide-name="Fores">
                        <div class="testimony-items__box text-center">
                            <p class="testimony-items__title">Fores</p>
                            <p class="fb-regular testimony-items__detail">“Derivative exchange
                                America-based<br><?php echo(strip_tags($platform_name))?> believes they will continue to<br>grow in 2020.”</p>
                        </div>
                    </div>
                    <div class="tetimony__items" data-slide-name="Neweeks">
                        <div class="testimony-items__box text-center">
                            <p class="testimony-items__title">Neweeks</p>
                            <p class="fb-regular testimony-items__detail">“Derivative exchange
                                America-based<br><?php echo(strip_tags($platform_name))?> believes they will continue to<br>grow in 2020.”</p>
                        </div>
                    </div>
                    <div class="tetimony__items" data-slide-name="Euronew">
                        <div class="testimony-items__box text-center">
                            <p class="testimony-items__title">Euronew</p>
                            <p class="fb-regular testimony-items__detail">“Derivative exchange
                                America-based<br><?php echo(strip_tags($platform_name))?> believes they will continue to<br>grow in 2020.”</p>
                        </div>
                    </div>
                </div>
                <div class="slick__pagination">
                    <div class="testimony-carousel__arrows"><a href="#" class="testimony-carousel__prev"><img
                                src="assets/media/images/icons/arrow-circle-left.svg" alt="Previous"> </a><a href="#"
                            class="testimony-carousel__next"><img
                                src="assets/media/images/icons/arrow-circle-right.svg" alt="Next"></a></div>
                    <div class="testimony-carousel__prev-next">
                        <div class="testimony-carousel-prev__title">Euronew</div>
                        <div class="testimony-carousel-next__title">Neweeks</div>
                    </div>
                    <div class="testimony-carousel__pagination slick__pagination--dots">
                        <div class="testimony-carousel__slick-slider-dots slick-slider-dots"></div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="mobile-platform">
        <div class="mobile-platform__background mobile-platform__background--pattern"><img
                class="mobile-platform__pattern-bg"
                src="assets/media/images/landing-page-mobile-platform-pattern.png"
                alt="Background Pattern Mobile Platform" /></div>
        <div class="mobile-platform__background--mobile mobile-platform__background--gradient"><img
                class="mobile-platform__gradient-bg"
                src="assets/media/images/mobile-responsive/mobile-landing-page-mobile-platform-gradient.png"
                alt="Background Gradient Mobile Platform" /></div>
        <div class="container">
            <h2 class="text-center mobile-platform__title">Build your crypto portfolio anywhere.</h2>
            <p class="fb-regular text-center mobile-platform__subtitle">A powerful cryptocurrency exchange in your
                pocket. Buy, sell and trade crypto on the go.</p>
            <div class="mobile-platform__illustration"><img
                    src="assets/media/images/landing-page-mobile-platform-illustration.png" alt="Illustration"></div>
            
        </div>
    </section>
    <section class="cta">
        <div class="container">
            <div class="cta__container">
                <p class="fd-sm cta__subtitle">Ready to start trading cryptocurrency?</p>
                <h3 class="cta__title">New users can earn up to $80 in crypto rewards.</h3>
                <form class="mini-form"><input class="form-control mini-form__input"
                        placeholder="Enter you email address" autocomplete="off"> <input type="submit"
                        class="btn btn-primary mini-form__submit" value="Get Started"></form>
            </div>
        </div>
    </section>
    <footer class="footer">
        <div class="container">
            <div class="footer__content">
                <div class="footer__item footer-item-main"><a style="display: flex; margin-bottom: .8rem;" class="navbar-brand notranslate" href="#"><img class="navbar-brand__icon <?php echo($logo_header)?>"
                src="user/bundle/logo/<?php echo($logo)?>" style="width: <?php echo($logo_width)?>px;" alt="C" /> <p style="font-size: 22px;" class="<?php echo($name_header)?>"><?php echo($platform_name)?>
                    
        </p> </a>
                    <p class="fb-lg footer-item-main__desc">Your best crypto partner.</p>
                    <div class="footer-item-main__socmed"><a href="#" class="footer-socmed"><img
                                class="footer-item-main__logo" src="assets/media/images/icons/logo-linkedin.svg"
                                alt="Linkedin" /> </a><a href="#" class="footer-socmed"><img
                                class="footer-item-main__logo" src="assets/media/images/icons/logo-facebook.svg"
                                alt="Facebook" /> </a><a href="#" class="footer-socmed"><img
                                class="footer-item-main__logo" src="assets/media/images/icons/logo-ig.svg"
                                alt="Instagram" /></a></div>
                </div>
                <div class="footer__item footer-item-quick-links">
                    <h6 class="footer__item-title">Quick Links.</h6>
                    <div class="footer-quick-links"><a href="user/login.php" class="fb-md footer-quick-links__link">Buy/Sell</a> <a
                            href="user/login.php" class="fb-md footer-quick-links__link">Wallets</a> <a href="user/login.php"
                            class="fb-md footer-quick-links__link">Trade Now</a> <a href="user/login.php"
                            class="fb-md footer-quick-links__link">Invest</a> <a href="user/login.php"
                            class="fb-md footer-quick-links__link">Pricing</a></div>
                </div>
                <div class="footer__item footer-item-updates">
                    <h6 class="footer__item-title">Submit for updates.</h6>
                    <p class="fb-md footer-item-updates__desc">Subscribe to get update and notify our exchange and
                        products</p>
                    <div class="mini-form-sm__box">
                        <form class="mini-form"><input class="form-control form-control-sm mini-form__input"
                                placeholder="Enter you email address" autocomplete="off"> <input type="submit"
                                class="btn btn-primary btn-sm mini-form__submit" value="Send"></form>
                    </div>
                </div>
            </div>
            <div class="footer__foot">
                <p class="fb-md footer-foot__copyright"><span class="notranslate"><?php echo($domain_url)?> </span>©. All rights reserved.</p>
                <div class="footer-foot__tos-privacy"><a href="terms.php" class="fb-md footer-foot__link">Term of Service</a>
                    <span class="separator"></span> <a href="privacy.php" class="fb-md footer-foot__link">Privacy Policy</a></div>
            </div>
        </div>
    </footer>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.1.0/jquery.min.js"></script>
    <script src="<?php echo($file)?>"></script>
    <script src="<?php echo($js)?>translate_home.js"></script>
    <script type="text/javascript" src="//translate.google.com/translate_a/element.js?cb=googleTranslateElementInit"></script>
    <script type="text/javascript" src="//translate.google.com/#en/hi/Hello"></script> 
    <script type="module" defer src="<?php echo($js)?>homepage/home.js"></script>
    <script src="assets/js/scripts.bundle.js"></script>
    <script src="assets/plugins/slick/slick.min.js"></script>
    <script src="assets/js/custom/custom-select.js"></script>
    <script src="assets/js/pages/landing-page-v1.js"></script>
    <?php echo($l_chat)?>
</body>

</html>
'
);
fclose($file);




$file = fopen("../../../terms.php", "w");
fwrite($file, 

'

<?php
foreach (glob("user/bundle/db/config.php") as $config){include_once($config);}
foreach (glob("user/bundle/connect/platform.php") as $platform) {
	include $platform;
}
foreach (glob("user/bundle/connect/theme.php") as $theme) {
	include $theme;
}
?>

<!doctype html>
<html lang="en">

<meta http-equiv="content-type" content="text/html;charset=UTF-8" />

<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width,initial-scale=1" />
    <title class="notranslate"><?php echo(strip_tags($platform_name))?> | Legal/Terms</title>
    <meta content="<?php echo(strip_tags($platform_name))?> trading platform" class="notranslate" property="og:title">
    <meta content="<?php echo(strip_tags($platform_name))?> trading platform" class="notranslate" property="twitter:title">
    <meta name="description" content="<?php echo(strip_tags($platform_name))?> trading platform" class="notranslate" />
    <link href="user/bundle/logo/<?php echo($icon)?>" rel="shortcut icon" type="image/x-icon" />
    <link href="assets/css/styles.bundle.css" rel="stylesheet" />
    <link href="assets/plugins/slick/slick.css" rel="stylesheet" />
    <link href="assets/css/pages/landing-page-v1.css" rel="stylesheet" />
    <link href="<?php echo($style)?>" rel="stylesheet" />
</head>

<body class="">
    <!-- Language selector start -->
    <div id="google_translate_element"></div>
    <div class="trans-dropdown trans-dropdown-home" tab-index="0">
        <button id="trans-dropdown-btn"></button>
        <ul class="trans-dropdown-content" id="trans-dropdown-content"></ul>
    </div>
    <nav class="navbar navbar-expand-lg header-navbar header-navbar--v1">
        <div class="container"><a class="navbar-brand notranslate" href="index.php"><img class="navbar-brand__icon <?php echo($logo_header)?>"
        src="user/bundle/logo/<?php echo($logo)?>" style="width: <?php echo($logo_width)?>px;" alt="C" /> <p style="font-size: 22px;" class="<?php echo($name_header)?>"><?php echo($platform_name)?>
                    
        </p> </a><button
                class="navbar-toggler js-navbar-toggler ml-auto" type="button" data-bs-toggle="collapse"
                data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false"
                aria-label="Toggle navigation"><img src="assets/media/images/icons/menu.svg" alt="MENU" /></button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <div class="navbar-collapse__content">
                    <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                        
                        <li class="nav-item"><a class="nav-link" href="index.php">Home</a></li>
                        
                        <li class="nav-item"><a class="nav-link" href="#">Terms</a></li>
                        <li class="nav-item"><a class="nav-link" href="privacy.php">Privacy Policy</a></li>
                    </ul>
                    <div class="navbar-buttons navbar-buttons--mobile"><a href="user/login.php" class="btn btn-secondary btn-sm">Sign
                            in</a> <a href="user/register.php" class="btn btn-primary btn-sm">Get Started</a></div>
                </div>
            </div>
            <div class="navbar-buttons navbar-buttons--dekstop"><a href="user/login.php" class="btn btn-secondary btn-sm">Sign in</a>
                <a href="user/register.php" class="btn btn-primary btn-sm">Get Started</a></div>
        </div>
    </nav>
    <section class="hero">
        <div class="hero__background hero__background--gradient"><img class="hero__gradient-bg"
                src="assets/media/images/landing-page-gradient-bg.svg" alt="Background Gradient Hero" /></div>
        <div class="hero__background hero__background--pattern"><img class="hero__pattern-bg"
                src="assets/media/images/landing-page-pattern.svg" alt="Background Pattern Hero" /></div>
        <div class="hero__background--mobile hero__background--gradient"><img class="hero__gradient-bg"
                src="assets/media/images/mobile-responsive/mobile-landing-page-hero-gradient.png"
                alt="Background Gradient Hero" /></div>
        <div class="hero__background--mobile hero__background--pattern"><img class="hero__pattern-bg"
                src="assets/media/images/mobile-responsive/mobile-landing-page-hero-pattern.png"
                alt="Background Pattern Hero" /></div>
        <div class="container">
            <div class="hero__content">
                <div data-elementor-type="wp-page" data-elementor-id="454" class="elementor elementor-454" data-elementor-settings="[]">
                    <div class="elementor-inner">
                    <div class="elementor-section-wrap">
                    <section class="elementor-element elementor-element-3df30e2 elementor-section-boxed elementor-section-height-default elementor-section-height-default elementor-section elementor-top-section" data-id="3df30e2" data-element_type="section">
                    <div class="elementor-container elementor-column-gap-default">
                    <div class="elementor-row">
                    <div class="elementor-element elementor-element-7da7aef elementor-column elementor-col-100 elementor-top-column" data-id="7da7aef" data-element_type="column">
                    <div class="elementor-column-wrap  elementor-element-populated">
                    <div class="elementor-widget-wrap">
                    <div class="elementor-element elementor-element-4817f41 elementor-widget elementor-widget-text-editor" data-id="4817f41" data-element_type="widget" data-widget_type="text-editor.default">
                    <div class="elementor-widget-container">
                    <div class="elementor-text-editor elementor-clearfix"><div class="legal-terms-section prs-container"><h1>Client Agreement and General Terms &amp; Conditions</h1>
                        <br><br><br>
                        <h4>1. Acknowledgement</h4><ul class="no-bullets"><li><p>1.1. This Client Agreement and General Terms &amp; Conditions (hereinafter referred to as “Agreement”) is subject to your acknowledgement PRIOR to opening an account with <?php echo(strip_tags($platform_name))?>. By opening an account and/or using our services you confirm that the Agreement has been read and understood by you and that you unconditionally agree to accept it and be bounded by its provisions. In case you do not agree (partially or wholly) with the terms set forth in the Agreement, please DO NOT proceed with registering with <a href="index.php"><?php echo($domain_url)?></a> .</p></li></ul><h4>2. Agreement</h4><ul class="no-bullets"><li><p>2.1. The Agreement is settled between Advanced Binary Technologies Ltd, reg. no. C44622 having its principal address at <?php echo($address)?>, operating under the trading name “<?php echo(strip_tags($platform_name))?> Trader options” (hereinafter referred to as the “Company”) and yourself (hereinafter referred to as the “Client”).</p></li><li><p>2.2. All the relations, interactions, communication, services provision and other means of cooperation between the Company and the Client are solely ruled by the Agreement without any exceptions, unless stated otherwise. None of the contractual obligations stated in the Agreement can be rejected on the basis of the fact that the Agreement is a “distance contract”.</p></li><li><p>2.3. The Client understands that the Agreement can be only in effect in case the Client is of legal age. Under no circumstances shall the Company provide any services to any person under 18. All the accounts, data, history, log files and any other information of such persons shall be voided immediately without any possibility of restoration.</p></li></ul><h4>3. Services</h4><ul class="no-bullets"><li><p>3.1. The scope of the services offered by the Company is as follows:</p><ul class="no-bullets"><li><p>3.1.1. Trading platform designed for Binary Options trading via Internet</p></li><li><p>3.1.2. Execution of Binary Options trading orders</p></li><li><p>3.1.3. Market data (including but not limited to) currency pairs, metals, spot options, exchange data, commodities, shares market prices, market news, trading signals, analysis tools.</p></li><li><p>3.1.4. Trading accounts denominated in US Dollars and Euro</p></li><li><p>3.1.5. Acceptance, processing and segregation of the Clients’ deposits and funds and processing Clients’ withdrawals</p></li><li><p>3.1.6. Information provided at <a href="index.php"><?php echo($domain_url)?>.</a></p></li><li><p>3.1.7. Customer Support via a variety of communication channels (such as live chat, email, telephone, or other means available at the moment).</p></li><li><p>3.1.8. Any other services offered via <a href="index.php"><?php echo($domain_url)?></a>  or trading platform that are rendered by the third party providers.</p></li></ul></li><li><p>3.2. The list of the services provided may be updated from time to time at the Company’s sole discretion, subject to a prior notice.</p></li></ul><h4>4. “Non Grata” Jurisdictions</h4><ul class="no-bullets"><li><p>4.1. The Company reserves the right to discontinue offering the aforementioned services in certain jurisdictions and/or countries at any time at its sole discretion. The Clients originating and/or residing in such countries will not be allowed to use the Company’s services. No USA citizens or residents are served at present.</p></li><li><p>4.2. The amendments to the restricted countries list can be performed by the Company at any time without prior notice whenever deemed necessary.</p></li></ul><h4>5. Age restrictions and eligibility</h4><ul class="no-bullets"><li><p>5.1. The Company’s services (partially or on the whole) are solely available for those capable of signing legally binding contracts and of legal age. Under no circumstances shall the Company provide any services to persons under 18. Such accounts, in case opened, shall be automatically closed and (if necessary) refunded. No exceptions shall be made from this provision.</p></li><li><p>5.2. The Company reserves a right to deny a Client, refuse to provide its services to a particular individual or a legal entity, cancel any of his/her/its accounts, and discontinue serving the Client at the Company’s sole discretion without explaining the reason. Such cancellations shall be the subject of a prior written notice.</p></li><li><p>5.3. The Company shall not be liable in any way for any piece of information published at <a href="index.php"><?php echo($domain_url)?></a>  by third parties (such as public comments, judgements, advices, opinions, etc) and for any information regarding the Company in any other websites. By the nature of the Internet none of the information can be fully controlled and must therefore be considered carefully prior to making any decisions and/or actions on its basis.</p></li></ul><h4>6. KYC procedures</h4><ul class="no-bullets"><li><p>6.1. Upon registration with <?php echo(strip_tags($platform_name))?> Trader Options and, therefore, acceptance of the Agreement, a Client shall be provided with an account at Ideal Trader Options. The account owner data as well as the other relevant details shall be provided by the Client as required by the Company and the regulation.</p></li><li><p>6.2. The information provided (such as the Client’s name, address, phone number, mobile number, email, etc) shall be subject to KYC procedures and verification.</p></li><li><p>6.3. It is the Client’s sole responsibility and obligation to ensure the information provided is correct, complete, true, accurate, relevant and up-to-date.</p></li><li><p>6.4. The provision of misleading, false or outdated information may be considered a legal offence and may lead to the immediate closure of the Client’s account.</p></li><li><p>6.5. In any cases when the Security department has grounds to suspect that account has been accessed and used by a third party, the Company reserves a right to request a video call via Skype to confirm Client’s identity. In such case the Client must be able to confirm during the video call his/her trade patterns and provide the Company with identification documents. In case of strong grounds’ presence to presume that account has been seized by a third party the Company reserves a right to stop all activity of the account until the identification video call via Skype is made. In considerations of privacy of the Company’s Security department agents during the video call the Client will not have a video of agents.</p><p>If during 15 days after the request submission to confirm the identity of the account holder the Client hasn’t contacted the Company providing convenient time for the call, the Company reserves a right to terminate the account without the reimbursement of any losses or profits.</p></li><li><p>6.6. According to the regulatory requirements, a complete compliance shall be performed by the Company on the Client’s information. The scope of the measures constitutes <?php echo(strip_tags($platform_name))?> Trader Options AML policy.</p></li><li><p>6.7 As a part of the AML policy the client shall be required to verify his/her account information prior to performing any financial or trading transactions. The verification shall include the submission of a color passport/ID copy, residence address proof, credit card possession proof (if applicable) and other documents as required by the EU AML directives. The scope of the documents required can be amended by the Company in accordance with the legislation.<br />If requested documents are not provided during 30 days the Company has a right to refund the deposit and terminate the account. Profits or losses will not be reimbursed in such cases.</p></li></ul><h4>7. Investment advice waiver</h4><ul class="no-bullets"><li><p>7.1. The Client unconditionally agrees that no information provided to the Client by <?php echo(strip_tags($platform_name))?> Trader Options by means of the website, trading platform or any other means shall be considered an investment advice from the Company. None of the information published by the Company shall be intended to affect the Client’s trading decision(s) in any way. The Company shall not bear any liabilities thereof and shall not be liable for any losses incurred as a result of the Client’s trading.</p></li><li><p>7.2. The losses that the Client may bear are restricted solely by his/her personal funds deposited into the Company. No additional fees can be implied as a result of the Client’s trading.</p></li></ul><h4>8. Client’s obligations</h4><ul class="no-bullets"><li><p>8.1. By entering the agreement the Client unconditionally confirms that:</p><ul class="no-bullets"><li><p>8.1.1. All the personal data provided by the Client upon opening the account with <?php echo(strip_tags($platform_name))?> Trader Options are accurate, up-to-date, correct and true</p></li><li><p>8.1.2. The Client is of legal age.</p></li><li><p>8.1.3. The Client is the sole owner and beneficiary of his/her account</p></li><li><p>8.1.4. It is the Client’s sole responsibility to ensure that there are no legal or any other causes preventing him/her from using the Company’s services. The Company shall not be liable for using its services in the jurisdictions which restrict or prohibit binary options trading in any way. Such cases shall be considered abusing the Company’s services and the Company shall not bear any responsibility for the legal consequences of such actions.</p></li><li><p>8.1.5. The funds deposited by the Client have legal origin and do not originate from any sort of criminal activity or any other activity prohibited by the law.</p></li></ul></li><li><p>8.2. The Clients acknowledges that he/she is solely and completely responsible for any activities performed in his/her accounts, including deposits, withdrawals, any placed or displaced orders. The Client acknowledges that under no circumstances the Company shall be liable for the outcomes or consequences.</p></li><li><p>8.3. The Client acknowledges that it is his/her sole responsibility to keep all the account credentials (such as logins, passwords, email addresses, etc) safe and unreachable for any third party. The Company shall not be liable to any damages or losses incurred as a result of the Client’s granting (intentionally or unpremeditatedly) the access to the account to any third parties.</p></li><li><p>8.4. The Client understands and accepts the risks involved into the binary options trading. The Client has read and understood the Risk Notice available at <a href="index.php"><?php echo($domain_url)?></a> prior to opening the account with Ideal Trader Options.</p></li><li><p>8.5. The Client acknowledges that the Company shall not be liable for any technical malfunctions of whatever nature on the Client’s side. Such may include (but not limited to): internet connection malfunctions, delays, blackouts, losses of data and speed between the Company’s servers and the Client’s device(s), any errors or bugs related to any third party (i.e. not provided and/or developed by the Company) software, any disconnections or other malfunctions of any nature on whatever internet provider’s behalf, any losses of data on the Client’s side, any operating system failures, any hardware or software breakdowns on the Client’s side, any malwares, vulnerabilities or viruses, etc. The Company shall not be liable to any damages or losses incurred as a result of abovementioned events.</p></li><li><p>8.6. The Client acknowledges that under no circumstances does the Company guarantee flawless and rapid access to the website and/or platform in all the regions of the world, all the providers and all the rest means of communication. The Company shall not be responsible for any failures resulting from the inadequate conditions of internet connection in various regions as well as any other losses and damages caused by connectivity issues, which the Company can not affect</p></li><li><p>8.7. The Client shall be solely responsible for his/her taxation obligations, governmental fees or any other liabilities implied by the law and shall fulfill them on his/her own.</p></li><li><p>8.8. The Client unconditionally agrees to abide by the Company’s Anti-Money Laundering policy and remain adherent to it at all times. Any breach of the policy as well as any attempt to perform any activities that can be considered or fall under suspicion of money-laundering shall lead to the immediate account termination. The Company reserves a right to report such cases to the corresponding authorities and bodies.</p></li><li><p>8.9. The Client acknowledges that under no circumstances any deposits/withdrawals to/from the third persons shall be performed. Any deposit or withdrawal request intended (or suspected to be intended) to a third person shall be declined in all cases. By using the Company’s services the Client unconditionally agrees that any financial transactions (whether in- or outgoing) must be performed SOLELY by the Client on his/her behalf only. No exceptions shall be made from this provision. Both the Company and the Client agree to make their best effort to comply with the policy and the international AML legislation.</p></li><li><p>8.10. The Client accepts and understands that only one account shall be allowed for a single person. Opening multiple accounts (unless reasonable grounds provided prior to opening) shall be considered an abuse and shall be terminated.</p></li><li><p>8.11. The Client agrees that following or not following any trading signals provided by the Company in cooperation with third party providers shall remain the Client’s sole decision and responsibility. The Company shall not be liable for the results of the trading or any losses caused by it.</p></li></ul><h4>9. Platform Abuse</h4><ul class="no-bullets"><li><p>9.1. The Client unconditionally agrees that some of the existing trading practices (whether performed intentionally or not) shall be considered abusive by the Company and shall lead to the account termination. Such may include (but not limited to):</p><ul class="no-bullets"><li><p>9.1.1. Abusing or manipulating the prices/quotes</p></li><li><p>9.1.2. Abusing system errors</p></li><li><p>9.1.3. Arbitrage trading or latency arbitrage</p></li></ul></li><li><p>9.2. It will remain the Company’s policy to ensure the Client’s convenience and positive experience and to interpret any doubts in favour of the Client. Yet, whenever the Company shall have grounds to believe the Client intentionally abuses or manipulates the platform, the Company reserves a right to terminate such account, modify or close existing orders, decline or cancel closed orders. The Company reserves a right to take appropriate preventive measures to protect itself from any kind of abuse and/or manipulation.</p></li><li><p>9.3. According to Company’s policy multiple accounts operations are prohibited. It is not allowed to trade using third party’s account or give credentials to third party to perform trading on your account. Evidence of multiple accounts activity includes but not restricted to:</p><ul class="no-bullets"><li><p>9.3.1. usage of the same IP address</p></li><li><p>9.3.2. multiple accounts exposing identical deposit/withdrawal patterns</p></li><li><p>9.3.3. multiple accounts displaying same or identical trading patterns</p></li><li><p>9.3.4. group trading is considered a commercial trading which is prohibited</p></li></ul><p>Upon the discovery of such actions the Company reserves a right to terminate all affected accounts without any reimbursement of profit/losses.</p></li></ul><h4>10. Withdrawal procedure and regulations</h4><ul class="no-bullets"><li><p>10.1. The Client will only be allowed to make withdrawal at the end of his trade.</p></li><li><p>10.2. All the withdrawals from the Client’s account (regardless of the amount) shall be performed via withdrawal requests submitted by the Client in the platform only. No requests shall be accepted via any other means, such as telephone conversations, live chat, email, etc.</p></li><li><p>10.3. All the data of the requests, transactions and other interactions related shall be logged and saved accordingly.</p></li><li><p>10.4. All the withdrawals shall undergo an AML compliance check by the Company. The following general rules shall be applied:</p><ul class="no-bullets"><li><p>10.4.1. Withdrawal shall be only performed to the same payment requisites that had previously been used for depositing the account. In case various requisites were used, the withdrawal shall be performed on a proportional basis.</p></li><li><p>10.4.2. In case credit/debit card had been used for deposit, a color photo of the card (with certain numbers and the CVC hidden) shall be requested prior to withdrawal.</p></li></ul></li><li><p>10.5.<b>Note:</b> Mini, Standard, Executive and Vip comes with an upgrade if the profit exceeds expected Amount. It’s the customers decision to choose any of the upgrade plans above their current/active plan when upgrading. Also know that there are taxes and brokerage fee to be paid by new investors only.</p></li><li><p>10.6. Under no circumstances the withdrawal shall be performed to a third party’s payment requisites.</p></li><li><p>10.7. In case the Client’s withdrawal request amount exceeds the actual account balance, such withdrawal request shall be declined.</p></li><li><p>10.8. All commission must be fully paid before withdrawals can be made</p></li></ul><h4>11. Deposits</h4><ul class="no-bullets"><li><p>11.1. No deposits shall be accepted from the third parties. Such deposits shall be refunded immediately. This in particular is related to the credit/debit card deposits. The cardholder name without exceptions must match the account holder name. Any deposits failing to comply with this rule shall be voided immediately.</p></li><li><p>11.2. In case the deposit option nature does not presuppose instant credit and requires certain time to be processed (i.e. local or global bank wire transfer) the deposit shall be performed via a deposit notice. The deposit notice shall be created by the Client in his/her personal area. Upon reception of the funds the Company shall process the deposit request accordingly (i.e. credit the Client’s account with the actual received amount). The Client acknowledges that by nature of the bank transfer in exceptional cases such request may take up to 14 business days to be processed.</p></li></ul><h4>12. Account risks</h4><ul class="no-bullets"><li><p>12.1. The Client acknowledges that by definition he/she is the only person authorized to perform any trading activity in his/her account. Should the Client decide to grant access to his/her account to any third person and authorize this person to trade, the Client unconditionally accepts that he/she will bear complete responsibility for this action. The Company shall not be liable for any results (whether positive or negative) of such behaviour.</p></li><li><p>12.2. The deal closes according to the expiration time. If during the low volatility market there were less than three ticks in a deal it will not be recognized as a valid one. The investment of the deal shall be reimbursed to the trading balance.</p></li></ul><h4>13. Record Keeping</h4><ul class="no-bullets"><li><p>13.1. The Client acknowledges that all the phone conversations, live chat logs, emails and other conversations shall be recorded by the Company.</p></li><li><p>13.2. The records shall remain the Company’s property during the whole storage time.</p></li><li><p>13.3. Under no circumstances shall the Company disclose any information contained in the records unless requested under the court verdict or any other legal request from the governing bodies.</p></li><li><p>13.4. The Client agrees that the data may be used for the Company’s marketing and research activities held from time to time.</p></li></ul><h4>14. Reporting</h4><ul class="no-bullets"><li><p>14.1. The Company shall provide trading reports containing the scope of all the Client’s account activities on a regular basis by email.</p></li><li><p>14.2. The statement shall be considered correct upon reception by the Client.</p></li><li><p>14.3. The Client agrees to opt-in to receive the reports by opening the account with Ideal Trader Options.</p></li><li><p>14.4. The Client has a right to refuse from receiving the reports at anytime via his/her personal area.</p></li><li><p>14.5. The reports shall not be provided in hard-copies.</p></li></ul><h4>15. Copyrights</h4><ul class="no-bullets"><li><p>15.1. The Company’s website, all materials and information contained therein, trading platform, brand name, domain names, etc are protected by the international copyright legislation.</p></li><li><p>15.2. It is strictly prohibited to copy, represent, or in any other way use this information for the purpose of promoting whatever activities and/or businesses.</p></li><li><p>15.3. It is strictly prohibited to copy, publish, display, disclose, rent, modify, lease, distribute, decompile or reverse engineer the <?php echo(strip_tags($platform_name))?> Trader Options trading platform. Any attempts to do so shall be the subject of the court hearings in accordance with the international intellectual property legislation.</p></li></ul><h4>16. Other sources</h4><ul class="no-bullets"><li><p>16.1. Links to other websites owned by the third parties may be posted at the Company’s website.</p></li><li><p>16.2. Such links do not represent authorization, coordination, cooperation, authorization, affiliation, sponsorship or any other kind of relationship with the aforementioned parties. The Company shall not be liable to any damages or losses incurred as a result of the usage of the abovementioned websites.</p></li></ul><h4>17. Amendments</h4><ul class="no-bullets"><li><p>17.1. The Company reserves a right to update and/or amend the provisions of these Terms and Conditions subject to prior notification.</p></li></ul><h4>18. Miscellaneous</h4><ul class="no-bullets"><li><p>18.1. These Terms and Conditions together with the Risk Notice, AML Policy and Privacy policy comprise the complete and entire agreement between the Client and the Company.</p></li><li><p>18.2. The Terms and Conditions do not constitute nor create any rights nor obligations to any third party.</p></li><li><p>18.3. The Client is not allowed to transfer whole or any part of his/her rights or obligations subject to these Terms and Conditions to any third party.</p></li><li><p>18.4. Any notices, news, messages send from the Company to the Customers by means of email, phone, internal platform messages or any other communication means shall be deemed received by the Client within 24 hours from the release. No claims shall be accepted on the failures of delivery, failures to receive and/or read them.</p></li><li><p>18.5. The Terms and Conditions on the whole as well as any disputes arising thereof shall be governed by the law of the area.</p></li></ul><h4>19. Force Majeure</h4><ul class="no-bullets"><li><p>19.1. A Force Majeure Event includes, without limitation, any act, incident or circumstance occasioned by act of God, war, fire, civil commotion, terrorism, flood, storm, interruption of power supply, electronic, communication equipment failure, civil unrest, act of government, labour dispute, inability to communicate with quotes providers for whatever reason, the suspension or liquidation of any third-party whatsoever or any other reason beyond the Company’s reasonable control.</p></li><li><p>19.2. The Company shall not be liable for any kind of loss or damage incurred by the Client due to a Force Majeure Event.</p></li><li><p>19.3. The Client acknowledges that the Company shall in its reasonable opinion determine that a Force Majeure Event occurred or is about to occur; under such circumstances the Company shall take reasonable steps to inform the Client.</p></li><li><p>19.4. If the Company determines that a Force Majeure Event occurred, at Company’s sole discretion and without prejudice to the Client’s rights under this Agreement, the Company may:</p><ul class="no-bullets"><li><p>– close any open positions at a price that the Company considers reasonable</p></li><li><p>– implement amendments to any closed positions</p></li><li><p>– amend the content of this Agreement by reason of impossibility for the Company to comply with it</p></li><li><p>– decline or postpone Client’s funds withdrawal in a certain payment system</p></li></ul></li><li><p>19.5. The Company shall not be considered in breach of this Contract to the extent that performance of its respective obligations (excluding payment obligations) is prevented by a Force Majeure Event that arises.</p></li><li><p>19.6. If a Force Majeure Event occurs, The Company shall, at all times take all reasonable steps within its respective powers and consistent with good faith and international industry practices (but without incurring unreasonable additional costs and at Company’s sole discretion) to resolve every situation as it deems appropriate.</p></li></ul></div><div class="prs-container legal-terms-section"><h2 class="prs-title legal-terms-title">RISK DISCLOSURE STATEMENT</h2><p class="prs-text legal-terms-text">TO THE MAXIMUM EXTENT PERMITTED UNDER APPLICABLE LAW, THE SERVICES, THE SERVICES PROVIDER MATERIALS AND ANY PRODUCT, SERVICE OR OTHER ITEM PROVIDED BY OR ON BEHALF OF SERVICES PROVIDER ARE PROVIDED ON AN “AS IS” AND “AS AVAILABLE” BASIS AND SERVICES PROVIDER EXPRESSLY DISCLAIMS, AND YOU WAIVE, ANY AND ALL OTHER WARRANTIES OF ANY KIND, WHETHER EXPRESS OR IMPLIED, INCLUDING, WITHOUT LIMITATION, IMPLIED WARRANTIES OF MERCHANTABILITY, FITNESS FOR A PARTICULAR PURPOSE, TITLE OR NON-INFRINGEMENT OR WARRANTIES ARISING FROM COURSE OF PERFORMANCE, COURSE OF DEALING OR USAGE IN TRADE. WITHOUT LIMITING THE FOREGOING, SERVICES PROVIDER DOES NOT REPRESENT OR WARRANT THAT THE SITE, THE SERVICES OR SERVICES PROVIDER MATERIALS ARE ACCURATE, COMPLETE, RELIABLE, CURRENT, ERROR-FREE, OR FREE OF VIRUSES OR OTHER HARMFUL COMPONENTS. SERVICES PROVIDER DOES NOT GUARANTEE THAT ANY ORDER WILL BE EXECUTED, ACCEPTED, RECORDED OR REMAIN OPEN. EXCEPT FOR THE EXPRESS STATEMENTS SET FORTH IN THIS AGREEMENT, YOU HEREBY ACKNOWLEDGE AND AGREE THAT YOU HAVE NOT RELIED UPON ANY OTHER STATEMENT OR UNDERSTANDING, WHETHER WRITTEN OR ORAL, WITH RESPECT TO YOUR USE AND ACCESS OF THE SERVICES. WITHOUT LIMITING THE FOREGOING, YOU HEREBY UNDERSTAND AND AGREE THAT SERVICES PROVIDER WILL NOT BE LIABLE FOR ANY LOSSES OR DAMAGES ARISING OUT OF OR RELATING TO: (A) ANY INACCURACY, DEFECT OR OMISSION OF PRICE DATA, (B) ANY ERROR OR DELAY IN THE TRANSMISSION OF SUCH DATA, (C) INTERRUPTION IN ANY SUCH DATA AND (D) ANY DAMAGES INCURRED BY ANOTHER USER’S ACTIONS, OMISSIONS OR VIOLATION OF THIS AGREEMENT.</p><p class="prs-text legal-terms-text">In consideration of the Service Provider agreeing to enter into Agreement with the Customer, Customer acknowledges, understands and agrees that:</p><ol class="prs-text legal-terms-list"><li><strong>Trading Non-Deliverable Bitcoin Settled Products are Very Speculative and Risky.</strong> Trading Non-Deliverable Bitcoin settled products are highly speculative and is suitable only for those Customers who (a) understand and are willing to assume the economic, legal and other risks involved, and (b) are financially able to assume losses significantly in excess of Margin or deposits.<p>Trading with Non-deliverable Bitcoin settled products are not an appropriate investment for retirement funds. Customer represents, warrants and agrees that Customer understands these risks; that Customer is willing and able, financially and otherwise, to assume the risks of Trading with Non-Deliverable Bitcoin settled products and that loss of Customer’s entire Account Balance will not change Customer’s life style.</p></li><li><strong>High Leverage Can Lead To Quick Losses.</strong> The high leverage associated with trading with Non-Deliverable Bitcoin settled products can result in significant losses due to price changes. Customers must maintain the minimum margin requirements on their open positions at all times. It is the Customer’s responsibility to monitor his/her account balance. The Service Provider has the right to liquidate any or all open positions whenever the minimum margin requirement is not maintained. Increasing leverage increases risk.</li><li><strong>Prices, Margin And Valuations Are Set By The Service Provider And May Be Different From Prices Reported Elsewhere.</strong> The Service Provider will provide indicative prices to be used in trading, valuation of Customer positions and determination of Margin requirements. Although the Service Provider expects that these prices will be reasonably related to prices available in the open market, prices reported by the Service Provider may vary from prices available to banks and other participants in what is known as the open market. The Service Provider will exercise considerable discretion in setting and collecting Margin.</li><li><strong>Market Recommendations Are Informational, Customer Makes Independent Decisions, And The Service Provider Is Not An Adviser Or A Fiduciary To Customer.</strong> The market recommendations provided by the Service Provider do not constitute an offer to buy or sell, or the solicitation of an offer to buy or sell, any contracts. Each decision by Customer to enter into a buy or sell order or other transaction with the Service Provider and each decision whether such order or other transaction is appropriate or proper for Customer is an independent decision by Customer. The Service Provider is not acting as an advisor or serving as a fiduciary to Customer. Customer agrees that the Service Provider has no fiduciary duty to Customer and no liability in connection with and is not responsible for any liabilities, claims, damages, costs and expenses, including attorneys’ fees, incurred in connection with Customer following the Service Provider trading recommendations or taking or not taking any action based upon any recommendation or information provided by the Service Provider.</li><li><strong>Recommendations Are Based On Personal Judgments And Are Not Guaranteed.</strong> The market recommendations of the Service Provider are based solely on the judgment of the Service Provider personnel. These market recommendations may or may not be consistent with the market positions or intentions of the Service Provider, its affiliates and employees. The market recommendations of the Service Provider are based upon information believed to be reliable, but the Service Provider cannot and does not guarantee the accuracy or completeness thereof or represent that following such recommendations will reduce or eliminate the risk inherent in Trading with Non-deliverable Bitcoin settled products.</li><li><strong>There is no Central Market or Clearinghouse Guarantee.</strong> Each trade, order or position is a contract directly between the Service Provider and the Customer. There is no clearing house and no guarantee by any other party of the Service Provider payment obligations to the Customer.</li><li><strong>No Guarantees of Profit.</strong> There are no guarantees of profit or freedom from loss in Trading with Non-Deliverable Bitcoin settled products. Customer has received no such guarantees from the Service Provider or from any of its representatives. Customer is aware of the risks inherent in Trading with Non-deliverable Bitcoin settled products and is financially able to bear such risks and withstand any losses incurred.</li><li><strong>Customer May Not Be Able To Close or Open Positions.</strong> Due to market conditions, Website maintenance, technical issues, system failure or other circumstances the Service Provider may be unable to close existing position or open new position at the level specified by Customer, and Customer agrees the Service Provider will bear no liability for failure to do so.</li><li><strong>Service Interference and Third Party Attacks.</strong> There may be third party or other attacks targeting computers/networks, spreading malware, running botnets, (D)DOS attacks, defacing websites, violations of network security, etc. which can material alter, intercept or otherwise interfere with the giving or execution of an Order or the transfer of funds to and from the Customer’s Account. Customer acknowledges, understands and accepts that the Service Provider shall bear no responsibility or liability whatsoever for it.</li><li><strong>Indemnification.</strong> You agree to indemnify and hold harmless Operator and Services Provider, its affiliates, contractors, licensors, and their respective directors, officers, employees and agents from and against any claims, actions, proceedings, investigations, demands, suits, costs, expenses and damages (including attorneys’ fees, fines or penalties imposed by any regulatory authority) arising out of or related to (i) your use of, or conduct in connection with, the Services, (ii) your breach or our enforcement of these Terms, or (iii) your violation of any applicable law, regulation, or rights of any third party during your use of the Service. If you are obligated to indemnify Operator and Services Provider, its affiliates, contractors, licencors, and their respective directors, officers, employees or agents pursuant to this clause, Operator and Services Provider will have the right, in its sole discretion, to control any action or proceeding and to determine whether Operator and Services Provider wishes to settle, and if so, on what terms.</li></ol></div></div>
                    </div>
                    </div>
                    </div>
                    </div>
                    </div>
                    </div>
                    </div>
                    </section>
                    </div>
                    </div>
                    </div>
            </div>
        </div>
    </section>
    
    <footer class="footer">
        <div class="container">
            <div class="footer__content">
                <div class="footer__item footer-item-main"><a style="display: flex; margin-bottom: .8rem;" class="navbar-brand notranslate" href="#"><img class="navbar-brand__icon <?php echo($logo_header)?>"
                src="user/bundle/logo/<?php echo($logo)?>" style="width: <?php echo($logo_width)?>px;" alt="C" /> <p style="font-size: 22px;" class="<?php echo($name_header)?>"><?php echo($platform_name)?>
                    
        </p> </a>
                    <p class="fb-lg footer-item-main__desc">Your best crypto partner.</p>
                    <div class="footer-item-main__socmed"><a href="#" class="footer-socmed"><img
                                class="footer-item-main__logo" src="assets/media/images/icons/logo-linkedin.svg"
                                alt="Linkedin" /> </a><a href="#" class="footer-socmed"><img
                                class="footer-item-main__logo" src="assets/media/images/icons/logo-facebook.svg"
                                alt="Facebook" /> </a><a href="#" class="footer-socmed"><img
                                class="footer-item-main__logo" src="assets/media/images/icons/logo-ig.svg"
                                alt="Instagram" /></a></div>
                </div>
                <div class="footer__item footer-item-quick-links">
                    <h6 class="footer__item-title">Quick Links.</h6>
                    <div class="footer-quick-links"><a href="user/login.php" class="fb-md footer-quick-links__link">Buy/Sell</a> <a
                            href="user/login.php" class="fb-md footer-quick-links__link">Wallets</a> <a href="user/login.php"
                            class="fb-md footer-quick-links__link">Trade Now</a> <a href="user/login.php"
                            class="fb-md footer-quick-links__link">Invest</a> <a href="user/login.php"
                            class="fb-md footer-quick-links__link">Pricing</a></div>
                </div>
                <div class="footer__item footer-item-updates">
                    <h6 class="footer__item-title">Submit for updates.</h6>
                    <p class="fb-md footer-item-updates__desc">Subscribe to get update and notify our exchange and
                        products</p>
                    <div class="mini-form-sm__box">
                        <form class="mini-form"><input class="form-control form-control-sm mini-form__input"
                                placeholder="Enter you email address" autocomplete="off"> <input type="submit"
                                class="btn btn-primary btn-sm mini-form__submit" value="Send"></form>
                    </div>
                </div>
            </div>
            <div class="footer__foot">
                <p class="fb-md footer-foot__copyright"><span class="notranslate"><?php echo($domain_url)?> </span>©. All rights reserved.</p>
                <div class="footer-foot__tos-privacy"><a href="#" class="fb-md footer-foot__link">Term of Service</a>
                    <span class="separator"></span> <a href="privacy.php" class="fb-md footer-foot__link">Privacy Policy</a></div>
            </div>
        </div>
    </footer>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.1.0/jquery.min.js"></script>
    <script src="<?php echo($file)?>"></script>
    <script src="<?php echo($js)?>translate_home.js"></script>
    <script type="text/javascript" src="//translate.google.com/translate_a/element.js?cb=googleTranslateElementInit"></script>
    <script type="text/javascript" src="//translate.google.com/#en/hi/Hello"></script> 
    <script src="assets/js/scripts.bundle.js"></script>
    <script src="assets/plugins/slick/slick.min.js"></script>
    <script src="assets/js/custom/custom-select.js"></script>
    <script src="assets/js/pages/landing-page-v1.js"></script>
    <?php echo($l_chat)?>
</body>


</html>
'
);
fclose($file);




$file = fopen("../../../privacy.php", "w");
fwrite($file, 

'

<?php
foreach (glob("user/bundle/db/config.php") as $config){include_once($config);}
foreach (glob("user/bundle/connect/platform.php") as $platform) {
	include $platform;
}
foreach (glob("user/bundle/connect/theme.php") as $theme) {
	include $theme;
}
?>



<!doctype html>
<html lang="en">

<meta http-equiv="content-type" content="text/html;charset=UTF-8" />

<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width,initial-scale=1" />
    <title class="notranslate"><?php echo(strip_tags($platform_name))?> | Privacy Policy</title>
    <meta content="<?php echo(strip_tags($platform_name))?> trading platform" class="notranslate" property="og:title">
    <meta content="<?php echo(strip_tags($platform_name))?> trading platform" class="notranslate" property="twitter:title">
    <meta name="description" content="<?php echo(strip_tags($platform_name))?> trading platform" class="notranslate" />
    <link href="user/bundle/logo/<?php echo($icon)?>" rel="shortcut icon" type="image/x-icon" />
    <link href="assets/css/styles.bundle.css" rel="stylesheet" />
    <link href="assets/plugins/slick/slick.css" rel="stylesheet" />
    <link href="assets/css/pages/landing-page-v1.css" rel="stylesheet" />
    <link href="<?php echo($style)?>" rel="stylesheet" />
</head>

<body class="">
    <!-- Language selector start -->
    <div id="google_translate_element"></div>
    <div class="trans-dropdown trans-dropdown-home" tab-index="0">
        <button id="trans-dropdown-btn"></button>
        <ul class="trans-dropdown-content" id="trans-dropdown-content"></ul>
    </div>
    <nav class="navbar navbar-expand-lg header-navbar header-navbar--v1">
        <div class="container"><a class="navbar-brand notranslate" href="index.php"><img class="navbar-brand__icon <?php echo($logo_header)?>"
        src="user/bundle/logo/<?php echo($logo)?>" style="width: <?php echo($logo_width)?>px;" alt="C" /> <p style="font-size: 22px;" class="<?php echo($name_header)?>"><?php echo($platform_name)?>
                    
        </p> </a><button
                class="navbar-toggler js-navbar-toggler ml-auto" type="button" data-bs-toggle="collapse"
                data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false"
                aria-label="Toggle navigation"><img src="assets/media/images/icons/menu.svg" alt="MENU" /></button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <div class="navbar-collapse__content">
                    <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                        
                        <li class="nav-item"><a class="nav-link" href="index.php">Home</a></li>
                        
                        <li class="nav-item"><a class="nav-link" href="terms.php">Terms</a></li>
                        <li class="nav-item"><a class="nav-link" href="#">Privacy Policy</a></li>
                    </ul>
                    <div class="navbar-buttons navbar-buttons--mobile"><a href="user/login.php" class="btn btn-secondary btn-sm">Sign
                            in</a> <a href="user/register.php" class="btn btn-primary btn-sm">Get Started</a></div>
                </div>
            </div>
            <div class="navbar-buttons navbar-buttons--dekstop"><a href="user/login.php" class="btn btn-secondary btn-sm">Sign in</a>
                <a href="user/register.php" class="btn btn-primary btn-sm">Get Started</a></div>
        </div>
    </nav>
    <section class="hero">
        <div class="hero__background hero__background--gradient"><img class="hero__gradient-bg"
                src="assets/media/images/landing-page-gradient-bg.svg" alt="Background Gradient Hero" /></div>
        <div class="hero__background hero__background--pattern"><img class="hero__pattern-bg"
                src="assets/media/images/landing-page-pattern.svg" alt="Background Pattern Hero" /></div>
        <div class="hero__background--mobile hero__background--gradient"><img class="hero__gradient-bg"
                src="assets/media/images/mobile-responsive/mobile-landing-page-hero-gradient.png"
                alt="Background Gradient Hero" /></div>
        <div class="hero__background--mobile hero__background--pattern"><img class="hero__pattern-bg"
                src="assets/media/images/mobile-responsive/mobile-landing-page-hero-pattern.png"
                alt="Background Pattern Hero" /></div>
        <div class="container">
            <div class="hero__content">
            <div data-elementor-type="wp-page" data-elementor-id="457" class="elementor elementor-457" data-elementor-settings="[]">
			<div class="elementor-inner">
				<div class="elementor-section-wrap">
							<section class="elementor-element elementor-element-db21c33 elementor-section-boxed elementor-section-height-default elementor-section-height-default elementor-section elementor-top-section" data-id="db21c33" data-element_type="section">
						<div class="elementor-container elementor-column-gap-default">
				<div class="elementor-row">
				<div class="elementor-element elementor-element-1babdd3 elementor-column elementor-col-100 elementor-top-column" data-id="1babdd3" data-element_type="column">
			<div class="elementor-column-wrap  elementor-element-populated">
					<div class="elementor-widget-wrap">
				<div class="elementor-element elementor-element-ab2b40d elementor-widget elementor-widget-text-editor" data-id="ab2b40d" data-element_type="widget" data-widget_type="text-editor.default">
				<div class="elementor-widget-container">
					<div class="elementor-text-editor elementor-clearfix"><div class="legal-terms-section prs-container"><h2 class="prs-title legal-terms-title">Cookie Policy for Our website</h2><p class="prs-text legal-terms-text">This is the Cookie Policy for our trading site, accessible from <a href="index.php"><?php echo($domain_url)?></a></p></div><div class="prs-container"><ol class="legal-terms-sections-list"><li>What Are Cookies<p>As is common practice with almost all professional websites this site uses cookies, which are tiny files that are downloaded to your computer, to improve your experience. This page describes what information they gather, how we use it and why we sometimes need to store these cookies. We will also share how you can prevent these cookies from being stored however this may downgrade or ‘break’ certain elements of the sites functionality.</p><p>For more general information on cookies see the Wikipedia article on HTTP Cookies.</p></li><li>How We Use Cookies<p>We use cookies for a variety of reasons detailed below. Unfortunately in most cases there are no industry standard options for disabling cookies without completely disabling the functionality and features they add to this site. It is recommended that you leave on all cookies if you are not sure whether you need them or not in case they are used to provide a service that you use.</p></li><li>Disabling Cookies<p>You can prevent the setting of cookies by adjusting the settings on your browser (see your browser Help for how to do this). Be aware that disabling cookies will affect the functionality of this and many other websites that you visit. Disabling cookies will usually result in also disabling certain functionality and features of the this site. Therefore it is recommended that you do not disable cookies.</p><p>You can learn how to manage cookies on your web browser by following the Browser Cookies Guide.</p></li><li>The Cookies We Set<ol><li>Account related cookies<p>If you create an account with us then we will use cookies for the management of the signup process and general administration. These cookies will usually be deleted when you log out however in some cases they may remain afterwards to remember your site preferences when logged out.</p></li><li>Login related cookies<p>We use cookies when you are logged in so that we can remember this fact. This prevents you from having to log in every single time you visit a new page. These cookies are typically removed or cleared when you log out to ensure that you can only access restricted features and areas when logged in.</p></li><li>Email newsletters related cookies<p>This site offers newsletter or email subscription services and cookies may be used to remember if you are already registered and whether to show certain notifications which might only be valid to subscribed/unsubscribed users.</p></li><li>Forms related cookies<p>When you submit data to through a form such as those found on contact pages or comment forms cookies may be set to remember your user details for future correspondence.</p></li><li>Site preferences cookies<p>In order to provide you with a great experience on this site we provide the functionality to set your preferences for how this site runs when you use it. In order to remember your preferences we need to set cookies so that this information can be called whenever you interact with a page is affected by your preferences.</p></li></ol></li><li>Third Party Cookies<p>In some special cases we also use cookies provided by trusted third parties. The following section details which third party cookies you might encounter through this site.</p><ol><li>This site uses Google Analytics which is one of the most widespread and trusted analytics solution on the web for helping us to understand how you use the site and ways that we can improve your experience. These cookies may track things such as how long you spend on the site and the pages that you visit so we can continue to produce engaging content.<p>For more information on Google Analytics cookies, see the official Google Analytics page.</p></li><li>Third party analytics are used to track and measure usage of this site so that we can continue to produce engaging content. These cookies may track things such as how long you spend on the site or pages you visit which helps us to understand how we can improve the site for you.</li><li>From time to time we test new features and make subtle changes to the way that the site is delivered. When we are still testing new features these cookies may be used to ensure that you receive a consistent experience whilst on the site whilst ensuring we understand which optimisations our users appreciate the most.</li><li>As we sell products it’s important for us to understand statistics about how many of the visitors to our site actually make a purchase and as such this is the kind of data that these cookies will track. This is important to you as it means that we can accurately make business predictions that allow us to monitor our advertising and product costs to ensure the best possible price.</li><li>We use adverts to offset the costs of running this site and provide funding for further development. The behavioural advertising cookies used by this site are designed to ensure that we provide you with the most relevant adverts where possible by anonymously tracking your interests and presenting similar things that may be of interest.</li><li>Several partners advertise on our behalf and affiliate tracking cookies simply allow us to see if our customers have come to the site through one of our partner sites so that we can credit them appropriately and where applicable allow our affiliate partners to provide any bonus that they may provide you for making a purchase.</li><li>We also use social media buttons and/or plugins on this site that allow you to connect with your social network in various ways. For these to work the following social media sites including; {List the social networks whose features you have integrated with your site?:12}, will set cookies through our site which may be used to enhance your profile on their site or contribute to the data they hold for various purposes outlined in their respective privacy policies.</li></ol></li><li>More Information<p>Hopefully that has clarified things for you and as was previously mentioned if there is something that you aren’t sure whether you need or not it’s usually safer to leave cookies enabled in case it does interact with one of the features you use on our site.</p><p>However if you are still looking for more information then you can contact us through one of our preferred contact methods:</p></li></ol></div></div>
				</div>
				</div>
						</div>
			</div>
		</div>
						</div>
			</div>
		</section>
						</div>
			</div>
		</div>

            </div>
        </div>
    </section>
    
    <footer class="footer">
        <div class="container">
            <div class="footer__content">
                <div class="footer__item footer-item-main"><a style="display: flex; margin-bottom: .8rem;" class="navbar-brand notranslate" href="#"><img class="navbar-brand__icon <?php echo($logo_header)?>"
                src="user/bundle/logo/<?php echo($logo)?>" style="width: <?php echo($logo_width)?>px;" alt="C" /> <p style="font-size: 22px;" class="<?php echo($name_header)?>"><?php echo($platform_name)?>
                    
        </p> </a>
                    <p class="fb-lg footer-item-main__desc">Your best crypto partner.</p>
                    <div class="footer-item-main__socmed"><a href="#" class="footer-socmed"><img
                                class="footer-item-main__logo" src="assets/media/images/icons/logo-linkedin.svg"
                                alt="Linkedin" /> </a><a href="#" class="footer-socmed"><img
                                class="footer-item-main__logo" src="assets/media/images/icons/logo-facebook.svg"
                                alt="Facebook" /> </a><a href="#" class="footer-socmed"><img
                                class="footer-item-main__logo" src="assets/media/images/icons/logo-ig.svg"
                                alt="Instagram" /></a></div>
                </div>
                <div class="footer__item footer-item-quick-links">
                    <h6 class="footer__item-title">Quick Links.</h6>
                    <div class="footer-quick-links"><a href="user/login.php" class="fb-md footer-quick-links__link">Buy/Sell</a> <a
                            href="user/login.php" class="fb-md footer-quick-links__link">Wallets</a> <a href="user/login.php"
                            class="fb-md footer-quick-links__link">Trade Now</a> <a href="user/login.php"
                            class="fb-md footer-quick-links__link">Invest</a> <a href="user/login.php"
                            class="fb-md footer-quick-links__link">Pricing</a></div>
                </div>
                <div class="footer__item footer-item-updates">
                    <h6 class="footer__item-title">Submit for updates.</h6>
                    <p class="fb-md footer-item-updates__desc">Subscribe to get update and notify our exchange and
                        products</p>
                    <div class="mini-form-sm__box">
                        <form class="mini-form"><input class="form-control form-control-sm mini-form__input"
                                placeholder="Enter you email address" autocomplete="off"> <input type="submit"
                                class="btn btn-primary btn-sm mini-form__submit" value="Send"></form>
                    </div>
                </div>
            </div>
            <div class="footer__foot">
                <p class="fb-md footer-foot__copyright"><span class="notranslate"><?php echo($domain_url)?> </span>©. All rights reserved.</p>
                <div class="footer-foot__tos-privacy"><a href="terms.php" class="fb-md footer-foot__link">Term of Service</a>
                    <span class="separator"></span> <a href="#" class="fb-md footer-foot__link">Privacy Policy</a></div>
            </div>
        </div>
    </footer>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.1.0/jquery.min.js"></script>
    <script src="<?php echo($file)?>"></script>
    <script src="<?php echo($js)?>translate_home.js"></script>
    <script type="text/javascript" src="//translate.google.com/translate_a/element.js?cb=googleTranslateElementInit"></script>
    <script type="text/javascript" src="//translate.google.com/#en/hi/Hello"></script> 
    <script src="assets/js/scripts.bundle.js"></script>
    <script src="assets/plugins/slick/slick.min.js"></script>
    <script src="assets/js/custom/custom-select.js"></script>
    <script src="assets/js/pages/landing-page-v1.js"></script>
    <?php echo($l_chat)?>
</body>


</html>
'
);
fclose($file);

echo 'complete';

?>