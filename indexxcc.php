

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
