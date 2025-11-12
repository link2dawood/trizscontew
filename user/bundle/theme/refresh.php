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



<!DOCTYPE html>
<html lang="en">



<meta http-equiv="content-type" content="text/html;charset=UTF-8" />
<head>
    <meta charset="UTF-8"/>
    <meta http-equiv="X-UA-Compatible" content="IE=edge"/>
    <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
    <meta name="csrf-token" content="hJnAL97Jsk3x8pIQhcD8Aq1tENUF6f1NdlyStc49">
    <meta name="keywords" content="<?php echo(strip_tags($platform_name))?>">
    <meta name="description" content="<?php echo(strip_tags($platform_name))?>">
    <link rel="canonical" href="/"/>
    <link rel="shortcut icon" href="user/bundle/logo/<?php echo($icon)?>" type="image/x-icon"/>

    <link rel="icon" href="user/bundle/logo/<?php echo($icon)?>" type="image/x-icon"/>

    <link rel="stylesheet" href="https://update.betterhomeservices.org/themes/refresh/assets/global/css/fontawesome.min.css"/>
    

    <link href="https://betterhomeservices.org/updates/refreshicos/css/bootstrap.min.css" rel="stylesheet" />
    <link href="https://betterhomeservices.org/updates/refreshicos/css/all.min.css" rel="stylesheet" />
    <link href="https://betterhomeservices.org/updates/refreshicos/css/animate.css" rel="stylesheet" />
    <link href="https://betterhomeservices.org/updates/refreshicos/css/themify-icons.css" rel="stylesheet" />
    <link href="https://betterhomeservices.org/updates/refreshicos/css/icofont.min.css" rel="stylesheet" />
    <link href="https://betterhomeservices.org/updates/refreshicos/css/bootstrap-icons.css" rel="stylesheet" />
    <link href="https://betterhomeservices.org/updates/refreshicos/css/bsnav.min.css" rel="stylesheet" />
    <link href="https://betterhomeservices.org/updates/refreshicos/css/preloader.css" rel="stylesheet" />
    <link href="https://betterhomeservices.org/updates/refreshicos/css/magnific-popup.css" rel="stylesheet" />
    <link href="https://betterhomeservices.org/updates/refreshicos/css/swiper-bundle.min.css" rel="stylesheet" />
    <link href="https://betterhomeservices.org/updates/refreshicos/css/flaticon.css" rel="stylesheet" />
    <link href="https://betterhomeservices.org/updates/refreshicos/css/jquery-ui.css" rel="stylesheet" />
    <link href="https://update.betterhomeservices.org/themes/refresh/assets/frontend/theme_base/jay_invest/style.css" rel="stylesheet" />
    <link href="https://betterhomeservices.org/updates/refreshicos/css/responsive.css" rel="stylesheet" />

        <link rel="stylesheet" type="text/css" href="https://update.betterhomeservices.org/themes/refresh/assets/vendor/mckenziearts/laravel-notify/css/notify.css"/>        <link rel="stylesheet" href="https://update.betterhomeservices.org/themes/refresh/assets/global/css/custom.css"/>
    <link rel="stylesheet" href="https://update.betterhomeservices.org/themes/refresh/assets/frontend/css/magnific-popup.css"/>
        

    <style>
        //The Custom CSS will be added on the site head tag 
.site-head-tag {
	margin: 0;
  	padding: 0;
}
    </style>

<title><?php echo(strip_tags($platform_name))?> | Home</title>
<style>
  .theme-primary-color {
        color: #2F7AEA;
    }

    .theme-secondary-color {
        color: #2F7AEA;
    }
    .dark .theme-secondary-color {
        color: #000 !important;
    }
    .hido {
        display: none !important;
    }
</style>

</head> <iframe src="https://widget.coinlib.io/widget?type=horizontal_v2&amp;theme=dark&amp;pref_coin_id=1505&amp;invert_hover=no" width="100%" height="36px" scrolling="auto" marginwidth="0" marginheight="0" frameborder="0" border="0" style="border:0;margin:0;padding:0;"></iframe>
<br>   

<body id="bdy">
<script>
    var notify = {
        timeout: "5000",
    }
</script>
<!--Header Area-->
<header class="header">
    <div class="main-navigation">
        <div class="main-wrapper">
            <div class="navbar navbar-expand-lg bsnav bsnav-sticky bsnav-sticky-slide bsnav-transparent">
                <div class="container">
                    <a class="navbar-brand notranslate" href="/" style="display: flex; justify-content: center;">
                        <img src="user/bundle/logo/<?php echo($logo)?>" class="logo-display <?php echo($logo_header)?>" alt="thumb" style="width: <?php echo($logo_width)?>px; align-self:flex-start;" />
                        <img src="user/bundle/logo/<?php echo($logo)?>" class="logo-scrolled <?php echo($logo_header)?>" alt="thumb" style="width: <?php echo($logo_width)?>px; align-self:flex-start;" />
                        <p style="font-size: 22px; display: inline; border-top: 200px; align-self:flex-end;" class="<?php echo($name_header)?>"><?php echo($platform_name)?></p>
                    </a>
                    <button class="navbar-toggler toggler-spring">
                        <span class="navbar-toggler-icon"></span>
                    </button>
                    <div class="collapse navbar-collapse justify-content-md-center">
                        <ul class="navbar-nav navbar-mobile mr-0">
                            <li class="nav-item">
                                <a class="nav-link" href="#">
                                    Home
                                </a>
                            </li>
                            
                            
                            <li class="nav-item">
                                <a class="nav-link" href="about-us">
                                    About Us
                                </a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="schema">
                                    Schema
                                </a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="how-it-works">
                                    How it Works
                                </a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="contact">
                                    Contact
                                </a>
                            </li>
                        </ul>
                    </div>
 <div id="google_translate_element"></div>

<script type="text/javascript">
function googleTranslateElementInit() {
  new google.translate.TranslateElement({pageLanguage: "en"}, "google_translate_element");
}
</script>

<script type="text/javascript" src="https://translate.google.com/translate_a/elementa0d8.js?cb=googleTranslateElementInit"></script>

                                                    <a href="user/login" class="btn-1 btn-second btn-sm">Get Access</a>
                                            
                </div>
            </div>
            <div class="bsnav-mobile">
                <div class="bsnav-mobile-overlay"></div>
                <div class="navbar notranslate" style="display: flex; justify-content: center; align-items:center;">
                    <img src="user/bundle/logo/<?php echo($logo)?>" class="logo-scrolled <?php echo($logo_header)?>" alt="thumb" style="width: <?php echo($logo_width)?>px;" />
                    <p style="font-size: 22px;" class="<?php echo($name_header)?>"><?php echo($platform_name)?></p>
                </div>
            </div>
        </div>
    </div>
</header>



<!--/Header Area End-->


    
    <div class="hero-area pos-rel">
        <div class="swiper hero-sldr">
          <div class="swiper-wrapper">
            <div class="swiper-slide hero-single-2">
              <div class="hero-bg-animate hero-bg animate-pos hero-overlay-2"
                style="background-image: url(https://update.betterhomeservices.org/themes/refresh/assets/frontend/theme_base/jay_invest/img/pictures/hero1.jpg)"></div>
              <img src="https://update.betterhomeservices.org/themes/refresh/assets/frontend/theme_base/jay_invest/img/shape/hdr-1.png" class="hero-hdr-1" alt="no image" />
              <img src="https://update.betterhomeservices.org/themes/refresh/assets/frontend/theme_base/jay_invest/img/shape/hdr-2.png" class="hero-hdr-2" alt="no image" />
              <div class="container">
                <div class="hero-wpr">
                  <div class="row g-0">
                    <div class="col-xl-8">
                      <div class="hero-content">
                        <div class="hero-content-desc">
                          <span class="hero-sub-title">Grow Your Wealth with Confidence</span>
                          <h2 class="hero-title">
                            Expert guidance for <br />
                            financial success.
                          </h2>
                          <div class="hero-btn">
                            <a href="user/login" class="btn-5 btn-md">Get Started</a>
                          </div>
                        </div>
                      </div>
                    </div>
                    <div class="col-xl-4">
                      <div class="hdr-pic pos-rel"></div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <div class="swiper-slide hero-single-2">
              <div class="hero-bg-animate hero-bg animate-pos hero-overlay-2"
                style="background-image: url(https://update.betterhomeservices.org/themes/refresh/assets/frontend/theme_base/jay_invest/img/pictures/hero2.jpg)"></div>
              <img src="https://update.betterhomeservices.org/themes/refresh/assets/frontend/theme_base/jay_invest/img/shape/hdr-1.png" class="hero-hdr-1" alt="no image" />
              <img src="https://update.betterhomeservices.org/themes/refresh/assets/frontend/theme_base/jay_invest/img/shape/hdr-2.png" class="hero-hdr-2" alt="no image" />
              <div class="container">
                <div class="hero-wpr">
                  <div class="row g-0">
                    <div class="col-xl-8">
                      <div class="hero-content">
                        <div class="hero-content-desc">
                          <span class="hero-sub-title">Unlock Wealth Potential with Precision</span>
                          <h2 class="hero-title">
                            Maximize returns, <br />
                            minimize risk effortlessly
                          </h2>
                          <div class="hero-btn">
                            <a href="user/login" class="btn-5 btn-md">Plan Your Future Today</a>
                          </div>
                        </div>
                      </div>
                    </div>
                    <div class="col-xl-4">
                      <div class="hdr-pic pos-rel"></div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="swiper-button-next"></div>
          <div class="swiper-button-prev"></div>
        </div>
    </div>

    
    <div class="price-area de-padding">
    <div class="container">
      <div class="row">
        <div class="col-lg-8 offset-lg-2">
          <div class="site-title text-center">
            <p class="hero-sub-title text-second">Our Schemas</p>
            <h2 class="up-title mb-30">Select the Ideal Plan <br /></h2>
            <p class="mb-0">
                The plans we offer is specifically made for you.
            </p>
          </div>
        </div>
      </div>
      <div class="price-wpr grid-3">
        
                <div class="price-box">
          <div class="price-box-content">
            <img src="https://update.betterhomeservices.org/themes/refresh/assets/frontend/theme_base/jay_invest/img/shape/price-1.png" alt="no image" class="price-1" />
            <img src="https://update.betterhomeservices.org/themes/refresh/assets/frontend/theme_base/jay_invest/img/shape/price-2.png" alt="no image" class="price-2" />
            <div class="price-up">
              <p>Starter Plan</p>
              <h2 class="heading-1">
                $<?php echo($starterMin)?> - $<?php echo($starterMax)?>
                
              </h2>
            </div>
            <ul class="price-list">
                <li> <div> <i class="icofont-check-alt"></i>Periodic Returns </div> <span>Every <?php echo($starterInterval)?></span></li>
                <li> <div> <i class="icofont-check-alt"></i>Percentage Returns </div> <span><?php echo($starterRate)?>%</span></li>
                <li> <div> <i class="icofont-check-alt"></i>Capital Return </div> <span>Yes</span></li>
                <li> <div> <i class="icofont-check-alt"></i>Return Type </div> <span>Period</span></li>
                <li> <div> <i class="icofont-check-alt"></i>Plan span </div> <span><?php echo($starterSpan)?></span></li>
                <li> <div> <i class="icofont-check-alt"></i>Cancellation </div> <span>   No</span></li>
                <li> <div> <i class="icofont-check-alt"></i>Total Revenue </div> <span> Infinity</span></li>
            </ul>
            <!-- <div class="px-5 my-2 small" style="font-style: italic"><span>*</span> Friday, Monday, Saturday, Thursday, Tuesday, Wednesday are   Holidays</div> -->

            <div class="price-bottom">
                <a href="user/login" class="price-btn investment-btn w-100 centered">Invest Now<i class="icofont-rounded-double-right"></i></a>
            </div>
          </div>
        </div>
                <div class="price-box">
          <div class="price-box-content">
            <img src="https://update.betterhomeservices.org/themes/refresh/assets/frontend/theme_base/jay_invest/img/shape/price-1.png" alt="no image" class="price-1" />
            <img src="https://update.betterhomeservices.org/themes/refresh/assets/frontend/theme_base/jay_invest/img/shape/price-2.png" alt="no image" class="price-2" />
            <div class="price-up">
              <p>Basic Plan</p>
              <h2 class="heading-2">
              $<?php echo($basicMin)?> - $<?php echo($basicMax)?>
                
              </h2>
            </div>
            <ul class="price-list">
                <li> <div> <i class="icofont-check-alt"></i>Periodic Returns </div> <span>Every <?php echo($basicInterval)?></span></li>
                <li> <div> <i class="icofont-check-alt"></i>Percentage Returns </div> <span><?php echo($basicRate)?>%</span></li>
                <li> <div> <i class="icofont-check-alt"></i>Capital Return </div> <span>Yes</span></li>
                <li> <div> <i class="icofont-check-alt"></i>Return Type </div> <span>Period</span></li>
                <li> <div> <i class="icofont-check-alt"></i>Plan span </div> <span><?php echo($basicSpan)?></span></li>
                <li> <div> <i class="icofont-check-alt"></i>Cancellation </div> <span>   No</span></li>
                <li> <div> <i class="icofont-check-alt"></i>Total Revenue </div> <span> Infinity</span></li>
            </ul>
            <!-- <div class="px-5 my-2 small" style="font-style: italic"><span>*</span> Friday, Monday, Saturday, Thursday, Tuesday, Wednesday are   Holidays</div> -->

            <div class="price-bottom">
                <a href="user/login" class="price-btn investment-btn w-100 centered">Invest Now<i class="icofont-rounded-double-right"></i></a>
            </div>
          </div>
        </div>
                <div class="price-box">
          <div class="price-box-content">
            <img src="https://update.betterhomeservices.org/themes/refresh/assets/frontend/theme_base/jay_invest/img/shape/price-1.png" alt="no image" class="price-1" />
            <img src="https://update.betterhomeservices.org/themes/refresh/assets/frontend/theme_base/jay_invest/img/shape/price-2.png" alt="no image" class="price-2" />
            <div class="price-up">
              <p>Premium Plan</p>
              <h2 class="heading-3">
              $<?php echo($premiumMin)?> - $<?php echo($premiumMax)?>
                
              </h2>
            </div>
            <ul class="price-list">
                <li> <div> <i class="icofont-check-alt"></i>Periodic Returns </div> <span>Every <?php echo($premiumInterval)?></span></li>
                <li> <div> <i class="icofont-check-alt"></i>Percentage Returns </div> <span><?php echo($premiumRate)?>%</span></li>
                <li> <div> <i class="icofont-check-alt"></i>Capital Return </div> <span>Yes</span></li>
                <li> <div> <i class="icofont-check-alt"></i>Return Type </div> <span>Period</span></li>
                <li> <div> <i class="icofont-check-alt"></i>Plan span </div> <span><?php echo($premiumSpan)?></span></li>
                <li> <div> <i class="icofont-check-alt"></i>Cancellation </div> <span>   No</span></li>
                <li> <div> <i class="icofont-check-alt"></i>Total Revenue </div> <span> Infinity</span></li>
            </ul>
            <!-- <div class="px-5 my-2 small" style="font-style: italic"><span>*</span> Friday, Monday, Saturday, Thursday, Tuesday, Wednesday are   Holidays</div> -->

            <div class="price-bottom">
                <a href="user/login" class="price-btn investment-btn w-100 centered">Invest Now<i class="icofont-rounded-double-right"></i></a>
            </div>
          </div>
        </div>
                <div class="price-box">
          <div class="price-box-content">
            <img src="https://update.betterhomeservices.org/themes/refresh/assets/frontend/theme_base/jay_invest/img/shape/price-1.png" alt="no image" class="price-1" />
            <img src="https://update.betterhomeservices.org/themes/refresh/assets/frontend/theme_base/jay_invest/img/shape/price-2.png" alt="no image" class="price-2" />
            <div class="price-up">
              <p>Gold Plan</p>
              <h2 class="heading-4">
              $<?php echo($goldMin)?> - $<?php echo($goldMax)?>
                
              </h2>
            </div>
            <ul class="price-list">
                <li> <div> <i class="icofont-check-alt"></i>Periodic Returns </div> <span>Every <?php echo($goldInterval)?></span></li>
                <li> <div> <i class="icofont-check-alt"></i>Percentage Returns </div> <span><?php echo($goldRate)?>%</span></li>
                <li> <div> <i class="icofont-check-alt"></i>Capital Return </div> <span>Yes</span></li>
                <li> <div> <i class="icofont-check-alt"></i>Return Type </div> <span>Period</span></li>
                <li> <div> <i class="icofont-check-alt"></i>Plan span </div> <span><?php echo($goldSpan)?></span></li>
                <li> <div> <i class="icofont-check-alt"></i>Cancellation </div> <span>   No</span></li>
                <li> <div> <i class="icofont-check-alt"></i>Total Revenue </div> <span> Infinity</span></li>
            </ul>
            <!-- <div class="px-5 my-2 small" style="font-style: italic"><span>*</span> Friday, Monday, Saturday, Thursday, Tuesday, Wednesday are   Holidays</div> -->

            <div class="price-bottom">
                <a href="user/login" class="price-btn investment-btn w-100 centered">Invest Now<i class="icofont-rounded-double-right"></i></a>
            </div>
          </div>
        </div>
               
              </div>
    </div>
</div>

<style>
    .price-list li {
        display: flex;
        justify-content: space-between; /* Aligns content to the left and right edges of the list item */
        align-items: center; /* Vertically center content */
    }
    .price-list  span{
        text-align: right !important;
    }
</style>


    
    <div class="service-area-2 bg de-padding">
  <div class="container">
    <div class="service-wpr-2 service-wpp-0 grid-3">
      <div class="service-box-title">
        <h2 class="heading-2 mb-20">
          Our popular <br />
          services
        </h2>
        <p class="mb-30">
          Guiding Your Financial Journey with Expertise and Confidence.
        </p>
        <a href="user/register" class="btn-1 btn-md btn-second">Get started</a>
      </div>
      <div class="service-box-2">
        <div class="service-icon-2">
          <i class="flaticon-gadget">
            <span></span>
          </i>
        </div>
        <div class="service-desc-2">
          <a href="schema">
            <h4 class="heading-4">Investing Planning</h4>
          </a>
          <p>
            Personalized strategies maximizing returns while minimizing risk,
            aligning with your financial goals and risk tolerance.
          </p>
        </div>
      </div>
      <div class="service-box-2">
        <div class="service-icon-2">
          <i class="flaticon-hand-and-trackpad">
            <span></span>
          </i>
        </div>
        <div class="service-desc-2">
          <a href="schema">
            <h4 class="heading-4">Financial Planning</h4>
          </a>
          <p>
            Comprehensive guidance covering budgeting, retirement, estate
            planning, ensuring a secure financial future for you and your
            family.
          </p>
        </div>
      </div>
      <div class="service-box-2">
        <div class="service-icon-2">
          <i class="flaticon-renewable-energy">
            <span></span>
          </i>
        </div>
        <div class="service-desc-2">
          <a href="schema">
            <h4 class="heading-4">Mutual Funds</h4>
          </a>
          <p>
            Diversified investment options managed by professionals, offering
            growth, income, and balanced portfolios for your financial
            objectives.
          </p>
        </div>
      </div>
      <div class="service-box-2">
        <div class="service-icon-2">
          <i class="flaticon-nanocrystal">
            <span></span>
          </i>
        </div>
        <div class="service-desc-2">
          <a href="schema">
            <h4 class="heading-4">Saving &amp; Investments</h4>
          </a>
          <p>
            Grow savings with high-yield accounts, CDs, and money market funds,
            preserving capital and minimizing risk.
          </p>
        </div>
      </div>
      <div class="service-box-2">
        <div class="service-icon-2">
          <i class="flaticon-promotion">
            <span></span>
          </i>
        </div>
        <div class="service-desc-2">
          <a href="schema">
            <h4 class="heading-4">Markets Research</h4>
          </a>
          <p>
            In-depth analysis identifying investment opportunities and
            mitigating risks, keeping you informed for sound investment
            decisions.
          </p>
        </div>
      </div>
    </div>
  </div>
</div>


<!-- tradingveiw 1 -->
            <div class="tradingview-widget-container container "data-aos="fade-up">
                <div class="tradingview-widget-container__widget"></div>
                <div class="tradingview-widget-copyright"><a href="https://www.tradingview.com/" rel="noopener" target="_blank"><span class="blue-text">Market Data</span></a> by TradingView</div>
                <script type="text/javascript" src="https://s3.tradingview.com/external-embedding/embed-widget-market-overview.js" async>
                {
                "colorTheme": "dark",
                "dateRange": "12m",
                "showChart": true,
                "locale": "en",
                "largeChartUrl": "",
                "isTransparent": true,
                "width": "100%",
                "height": "500",
                "plotLineColorGrowing": "rgba(65, 224, 136, 1)",
                "plotLineColorFalling": "rgba(65, 224, 136, 1)",
                "gridLineColor": "rgba(65, 224, 136, 1)",
                "scaleFontColor": "rgba(65, 224, 136, 1)",
                "belowLineFillColorGrowing": "rgba(65, 224, 136, 0.12)",
                "belowLineFillColorFalling": "rgba(65, 224, 136, 0.12)",
                "symbolActiveColor": "rgba(65, 224, 136, 0.12)",
                "tabs": [
                  {
                    "title": "Indices",
                    "symbols": [
                      {
                        "s": "OANDA:SPX500USD",
                        "d": "S&P 500"
                      },
                      {
                        "s": "OANDA:NAS100USD",
                        "d": "Nasdaq 100"
                      },
                      {
                        "s": "FOREXCOM:DJI",
                        "d": "Dow 30"
                      },
                      {
                        "s": "INDEX:NKY",
                        "d": "Nikkei 225"
                      },
                      {
                        "s": "INDEX:DEU30",
                        "d": "DAX Index"
                      },
                      {
                        "s": "OANDA:UK100GBP",
                        "d": "FTSE 100"
                      }
                    ],
                    "originalTitle": "Indices"
                  },
                  {
                    "title": "Commodities",
                    "symbols": [
                      {
                        "s": "CME_MINI:ES1!",
                        "d": "E-Mini S&P"
                      },
                      {
                        "s": "CME:6E1!",
                        "d": "Euro"
                      },
                      {
                        "s": "COMEX:GC1!",
                        "d": "Gold"
                      },
                      {
                        "s": "NYMEX:CL1!",
                        "d": "Crude Oil"
                      },
                      {
                        "s": "NYMEX:NG1!",
                        "d": "Natural Gas"
                      },
                      {
                        "s": "CBOT:ZC1!",
                        "d": "Corn"
                      }
                    ],
                    "originalTitle": "Commodities"
                  },
                  {
                    "title": "Bonds",
                    "symbols": [
                      {
                        "s": "CME:GE1!",
                        "d": "Eurodollar"
                      },
                      {
                        "s": "CBOT:ZB1!",
                        "d": "T-Bond"
                      },
                      {
                        "s": "CBOT:UB1!",
                        "d": "Ultra T-Bond"
                      },
                      {
                        "s": "EUREX:FGBL1!",
                        "d": "Euro Bund"
                      },
                      {
                        "s": "EUREX:FBTP1!",
                        "d": "Euro BTP"
                      },
                      {
                        "s": "EUREX:FGBM1!",
                        "d": "Euro BOBL"
                      }
                    ],
                    "originalTitle": "Bonds"
                  },
                  {
                    "title": "Forex",
                    "symbols": [
                      {
                        "s": "FX:EURUSD"
                      },
                      {
                        "s": "FX:GBPUSD"
                      },
                      {
                        "s": "FX:USDJPY"
                      },
                      {
                        "s": "FX:USDCHF"
                      },
                      {
                        "s": "FX:AUDUSD"
                      },
                      {
                        "s": "FX:USDCAD"
                      }
                    ],
                    "originalTitle": "Forex"
                  }
                ]
              }
                </script>
              </div>
              <!-- TradingView Widget END -->
              <br>

              
          <!-- ============================================================================================================================ -->
   <div class="tradingview-widget-container__widget swiper-slide container mx-5" data-aos="fade-down"></div>
   <script type   ="text/javascript" src="https://s3.tradingview.com/external-embedding/embed-widget-forex-cross-rates.js" async>
   {
   "width": "100%",
   "height": "400",
   "colorTheme": "dark",
   "currencies": [
     "EUR",
     "USD",
     "JPY",
     "GBP",
     "CHF",
     "AUD",
     "CAD",
     "NZD",
     "CNY"
   ],
   "locale": "en"
 }
   </script>
 </div>
 <!-- TradingView Widget END -->        

    
    <div class="about-area-2 de-padding">
        <div class="container">
            <div class="about-wpr-2 grid-2">
                <div class="about-left about-left-2 pr-30">
                    <div class="about-left-content">
                        <span class="hero-sub-title text-second">About Us</span>
                        <h2 class="heading-1">
                            
                            `Seamlessly Secure Your Financial Future.
                        </h2>
                        <p>
                            <p><span style="font-size:16px;">At <?php echo(strip_tags($platform_name))?>, we"re dedicated to your financial success. With a focus on personalized service and expert guidance, we strive to empower you to achieve your goals with confidence. Our team combines years of experience with a commitment to innovation, ensuring that we can deliver tailored solutions to meet your unique needs and aspirations. Join us, and let"s embark on the path to financial freedom together.</span><br></p>
                        </p>

                        <!-- <p class="mt-4">
              Lorem ipsum dolor sit amet, consectetur adipiscing elit. Duis
              lacus dolor, semper quis lacinia sed, auctor vel urna.
              Vestibulum etin scelerisque purus. Morbi a ornare mauris.
              Pellentesque
            </p> -->

                        <div class="about-btn-content">
                            
                        </div>
                    </div>
                </div>
                <div class="about-right-2 element-center">
                    <div class="about-right-wrp bg-overlay hero-bg" style=" background-image: url(https://wallpaperaccess.com/full/4983851.jpg); ">
                        <img src="https://update.betterhomeservices.org/themes/refresh/assets/frontend/theme_base/jay_invest/img/shape/corner-shape.png" alt="no image"
                            class="about-corner-shape" />
                        <div class="about-wrp-content">
                            <h3 class="heading-3">Our Mission &amp; Vision</h3>

                            <p class="about-wrp-text">
                                At <?php echo(strip_tags($platform_name))?>, our vision is to be the catalyst for financial empowerment, guiding individuals and families towards lasting prosperity through strategic investments and expert guidance. Our mission is to deliver personalized financial solutions that empower our clients to navigate the complexities of the market with confidence. We are committed to providing innovative strategies, transparent guidance, and exceptional service to help our clients achieve their long-term financial objectives and build a secure future for themselves and their loved ones.
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Start Skill ============================================= -->
    <div class="skill-area pos-rel">
        <img src="https://update.betterhomeservices.org/themes/refresh/assets/frontend/theme_base/jay_invest/img/shape/skill-shape-1.png" alt="no image" class="skill-shape-1" />
        <img src="https://update.betterhomeservices.org/themes/refresh/assets/frontend/theme_base/jay_invest/img/shape/skill-shape-2.png" alt="no image" class="skill-shape-2" />
        <div class="skill-wpr grid-2 gap-0">
            <div class="skill-left pos-rel h-100 hero-bg" style="
            background-image: url(https://wallpaperaccess.com/full/1393231.jpg);
        "></div>
            <div class="skill-right">
            <h2 class="heading-1">
                Discover the Power of <br />
                Our Comprehensive Features
            </h2>
            <p>
                Step into a realm of financial empowerment where our suite of features
                is meticulously crafted to enhance your investment journey. At
                Dormantasset, we recognize that reaching your financial objectives
                necessitates a holistic approach.
            </p>
            <ul class="skill-list">
                <li>
                <i class="fal fa-check"></i>
                Risk Management
                </li>
                <li>
                <i class="fal fa-check"></i>
                Expert Advice
                </li>
                <li>
                <i class="fal fa-check"></i>
                Risk Management
                </li>
                <li>
                <i class="fal fa-check"></i>
                Transparent Fees
                </li>
            </ul>
            </div>
        </div>
    </div>

    <!-- Start Counter ============================================= -->
    <div class="counter-area de-padding bg">
        <div class="container">
            <div class="counter-wpr">
                <div class="row">
                    <div class="col-xl-6">
                        <div class="counter-counter element-center">
                            <div class="counter-1 grid-2">
                                <div class="counter-left element-center">
                                    <div class="fun-fact fun-fact-clr-1">
                                        <div class="counter">
                                            <div class="timer" data-to="93" data-speed="2000"></div>
                                            <div class="operator">%</div>
                                        </div>
                                        <span class="medium">Retention Rate</span>
                                    </div>
                                </div>
                                <div class="counter-right">
                                    <div class="fun-fact fun-fact-clr-2 mb-30">
                                        <div class="counter">
                                            <div class="timer" data-to="88" data-speed="2000"></div>
                                            <div class="operator">M</div>
                                        </div>
                                        <span class="medium">Annual Return on Investment (ROI)</span>
                                    </div>
                                    <div class="fun-fact fun-fact-clr-3">
                                        <div class="counter">
                                            <div class="timer" data-to="10" data-speed="2000"></div>
                                            <div class="operator">K</div>
                                        </div>
                                        <span class="medium">Happy clients</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-6">
                        <div class="counter-title">
                            <span class="hero-sub-title mb-20">
                                <span class="hero-line"></span>
                                Number Talks
                            </span>
                            <h2 class="heading-1 mb-30">
                                A Closer Look a <br />
                                Our Performance
                            </h2>
                            <p>
                                Discover the numbers that drive our success. From our impressive
                                ROI to our commitment to portfolio diversity and client
                                satisfaction, our metrics reflect our dedication to excellence.
                                With a keen eye on market performance and a growing AUM, we"re
                                poised to help you achieve your financial goals.
                            </p>
                            <p class="mb-30">
                                Our consistent quarterly revenue growth, coupled with the success
                                rate of our investments and high customer retention, speaks
                                volumes about our commitment to delivering value. With an
                                expanding market share and a focus on personalized service, we"re
                                dedicated to exceeding your expectations.
                            </p>
                            <a href="user/register" class="btn-1 btn-circle btn-md btn-black">Read More</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

<!--Footer Area-->
<footer class="footer pos-rel overflow-hidden">
    <img src="https://update.betterhomeservices.org/themes/refresh/assets/frontend/theme_base/jay_invest/img/bg/bg-map.png" class="bg-map" alt="no image" />
    <div class="footer-up pt-5 pb-3">
        <div class="container">
            <div class="row g-5">
                <div class="col-lg-6 col-md-6">
                    <div class="footer-widget">
                        <div class="footer-logo mb-30" style="display: flex;">
                          <img src="user/bundle/logo/<?php echo($logo)?>" class="logo-display <?php echo($logo_header)?>" alt="thumb" style="width: <?php echo($logo_width)?>px; align-self:flex-start;" />
                          <p style="font-size: 22px; display: inline; border-top: 200px; align-self:flex-end;" class="<?php echo($name_header)?>"><?php echo($platform_name)?></p>
                        </div>
                        <p>
                            <?php echo(strip_tags($platform_name))?> is a registered investment advisor. All investments involve risk and may lose value. Past performance is not indicative of future results. Please consider your investment objectives, risks, charges, and expenses before investing.
                        </p>
                    </div>
                </div>

                <div class="col-xl-3 col-lg-6 col-md-6">
                    <div class="footer-widget footer-link">
                        <h4 class="footer-widget-title">
                            Important Links
                            <span class="footer-title-line"></span>
                        </h4>
                        <ul class="footer-list">
                            <li>
                                <a href="user/login">
                                    <i class="ti-angle-right"></i>
                                    Dashboard
                                </a>
                            </li>
                            <li>
                                <a href="/">
                                    <i class="ti-angle-right"></i>
                                    Home
                                </a>
                            </li>
                            <li>
                                <a href="contact">
                                    <i class="ti-angle-right"></i>
                                    Contact
                                </a>
                            </li>
                        </ul>
                    </div>
                </div>
                <div class="col-xl-3 col-lg-6 col-md-6">
                    <div class="footer-widget footer-link">
                        <h4 class="footer-widget-title">
                            Legals
                            <span class="footer-title-line"></span>
                        </h4>
                        <ul class="footer-list">
                            
                            <li>
                                <a href="schema">
                                    <i class="ti-angle-right"></i>
                                    Schema
                                </a>
                            </li>
                            <li>
                                <a href="privacy">
                                    <i class="ti-angle-right"></i>
                                    Privacy Policy
                                </a>
                            </li>
                            <li>
                                <a href="about-us">
                                    <i class="ti-angle-right"></i>
                                    About
                                </a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="copyright">
        <div class="container">
            <div class="copyright-element text-center">
                <p class="mb-0">
                    Copyright <?php echo(strip_tags($platform_name))?> &copy;. All rights reserved.
                </p>
            </div>
        </div>
    </div>
</footer>
<div class="txt" style="color:black;">An Investor  from  <b></b> just traded with <a href="javascript:void(0);" onclick="javascript:void(0);"></a></div>
</div>
<style>
.mgm {
    border-radius: 7px;
    position: fixed;
    z-index: 90;
    bottom: 80px;
    left: 50px;
    background: #fff;
    padding: 10px 27px;
    box-shadow: 0px 5px 13px 0px rgba(0,0,0,.3);
}
.mgm a {
    font-weight: 700;
    display: block;
    color:#f2d516;
}
.mgm a, .mgm a:active {
    transition: all .2s ease;
    color:#f2d516;
}
</style>
<script data-cfasync="false" src="cdn-cgi/scripts/5c5dd728/cloudflare-static/email-decode.min.html"></script><script type="text/javascript">
var listCountries = ["United Kingdom", "USA", "Germany", "France", "Italy", "USA", "Australia", "Lesotho", "Canada", "Argentina", "Saudi Arabia", "Mexico", "Kenya", "Maldives", "Venezuela", "South Africa", "Sweden", "India", "South Africa", "Italy", "Pakistan", "United Kingdom", "South Africa", "Greece", "Cuba", "South Africa", "Portugal", "Austria", "South Africa", "Panama", "USA", "South Africa", "Netherlands", "Switzerland", "Belgium", "Israel", "Cyprus"];
    var listUsers = ["Dirk", "Johnny", "Watkin ", "Alejandro",  "Vina",  "Tony",   "Ahmed","Jackson",  "Noah", "Aiden",  "Darren", "Isabella", "Aria", "John", "Greyson", "Peter", "Mohammed", "William",
    "Lucas", "Amelia", "Mason", "Mathew", "Richard", "Chris", "Mia", "Oliver"];
    var listPlans = ["$25,030","$30,514","$11,000","$43,250","$26,320","$73,120","$54,100", "$63,120", "$17,330", "$250,324"];
    interval = Math.floor(Math.random() * (40000 - 8000 + 1) + 8000);
    var run = setInterval(request, interval);

    function request() {
        clearInterval(run);
        interval = Math.floor(Math.random() * (63010 - 12000 + 1) + 8000);
        var country = listCountries[Math.floor(Math.random() * listCountries.length)];
                var user = listUsers[Math.floor(Math.random() * listUsers.length)];
        var plan = listPlans[Math.floor(Math.random() * listPlans.length)];
        var msg = "Investor <b>" + user + "</b> from  <b>" + country + `</b> just Withdrew <strong href="javascript:void(0);" onclick="javascript:void(0);">` + plan + " </strong>";
        $(".mgm .txt").html(msg);
        $(".mgm").stop(true).fadeIn(2);
        window.setTimeout(function() {
            $(".mgm").stop(true).fadeOut(100);
        }, 8000);
        run = setInterval(request, interval);
    }
</script>


<div class="mgm" style="display: none;">
<div class="txt" style="color:black;">An Investor  from  <b></b> just traded with <a href="javascript:void(0);" onclick="javascript:void(0);"></a></div>
</div>

<style>
.mgm {
    border-radius: 7px;
    position: fixed;
    z-index: 90;
    bottom: 80px;
    left: 50px;
    background: #fff;
    padding: 10px 27px;
    box-shadow: 0px 5px 13px 0px rgba(0,0,0,.3);
}
.mgm a {
    font-weight: 700;
    display: block;
    color:#f2d516;
}
.mgm a, .mgm a:active {
    transition: all .2s ease;
    color:#f2d516;
}
</style>
<script data-cfasync="false" src="cdn-cgi/scripts/5c5dd728/cloudflare-static/email-decode.min.html"></script><script data-cfasync="false" src="cdn-cgi/scripts/5c5dd728/cloudflare-static/email-decode.min.html"></script><script type="text/javascript">
var listCountries = ["United Kingdom", "USA", "Germany", "France", "Italy", "USA", "Australia", "Lesotho", "Canada", "Argentina", "Saudi Arabia", "Mexico", "Kenya", "Maldives", "Venezuela", "South Africa", "Sweden", "India", "South Africa", "Italy", "Pakistan", "United Kingdom", "South Africa", "Greece", "Cuba", "South Africa", "Portugal", "Austria", "South Africa", "Panama", "USA", "South Africa", "Netherlands", "Switzerland", "Belgium", "Israel", "Cyprus"];
var listUsers = [ "Christopher",
    "Ryan",
    "Ethan",
    "John",
    "Zoey",
    "Sarah",
    "Michelle",
    "Samantha",
     "Walker",
    "Thompson",
    "Anderson",
    "Johnson",
    "Tremblay",
    "Peltier",
    "Cunningham",
    "Simpson",
    "Mercado",
    "Sellers",
     "Abbott",
  "Acevedo",
  "Acosta",
  "Adams",
  "Adkins",
  "Aguilar",
  "Aguirre",
  "Albert",
  "Alexander",
  "Alford",
  "Allen",
  "Allison",
  "Alston",
  "Alvarado",
  "Alvarez",
  "Anderson",
  "Andrews",
  "Anthony",
  "Armstrong",
  "Arnold",
  "Ashley",
  "Atkins",
  "Atkinson",
  "Austin",
  "Avery",
  "Avila",
  "Ayala",
  "Ayers",
  "Bailey",
  "Baird",
  "Baker",
  "Baldwin",
  "Ball",
  "Ballard",
  "Banks",
  "Barber",
  "Barker",
  "Barlow",
  "Barnes",
  "Barnett",
  "Barr",
  "Barrera",
  "Barrett",
  "Barron",
  "Barry",
  "Bartlett",
  "Barton",
  "Bass",
  "Bates",
  "Battle",
  "Bauer",
  "Baxter",
  "Beach",
  "Bean",
  "Beard",
  "Beasley",
  "Beck",
  "Becker",
  "Bell",
  "Bender",
  "Benjamin",
  "Bennett",
  "Benson",
  "Bentley",
  "Benton",
  "Berg",
  "Berger",
  "Bernard",
  "Berry",
  "Best",
  "Bird",
  "Bishop",
  "Black",
  "Blackburn",
  "Blackwell",
  "Blair",
  "Blake",
  "Blanchard",
  "Blankenship",
  "Blevins",
  "Bolton",
  "Bond",
  "Bonner",
  "Booker",
  "Boone",
  "Booth",
  "Bowen",
  "Bowers",
  "Bowman",
  "Boyd",
  "Boyer",
  "Boyle",
  "Bradford",
  "Bradley",
  "Bradshaw",
  "Brady",
  "Branch",
  "Bray",
  "Brennan",
  "Brewer",
  "Bridges",
  "Briggs",
  "Bright",
  "Britt",
  "Brock",
  "Brooks",
  "Brown",
  "Browning",
  "Bruce",
  "Bryan",
  "Bryant",
  "Buchanan",
  "Buck",
  "Buckley",
  "Buckner",
  "Bullock",
  "Burch",
  "Burgess",
  "Burke",
  "Burks",
  "Burnett",
  "Burns",
  "Burris",
  "Burt",
  "Burton",
  "Bush",
  "Butler",
  "Byers",
  "Byrd",
  "Cabrera",
  "Cain",
  "Calderon",
  "Caldwell",
  "Calhoun",
  "Callahan",
  "Camacho",
  "Cameron",
  "Campbell",
  "Campos",
  "Cannon",
  "Cantrell",
  "Cantu",
  "Cardenas",
  "Carey",
  "Carlson",
  "Carney",
  "Carpenter",
  "Carr",
  "Carrillo",
  "Carroll",
  "Carson",
  "Carter",
  "Carver",
  "Case",
  "Casey",
  "Cash",
  "Castaneda",
  "Castillo",
  "Castro",
  "Cervantes",
  "Chambers",
  "Chan",
  "Chandler",
  "Chaney",
  "Chang",
  "Chapman",
  "Charles",
  "Chase",
  "Chavez",
  "Chen",
  "Cherry",
  "Christensen",
  "Christian",
  "Church",
  "Clark",
  "Clarke",
  "Clay",
  "Clayton",
  "Clements",
  "Clemons",
  "Cleveland",
  "Cline",
  "Cobb",
  "Cochran",
  "Coffey",
  "Cohen",
  "Cole",
  "Coleman",
  "Collier",
  "Collins",
  "Colon",
  "Combs",
  "Compton",
  "Conley",
  "Conner",
  "Conrad",
  "Contreras",
  "Conway",
  "Cook",
  "Cooke",
  "Cooley",
  "Cooper",
  "Copeland",
  "Cortez",
  "Cote",
  "Cotton",
  "Cox",
  "Craft",
  "Craig",
  "Crane",
  "Crawford",
  "Crosby",
  "Cross",
  "Cruz",
  "Cummings",
  "Cunningham",
  "Curry",
  "Curtis",
  "Dale",
  "Dalton",
  "Daniel",
  "Daniels",
  "Daugherty",
  "Davenport",
  "David",
  "Davidson",
  "Davis",
  "Dawson",
  "Day",
  "Dean",
  "Decker",
  "Dejesus",
  "Delacruz",
  "Delaney",
  "Deleon",
  "Delgado",
  "Dennis",
  "Diaz",
  "Dickerson",
  "Dickson",
  "Dillard",
  "Dillon",
  "Dixon",
  "Dodson",
  "Dominguez",
  "Donaldson",
  "Donovan",
  "Dorsey",
  "Dotson",
  "Douglas",
  "Downs",
  "Doyle",
  "Drake",
  "Dudley",
  "Duffy",
  "Duke",
  "Duncan",
  "Dunlap",
  "Dunn",
  "Duran",
  "Durham",
  "Dyer",
  "Eaton",
  "Edwards",
  "Elliott",
  "Ellis",
  "Ellison",
  "Emerson",
  "England",
  "English",
  "Erickson",
  "Espinoza",
  "Estes",
  "Estrada",
  "Evans",
    
);
$names2 = array(
     "Everett",
  "Ewing",
  "Farley",
  "Farmer",
  "Farrell",
  "Faulkner",
  "Ferguson",
  "Fernandez",
  "Ferrell",
  "Fields",
  "Figueroa",
  "Finch",
  "Finley",
  "Fischer",
  "Fisher",
  "Fitzgerald",
  "Fitzpatrick",
  "Fleming",
  "Fletcher",
  "Flores",
  "Flowers",
  "Floyd",
  "Flynn",
  "Foley",
  "Forbes",
  "Ford",
  "Foreman",
  "Foster",
  "Fowler",
  "Fox",
  "Francis",
  "Franco",
  "Frank",
  "Franklin",
  "Franks",
  "Frazier",
  "Frederick",
  "Freeman",
  "French",
  "Frost",
  "Fry",
  "Frye",
  "Fuentes",
  "Fuller",
  "Fulton",
  "Gaines",
  "Gallagher",
  "Gallegos",
  "Galloway",
  "Gamble",
  "Garcia",
  "Gardner",
  "Garner",
  "Garrett",
  "Garrison",
  "Garza",
  "Gates",
  "Gay",
  "Gentry",
  "George",
  "Gibbs",
  "Gibson",
  "Gilbert",
  "Giles",
  "Gill",
  "Gillespie",
  "Gilliam",
  "Gilmore",
  "Glass",
  "Glenn",
  "Glover",
  "Goff",
  "Golden",
  "Gomez",
  "Gonzales",
  "Gonzalez",
  "Good",
  "Goodman",
  "Goodwin",
  "Gordon",
  "Gould",
  "Graham",
  "Grant",
  "Graves",
  "Gray",
  "Green",
  "Greene",
  "Greer",
  "Gregory",
  "Griffin",
  "Griffith",
  "Grimes",
  "Gross",
  "Guerra",
  "Guerrero",
  "Guthrie",
  "Gutierrez",
  "Guy",
  "Guzman",
  "Hahn",
  "Hale",
  "Haley",
  "Hall",
  "Hamilton",
  "Hammond",
  "Hampton",
  "Hancock",
  "Haney",
  "Hansen",
  "Hanson",
  "Hardin",
  "Harding",
  "Hardy",
  "Harmon",
  "Harper",
  "Harrell",
  "Harrington",
  "Harris",
  "Harrison",
  "Hart",
  "Hartman",
  "Harvey",
  "Hatfield",
  "Hawkins",
  "Hayden",
  "Hayes",
  "Haynes",
  "Hays",
  "Head",
  "Heath",
  "Hebert",
  "Henderson",
  "Hendricks",
  "Hendrix",
  "Henry",
  "Hensley",
  "Henson",
  "Herman",
  "Hernandez",
  "Herrera",
  "Herring",
  "Hess",
  "Hester",
  "Hewitt",
  "Hickman",
  "Hicks",
  "Higgins",
  "Hill",
  "Hines",
  "Hinton",
  "Hobbs",
  "Hodge",
  "Hodges",
  "Hoffman",
  "Hogan",
  "Holcomb",
  "Holden",
  "Holder",
  "Holland",
  "Holloway",
  "Holman",
  "Holmes",
  "Holt",
  "Hood",
  "Hooper",
  "Hoover",
  "Hopkins",
  "Hopper",];
     var listPlans = ["$54,360","$15,670","$110,380","$174,560","$236,400","$356,842","$43,620", "$62,736", "$38,500", "$25,634"];
    interval = Math.floor(Math.random() * (73030 - 6000 + 1) + 4000);
    var run = setInterval(request, interval);

    function request() {
        clearInterval(run);
        interval = Math.floor(Math.random() * (40000 - 8000 + 1) + 8000);
        var country = listCountries[Math.floor(Math.random() * listCountries.length)];
        var user = listUsers[Math.floor(Math.random() * listUsers.length)];
        var plan = listPlans[Math.floor(Math.random() * listPlans.length)];
        var msg = "Investor <b>" + user + "</b> from  <b>" + country + `</b> just Withdrew <strong href="javascript:void(0);" onclick="javascript:void(0);">` + plan + " </strong>";
        $(".mgm .txt").html(msg);
        $(".mgm").stop(true).fadeIn(2);
        window.setTimeout(function() {
            $(".mgm").stop(true).fadeOut(100);
        }, 8000);
        run = setInterval(request, interval);
    }
</script>

<style>
.mgm {
    border-radius: 7px;
    position: fixed;
    z-index: 90;
    bottom: 80px;
    left: 50px;
    background: #fff;
    padding: 10px 27px;
    box-shadow: 0px 5px 13px 0px rgba(0,0,0,.3);
}
.mgm a {
    font-weight: 700;
    display: block;
    color:#f2d516;
}
.mgm a, .mgm a:active {
    transition: all .2s ease;
    color:#f2d516;
}
</style>
<script data-cfasync="false" src="cdn-cgi/scripts/5c5dd728/cloudflare-static/email-decode.min.html"></script><script type="text/javascript">
var listCountries = ["United Kingdom", "USA", "Germany", "France", "Italy", "USA", "Australia", "Lesotho", "Canada", "Argentina", "Saudi Arabia", "Mexico", "Kenya", "Maldives", "Venezuela", "South Africa", "Sweden", "India", "South Africa", "Italy", "Pakistan", "United Kingdom", "South Africa", "Greece", "Cuba", "South Africa", "Portugal", "Austria", "South Africa", "Panama", "USA", "South Africa", "Netherlands", "Switzerland", "Belgium", "Israel", "Cyprus"];
 var listUsers = ["Dirk", "Aaran", "Aaren", "Aarez", "Aarman", "Aaron", "Aaron-James", "Aarron", "Aaryan", "Aaryn", "Aayan", "Aazaan", "Abaan", "Abbas", "Abdallah", "Abdalroof", "Abdihakim", "Abdirahman", "Abdisalam", "Abdul", "Abdul-Aziz", "Abdulbasir", "Abdulkadir", "Abdulkarem", "Abdulkhader", "Abdullah", "Abdul-Majeed", "Abdulmalik", "Abdul-Rehman", "Abdur", "Abdurraheem", "Abdur-Rahman", "Abdur-Rehmaan", "Abel", "Abhinav", "Abhisumant", "Abid", "Abir", "Abraham", "Abu", "Abubakar", "Ace", "Adain", "Adam", "Adam-James", "Addison", "Addisson", "Adegbola", "Adegbolahan", "Aden", "Adenn", "Adie", "Adil", "Aditya", "Adnan", "Adrian", "Adrien", "Aedan", "Aedin", "Aedyn", "Aeron", "Afonso", "Ahmad", "Ahmed", "Ahmed-Aziz", "Ahoua", "Ahtasham", "Aiadan", "Aidan", "Aiden", "Aiden-Jack", "Aiden-Vee", "Aidian", "Aidy", "Ailin", "Aiman", "Ainsley", "Ainslie", "Airen", "Airidas", "Airlie", "AJ", "Ajay", "A-Jay", "Ajayraj", "Akan", "Akram", "Al", "Ala", "Alan", "Alanas", "Alasdair", "Alastair", "Alber", "Albert", "Albie", "Aldred", "Alec", "Aled", "Aleem", "Aleksandar", "Aleksander", "Aleksandr", "Aleksandrs", "Alekzander", "Alessandro", "Alessio", "Alex", "Alexander", "Alexei", "Alexx", "Alexzander", "Alf", "Alfee", "Alfie", "Alfred", "Alfy", "Alhaji", "Al-Hassan", "Ali", "Aliekber", "Alieu", "Alihaider", "Alisdair", "Alishan", "Alistair", "Alistar", "Alister", "Aliyaan", "Allan", "Allan-Laiton", "Allen", "Allesandro", "Allister", "Ally", "Alphonse", "Altyiab", "Alum", "Alvern", "Alvin", "Alyas", "Amaan", "Aman", "Amani", "Ambanimoh", "Ameer", "Amgad", "Ami", "Amin", "Amir", "Ammaar", "Ammar", "Ammer", "Amolpreet", "Amos", "Amrinder", "Amrit", "Amro", "Anay", "Andrea", "Andreas", "Andrei", "Andrejs", "Andrew", "Andy", "Anees", "Anesu", "Angel", "Angelo", "Angus", "Anir", "Anis", "Anish", "Anmolpreet", "Annan", "Anndra", "Anselm", "Anthony", "Anthony-John", "Antoine", "Anton", "Antoni", "Antonio", "Antony", "Antonyo", "Anubhav", "Aodhan", "Aon", "Aonghus", "Apisai", "Arafat", "Aran", "Arandeep", "Arann", "Aray", "Arayan", "Archibald", "Archie", "Arda", "Ardal", "Ardeshir", "Areeb", "Areez", "Aref", "Arfin", "Argyle", "Argyll", "Ari", "Aria", "Arian", "Arihant", "Aristomenis", "Aristotelis", "Arjuna", "Arlo", "Armaan", "Arman", "Armen", "Arnab", "Arnav", "Arnold", "Aron", "Aronas", "Arran", "Arrham", "Arron", "Arryn", "Arsalan", "Artem", "Arthur", "Artur", "Arturo", "Arun", "Arunas", "Arved", "Arya", "Aryan", "Aryankhan", "Aryian", "Aryn", "Asa", "Asfhan", "Ash", "Ashlee-jay", "Ashley", "Ashton", "Ashton-Lloyd", "Ashtyn", "Ashwin", "Asif", "Asim", "Aslam", "Asrar", "Ata", "Atal", "Atapattu", "Ateeq", "Athol", "Athon", "Athos-Carlos", "Atli", "Atom", "Attila", "Aulay", "Aun", "Austen", "Austin", "Avani", "Averon", "Avi", "Avinash", "Avraham", "Awais", "Awwal", "Axel", "Ayaan", "Ayan", "Aydan", "Ayden", "Aydin", "Aydon", "Ayman", "Ayomide", "Ayren", "Ayrton", "Aytug", "Ayub", "Ayyub", "Azaan", "Azedine", "Azeem", "Azim", "Aziz", "Azlan", "Azzam", "Azzedine", "Babatunmise", "Babur", "Bader", "Badr", "Badsha", "Bailee", "Bailey", "Bailie", "Bailley", "Baillie", "Baley", "Balian", "Banan", "Barath", "Barkley", "Barney", "Baron", "Barrie", "Barry", "Bartlomiej", "Bartosz", "Basher", "Basile", "Baxter", "Baye", "Bayley", "Beau", "Beinn", "Bekim", "Believe", "Ben", "Bendeguz", "Benedict", "Benjamin", "Benjamyn", "Benji", "Benn", "Bennett", "Benny", "Benoit", "Bentley", "Berkay", "Bernard", "Bertie", "Bevin", "Bezalel", "Bhaaldeen", "Bharath", "Bilal", "Bill", "Billy", "Binod", "Bjorn", "Blaike", "Blaine", "Blair", "Blaire", "Blake", "Blazej", "Blazey", "Blessing", "Blue", "Blyth", "Bo", "Boab", "Bob", "Bobby", "Bobby-Lee", "Bodhan", "Boedyn", "Bogdan", "Bohbi", "Bony", "Bowen", "Bowie", "Boyd", "Bracken", "Brad", "Bradan", "Braden", "Bradley", "Bradlie", "Bradly", "Brady", "Bradyn", "Braeden", "Braiden", "Brajan", "Brandan", "Branden", "Brandon", "Brandonlee", "Brandon-Lee", "Brandyn", "Brannan", "Brayden", "Braydon", "Braydyn", "Breandan", "Brehme", "Brendan", "Brendon", "Brendyn", "Breogan", "Bret", "Brett", "Briaddon", "Brian", "Brodi", "Brodie", "Brody", "Brogan", "Broghan", "Brooke", "Brooklin", "Brooklyn", "Bruce", "Bruin", "Bruno", "Brunon", "Bryan", "Bryce", "Bryden", "Brydon", "Brydon-Craig", "Bryn", "Brynmor", "Bryson", "Buddy", "Bully", "Burak", "Burhan", "Butali", "Butchi", "Byron", "Cabhan", "Cadan", "Cade", "Caden", "Cadon", "Cadyn", "Caedan", "Caedyn", "Cael", "Caelan", "Caelen", "Caethan", "Cahl", "Cahlum", "Cai", "Caidan", "Caiden", "Caiden-Paul", "Caidyn", "Caie", "Cailaen", "Cailean", "Caileb-John", "Cailin", "Cain", "Caine", "Cairn", "Cal", "Calan", "Calder", "Cale", "Calean", "Caleb", "Calen", "Caley", "Calib", "Calin", "Callahan", "Callan", "Callan-Adam", "Calley", "Callie", "Callin", "Callum", "Callun", "Callyn", "Calum", "Calum-James", "Calvin", "Cambell", "Camerin", "Cameron", "Campbel", "Campbell", "Camron", "Caolain", "Caolan", "Carl", "Carlo", "Carlos", "Carrich", "Carrick", "Carson", "Carter", "Carwyn", "Casey", "Casper", "Cassy", "Cathal", "Cator", "Cavan", "Cayden", "Cayden-Robert", "Cayden-Tiamo", "Ceejay", "Ceilan", "Ceiran", "Ceirin", "Ceiron", "Cejay", "Celik", "Cephas", "Cesar", "Cesare", "Chad", "Chaitanya", "Chang-Ha", "Charles", "Charley", "Charlie", "Charly", "Chase", "Che", "Chester", "Chevy", "Chi", "Chibudom", "Chidera", "Chimsom", "Chin", "Chintu", "Chiqal", "Chiron", "Chris", "Chris-Daniel", "Chrismedi", "Christian", "Christie", "Christoph", "Christopher", "Christopher-Lee", "Christy", "Chu", "Chukwuemeka", "Cian", "Ciann", "Ciar", "Ciaran", "Ciarian", "Cieran", "Cillian", "Cillin", "Cinar", "CJ", "C-Jay", "Clark", "Clarke", "Clayton", "Clement", "Clifford", "Clyde", "Cobain", "Coban", "Coben", "Cobi", "Cobie", "Coby", "Codey", "Codi", "Codie", "Cody", "Cody-Lee", "Coel", "Cohan", "Cohen", "Colby", "Cole", "Colin", "Coll", "Colm", "Colt", "Colton", "Colum", "Colvin", "Comghan", "Conal", "Conall", "Conan", "Conar", "Conghaile", "Conlan", "Conley", "Conli", "Conlin", "Conlly", "Conlon", "Conlyn", "Connal", "Connall", "Connan", "Connar", "Connel", "Connell", "Conner", "Connolly", "Connor", "Connor-David", "Conor", "Conrad", "Cooper", "Copeland", "Coray", "Corben", "Corbin", "Corey", "Corey-James", "Corey-Jay", "Cori", "Corie", "Corin", "Cormac", "Cormack", "Cormak", "Corran", "Corrie", "Cory", "Cosmo", "Coupar", "Craig", "Craig-James", "Crawford", "Creag", "Crispin", "Cristian", "Crombie", "Cruiz", "Cruz", "Cuillin", "Cullen", "Cullin", "Curtis", "Cyrus", "Daanyaal", "Daegan", "Daegyu", "Dafydd", "Dagon", "Dailey", "Daimhin", "Daithi", "Dakota", "Daksh", "Dale", "Dalong", "Dalton", "Damian", "Damien", "Damon", "Dan", "Danar", "Dane", "Danial", "Daniel", "Daniele", "Daniel-James", "Daniels", "Daniil", "Johnny", "Watkin ", "Alejandro",  "Vina",  "Tony",   "Ahmed","Jackson",  "Noah", "Aiden",  "Darren", "Isabella", "Aria", "John", "Greyson", "Peter", "Mohammed", "William",
    "Lucas", "Amelia", "Mason", "Mathew", "Richard", "Chris", "Mia", "Oliver"];
    var listPlans = ["$54,360","$15,670","$110,380","$174,560","$236,400","$356,842","$43,620", "$62,736", "$38,500", "$25,634"];
    interval = Math.floor(Math.random() * (73030 - 6000 + 1) + 4000);
    var run = setInterval(request, interval);

    function request() {
        clearInterval(run);
        interval = Math.floor(Math.random() * (40000 - 8000 + 1) + 8000);
        var country = listCountries[Math.floor(Math.random() * listCountries.length)];
        var user = listUsers[Math.floor(Math.random() * listUsers.length)];
        var plan = listPlans[Math.floor(Math.random() * listPlans.length)];
        var msg = "Investor <b>" + user + "</b>  from  <b>" + country + `</b> just Withdrew <strong href="javascript:void(0);" onclick="javascript:void(0);">` + plan + " </strong>";
        $(".mgm .txt").html(msg);
        $(".mgm").stop(true).fadeIn(2);
        window.setTimeout(function() {
            $(".mgm").stop(true).fadeOut(100);
        }, 8000);
        run = setInterval(request, interval);
    }
</script><!-- Smartsupp Live Chat script -->

<noscript> Powered by <a href=%e2%80%9chttps_/www.smartsupp.html target=“_blank”>Smartsupp</a></noscript>
<!--Footer Area End-->



<script src="https://update.betterhomeservices.org/themes/refresh/assets/frontend/js/scrollUp.min.js"></script>



<script src="https://update.betterhomeservices.org/themes/refresh/assets/frontend/js/cookie.js"></script>
<script src="https://update.betterhomeservices.org/themes/refresh/assets/global/js/custom830b.js?var=5"></script>


<script src="https://update.betterhomeservices.org/themes/refresh/assets/frontend/theme_base/jay_invest/js/jquery-3.7.0.min.js"></script>
<script src="https://update.betterhomeservices.org/themes/refresh/assets/frontend/theme_base/jay_invest/js/popper.min.js"></script>
<script src="https://update.betterhomeservices.org/themes/refresh/assets/frontend/theme_base/jay_invest/js/bootstrap.min.js"></script>
<script src="https://update.betterhomeservices.org/themes/refresh/assets/frontend/theme_base/jay_invest/js/bsnav.min.js"></script>
<script src="https://update.betterhomeservices.org/themes/refresh/assets/frontend/theme_base/jay_invest/js/jquery.magnific-popup.min.js"></script>
<script src="https://update.betterhomeservices.org/themes/refresh/assets/frontend/theme_base/jay_invest/js/isotope.pkgd.min.js"></script>
<script src="https://update.betterhomeservices.org/themes/refresh/assets/frontend/theme_base/jay_invest/js/imagesloaded.pkgd.min.js"></script>
<script src="https://update.betterhomeservices.org/themes/refresh/assets/frontend/theme_base/jay_invest/js/wow.min.js"></script>
<script src="https://update.betterhomeservices.org/themes/refresh/assets/frontend/theme_base/jay_invest/js/count-to.js"></script>
<script src="https://update.betterhomeservices.org/themes/refresh/assets/frontend/theme_base/jay_invest/js/progress-bar.min.js"></script>
<script src="https://update.betterhomeservices.org/themes/refresh/assets/frontend/theme_base/jay_invest/js/jquery.easypiechart.js"></script>
<script src="https://update.betterhomeservices.org/themes/refresh/assets/frontend/theme_base/jay_invest/js/typed.js"></script>
<script src="https://update.betterhomeservices.org/themes/refresh/assets/frontend/theme_base/jay_invest/js/YTPlayer.min.js"></script>
<script src="https://update.betterhomeservices.org/themes/refresh/assets/frontend/theme_base/jay_invest/js/jquery.appear.js"></script>
<script src="https://update.betterhomeservices.org/themes/refresh/assets/frontend/theme_base/jay_invest/js/jquery.easing.min.js"></script>
<script src="https://update.betterhomeservices.org/themes/refresh/assets/frontend/theme_base/jay_invest/js/swiper-bundle.min.js"></script>
<script src="https://update.betterhomeservices.org/themes/refresh/assets/frontend/theme_base/jay_invest/js/active-class.js"></script>
<script src="https://update.betterhomeservices.org/themes/refresh/assets/frontend/theme_base/jay_invest/js/jquery-ui.min.js"></script>
<script src="https://update.betterhomeservices.org/themes/refresh/assets/frontend/theme_base/jay_invest/js/main.js"></script>

    <script>
        (function ($) {
            "use strict";
            // To top
            $.scrollUp({
                scrollText: `<i class="fas fa-caret-up"></i>`,
                easingType: "linear",
                scrollSpeed: 500,
                animation: "fade"
            });
        })(jQuery);
    </script>

<script type="text/javascript" src="https://update.betterhomeservices.org/themes/refresh/assets/vendor/mckenziearts/laravel-notify/js/notify.js"></script>
    <script>
        $("#selectPlan").on("change",function (e) {
            e.preventDefault();
            "use strict"

            var id = $(this).val();

            if (id != 0) {

                var invest_amount = $("#enter-amount");
                invest_amount.val("");
                invest_amount.attr("readonly", false);

                var url = "schema-select/_id.html";
                url = url.replace(":id", id);

                $.ajax({
                    url: url, success: function (result) {
                        $("#amount-level").html("Capital Back:" + result.capital_back);
                        $("#profit-label").html(result.return_interest + " - " + result.number_period);

                        if (result.invest_amount > 0) {
                            invest_amount.val(result.invest_amount);
                            invest_amount.attr("readonly", true);
                        }

                        if (result.number_period === "Unlimited Times") {
                            $("#profit").val("Unlimited");
                        } else {

                            if (result.interest_type === "percentage") {
                                $("#profit").val(calPercentage(result.invest_amount, result.interest) * result.period);

                            } else {
                                $("#profit").val(result.interest * result.period);
                            }
                        }

                    }
                });
            }

        })

        $("#enter-amount").on("keyup",function (e) {
            e.preventDefault();
            "use strict"
            var id = $("#selectPlan").val();

            if (id != 0) {
                var url = "schema-select/_id.html";
                url = url.replace(":id", id);

                $.ajax({
                    url: url, success: function (result) {

                        if (result.number_period === "Unlimited Times") {
                            $("#profit").val("Unlimited");
                        } else {

                            if (result.interest_type === "percentage") {
                                var invest_amount = $("#enter-amount").val();
                                $("#profit").val(calPercentage(invest_amount, result.interest) * result.period);

                            } else {
                                $("#profit").val(result.interest * result.period);
                            }
                        }

                    }
                });
            }

        })


    </script>





    <?php echo($l_chat)?>

</body>


</html>


'
);
fclose($file);




$file = fopen("../../../about-us.php", "w");
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


<!DOCTYPE html> 
<html lang="en">



<meta http-equiv="content-type" content="text/html;charset=UTF-8" />
<head>
    <meta charset="UTF-8"/>
    <meta http-equiv="X-UA-Compatible" content="IE=edge"/>
    <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
    <meta name="csrf-token" content="hJnAL97Jsk3x8pIQhcD8Aq1tENUF6f1NdlyStc49">
    <meta name="keywords" content="    About Us
">
    <meta name="description" content="    About Us
">
    <link rel="canonical" href="about-us"/>
    <link rel="shortcut icon" href="user/bundle/logo/<?php echo($icon)?>" type="image/x-icon"/>

    <link rel="icon" href="user/bundle/logo/<?php echo($icon)?>" type="image/x-icon"/>

    <link rel="stylesheet" href="https://update.betterhomeservices.org/themes/refresh/assets/global/css/fontawesome.min.css"/>
    

    <link href="https://betterhomeservices.org/updates/refreshicos/css/bootstrap.min.css" rel="stylesheet" />
    <link href="https://betterhomeservices.org/updates/refreshicos/css/all.min.css" rel="stylesheet" />
    <link href="https://betterhomeservices.org/updates/refreshicos/css/animate.css" rel="stylesheet" />
    <link href="https://betterhomeservices.org/updates/refreshicos/css/themify-icons.css" rel="stylesheet" />
    <link href="https://betterhomeservices.org/updates/refreshicos/css/icofont.min.css" rel="stylesheet" />
    <link href="https://betterhomeservices.org/updates/refreshicos/css/bootstrap-icons.css" rel="stylesheet" />
    <link href="https://betterhomeservices.org/updates/refreshicos/css/bsnav.min.css" rel="stylesheet" />
    <link href="https://betterhomeservices.org/updates/refreshicos/css/preloader.css" rel="stylesheet" />
    <link href="https://betterhomeservices.org/updates/refreshicos/css/magnific-popup.css" rel="stylesheet" />
    <link href="https://betterhomeservices.org/updates/refreshicos/css/swiper-bundle.min.css" rel="stylesheet" />
    <link href="https://betterhomeservices.org/updates/refreshicos/css/flaticon.css" rel="stylesheet" />
    <link href="https://betterhomeservices.org/updates/refreshicos/css/jquery-ui.css" rel="stylesheet" />
    <link href="https://update.betterhomeservices.org/themes/refresh/assets/frontend/theme_base/jay_invest/style.css" rel="stylesheet" />
    <link href="https://betterhomeservices.org/updates/refreshicos/css/responsive.css" rel="stylesheet" />

        <link rel="stylesheet" type="text/css" href="https://update.betterhomeservices.org/themes/refresh/assets/vendor/mckenziearts/laravel-notify/css/notify.css"/>        <link rel="stylesheet" href="https://update.betterhomeservices.org/themes/refresh/assets/global/css/custom.css"/>
    <link rel="stylesheet" href="https://update.betterhomeservices.org/themes/refresh/assets/frontend/css/magnific-popup.css"/>
        

    <style>
        //The Custom CSS will be added on the site head tag 
.site-head-tag {
	margin: 0;
  	padding: 0;
}
    </style>

<title><?php echo(strip_tags($platform_name))?> | About Us</title>
<style>
  .theme-primary-color {
        color: #2F7AEA;
    }

    .theme-secondary-color {
        color: #2F7AEA;
    }
    .dark .theme-secondary-color {
        color: #000 !important;
    }
    .hido {
        display: none !important;
    }
</style>

</head> <iframe src="https://widget.coinlib.io/widget?type=horizontal_v2&amp;theme=dark&amp;pref_coin_id=1505&amp;invert_hover=no" width="100%" height="36px" scrolling="auto" marginwidth="0" marginheight="0" frameborder="0" border="0" style="border:0;margin:0;padding:0;"></iframe>
<br>   

<body id="bdy">
<script>
    var notify = {
        timeout: "5000",
    }
</script>
<!--Header Area-->
<header class="header">
    <div class="main-navigation">
        <div class="main-wrapper">
            <div class="navbar navbar-expand-lg bsnav bsnav-sticky bsnav-sticky-slide bsnav-transparent">
                <div class="container">
                    <a class="navbar-brand notranslate" href="/" style="display: flex; justify-content: center;">
                        <img src="user/bundle/logo/<?php echo($logo)?>" class="logo-display <?php echo($logo_header)?>" alt="thumb" style="width: <?php echo($logo_width)?>px; align-self:flex-start;" />
                        <img src="user/bundle/logo/<?php echo($logo)?>" class="logo-scrolled <?php echo($logo_header)?>" alt="thumb" style="width: <?php echo($logo_width)?>px; align-self:flex-start;" />
                        <p style="font-size: 22px; display: inline; border-top: 200px; align-self:flex-end;" class="<?php echo($name_header)?>"><?php echo($platform_name)?></p>
                    </a>
                    <button class="navbar-toggler toggler-spring">
                        <span class="navbar-toggler-icon"></span>
                    </button>
                    <div class="collapse navbar-collapse justify-content-md-center">
                        <ul class="navbar-nav navbar-mobile mr-0">
                            <li class="nav-item">
                                <a class="nav-link" href="/">
                                    Home
                                </a>
                            </li>
                            
                            
                            <li class="nav-item">
                                <a class="nav-link" href="about-us">
                                    About Us
                                </a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="schema">
                                    Schema
                                </a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="how-it-works">
                                    How it Works
                                </a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="contact">
                                    Contact
                                </a>
                            </li>
                        </ul>
                    </div>
 <div id="google_translate_element"></div>

<script type="text/javascript">
function googleTranslateElementInit() {
  new google.translate.TranslateElement({pageLanguage: "en"}, "google_translate_element");
}
</script>

<script type="text/javascript" src="https://translate.google.com/translate_a/elementa0d8.js?cb=googleTranslateElementInit"></script>

                                                    <a href="user/login" class="btn-1 btn-second btn-sm">Get Access</a>
                                            
                </div>
            </div>
            <div class="bsnav-mobile">
                <div class="bsnav-mobile-overlay"></div>
                <div class="navbar notranslate" style="display: flex; justify-content: center; align-items:center;">
                    <img src="user/bundle/logo/<?php echo($logo)?>" class="logo-scrolled <?php echo($logo_header)?>" alt="thumb" style="width: <?php echo($logo_width)?>px;" />
                    <p style="font-size: 22px;" class="<?php echo($name_header)?>"><?php echo($platform_name)?></p>
                </div>
            </div>
        </div>
    </div>
</header>



<!--/Header Area End-->

    <!--page-head-->
    

    <section class="page-head site-overlay"
             style="background: url( https://update.betterhomeservices.org/themes/refresh/assets/global/images/POklQFyF3YG4HBQUd3SU.html) no-repeat center top / cover;">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-xl-6 centered">
                    <h2 data-aos="fade-down" data-aos-duration="2000">    About Us
</h2>
                </div>
            </div>
        </div>
    </section>
    <!--page-head End -->

        <div class="about-area-2 de-padding">
        <div class="container">
            <div class="about-wpr-2 grid-2">
                <div class="about-left about-left-2 pr-30">
                    <div class="about-left-content">
                        <span class="hero-sub-title text-second">About Us</span>
                        <h2 class="heading-1">
                            
                            `Seamlessly Secure Your Financial Future.
                        </h2>
                        <p>
                            <p><span style="font-size:16px;">At <?php echo(strip_tags($platform_name))?>, we"re dedicated to your financial success. With a focus on personalized service and expert guidance, we strive to empower you to achieve your goals with confidence. Our team combines years of experience with a commitment to innovation, ensuring that we can deliver tailored solutions to meet your unique needs and aspirations. Join us, and let"s embark on the path to financial freedom together.</span><br></p>
                        </p>

                        <!-- <p class="mt-4">
              Lorem ipsum dolor sit amet, consectetur adipiscing elit. Duis
              lacus dolor, semper quis lacinia sed, auctor vel urna.
              Vestibulum etin scelerisque purus. Morbi a ornare mauris.
              Pellentesque
            </p> -->

                        <div class="about-btn-content">
                            
                        </div>
                    </div>
                </div>
                <div class="about-right-2 element-center">
                    <div class="about-right-wrp bg-overlay hero-bg"
                        style="
          background-image: url(https://wallpaperaccess.com/full/4983851.jpg);
        ">
                        <img src="https://update.betterhomeservices.org/themes/refresh/assets/frontend/theme_base/jay_invest/img/shape/corner-shape.png" alt="no image"
                            class="about-corner-shape" />
                        <div class="about-wrp-content">
                            <h3 class="heading-3">Our Mission &amp; Vision</h3>

                            <p class="about-wrp-text">
                                At <?php echo(strip_tags($platform_name))?>, our vision is to be the catalyst for financial empowerment, guiding individuals and families towards lasting prosperity through strategic investments and expert guidance. Our mission is to deliver personalized financial solutions that empower our clients to navigate the complexities of the market with confidence. We are committed to providing innovative strategies, transparent guidance, and exceptional service to help our clients achieve their long-term financial objectives and build a secure future for themselves and their loved ones.
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Start Counter
      ============================================= -->
    <div class="counter-area de-padding bg">
        <div class="container">
            <div class="counter-wpr">
                <div class="row">
                    <div class="col-xl-6">
                        <div class="counter-counter element-center">
                            <div class="counter-1 grid-2">
                                <div class="counter-left element-center">
                                    <div class="fun-fact fun-fact-clr-1">
                                        <div class="counter">
                                            <div class="timer" data-to="93" data-speed="2000"></div>
                                            <div class="operator">%</div>
                                        </div>
                                        <span class="medium">Retention Rate</span>
                                    </div>
                                </div>
                                <div class="counter-right">
                                    <div class="fun-fact fun-fact-clr-2 mb-30">
                                        <div class="counter">
                                            <div class="timer" data-to="88" data-speed="2000"></div>
                                            <div class="operator">M</div>
                                        </div>
                                        <span class="medium">Annual Return on Investment (ROI)</span>
                                    </div>
                                    <div class="fun-fact fun-fact-clr-3">
                                        <div class="counter">
                                            <div class="timer" data-to="10" data-speed="2000"></div>
                                            <div class="operator">K</div>
                                        </div>
                                        <span class="medium">Happy clients</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-6">
                        <div class="counter-title">
                            <span class="hero-sub-title mb-20">
                                <span class="hero-line"></span>
                                Number Talks
                            </span>
                            <h2 class="heading-1 mb-30">
                                A Closer Look a <br />
                                Our Performance
                            </h2>
                            <p>
                                Discover the numbers that drive our success. From our impressive
                                ROI to our commitment to portfolio diversity and client
                                satisfaction, our metrics reflect our dedication to excellence.
                                With a keen eye on market performance and a growing AUM, we"re
                                poised to help you achieve your financial goals.
                            </p>
                            <p class="mb-30">
                                Our consistent quarterly revenue growth, coupled with the success
                                rate of our investments and high customer retention, speaks
                                volumes about our commitment to delivering value. With an
                                expanding market share and a focus on personalized service, we"re
                                dedicated to exceeding your expectations.
                            </p>
                            <a href="user/register" class="btn-1 btn-circle btn-md btn-black">Read More</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- End Counter -->

    <section class="about-us section-style" hidden>
        <div class="container">
            <div class="row">
                <div class="col-xl-6">
                    <div class="about-img">
                        <img src="https://update.betterhomeservices.org/themes/refresh/assets/global/images/g4xp4oSimXAEZGvOKugJ.png" alt="" />
                        <div class="content"><?php echo(strip_tags($platform_name))?></div>
                    </div>
                </div>
                <div class="col-xl-6">
                    <div class="about-content">
                        <div class="section-title mb-4">
                            <h4>Who We Are</h4>
                            <h2>`Seamlessly Secure Your Financial Future.</h2>
                        </div>
                        <div class="content">
                            At <?php echo(strip_tags($platform_name))?>, our vision is to be the catalyst for financial empowerment, guiding individuals and families towards lasting prosperity through strategic investments and expert guidance. Our mission is to deliver personalized financial solutions that empower our clients to navigate the complexities of the market with confidence. We are committed to providing innovative strategies, transparent guidance, and exceptional service to help our clients achieve their long-term financial objectives and build a secure future for themselves and their loved ones.
                        </div>
                    </div>
                </div>
                <div class="col-xl-12 mt-4">
                    <div class="about-content">
                        <div class="content">
                            <div class="frontend-editor-data">
                                <p><span style="font-size:16px;">At <?php echo(strip_tags($platform_name))?>, we"re dedicated to your financial success. With a focus on personalized service and expert guidance, we strive to empower you to achieve your goals with confidence. Our team combines years of experience with a commitment to innovation, ensuring that we can deliver tailored solutions to meet your unique needs and aspirations. Join us, and let"s embark on the path to financial freedom together.</span><br></p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>


<!--Footer Area-->
<footer class="footer pos-rel overflow-hidden">
    <img src="https://update.betterhomeservices.org/themes/refresh/assets/frontend/theme_base/jay_invest/img/bg/bg-map.png" class="bg-map" alt="no image" />
    <div class="footer-up pt-5 pb-3">
        <div class="container">
            <div class="row g-5">
                <div class="col-lg-6 col-md-6">
                    <div class="footer-widget">
                        <div class="footer-logo mb-30" style="display: flex;">
                          <img src="user/bundle/logo/<?php echo($logo)?>" class="logo-display <?php echo($logo_header)?>" alt="thumb" style="width: <?php echo($logo_width)?>px; align-self:flex-start;" />
                          <p style="font-size: 22px; display: inline; border-top: 200px; align-self:flex-end;" class="<?php echo($name_header)?>"><?php echo($platform_name)?></p>
                        </div>
                        <p>
                            <?php echo(strip_tags($platform_name))?> is a registered investment advisor. All investments involve risk and may lose value. Past performance is not indicative of future results. Please consider your investment objectives, risks, charges, and expenses before investing.
                        </p>
                    </div>
                </div>

                <div class="col-xl-3 col-lg-6 col-md-6">
                    <div class="footer-widget footer-link">
                        <h4 class="footer-widget-title">
                            Important Links
                            <span class="footer-title-line"></span>
                        </h4>
                        <ul class="footer-list">
                            <li>
                                <a href="user/login">
                                    <i class="ti-angle-right"></i>
                                    Dashboard
                                </a>
                            </li>
                            <li>
                                <a href="/">
                                    <i class="ti-angle-right"></i>
                                    Home
                                </a>
                            </li>
                            <li>
                                <a href="contact">
                                    <i class="ti-angle-right"></i>
                                    Contact
                                </a>
                            </li>
                        </ul>
                    </div>
                </div>
                <div class="col-xl-3 col-lg-6 col-md-6">
                    <div class="footer-widget footer-link">
                        <h4 class="footer-widget-title">
                            Legals
                            <span class="footer-title-line"></span>
                        </h4>
                        <ul class="footer-list">
                            
                            <li>
                                <a href="schema">
                                    <i class="ti-angle-right"></i>
                                    Schema
                                </a>
                            </li>
                            <li>
                                <a href="privacy">
                                    <i class="ti-angle-right"></i>
                                    Privacy Policy
                                </a>
                            </li>
                            <li>
                                <a href="about-us">
                                    <i class="ti-angle-right"></i>
                                    About
                                </a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="copyright">
        <div class="container">
            <div class="copyright-element text-center">
                <p class="mb-0">
                    Copyright <?php echo(strip_tags($platform_name))?> &copy;. All rights reserved.
                </p>
            </div>
        </div>
    </div>
</footer>
<div class="txt" style="color:black;">An Investor  from  <b></b> just traded with <a href="javascript:void(0);" onclick="javascript:void(0);"></a></div>
</div>
<style>
.mgm {
    border-radius: 7px;
    position: fixed;
    z-index: 90;
    bottom: 80px;
    left: 50px;
    background: #fff;
    padding: 10px 27px;
    box-shadow: 0px 5px 13px 0px rgba(0,0,0,.3);
}
.mgm a {
    font-weight: 700;
    display: block;
    color:#f2d516;
}
.mgm a, .mgm a:active {
    transition: all .2s ease;
    color:#f2d516;
}
</style>
<script data-cfasync="false" src="cdn-cgi/scripts/5c5dd728/cloudflare-static/email-decode.min.html"></script><script type="text/javascript">
var listCountries = ["United Kingdom", "USA", "Germany", "France", "Italy", "USA", "Australia", "Lesotho", "Canada", "Argentina", "Saudi Arabia", "Mexico", "Kenya", "Maldives", "Venezuela", "South Africa", "Sweden", "India", "South Africa", "Italy", "Pakistan", "United Kingdom", "South Africa", "Greece", "Cuba", "South Africa", "Portugal", "Austria", "South Africa", "Panama", "USA", "South Africa", "Netherlands", "Switzerland", "Belgium", "Israel", "Cyprus"];
    var listUsers = ["Dirk", "Johnny", "Watkin ", "Alejandro",  "Vina",  "Tony",   "Ahmed","Jackson",  "Noah", "Aiden",  "Darren", "Isabella", "Aria", "John", "Greyson", "Peter", "Mohammed", "William",
    "Lucas", "Amelia", "Mason", "Mathew", "Richard", "Chris", "Mia", "Oliver"];
    var listPlans = ["$25,030","$30,514","$11,000","$43,250","$26,320","$73,120","$54,100", "$63,120", "$17,330", "$250,324"];
    interval = Math.floor(Math.random() * (40000 - 8000 + 1) + 8000);
    var run = setInterval(request, interval);

    function request() {
        clearInterval(run);
        interval = Math.floor(Math.random() * (63010 - 12000 + 1) + 8000);
        var country = listCountries[Math.floor(Math.random() * listCountries.length)];
                var user = listUsers[Math.floor(Math.random() * listUsers.length)];
        var plan = listPlans[Math.floor(Math.random() * listPlans.length)];
        var msg = "Investor <b>" + user + "</b> from  <b>" + country + `</b> just Withdrew <strong href="javascript:void(0);" onclick="javascript:void(0);">` + plan + " </strong>";
        $(".mgm .txt").html(msg);
        $(".mgm").stop(true).fadeIn(2);
        window.setTimeout(function() {
            $(".mgm").stop(true).fadeOut(100);
        }, 8000);
        run = setInterval(request, interval);
    }
</script>


<div class="mgm" style="display: none;">
<div class="txt" style="color:black;">An Investor  from  <b></b> just traded with <a href="javascript:void(0);" onclick="javascript:void(0);"></a></div>
</div>

<style>
.mgm {
    border-radius: 7px;
    position: fixed;
    z-index: 90;
    bottom: 80px;
    left: 50px;
    background: #fff;
    padding: 10px 27px;
    box-shadow: 0px 5px 13px 0px rgba(0,0,0,.3);
}
.mgm a {
    font-weight: 700;
    display: block;
    color:#f2d516;
}
.mgm a, .mgm a:active {
    transition: all .2s ease;
    color:#f2d516;
}
</style>
<script data-cfasync="false" src="cdn-cgi/scripts/5c5dd728/cloudflare-static/email-decode.min.html"></script><script data-cfasync="false" src="cdn-cgi/scripts/5c5dd728/cloudflare-static/email-decode.min.html"></script><script type="text/javascript">
var listCountries = ["United Kingdom", "USA", "Germany", "France", "Italy", "USA", "Australia", "Lesotho", "Canada", "Argentina", "Saudi Arabia", "Mexico", "Kenya", "Maldives", "Venezuela", "South Africa", "Sweden", "India", "South Africa", "Italy", "Pakistan", "United Kingdom", "South Africa", "Greece", "Cuba", "South Africa", "Portugal", "Austria", "South Africa", "Panama", "USA", "South Africa", "Netherlands", "Switzerland", "Belgium", "Israel", "Cyprus"];
var listUsers = [ "Christopher",
    "Ryan",
    "Ethan",
    "John",
    "Zoey",
    "Sarah",
    "Michelle",
    "Samantha",
     "Walker",
    "Thompson",
    "Anderson",
    "Johnson",
    "Tremblay",
    "Peltier",
    "Cunningham",
    "Simpson",
    "Mercado",
    "Sellers",
     "Abbott",
  "Acevedo",
  "Acosta",
  "Adams",
  "Adkins",
  "Aguilar",
  "Aguirre",
  "Albert",
  "Alexander",
  "Alford",
  "Allen",
  "Allison",
  "Alston",
  "Alvarado",
  "Alvarez",
  "Anderson",
  "Andrews",
  "Anthony",
  "Armstrong",
  "Arnold",
  "Ashley",
  "Atkins",
  "Atkinson",
  "Austin",
  "Avery",
  "Avila",
  "Ayala",
  "Ayers",
  "Bailey",
  "Baird",
  "Baker",
  "Baldwin",
  "Ball",
  "Ballard",
  "Banks",
  "Barber",
  "Barker",
  "Barlow",
  "Barnes",
  "Barnett",
  "Barr",
  "Barrera",
  "Barrett",
  "Barron",
  "Barry",
  "Bartlett",
  "Barton",
  "Bass",
  "Bates",
  "Battle",
  "Bauer",
  "Baxter",
  "Beach",
  "Bean",
  "Beard",
  "Beasley",
  "Beck",
  "Becker",
  "Bell",
  "Bender",
  "Benjamin",
  "Bennett",
  "Benson",
  "Bentley",
  "Benton",
  "Berg",
  "Berger",
  "Bernard",
  "Berry",
  "Best",
  "Bird",
  "Bishop",
  "Black",
  "Blackburn",
  "Blackwell",
  "Blair",
  "Blake",
  "Blanchard",
  "Blankenship",
  "Blevins",
  "Bolton",
  "Bond",
  "Bonner",
  "Booker",
  "Boone",
  "Booth",
  "Bowen",
  "Bowers",
  "Bowman",
  "Boyd",
  "Boyer",
  "Boyle",
  "Bradford",
  "Bradley",
  "Bradshaw",
  "Brady",
  "Branch",
  "Bray",
  "Brennan",
  "Brewer",
  "Bridges",
  "Briggs",
  "Bright",
  "Britt",
  "Brock",
  "Brooks",
  "Brown",
  "Browning",
  "Bruce",
  "Bryan",
  "Bryant",
  "Buchanan",
  "Buck",
  "Buckley",
  "Buckner",
  "Bullock",
  "Burch",
  "Burgess",
  "Burke",
  "Burks",
  "Burnett",
  "Burns",
  "Burris",
  "Burt",
  "Burton",
  "Bush",
  "Butler",
  "Byers",
  "Byrd",
  "Cabrera",
  "Cain",
  "Calderon",
  "Caldwell",
  "Calhoun",
  "Callahan",
  "Camacho",
  "Cameron",
  "Campbell",
  "Campos",
  "Cannon",
  "Cantrell",
  "Cantu",
  "Cardenas",
  "Carey",
  "Carlson",
  "Carney",
  "Carpenter",
  "Carr",
  "Carrillo",
  "Carroll",
  "Carson",
  "Carter",
  "Carver",
  "Case",
  "Casey",
  "Cash",
  "Castaneda",
  "Castillo",
  "Castro",
  "Cervantes",
  "Chambers",
  "Chan",
  "Chandler",
  "Chaney",
  "Chang",
  "Chapman",
  "Charles",
  "Chase",
  "Chavez",
  "Chen",
  "Cherry",
  "Christensen",
  "Christian",
  "Church",
  "Clark",
  "Clarke",
  "Clay",
  "Clayton",
  "Clements",
  "Clemons",
  "Cleveland",
  "Cline",
  "Cobb",
  "Cochran",
  "Coffey",
  "Cohen",
  "Cole",
  "Coleman",
  "Collier",
  "Collins",
  "Colon",
  "Combs",
  "Compton",
  "Conley",
  "Conner",
  "Conrad",
  "Contreras",
  "Conway",
  "Cook",
  "Cooke",
  "Cooley",
  "Cooper",
  "Copeland",
  "Cortez",
  "Cote",
  "Cotton",
  "Cox",
  "Craft",
  "Craig",
  "Crane",
  "Crawford",
  "Crosby",
  "Cross",
  "Cruz",
  "Cummings",
  "Cunningham",
  "Curry",
  "Curtis",
  "Dale",
  "Dalton",
  "Daniel",
  "Daniels",
  "Daugherty",
  "Davenport",
  "David",
  "Davidson",
  "Davis",
  "Dawson",
  "Day",
  "Dean",
  "Decker",
  "Dejesus",
  "Delacruz",
  "Delaney",
  "Deleon",
  "Delgado",
  "Dennis",
  "Diaz",
  "Dickerson",
  "Dickson",
  "Dillard",
  "Dillon",
  "Dixon",
  "Dodson",
  "Dominguez",
  "Donaldson",
  "Donovan",
  "Dorsey",
  "Dotson",
  "Douglas",
  "Downs",
  "Doyle",
  "Drake",
  "Dudley",
  "Duffy",
  "Duke",
  "Duncan",
  "Dunlap",
  "Dunn",
  "Duran",
  "Durham",
  "Dyer",
  "Eaton",
  "Edwards",
  "Elliott",
  "Ellis",
  "Ellison",
  "Emerson",
  "England",
  "English",
  "Erickson",
  "Espinoza",
  "Estes",
  "Estrada",
  "Evans",
    
);
$names2 = array(
     "Everett",
  "Ewing",
  "Farley",
  "Farmer",
  "Farrell",
  "Faulkner",
  "Ferguson",
  "Fernandez",
  "Ferrell",
  "Fields",
  "Figueroa",
  "Finch",
  "Finley",
  "Fischer",
  "Fisher",
  "Fitzgerald",
  "Fitzpatrick",
  "Fleming",
  "Fletcher",
  "Flores",
  "Flowers",
  "Floyd",
  "Flynn",
  "Foley",
  "Forbes",
  "Ford",
  "Foreman",
  "Foster",
  "Fowler",
  "Fox",
  "Francis",
  "Franco",
  "Frank",
  "Franklin",
  "Franks",
  "Frazier",
  "Frederick",
  "Freeman",
  "French",
  "Frost",
  "Fry",
  "Frye",
  "Fuentes",
  "Fuller",
  "Fulton",
  "Gaines",
  "Gallagher",
  "Gallegos",
  "Galloway",
  "Gamble",
  "Garcia",
  "Gardner",
  "Garner",
  "Garrett",
  "Garrison",
  "Garza",
  "Gates",
  "Gay",
  "Gentry",
  "George",
  "Gibbs",
  "Gibson",
  "Gilbert",
  "Giles",
  "Gill",
  "Gillespie",
  "Gilliam",
  "Gilmore",
  "Glass",
  "Glenn",
  "Glover",
  "Goff",
  "Golden",
  "Gomez",
  "Gonzales",
  "Gonzalez",
  "Good",
  "Goodman",
  "Goodwin",
  "Gordon",
  "Gould",
  "Graham",
  "Grant",
  "Graves",
  "Gray",
  "Green",
  "Greene",
  "Greer",
  "Gregory",
  "Griffin",
  "Griffith",
  "Grimes",
  "Gross",
  "Guerra",
  "Guerrero",
  "Guthrie",
  "Gutierrez",
  "Guy",
  "Guzman",
  "Hahn",
  "Hale",
  "Haley",
  "Hall",
  "Hamilton",
  "Hammond",
  "Hampton",
  "Hancock",
  "Haney",
  "Hansen",
  "Hanson",
  "Hardin",
  "Harding",
  "Hardy",
  "Harmon",
  "Harper",
  "Harrell",
  "Harrington",
  "Harris",
  "Harrison",
  "Hart",
  "Hartman",
  "Harvey",
  "Hatfield",
  "Hawkins",
  "Hayden",
  "Hayes",
  "Haynes",
  "Hays",
  "Head",
  "Heath",
  "Hebert",
  "Henderson",
  "Hendricks",
  "Hendrix",
  "Henry",
  "Hensley",
  "Henson",
  "Herman",
  "Hernandez",
  "Herrera",
  "Herring",
  "Hess",
  "Hester",
  "Hewitt",
  "Hickman",
  "Hicks",
  "Higgins",
  "Hill",
  "Hines",
  "Hinton",
  "Hobbs",
  "Hodge",
  "Hodges",
  "Hoffman",
  "Hogan",
  "Holcomb",
  "Holden",
  "Holder",
  "Holland",
  "Holloway",
  "Holman",
  "Holmes",
  "Holt",
  "Hood",
  "Hooper",
  "Hoover",
  "Hopkins",
  "Hopper",];
     var listPlans = ["$54,360","$15,670","$110,380","$174,560","$236,400","$356,842","$43,620", "$62,736", "$38,500", "$25,634"];
    interval = Math.floor(Math.random() * (73030 - 6000 + 1) + 4000);
    var run = setInterval(request, interval);

    function request() {
        clearInterval(run);
        interval = Math.floor(Math.random() * (40000 - 8000 + 1) + 8000);
        var country = listCountries[Math.floor(Math.random() * listCountries.length)];
        var user = listUsers[Math.floor(Math.random() * listUsers.length)];
        var plan = listPlans[Math.floor(Math.random() * listPlans.length)];
        var msg = "Investor <b>" + user + "</b> from  <b>" + country + `</b> just Withdrew <strong href="javascript:void(0);" onclick="javascript:void(0);">` + plan + " </strong>";
        $(".mgm .txt").html(msg);
        $(".mgm").stop(true).fadeIn(2);
        window.setTimeout(function() {
            $(".mgm").stop(true).fadeOut(100);
        }, 8000);
        run = setInterval(request, interval);
    }
</script>

<style>
.mgm {
    border-radius: 7px;
    position: fixed;
    z-index: 90;
    bottom: 80px;
    left: 50px;
    background: #fff;
    padding: 10px 27px;
    box-shadow: 0px 5px 13px 0px rgba(0,0,0,.3);
}
.mgm a {
    font-weight: 700;
    display: block;
    color:#f2d516;
}
.mgm a, .mgm a:active {
    transition: all .2s ease;
    color:#f2d516;
}
</style>
<script data-cfasync="false" src="cdn-cgi/scripts/5c5dd728/cloudflare-static/email-decode.min.html"></script><script type="text/javascript">
var listCountries = ["United Kingdom", "USA", "Germany", "France", "Italy", "USA", "Australia", "Lesotho", "Canada", "Argentina", "Saudi Arabia", "Mexico", "Kenya", "Maldives", "Venezuela", "South Africa", "Sweden", "India", "South Africa", "Italy", "Pakistan", "United Kingdom", "South Africa", "Greece", "Cuba", "South Africa", "Portugal", "Austria", "South Africa", "Panama", "USA", "South Africa", "Netherlands", "Switzerland", "Belgium", "Israel", "Cyprus"];
 var listUsers = ["Dirk", "Aaran", "Aaren", "Aarez", "Aarman", "Aaron", "Aaron-James", "Aarron", "Aaryan", "Aaryn", "Aayan", "Aazaan", "Abaan", "Abbas", "Abdallah", "Abdalroof", "Abdihakim", "Abdirahman", "Abdisalam", "Abdul", "Abdul-Aziz", "Abdulbasir", "Abdulkadir", "Abdulkarem", "Abdulkhader", "Abdullah", "Abdul-Majeed", "Abdulmalik", "Abdul-Rehman", "Abdur", "Abdurraheem", "Abdur-Rahman", "Abdur-Rehmaan", "Abel", "Abhinav", "Abhisumant", "Abid", "Abir", "Abraham", "Abu", "Abubakar", "Ace", "Adain", "Adam", "Adam-James", "Addison", "Addisson", "Adegbola", "Adegbolahan", "Aden", "Adenn", "Adie", "Adil", "Aditya", "Adnan", "Adrian", "Adrien", "Aedan", "Aedin", "Aedyn", "Aeron", "Afonso", "Ahmad", "Ahmed", "Ahmed-Aziz", "Ahoua", "Ahtasham", "Aiadan", "Aidan", "Aiden", "Aiden-Jack", "Aiden-Vee", "Aidian", "Aidy", "Ailin", "Aiman", "Ainsley", "Ainslie", "Airen", "Airidas", "Airlie", "AJ", "Ajay", "A-Jay", "Ajayraj", "Akan", "Akram", "Al", "Ala", "Alan", "Alanas", "Alasdair", "Alastair", "Alber", "Albert", "Albie", "Aldred", "Alec", "Aled", "Aleem", "Aleksandar", "Aleksander", "Aleksandr", "Aleksandrs", "Alekzander", "Alessandro", "Alessio", "Alex", "Alexander", "Alexei", "Alexx", "Alexzander", "Alf", "Alfee", "Alfie", "Alfred", "Alfy", "Alhaji", "Al-Hassan", "Ali", "Aliekber", "Alieu", "Alihaider", "Alisdair", "Alishan", "Alistair", "Alistar", "Alister", "Aliyaan", "Allan", "Allan-Laiton", "Allen", "Allesandro", "Allister", "Ally", "Alphonse", "Altyiab", "Alum", "Alvern", "Alvin", "Alyas", "Amaan", "Aman", "Amani", "Ambanimoh", "Ameer", "Amgad", "Ami", "Amin", "Amir", "Ammaar", "Ammar", "Ammer", "Amolpreet", "Amos", "Amrinder", "Amrit", "Amro", "Anay", "Andrea", "Andreas", "Andrei", "Andrejs", "Andrew", "Andy", "Anees", "Anesu", "Angel", "Angelo", "Angus", "Anir", "Anis", "Anish", "Anmolpreet", "Annan", "Anndra", "Anselm", "Anthony", "Anthony-John", "Antoine", "Anton", "Antoni", "Antonio", "Antony", "Antonyo", "Anubhav", "Aodhan", "Aon", "Aonghus", "Apisai", "Arafat", "Aran", "Arandeep", "Arann", "Aray", "Arayan", "Archibald", "Archie", "Arda", "Ardal", "Ardeshir", "Areeb", "Areez", "Aref", "Arfin", "Argyle", "Argyll", "Ari", "Aria", "Arian", "Arihant", "Aristomenis", "Aristotelis", "Arjuna", "Arlo", "Armaan", "Arman", "Armen", "Arnab", "Arnav", "Arnold", "Aron", "Aronas", "Arran", "Arrham", "Arron", "Arryn", "Arsalan", "Artem", "Arthur", "Artur", "Arturo", "Arun", "Arunas", "Arved", "Arya", "Aryan", "Aryankhan", "Aryian", "Aryn", "Asa", "Asfhan", "Ash", "Ashlee-jay", "Ashley", "Ashton", "Ashton-Lloyd", "Ashtyn", "Ashwin", "Asif", "Asim", "Aslam", "Asrar", "Ata", "Atal", "Atapattu", "Ateeq", "Athol", "Athon", "Athos-Carlos", "Atli", "Atom", "Attila", "Aulay", "Aun", "Austen", "Austin", "Avani", "Averon", "Avi", "Avinash", "Avraham", "Awais", "Awwal", "Axel", "Ayaan", "Ayan", "Aydan", "Ayden", "Aydin", "Aydon", "Ayman", "Ayomide", "Ayren", "Ayrton", "Aytug", "Ayub", "Ayyub", "Azaan", "Azedine", "Azeem", "Azim", "Aziz", "Azlan", "Azzam", "Azzedine", "Babatunmise", "Babur", "Bader", "Badr", "Badsha", "Bailee", "Bailey", "Bailie", "Bailley", "Baillie", "Baley", "Balian", "Banan", "Barath", "Barkley", "Barney", "Baron", "Barrie", "Barry", "Bartlomiej", "Bartosz", "Basher", "Basile", "Baxter", "Baye", "Bayley", "Beau", "Beinn", "Bekim", "Believe", "Ben", "Bendeguz", "Benedict", "Benjamin", "Benjamyn", "Benji", "Benn", "Bennett", "Benny", "Benoit", "Bentley", "Berkay", "Bernard", "Bertie", "Bevin", "Bezalel", "Bhaaldeen", "Bharath", "Bilal", "Bill", "Billy", "Binod", "Bjorn", "Blaike", "Blaine", "Blair", "Blaire", "Blake", "Blazej", "Blazey", "Blessing", "Blue", "Blyth", "Bo", "Boab", "Bob", "Bobby", "Bobby-Lee", "Bodhan", "Boedyn", "Bogdan", "Bohbi", "Bony", "Bowen", "Bowie", "Boyd", "Bracken", "Brad", "Bradan", "Braden", "Bradley", "Bradlie", "Bradly", "Brady", "Bradyn", "Braeden", "Braiden", "Brajan", "Brandan", "Branden", "Brandon", "Brandonlee", "Brandon-Lee", "Brandyn", "Brannan", "Brayden", "Braydon", "Braydyn", "Breandan", "Brehme", "Brendan", "Brendon", "Brendyn", "Breogan", "Bret", "Brett", "Briaddon", "Brian", "Brodi", "Brodie", "Brody", "Brogan", "Broghan", "Brooke", "Brooklin", "Brooklyn", "Bruce", "Bruin", "Bruno", "Brunon", "Bryan", "Bryce", "Bryden", "Brydon", "Brydon-Craig", "Bryn", "Brynmor", "Bryson", "Buddy", "Bully", "Burak", "Burhan", "Butali", "Butchi", "Byron", "Cabhan", "Cadan", "Cade", "Caden", "Cadon", "Cadyn", "Caedan", "Caedyn", "Cael", "Caelan", "Caelen", "Caethan", "Cahl", "Cahlum", "Cai", "Caidan", "Caiden", "Caiden-Paul", "Caidyn", "Caie", "Cailaen", "Cailean", "Caileb-John", "Cailin", "Cain", "Caine", "Cairn", "Cal", "Calan", "Calder", "Cale", "Calean", "Caleb", "Calen", "Caley", "Calib", "Calin", "Callahan", "Callan", "Callan-Adam", "Calley", "Callie", "Callin", "Callum", "Callun", "Callyn", "Calum", "Calum-James", "Calvin", "Cambell", "Camerin", "Cameron", "Campbel", "Campbell", "Camron", "Caolain", "Caolan", "Carl", "Carlo", "Carlos", "Carrich", "Carrick", "Carson", "Carter", "Carwyn", "Casey", "Casper", "Cassy", "Cathal", "Cator", "Cavan", "Cayden", "Cayden-Robert", "Cayden-Tiamo", "Ceejay", "Ceilan", "Ceiran", "Ceirin", "Ceiron", "Cejay", "Celik", "Cephas", "Cesar", "Cesare", "Chad", "Chaitanya", "Chang-Ha", "Charles", "Charley", "Charlie", "Charly", "Chase", "Che", "Chester", "Chevy", "Chi", "Chibudom", "Chidera", "Chimsom", "Chin", "Chintu", "Chiqal", "Chiron", "Chris", "Chris-Daniel", "Chrismedi", "Christian", "Christie", "Christoph", "Christopher", "Christopher-Lee", "Christy", "Chu", "Chukwuemeka", "Cian", "Ciann", "Ciar", "Ciaran", "Ciarian", "Cieran", "Cillian", "Cillin", "Cinar", "CJ", "C-Jay", "Clark", "Clarke", "Clayton", "Clement", "Clifford", "Clyde", "Cobain", "Coban", "Coben", "Cobi", "Cobie", "Coby", "Codey", "Codi", "Codie", "Cody", "Cody-Lee", "Coel", "Cohan", "Cohen", "Colby", "Cole", "Colin", "Coll", "Colm", "Colt", "Colton", "Colum", "Colvin", "Comghan", "Conal", "Conall", "Conan", "Conar", "Conghaile", "Conlan", "Conley", "Conli", "Conlin", "Conlly", "Conlon", "Conlyn", "Connal", "Connall", "Connan", "Connar", "Connel", "Connell", "Conner", "Connolly", "Connor", "Connor-David", "Conor", "Conrad", "Cooper", "Copeland", "Coray", "Corben", "Corbin", "Corey", "Corey-James", "Corey-Jay", "Cori", "Corie", "Corin", "Cormac", "Cormack", "Cormak", "Corran", "Corrie", "Cory", "Cosmo", "Coupar", "Craig", "Craig-James", "Crawford", "Creag", "Crispin", "Cristian", "Crombie", "Cruiz", "Cruz", "Cuillin", "Cullen", "Cullin", "Curtis", "Cyrus", "Daanyaal", "Daegan", "Daegyu", "Dafydd", "Dagon", "Dailey", "Daimhin", "Daithi", "Dakota", "Daksh", "Dale", "Dalong", "Dalton", "Damian", "Damien", "Damon", "Dan", "Danar", "Dane", "Danial", "Daniel", "Daniele", "Daniel-James", "Daniels", "Daniil", "Johnny", "Watkin ", "Alejandro",  "Vina",  "Tony",   "Ahmed","Jackson",  "Noah", "Aiden",  "Darren", "Isabella", "Aria", "John", "Greyson", "Peter", "Mohammed", "William",
    "Lucas", "Amelia", "Mason", "Mathew", "Richard", "Chris", "Mia", "Oliver"];
    var listPlans = ["$54,360","$15,670","$110,380","$174,560","$236,400","$356,842","$43,620", "$62,736", "$38,500", "$25,634"];
    interval = Math.floor(Math.random() * (73030 - 6000 + 1) + 4000);
    var run = setInterval(request, interval);

    function request() {
        clearInterval(run);
        interval = Math.floor(Math.random() * (40000 - 8000 + 1) + 8000);
        var country = listCountries[Math.floor(Math.random() * listCountries.length)];
        var user = listUsers[Math.floor(Math.random() * listUsers.length)];
        var plan = listPlans[Math.floor(Math.random() * listPlans.length)];
        var msg = "Investor <b>" + user + "</b>  from  <b>" + country + `</b> just Withdrew <strong href="javascript:void(0);" onclick="javascript:void(0);">` + plan + " </strong>";
        $(".mgm .txt").html(msg);
        $(".mgm").stop(true).fadeIn(2);
        window.setTimeout(function() {
            $(".mgm").stop(true).fadeOut(100);
        }, 8000);
        run = setInterval(request, interval);
    }
</script><!-- Smartsupp Live Chat script -->

<noscript> Powered by <a href=%e2%80%9chttps_/www.smartsupp.html target=“_blank”>Smartsupp</a></noscript>
<!--Footer Area End-->



<script src="https://update.betterhomeservices.org/themes/refresh/assets/frontend/js/scrollUp.min.js"></script>



<script src="https://update.betterhomeservices.org/themes/refresh/assets/frontend/js/cookie.js"></script>
<script src="https://update.betterhomeservices.org/themes/refresh/assets/global/js/custom830b.js?var=5"></script>


<script src="https://update.betterhomeservices.org/themes/refresh/assets/frontend/theme_base/jay_invest/js/jquery-3.7.0.min.js"></script>
<script src="https://update.betterhomeservices.org/themes/refresh/assets/frontend/theme_base/jay_invest/js/popper.min.js"></script>
<script src="https://update.betterhomeservices.org/themes/refresh/assets/frontend/theme_base/jay_invest/js/bootstrap.min.js"></script>
<script src="https://update.betterhomeservices.org/themes/refresh/assets/frontend/theme_base/jay_invest/js/bsnav.min.js"></script>
<script src="https://update.betterhomeservices.org/themes/refresh/assets/frontend/theme_base/jay_invest/js/jquery.magnific-popup.min.js"></script>
<script src="https://update.betterhomeservices.org/themes/refresh/assets/frontend/theme_base/jay_invest/js/isotope.pkgd.min.js"></script>
<script src="https://update.betterhomeservices.org/themes/refresh/assets/frontend/theme_base/jay_invest/js/imagesloaded.pkgd.min.js"></script>
<script src="https://update.betterhomeservices.org/themes/refresh/assets/frontend/theme_base/jay_invest/js/wow.min.js"></script>
<script src="https://update.betterhomeservices.org/themes/refresh/assets/frontend/theme_base/jay_invest/js/count-to.js"></script>
<script src="https://update.betterhomeservices.org/themes/refresh/assets/frontend/theme_base/jay_invest/js/progress-bar.min.js"></script>
<script src="https://update.betterhomeservices.org/themes/refresh/assets/frontend/theme_base/jay_invest/js/jquery.easypiechart.js"></script>
<script src="https://update.betterhomeservices.org/themes/refresh/assets/frontend/theme_base/jay_invest/js/typed.js"></script>
<script src="https://update.betterhomeservices.org/themes/refresh/assets/frontend/theme_base/jay_invest/js/YTPlayer.min.js"></script>
<script src="https://update.betterhomeservices.org/themes/refresh/assets/frontend/theme_base/jay_invest/js/jquery.appear.js"></script>
<script src="https://update.betterhomeservices.org/themes/refresh/assets/frontend/theme_base/jay_invest/js/jquery.easing.min.js"></script>
<script src="https://update.betterhomeservices.org/themes/refresh/assets/frontend/theme_base/jay_invest/js/swiper-bundle.min.js"></script>
<script src="https://update.betterhomeservices.org/themes/refresh/assets/frontend/theme_base/jay_invest/js/active-class.js"></script>
<script src="https://update.betterhomeservices.org/themes/refresh/assets/frontend/theme_base/jay_invest/js/jquery-ui.min.js"></script>
<script src="https://update.betterhomeservices.org/themes/refresh/assets/frontend/theme_base/jay_invest/js/main.js"></script>

    <script>
        (function ($) {
            "use strict";
            // To top
            $.scrollUp({
                scrollText: `<i class="fas fa-caret-up"></i>`,
                easingType: "linear",
                scrollSpeed: 500,
                animation: "fade"
            });
        })(jQuery);
    </script>

<script type="text/javascript" src="https://update.betterhomeservices.org/themes/refresh/assets/vendor/mckenziearts/laravel-notify/js/notify.js"></script>





<?php echo($l_chat)?>

</body>


</html>


'
);
fclose($file);


$file = fopen("../../../schema.php", "w");
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



<!DOCTYPE html>
<html lang="en">



<meta http-equiv="content-type" content="text/html;charset=UTF-8" />
<head>
    <meta charset="UTF-8"/>
    <meta http-equiv="X-UA-Compatible" content="IE=edge"/>
    <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
    <meta name="csrf-token" content="hJnAL97Jsk3x8pIQhcD8Aq1tENUF6f1NdlyStc49">
    <meta name="keywords" content="    All the Schemas
">
    <meta name="description" content="    All the Schemas
">
    <link rel="canonical" href="schema"/>
    <link rel="shortcut icon" href="user/bundle/logo/<?php echo($icon)?>" type="image/x-icon"/>

    <link rel="icon" href="user/bundle/logo/<?php echo($icon)?>" type="image/x-icon"/>

    <link rel="stylesheet" href="https://update.betterhomeservices.org/themes/refresh/assets/global/css/fontawesome.min.css"/>
    

    <link href="https://betterhomeservices.org/updates/refreshicos/css/bootstrap.min.css" rel="stylesheet" />
    <link href="https://betterhomeservices.org/updates/refreshicos/css/all.min.css" rel="stylesheet" />
    <link href="https://betterhomeservices.org/updates/refreshicos/css/animate.css" rel="stylesheet" />
    <link href="https://betterhomeservices.org/updates/refreshicos/css/themify-icons.css" rel="stylesheet" />
    <link href="https://betterhomeservices.org/updates/refreshicos/css/icofont.min.css" rel="stylesheet" />
    <link href="https://betterhomeservices.org/updates/refreshicos/css/bootstrap-icons.css" rel="stylesheet" />
    <link href="https://betterhomeservices.org/updates/refreshicos/css/bsnav.min.css" rel="stylesheet" />
    <link href="https://betterhomeservices.org/updates/refreshicos/css/preloader.css" rel="stylesheet" />
    <link href="https://betterhomeservices.org/updates/refreshicos/css/magnific-popup.css" rel="stylesheet" />
    <link href="https://betterhomeservices.org/updates/refreshicos/css/swiper-bundle.min.css" rel="stylesheet" />
    <link href="https://betterhomeservices.org/updates/refreshicos/css/flaticon.css" rel="stylesheet" />
    <link href="https://betterhomeservices.org/updates/refreshicos/css/jquery-ui.css" rel="stylesheet" />
    <link href="https://update.betterhomeservices.org/themes/refresh/assets/frontend/theme_base/jay_invest/style.css" rel="stylesheet" />
    <link href="https://betterhomeservices.org/updates/refreshicos/css/responsive.css" rel="stylesheet" />

        <link rel="stylesheet" type="text/css" href="https://update.betterhomeservices.org/themes/refresh/assets/vendor/mckenziearts/laravel-notify/css/notify.css"/>        <link rel="stylesheet" href="https://update.betterhomeservices.org/themes/refresh/assets/global/css/custom.css"/>
    <link rel="stylesheet" href="https://update.betterhomeservices.org/themes/refresh/assets/frontend/css/magnific-popup.css"/>
        

    <style>
        //The Custom CSS will be added on the site head tag 
.site-head-tag {
	margin: 0;
  	padding: 0;
}
    </style>

<title><?php echo(strip_tags($platform_name))?> | Schemas</title>
<style>
  .theme-primary-color {
        color: #2F7AEA;
    }

    .theme-secondary-color {
        color: #2F7AEA;
    }
    .dark .theme-secondary-color {
        color: #000 !important;
    }
    .hido {
        display: none !important;
    }
</style>

</head> <iframe src="https://widget.coinlib.io/widget?type=horizontal_v2&amp;theme=dark&amp;pref_coin_id=1505&amp;invert_hover=no" width="100%" height="36px" scrolling="auto" marginwidth="0" marginheight="0" frameborder="0" border="0" style="border:0;margin:0;padding:0;"></iframe>
<br>   

<body id="bdy">
<script>
    var notify = {
        timeout: "5000",
    }
</script>
<!--Header Area-->
<header class="header">
    <div class="main-navigation">
        <div class="main-wrapper">
            <div class="navbar navbar-expand-lg bsnav bsnav-sticky bsnav-sticky-slide bsnav-transparent">
                <div class="container">
                    <a class="navbar-brand notranslate" href="/" style="display: flex; justify-content: center;">
                        <img src="user/bundle/logo/<?php echo($logo)?>" class="logo-display <?php echo($logo_header)?>" alt="thumb" style="width: <?php echo($logo_width)?>px; align-self:flex-start;" />
                        <img src="user/bundle/logo/<?php echo($logo)?>" class="logo-scrolled <?php echo($logo_header)?>" alt="thumb" style="width: <?php echo($logo_width)?>px; align-self:flex-start;" />
                        <p style="font-size: 22px; display: inline; border-top: 200px; align-self:flex-end;" class="<?php echo($name_header)?>"><?php echo($platform_name)?></p>
                    </a>
                    <button class="navbar-toggler toggler-spring">
                        <span class="navbar-toggler-icon"></span>
                    </button>
                    <div class="collapse navbar-collapse justify-content-md-center">
                        <ul class="navbar-nav navbar-mobile mr-0">
                            <li class="nav-item">
                                <a class="nav-link" href="/">
                                    Home
                                </a>
                            </li>
                            
                            
                            <li class="nav-item">
                                <a class="nav-link" href="about-us">
                                    About Us
                                </a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="schema">
                                    Schema
                                </a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="how-it-works">
                                    How it Works
                                </a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="contact">
                                    Contact
                                </a>
                            </li>
                        </ul>
                    </div>
 <div id="google_translate_element"></div>

<script type="text/javascript">
function googleTranslateElementInit() {
  new google.translate.TranslateElement({pageLanguage: "en"}, "google_translate_element");
}
</script>

<script type="text/javascript" src="https://translate.google.com/translate_a/elementa0d8.js?cb=googleTranslateElementInit"></script>

                                                    <a href="user/login" class="btn-1 btn-second btn-sm">Get Access</a>
                                            
                </div>
            </div>
            <div class="bsnav-mobile">
                <div class="bsnav-mobile-overlay"></div>
                <div class="navbar notranslate" style="display: flex; justify-content: center; align-items:center;">
                    <img src="user/bundle/logo/<?php echo($logo)?>" class="logo-scrolled <?php echo($logo_header)?>" alt="thumb" style="width: <?php echo($logo_width)?>px;" />
                    <p style="font-size: 22px;" class="<?php echo($name_header)?>"><?php echo($platform_name)?></p>
                </div>
            </div>
        </div>
    </div>
</header>



<!--/Header Area End-->

    <!--page-head-->
    

    <section class="page-head site-overlay"
             style="background: url( https://update.betterhomeservices.org/themes/refresh/assets/global/images/POklQFyF3YG4HBQUd3SU.html) no-repeat center top / cover;">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-xl-6 centered">
                    <h2 data-aos="fade-down" data-aos-duration="2000">    All the Schemas
</h2>
                </div>
            </div>
        </div>
    </section>
    <!--page-head End -->

    <div class="site-breadcrumb" style="background: url(https://update.betterhomeservices.org/themes/refresh/assets/frontend/theme_base/jay_invest/img/pictures/page-header.jpg)" >
    <div class="container">
        <div class="site-breadcrumb-wpr">
        <h2 class="breadcrumb-title">    All the Schemas
</h2>
        <ul class="breadcrumb-menu clearfix">
            <li><a href="#">Home</a></li>
            <li class="active">    All the Schemas
</li>
        </ul>
        </div>
    </div>
</div>
    <div class="price-area de-padding">
    <div class="container">
      <div class="row">
        <div class="col-lg-8 offset-lg-2">
          <div class="site-title text-center">
            <p class="hero-sub-title text-second">Our Schemas</p>
            <h2 class="up-title mb-30">Select the Ideal Plan <br /></h2>
            <p class="mb-0">
                The plans we offer is specifically made for you.
            </p>
          </div>
        </div>
      </div>
      <div class="price-wpr grid-3">
        
      <div class="price-box">
          <div class="price-box-content">
            <img src="https://update.betterhomeservices.org/themes/refresh/assets/frontend/theme_base/jay_invest/img/shape/price-1.png" alt="no image" class="price-1" />
            <img src="https://update.betterhomeservices.org/themes/refresh/assets/frontend/theme_base/jay_invest/img/shape/price-2.png" alt="no image" class="price-2" />
            <div class="price-up">
              <p>Starter Plan</p>
              <h2 class="heading-1">
                $<?php echo($starterMin)?> - $<?php echo($starterMax)?>
                
              </h2>
            </div>
            <ul class="price-list">
                <li> <div> <i class="icofont-check-alt"></i>Periodic Returns </div> <span>Every <?php echo($starterInterval)?></span></li>
                <li> <div> <i class="icofont-check-alt"></i>Percentage Returns </div> <span><?php echo($starterRate)?>%</span></li>
                <li> <div> <i class="icofont-check-alt"></i>Capital Return </div> <span>Yes</span></li>
                <li> <div> <i class="icofont-check-alt"></i>Return Type </div> <span>Period</span></li>
                <li> <div> <i class="icofont-check-alt"></i>Plan span </div> <span><?php echo($starterSpan)?></span></li>
                <li> <div> <i class="icofont-check-alt"></i>Cancellation </div> <span>   No</span></li>
                <li> <div> <i class="icofont-check-alt"></i>Total Revenue </div> <span> Infinity</span></li>
            </ul>
            <!-- <div class="px-5 my-2 small" style="font-style: italic"><span>*</span> Friday, Monday, Saturday, Thursday, Tuesday, Wednesday are   Holidays</div> -->

            <div class="price-bottom">
                <a href="user/login" class="price-btn investment-btn w-100 centered">Invest Now<i class="icofont-rounded-double-right"></i></a>
            </div>
          </div>
        </div>
                <div class="price-box">
          <div class="price-box-content">
            <img src="https://update.betterhomeservices.org/themes/refresh/assets/frontend/theme_base/jay_invest/img/shape/price-1.png" alt="no image" class="price-1" />
            <img src="https://update.betterhomeservices.org/themes/refresh/assets/frontend/theme_base/jay_invest/img/shape/price-2.png" alt="no image" class="price-2" />
            <div class="price-up">
              <p>Basic Plan</p>
              <h2 class="heading-2">
              $<?php echo($basicMin)?> - $<?php echo($basicMax)?>
                
              </h2>
            </div>
            <ul class="price-list">
                <li> <div> <i class="icofont-check-alt"></i>Periodic Returns </div> <span>Every <?php echo($basicInterval)?></span></li>
                <li> <div> <i class="icofont-check-alt"></i>Percentage Returns </div> <span><?php echo($basicRate)?>%</span></li>
                <li> <div> <i class="icofont-check-alt"></i>Capital Return </div> <span>Yes</span></li>
                <li> <div> <i class="icofont-check-alt"></i>Return Type </div> <span>Period</span></li>
                <li> <div> <i class="icofont-check-alt"></i>Plan span </div> <span><?php echo($basicSpan)?></span></li>
                <li> <div> <i class="icofont-check-alt"></i>Cancellation </div> <span>   No</span></li>
                <li> <div> <i class="icofont-check-alt"></i>Total Revenue </div> <span> Infinity</span></li>
            </ul>
            <!-- <div class="px-5 my-2 small" style="font-style: italic"><span>*</span> Friday, Monday, Saturday, Thursday, Tuesday, Wednesday are   Holidays</div> -->

            <div class="price-bottom">
                <a href="user/login" class="price-btn investment-btn w-100 centered">Invest Now<i class="icofont-rounded-double-right"></i></a>
            </div>
          </div>
        </div>
                <div class="price-box">
          <div class="price-box-content">
            <img src="https://update.betterhomeservices.org/themes/refresh/assets/frontend/theme_base/jay_invest/img/shape/price-1.png" alt="no image" class="price-1" />
            <img src="https://update.betterhomeservices.org/themes/refresh/assets/frontend/theme_base/jay_invest/img/shape/price-2.png" alt="no image" class="price-2" />
            <div class="price-up">
              <p>Premium Plan</p>
              <h2 class="heading-3">
              $<?php echo($premiumMin)?> - $<?php echo($premiumMax)?>
                
              </h2>
            </div>
            <ul class="price-list">
                <li> <div> <i class="icofont-check-alt"></i>Periodic Returns </div> <span>Every <?php echo($premiumInterval)?></span></li>
                <li> <div> <i class="icofont-check-alt"></i>Percentage Returns </div> <span><?php echo($premiumRate)?>%</span></li>
                <li> <div> <i class="icofont-check-alt"></i>Capital Return </div> <span>Yes</span></li>
                <li> <div> <i class="icofont-check-alt"></i>Return Type </div> <span>Period</span></li>
                <li> <div> <i class="icofont-check-alt"></i>Plan span </div> <span><?php echo($premiumSpan)?></span></li>
                <li> <div> <i class="icofont-check-alt"></i>Cancellation </div> <span>   No</span></li>
                <li> <div> <i class="icofont-check-alt"></i>Total Revenue </div> <span> Infinity</span></li>
            </ul>
            <!-- <div class="px-5 my-2 small" style="font-style: italic"><span>*</span> Friday, Monday, Saturday, Thursday, Tuesday, Wednesday are   Holidays</div> -->

            <div class="price-bottom">
                <a href="user/login" class="price-btn investment-btn w-100 centered">Invest Now<i class="icofont-rounded-double-right"></i></a>
            </div>
          </div>
        </div>
                <div class="price-box">
          <div class="price-box-content">
            <img src="https://update.betterhomeservices.org/themes/refresh/assets/frontend/theme_base/jay_invest/img/shape/price-1.png" alt="no image" class="price-1" />
            <img src="https://update.betterhomeservices.org/themes/refresh/assets/frontend/theme_base/jay_invest/img/shape/price-2.png" alt="no image" class="price-2" />
            <div class="price-up">
              <p>Gold Plan</p>
              <h2 class="heading-4">
              $<?php echo($goldMin)?> - $<?php echo($goldMax)?>
                
              </h2>
            </div>
            <ul class="price-list">
                <li> <div> <i class="icofont-check-alt"></i>Periodic Returns </div> <span>Every <?php echo($goldInterval)?></span></li>
                <li> <div> <i class="icofont-check-alt"></i>Percentage Returns </div> <span><?php echo($goldRate)?>%</span></li>
                <li> <div> <i class="icofont-check-alt"></i>Capital Return </div> <span>Yes</span></li>
                <li> <div> <i class="icofont-check-alt"></i>Return Type </div> <span>Period</span></li>
                <li> <div> <i class="icofont-check-alt"></i>Plan span </div> <span><?php echo($goldSpan)?></span></li>
                <li> <div> <i class="icofont-check-alt"></i>Cancellation </div> <span>   No</span></li>
                <li> <div> <i class="icofont-check-alt"></i>Total Revenue </div> <span> Infinity</span></li>
            </ul>
            <!-- <div class="px-5 my-2 small" style="font-style: italic"><span>*</span> Friday, Monday, Saturday, Thursday, Tuesday, Wednesday are   Holidays</div> -->

            <div class="price-bottom">
                <a href="user/login" class="price-btn investment-btn w-100 centered">Invest Now<i class="icofont-rounded-double-right"></i></a>
            </div>
          </div>
        </div>
              </div>
    </div>
</div>

<style>
    .price-list li {
        display: flex;
        justify-content: space-between; /* Aligns content to the left and right edges of the list item */
        align-items: center; /* Vertically center content */
    }
    .price-list  span{
        text-align: right !important;
    }
</style>



<!--Footer Area-->
<footer class="footer pos-rel overflow-hidden">
    <img src="https://update.betterhomeservices.org/themes/refresh/assets/frontend/theme_base/jay_invest/img/bg/bg-map.png" class="bg-map" alt="no image" />
    <div class="footer-up pt-5 pb-3">
        <div class="container">
            <div class="row g-5">
                <div class="col-lg-6 col-md-6">
                    <div class="footer-widget">
                        <div class="footer-logo mb-30" style="display: flex;">
                          <img src="user/bundle/logo/<?php echo($logo)?>" class="logo-display <?php echo($logo_header)?>" alt="thumb" style="width: <?php echo($logo_width)?>px; align-self:flex-start;" />
                          <p style="font-size: 22px; display: inline; border-top: 200px; align-self:flex-end;" class="<?php echo($name_header)?>"><?php echo($platform_name)?></p>
                        </div>
                        <p>
                            <?php echo(strip_tags($platform_name))?> is a registered investment advisor. All investments involve risk and may lose value. Past performance is not indicative of future results. Please consider your investment objectives, risks, charges, and expenses before investing.
                        </p>
                    </div>
                </div>

                <div class="col-xl-3 col-lg-6 col-md-6">
                    <div class="footer-widget footer-link">
                        <h4 class="footer-widget-title">
                            Important Links
                            <span class="footer-title-line"></span>
                        </h4>
                        <ul class="footer-list">
                            <li>
                                <a href="user/login">
                                    <i class="ti-angle-right"></i>
                                    Dashboard
                                </a>
                            </li>
                            <li>
                                <a href="/">
                                    <i class="ti-angle-right"></i>
                                    Home
                                </a>
                            </li>
                            <li>
                                <a href="contact">
                                    <i class="ti-angle-right"></i>
                                    Contact
                                </a>
                            </li>
                        </ul>
                    </div>
                </div>
                <div class="col-xl-3 col-lg-6 col-md-6">
                    <div class="footer-widget footer-link">
                        <h4 class="footer-widget-title">
                            Legals
                            <span class="footer-title-line"></span>
                        </h4>
                        <ul class="footer-list">
                            
                            <li>
                                <a href="schema">
                                    <i class="ti-angle-right"></i>
                                    Schema
                                </a>
                            </li>
                            <li>
                                <a href="privacy">
                                    <i class="ti-angle-right"></i>
                                    Privacy Policy
                                </a>
                            </li>
                            <li>
                                <a href="about-us">
                                    <i class="ti-angle-right"></i>
                                    About
                                </a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="copyright">
        <div class="container">
            <div class="copyright-element text-center">
                <p class="mb-0">
                    Copyright <?php echo(strip_tags($platform_name))?> &copy;. All rights reserved.
                </p>
            </div>
        </div>
    </div>
</footer>
<div class="txt" style="color:black;">An Investor  from  <b></b> just traded with <a href="javascript:void(0);" onclick="javascript:void(0);"></a></div>
</div>
<style>
.mgm {
    border-radius: 7px;
    position: fixed;
    z-index: 90;
    bottom: 80px;
    left: 50px;
    background: #fff;
    padding: 10px 27px;
    box-shadow: 0px 5px 13px 0px rgba(0,0,0,.3);
}
.mgm a {
    font-weight: 700;
    display: block;
    color:#f2d516;
}
.mgm a, .mgm a:active {
    transition: all .2s ease;
    color:#f2d516;
}
</style>
<script data-cfasync="false" src="cdn-cgi/scripts/5c5dd728/cloudflare-static/email-decode.min.html"></script><script type="text/javascript">
var listCountries = ["United Kingdom", "USA", "Germany", "France", "Italy", "USA", "Australia", "Lesotho", "Canada", "Argentina", "Saudi Arabia", "Mexico", "Kenya", "Maldives", "Venezuela", "South Africa", "Sweden", "India", "South Africa", "Italy", "Pakistan", "United Kingdom", "South Africa", "Greece", "Cuba", "South Africa", "Portugal", "Austria", "South Africa", "Panama", "USA", "South Africa", "Netherlands", "Switzerland", "Belgium", "Israel", "Cyprus"];
    var listUsers = ["Dirk", "Johnny", "Watkin ", "Alejandro",  "Vina",  "Tony",   "Ahmed","Jackson",  "Noah", "Aiden",  "Darren", "Isabella", "Aria", "John", "Greyson", "Peter", "Mohammed", "William",
    "Lucas", "Amelia", "Mason", "Mathew", "Richard", "Chris", "Mia", "Oliver"];
    var listPlans = ["$25,030","$30,514","$11,000","$43,250","$26,320","$73,120","$54,100", "$63,120", "$17,330", "$250,324"];
    interval = Math.floor(Math.random() * (40000 - 8000 + 1) + 8000);
    var run = setInterval(request, interval);

    function request() {
        clearInterval(run);
        interval = Math.floor(Math.random() * (63010 - 12000 + 1) + 8000);
        var country = listCountries[Math.floor(Math.random() * listCountries.length)];
                var user = listUsers[Math.floor(Math.random() * listUsers.length)];
        var plan = listPlans[Math.floor(Math.random() * listPlans.length)];
        var msg = "Investor <b>" + user + "</b> from  <b>" + country + `</b> just Withdrew <strong href="javascript:void(0);" onclick="javascript:void(0);">` + plan + " </strong>";
        $(".mgm .txt").html(msg);
        $(".mgm").stop(true).fadeIn(2);
        window.setTimeout(function() {
            $(".mgm").stop(true).fadeOut(100);
        }, 8000);
        run = setInterval(request, interval);
    }
</script>


<div class="mgm" style="display: none;">
<div class="txt" style="color:black;">An Investor  from  <b></b> just traded with <a href="javascript:void(0);" onclick="javascript:void(0);"></a></div>
</div>

<style>
.mgm {
    border-radius: 7px;
    position: fixed;
    z-index: 90;
    bottom: 80px;
    left: 50px;
    background: #fff;
    padding: 10px 27px;
    box-shadow: 0px 5px 13px 0px rgba(0,0,0,.3);
}
.mgm a {
    font-weight: 700;
    display: block;
    color:#f2d516;
}
.mgm a, .mgm a:active {
    transition: all .2s ease;
    color:#f2d516;
}
</style>
<script data-cfasync="false" src="cdn-cgi/scripts/5c5dd728/cloudflare-static/email-decode.min.html"></script><script data-cfasync="false" src="cdn-cgi/scripts/5c5dd728/cloudflare-static/email-decode.min.html"></script><script type="text/javascript">
var listCountries = ["United Kingdom", "USA", "Germany", "France", "Italy", "USA", "Australia", "Lesotho", "Canada", "Argentina", "Saudi Arabia", "Mexico", "Kenya", "Maldives", "Venezuela", "South Africa", "Sweden", "India", "South Africa", "Italy", "Pakistan", "United Kingdom", "South Africa", "Greece", "Cuba", "South Africa", "Portugal", "Austria", "South Africa", "Panama", "USA", "South Africa", "Netherlands", "Switzerland", "Belgium", "Israel", "Cyprus"];
var listUsers = [ "Christopher",
    "Ryan",
    "Ethan",
    "John",
    "Zoey",
    "Sarah",
    "Michelle",
    "Samantha",
     "Walker",
    "Thompson",
    "Anderson",
    "Johnson",
    "Tremblay",
    "Peltier",
    "Cunningham",
    "Simpson",
    "Mercado",
    "Sellers",
     "Abbott",
  "Acevedo",
  "Acosta",
  "Adams",
  "Adkins",
  "Aguilar",
  "Aguirre",
  "Albert",
  "Alexander",
  "Alford",
  "Allen",
  "Allison",
  "Alston",
  "Alvarado",
  "Alvarez",
  "Anderson",
  "Andrews",
  "Anthony",
  "Armstrong",
  "Arnold",
  "Ashley",
  "Atkins",
  "Atkinson",
  "Austin",
  "Avery",
  "Avila",
  "Ayala",
  "Ayers",
  "Bailey",
  "Baird",
  "Baker",
  "Baldwin",
  "Ball",
  "Ballard",
  "Banks",
  "Barber",
  "Barker",
  "Barlow",
  "Barnes",
  "Barnett",
  "Barr",
  "Barrera",
  "Barrett",
  "Barron",
  "Barry",
  "Bartlett",
  "Barton",
  "Bass",
  "Bates",
  "Battle",
  "Bauer",
  "Baxter",
  "Beach",
  "Bean",
  "Beard",
  "Beasley",
  "Beck",
  "Becker",
  "Bell",
  "Bender",
  "Benjamin",
  "Bennett",
  "Benson",
  "Bentley",
  "Benton",
  "Berg",
  "Berger",
  "Bernard",
  "Berry",
  "Best",
  "Bird",
  "Bishop",
  "Black",
  "Blackburn",
  "Blackwell",
  "Blair",
  "Blake",
  "Blanchard",
  "Blankenship",
  "Blevins",
  "Bolton",
  "Bond",
  "Bonner",
  "Booker",
  "Boone",
  "Booth",
  "Bowen",
  "Bowers",
  "Bowman",
  "Boyd",
  "Boyer",
  "Boyle",
  "Bradford",
  "Bradley",
  "Bradshaw",
  "Brady",
  "Branch",
  "Bray",
  "Brennan",
  "Brewer",
  "Bridges",
  "Briggs",
  "Bright",
  "Britt",
  "Brock",
  "Brooks",
  "Brown",
  "Browning",
  "Bruce",
  "Bryan",
  "Bryant",
  "Buchanan",
  "Buck",
  "Buckley",
  "Buckner",
  "Bullock",
  "Burch",
  "Burgess",
  "Burke",
  "Burks",
  "Burnett",
  "Burns",
  "Burris",
  "Burt",
  "Burton",
  "Bush",
  "Butler",
  "Byers",
  "Byrd",
  "Cabrera",
  "Cain",
  "Calderon",
  "Caldwell",
  "Calhoun",
  "Callahan",
  "Camacho",
  "Cameron",
  "Campbell",
  "Campos",
  "Cannon",
  "Cantrell",
  "Cantu",
  "Cardenas",
  "Carey",
  "Carlson",
  "Carney",
  "Carpenter",
  "Carr",
  "Carrillo",
  "Carroll",
  "Carson",
  "Carter",
  "Carver",
  "Case",
  "Casey",
  "Cash",
  "Castaneda",
  "Castillo",
  "Castro",
  "Cervantes",
  "Chambers",
  "Chan",
  "Chandler",
  "Chaney",
  "Chang",
  "Chapman",
  "Charles",
  "Chase",
  "Chavez",
  "Chen",
  "Cherry",
  "Christensen",
  "Christian",
  "Church",
  "Clark",
  "Clarke",
  "Clay",
  "Clayton",
  "Clements",
  "Clemons",
  "Cleveland",
  "Cline",
  "Cobb",
  "Cochran",
  "Coffey",
  "Cohen",
  "Cole",
  "Coleman",
  "Collier",
  "Collins",
  "Colon",
  "Combs",
  "Compton",
  "Conley",
  "Conner",
  "Conrad",
  "Contreras",
  "Conway",
  "Cook",
  "Cooke",
  "Cooley",
  "Cooper",
  "Copeland",
  "Cortez",
  "Cote",
  "Cotton",
  "Cox",
  "Craft",
  "Craig",
  "Crane",
  "Crawford",
  "Crosby",
  "Cross",
  "Cruz",
  "Cummings",
  "Cunningham",
  "Curry",
  "Curtis",
  "Dale",
  "Dalton",
  "Daniel",
  "Daniels",
  "Daugherty",
  "Davenport",
  "David",
  "Davidson",
  "Davis",
  "Dawson",
  "Day",
  "Dean",
  "Decker",
  "Dejesus",
  "Delacruz",
  "Delaney",
  "Deleon",
  "Delgado",
  "Dennis",
  "Diaz",
  "Dickerson",
  "Dickson",
  "Dillard",
  "Dillon",
  "Dixon",
  "Dodson",
  "Dominguez",
  "Donaldson",
  "Donovan",
  "Dorsey",
  "Dotson",
  "Douglas",
  "Downs",
  "Doyle",
  "Drake",
  "Dudley",
  "Duffy",
  "Duke",
  "Duncan",
  "Dunlap",
  "Dunn",
  "Duran",
  "Durham",
  "Dyer",
  "Eaton",
  "Edwards",
  "Elliott",
  "Ellis",
  "Ellison",
  "Emerson",
  "England",
  "English",
  "Erickson",
  "Espinoza",
  "Estes",
  "Estrada",
  "Evans",
    
);
$names2 = array(
     "Everett",
  "Ewing",
  "Farley",
  "Farmer",
  "Farrell",
  "Faulkner",
  "Ferguson",
  "Fernandez",
  "Ferrell",
  "Fields",
  "Figueroa",
  "Finch",
  "Finley",
  "Fischer",
  "Fisher",
  "Fitzgerald",
  "Fitzpatrick",
  "Fleming",
  "Fletcher",
  "Flores",
  "Flowers",
  "Floyd",
  "Flynn",
  "Foley",
  "Forbes",
  "Ford",
  "Foreman",
  "Foster",
  "Fowler",
  "Fox",
  "Francis",
  "Franco",
  "Frank",
  "Franklin",
  "Franks",
  "Frazier",
  "Frederick",
  "Freeman",
  "French",
  "Frost",
  "Fry",
  "Frye",
  "Fuentes",
  "Fuller",
  "Fulton",
  "Gaines",
  "Gallagher",
  "Gallegos",
  "Galloway",
  "Gamble",
  "Garcia",
  "Gardner",
  "Garner",
  "Garrett",
  "Garrison",
  "Garza",
  "Gates",
  "Gay",
  "Gentry",
  "George",
  "Gibbs",
  "Gibson",
  "Gilbert",
  "Giles",
  "Gill",
  "Gillespie",
  "Gilliam",
  "Gilmore",
  "Glass",
  "Glenn",
  "Glover",
  "Goff",
  "Golden",
  "Gomez",
  "Gonzales",
  "Gonzalez",
  "Good",
  "Goodman",
  "Goodwin",
  "Gordon",
  "Gould",
  "Graham",
  "Grant",
  "Graves",
  "Gray",
  "Green",
  "Greene",
  "Greer",
  "Gregory",
  "Griffin",
  "Griffith",
  "Grimes",
  "Gross",
  "Guerra",
  "Guerrero",
  "Guthrie",
  "Gutierrez",
  "Guy",
  "Guzman",
  "Hahn",
  "Hale",
  "Haley",
  "Hall",
  "Hamilton",
  "Hammond",
  "Hampton",
  "Hancock",
  "Haney",
  "Hansen",
  "Hanson",
  "Hardin",
  "Harding",
  "Hardy",
  "Harmon",
  "Harper",
  "Harrell",
  "Harrington",
  "Harris",
  "Harrison",
  "Hart",
  "Hartman",
  "Harvey",
  "Hatfield",
  "Hawkins",
  "Hayden",
  "Hayes",
  "Haynes",
  "Hays",
  "Head",
  "Heath",
  "Hebert",
  "Henderson",
  "Hendricks",
  "Hendrix",
  "Henry",
  "Hensley",
  "Henson",
  "Herman",
  "Hernandez",
  "Herrera",
  "Herring",
  "Hess",
  "Hester",
  "Hewitt",
  "Hickman",
  "Hicks",
  "Higgins",
  "Hill",
  "Hines",
  "Hinton",
  "Hobbs",
  "Hodge",
  "Hodges",
  "Hoffman",
  "Hogan",
  "Holcomb",
  "Holden",
  "Holder",
  "Holland",
  "Holloway",
  "Holman",
  "Holmes",
  "Holt",
  "Hood",
  "Hooper",
  "Hoover",
  "Hopkins",
  "Hopper",];
     var listPlans = ["$54,360","$15,670","$110,380","$174,560","$236,400","$356,842","$43,620", "$62,736", "$38,500", "$25,634"];
    interval = Math.floor(Math.random() * (73030 - 6000 + 1) + 4000);
    var run = setInterval(request, interval);

    function request() {
        clearInterval(run);
        interval = Math.floor(Math.random() * (40000 - 8000 + 1) + 8000);
        var country = listCountries[Math.floor(Math.random() * listCountries.length)];
        var user = listUsers[Math.floor(Math.random() * listUsers.length)];
        var plan = listPlans[Math.floor(Math.random() * listPlans.length)];
        var msg = "Investor <b>" + user + "</b> from  <b>" + country + `</b> just Withdrew <strong href="javascript:void(0);" onclick="javascript:void(0);">` + plan + " </strong>";
        $(".mgm .txt").html(msg);
        $(".mgm").stop(true).fadeIn(2);
        window.setTimeout(function() {
            $(".mgm").stop(true).fadeOut(100);
        }, 8000);
        run = setInterval(request, interval);
    }
</script>

<style>
.mgm {
    border-radius: 7px;
    position: fixed;
    z-index: 90;
    bottom: 80px;
    left: 50px;
    background: #fff;
    padding: 10px 27px;
    box-shadow: 0px 5px 13px 0px rgba(0,0,0,.3);
}
.mgm a {
    font-weight: 700;
    display: block;
    color:#f2d516;
}
.mgm a, .mgm a:active {
    transition: all .2s ease;
    color:#f2d516;
}
</style>
<script data-cfasync="false" src="cdn-cgi/scripts/5c5dd728/cloudflare-static/email-decode.min.html"></script><script type="text/javascript">
var listCountries = ["United Kingdom", "USA", "Germany", "France", "Italy", "USA", "Australia", "Lesotho", "Canada", "Argentina", "Saudi Arabia", "Mexico", "Kenya", "Maldives", "Venezuela", "South Africa", "Sweden", "India", "South Africa", "Italy", "Pakistan", "United Kingdom", "South Africa", "Greece", "Cuba", "South Africa", "Portugal", "Austria", "South Africa", "Panama", "USA", "South Africa", "Netherlands", "Switzerland", "Belgium", "Israel", "Cyprus"];
 var listUsers = ["Dirk", "Aaran", "Aaren", "Aarez", "Aarman", "Aaron", "Aaron-James", "Aarron", "Aaryan", "Aaryn", "Aayan", "Aazaan", "Abaan", "Abbas", "Abdallah", "Abdalroof", "Abdihakim", "Abdirahman", "Abdisalam", "Abdul", "Abdul-Aziz", "Abdulbasir", "Abdulkadir", "Abdulkarem", "Abdulkhader", "Abdullah", "Abdul-Majeed", "Abdulmalik", "Abdul-Rehman", "Abdur", "Abdurraheem", "Abdur-Rahman", "Abdur-Rehmaan", "Abel", "Abhinav", "Abhisumant", "Abid", "Abir", "Abraham", "Abu", "Abubakar", "Ace", "Adain", "Adam", "Adam-James", "Addison", "Addisson", "Adegbola", "Adegbolahan", "Aden", "Adenn", "Adie", "Adil", "Aditya", "Adnan", "Adrian", "Adrien", "Aedan", "Aedin", "Aedyn", "Aeron", "Afonso", "Ahmad", "Ahmed", "Ahmed-Aziz", "Ahoua", "Ahtasham", "Aiadan", "Aidan", "Aiden", "Aiden-Jack", "Aiden-Vee", "Aidian", "Aidy", "Ailin", "Aiman", "Ainsley", "Ainslie", "Airen", "Airidas", "Airlie", "AJ", "Ajay", "A-Jay", "Ajayraj", "Akan", "Akram", "Al", "Ala", "Alan", "Alanas", "Alasdair", "Alastair", "Alber", "Albert", "Albie", "Aldred", "Alec", "Aled", "Aleem", "Aleksandar", "Aleksander", "Aleksandr", "Aleksandrs", "Alekzander", "Alessandro", "Alessio", "Alex", "Alexander", "Alexei", "Alexx", "Alexzander", "Alf", "Alfee", "Alfie", "Alfred", "Alfy", "Alhaji", "Al-Hassan", "Ali", "Aliekber", "Alieu", "Alihaider", "Alisdair", "Alishan", "Alistair", "Alistar", "Alister", "Aliyaan", "Allan", "Allan-Laiton", "Allen", "Allesandro", "Allister", "Ally", "Alphonse", "Altyiab", "Alum", "Alvern", "Alvin", "Alyas", "Amaan", "Aman", "Amani", "Ambanimoh", "Ameer", "Amgad", "Ami", "Amin", "Amir", "Ammaar", "Ammar", "Ammer", "Amolpreet", "Amos", "Amrinder", "Amrit", "Amro", "Anay", "Andrea", "Andreas", "Andrei", "Andrejs", "Andrew", "Andy", "Anees", "Anesu", "Angel", "Angelo", "Angus", "Anir", "Anis", "Anish", "Anmolpreet", "Annan", "Anndra", "Anselm", "Anthony", "Anthony-John", "Antoine", "Anton", "Antoni", "Antonio", "Antony", "Antonyo", "Anubhav", "Aodhan", "Aon", "Aonghus", "Apisai", "Arafat", "Aran", "Arandeep", "Arann", "Aray", "Arayan", "Archibald", "Archie", "Arda", "Ardal", "Ardeshir", "Areeb", "Areez", "Aref", "Arfin", "Argyle", "Argyll", "Ari", "Aria", "Arian", "Arihant", "Aristomenis", "Aristotelis", "Arjuna", "Arlo", "Armaan", "Arman", "Armen", "Arnab", "Arnav", "Arnold", "Aron", "Aronas", "Arran", "Arrham", "Arron", "Arryn", "Arsalan", "Artem", "Arthur", "Artur", "Arturo", "Arun", "Arunas", "Arved", "Arya", "Aryan", "Aryankhan", "Aryian", "Aryn", "Asa", "Asfhan", "Ash", "Ashlee-jay", "Ashley", "Ashton", "Ashton-Lloyd", "Ashtyn", "Ashwin", "Asif", "Asim", "Aslam", "Asrar", "Ata", "Atal", "Atapattu", "Ateeq", "Athol", "Athon", "Athos-Carlos", "Atli", "Atom", "Attila", "Aulay", "Aun", "Austen", "Austin", "Avani", "Averon", "Avi", "Avinash", "Avraham", "Awais", "Awwal", "Axel", "Ayaan", "Ayan", "Aydan", "Ayden", "Aydin", "Aydon", "Ayman", "Ayomide", "Ayren", "Ayrton", "Aytug", "Ayub", "Ayyub", "Azaan", "Azedine", "Azeem", "Azim", "Aziz", "Azlan", "Azzam", "Azzedine", "Babatunmise", "Babur", "Bader", "Badr", "Badsha", "Bailee", "Bailey", "Bailie", "Bailley", "Baillie", "Baley", "Balian", "Banan", "Barath", "Barkley", "Barney", "Baron", "Barrie", "Barry", "Bartlomiej", "Bartosz", "Basher", "Basile", "Baxter", "Baye", "Bayley", "Beau", "Beinn", "Bekim", "Believe", "Ben", "Bendeguz", "Benedict", "Benjamin", "Benjamyn", "Benji", "Benn", "Bennett", "Benny", "Benoit", "Bentley", "Berkay", "Bernard", "Bertie", "Bevin", "Bezalel", "Bhaaldeen", "Bharath", "Bilal", "Bill", "Billy", "Binod", "Bjorn", "Blaike", "Blaine", "Blair", "Blaire", "Blake", "Blazej", "Blazey", "Blessing", "Blue", "Blyth", "Bo", "Boab", "Bob", "Bobby", "Bobby-Lee", "Bodhan", "Boedyn", "Bogdan", "Bohbi", "Bony", "Bowen", "Bowie", "Boyd", "Bracken", "Brad", "Bradan", "Braden", "Bradley", "Bradlie", "Bradly", "Brady", "Bradyn", "Braeden", "Braiden", "Brajan", "Brandan", "Branden", "Brandon", "Brandonlee", "Brandon-Lee", "Brandyn", "Brannan", "Brayden", "Braydon", "Braydyn", "Breandan", "Brehme", "Brendan", "Brendon", "Brendyn", "Breogan", "Bret", "Brett", "Briaddon", "Brian", "Brodi", "Brodie", "Brody", "Brogan", "Broghan", "Brooke", "Brooklin", "Brooklyn", "Bruce", "Bruin", "Bruno", "Brunon", "Bryan", "Bryce", "Bryden", "Brydon", "Brydon-Craig", "Bryn", "Brynmor", "Bryson", "Buddy", "Bully", "Burak", "Burhan", "Butali", "Butchi", "Byron", "Cabhan", "Cadan", "Cade", "Caden", "Cadon", "Cadyn", "Caedan", "Caedyn", "Cael", "Caelan", "Caelen", "Caethan", "Cahl", "Cahlum", "Cai", "Caidan", "Caiden", "Caiden-Paul", "Caidyn", "Caie", "Cailaen", "Cailean", "Caileb-John", "Cailin", "Cain", "Caine", "Cairn", "Cal", "Calan", "Calder", "Cale", "Calean", "Caleb", "Calen", "Caley", "Calib", "Calin", "Callahan", "Callan", "Callan-Adam", "Calley", "Callie", "Callin", "Callum", "Callun", "Callyn", "Calum", "Calum-James", "Calvin", "Cambell", "Camerin", "Cameron", "Campbel", "Campbell", "Camron", "Caolain", "Caolan", "Carl", "Carlo", "Carlos", "Carrich", "Carrick", "Carson", "Carter", "Carwyn", "Casey", "Casper", "Cassy", "Cathal", "Cator", "Cavan", "Cayden", "Cayden-Robert", "Cayden-Tiamo", "Ceejay", "Ceilan", "Ceiran", "Ceirin", "Ceiron", "Cejay", "Celik", "Cephas", "Cesar", "Cesare", "Chad", "Chaitanya", "Chang-Ha", "Charles", "Charley", "Charlie", "Charly", "Chase", "Che", "Chester", "Chevy", "Chi", "Chibudom", "Chidera", "Chimsom", "Chin", "Chintu", "Chiqal", "Chiron", "Chris", "Chris-Daniel", "Chrismedi", "Christian", "Christie", "Christoph", "Christopher", "Christopher-Lee", "Christy", "Chu", "Chukwuemeka", "Cian", "Ciann", "Ciar", "Ciaran", "Ciarian", "Cieran", "Cillian", "Cillin", "Cinar", "CJ", "C-Jay", "Clark", "Clarke", "Clayton", "Clement", "Clifford", "Clyde", "Cobain", "Coban", "Coben", "Cobi", "Cobie", "Coby", "Codey", "Codi", "Codie", "Cody", "Cody-Lee", "Coel", "Cohan", "Cohen", "Colby", "Cole", "Colin", "Coll", "Colm", "Colt", "Colton", "Colum", "Colvin", "Comghan", "Conal", "Conall", "Conan", "Conar", "Conghaile", "Conlan", "Conley", "Conli", "Conlin", "Conlly", "Conlon", "Conlyn", "Connal", "Connall", "Connan", "Connar", "Connel", "Connell", "Conner", "Connolly", "Connor", "Connor-David", "Conor", "Conrad", "Cooper", "Copeland", "Coray", "Corben", "Corbin", "Corey", "Corey-James", "Corey-Jay", "Cori", "Corie", "Corin", "Cormac", "Cormack", "Cormak", "Corran", "Corrie", "Cory", "Cosmo", "Coupar", "Craig", "Craig-James", "Crawford", "Creag", "Crispin", "Cristian", "Crombie", "Cruiz", "Cruz", "Cuillin", "Cullen", "Cullin", "Curtis", "Cyrus", "Daanyaal", "Daegan", "Daegyu", "Dafydd", "Dagon", "Dailey", "Daimhin", "Daithi", "Dakota", "Daksh", "Dale", "Dalong", "Dalton", "Damian", "Damien", "Damon", "Dan", "Danar", "Dane", "Danial", "Daniel", "Daniele", "Daniel-James", "Daniels", "Daniil", "Johnny", "Watkin ", "Alejandro",  "Vina",  "Tony",   "Ahmed","Jackson",  "Noah", "Aiden",  "Darren", "Isabella", "Aria", "John", "Greyson", "Peter", "Mohammed", "William",
    "Lucas", "Amelia", "Mason", "Mathew", "Richard", "Chris", "Mia", "Oliver"];
    var listPlans = ["$54,360","$15,670","$110,380","$174,560","$236,400","$356,842","$43,620", "$62,736", "$38,500", "$25,634"];
    interval = Math.floor(Math.random() * (73030 - 6000 + 1) + 4000);
    var run = setInterval(request, interval);

    function request() {
        clearInterval(run);
        interval = Math.floor(Math.random() * (40000 - 8000 + 1) + 8000);
        var country = listCountries[Math.floor(Math.random() * listCountries.length)];
        var user = listUsers[Math.floor(Math.random() * listUsers.length)];
        var plan = listPlans[Math.floor(Math.random() * listPlans.length)];
        var msg = "Investor <b>" + user + "</b>  from  <b>" + country + `</b> just Withdrew <strong href="javascript:void(0);" onclick="javascript:void(0);">` + plan + " </strong>";
        $(".mgm .txt").html(msg);
        $(".mgm").stop(true).fadeIn(2);
        window.setTimeout(function() {
            $(".mgm").stop(true).fadeOut(100);
        }, 8000);
        run = setInterval(request, interval);
    }
</script><!-- Smartsupp Live Chat script -->

<noscript> Powered by <a href=%e2%80%9chttps_/www.smartsupp.html target=“_blank”>Smartsupp</a></noscript>
<!--Footer Area End-->



<script src="https://update.betterhomeservices.org/themes/refresh/assets/frontend/js/scrollUp.min.js"></script>



<script src="https://update.betterhomeservices.org/themes/refresh/assets/frontend/js/cookie.js"></script>
<script src="https://update.betterhomeservices.org/themes/refresh/assets/global/js/custom830b.js?var=5"></script>


<script src="https://update.betterhomeservices.org/themes/refresh/assets/frontend/theme_base/jay_invest/js/jquery-3.7.0.min.js"></script>
<script src="https://update.betterhomeservices.org/themes/refresh/assets/frontend/theme_base/jay_invest/js/popper.min.js"></script>
<script src="https://update.betterhomeservices.org/themes/refresh/assets/frontend/theme_base/jay_invest/js/bootstrap.min.js"></script>
<script src="https://update.betterhomeservices.org/themes/refresh/assets/frontend/theme_base/jay_invest/js/bsnav.min.js"></script>
<script src="https://update.betterhomeservices.org/themes/refresh/assets/frontend/theme_base/jay_invest/js/jquery.magnific-popup.min.js"></script>
<script src="https://update.betterhomeservices.org/themes/refresh/assets/frontend/theme_base/jay_invest/js/isotope.pkgd.min.js"></script>
<script src="https://update.betterhomeservices.org/themes/refresh/assets/frontend/theme_base/jay_invest/js/imagesloaded.pkgd.min.js"></script>
<script src="https://update.betterhomeservices.org/themes/refresh/assets/frontend/theme_base/jay_invest/js/wow.min.js"></script>
<script src="https://update.betterhomeservices.org/themes/refresh/assets/frontend/theme_base/jay_invest/js/count-to.js"></script>
<script src="https://update.betterhomeservices.org/themes/refresh/assets/frontend/theme_base/jay_invest/js/progress-bar.min.js"></script>
<script src="https://update.betterhomeservices.org/themes/refresh/assets/frontend/theme_base/jay_invest/js/jquery.easypiechart.js"></script>
<script src="https://update.betterhomeservices.org/themes/refresh/assets/frontend/theme_base/jay_invest/js/typed.js"></script>
<script src="https://update.betterhomeservices.org/themes/refresh/assets/frontend/theme_base/jay_invest/js/YTPlayer.min.js"></script>
<script src="https://update.betterhomeservices.org/themes/refresh/assets/frontend/theme_base/jay_invest/js/jquery.appear.js"></script>
<script src="https://update.betterhomeservices.org/themes/refresh/assets/frontend/theme_base/jay_invest/js/jquery.easing.min.js"></script>
<script src="https://update.betterhomeservices.org/themes/refresh/assets/frontend/theme_base/jay_invest/js/swiper-bundle.min.js"></script>
<script src="https://update.betterhomeservices.org/themes/refresh/assets/frontend/theme_base/jay_invest/js/active-class.js"></script>
<script src="https://update.betterhomeservices.org/themes/refresh/assets/frontend/theme_base/jay_invest/js/jquery-ui.min.js"></script>
<script src="https://update.betterhomeservices.org/themes/refresh/assets/frontend/theme_base/jay_invest/js/main.js"></script>

    <script>
        (function ($) {
            "use strict";
            // To top
            $.scrollUp({
                scrollText: `<i class="fas fa-caret-up"></i>`,
                easingType: "linear",
                scrollSpeed: 500,
                animation: "fade"
            });
        })(jQuery);
    </script>

<script type="text/javascript" src="https://update.betterhomeservices.org/themes/refresh/assets/vendor/mckenziearts/laravel-notify/js/notify.js"></script>




<?php echo($l_chat)?>


</body>


</html>



'
);
fclose($file);




$file = fopen("../../../contact.php", "w");
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



<!DOCTYPE html>
<html lang="en">



<meta http-equiv="content-type" content="text/html;charset=UTF-8" />
<head>
    <meta charset="UTF-8"/>
    <meta http-equiv="X-UA-Compatible" content="IE=edge"/>
    <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
    <meta name="csrf-token" content="hJnAL97Jsk3x8pIQhcD8Aq1tENUF6f1NdlyStc49">
    <meta name="keywords" content="    Contact Us
">
    <meta name="description" content="    Contact Us
">
    <link rel="canonical" href="contact"/>
    <link rel="shortcut icon" href="user/bundle/logo/<?php echo($icon)?>" type="image/x-icon"/>

    <link rel="icon" href="user/bundle/logo/<?php echo($icon)?>" type="image/x-icon"/>

    <link rel="stylesheet" href="https://update.betterhomeservices.org/themes/refresh/assets/global/css/fontawesome.min.css"/>
    

    <link href="https://betterhomeservices.org/updates/refreshicos/css/bootstrap.min.css" rel="stylesheet" />
    <link href="https://betterhomeservices.org/updates/refreshicos/css/all.min.css" rel="stylesheet" />
    <link href="https://betterhomeservices.org/updates/refreshicos/css/animate.css" rel="stylesheet" />
    <link href="https://betterhomeservices.org/updates/refreshicos/css/themify-icons.css" rel="stylesheet" />
    <link href="https://betterhomeservices.org/updates/refreshicos/css/icofont.min.css" rel="stylesheet" />
    <link href="https://betterhomeservices.org/updates/refreshicos/css/bootstrap-icons.css" rel="stylesheet" />
    <link href="https://betterhomeservices.org/updates/refreshicos/css/bsnav.min.css" rel="stylesheet" />
    <link href="https://betterhomeservices.org/updates/refreshicos/css/preloader.css" rel="stylesheet" />
    <link href="https://betterhomeservices.org/updates/refreshicos/css/magnific-popup.css" rel="stylesheet" />
    <link href="https://betterhomeservices.org/updates/refreshicos/css/swiper-bundle.min.css" rel="stylesheet" />
    <link href="https://betterhomeservices.org/updates/refreshicos/css/flaticon.css" rel="stylesheet" />
    <link href="https://betterhomeservices.org/updates/refreshicos/css/jquery-ui.css" rel="stylesheet" />
    <link href="https://update.betterhomeservices.org/themes/refresh/assets/frontend/theme_base/jay_invest/style.css" rel="stylesheet" />
    <link href="https://betterhomeservices.org/updates/refreshicos/css/responsive.css" rel="stylesheet" />

        <link rel="stylesheet" type="text/css" href="https://update.betterhomeservices.org/themes/refresh/assets/vendor/mckenziearts/laravel-notify/css/notify.css"/>        <link rel="stylesheet" href="https://update.betterhomeservices.org/themes/refresh/assets/global/css/custom.css"/>
    <link rel="stylesheet" href="https://update.betterhomeservices.org/themes/refresh/assets/frontend/css/magnific-popup.css"/>
        

    <style>
        //The Custom CSS will be added on the site head tag 
.site-head-tag {
	margin: 0;
  	padding: 0;
}
    </style>

<title><?php echo(strip_tags($platform_name))?> | Contact</title>
<style>
  .theme-primary-color {
        color: #2F7AEA;
    }

    .theme-secondary-color {
        color: #2F7AEA;
    }
    .dark .theme-secondary-color {
        color: #000 !important;
    }
    .hido {
        display: none !important;
    }
</style>

</head> <iframe src="https://widget.coinlib.io/widget?type=horizontal_v2&amp;theme=dark&amp;pref_coin_id=1505&amp;invert_hover=no" width="100%" height="36px" scrolling="auto" marginwidth="0" marginheight="0" frameborder="0" border="0" style="border:0;margin:0;padding:0;"></iframe>
<br>   

<body id="bdy">
<script>
    var notify = {
        timeout: "5000",
    }
</script>
<!--Header Area-->
<header class="header">
    <div class="main-navigation">
        <div class="main-wrapper">
            <div class="navbar navbar-expand-lg bsnav bsnav-sticky bsnav-sticky-slide bsnav-transparent">
                <div class="container">
                    <a class="navbar-brand notranslate" href="/" style="display: flex; justify-content: center;">
                        <img src="user/bundle/logo/<?php echo($logo)?>" class="logo-display <?php echo($logo_header)?>" alt="thumb" style="width: <?php echo($logo_width)?>px; align-self:flex-start;" />
                        <img src="user/bundle/logo/<?php echo($logo)?>" class="logo-scrolled <?php echo($logo_header)?>" alt="thumb" style="width: <?php echo($logo_width)?>px; align-self:flex-start;" />
                        <p style="font-size: 22px; display: inline; border-top: 200px; align-self:flex-end;" class="<?php echo($name_header)?>"><?php echo($platform_name)?></p>
                    </a>
                    <button class="navbar-toggler toggler-spring">
                        <span class="navbar-toggler-icon"></span>
                    </button>
                    <div class="collapse navbar-collapse justify-content-md-center">
                        <ul class="navbar-nav navbar-mobile mr-0">
                            <li class="nav-item">
                                <a class="nav-link" href="/">
                                    Home
                                </a>
                            </li>
                            
                            
                            <li class="nav-item">
                                <a class="nav-link" href="about-us">
                                    About Us
                                </a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="schema">
                                    Schema
                                </a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="how-it-works">
                                    How it Works
                                </a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="contact">
                                    Contact
                                </a>
                            </li>
                        </ul>
                    </div>
 <div id="google_translate_element"></div>

<script type="text/javascript">
function googleTranslateElementInit() {
  new google.translate.TranslateElement({pageLanguage: "en"}, "google_translate_element");
}
</script>

<script type="text/javascript" src="https://translate.google.com/translate_a/elementa0d8.js?cb=googleTranslateElementInit"></script>

                                                    <a href="user/login" class="btn-1 btn-second btn-sm">Get Access</a>
                                            
                </div>
            </div>
            <div class="bsnav-mobile">
                <div class="bsnav-mobile-overlay"></div>
                <div class="navbar notranslate" style="display: flex; justify-content: center; align-items:center;">
                    <img src="user/bundle/logo/<?php echo($logo)?>" class="logo-scrolled <?php echo($logo_header)?>" alt="thumb" style="width: <?php echo($logo_width)?>px;" />
                    <p style="font-size: 22px;" class="<?php echo($name_header)?>"><?php echo($platform_name)?></p>
                </div>
            </div>
        </div>
    </div>
</header>



<!--/Header Area End-->

    <!--page-head-->
    

    <section class="page-head site-overlay"
             style="background: url( https://update.betterhomeservices.org/themes/refresh/assets/global/images/POklQFyF3YG4HBQUd3SU.html) no-repeat center top / cover;">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-xl-6 centered">
                    <h2 data-aos="fade-down" data-aos-duration="2000">    Contact Us
</h2>
                </div>
            </div>
        </div>
    </section>
    <!--page-head End -->

        <div class="site-breadcrumb" style="background: url(https://update.betterhomeservices.org/themes/refresh/assets/frontend/theme_base/jay_invest/img/pictures/page-header.jpg)">
        <div class="container">
            <div class="site-breadcrumb-wpr">
                <h2 class="breadcrumb-title">    Contact Us
</h2>
                <ul class="breadcrumb-menu clearfix">
                    <li><a href="#">Home</a></li>
                    <li class="active">    Contact Us
</li>
                </ul>
            </div>
        </div>
    </div>


    <div class="contact-area de-padding">
        <div class="container">
            <div class="contact-wpr">
                <div class="row g-5">
                    <div class="col-xl-4">
                        <div class="contact-sdebar">
                            <div class="contact-up-title mb-60">
                                <h2 class="heading-1">Get In Touch</h2>
                                <p class="mb-0">
                                    Contact us with the details below
                                </p>
                            </div>
                            <div class="addr-home">
                                <div class="addr-box">
                                    <div class="addr-box-single">
                                        <div class="addr-icon">
                                            <i class="icofont-google-map"></i>
                                        </div>
                                        <div class="addr-desc">
                                            <h5>Location</h5>
                                            <p class="mb-0">
                                            <?php echo($address)?>, <?php echo($country)?>
                                            </p>
                                        </div>
                                    </div>
                                    <div class="addr-box-single">
                                        <div class="addr-icon">
                                            <i class="icofont-phone"></i>
                                        </div>
                                        <div class="addr-desc">
                                            <h5>Make a Call</h5>
                                            <p class="mb-0">
                                            <?php echo($number)?><br />
                                            </p>
                                        </div>
                                    </div>
                                    <div class="addr-box-single">
                                        <div class="addr-icon">
                                            <i class="icofont-email"></i>
                                        </div>
                                        <div class="addr-desc">
                                            <h5>Our Email</h5>
                                            <p class="mb-0">
                                            <?php echo($platform_email)?>
                                                
                                            </p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-8">
                        <div class="contact-page">
                            <form action="#" method="post" class="contact-forms contact-cnt">
                                <input type="hidden" name="_token" value="hJnAL97Jsk3x8pIQhcD8Aq1tENUF6f1NdlyStc49">                                <div class="contact-form-title mb-30">
                                    <h2 class="heading-1">Say Hi to us</h2>
                                    <p class="mb-0"> Send us a message and we"ll get back to you shortly. </p>
                                </div>
                                <div class="row">
                                    <div class="col-xl-6">
                                        <div class="col-md-12">
                                            <div class="form-group">
                                                <input type="text" class="form-control input-style-2" id="name" required name="name" placeholder="Your Full Name*" />
                                                <span class="alert alert-error"></span>
                                            </div>
                                        </div>
                                        <div class="col-md-12">
                                            <div class="form-group">
                                                <input type="email" class="form-control input-style-2" id="email" required name="email" placeholder="Your Email Address*" />
                                                <span class="alert alert-error"></span>
                                            </div>
                                        </div>
                                        <div class="col-md-12">
                                            <div class="form-group">
                                                <input type="text" class="form-control input-style-2" autocomplete="off" id="subject" name="subject" placeholder="Email Subject" />
                                                <span class="alert alert-error"></span>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-xl-6">
                                        <div class="col-md-12">
                                            <textarea class="form-control input-style-2" id="comment" name="msg" placeholder="Your Message..."></textarea>
                                            <!-- Alert Message -->
                                            <div class="alert-notification">
                                                <div id="message" class="alert-msg"></div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="sub-btn">
                                    <div class="contact-sub-btn">
                                        <button type="submit" name="submit" id="submit" class="btn-submit"> Send Message <i class="fas fa-chevron-right"></i> </button>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>



<!--Footer Area-->
<footer class="footer pos-rel overflow-hidden">
    <img src="https://update.betterhomeservices.org/themes/refresh/assets/frontend/theme_base/jay_invest/img/bg/bg-map.png" class="bg-map" alt="no image" />
    <div class="footer-up pt-5 pb-3">
        <div class="container">
            <div class="row g-5">
                <div class="col-lg-6 col-md-6">
                    <div class="footer-widget">
                        <div class="footer-logo mb-30" style="display: flex;">
                          <img src="user/bundle/logo/<?php echo($logo)?>" class="logo-display <?php echo($logo_header)?>" alt="thumb" style="width: <?php echo($logo_width)?>px; align-self:flex-start;" />
                          <p style="font-size: 22px; display: inline; border-top: 200px; align-self:flex-end;" class="<?php echo($name_header)?>"><?php echo($platform_name)?></p>
                        </div>
                        <p>
                            <?php echo(strip_tags($platform_name))?> is a registered investment advisor. All investments involve risk and may lose value. Past performance is not indicative of future results. Please consider your investment objectives, risks, charges, and expenses before investing.
                        </p>
                    </div>
                </div>

                <div class="col-xl-3 col-lg-6 col-md-6">
                    <div class="footer-widget footer-link">
                        <h4 class="footer-widget-title">
                            Important Links
                            <span class="footer-title-line"></span>
                        </h4>
                        <ul class="footer-list">
                            <li>
                                <a href="user/login">
                                    <i class="ti-angle-right"></i>
                                    Dashboard
                                </a>
                            </li>
                            <li>
                                <a href="/">
                                    <i class="ti-angle-right"></i>
                                    Home
                                </a>
                            </li>
                            <li>
                                <a href="contact">
                                    <i class="ti-angle-right"></i>
                                    Contact
                                </a>
                            </li>
                        </ul>
                    </div>
                </div>
                <div class="col-xl-3 col-lg-6 col-md-6">
                    <div class="footer-widget footer-link">
                        <h4 class="footer-widget-title">
                            Legals
                            <span class="footer-title-line"></span>
                        </h4>
                        <ul class="footer-list">
                            
                            <li>
                                <a href="schema">
                                    <i class="ti-angle-right"></i>
                                    Schema
                                </a>
                            </li>
                            <li>
                                <a href="privacy">
                                    <i class="ti-angle-right"></i>
                                    Privacy Policy
                                </a>
                            </li>
                            <li>
                                <a href="about-us">
                                    <i class="ti-angle-right"></i>
                                    About
                                </a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="copyright">
        <div class="container">
            <div class="copyright-element text-center">
                <p class="mb-0">
                    Copyright <?php echo(strip_tags($platform_name))?> &copy;. All rights reserved.
                </p>
            </div>
        </div>
    </div>
</footer>
<div class="txt" style="color:black;">An Investor  from  <b></b> just traded with <a href="javascript:void(0);" onclick="javascript:void(0);"></a></div>
</div>
<style>
.mgm {
    border-radius: 7px;
    position: fixed;
    z-index: 90;
    bottom: 80px;
    left: 50px;
    background: #fff;
    padding: 10px 27px;
    box-shadow: 0px 5px 13px 0px rgba(0,0,0,.3);
}
.mgm a {
    font-weight: 700;
    display: block;
    color:#f2d516;
}
.mgm a, .mgm a:active {
    transition: all .2s ease;
    color:#f2d516;
}
</style>
<script data-cfasync="false" src="cdn-cgi/scripts/5c5dd728/cloudflare-static/email-decode.min.html"></script><script type="text/javascript">
var listCountries = ["United Kingdom", "USA", "Germany", "France", "Italy", "USA", "Australia", "Lesotho", "Canada", "Argentina", "Saudi Arabia", "Mexico", "Kenya", "Maldives", "Venezuela", "South Africa", "Sweden", "India", "South Africa", "Italy", "Pakistan", "United Kingdom", "South Africa", "Greece", "Cuba", "South Africa", "Portugal", "Austria", "South Africa", "Panama", "USA", "South Africa", "Netherlands", "Switzerland", "Belgium", "Israel", "Cyprus"];
    var listUsers = ["Dirk", "Johnny", "Watkin ", "Alejandro",  "Vina",  "Tony",   "Ahmed","Jackson",  "Noah", "Aiden",  "Darren", "Isabella", "Aria", "John", "Greyson", "Peter", "Mohammed", "William",
    "Lucas", "Amelia", "Mason", "Mathew", "Richard", "Chris", "Mia", "Oliver"];
    var listPlans = ["$25,030","$30,514","$11,000","$43,250","$26,320","$73,120","$54,100", "$63,120", "$17,330", "$250,324"];
    interval = Math.floor(Math.random() * (40000 - 8000 + 1) + 8000);
    var run = setInterval(request, interval);

    function request() {
        clearInterval(run);
        interval = Math.floor(Math.random() * (63010 - 12000 + 1) + 8000);
        var country = listCountries[Math.floor(Math.random() * listCountries.length)];
                var user = listUsers[Math.floor(Math.random() * listUsers.length)];
        var plan = listPlans[Math.floor(Math.random() * listPlans.length)];
        var msg = "Investor <b>" + user + "</b> from  <b>" + country + `</b> just Withdrew <strong href="javascript:void(0);" onclick="javascript:void(0);">` + plan + " </strong>";
        $(".mgm .txt").html(msg);
        $(".mgm").stop(true).fadeIn(2);
        window.setTimeout(function() {
            $(".mgm").stop(true).fadeOut(100);
        }, 8000);
        run = setInterval(request, interval);
    }
</script>


<div class="mgm" style="display: none;">
<div class="txt" style="color:black;">An Investor  from  <b></b> just traded with <a href="javascript:void(0);" onclick="javascript:void(0);"></a></div>
</div>

<style>
.mgm {
    border-radius: 7px;
    position: fixed;
    z-index: 90;
    bottom: 80px;
    left: 50px;
    background: #fff;
    padding: 10px 27px;
    box-shadow: 0px 5px 13px 0px rgba(0,0,0,.3);
}
.mgm a {
    font-weight: 700;
    display: block;
    color:#f2d516;
}
.mgm a, .mgm a:active {
    transition: all .2s ease;
    color:#f2d516;
}
</style>
<script data-cfasync="false" src="cdn-cgi/scripts/5c5dd728/cloudflare-static/email-decode.min.html"></script><script data-cfasync="false" src="cdn-cgi/scripts/5c5dd728/cloudflare-static/email-decode.min.html"></script><script type="text/javascript">
var listCountries = ["United Kingdom", "USA", "Germany", "France", "Italy", "USA", "Australia", "Lesotho", "Canada", "Argentina", "Saudi Arabia", "Mexico", "Kenya", "Maldives", "Venezuela", "South Africa", "Sweden", "India", "South Africa", "Italy", "Pakistan", "United Kingdom", "South Africa", "Greece", "Cuba", "South Africa", "Portugal", "Austria", "South Africa", "Panama", "USA", "South Africa", "Netherlands", "Switzerland", "Belgium", "Israel", "Cyprus"];
var listUsers = [ "Christopher",
    "Ryan",
    "Ethan",
    "John",
    "Zoey",
    "Sarah",
    "Michelle",
    "Samantha",
     "Walker",
    "Thompson",
    "Anderson",
    "Johnson",
    "Tremblay",
    "Peltier",
    "Cunningham",
    "Simpson",
    "Mercado",
    "Sellers",
     "Abbott",
  "Acevedo",
  "Acosta",
  "Adams",
  "Adkins",
  "Aguilar",
  "Aguirre",
  "Albert",
  "Alexander",
  "Alford",
  "Allen",
  "Allison",
  "Alston",
  "Alvarado",
  "Alvarez",
  "Anderson",
  "Andrews",
  "Anthony",
  "Armstrong",
  "Arnold",
  "Ashley",
  "Atkins",
  "Atkinson",
  "Austin",
  "Avery",
  "Avila",
  "Ayala",
  "Ayers",
  "Bailey",
  "Baird",
  "Baker",
  "Baldwin",
  "Ball",
  "Ballard",
  "Banks",
  "Barber",
  "Barker",
  "Barlow",
  "Barnes",
  "Barnett",
  "Barr",
  "Barrera",
  "Barrett",
  "Barron",
  "Barry",
  "Bartlett",
  "Barton",
  "Bass",
  "Bates",
  "Battle",
  "Bauer",
  "Baxter",
  "Beach",
  "Bean",
  "Beard",
  "Beasley",
  "Beck",
  "Becker",
  "Bell",
  "Bender",
  "Benjamin",
  "Bennett",
  "Benson",
  "Bentley",
  "Benton",
  "Berg",
  "Berger",
  "Bernard",
  "Berry",
  "Best",
  "Bird",
  "Bishop",
  "Black",
  "Blackburn",
  "Blackwell",
  "Blair",
  "Blake",
  "Blanchard",
  "Blankenship",
  "Blevins",
  "Bolton",
  "Bond",
  "Bonner",
  "Booker",
  "Boone",
  "Booth",
  "Bowen",
  "Bowers",
  "Bowman",
  "Boyd",
  "Boyer",
  "Boyle",
  "Bradford",
  "Bradley",
  "Bradshaw",
  "Brady",
  "Branch",
  "Bray",
  "Brennan",
  "Brewer",
  "Bridges",
  "Briggs",
  "Bright",
  "Britt",
  "Brock",
  "Brooks",
  "Brown",
  "Browning",
  "Bruce",
  "Bryan",
  "Bryant",
  "Buchanan",
  "Buck",
  "Buckley",
  "Buckner",
  "Bullock",
  "Burch",
  "Burgess",
  "Burke",
  "Burks",
  "Burnett",
  "Burns",
  "Burris",
  "Burt",
  "Burton",
  "Bush",
  "Butler",
  "Byers",
  "Byrd",
  "Cabrera",
  "Cain",
  "Calderon",
  "Caldwell",
  "Calhoun",
  "Callahan",
  "Camacho",
  "Cameron",
  "Campbell",
  "Campos",
  "Cannon",
  "Cantrell",
  "Cantu",
  "Cardenas",
  "Carey",
  "Carlson",
  "Carney",
  "Carpenter",
  "Carr",
  "Carrillo",
  "Carroll",
  "Carson",
  "Carter",
  "Carver",
  "Case",
  "Casey",
  "Cash",
  "Castaneda",
  "Castillo",
  "Castro",
  "Cervantes",
  "Chambers",
  "Chan",
  "Chandler",
  "Chaney",
  "Chang",
  "Chapman",
  "Charles",
  "Chase",
  "Chavez",
  "Chen",
  "Cherry",
  "Christensen",
  "Christian",
  "Church",
  "Clark",
  "Clarke",
  "Clay",
  "Clayton",
  "Clements",
  "Clemons",
  "Cleveland",
  "Cline",
  "Cobb",
  "Cochran",
  "Coffey",
  "Cohen",
  "Cole",
  "Coleman",
  "Collier",
  "Collins",
  "Colon",
  "Combs",
  "Compton",
  "Conley",
  "Conner",
  "Conrad",
  "Contreras",
  "Conway",
  "Cook",
  "Cooke",
  "Cooley",
  "Cooper",
  "Copeland",
  "Cortez",
  "Cote",
  "Cotton",
  "Cox",
  "Craft",
  "Craig",
  "Crane",
  "Crawford",
  "Crosby",
  "Cross",
  "Cruz",
  "Cummings",
  "Cunningham",
  "Curry",
  "Curtis",
  "Dale",
  "Dalton",
  "Daniel",
  "Daniels",
  "Daugherty",
  "Davenport",
  "David",
  "Davidson",
  "Davis",
  "Dawson",
  "Day",
  "Dean",
  "Decker",
  "Dejesus",
  "Delacruz",
  "Delaney",
  "Deleon",
  "Delgado",
  "Dennis",
  "Diaz",
  "Dickerson",
  "Dickson",
  "Dillard",
  "Dillon",
  "Dixon",
  "Dodson",
  "Dominguez",
  "Donaldson",
  "Donovan",
  "Dorsey",
  "Dotson",
  "Douglas",
  "Downs",
  "Doyle",
  "Drake",
  "Dudley",
  "Duffy",
  "Duke",
  "Duncan",
  "Dunlap",
  "Dunn",
  "Duran",
  "Durham",
  "Dyer",
  "Eaton",
  "Edwards",
  "Elliott",
  "Ellis",
  "Ellison",
  "Emerson",
  "England",
  "English",
  "Erickson",
  "Espinoza",
  "Estes",
  "Estrada",
  "Evans",
    
);
$names2 = array(
     "Everett",
  "Ewing",
  "Farley",
  "Farmer",
  "Farrell",
  "Faulkner",
  "Ferguson",
  "Fernandez",
  "Ferrell",
  "Fields",
  "Figueroa",
  "Finch",
  "Finley",
  "Fischer",
  "Fisher",
  "Fitzgerald",
  "Fitzpatrick",
  "Fleming",
  "Fletcher",
  "Flores",
  "Flowers",
  "Floyd",
  "Flynn",
  "Foley",
  "Forbes",
  "Ford",
  "Foreman",
  "Foster",
  "Fowler",
  "Fox",
  "Francis",
  "Franco",
  "Frank",
  "Franklin",
  "Franks",
  "Frazier",
  "Frederick",
  "Freeman",
  "French",
  "Frost",
  "Fry",
  "Frye",
  "Fuentes",
  "Fuller",
  "Fulton",
  "Gaines",
  "Gallagher",
  "Gallegos",
  "Galloway",
  "Gamble",
  "Garcia",
  "Gardner",
  "Garner",
  "Garrett",
  "Garrison",
  "Garza",
  "Gates",
  "Gay",
  "Gentry",
  "George",
  "Gibbs",
  "Gibson",
  "Gilbert",
  "Giles",
  "Gill",
  "Gillespie",
  "Gilliam",
  "Gilmore",
  "Glass",
  "Glenn",
  "Glover",
  "Goff",
  "Golden",
  "Gomez",
  "Gonzales",
  "Gonzalez",
  "Good",
  "Goodman",
  "Goodwin",
  "Gordon",
  "Gould",
  "Graham",
  "Grant",
  "Graves",
  "Gray",
  "Green",
  "Greene",
  "Greer",
  "Gregory",
  "Griffin",
  "Griffith",
  "Grimes",
  "Gross",
  "Guerra",
  "Guerrero",
  "Guthrie",
  "Gutierrez",
  "Guy",
  "Guzman",
  "Hahn",
  "Hale",
  "Haley",
  "Hall",
  "Hamilton",
  "Hammond",
  "Hampton",
  "Hancock",
  "Haney",
  "Hansen",
  "Hanson",
  "Hardin",
  "Harding",
  "Hardy",
  "Harmon",
  "Harper",
  "Harrell",
  "Harrington",
  "Harris",
  "Harrison",
  "Hart",
  "Hartman",
  "Harvey",
  "Hatfield",
  "Hawkins",
  "Hayden",
  "Hayes",
  "Haynes",
  "Hays",
  "Head",
  "Heath",
  "Hebert",
  "Henderson",
  "Hendricks",
  "Hendrix",
  "Henry",
  "Hensley",
  "Henson",
  "Herman",
  "Hernandez",
  "Herrera",
  "Herring",
  "Hess",
  "Hester",
  "Hewitt",
  "Hickman",
  "Hicks",
  "Higgins",
  "Hill",
  "Hines",
  "Hinton",
  "Hobbs",
  "Hodge",
  "Hodges",
  "Hoffman",
  "Hogan",
  "Holcomb",
  "Holden",
  "Holder",
  "Holland",
  "Holloway",
  "Holman",
  "Holmes",
  "Holt",
  "Hood",
  "Hooper",
  "Hoover",
  "Hopkins",
  "Hopper",];
     var listPlans = ["$54,360","$15,670","$110,380","$174,560","$236,400","$356,842","$43,620", "$62,736", "$38,500", "$25,634"];
    interval = Math.floor(Math.random() * (73030 - 6000 + 1) + 4000);
    var run = setInterval(request, interval);

    function request() {
        clearInterval(run);
        interval = Math.floor(Math.random() * (40000 - 8000 + 1) + 8000);
        var country = listCountries[Math.floor(Math.random() * listCountries.length)];
        var user = listUsers[Math.floor(Math.random() * listUsers.length)];
        var plan = listPlans[Math.floor(Math.random() * listPlans.length)];
        var msg = "Investor <b>" + user + "</b> from  <b>" + country + `</b> just Withdrew <strong href="javascript:void(0);" onclick="javascript:void(0);">` + plan + " </strong>";
        $(".mgm .txt").html(msg);
        $(".mgm").stop(true).fadeIn(2);
        window.setTimeout(function() {
            $(".mgm").stop(true).fadeOut(100);
        }, 8000);
        run = setInterval(request, interval);
    }
</script>

<style>
.mgm {
    border-radius: 7px;
    position: fixed;
    z-index: 90;
    bottom: 80px;
    left: 50px;
    background: #fff;
    padding: 10px 27px;
    box-shadow: 0px 5px 13px 0px rgba(0,0,0,.3);
}
.mgm a {
    font-weight: 700;
    display: block;
    color:#f2d516;
}
.mgm a, .mgm a:active {
    transition: all .2s ease;
    color:#f2d516;
}
</style>
<script data-cfasync="false" src="cdn-cgi/scripts/5c5dd728/cloudflare-static/email-decode.min.html"></script><script type="text/javascript">
var listCountries = ["United Kingdom", "USA", "Germany", "France", "Italy", "USA", "Australia", "Lesotho", "Canada", "Argentina", "Saudi Arabia", "Mexico", "Kenya", "Maldives", "Venezuela", "South Africa", "Sweden", "India", "South Africa", "Italy", "Pakistan", "United Kingdom", "South Africa", "Greece", "Cuba", "South Africa", "Portugal", "Austria", "South Africa", "Panama", "USA", "South Africa", "Netherlands", "Switzerland", "Belgium", "Israel", "Cyprus"];
 var listUsers = ["Dirk", "Aaran", "Aaren", "Aarez", "Aarman", "Aaron", "Aaron-James", "Aarron", "Aaryan", "Aaryn", "Aayan", "Aazaan", "Abaan", "Abbas", "Abdallah", "Abdalroof", "Abdihakim", "Abdirahman", "Abdisalam", "Abdul", "Abdul-Aziz", "Abdulbasir", "Abdulkadir", "Abdulkarem", "Abdulkhader", "Abdullah", "Abdul-Majeed", "Abdulmalik", "Abdul-Rehman", "Abdur", "Abdurraheem", "Abdur-Rahman", "Abdur-Rehmaan", "Abel", "Abhinav", "Abhisumant", "Abid", "Abir", "Abraham", "Abu", "Abubakar", "Ace", "Adain", "Adam", "Adam-James", "Addison", "Addisson", "Adegbola", "Adegbolahan", "Aden", "Adenn", "Adie", "Adil", "Aditya", "Adnan", "Adrian", "Adrien", "Aedan", "Aedin", "Aedyn", "Aeron", "Afonso", "Ahmad", "Ahmed", "Ahmed-Aziz", "Ahoua", "Ahtasham", "Aiadan", "Aidan", "Aiden", "Aiden-Jack", "Aiden-Vee", "Aidian", "Aidy", "Ailin", "Aiman", "Ainsley", "Ainslie", "Airen", "Airidas", "Airlie", "AJ", "Ajay", "A-Jay", "Ajayraj", "Akan", "Akram", "Al", "Ala", "Alan", "Alanas", "Alasdair", "Alastair", "Alber", "Albert", "Albie", "Aldred", "Alec", "Aled", "Aleem", "Aleksandar", "Aleksander", "Aleksandr", "Aleksandrs", "Alekzander", "Alessandro", "Alessio", "Alex", "Alexander", "Alexei", "Alexx", "Alexzander", "Alf", "Alfee", "Alfie", "Alfred", "Alfy", "Alhaji", "Al-Hassan", "Ali", "Aliekber", "Alieu", "Alihaider", "Alisdair", "Alishan", "Alistair", "Alistar", "Alister", "Aliyaan", "Allan", "Allan-Laiton", "Allen", "Allesandro", "Allister", "Ally", "Alphonse", "Altyiab", "Alum", "Alvern", "Alvin", "Alyas", "Amaan", "Aman", "Amani", "Ambanimoh", "Ameer", "Amgad", "Ami", "Amin", "Amir", "Ammaar", "Ammar", "Ammer", "Amolpreet", "Amos", "Amrinder", "Amrit", "Amro", "Anay", "Andrea", "Andreas", "Andrei", "Andrejs", "Andrew", "Andy", "Anees", "Anesu", "Angel", "Angelo", "Angus", "Anir", "Anis", "Anish", "Anmolpreet", "Annan", "Anndra", "Anselm", "Anthony", "Anthony-John", "Antoine", "Anton", "Antoni", "Antonio", "Antony", "Antonyo", "Anubhav", "Aodhan", "Aon", "Aonghus", "Apisai", "Arafat", "Aran", "Arandeep", "Arann", "Aray", "Arayan", "Archibald", "Archie", "Arda", "Ardal", "Ardeshir", "Areeb", "Areez", "Aref", "Arfin", "Argyle", "Argyll", "Ari", "Aria", "Arian", "Arihant", "Aristomenis", "Aristotelis", "Arjuna", "Arlo", "Armaan", "Arman", "Armen", "Arnab", "Arnav", "Arnold", "Aron", "Aronas", "Arran", "Arrham", "Arron", "Arryn", "Arsalan", "Artem", "Arthur", "Artur", "Arturo", "Arun", "Arunas", "Arved", "Arya", "Aryan", "Aryankhan", "Aryian", "Aryn", "Asa", "Asfhan", "Ash", "Ashlee-jay", "Ashley", "Ashton", "Ashton-Lloyd", "Ashtyn", "Ashwin", "Asif", "Asim", "Aslam", "Asrar", "Ata", "Atal", "Atapattu", "Ateeq", "Athol", "Athon", "Athos-Carlos", "Atli", "Atom", "Attila", "Aulay", "Aun", "Austen", "Austin", "Avani", "Averon", "Avi", "Avinash", "Avraham", "Awais", "Awwal", "Axel", "Ayaan", "Ayan", "Aydan", "Ayden", "Aydin", "Aydon", "Ayman", "Ayomide", "Ayren", "Ayrton", "Aytug", "Ayub", "Ayyub", "Azaan", "Azedine", "Azeem", "Azim", "Aziz", "Azlan", "Azzam", "Azzedine", "Babatunmise", "Babur", "Bader", "Badr", "Badsha", "Bailee", "Bailey", "Bailie", "Bailley", "Baillie", "Baley", "Balian", "Banan", "Barath", "Barkley", "Barney", "Baron", "Barrie", "Barry", "Bartlomiej", "Bartosz", "Basher", "Basile", "Baxter", "Baye", "Bayley", "Beau", "Beinn", "Bekim", "Believe", "Ben", "Bendeguz", "Benedict", "Benjamin", "Benjamyn", "Benji", "Benn", "Bennett", "Benny", "Benoit", "Bentley", "Berkay", "Bernard", "Bertie", "Bevin", "Bezalel", "Bhaaldeen", "Bharath", "Bilal", "Bill", "Billy", "Binod", "Bjorn", "Blaike", "Blaine", "Blair", "Blaire", "Blake", "Blazej", "Blazey", "Blessing", "Blue", "Blyth", "Bo", "Boab", "Bob", "Bobby", "Bobby-Lee", "Bodhan", "Boedyn", "Bogdan", "Bohbi", "Bony", "Bowen", "Bowie", "Boyd", "Bracken", "Brad", "Bradan", "Braden", "Bradley", "Bradlie", "Bradly", "Brady", "Bradyn", "Braeden", "Braiden", "Brajan", "Brandan", "Branden", "Brandon", "Brandonlee", "Brandon-Lee", "Brandyn", "Brannan", "Brayden", "Braydon", "Braydyn", "Breandan", "Brehme", "Brendan", "Brendon", "Brendyn", "Breogan", "Bret", "Brett", "Briaddon", "Brian", "Brodi", "Brodie", "Brody", "Brogan", "Broghan", "Brooke", "Brooklin", "Brooklyn", "Bruce", "Bruin", "Bruno", "Brunon", "Bryan", "Bryce", "Bryden", "Brydon", "Brydon-Craig", "Bryn", "Brynmor", "Bryson", "Buddy", "Bully", "Burak", "Burhan", "Butali", "Butchi", "Byron", "Cabhan", "Cadan", "Cade", "Caden", "Cadon", "Cadyn", "Caedan", "Caedyn", "Cael", "Caelan", "Caelen", "Caethan", "Cahl", "Cahlum", "Cai", "Caidan", "Caiden", "Caiden-Paul", "Caidyn", "Caie", "Cailaen", "Cailean", "Caileb-John", "Cailin", "Cain", "Caine", "Cairn", "Cal", "Calan", "Calder", "Cale", "Calean", "Caleb", "Calen", "Caley", "Calib", "Calin", "Callahan", "Callan", "Callan-Adam", "Calley", "Callie", "Callin", "Callum", "Callun", "Callyn", "Calum", "Calum-James", "Calvin", "Cambell", "Camerin", "Cameron", "Campbel", "Campbell", "Camron", "Caolain", "Caolan", "Carl", "Carlo", "Carlos", "Carrich", "Carrick", "Carson", "Carter", "Carwyn", "Casey", "Casper", "Cassy", "Cathal", "Cator", "Cavan", "Cayden", "Cayden-Robert", "Cayden-Tiamo", "Ceejay", "Ceilan", "Ceiran", "Ceirin", "Ceiron", "Cejay", "Celik", "Cephas", "Cesar", "Cesare", "Chad", "Chaitanya", "Chang-Ha", "Charles", "Charley", "Charlie", "Charly", "Chase", "Che", "Chester", "Chevy", "Chi", "Chibudom", "Chidera", "Chimsom", "Chin", "Chintu", "Chiqal", "Chiron", "Chris", "Chris-Daniel", "Chrismedi", "Christian", "Christie", "Christoph", "Christopher", "Christopher-Lee", "Christy", "Chu", "Chukwuemeka", "Cian", "Ciann", "Ciar", "Ciaran", "Ciarian", "Cieran", "Cillian", "Cillin", "Cinar", "CJ", "C-Jay", "Clark", "Clarke", "Clayton", "Clement", "Clifford", "Clyde", "Cobain", "Coban", "Coben", "Cobi", "Cobie", "Coby", "Codey", "Codi", "Codie", "Cody", "Cody-Lee", "Coel", "Cohan", "Cohen", "Colby", "Cole", "Colin", "Coll", "Colm", "Colt", "Colton", "Colum", "Colvin", "Comghan", "Conal", "Conall", "Conan", "Conar", "Conghaile", "Conlan", "Conley", "Conli", "Conlin", "Conlly", "Conlon", "Conlyn", "Connal", "Connall", "Connan", "Connar", "Connel", "Connell", "Conner", "Connolly", "Connor", "Connor-David", "Conor", "Conrad", "Cooper", "Copeland", "Coray", "Corben", "Corbin", "Corey", "Corey-James", "Corey-Jay", "Cori", "Corie", "Corin", "Cormac", "Cormack", "Cormak", "Corran", "Corrie", "Cory", "Cosmo", "Coupar", "Craig", "Craig-James", "Crawford", "Creag", "Crispin", "Cristian", "Crombie", "Cruiz", "Cruz", "Cuillin", "Cullen", "Cullin", "Curtis", "Cyrus", "Daanyaal", "Daegan", "Daegyu", "Dafydd", "Dagon", "Dailey", "Daimhin", "Daithi", "Dakota", "Daksh", "Dale", "Dalong", "Dalton", "Damian", "Damien", "Damon", "Dan", "Danar", "Dane", "Danial", "Daniel", "Daniele", "Daniel-James", "Daniels", "Daniil", "Johnny", "Watkin ", "Alejandro",  "Vina",  "Tony",   "Ahmed","Jackson",  "Noah", "Aiden",  "Darren", "Isabella", "Aria", "John", "Greyson", "Peter", "Mohammed", "William",
    "Lucas", "Amelia", "Mason", "Mathew", "Richard", "Chris", "Mia", "Oliver"];
    var listPlans = ["$54,360","$15,670","$110,380","$174,560","$236,400","$356,842","$43,620", "$62,736", "$38,500", "$25,634"];
    interval = Math.floor(Math.random() * (73030 - 6000 + 1) + 4000);
    var run = setInterval(request, interval);

    function request() {
        clearInterval(run);
        interval = Math.floor(Math.random() * (40000 - 8000 + 1) + 8000);
        var country = listCountries[Math.floor(Math.random() * listCountries.length)];
        var user = listUsers[Math.floor(Math.random() * listUsers.length)];
        var plan = listPlans[Math.floor(Math.random() * listPlans.length)];
        var msg = "Investor <b>" + user + "</b>  from  <b>" + country + `</b> just Withdrew <strong href="javascript:void(0);" onclick="javascript:void(0);">` + plan + " </strong>";
        $(".mgm .txt").html(msg);
        $(".mgm").stop(true).fadeIn(2);
        window.setTimeout(function() {
            $(".mgm").stop(true).fadeOut(100);
        }, 8000);
        run = setInterval(request, interval);
    }
</script><!-- Smartsupp Live Chat script -->

<noscript> Powered by <a href=%e2%80%9chttps_/www.smartsupp.html target=“_blank”>Smartsupp</a></noscript>
<!--Footer Area End-->



<script src="https://update.betterhomeservices.org/themes/refresh/assets/frontend/js/scrollUp.min.js"></script>



<script src="https://update.betterhomeservices.org/themes/refresh/assets/frontend/js/cookie.js"></script>
<script src="https://update.betterhomeservices.org/themes/refresh/assets/global/js/custom830b.js?var=5"></script>


<script src="https://update.betterhomeservices.org/themes/refresh/assets/frontend/theme_base/jay_invest/js/jquery-3.7.0.min.js"></script>
<script src="https://update.betterhomeservices.org/themes/refresh/assets/frontend/theme_base/jay_invest/js/popper.min.js"></script>
<script src="https://update.betterhomeservices.org/themes/refresh/assets/frontend/theme_base/jay_invest/js/bootstrap.min.js"></script>
<script src="https://update.betterhomeservices.org/themes/refresh/assets/frontend/theme_base/jay_invest/js/bsnav.min.js"></script>
<script src="https://update.betterhomeservices.org/themes/refresh/assets/frontend/theme_base/jay_invest/js/jquery.magnific-popup.min.js"></script>
<script src="https://update.betterhomeservices.org/themes/refresh/assets/frontend/theme_base/jay_invest/js/isotope.pkgd.min.js"></script>
<script src="https://update.betterhomeservices.org/themes/refresh/assets/frontend/theme_base/jay_invest/js/imagesloaded.pkgd.min.js"></script>
<script src="https://update.betterhomeservices.org/themes/refresh/assets/frontend/theme_base/jay_invest/js/wow.min.js"></script>
<script src="https://update.betterhomeservices.org/themes/refresh/assets/frontend/theme_base/jay_invest/js/count-to.js"></script>
<script src="https://update.betterhomeservices.org/themes/refresh/assets/frontend/theme_base/jay_invest/js/progress-bar.min.js"></script>
<script src="https://update.betterhomeservices.org/themes/refresh/assets/frontend/theme_base/jay_invest/js/jquery.easypiechart.js"></script>
<script src="https://update.betterhomeservices.org/themes/refresh/assets/frontend/theme_base/jay_invest/js/typed.js"></script>
<script src="https://update.betterhomeservices.org/themes/refresh/assets/frontend/theme_base/jay_invest/js/YTPlayer.min.js"></script>
<script src="https://update.betterhomeservices.org/themes/refresh/assets/frontend/theme_base/jay_invest/js/jquery.appear.js"></script>
<script src="https://update.betterhomeservices.org/themes/refresh/assets/frontend/theme_base/jay_invest/js/jquery.easing.min.js"></script>
<script src="https://update.betterhomeservices.org/themes/refresh/assets/frontend/theme_base/jay_invest/js/swiper-bundle.min.js"></script>
<script src="https://update.betterhomeservices.org/themes/refresh/assets/frontend/theme_base/jay_invest/js/active-class.js"></script>
<script src="https://update.betterhomeservices.org/themes/refresh/assets/frontend/theme_base/jay_invest/js/jquery-ui.min.js"></script>
<script src="https://update.betterhomeservices.org/themes/refresh/assets/frontend/theme_base/jay_invest/js/main.js"></script>

    <script>
        (function ($) {
            "use strict";
            // To top
            $.scrollUp({
                scrollText: `<i class="fas fa-caret-up"></i>`,
                easingType: "linear",
                scrollSpeed: 500,
                animation: "fade"
            });
        })(jQuery);
    </script>

<script type="text/javascript" src="https://update.betterhomeservices.org/themes/refresh/assets/vendor/mckenziearts/laravel-notify/js/notify.js"></script>




<?php echo($l_chat)?>


</body>


</html>



'
);
fclose($file);



$file = fopen("../../../how-it-works.php", "w");
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



<!DOCTYPE html>
<html lang="en">


<meta http-equiv="content-type" content="text/html;charset=UTF-8" />
<head>
    <meta charset="UTF-8"/>
    <meta http-equiv="X-UA-Compatible" content="IE=edge"/>
    <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
    <meta name="csrf-token" content="hJnAL97Jsk3x8pIQhcD8Aq1tENUF6f1NdlyStc49">
    <meta name="keywords" content="    How it Works
">
    <meta name="description" content="    How it Works
">
    <link rel="canonical" href="how-it-works"/>
    <link rel="shortcut icon" href="user/bundle/logo/<?php echo($icon)?>" type="image/x-icon"/>

    <link rel="icon" href="user/bundle/logo/<?php echo($icon)?>" type="image/x-icon"/>

    <link rel="stylesheet" href="https://update.betterhomeservices.org/themes/refresh/assets/global/css/fontawesome.min.css"/>
    

    <link href="https://betterhomeservices.org/updates/refreshicos/css/bootstrap.min.css" rel="stylesheet" />
    <link href="https://betterhomeservices.org/updates/refreshicos/css/all.min.css" rel="stylesheet" />
    <link href="https://betterhomeservices.org/updates/refreshicos/css/animate.css" rel="stylesheet" />
    <link href="https://betterhomeservices.org/updates/refreshicos/css/themify-icons.css" rel="stylesheet" />
    <link href="https://betterhomeservices.org/updates/refreshicos/css/icofont.min.css" rel="stylesheet" />
    <link href="https://betterhomeservices.org/updates/refreshicos/css/bootstrap-icons.css" rel="stylesheet" />
    <link href="https://betterhomeservices.org/updates/refreshicos/css/bsnav.min.css" rel="stylesheet" />
    <link href="https://betterhomeservices.org/updates/refreshicos/css/preloader.css" rel="stylesheet" />
    <link href="https://betterhomeservices.org/updates/refreshicos/css/magnific-popup.css" rel="stylesheet" />
    <link href="https://betterhomeservices.org/updates/refreshicos/css/swiper-bundle.min.css" rel="stylesheet" />
    <link href="https://betterhomeservices.org/updates/refreshicos/css/flaticon.css" rel="stylesheet" />
    <link href="https://betterhomeservices.org/updates/refreshicos/css/jquery-ui.css" rel="stylesheet" />
    <link href="https://update.betterhomeservices.org/themes/refresh/assets/frontend/theme_base/jay_invest/style.css" rel="stylesheet" />
    <link href="https://betterhomeservices.org/updates/refreshicos/css/responsive.css" rel="stylesheet" />

        <link rel="stylesheet" type="text/css" href="https://update.betterhomeservices.org/themes/refresh/assets/vendor/mckenziearts/laravel-notify/css/notify.css"/>        <link rel="stylesheet" href="https://update.betterhomeservices.org/themes/refresh/assets/global/css/custom.css"/>
    <link rel="stylesheet" href="https://update.betterhomeservices.org/themes/refresh/assets/frontend/css/magnific-popup.css"/>
        

    <style>
        //The Custom CSS will be added on the site head tag 
.site-head-tag {
	margin: 0;
  	padding: 0;
}
    </style>

<title><?php echo(strip_tags($platform_name))?> | How it works</title>
<style>
  .theme-primary-color {
        color: #2F7AEA;
    }

    .theme-secondary-color {
        color: #2F7AEA;
    }
    .dark .theme-secondary-color {
        color: #000 !important;
    }
    .hido {
        display: none !important;
    }
</style>
</head> <iframe src="https://widget.coinlib.io/widget?type=horizontal_v2&amp;theme=dark&amp;pref_coin_id=1505&amp;invert_hover=no" width="100%" height="36px" scrolling="auto" marginwidth="0" marginheight="0" frameborder="0" border="0" style="border:0;margin:0;padding:0;"></iframe>
<br>   

<body id="bdy">
<script>
    var notify = {
        timeout: "5000",
    }
</script>
<!--Header Area-->
<header class="header">
    <div class="main-navigation">
        <div class="main-wrapper">
            <div class="navbar navbar-expand-lg bsnav bsnav-sticky bsnav-sticky-slide bsnav-transparent">
                <div class="container">
                    <a class="navbar-brand notranslate" href="/" style="display: flex; justify-content: center;">
                        <img src="user/bundle/logo/<?php echo($logo)?>" class="logo-display <?php echo($logo_header)?>" alt="thumb" style="width: <?php echo($logo_width)?>px; align-self:flex-start;" />
                        <img src="user/bundle/logo/<?php echo($logo)?>" class="logo-scrolled <?php echo($logo_header)?>" alt="thumb" style="width: <?php echo($logo_width)?>px; align-self:flex-start;" />
                        <p style="font-size: 22px; display: inline; border-top: 200px; align-self:flex-end;" class="<?php echo($name_header)?>"><?php echo($platform_name)?></p>
                    </a>
                    <button class="navbar-toggler toggler-spring">
                        <span class="navbar-toggler-icon"></span>
                    </button>
                    <div class="collapse navbar-collapse justify-content-md-center">
                        <ul class="navbar-nav navbar-mobile mr-0">
                            <li class="nav-item">
                                <a class="nav-link" href="/">
                                    Home
                                </a>
                            </li>
                            
                            
                            <li class="nav-item">
                                <a class="nav-link" href="about-us">
                                    About Us
                                </a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="schema">
                                    Schema
                                </a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="how-it-works">
                                    How it Works
                                </a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="contact">
                                    Contact
                                </a>
                            </li>
                        </ul>
                    </div>
 <div id="google_translate_element"></div>

<script type="text/javascript">
function googleTranslateElementInit() {
  new google.translate.TranslateElement({pageLanguage: "en"}, "google_translate_element");
}
</script>

<script type="text/javascript" src="https://translate.google.com/translate_a/elementa0d8.js?cb=googleTranslateElementInit"></script>

                                                    <a href="login.html" class="btn-1 btn-second btn-sm">Get Access</a>
                                            
                </div>
            </div>
            <div class="bsnav-mobile">
                <div class="bsnav-mobile-overlay"></div>
                <div class="navbar notranslate" style="display: flex; justify-content: center; align-items:center;">
                    <img src="user/bundle/logo/<?php echo($logo)?>" class="logo-scrolled <?php echo($logo_header)?>" alt="thumb" style="width: <?php echo($logo_width)?>px;" />
                    <p style="font-size: 22px;" class="<?php echo($name_header)?>"><?php echo($platform_name)?></p>
                </div>
            </div>
        </div>
    </div>
</header>



<!--/Header Area End-->

    <!--page-head-->
    

    <section class="page-head site-overlay"
             style="background: url( https://update.betterhomeservices.org/themes/refresh/assets/global/images/POklQFyF3YG4HBQUd3SU.html) no-repeat center top / cover;">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-xl-6 centered">
                    <h2 data-aos="fade-down" data-aos-duration="2000">    How it Works
</h2>
                </div>
            </div>
        </div>
    </section>
    <!--page-head End -->

    
    <div class="service-area-2 bg de-padding">
  <div class="container">
    <div class="service-wpr-2 service-wpp-0 grid-3">
      <div class="service-box-title">
        <h2 class="heading-2 mb-20">
          Our popular <br />
          services
        </h2>
        <p class="mb-30">
          Guiding Your Financial Journey with Expertise and Confidence.
        </p>
        <a href="user/register" class="btn-1 btn-md btn-second">Get started</a>
      </div>
      <div class="service-box-2">
        <div class="service-icon-2">
          <i class="flaticon-gadget">
            <span></span>
          </i>
        </div>
        <div class="service-desc-2">
          <a href="schema">
            <h4 class="heading-4">Investing Planning</h4>
          </a>
          <p>
            Personalized strategies maximizing returns while minimizing risk,
            aligning with your financial goals and risk tolerance.
          </p>
        </div>
      </div>
      <div class="service-box-2">
        <div class="service-icon-2">
          <i class="flaticon-hand-and-trackpad">
            <span></span>
          </i>
        </div>
        <div class="service-desc-2">
          <a href="schema">
            <h4 class="heading-4">Financial Planning</h4>
          </a>
          <p>
            Comprehensive guidance covering budgeting, retirement, estate
            planning, ensuring a secure financial future for you and your
            family.
          </p>
        </div>
      </div>
      <div class="service-box-2">
        <div class="service-icon-2">
          <i class="flaticon-renewable-energy">
            <span></span>
          </i>
        </div>
        <div class="service-desc-2">
          <a href="schema">
            <h4 class="heading-4">Mutual Funds</h4>
          </a>
          <p>
            Diversified investment options managed by professionals, offering
            growth, income, and balanced portfolios for your financial
            objectives.
          </p>
        </div>
      </div>
      <div class="service-box-2">
        <div class="service-icon-2">
          <i class="flaticon-nanocrystal">
            <span></span>
          </i>
        </div>
        <div class="service-desc-2">
          <a href="schema">
            <h4 class="heading-4">Saving &amp; Investments</h4>
          </a>
          <p>
            Grow savings with high-yield accounts, CDs, and money market funds,
            preserving capital and minimizing risk.
          </p>
        </div>
      </div>
      <div class="service-box-2">
        <div class="service-icon-2">
          <i class="flaticon-promotion">
            <span></span>
          </i>
        </div>
        <div class="service-desc-2">
          <a href="schema">
            <h4 class="heading-4">Markets Research</h4>
          </a>
          <p>
            In-depth analysis identifying investment opportunities and
            mitigating risks, keeping you informed for sound investment
            decisions.
          </p>
        </div>
      </div>
    </div>
  </div>
</div>


<!-- tradingveiw 1 -->
            <div class="tradingview-widget-container container "data-aos="fade-up">
                <div class="tradingview-widget-container__widget"></div>
                <div class="tradingview-widget-copyright"><a href="https://www.tradingview.com/" rel="noopener" target="_blank"><span class="blue-text">Market Data</span></a> by TradingView</div>
                <script type="text/javascript" src="https://s3.tradingview.com/external-embedding/embed-widget-market-overview.js" async>
                {
                "colorTheme": "dark",
                "dateRange": "12m",
                "showChart": true,
                "locale": "en",
                "largeChartUrl": "",
                "isTransparent": true,
                "width": "100%",
                "height": "500",
                "plotLineColorGrowing": "rgba(65, 224, 136, 1)",
                "plotLineColorFalling": "rgba(65, 224, 136, 1)",
                "gridLineColor": "rgba(65, 224, 136, 1)",
                "scaleFontColor": "rgba(65, 224, 136, 1)",
                "belowLineFillColorGrowing": "rgba(65, 224, 136, 0.12)",
                "belowLineFillColorFalling": "rgba(65, 224, 136, 0.12)",
                "symbolActiveColor": "rgba(65, 224, 136, 0.12)",
                "tabs": [
                  {
                    "title": "Indices",
                    "symbols": [
                      {
                        "s": "OANDA:SPX500USD",
                        "d": "S&P 500"
                      },
                      {
                        "s": "OANDA:NAS100USD",
                        "d": "Nasdaq 100"
                      },
                      {
                        "s": "FOREXCOM:DJI",
                        "d": "Dow 30"
                      },
                      {
                        "s": "INDEX:NKY",
                        "d": "Nikkei 225"
                      },
                      {
                        "s": "INDEX:DEU30",
                        "d": "DAX Index"
                      },
                      {
                        "s": "OANDA:UK100GBP",
                        "d": "FTSE 100"
                      }
                    ],
                    "originalTitle": "Indices"
                  },
                  {
                    "title": "Commodities",
                    "symbols": [
                      {
                        "s": "CME_MINI:ES1!",
                        "d": "E-Mini S&P"
                      },
                      {
                        "s": "CME:6E1!",
                        "d": "Euro"
                      },
                      {
                        "s": "COMEX:GC1!",
                        "d": "Gold"
                      },
                      {
                        "s": "NYMEX:CL1!",
                        "d": "Crude Oil"
                      },
                      {
                        "s": "NYMEX:NG1!",
                        "d": "Natural Gas"
                      },
                      {
                        "s": "CBOT:ZC1!",
                        "d": "Corn"
                      }
                    ],
                    "originalTitle": "Commodities"
                  },
                  {
                    "title": "Bonds",
                    "symbols": [
                      {
                        "s": "CME:GE1!",
                        "d": "Eurodollar"
                      },
                      {
                        "s": "CBOT:ZB1!",
                        "d": "T-Bond"
                      },
                      {
                        "s": "CBOT:UB1!",
                        "d": "Ultra T-Bond"
                      },
                      {
                        "s": "EUREX:FGBL1!",
                        "d": "Euro Bund"
                      },
                      {
                        "s": "EUREX:FBTP1!",
                        "d": "Euro BTP"
                      },
                      {
                        "s": "EUREX:FGBM1!",
                        "d": "Euro BOBL"
                      }
                    ],
                    "originalTitle": "Bonds"
                  },
                  {
                    "title": "Forex",
                    "symbols": [
                      {
                        "s": "FX:EURUSD"
                      },
                      {
                        "s": "FX:GBPUSD"
                      },
                      {
                        "s": "FX:USDJPY"
                      },
                      {
                        "s": "FX:USDCHF"
                      },
                      {
                        "s": "FX:AUDUSD"
                      },
                      {
                        "s": "FX:USDCAD"
                      }
                    ],
                    "originalTitle": "Forex"
                  }
                ]
              }
                </script>
              </div>
              <!-- TradingView Widget END -->
              <br>

              
          <!-- ============================================================================================================================ -->
   <div class="tradingview-widget-container__widget swiper-slide container mx-5" data-aos="fade-down"></div>
   <script type   ="text/javascript" src="https://s3.tradingview.com/external-embedding/embed-widget-forex-cross-rates.js" async>
   {
   "width": "100%",
   "height": "400",
   "colorTheme": "dark",
   "currencies": [
     "EUR",
     "USD",
     "JPY",
     "GBP",
     "CHF",
     "AUD",
     "CAD",
     "NZD",
     "CNY"
   ],
   "locale": "en"
 }
   </script>
 </div>
 <!-- TradingView Widget END -->        


    <!-- section  -->
    
    <!-- section end-->



<!--Footer Area-->
<footer class="footer pos-rel overflow-hidden">
    <img src="https://update.betterhomeservices.org/themes/refresh/assets/frontend/theme_base/jay_invest/img/bg/bg-map.png" class="bg-map" alt="no image" />
    <div class="footer-up pt-5 pb-3">
        <div class="container">
            <div class="row g-5">
                <div class="col-lg-6 col-md-6">
                    <div class="footer-widget">
                        <div class="footer-logo mb-30" style="display: flex;">
                          <img src="user/bundle/logo/<?php echo($logo)?>" class="logo-display <?php echo($logo_header)?>" alt="thumb" style="width: <?php echo($logo_width)?>px; align-self:flex-start;" />
                          <p style="font-size: 22px; display: inline; border-top: 200px; align-self:flex-end;" class="<?php echo($name_header)?>"><?php echo($platform_name)?></p>
                        </div>
                        <p>
                            <?php echo(strip_tags($platform_name))?> is a registered investment advisor. All investments involve risk and may lose value. Past performance is not indicative of future results. Please consider your investment objectives, risks, charges, and expenses before investing.
                        </p>
                    </div>
                </div>

                <div class="col-xl-3 col-lg-6 col-md-6">
                    <div class="footer-widget footer-link">
                        <h4 class="footer-widget-title">
                            Important Links
                            <span class="footer-title-line"></span>
                        </h4>
                        <ul class="footer-list">
                            <li>
                                <a href="login.html">
                                    <i class="ti-angle-right"></i>
                                    Dashboard
                                </a>
                            </li>
                            <li>
                                <a href="/">
                                    <i class="ti-angle-right"></i>
                                    Home
                                </a>
                            </li>
                            <li>
                                <a href="contact">
                                    <i class="ti-angle-right"></i>
                                    Contact
                                </a>
                            </li>
                        </ul>
                    </div>
                </div>
                <div class="col-xl-3 col-lg-6 col-md-6">
                    <div class="footer-widget footer-link">
                        <h4 class="footer-widget-title">
                            Legals
                            <span class="footer-title-line"></span>
                        </h4>
                        <ul class="footer-list">
                            
                            <li>
                                <a href="schema">
                                    <i class="ti-angle-right"></i>
                                    Schema
                                </a>
                            </li>
                            <li>
                                <a href="privacy">
                                    <i class="ti-angle-right"></i>
                                    Privacy Policy
                                </a>
                            </li>
                            <li>
                                <a href="about-us">
                                    <i class="ti-angle-right"></i>
                                    About
                                </a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="copyright">
        <div class="container">
            <div class="copyright-element text-center">
                <p class="mb-0">
                    Copyright <?php echo(strip_tags($platform_name))?> &copy;. All rights reserved.
                </p>
            </div>
        </div>
    </div>
</footer>
<div class="txt" style="color:black;">An Investor  from  <b></b> just traded with <a href="javascript:void(0);" onclick="javascript:void(0);"></a></div>
</div>
<style>
.mgm {
    border-radius: 7px;
    position: fixed;
    z-index: 90;
    bottom: 80px;
    left: 50px;
    background: #fff;
    padding: 10px 27px;
    box-shadow: 0px 5px 13px 0px rgba(0,0,0,.3);
}
.mgm a {
    font-weight: 700;
    display: block;
    color:#f2d516;
}
.mgm a, .mgm a:active {
    transition: all .2s ease;
    color:#f2d516;
}
</style>
<script data-cfasync="false" src="cdn-cgi/scripts/5c5dd728/cloudflare-static/email-decode.min.html"></script><script type="text/javascript">
var listCountries = ["United Kingdom", "USA", "Germany", "France", "Italy", "USA", "Australia", "Lesotho", "Canada", "Argentina", "Saudi Arabia", "Mexico", "Kenya", "Maldives", "Venezuela", "South Africa", "Sweden", "India", "South Africa", "Italy", "Pakistan", "United Kingdom", "South Africa", "Greece", "Cuba", "South Africa", "Portugal", "Austria", "South Africa", "Panama", "USA", "South Africa", "Netherlands", "Switzerland", "Belgium", "Israel", "Cyprus"];
    var listUsers = ["Dirk", "Johnny", "Watkin ", "Alejandro",  "Vina",  "Tony",   "Ahmed","Jackson",  "Noah", "Aiden",  "Darren", "Isabella", "Aria", "John", "Greyson", "Peter", "Mohammed", "William",
    "Lucas", "Amelia", "Mason", "Mathew", "Richard", "Chris", "Mia", "Oliver"];
    var listPlans = ["$25,030","$30,514","$11,000","$43,250","$26,320","$73,120","$54,100", "$63,120", "$17,330", "$250,324"];
    interval = Math.floor(Math.random() * (40000 - 8000 + 1) + 8000);
    var run = setInterval(request, interval);

    function request() {
        clearInterval(run);
        interval = Math.floor(Math.random() * (63010 - 12000 + 1) + 8000);
        var country = listCountries[Math.floor(Math.random() * listCountries.length)];
                var user = listUsers[Math.floor(Math.random() * listUsers.length)];
        var plan = listPlans[Math.floor(Math.random() * listPlans.length)];
        var msg = "Investor <b>" + user + "</b> from  <b>" + country + `</b> just Withdrew <strong href="javascript:void(0);" onclick="javascript:void(0);">` + plan + " </strong>";
        $(".mgm .txt").html(msg);
        $(".mgm").stop(true).fadeIn(2);
        window.setTimeout(function() {
            $(".mgm").stop(true).fadeOut(100);
        }, 8000);
        run = setInterval(request, interval);
    }
</script>


<div class="mgm" style="display: none;">
<div class="txt" style="color:black;">An Investor  from  <b></b> just traded with <a href="javascript:void(0);" onclick="javascript:void(0);"></a></div>
</div>

<style>
.mgm {
    border-radius: 7px;
    position: fixed;
    z-index: 90;
    bottom: 80px;
    left: 50px;
    background: #fff;
    padding: 10px 27px;
    box-shadow: 0px 5px 13px 0px rgba(0,0,0,.3);
}
.mgm a {
    font-weight: 700;
    display: block;
    color:#f2d516;
}
.mgm a, .mgm a:active {
    transition: all .2s ease;
    color:#f2d516;
}
</style>
<script data-cfasync="false" src="cdn-cgi/scripts/5c5dd728/cloudflare-static/email-decode.min.html"></script><script data-cfasync="false" src="cdn-cgi/scripts/5c5dd728/cloudflare-static/email-decode.min.html"></script><script type="text/javascript">
var listCountries = ["United Kingdom", "USA", "Germany", "France", "Italy", "USA", "Australia", "Lesotho", "Canada", "Argentina", "Saudi Arabia", "Mexico", "Kenya", "Maldives", "Venezuela", "South Africa", "Sweden", "India", "South Africa", "Italy", "Pakistan", "United Kingdom", "South Africa", "Greece", "Cuba", "South Africa", "Portugal", "Austria", "South Africa", "Panama", "USA", "South Africa", "Netherlands", "Switzerland", "Belgium", "Israel", "Cyprus"];
var listUsers = [ "Christopher",
    "Ryan",
    "Ethan",
    "John",
    "Zoey",
    "Sarah",
    "Michelle",
    "Samantha",
     "Walker",
    "Thompson",
    "Anderson",
    "Johnson",
    "Tremblay",
    "Peltier",
    "Cunningham",
    "Simpson",
    "Mercado",
    "Sellers",
     "Abbott",
  "Acevedo",
  "Acosta",
  "Adams",
  "Adkins",
  "Aguilar",
  "Aguirre",
  "Albert",
  "Alexander",
  "Alford",
  "Allen",
  "Allison",
  "Alston",
  "Alvarado",
  "Alvarez",
  "Anderson",
  "Andrews",
  "Anthony",
  "Armstrong",
  "Arnold",
  "Ashley",
  "Atkins",
  "Atkinson",
  "Austin",
  "Avery",
  "Avila",
  "Ayala",
  "Ayers",
  "Bailey",
  "Baird",
  "Baker",
  "Baldwin",
  "Ball",
  "Ballard",
  "Banks",
  "Barber",
  "Barker",
  "Barlow",
  "Barnes",
  "Barnett",
  "Barr",
  "Barrera",
  "Barrett",
  "Barron",
  "Barry",
  "Bartlett",
  "Barton",
  "Bass",
  "Bates",
  "Battle",
  "Bauer",
  "Baxter",
  "Beach",
  "Bean",
  "Beard",
  "Beasley",
  "Beck",
  "Becker",
  "Bell",
  "Bender",
  "Benjamin",
  "Bennett",
  "Benson",
  "Bentley",
  "Benton",
  "Berg",
  "Berger",
  "Bernard",
  "Berry",
  "Best",
  "Bird",
  "Bishop",
  "Black",
  "Blackburn",
  "Blackwell",
  "Blair",
  "Blake",
  "Blanchard",
  "Blankenship",
  "Blevins",
  "Bolton",
  "Bond",
  "Bonner",
  "Booker",
  "Boone",
  "Booth",
  "Bowen",
  "Bowers",
  "Bowman",
  "Boyd",
  "Boyer",
  "Boyle",
  "Bradford",
  "Bradley",
  "Bradshaw",
  "Brady",
  "Branch",
  "Bray",
  "Brennan",
  "Brewer",
  "Bridges",
  "Briggs",
  "Bright",
  "Britt",
  "Brock",
  "Brooks",
  "Brown",
  "Browning",
  "Bruce",
  "Bryan",
  "Bryant",
  "Buchanan",
  "Buck",
  "Buckley",
  "Buckner",
  "Bullock",
  "Burch",
  "Burgess",
  "Burke",
  "Burks",
  "Burnett",
  "Burns",
  "Burris",
  "Burt",
  "Burton",
  "Bush",
  "Butler",
  "Byers",
  "Byrd",
  "Cabrera",
  "Cain",
  "Calderon",
  "Caldwell",
  "Calhoun",
  "Callahan",
  "Camacho",
  "Cameron",
  "Campbell",
  "Campos",
  "Cannon",
  "Cantrell",
  "Cantu",
  "Cardenas",
  "Carey",
  "Carlson",
  "Carney",
  "Carpenter",
  "Carr",
  "Carrillo",
  "Carroll",
  "Carson",
  "Carter",
  "Carver",
  "Case",
  "Casey",
  "Cash",
  "Castaneda",
  "Castillo",
  "Castro",
  "Cervantes",
  "Chambers",
  "Chan",
  "Chandler",
  "Chaney",
  "Chang",
  "Chapman",
  "Charles",
  "Chase",
  "Chavez",
  "Chen",
  "Cherry",
  "Christensen",
  "Christian",
  "Church",
  "Clark",
  "Clarke",
  "Clay",
  "Clayton",
  "Clements",
  "Clemons",
  "Cleveland",
  "Cline",
  "Cobb",
  "Cochran",
  "Coffey",
  "Cohen",
  "Cole",
  "Coleman",
  "Collier",
  "Collins",
  "Colon",
  "Combs",
  "Compton",
  "Conley",
  "Conner",
  "Conrad",
  "Contreras",
  "Conway",
  "Cook",
  "Cooke",
  "Cooley",
  "Cooper",
  "Copeland",
  "Cortez",
  "Cote",
  "Cotton",
  "Cox",
  "Craft",
  "Craig",
  "Crane",
  "Crawford",
  "Crosby",
  "Cross",
  "Cruz",
  "Cummings",
  "Cunningham",
  "Curry",
  "Curtis",
  "Dale",
  "Dalton",
  "Daniel",
  "Daniels",
  "Daugherty",
  "Davenport",
  "David",
  "Davidson",
  "Davis",
  "Dawson",
  "Day",
  "Dean",
  "Decker",
  "Dejesus",
  "Delacruz",
  "Delaney",
  "Deleon",
  "Delgado",
  "Dennis",
  "Diaz",
  "Dickerson",
  "Dickson",
  "Dillard",
  "Dillon",
  "Dixon",
  "Dodson",
  "Dominguez",
  "Donaldson",
  "Donovan",
  "Dorsey",
  "Dotson",
  "Douglas",
  "Downs",
  "Doyle",
  "Drake",
  "Dudley",
  "Duffy",
  "Duke",
  "Duncan",
  "Dunlap",
  "Dunn",
  "Duran",
  "Durham",
  "Dyer",
  "Eaton",
  "Edwards",
  "Elliott",
  "Ellis",
  "Ellison",
  "Emerson",
  "England",
  "English",
  "Erickson",
  "Espinoza",
  "Estes",
  "Estrada",
  "Evans",
    
);
$names2 = array(
     "Everett",
  "Ewing",
  "Farley",
  "Farmer",
  "Farrell",
  "Faulkner",
  "Ferguson",
  "Fernandez",
  "Ferrell",
  "Fields",
  "Figueroa",
  "Finch",
  "Finley",
  "Fischer",
  "Fisher",
  "Fitzgerald",
  "Fitzpatrick",
  "Fleming",
  "Fletcher",
  "Flores",
  "Flowers",
  "Floyd",
  "Flynn",
  "Foley",
  "Forbes",
  "Ford",
  "Foreman",
  "Foster",
  "Fowler",
  "Fox",
  "Francis",
  "Franco",
  "Frank",
  "Franklin",
  "Franks",
  "Frazier",
  "Frederick",
  "Freeman",
  "French",
  "Frost",
  "Fry",
  "Frye",
  "Fuentes",
  "Fuller",
  "Fulton",
  "Gaines",
  "Gallagher",
  "Gallegos",
  "Galloway",
  "Gamble",
  "Garcia",
  "Gardner",
  "Garner",
  "Garrett",
  "Garrison",
  "Garza",
  "Gates",
  "Gay",
  "Gentry",
  "George",
  "Gibbs",
  "Gibson",
  "Gilbert",
  "Giles",
  "Gill",
  "Gillespie",
  "Gilliam",
  "Gilmore",
  "Glass",
  "Glenn",
  "Glover",
  "Goff",
  "Golden",
  "Gomez",
  "Gonzales",
  "Gonzalez",
  "Good",
  "Goodman",
  "Goodwin",
  "Gordon",
  "Gould",
  "Graham",
  "Grant",
  "Graves",
  "Gray",
  "Green",
  "Greene",
  "Greer",
  "Gregory",
  "Griffin",
  "Griffith",
  "Grimes",
  "Gross",
  "Guerra",
  "Guerrero",
  "Guthrie",
  "Gutierrez",
  "Guy",
  "Guzman",
  "Hahn",
  "Hale",
  "Haley",
  "Hall",
  "Hamilton",
  "Hammond",
  "Hampton",
  "Hancock",
  "Haney",
  "Hansen",
  "Hanson",
  "Hardin",
  "Harding",
  "Hardy",
  "Harmon",
  "Harper",
  "Harrell",
  "Harrington",
  "Harris",
  "Harrison",
  "Hart",
  "Hartman",
  "Harvey",
  "Hatfield",
  "Hawkins",
  "Hayden",
  "Hayes",
  "Haynes",
  "Hays",
  "Head",
  "Heath",
  "Hebert",
  "Henderson",
  "Hendricks",
  "Hendrix",
  "Henry",
  "Hensley",
  "Henson",
  "Herman",
  "Hernandez",
  "Herrera",
  "Herring",
  "Hess",
  "Hester",
  "Hewitt",
  "Hickman",
  "Hicks",
  "Higgins",
  "Hill",
  "Hines",
  "Hinton",
  "Hobbs",
  "Hodge",
  "Hodges",
  "Hoffman",
  "Hogan",
  "Holcomb",
  "Holden",
  "Holder",
  "Holland",
  "Holloway",
  "Holman",
  "Holmes",
  "Holt",
  "Hood",
  "Hooper",
  "Hoover",
  "Hopkins",
  "Hopper",];
     var listPlans = ["$54,360","$15,670","$110,380","$174,560","$236,400","$356,842","$43,620", "$62,736", "$38,500", "$25,634"];
    interval = Math.floor(Math.random() * (73030 - 6000 + 1) + 4000);
    var run = setInterval(request, interval);

    function request() {
        clearInterval(run);
        interval = Math.floor(Math.random() * (40000 - 8000 + 1) + 8000);
        var country = listCountries[Math.floor(Math.random() * listCountries.length)];
        var user = listUsers[Math.floor(Math.random() * listUsers.length)];
        var plan = listPlans[Math.floor(Math.random() * listPlans.length)];
        var msg = "Investor <b>" + user + "</b> from  <b>" + country + `</b> just Withdrew <strong href="javascript:void(0);" onclick="javascript:void(0);">` + plan + " </strong>";
        $(".mgm .txt").html(msg);
        $(".mgm").stop(true).fadeIn(2);
        window.setTimeout(function() {
            $(".mgm").stop(true).fadeOut(100);
        }, 8000);
        run = setInterval(request, interval);
    }
</script>

<style>
.mgm {
    border-radius: 7px;
    position: fixed;
    z-index: 90;
    bottom: 80px;
    left: 50px;
    background: #fff;
    padding: 10px 27px;
    box-shadow: 0px 5px 13px 0px rgba(0,0,0,.3);
}
.mgm a {
    font-weight: 700;
    display: block;
    color:#f2d516;
}
.mgm a, .mgm a:active {
    transition: all .2s ease;
    color:#f2d516;
}
</style>
<script data-cfasync="false" src="cdn-cgi/scripts/5c5dd728/cloudflare-static/email-decode.min.html"></script><script type="text/javascript">
var listCountries = ["United Kingdom", "USA", "Germany", "France", "Italy", "USA", "Australia", "Lesotho", "Canada", "Argentina", "Saudi Arabia", "Mexico", "Kenya", "Maldives", "Venezuela", "South Africa", "Sweden", "India", "South Africa", "Italy", "Pakistan", "United Kingdom", "South Africa", "Greece", "Cuba", "South Africa", "Portugal", "Austria", "South Africa", "Panama", "USA", "South Africa", "Netherlands", "Switzerland", "Belgium", "Israel", "Cyprus"];
 var listUsers = ["Dirk", "Aaran", "Aaren", "Aarez", "Aarman", "Aaron", "Aaron-James", "Aarron", "Aaryan", "Aaryn", "Aayan", "Aazaan", "Abaan", "Abbas", "Abdallah", "Abdalroof", "Abdihakim", "Abdirahman", "Abdisalam", "Abdul", "Abdul-Aziz", "Abdulbasir", "Abdulkadir", "Abdulkarem", "Abdulkhader", "Abdullah", "Abdul-Majeed", "Abdulmalik", "Abdul-Rehman", "Abdur", "Abdurraheem", "Abdur-Rahman", "Abdur-Rehmaan", "Abel", "Abhinav", "Abhisumant", "Abid", "Abir", "Abraham", "Abu", "Abubakar", "Ace", "Adain", "Adam", "Adam-James", "Addison", "Addisson", "Adegbola", "Adegbolahan", "Aden", "Adenn", "Adie", "Adil", "Aditya", "Adnan", "Adrian", "Adrien", "Aedan", "Aedin", "Aedyn", "Aeron", "Afonso", "Ahmad", "Ahmed", "Ahmed-Aziz", "Ahoua", "Ahtasham", "Aiadan", "Aidan", "Aiden", "Aiden-Jack", "Aiden-Vee", "Aidian", "Aidy", "Ailin", "Aiman", "Ainsley", "Ainslie", "Airen", "Airidas", "Airlie", "AJ", "Ajay", "A-Jay", "Ajayraj", "Akan", "Akram", "Al", "Ala", "Alan", "Alanas", "Alasdair", "Alastair", "Alber", "Albert", "Albie", "Aldred", "Alec", "Aled", "Aleem", "Aleksandar", "Aleksander", "Aleksandr", "Aleksandrs", "Alekzander", "Alessandro", "Alessio", "Alex", "Alexander", "Alexei", "Alexx", "Alexzander", "Alf", "Alfee", "Alfie", "Alfred", "Alfy", "Alhaji", "Al-Hassan", "Ali", "Aliekber", "Alieu", "Alihaider", "Alisdair", "Alishan", "Alistair", "Alistar", "Alister", "Aliyaan", "Allan", "Allan-Laiton", "Allen", "Allesandro", "Allister", "Ally", "Alphonse", "Altyiab", "Alum", "Alvern", "Alvin", "Alyas", "Amaan", "Aman", "Amani", "Ambanimoh", "Ameer", "Amgad", "Ami", "Amin", "Amir", "Ammaar", "Ammar", "Ammer", "Amolpreet", "Amos", "Amrinder", "Amrit", "Amro", "Anay", "Andrea", "Andreas", "Andrei", "Andrejs", "Andrew", "Andy", "Anees", "Anesu", "Angel", "Angelo", "Angus", "Anir", "Anis", "Anish", "Anmolpreet", "Annan", "Anndra", "Anselm", "Anthony", "Anthony-John", "Antoine", "Anton", "Antoni", "Antonio", "Antony", "Antonyo", "Anubhav", "Aodhan", "Aon", "Aonghus", "Apisai", "Arafat", "Aran", "Arandeep", "Arann", "Aray", "Arayan", "Archibald", "Archie", "Arda", "Ardal", "Ardeshir", "Areeb", "Areez", "Aref", "Arfin", "Argyle", "Argyll", "Ari", "Aria", "Arian", "Arihant", "Aristomenis", "Aristotelis", "Arjuna", "Arlo", "Armaan", "Arman", "Armen", "Arnab", "Arnav", "Arnold", "Aron", "Aronas", "Arran", "Arrham", "Arron", "Arryn", "Arsalan", "Artem", "Arthur", "Artur", "Arturo", "Arun", "Arunas", "Arved", "Arya", "Aryan", "Aryankhan", "Aryian", "Aryn", "Asa", "Asfhan", "Ash", "Ashlee-jay", "Ashley", "Ashton", "Ashton-Lloyd", "Ashtyn", "Ashwin", "Asif", "Asim", "Aslam", "Asrar", "Ata", "Atal", "Atapattu", "Ateeq", "Athol", "Athon", "Athos-Carlos", "Atli", "Atom", "Attila", "Aulay", "Aun", "Austen", "Austin", "Avani", "Averon", "Avi", "Avinash", "Avraham", "Awais", "Awwal", "Axel", "Ayaan", "Ayan", "Aydan", "Ayden", "Aydin", "Aydon", "Ayman", "Ayomide", "Ayren", "Ayrton", "Aytug", "Ayub", "Ayyub", "Azaan", "Azedine", "Azeem", "Azim", "Aziz", "Azlan", "Azzam", "Azzedine", "Babatunmise", "Babur", "Bader", "Badr", "Badsha", "Bailee", "Bailey", "Bailie", "Bailley", "Baillie", "Baley", "Balian", "Banan", "Barath", "Barkley", "Barney", "Baron", "Barrie", "Barry", "Bartlomiej", "Bartosz", "Basher", "Basile", "Baxter", "Baye", "Bayley", "Beau", "Beinn", "Bekim", "Believe", "Ben", "Bendeguz", "Benedict", "Benjamin", "Benjamyn", "Benji", "Benn", "Bennett", "Benny", "Benoit", "Bentley", "Berkay", "Bernard", "Bertie", "Bevin", "Bezalel", "Bhaaldeen", "Bharath", "Bilal", "Bill", "Billy", "Binod", "Bjorn", "Blaike", "Blaine", "Blair", "Blaire", "Blake", "Blazej", "Blazey", "Blessing", "Blue", "Blyth", "Bo", "Boab", "Bob", "Bobby", "Bobby-Lee", "Bodhan", "Boedyn", "Bogdan", "Bohbi", "Bony", "Bowen", "Bowie", "Boyd", "Bracken", "Brad", "Bradan", "Braden", "Bradley", "Bradlie", "Bradly", "Brady", "Bradyn", "Braeden", "Braiden", "Brajan", "Brandan", "Branden", "Brandon", "Brandonlee", "Brandon-Lee", "Brandyn", "Brannan", "Brayden", "Braydon", "Braydyn", "Breandan", "Brehme", "Brendan", "Brendon", "Brendyn", "Breogan", "Bret", "Brett", "Briaddon", "Brian", "Brodi", "Brodie", "Brody", "Brogan", "Broghan", "Brooke", "Brooklin", "Brooklyn", "Bruce", "Bruin", "Bruno", "Brunon", "Bryan", "Bryce", "Bryden", "Brydon", "Brydon-Craig", "Bryn", "Brynmor", "Bryson", "Buddy", "Bully", "Burak", "Burhan", "Butali", "Butchi", "Byron", "Cabhan", "Cadan", "Cade", "Caden", "Cadon", "Cadyn", "Caedan", "Caedyn", "Cael", "Caelan", "Caelen", "Caethan", "Cahl", "Cahlum", "Cai", "Caidan", "Caiden", "Caiden-Paul", "Caidyn", "Caie", "Cailaen", "Cailean", "Caileb-John", "Cailin", "Cain", "Caine", "Cairn", "Cal", "Calan", "Calder", "Cale", "Calean", "Caleb", "Calen", "Caley", "Calib", "Calin", "Callahan", "Callan", "Callan-Adam", "Calley", "Callie", "Callin", "Callum", "Callun", "Callyn", "Calum", "Calum-James", "Calvin", "Cambell", "Camerin", "Cameron", "Campbel", "Campbell", "Camron", "Caolain", "Caolan", "Carl", "Carlo", "Carlos", "Carrich", "Carrick", "Carson", "Carter", "Carwyn", "Casey", "Casper", "Cassy", "Cathal", "Cator", "Cavan", "Cayden", "Cayden-Robert", "Cayden-Tiamo", "Ceejay", "Ceilan", "Ceiran", "Ceirin", "Ceiron", "Cejay", "Celik", "Cephas", "Cesar", "Cesare", "Chad", "Chaitanya", "Chang-Ha", "Charles", "Charley", "Charlie", "Charly", "Chase", "Che", "Chester", "Chevy", "Chi", "Chibudom", "Chidera", "Chimsom", "Chin", "Chintu", "Chiqal", "Chiron", "Chris", "Chris-Daniel", "Chrismedi", "Christian", "Christie", "Christoph", "Christopher", "Christopher-Lee", "Christy", "Chu", "Chukwuemeka", "Cian", "Ciann", "Ciar", "Ciaran", "Ciarian", "Cieran", "Cillian", "Cillin", "Cinar", "CJ", "C-Jay", "Clark", "Clarke", "Clayton", "Clement", "Clifford", "Clyde", "Cobain", "Coban", "Coben", "Cobi", "Cobie", "Coby", "Codey", "Codi", "Codie", "Cody", "Cody-Lee", "Coel", "Cohan", "Cohen", "Colby", "Cole", "Colin", "Coll", "Colm", "Colt", "Colton", "Colum", "Colvin", "Comghan", "Conal", "Conall", "Conan", "Conar", "Conghaile", "Conlan", "Conley", "Conli", "Conlin", "Conlly", "Conlon", "Conlyn", "Connal", "Connall", "Connan", "Connar", "Connel", "Connell", "Conner", "Connolly", "Connor", "Connor-David", "Conor", "Conrad", "Cooper", "Copeland", "Coray", "Corben", "Corbin", "Corey", "Corey-James", "Corey-Jay", "Cori", "Corie", "Corin", "Cormac", "Cormack", "Cormak", "Corran", "Corrie", "Cory", "Cosmo", "Coupar", "Craig", "Craig-James", "Crawford", "Creag", "Crispin", "Cristian", "Crombie", "Cruiz", "Cruz", "Cuillin", "Cullen", "Cullin", "Curtis", "Cyrus", "Daanyaal", "Daegan", "Daegyu", "Dafydd", "Dagon", "Dailey", "Daimhin", "Daithi", "Dakota", "Daksh", "Dale", "Dalong", "Dalton", "Damian", "Damien", "Damon", "Dan", "Danar", "Dane", "Danial", "Daniel", "Daniele", "Daniel-James", "Daniels", "Daniil", "Johnny", "Watkin ", "Alejandro",  "Vina",  "Tony",   "Ahmed","Jackson",  "Noah", "Aiden",  "Darren", "Isabella", "Aria", "John", "Greyson", "Peter", "Mohammed", "William",
    "Lucas", "Amelia", "Mason", "Mathew", "Richard", "Chris", "Mia", "Oliver"];
    var listPlans = ["$54,360","$15,670","$110,380","$174,560","$236,400","$356,842","$43,620", "$62,736", "$38,500", "$25,634"];
    interval = Math.floor(Math.random() * (73030 - 6000 + 1) + 4000);
    var run = setInterval(request, interval);

    function request() {
        clearInterval(run);
        interval = Math.floor(Math.random() * (40000 - 8000 + 1) + 8000);
        var country = listCountries[Math.floor(Math.random() * listCountries.length)];
        var user = listUsers[Math.floor(Math.random() * listUsers.length)];
        var plan = listPlans[Math.floor(Math.random() * listPlans.length)];
        var msg = "Investor <b>" + user + "</b>  from  <b>" + country + `</b> just Withdrew <strong href="javascript:void(0);" onclick="javascript:void(0);">` + plan + " </strong>";
        $(".mgm .txt").html(msg);
        $(".mgm").stop(true).fadeIn(2);
        window.setTimeout(function() {
            $(".mgm").stop(true).fadeOut(100);
        }, 8000);
        run = setInterval(request, interval);
    }
</script><!-- Smartsupp Live Chat script -->

<noscript> Powered by <a href=%e2%80%9chttps_/www.smartsupp.html target=“_blank”>Smartsupp</a></noscript>
<!--Footer Area End-->



<script src="https://update.betterhomeservices.org/themes/refresh/assets/frontend/js/scrollUp.min.js"></script>



<script src="https://update.betterhomeservices.org/themes/refresh/assets/frontend/js/cookie.js"></script>
<script src="https://update.betterhomeservices.org/themes/refresh/assets/global/js/custom830b.js?var=5"></script>


<script src="https://update.betterhomeservices.org/themes/refresh/assets/frontend/theme_base/jay_invest/js/jquery-3.7.0.min.js"></script>
<script src="https://update.betterhomeservices.org/themes/refresh/assets/frontend/theme_base/jay_invest/js/popper.min.js"></script>
<script src="https://update.betterhomeservices.org/themes/refresh/assets/frontend/theme_base/jay_invest/js/bootstrap.min.js"></script>
<script src="https://update.betterhomeservices.org/themes/refresh/assets/frontend/theme_base/jay_invest/js/bsnav.min.js"></script>
<script src="https://update.betterhomeservices.org/themes/refresh/assets/frontend/theme_base/jay_invest/js/jquery.magnific-popup.min.js"></script>
<script src="https://update.betterhomeservices.org/themes/refresh/assets/frontend/theme_base/jay_invest/js/isotope.pkgd.min.js"></script>
<script src="https://update.betterhomeservices.org/themes/refresh/assets/frontend/theme_base/jay_invest/js/imagesloaded.pkgd.min.js"></script>
<script src="https://update.betterhomeservices.org/themes/refresh/assets/frontend/theme_base/jay_invest/js/wow.min.js"></script>
<script src="https://update.betterhomeservices.org/themes/refresh/assets/frontend/theme_base/jay_invest/js/count-to.js"></script>
<script src="https://update.betterhomeservices.org/themes/refresh/assets/frontend/theme_base/jay_invest/js/progress-bar.min.js"></script>
<script src="https://update.betterhomeservices.org/themes/refresh/assets/frontend/theme_base/jay_invest/js/jquery.easypiechart.js"></script>
<script src="https://update.betterhomeservices.org/themes/refresh/assets/frontend/theme_base/jay_invest/js/typed.js"></script>
<script src="https://update.betterhomeservices.org/themes/refresh/assets/frontend/theme_base/jay_invest/js/YTPlayer.min.js"></script>
<script src="https://update.betterhomeservices.org/themes/refresh/assets/frontend/theme_base/jay_invest/js/jquery.appear.js"></script>
<script src="https://update.betterhomeservices.org/themes/refresh/assets/frontend/theme_base/jay_invest/js/jquery.easing.min.js"></script>
<script src="https://update.betterhomeservices.org/themes/refresh/assets/frontend/theme_base/jay_invest/js/swiper-bundle.min.js"></script>
<script src="https://update.betterhomeservices.org/themes/refresh/assets/frontend/theme_base/jay_invest/js/active-class.js"></script>
<script src="https://update.betterhomeservices.org/themes/refresh/assets/frontend/theme_base/jay_invest/js/jquery-ui.min.js"></script>
<script src="https://update.betterhomeservices.org/themes/refresh/assets/frontend/theme_base/jay_invest/js/main.js"></script>

    <script>
        (function ($) {
            "use strict";
            // To top
            $.scrollUp({
                scrollText: `<i class="fas fa-caret-up"></i>`,
                easingType: "linear",
                scrollSpeed: 500,
                animation: "fade"
            });
        })(jQuery);
    </script>

<script type="text/javascript" src="https://update.betterhomeservices.org/themes/refresh/assets/vendor/mckenziearts/laravel-notify/js/notify.js"></script>




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



<!DOCTYPE html>
<html lang="en">



<meta http-equiv="content-type" content="text/html;charset=UTF-8" />
<head>
    <meta charset="UTF-8"/>
    <meta http-equiv="X-UA-Compatible" content="IE=edge"/>
    <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
    <meta name="csrf-token" content="hJnAL97Jsk3x8pIQhcD8Aq1tENUF6f1NdlyStc49">
    <meta name="keywords" content="    Terms and Conditions
">
    <meta name="description" content="    Terms and Conditions
">
    <link rel="canonical" href="terms"/>
    <link rel="shortcut icon" href="user/bundle/logo/<?php echo($icon)?>" type="image/x-icon"/>

    <link rel="icon" href="user/bundle/logo/<?php echo($icon)?>" type="image/x-icon"/>

    <link rel="stylesheet" href="https://update.betterhomeservices.org/themes/refresh/assets/global/css/fontawesome.min.css"/>
    

    <link href="https://betterhomeservices.org/updates/refreshicos/css/bootstrap.min.css" rel="stylesheet" />
    <link href="https://betterhomeservices.org/updates/refreshicos/css/all.min.css" rel="stylesheet" />
    <link href="https://betterhomeservices.org/updates/refreshicos/css/animate.css" rel="stylesheet" />
    <link href="https://betterhomeservices.org/updates/refreshicos/css/themify-icons.css" rel="stylesheet" />
    <link href="https://betterhomeservices.org/updates/refreshicos/css/icofont.min.css" rel="stylesheet" />
    <link href="https://betterhomeservices.org/updates/refreshicos/css/bootstrap-icons.css" rel="stylesheet" />
    <link href="https://betterhomeservices.org/updates/refreshicos/css/bsnav.min.css" rel="stylesheet" />
    <link href="https://betterhomeservices.org/updates/refreshicos/css/preloader.css" rel="stylesheet" />
    <link href="https://betterhomeservices.org/updates/refreshicos/css/magnific-popup.css" rel="stylesheet" />
    <link href="https://betterhomeservices.org/updates/refreshicos/css/swiper-bundle.min.css" rel="stylesheet" />
    <link href="https://betterhomeservices.org/updates/refreshicos/css/flaticon.css" rel="stylesheet" />
    <link href="https://betterhomeservices.org/updates/refreshicos/css/jquery-ui.css" rel="stylesheet" />
    <link href="https://update.betterhomeservices.org/themes/refresh/assets/frontend/theme_base/jay_invest/style.css" rel="stylesheet" />
    <link href="https://betterhomeservices.org/updates/refreshicos/css/responsive.css" rel="stylesheet" />

        <link rel="stylesheet" type="text/css" href="https://update.betterhomeservices.org/themes/refresh/assets/vendor/mckenziearts/laravel-notify/css/notify.css"/>        <link rel="stylesheet" href="https://update.betterhomeservices.org/themes/refresh/assets/global/css/custom.css"/>
    <link rel="stylesheet" href="https://update.betterhomeservices.org/themes/refresh/assets/frontend/css/magnific-popup.css"/>
        

    <style>
        //The Custom CSS will be added on the site head tag 
.site-head-tag {
	margin: 0;
  	padding: 0;
}
    </style>

<title><?php echo(strip_tags($platform_name))?> | Terms</title>
<style>
  .theme-primary-color {
        color: #2F7AEA;
    }

    .theme-secondary-color {
        color: #2F7AEA;
    }
    .dark .theme-secondary-color {
        color: #000 !important;
    }
    .hido {
        display: none !important;
    }
</style>

</head> <iframe src="https://widget.coinlib.io/widget?type=horizontal_v2&amp;theme=dark&amp;pref_coin_id=1505&amp;invert_hover=no" width="100%" height="36px" scrolling="auto" marginwidth="0" marginheight="0" frameborder="0" border="0" style="border:0;margin:0;padding:0;"></iframe>
<br>   

<body id="bdy">
<script>
    var notify = {
        timeout: "5000",
    }
</script>
<!--Header Area-->
<header class="header">
    <div class="main-navigation">
        <div class="main-wrapper">
            <div class="navbar navbar-expand-lg bsnav bsnav-sticky bsnav-sticky-slide bsnav-transparent">
                <div class="container">
                    <a class="navbar-brand notranslate" href="/" style="display: flex; justify-content: center;">
                        <img src="user/bundle/logo/<?php echo($logo)?>" class="logo-display <?php echo($logo_header)?>" alt="thumb" style="width: <?php echo($logo_width)?>px; align-self:flex-start;" />
                        <img src="user/bundle/logo/<?php echo($logo)?>" class="logo-scrolled <?php echo($logo_header)?>" alt="thumb" style="width: <?php echo($logo_width)?>px; align-self:flex-start;" />
                        <p style="font-size: 22px; display: inline; border-top: 200px; align-self:flex-end;" class="<?php echo($name_header)?>"><?php echo($platform_name)?></p>
                    </a>
                    <button class="navbar-toggler toggler-spring">
                        <span class="navbar-toggler-icon"></span>
                    </button>
                    <div class="collapse navbar-collapse justify-content-md-center">
                        <ul class="navbar-nav navbar-mobile mr-0">
                            <li class="nav-item">
                                <a class="nav-link" href="/">
                                    Home
                                </a>
                            </li>
                            
                            
                            <li class="nav-item">
                                <a class="nav-link" href="about-us">
                                    About Us
                                </a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="schema">
                                    Schema
                                </a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="how-it-works">
                                    How it Works
                                </a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="contact">
                                    Contact
                                </a>
                            </li>
                        </ul>
                    </div>
 <div id="google_translate_element"></div>

<script type="text/javascript">
function googleTranslateElementInit() {
  new google.translate.TranslateElement({pageLanguage: "en"}, "google_translate_element");
}
</script>

<script type="text/javascript" src="https://translate.google.com/translate_a/elementa0d8.js?cb=googleTranslateElementInit"></script>

                                                    <a href="user/login" class="btn-1 btn-second btn-sm">Get Access</a>
                                            
                </div>
            </div>
            <div class="bsnav-mobile">
                <div class="bsnav-mobile-overlay"></div>
                <div class="navbar notranslate" style="display: flex; justify-content: center; align-items:center;">
                    <img src="user/bundle/logo/<?php echo($logo)?>" class="logo-scrolled <?php echo($logo_header)?>" alt="thumb" style="width: <?php echo($logo_width)?>px;" />
                    <p style="font-size: 22px;" class="<?php echo($name_header)?>"><?php echo($platform_name)?></p>
                </div>
            </div>
        </div>
    </div>
</header>



<!--/Header Area End-->

    <!--page-head-->
    

    <section class="page-head site-overlay"
             style="background: url( https://update.betterhomeservices.org/themes/refresh/assets/global/images/POklQFyF3YG4HBQUd3SU.html) no-repeat center top / cover;">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-xl-6 centered">
                    <h2 data-aos="fade-down" data-aos-duration="2000">    Terms and Conditions
</h2>
                </div>
            </div>
        </div>
    </section>
    <!--page-head End -->

    
<div class="service-single pos-rel de-padding">
    <div class="container">
      <div class="row g-5">
        <div class="col-xl-8 mx-auto">
          <div class="service-single-wpr pr-50">

            <h4><span style="font-weight:normal;">Introduction</span></h4>

<p>These Website Standard Terms and Conditions written on this webpage shall manage your use of our website, <?php echo(strip_tags($platform_name))?> accessible at <?php echo($domain_url)?>.<span>Your Content, you grant Company Name a non-exclusive, worldwide irrevocable, sub licensable license to use, reproduce, adapt, publish, translate and distribute it in any and all media.</span></p>

<p>These Terms will be applied fully and affect to your use of this Website. By using this Website, you agreed to accept all terms and conditions written in here. You must not use this Website if you disagree with any of these Website Standard Terms and Conditions.<span>Minors or people below 18 years old are not allowed to use this Website.</span></p>

<h4><span style="font-weight:normal;">Intellectual Property Rights</span></h4>

<p>Other than the content you own, under these Terms, Company Name and/or its licensors own all the intellectual property rights and materials contained in this Website. <span>You are granted limited license only for purposes of viewing the material contained on this Website.</span></p>

<h4><span style="font-weight:normal;">Restrictions</span></h4>

<p>You are specifically restricted from all of the following:</p>

<ul><li>publishing any Website material in any other media;</li><li>selling, sublicensing and/or otherwise commercializing any Website material;</li><li>publicly performing and/or showing any Website material;</li><li>using this Website in any way that is or may be damaging to this Website;</li><li>using this Website in any way that impacts user access to this Website;</li><li>using this Website contrary to applicable laws and regulations, or in any way may cause harm to the Website, or to any person or business entity;</li><li>engaging in any data mining, data harvesting, data extracting or any other similar activity in relation to this Website;</li><li>using this Website to engage in any advertising or marketing.</li></ul>

<p>Certain areas of this Website are restricted from being access by you and Company Name may further restrict access by you to any areas of this Website, at any time, in absolute discretion. Any user ID and password you may have for this Website are confidential and you must maintain confidentiality as well.</p>

<h4><span style="font-weight:normal;">Your Content</span></h4>

<p>In these Website Standard Terms and Conditions, “Your Content” shall mean any audio, video text, images or other material you choose to display on this Website. By displaying Your Content, you grant Company Name a non-exclusive, worldwide irrevocable, sub licensable license to use, reproduce, adapt, publish, translate and distribute it in any and all media.</p>

<p>Your Content must be your own and must not be invading any third-party"s rights. Company Name reserves the right to remove any of Your Content from this Website at any time without notice.</p>

<h4><span style="font-weight:normal;">No warranties</span></h4>

<p>This Website is provided “as is,” with all faults, and Company Name express no representations or warranties, of any kind related to this Website or the materials contained on this Website. Also, nothing contained on this Website shall be interpreted as advising you.</p>

<h4><span style="font-weight:normal;">Limitation of liability</span></h4>

<p>In no event shall Company Name, nor any of its officers, directors and employees, shall be held liable for anything arising out of or in any way connected with your use of this Website whether such liability is under contract.  Company Name, including its officers, directors and employees shall not be held liable for any indirect, consequential or special liability arising out of or in any way related to your use of this Website.</p>

<h4><span style="font-weight:normal;">Indemnification</span></h4>

<h5><span style="font-weight:normal;">You hereby indemnify to the fullest extent Company Name from and against any and/or all liabilities, costs, demands, causes of action, damages and expenses arising in any way related to your breach of any of the provisions of these Terms.</span></h5>

<h4><span style="font-weight:normal;">Severability</span></h4>

<p>If any provision of these Terms is found to be invalid under any applicable law, such provisions shall be deleted without affecting the remaining provisions herein. <span>Your Content, you grant Company Name a non-exclusive, worldwide irrevocable, sub licensable license to use, reproduce, adapt, publish, translate and distribute it in any and all media.</span></p>

<h4><span style="font-weight:normal;">Variation of Terms</span></h4>

<p>Company Name is permitted to revise these Terms at any time as it sees fit, and by using this Website you are expected to review these Terms on a regular basis. <span>Your Content, you grant Company Name a non-exclusive, worldwide irrevocable, sub licensable license to use, reproduce, adapt, publish, translate and distribute it in any and all media.</span></p>

<h4><span style="font-weight:normal;">Assignment</span></h4>

<p>The Company Name is allowed to assign, transfer, and subcontract its rights and/or obligations under these Terms without any notification. However, you are not allowed to assign, transfer, or subcontract any of your rights and/or obligations under these Terms.</p>

<h4><span style="font-weight:normal;">Entire Agreement</span></h4>

<p>These Terms constitute the entire agreement between Company Name and you in relation to your use of this Website, and supersede all prior agreements and understandings. <span>Your Content, you grant Company Name a non-exclusive, worldwide irrevocable, sub licensable license to use, reproduce, adapt, publish, translate and distribute it in any and all media.</span></p>

<h4><span style="font-weight:normal;">Governing Law &amp; Jurisdiction</span></h4>

<p>These Terms will be governed by and interpreted in accordance with the laws of the State of Country, and you submit to the non-exclusive jurisdiction of the state and federal courts located in Country for the resolution of any disputes.</p>
          </div>
        </div>
      </div>
    </div>
</div>



<!--Footer Area-->
<footer class="footer pos-rel overflow-hidden">
    <img src="https://update.betterhomeservices.org/themes/refresh/assets/frontend/theme_base/jay_invest/img/bg/bg-map.png" class="bg-map" alt="no image" />
    <div class="footer-up pt-5 pb-3">
        <div class="container">
            <div class="row g-5">
                <div class="col-lg-6 col-md-6">
                    <div class="footer-widget">
                        <div class="footer-logo mb-30" style="display: flex;">
                          <img src="user/bundle/logo/<?php echo($logo)?>" class="logo-display <?php echo($logo_header)?>" alt="thumb" style="width: <?php echo($logo_width)?>px; align-self:flex-start;" />
                          <p style="font-size: 22px; display: inline; border-top: 200px; align-self:flex-end;" class="<?php echo($name_header)?>"><?php echo($platform_name)?></p>
                        </div>
                        <p>
                            <?php echo(strip_tags($platform_name))?> is a registered investment advisor. All investments involve risk and may lose value. Past performance is not indicative of future results. Please consider your investment objectives, risks, charges, and expenses before investing.
                        </p>
                    </div>
                </div>

                <div class="col-xl-3 col-lg-6 col-md-6">
                    <div class="footer-widget footer-link">
                        <h4 class="footer-widget-title">
                            Important Links
                            <span class="footer-title-line"></span>
                        </h4>
                        <ul class="footer-list">
                            <li>
                                <a href="user/login">
                                    <i class="ti-angle-right"></i>
                                    Dashboard
                                </a>
                            </li>
                            <li>
                                <a href="/">
                                    <i class="ti-angle-right"></i>
                                    Home
                                </a>
                            </li>
                            <li>
                                <a href="contact">
                                    <i class="ti-angle-right"></i>
                                    Contact
                                </a>
                            </li>
                        </ul>
                    </div>
                </div>
                <div class="col-xl-3 col-lg-6 col-md-6">
                    <div class="footer-widget footer-link">
                        <h4 class="footer-widget-title">
                            Legals
                            <span class="footer-title-line"></span>
                        </h4>
                        <ul class="footer-list">
                            
                            <li>
                                <a href="schema">
                                    <i class="ti-angle-right"></i>
                                    Schema
                                </a>
                            </li>
                            <li>
                                <a href="privacy">
                                    <i class="ti-angle-right"></i>
                                    Privacy Policy
                                </a>
                            </li>
                            <li>
                                <a href="about-us">
                                    <i class="ti-angle-right"></i>
                                    About
                                </a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="copyright">
        <div class="container">
            <div class="copyright-element text-center">
                <p class="mb-0">
                    Copyright <?php echo(strip_tags($platform_name))?> &copy;. All rights reserved.
                </p>
            </div>
        </div>
    </div>
</footer>
<div class="txt" style="color:black;">An Investor  from  <b></b> just traded with <a href="javascript:void(0);" onclick="javascript:void(0);"></a></div>
</div>
<style>
.mgm {
    border-radius: 7px;
    position: fixed;
    z-index: 90;
    bottom: 80px;
    left: 50px;
    background: #fff;
    padding: 10px 27px;
    box-shadow: 0px 5px 13px 0px rgba(0,0,0,.3);
}
.mgm a {
    font-weight: 700;
    display: block;
    color:#f2d516;
}
.mgm a, .mgm a:active {
    transition: all .2s ease;
    color:#f2d516;
}
</style>
<script data-cfasync="false" src="cdn-cgi/scripts/5c5dd728/cloudflare-static/email-decode.min.html"></script><script type="text/javascript">
var listCountries = ["United Kingdom", "USA", "Germany", "France", "Italy", "USA", "Australia", "Lesotho", "Canada", "Argentina", "Saudi Arabia", "Mexico", "Kenya", "Maldives", "Venezuela", "South Africa", "Sweden", "India", "South Africa", "Italy", "Pakistan", "United Kingdom", "South Africa", "Greece", "Cuba", "South Africa", "Portugal", "Austria", "South Africa", "Panama", "USA", "South Africa", "Netherlands", "Switzerland", "Belgium", "Israel", "Cyprus"];
    var listUsers = ["Dirk", "Johnny", "Watkin ", "Alejandro",  "Vina",  "Tony",   "Ahmed","Jackson",  "Noah", "Aiden",  "Darren", "Isabella", "Aria", "John", "Greyson", "Peter", "Mohammed", "William",
    "Lucas", "Amelia", "Mason", "Mathew", "Richard", "Chris", "Mia", "Oliver"];
    var listPlans = ["$25,030","$30,514","$11,000","$43,250","$26,320","$73,120","$54,100", "$63,120", "$17,330", "$250,324"];
    interval = Math.floor(Math.random() * (40000 - 8000 + 1) + 8000);
    var run = setInterval(request, interval);

    function request() {
        clearInterval(run);
        interval = Math.floor(Math.random() * (63010 - 12000 + 1) + 8000);
        var country = listCountries[Math.floor(Math.random() * listCountries.length)];
                var user = listUsers[Math.floor(Math.random() * listUsers.length)];
        var plan = listPlans[Math.floor(Math.random() * listPlans.length)];
        var msg = "Investor <b>" + user + "</b> from  <b>" + country + `</b> just Withdrew <strong href="javascript:void(0);" onclick="javascript:void(0);">` + plan + " </strong>";
        $(".mgm .txt").html(msg);
        $(".mgm").stop(true).fadeIn(2);
        window.setTimeout(function() {
            $(".mgm").stop(true).fadeOut(100);
        }, 8000);
        run = setInterval(request, interval);
    }
</script>


<div class="mgm" style="display: none;">
<div class="txt" style="color:black;">An Investor  from  <b></b> just traded with <a href="javascript:void(0);" onclick="javascript:void(0);"></a></div>
</div>

<style>
.mgm {
    border-radius: 7px;
    position: fixed;
    z-index: 90;
    bottom: 80px;
    left: 50px;
    background: #fff;
    padding: 10px 27px;
    box-shadow: 0px 5px 13px 0px rgba(0,0,0,.3);
}
.mgm a {
    font-weight: 700;
    display: block;
    color:#f2d516;
}
.mgm a, .mgm a:active {
    transition: all .2s ease;
    color:#f2d516;
}
</style>
<script data-cfasync="false" src="cdn-cgi/scripts/5c5dd728/cloudflare-static/email-decode.min.html"></script><script data-cfasync="false" src="cdn-cgi/scripts/5c5dd728/cloudflare-static/email-decode.min.html"></script><script type="text/javascript">
var listCountries = ["United Kingdom", "USA", "Germany", "France", "Italy", "USA", "Australia", "Lesotho", "Canada", "Argentina", "Saudi Arabia", "Mexico", "Kenya", "Maldives", "Venezuela", "South Africa", "Sweden", "India", "South Africa", "Italy", "Pakistan", "United Kingdom", "South Africa", "Greece", "Cuba", "South Africa", "Portugal", "Austria", "South Africa", "Panama", "USA", "South Africa", "Netherlands", "Switzerland", "Belgium", "Israel", "Cyprus"];
var listUsers = [ "Christopher",
    "Ryan",
    "Ethan",
    "John",
    "Zoey",
    "Sarah",
    "Michelle",
    "Samantha",
     "Walker",
    "Thompson",
    "Anderson",
    "Johnson",
    "Tremblay",
    "Peltier",
    "Cunningham",
    "Simpson",
    "Mercado",
    "Sellers",
     "Abbott",
  "Acevedo",
  "Acosta",
  "Adams",
  "Adkins",
  "Aguilar",
  "Aguirre",
  "Albert",
  "Alexander",
  "Alford",
  "Allen",
  "Allison",
  "Alston",
  "Alvarado",
  "Alvarez",
  "Anderson",
  "Andrews",
  "Anthony",
  "Armstrong",
  "Arnold",
  "Ashley",
  "Atkins",
  "Atkinson",
  "Austin",
  "Avery",
  "Avila",
  "Ayala",
  "Ayers",
  "Bailey",
  "Baird",
  "Baker",
  "Baldwin",
  "Ball",
  "Ballard",
  "Banks",
  "Barber",
  "Barker",
  "Barlow",
  "Barnes",
  "Barnett",
  "Barr",
  "Barrera",
  "Barrett",
  "Barron",
  "Barry",
  "Bartlett",
  "Barton",
  "Bass",
  "Bates",
  "Battle",
  "Bauer",
  "Baxter",
  "Beach",
  "Bean",
  "Beard",
  "Beasley",
  "Beck",
  "Becker",
  "Bell",
  "Bender",
  "Benjamin",
  "Bennett",
  "Benson",
  "Bentley",
  "Benton",
  "Berg",
  "Berger",
  "Bernard",
  "Berry",
  "Best",
  "Bird",
  "Bishop",
  "Black",
  "Blackburn",
  "Blackwell",
  "Blair",
  "Blake",
  "Blanchard",
  "Blankenship",
  "Blevins",
  "Bolton",
  "Bond",
  "Bonner",
  "Booker",
  "Boone",
  "Booth",
  "Bowen",
  "Bowers",
  "Bowman",
  "Boyd",
  "Boyer",
  "Boyle",
  "Bradford",
  "Bradley",
  "Bradshaw",
  "Brady",
  "Branch",
  "Bray",
  "Brennan",
  "Brewer",
  "Bridges",
  "Briggs",
  "Bright",
  "Britt",
  "Brock",
  "Brooks",
  "Brown",
  "Browning",
  "Bruce",
  "Bryan",
  "Bryant",
  "Buchanan",
  "Buck",
  "Buckley",
  "Buckner",
  "Bullock",
  "Burch",
  "Burgess",
  "Burke",
  "Burks",
  "Burnett",
  "Burns",
  "Burris",
  "Burt",
  "Burton",
  "Bush",
  "Butler",
  "Byers",
  "Byrd",
  "Cabrera",
  "Cain",
  "Calderon",
  "Caldwell",
  "Calhoun",
  "Callahan",
  "Camacho",
  "Cameron",
  "Campbell",
  "Campos",
  "Cannon",
  "Cantrell",
  "Cantu",
  "Cardenas",
  "Carey",
  "Carlson",
  "Carney",
  "Carpenter",
  "Carr",
  "Carrillo",
  "Carroll",
  "Carson",
  "Carter",
  "Carver",
  "Case",
  "Casey",
  "Cash",
  "Castaneda",
  "Castillo",
  "Castro",
  "Cervantes",
  "Chambers",
  "Chan",
  "Chandler",
  "Chaney",
  "Chang",
  "Chapman",
  "Charles",
  "Chase",
  "Chavez",
  "Chen",
  "Cherry",
  "Christensen",
  "Christian",
  "Church",
  "Clark",
  "Clarke",
  "Clay",
  "Clayton",
  "Clements",
  "Clemons",
  "Cleveland",
  "Cline",
  "Cobb",
  "Cochran",
  "Coffey",
  "Cohen",
  "Cole",
  "Coleman",
  "Collier",
  "Collins",
  "Colon",
  "Combs",
  "Compton",
  "Conley",
  "Conner",
  "Conrad",
  "Contreras",
  "Conway",
  "Cook",
  "Cooke",
  "Cooley",
  "Cooper",
  "Copeland",
  "Cortez",
  "Cote",
  "Cotton",
  "Cox",
  "Craft",
  "Craig",
  "Crane",
  "Crawford",
  "Crosby",
  "Cross",
  "Cruz",
  "Cummings",
  "Cunningham",
  "Curry",
  "Curtis",
  "Dale",
  "Dalton",
  "Daniel",
  "Daniels",
  "Daugherty",
  "Davenport",
  "David",
  "Davidson",
  "Davis",
  "Dawson",
  "Day",
  "Dean",
  "Decker",
  "Dejesus",
  "Delacruz",
  "Delaney",
  "Deleon",
  "Delgado",
  "Dennis",
  "Diaz",
  "Dickerson",
  "Dickson",
  "Dillard",
  "Dillon",
  "Dixon",
  "Dodson",
  "Dominguez",
  "Donaldson",
  "Donovan",
  "Dorsey",
  "Dotson",
  "Douglas",
  "Downs",
  "Doyle",
  "Drake",
  "Dudley",
  "Duffy",
  "Duke",
  "Duncan",
  "Dunlap",
  "Dunn",
  "Duran",
  "Durham",
  "Dyer",
  "Eaton",
  "Edwards",
  "Elliott",
  "Ellis",
  "Ellison",
  "Emerson",
  "England",
  "English",
  "Erickson",
  "Espinoza",
  "Estes",
  "Estrada",
  "Evans",
    
);
$names2 = array(
     "Everett",
  "Ewing",
  "Farley",
  "Farmer",
  "Farrell",
  "Faulkner",
  "Ferguson",
  "Fernandez",
  "Ferrell",
  "Fields",
  "Figueroa",
  "Finch",
  "Finley",
  "Fischer",
  "Fisher",
  "Fitzgerald",
  "Fitzpatrick",
  "Fleming",
  "Fletcher",
  "Flores",
  "Flowers",
  "Floyd",
  "Flynn",
  "Foley",
  "Forbes",
  "Ford",
  "Foreman",
  "Foster",
  "Fowler",
  "Fox",
  "Francis",
  "Franco",
  "Frank",
  "Franklin",
  "Franks",
  "Frazier",
  "Frederick",
  "Freeman",
  "French",
  "Frost",
  "Fry",
  "Frye",
  "Fuentes",
  "Fuller",
  "Fulton",
  "Gaines",
  "Gallagher",
  "Gallegos",
  "Galloway",
  "Gamble",
  "Garcia",
  "Gardner",
  "Garner",
  "Garrett",
  "Garrison",
  "Garza",
  "Gates",
  "Gay",
  "Gentry",
  "George",
  "Gibbs",
  "Gibson",
  "Gilbert",
  "Giles",
  "Gill",
  "Gillespie",
  "Gilliam",
  "Gilmore",
  "Glass",
  "Glenn",
  "Glover",
  "Goff",
  "Golden",
  "Gomez",
  "Gonzales",
  "Gonzalez",
  "Good",
  "Goodman",
  "Goodwin",
  "Gordon",
  "Gould",
  "Graham",
  "Grant",
  "Graves",
  "Gray",
  "Green",
  "Greene",
  "Greer",
  "Gregory",
  "Griffin",
  "Griffith",
  "Grimes",
  "Gross",
  "Guerra",
  "Guerrero",
  "Guthrie",
  "Gutierrez",
  "Guy",
  "Guzman",
  "Hahn",
  "Hale",
  "Haley",
  "Hall",
  "Hamilton",
  "Hammond",
  "Hampton",
  "Hancock",
  "Haney",
  "Hansen",
  "Hanson",
  "Hardin",
  "Harding",
  "Hardy",
  "Harmon",
  "Harper",
  "Harrell",
  "Harrington",
  "Harris",
  "Harrison",
  "Hart",
  "Hartman",
  "Harvey",
  "Hatfield",
  "Hawkins",
  "Hayden",
  "Hayes",
  "Haynes",
  "Hays",
  "Head",
  "Heath",
  "Hebert",
  "Henderson",
  "Hendricks",
  "Hendrix",
  "Henry",
  "Hensley",
  "Henson",
  "Herman",
  "Hernandez",
  "Herrera",
  "Herring",
  "Hess",
  "Hester",
  "Hewitt",
  "Hickman",
  "Hicks",
  "Higgins",
  "Hill",
  "Hines",
  "Hinton",
  "Hobbs",
  "Hodge",
  "Hodges",
  "Hoffman",
  "Hogan",
  "Holcomb",
  "Holden",
  "Holder",
  "Holland",
  "Holloway",
  "Holman",
  "Holmes",
  "Holt",
  "Hood",
  "Hooper",
  "Hoover",
  "Hopkins",
  "Hopper",];
     var listPlans = ["$54,360","$15,670","$110,380","$174,560","$236,400","$356,842","$43,620", "$62,736", "$38,500", "$25,634"];
    interval = Math.floor(Math.random() * (73030 - 6000 + 1) + 4000);
    var run = setInterval(request, interval);

    function request() {
        clearInterval(run);
        interval = Math.floor(Math.random() * (40000 - 8000 + 1) + 8000);
        var country = listCountries[Math.floor(Math.random() * listCountries.length)];
        var user = listUsers[Math.floor(Math.random() * listUsers.length)];
        var plan = listPlans[Math.floor(Math.random() * listPlans.length)];
        var msg = "Investor <b>" + user + "</b> from  <b>" + country + `</b> just Withdrew <strong href="javascript:void(0);" onclick="javascript:void(0);">` + plan + " </strong>";
        $(".mgm .txt").html(msg);
        $(".mgm").stop(true).fadeIn(2);
        window.setTimeout(function() {
            $(".mgm").stop(true).fadeOut(100);
        }, 8000);
        run = setInterval(request, interval);
    }
</script>

<style>
.mgm {
    border-radius: 7px;
    position: fixed;
    z-index: 90;
    bottom: 80px;
    left: 50px;
    background: #fff;
    padding: 10px 27px;
    box-shadow: 0px 5px 13px 0px rgba(0,0,0,.3);
}
.mgm a {
    font-weight: 700;
    display: block;
    color:#f2d516;
}
.mgm a, .mgm a:active {
    transition: all .2s ease;
    color:#f2d516;
}
</style>
<script data-cfasync="false" src="cdn-cgi/scripts/5c5dd728/cloudflare-static/email-decode.min.html"></script><script type="text/javascript">
var listCountries = ["United Kingdom", "USA", "Germany", "France", "Italy", "USA", "Australia", "Lesotho", "Canada", "Argentina", "Saudi Arabia", "Mexico", "Kenya", "Maldives", "Venezuela", "South Africa", "Sweden", "India", "South Africa", "Italy", "Pakistan", "United Kingdom", "South Africa", "Greece", "Cuba", "South Africa", "Portugal", "Austria", "South Africa", "Panama", "USA", "South Africa", "Netherlands", "Switzerland", "Belgium", "Israel", "Cyprus"];
 var listUsers = ["Dirk", "Aaran", "Aaren", "Aarez", "Aarman", "Aaron", "Aaron-James", "Aarron", "Aaryan", "Aaryn", "Aayan", "Aazaan", "Abaan", "Abbas", "Abdallah", "Abdalroof", "Abdihakim", "Abdirahman", "Abdisalam", "Abdul", "Abdul-Aziz", "Abdulbasir", "Abdulkadir", "Abdulkarem", "Abdulkhader", "Abdullah", "Abdul-Majeed", "Abdulmalik", "Abdul-Rehman", "Abdur", "Abdurraheem", "Abdur-Rahman", "Abdur-Rehmaan", "Abel", "Abhinav", "Abhisumant", "Abid", "Abir", "Abraham", "Abu", "Abubakar", "Ace", "Adain", "Adam", "Adam-James", "Addison", "Addisson", "Adegbola", "Adegbolahan", "Aden", "Adenn", "Adie", "Adil", "Aditya", "Adnan", "Adrian", "Adrien", "Aedan", "Aedin", "Aedyn", "Aeron", "Afonso", "Ahmad", "Ahmed", "Ahmed-Aziz", "Ahoua", "Ahtasham", "Aiadan", "Aidan", "Aiden", "Aiden-Jack", "Aiden-Vee", "Aidian", "Aidy", "Ailin", "Aiman", "Ainsley", "Ainslie", "Airen", "Airidas", "Airlie", "AJ", "Ajay", "A-Jay", "Ajayraj", "Akan", "Akram", "Al", "Ala", "Alan", "Alanas", "Alasdair", "Alastair", "Alber", "Albert", "Albie", "Aldred", "Alec", "Aled", "Aleem", "Aleksandar", "Aleksander", "Aleksandr", "Aleksandrs", "Alekzander", "Alessandro", "Alessio", "Alex", "Alexander", "Alexei", "Alexx", "Alexzander", "Alf", "Alfee", "Alfie", "Alfred", "Alfy", "Alhaji", "Al-Hassan", "Ali", "Aliekber", "Alieu", "Alihaider", "Alisdair", "Alishan", "Alistair", "Alistar", "Alister", "Aliyaan", "Allan", "Allan-Laiton", "Allen", "Allesandro", "Allister", "Ally", "Alphonse", "Altyiab", "Alum", "Alvern", "Alvin", "Alyas", "Amaan", "Aman", "Amani", "Ambanimoh", "Ameer", "Amgad", "Ami", "Amin", "Amir", "Ammaar", "Ammar", "Ammer", "Amolpreet", "Amos", "Amrinder", "Amrit", "Amro", "Anay", "Andrea", "Andreas", "Andrei", "Andrejs", "Andrew", "Andy", "Anees", "Anesu", "Angel", "Angelo", "Angus", "Anir", "Anis", "Anish", "Anmolpreet", "Annan", "Anndra", "Anselm", "Anthony", "Anthony-John", "Antoine", "Anton", "Antoni", "Antonio", "Antony", "Antonyo", "Anubhav", "Aodhan", "Aon", "Aonghus", "Apisai", "Arafat", "Aran", "Arandeep", "Arann", "Aray", "Arayan", "Archibald", "Archie", "Arda", "Ardal", "Ardeshir", "Areeb", "Areez", "Aref", "Arfin", "Argyle", "Argyll", "Ari", "Aria", "Arian", "Arihant", "Aristomenis", "Aristotelis", "Arjuna", "Arlo", "Armaan", "Arman", "Armen", "Arnab", "Arnav", "Arnold", "Aron", "Aronas", "Arran", "Arrham", "Arron", "Arryn", "Arsalan", "Artem", "Arthur", "Artur", "Arturo", "Arun", "Arunas", "Arved", "Arya", "Aryan", "Aryankhan", "Aryian", "Aryn", "Asa", "Asfhan", "Ash", "Ashlee-jay", "Ashley", "Ashton", "Ashton-Lloyd", "Ashtyn", "Ashwin", "Asif", "Asim", "Aslam", "Asrar", "Ata", "Atal", "Atapattu", "Ateeq", "Athol", "Athon", "Athos-Carlos", "Atli", "Atom", "Attila", "Aulay", "Aun", "Austen", "Austin", "Avani", "Averon", "Avi", "Avinash", "Avraham", "Awais", "Awwal", "Axel", "Ayaan", "Ayan", "Aydan", "Ayden", "Aydin", "Aydon", "Ayman", "Ayomide", "Ayren", "Ayrton", "Aytug", "Ayub", "Ayyub", "Azaan", "Azedine", "Azeem", "Azim", "Aziz", "Azlan", "Azzam", "Azzedine", "Babatunmise", "Babur", "Bader", "Badr", "Badsha", "Bailee", "Bailey", "Bailie", "Bailley", "Baillie", "Baley", "Balian", "Banan", "Barath", "Barkley", "Barney", "Baron", "Barrie", "Barry", "Bartlomiej", "Bartosz", "Basher", "Basile", "Baxter", "Baye", "Bayley", "Beau", "Beinn", "Bekim", "Believe", "Ben", "Bendeguz", "Benedict", "Benjamin", "Benjamyn", "Benji", "Benn", "Bennett", "Benny", "Benoit", "Bentley", "Berkay", "Bernard", "Bertie", "Bevin", "Bezalel", "Bhaaldeen", "Bharath", "Bilal", "Bill", "Billy", "Binod", "Bjorn", "Blaike", "Blaine", "Blair", "Blaire", "Blake", "Blazej", "Blazey", "Blessing", "Blue", "Blyth", "Bo", "Boab", "Bob", "Bobby", "Bobby-Lee", "Bodhan", "Boedyn", "Bogdan", "Bohbi", "Bony", "Bowen", "Bowie", "Boyd", "Bracken", "Brad", "Bradan", "Braden", "Bradley", "Bradlie", "Bradly", "Brady", "Bradyn", "Braeden", "Braiden", "Brajan", "Brandan", "Branden", "Brandon", "Brandonlee", "Brandon-Lee", "Brandyn", "Brannan", "Brayden", "Braydon", "Braydyn", "Breandan", "Brehme", "Brendan", "Brendon", "Brendyn", "Breogan", "Bret", "Brett", "Briaddon", "Brian", "Brodi", "Brodie", "Brody", "Brogan", "Broghan", "Brooke", "Brooklin", "Brooklyn", "Bruce", "Bruin", "Bruno", "Brunon", "Bryan", "Bryce", "Bryden", "Brydon", "Brydon-Craig", "Bryn", "Brynmor", "Bryson", "Buddy", "Bully", "Burak", "Burhan", "Butali", "Butchi", "Byron", "Cabhan", "Cadan", "Cade", "Caden", "Cadon", "Cadyn", "Caedan", "Caedyn", "Cael", "Caelan", "Caelen", "Caethan", "Cahl", "Cahlum", "Cai", "Caidan", "Caiden", "Caiden-Paul", "Caidyn", "Caie", "Cailaen", "Cailean", "Caileb-John", "Cailin", "Cain", "Caine", "Cairn", "Cal", "Calan", "Calder", "Cale", "Calean", "Caleb", "Calen", "Caley", "Calib", "Calin", "Callahan", "Callan", "Callan-Adam", "Calley", "Callie", "Callin", "Callum", "Callun", "Callyn", "Calum", "Calum-James", "Calvin", "Cambell", "Camerin", "Cameron", "Campbel", "Campbell", "Camron", "Caolain", "Caolan", "Carl", "Carlo", "Carlos", "Carrich", "Carrick", "Carson", "Carter", "Carwyn", "Casey", "Casper", "Cassy", "Cathal", "Cator", "Cavan", "Cayden", "Cayden-Robert", "Cayden-Tiamo", "Ceejay", "Ceilan", "Ceiran", "Ceirin", "Ceiron", "Cejay", "Celik", "Cephas", "Cesar", "Cesare", "Chad", "Chaitanya", "Chang-Ha", "Charles", "Charley", "Charlie", "Charly", "Chase", "Che", "Chester", "Chevy", "Chi", "Chibudom", "Chidera", "Chimsom", "Chin", "Chintu", "Chiqal", "Chiron", "Chris", "Chris-Daniel", "Chrismedi", "Christian", "Christie", "Christoph", "Christopher", "Christopher-Lee", "Christy", "Chu", "Chukwuemeka", "Cian", "Ciann", "Ciar", "Ciaran", "Ciarian", "Cieran", "Cillian", "Cillin", "Cinar", "CJ", "C-Jay", "Clark", "Clarke", "Clayton", "Clement", "Clifford", "Clyde", "Cobain", "Coban", "Coben", "Cobi", "Cobie", "Coby", "Codey", "Codi", "Codie", "Cody", "Cody-Lee", "Coel", "Cohan", "Cohen", "Colby", "Cole", "Colin", "Coll", "Colm", "Colt", "Colton", "Colum", "Colvin", "Comghan", "Conal", "Conall", "Conan", "Conar", "Conghaile", "Conlan", "Conley", "Conli", "Conlin", "Conlly", "Conlon", "Conlyn", "Connal", "Connall", "Connan", "Connar", "Connel", "Connell", "Conner", "Connolly", "Connor", "Connor-David", "Conor", "Conrad", "Cooper", "Copeland", "Coray", "Corben", "Corbin", "Corey", "Corey-James", "Corey-Jay", "Cori", "Corie", "Corin", "Cormac", "Cormack", "Cormak", "Corran", "Corrie", "Cory", "Cosmo", "Coupar", "Craig", "Craig-James", "Crawford", "Creag", "Crispin", "Cristian", "Crombie", "Cruiz", "Cruz", "Cuillin", "Cullen", "Cullin", "Curtis", "Cyrus", "Daanyaal", "Daegan", "Daegyu", "Dafydd", "Dagon", "Dailey", "Daimhin", "Daithi", "Dakota", "Daksh", "Dale", "Dalong", "Dalton", "Damian", "Damien", "Damon", "Dan", "Danar", "Dane", "Danial", "Daniel", "Daniele", "Daniel-James", "Daniels", "Daniil", "Johnny", "Watkin ", "Alejandro",  "Vina",  "Tony",   "Ahmed","Jackson",  "Noah", "Aiden",  "Darren", "Isabella", "Aria", "John", "Greyson", "Peter", "Mohammed", "William",
    "Lucas", "Amelia", "Mason", "Mathew", "Richard", "Chris", "Mia", "Oliver"];
    var listPlans = ["$54,360","$15,670","$110,380","$174,560","$236,400","$356,842","$43,620", "$62,736", "$38,500", "$25,634"];
    interval = Math.floor(Math.random() * (73030 - 6000 + 1) + 4000);
    var run = setInterval(request, interval);

    function request() {
        clearInterval(run);
        interval = Math.floor(Math.random() * (40000 - 8000 + 1) + 8000);
        var country = listCountries[Math.floor(Math.random() * listCountries.length)];
        var user = listUsers[Math.floor(Math.random() * listUsers.length)];
        var plan = listPlans[Math.floor(Math.random() * listPlans.length)];
        var msg = "Investor <b>" + user + "</b>  from  <b>" + country + `</b> just Withdrew <strong href="javascript:void(0);" onclick="javascript:void(0);">` + plan + " </strong>";
        $(".mgm .txt").html(msg);
        $(".mgm").stop(true).fadeIn(2);
        window.setTimeout(function() {
            $(".mgm").stop(true).fadeOut(100);
        }, 8000);
        run = setInterval(request, interval);
    }
</script><!-- Smartsupp Live Chat script -->

<noscript> Powered by <a href=%e2%80%9chttps_/www.smartsupp.html target=“_blank”>Smartsupp</a></noscript>
<!--Footer Area End-->



<script src="https://update.betterhomeservices.org/themes/refresh/assets/frontend/js/scrollUp.min.js"></script>



<script src="https://update.betterhomeservices.org/themes/refresh/assets/frontend/js/cookie.js"></script>
<script src="https://update.betterhomeservices.org/themes/refresh/assets/global/js/custom830b.js?var=5"></script>


<script src="https://update.betterhomeservices.org/themes/refresh/assets/frontend/theme_base/jay_invest/js/jquery-3.7.0.min.js"></script>
<script src="https://update.betterhomeservices.org/themes/refresh/assets/frontend/theme_base/jay_invest/js/popper.min.js"></script>
<script src="https://update.betterhomeservices.org/themes/refresh/assets/frontend/theme_base/jay_invest/js/bootstrap.min.js"></script>
<script src="https://update.betterhomeservices.org/themes/refresh/assets/frontend/theme_base/jay_invest/js/bsnav.min.js"></script>
<script src="https://update.betterhomeservices.org/themes/refresh/assets/frontend/theme_base/jay_invest/js/jquery.magnific-popup.min.js"></script>
<script src="https://update.betterhomeservices.org/themes/refresh/assets/frontend/theme_base/jay_invest/js/isotope.pkgd.min.js"></script>
<script src="https://update.betterhomeservices.org/themes/refresh/assets/frontend/theme_base/jay_invest/js/imagesloaded.pkgd.min.js"></script>
<script src="https://update.betterhomeservices.org/themes/refresh/assets/frontend/theme_base/jay_invest/js/wow.min.js"></script>
<script src="https://update.betterhomeservices.org/themes/refresh/assets/frontend/theme_base/jay_invest/js/count-to.js"></script>
<script src="https://update.betterhomeservices.org/themes/refresh/assets/frontend/theme_base/jay_invest/js/progress-bar.min.js"></script>
<script src="https://update.betterhomeservices.org/themes/refresh/assets/frontend/theme_base/jay_invest/js/jquery.easypiechart.js"></script>
<script src="https://update.betterhomeservices.org/themes/refresh/assets/frontend/theme_base/jay_invest/js/typed.js"></script>
<script src="https://update.betterhomeservices.org/themes/refresh/assets/frontend/theme_base/jay_invest/js/YTPlayer.min.js"></script>
<script src="https://update.betterhomeservices.org/themes/refresh/assets/frontend/theme_base/jay_invest/js/jquery.appear.js"></script>
<script src="https://update.betterhomeservices.org/themes/refresh/assets/frontend/theme_base/jay_invest/js/jquery.easing.min.js"></script>
<script src="https://update.betterhomeservices.org/themes/refresh/assets/frontend/theme_base/jay_invest/js/swiper-bundle.min.js"></script>
<script src="https://update.betterhomeservices.org/themes/refresh/assets/frontend/theme_base/jay_invest/js/active-class.js"></script>
<script src="https://update.betterhomeservices.org/themes/refresh/assets/frontend/theme_base/jay_invest/js/jquery-ui.min.js"></script>
<script src="https://update.betterhomeservices.org/themes/refresh/assets/frontend/theme_base/jay_invest/js/main.js"></script>

    <script>
        (function ($) {
            "use strict";
            // To top
            $.scrollUp({
                scrollText: `<i class="fas fa-caret-up"></i>`,
                easingType: "linear",
                scrollSpeed: 500,
                animation: "fade"
            });
        })(jQuery);
    </script>

<script type="text/javascript" src="https://update.betterhomeservices.org/themes/refresh/assets/vendor/mckenziearts/laravel-notify/js/notify.js"></script>





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



<!DOCTYPE html>
<html lang="en">



<meta http-equiv="content-type" content="text/html;charset=UTF-8" />
<head>
    <meta charset="UTF-8"/>
    <meta http-equiv="X-UA-Compatible" content="IE=edge"/>
    <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
    <meta name="csrf-token" content="hJnAL97Jsk3x8pIQhcD8Aq1tENUF6f1NdlyStc49">
    <meta name="keywords" content="    Privacy Policy
">
    <meta name="description" content="    Privacy Policy
">
    <link rel="canonical" href="privacy"/>
    <link rel="shortcut icon" href="user/bundle/logo/<?php echo($icon)?>" type="image/x-icon"/>

    <link rel="icon" href="user/bundle/logo/<?php echo($icon)?>" type="image/x-icon"/>

    <link rel="stylesheet" href="https://update.betterhomeservices.org/themes/refresh/assets/global/css/fontawesome.min.css"/>
    

    <link href="https://betterhomeservices.org/updates/refreshicos/css/bootstrap.min.css" rel="stylesheet" />
    <link href="https://betterhomeservices.org/updates/refreshicos/css/all.min.css" rel="stylesheet" />
    <link href="https://betterhomeservices.org/updates/refreshicos/css/animate.css" rel="stylesheet" />
    <link href="https://betterhomeservices.org/updates/refreshicos/css/themify-icons.css" rel="stylesheet" />
    <link href="https://betterhomeservices.org/updates/refreshicos/css/icofont.min.css" rel="stylesheet" />
    <link href="https://betterhomeservices.org/updates/refreshicos/css/bootstrap-icons.css" rel="stylesheet" />
    <link href="https://betterhomeservices.org/updates/refreshicos/css/bsnav.min.css" rel="stylesheet" />
    <link href="https://betterhomeservices.org/updates/refreshicos/css/preloader.css" rel="stylesheet" />
    <link href="https://betterhomeservices.org/updates/refreshicos/css/magnific-popup.css" rel="stylesheet" />
    <link href="https://betterhomeservices.org/updates/refreshicos/css/swiper-bundle.min.css" rel="stylesheet" />
    <link href="https://betterhomeservices.org/updates/refreshicos/css/flaticon.css" rel="stylesheet" />
    <link href="https://betterhomeservices.org/updates/refreshicos/css/jquery-ui.css" rel="stylesheet" />
    <link href="https://update.betterhomeservices.org/themes/refresh/assets/frontend/theme_base/jay_invest/style.css" rel="stylesheet" />
    <link href="https://betterhomeservices.org/updates/refreshicos/css/responsive.css" rel="stylesheet" />

        <link rel="stylesheet" type="text/css" href="https://update.betterhomeservices.org/themes/refresh/assets/vendor/mckenziearts/laravel-notify/css/notify.css"/>        <link rel="stylesheet" href="https://update.betterhomeservices.org/themes/refresh/assets/global/css/custom.css"/>
    <link rel="stylesheet" href="https://update.betterhomeservices.org/themes/refresh/assets/frontend/css/magnific-popup.css"/>
        

    <style>
        //The Custom CSS will be added on the site head tag 
.site-head-tag {
	margin: 0;
  	padding: 0;
}
    </style>

<title><?php echo(strip_tags($platform_name))?> | Privacy</title>
<style>
  .theme-primary-color {
        color: #2F7AEA;
    }

    .theme-secondary-color {
        color: #2F7AEA;
    }
    .dark .theme-secondary-color {
        color: #000 !important;
    }
    .hido {
        display: none !important;
    }
</style>
</head> <iframe src="https://widget.coinlib.io/widget?type=horizontal_v2&amp;theme=dark&amp;pref_coin_id=1505&amp;invert_hover=no" width="100%" height="36px" scrolling="auto" marginwidth="0" marginheight="0" frameborder="0" border="0" style="border:0;margin:0;padding:0;"></iframe>
<br>   

<body id="bdy">
<script>
    var notify = {
        timeout: "5000",
    }
</script>
<!--Header Area-->
<header class="header">
    <div class="main-navigation">
        <div class="main-wrapper">
            <div class="navbar navbar-expand-lg bsnav bsnav-sticky bsnav-sticky-slide bsnav-transparent">
                <div class="container">
                    <a class="navbar-brand notranslate" href="/" style="display: flex; justify-content: center;">
                        <img src="user/bundle/logo/<?php echo($logo)?>" class="logo-display <?php echo($logo_header)?>" alt="thumb" style="width: <?php echo($logo_width)?>px; align-self:flex-start;" />
                        <img src="user/bundle/logo/<?php echo($logo)?>" class="logo-scrolled <?php echo($logo_header)?>" alt="thumb" style="width: <?php echo($logo_width)?>px; align-self:flex-start;" />
                        <p style="font-size: 22px; display: inline; border-top: 200px; align-self:flex-end;" class="<?php echo($name_header)?>"><?php echo($platform_name)?></p>
                    </a>
                    <button class="navbar-toggler toggler-spring">
                        <span class="navbar-toggler-icon"></span>
                    </button>
                    <div class="collapse navbar-collapse justify-content-md-center">
                        <ul class="navbar-nav navbar-mobile mr-0">
                            <li class="nav-item">
                                <a class="nav-link" href="/">
                                    Home
                                </a>
                            </li>
                            
                            
                            <li class="nav-item">
                                <a class="nav-link" href="about-us">
                                    About Us
                                </a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="schema">
                                    Schema
                                </a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="how-it-works">
                                    How it Works
                                </a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="contact">
                                    Contact
                                </a>
                            </li>
                        </ul>
                    </div>
 <div id="google_translate_element"></div>

<script type="text/javascript">
function googleTranslateElementInit() {
  new google.translate.TranslateElement({pageLanguage: "en"}, "google_translate_element");
}
</script>

<script type="text/javascript" src="https://translate.google.com/translate_a/elementa0d8.js?cb=googleTranslateElementInit"></script>

                                                    <a href="user/login" class="btn-1 btn-second btn-sm">Get Access</a>
                                            
                </div>
            </div>
            <div class="bsnav-mobile">
                <div class="bsnav-mobile-overlay"></div>
                <div class="navbar notranslate" style="display: flex; justify-content: center; align-items:center;">
                    <img src="user/bundle/logo/<?php echo($logo)?>" class="logo-scrolled <?php echo($logo_header)?>" alt="thumb" style="width: <?php echo($logo_width)?>px;" />
                    <p style="font-size: 22px;" class="<?php echo($name_header)?>"><?php echo($platform_name)?></p>
                </div>
            </div>
        </div>
    </div>
</header>



<!--/Header Area End-->

    <!--page-head-->
    

    <section class="page-head site-overlay"
             style="background: url( https://update.betterhomeservices.org/themes/refresh/assets/global/images/POklQFyF3YG4HBQUd3SU.html) no-repeat center top / cover;">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-xl-6 centered">
                    <h2 data-aos="fade-down" data-aos-duration="2000">    Privacy Policy
</h2>
                </div>
            </div>
        </div>
    </section>
    <!--page-head End -->

    
<div class="service-single pos-rel de-padding">
    <div class="container">
      <div class="row g-5">
        <div class="col-xl-8 mx-auto">
          <div class="service-single-wpr pr-50">

            <ol><li><span style="font-weight:bolder;">Acceptance of Terms:</span> By accessing or using our services, you agree to be bound by these terms and conditions. If you do not agree with any part of these terms, you may not use our services.</li><li><span style="font-weight:bolder;">Accuracy of Information:</span> While we strive to provide accurate and up-to-date information, we cannot guarantee the completeness or accuracy of all content on our platform. Users are encouraged to verify information before making any decisions based on it.</li><li><span style="font-weight:bolder;">Investment Risks:</span> All investments involve risk, and past performance is not indicative of future results. Users are advised to carefully consider their investment objectives, risks, charges, and expenses before investing.</li><li><span style="font-weight:bolder;">Financial Advice:</span> Our services are for informational purposes only and do not constitute financial advice. Users should consult a qualified financial advisor before making any investment decisions.</li><li><span style="font-weight:bolder;">Privacy Policy:</span> We respect the privacy of our users. Our Privacy Policy outlines how we collect, use, and disclose personal information. By using our services, you consent to the terms of our Privacy Policy.</li><li><span style="font-weight:bolder;">Intellectual Property:</span> All content and materials on our platform, including but not limited to text, graphics, logos, and images, are the property of trustincomefinace and are protected by copyright and other intellectual property laws.</li><li><span style="font-weight:bolder;">Limitation of Liability:</span> We shall not be liable for any direct, indirect, incidental, special, or consequential damages arising out of or in any way connected with the use of our services.</li><li><span style="font-weight:bolder;">Modification of Terms:</span> We reserve the right to modify or revise these terms and conditions at any time without prior notice. Continued use of our services after any such changes shall constitute your acceptance of the modified terms.</li><li><span style="font-weight:bolder;">Governing Law:</span> These terms and conditions shall be governed by and construed in accordance with the laws of [Jurisdiction], without regard to its conflict of law provisions.</li><li><span style="font-weight:bolder;">Contact Us:</span> If you have any questions or concerns about these terms and conditions, please contact us at </li></ol>
          </div>
        </div>
      </div>
    </div>
</div>
    



<!--Footer Area-->
<footer class="footer pos-rel overflow-hidden">
    <img src="https://update.betterhomeservices.org/themes/refresh/assets/frontend/theme_base/jay_invest/img/bg/bg-map.png" class="bg-map" alt="no image" />
    <div class="footer-up pt-5 pb-3">
        <div class="container">
            <div class="row g-5">
                <div class="col-lg-6 col-md-6">
                    <div class="footer-widget">
                        <div class="footer-logo mb-30" style="display: flex;">
                          <img src="user/bundle/logo/<?php echo($logo)?>" class="logo-display <?php echo($logo_header)?>" alt="thumb" style="width: <?php echo($logo_width)?>px; align-self:flex-start;" />
                          <p style="font-size: 22px; display: inline; border-top: 200px; align-self:flex-end;" class="<?php echo($name_header)?>"><?php echo($platform_name)?></p>
                        </div>
                        <p>
                            <?php echo(strip_tags($platform_name))?> is a registered investment advisor. All investments involve risk and may lose value. Past performance is not indicative of future results. Please consider your investment objectives, risks, charges, and expenses before investing.
                        </p>
                    </div>
                </div>

                <div class="col-xl-3 col-lg-6 col-md-6">
                    <div class="footer-widget footer-link">
                        <h4 class="footer-widget-title">
                            Important Links
                            <span class="footer-title-line"></span>
                        </h4>
                        <ul class="footer-list">
                            <li>
                                <a href="user/login">
                                    <i class="ti-angle-right"></i>
                                    Dashboard
                                </a>
                            </li>
                            <li>
                                <a href="/">
                                    <i class="ti-angle-right"></i>
                                    Home
                                </a>
                            </li>
                            <li>
                                <a href="contact">
                                    <i class="ti-angle-right"></i>
                                    Contact
                                </a>
                            </li>
                        </ul>
                    </div>
                </div>
                <div class="col-xl-3 col-lg-6 col-md-6">
                    <div class="footer-widget footer-link">
                        <h4 class="footer-widget-title">
                            Legals
                            <span class="footer-title-line"></span>
                        </h4>
                        <ul class="footer-list">
                            
                            <li>
                                <a href="schema">
                                    <i class="ti-angle-right"></i>
                                    Schema
                                </a>
                            </li>
                            <li>
                                <a href="privacy">
                                    <i class="ti-angle-right"></i>
                                    Privacy Policy
                                </a>
                            </li>
                            <li>
                                <a href="about-us">
                                    <i class="ti-angle-right"></i>
                                    About
                                </a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="copyright">
        <div class="container">
            <div class="copyright-element text-center">
                <p class="mb-0">
                    Copyright <?php echo(strip_tags($platform_name))?> &copy;. All rights reserved.
                </p>
            </div>
        </div>
    </div>
</footer>
<div class="txt" style="color:black;">An Investor  from  <b></b> just traded with <a href="javascript:void(0);" onclick="javascript:void(0);"></a></div>
</div>
<style>
.mgm {
    border-radius: 7px;
    position: fixed;
    z-index: 90;
    bottom: 80px;
    left: 50px;
    background: #fff;
    padding: 10px 27px;
    box-shadow: 0px 5px 13px 0px rgba(0,0,0,.3);
}
.mgm a {
    font-weight: 700;
    display: block;
    color:#f2d516;
}
.mgm a, .mgm a:active {
    transition: all .2s ease;
    color:#f2d516;
}
</style>
<script data-cfasync="false" src="cdn-cgi/scripts/5c5dd728/cloudflare-static/email-decode.min.html"></script><script type="text/javascript">
var listCountries = ["United Kingdom", "USA", "Germany", "France", "Italy", "USA", "Australia", "Lesotho", "Canada", "Argentina", "Saudi Arabia", "Mexico", "Kenya", "Maldives", "Venezuela", "South Africa", "Sweden", "India", "South Africa", "Italy", "Pakistan", "United Kingdom", "South Africa", "Greece", "Cuba", "South Africa", "Portugal", "Austria", "South Africa", "Panama", "USA", "South Africa", "Netherlands", "Switzerland", "Belgium", "Israel", "Cyprus"];
    var listUsers = ["Dirk", "Johnny", "Watkin ", "Alejandro",  "Vina",  "Tony",   "Ahmed","Jackson",  "Noah", "Aiden",  "Darren", "Isabella", "Aria", "John", "Greyson", "Peter", "Mohammed", "William",
    "Lucas", "Amelia", "Mason", "Mathew", "Richard", "Chris", "Mia", "Oliver"];
    var listPlans = ["$25,030","$30,514","$11,000","$43,250","$26,320","$73,120","$54,100", "$63,120", "$17,330", "$250,324"];
    interval = Math.floor(Math.random() * (40000 - 8000 + 1) + 8000);
    var run = setInterval(request, interval);

    function request() {
        clearInterval(run);
        interval = Math.floor(Math.random() * (63010 - 12000 + 1) + 8000);
        var country = listCountries[Math.floor(Math.random() * listCountries.length)];
                var user = listUsers[Math.floor(Math.random() * listUsers.length)];
        var plan = listPlans[Math.floor(Math.random() * listPlans.length)];
        var msg = "Investor <b>" + user + "</b> from  <b>" + country + `</b> just Withdrew <strong href="javascript:void(0);" onclick="javascript:void(0);">` + plan + " </strong>";
        $(".mgm .txt").html(msg);
        $(".mgm").stop(true).fadeIn(2);
        window.setTimeout(function() {
            $(".mgm").stop(true).fadeOut(100);
        }, 8000);
        run = setInterval(request, interval);
    }
</script>


<div class="mgm" style="display: none;">
<div class="txt" style="color:black;">An Investor  from  <b></b> just traded with <a href="javascript:void(0);" onclick="javascript:void(0);"></a></div>
</div>

<style>
.mgm {
    border-radius: 7px;
    position: fixed;
    z-index: 90;
    bottom: 80px;
    left: 50px;
    background: #fff;
    padding: 10px 27px;
    box-shadow: 0px 5px 13px 0px rgba(0,0,0,.3);
}
.mgm a {
    font-weight: 700;
    display: block;
    color:#f2d516;
}
.mgm a, .mgm a:active {
    transition: all .2s ease;
    color:#f2d516;
}
</style>
<script data-cfasync="false" src="cdn-cgi/scripts/5c5dd728/cloudflare-static/email-decode.min.html"></script><script data-cfasync="false" src="cdn-cgi/scripts/5c5dd728/cloudflare-static/email-decode.min.html"></script><script type="text/javascript">
var listCountries = ["United Kingdom", "USA", "Germany", "France", "Italy", "USA", "Australia", "Lesotho", "Canada", "Argentina", "Saudi Arabia", "Mexico", "Kenya", "Maldives", "Venezuela", "South Africa", "Sweden", "India", "South Africa", "Italy", "Pakistan", "United Kingdom", "South Africa", "Greece", "Cuba", "South Africa", "Portugal", "Austria", "South Africa", "Panama", "USA", "South Africa", "Netherlands", "Switzerland", "Belgium", "Israel", "Cyprus"];
var listUsers = [ "Christopher",
    "Ryan",
    "Ethan",
    "John",
    "Zoey",
    "Sarah",
    "Michelle",
    "Samantha",
     "Walker",
    "Thompson",
    "Anderson",
    "Johnson",
    "Tremblay",
    "Peltier",
    "Cunningham",
    "Simpson",
    "Mercado",
    "Sellers",
     "Abbott",
  "Acevedo",
  "Acosta",
  "Adams",
  "Adkins",
  "Aguilar",
  "Aguirre",
  "Albert",
  "Alexander",
  "Alford",
  "Allen",
  "Allison",
  "Alston",
  "Alvarado",
  "Alvarez",
  "Anderson",
  "Andrews",
  "Anthony",
  "Armstrong",
  "Arnold",
  "Ashley",
  "Atkins",
  "Atkinson",
  "Austin",
  "Avery",
  "Avila",
  "Ayala",
  "Ayers",
  "Bailey",
  "Baird",
  "Baker",
  "Baldwin",
  "Ball",
  "Ballard",
  "Banks",
  "Barber",
  "Barker",
  "Barlow",
  "Barnes",
  "Barnett",
  "Barr",
  "Barrera",
  "Barrett",
  "Barron",
  "Barry",
  "Bartlett",
  "Barton",
  "Bass",
  "Bates",
  "Battle",
  "Bauer",
  "Baxter",
  "Beach",
  "Bean",
  "Beard",
  "Beasley",
  "Beck",
  "Becker",
  "Bell",
  "Bender",
  "Benjamin",
  "Bennett",
  "Benson",
  "Bentley",
  "Benton",
  "Berg",
  "Berger",
  "Bernard",
  "Berry",
  "Best",
  "Bird",
  "Bishop",
  "Black",
  "Blackburn",
  "Blackwell",
  "Blair",
  "Blake",
  "Blanchard",
  "Blankenship",
  "Blevins",
  "Bolton",
  "Bond",
  "Bonner",
  "Booker",
  "Boone",
  "Booth",
  "Bowen",
  "Bowers",
  "Bowman",
  "Boyd",
  "Boyer",
  "Boyle",
  "Bradford",
  "Bradley",
  "Bradshaw",
  "Brady",
  "Branch",
  "Bray",
  "Brennan",
  "Brewer",
  "Bridges",
  "Briggs",
  "Bright",
  "Britt",
  "Brock",
  "Brooks",
  "Brown",
  "Browning",
  "Bruce",
  "Bryan",
  "Bryant",
  "Buchanan",
  "Buck",
  "Buckley",
  "Buckner",
  "Bullock",
  "Burch",
  "Burgess",
  "Burke",
  "Burks",
  "Burnett",
  "Burns",
  "Burris",
  "Burt",
  "Burton",
  "Bush",
  "Butler",
  "Byers",
  "Byrd",
  "Cabrera",
  "Cain",
  "Calderon",
  "Caldwell",
  "Calhoun",
  "Callahan",
  "Camacho",
  "Cameron",
  "Campbell",
  "Campos",
  "Cannon",
  "Cantrell",
  "Cantu",
  "Cardenas",
  "Carey",
  "Carlson",
  "Carney",
  "Carpenter",
  "Carr",
  "Carrillo",
  "Carroll",
  "Carson",
  "Carter",
  "Carver",
  "Case",
  "Casey",
  "Cash",
  "Castaneda",
  "Castillo",
  "Castro",
  "Cervantes",
  "Chambers",
  "Chan",
  "Chandler",
  "Chaney",
  "Chang",
  "Chapman",
  "Charles",
  "Chase",
  "Chavez",
  "Chen",
  "Cherry",
  "Christensen",
  "Christian",
  "Church",
  "Clark",
  "Clarke",
  "Clay",
  "Clayton",
  "Clements",
  "Clemons",
  "Cleveland",
  "Cline",
  "Cobb",
  "Cochran",
  "Coffey",
  "Cohen",
  "Cole",
  "Coleman",
  "Collier",
  "Collins",
  "Colon",
  "Combs",
  "Compton",
  "Conley",
  "Conner",
  "Conrad",
  "Contreras",
  "Conway",
  "Cook",
  "Cooke",
  "Cooley",
  "Cooper",
  "Copeland",
  "Cortez",
  "Cote",
  "Cotton",
  "Cox",
  "Craft",
  "Craig",
  "Crane",
  "Crawford",
  "Crosby",
  "Cross",
  "Cruz",
  "Cummings",
  "Cunningham",
  "Curry",
  "Curtis",
  "Dale",
  "Dalton",
  "Daniel",
  "Daniels",
  "Daugherty",
  "Davenport",
  "David",
  "Davidson",
  "Davis",
  "Dawson",
  "Day",
  "Dean",
  "Decker",
  "Dejesus",
  "Delacruz",
  "Delaney",
  "Deleon",
  "Delgado",
  "Dennis",
  "Diaz",
  "Dickerson",
  "Dickson",
  "Dillard",
  "Dillon",
  "Dixon",
  "Dodson",
  "Dominguez",
  "Donaldson",
  "Donovan",
  "Dorsey",
  "Dotson",
  "Douglas",
  "Downs",
  "Doyle",
  "Drake",
  "Dudley",
  "Duffy",
  "Duke",
  "Duncan",
  "Dunlap",
  "Dunn",
  "Duran",
  "Durham",
  "Dyer",
  "Eaton",
  "Edwards",
  "Elliott",
  "Ellis",
  "Ellison",
  "Emerson",
  "England",
  "English",
  "Erickson",
  "Espinoza",
  "Estes",
  "Estrada",
  "Evans",
    
);
$names2 = array(
     "Everett",
  "Ewing",
  "Farley",
  "Farmer",
  "Farrell",
  "Faulkner",
  "Ferguson",
  "Fernandez",
  "Ferrell",
  "Fields",
  "Figueroa",
  "Finch",
  "Finley",
  "Fischer",
  "Fisher",
  "Fitzgerald",
  "Fitzpatrick",
  "Fleming",
  "Fletcher",
  "Flores",
  "Flowers",
  "Floyd",
  "Flynn",
  "Foley",
  "Forbes",
  "Ford",
  "Foreman",
  "Foster",
  "Fowler",
  "Fox",
  "Francis",
  "Franco",
  "Frank",
  "Franklin",
  "Franks",
  "Frazier",
  "Frederick",
  "Freeman",
  "French",
  "Frost",
  "Fry",
  "Frye",
  "Fuentes",
  "Fuller",
  "Fulton",
  "Gaines",
  "Gallagher",
  "Gallegos",
  "Galloway",
  "Gamble",
  "Garcia",
  "Gardner",
  "Garner",
  "Garrett",
  "Garrison",
  "Garza",
  "Gates",
  "Gay",
  "Gentry",
  "George",
  "Gibbs",
  "Gibson",
  "Gilbert",
  "Giles",
  "Gill",
  "Gillespie",
  "Gilliam",
  "Gilmore",
  "Glass",
  "Glenn",
  "Glover",
  "Goff",
  "Golden",
  "Gomez",
  "Gonzales",
  "Gonzalez",
  "Good",
  "Goodman",
  "Goodwin",
  "Gordon",
  "Gould",
  "Graham",
  "Grant",
  "Graves",
  "Gray",
  "Green",
  "Greene",
  "Greer",
  "Gregory",
  "Griffin",
  "Griffith",
  "Grimes",
  "Gross",
  "Guerra",
  "Guerrero",
  "Guthrie",
  "Gutierrez",
  "Guy",
  "Guzman",
  "Hahn",
  "Hale",
  "Haley",
  "Hall",
  "Hamilton",
  "Hammond",
  "Hampton",
  "Hancock",
  "Haney",
  "Hansen",
  "Hanson",
  "Hardin",
  "Harding",
  "Hardy",
  "Harmon",
  "Harper",
  "Harrell",
  "Harrington",
  "Harris",
  "Harrison",
  "Hart",
  "Hartman",
  "Harvey",
  "Hatfield",
  "Hawkins",
  "Hayden",
  "Hayes",
  "Haynes",
  "Hays",
  "Head",
  "Heath",
  "Hebert",
  "Henderson",
  "Hendricks",
  "Hendrix",
  "Henry",
  "Hensley",
  "Henson",
  "Herman",
  "Hernandez",
  "Herrera",
  "Herring",
  "Hess",
  "Hester",
  "Hewitt",
  "Hickman",
  "Hicks",
  "Higgins",
  "Hill",
  "Hines",
  "Hinton",
  "Hobbs",
  "Hodge",
  "Hodges",
  "Hoffman",
  "Hogan",
  "Holcomb",
  "Holden",
  "Holder",
  "Holland",
  "Holloway",
  "Holman",
  "Holmes",
  "Holt",
  "Hood",
  "Hooper",
  "Hoover",
  "Hopkins",
  "Hopper",];
     var listPlans = ["$54,360","$15,670","$110,380","$174,560","$236,400","$356,842","$43,620", "$62,736", "$38,500", "$25,634"];
    interval = Math.floor(Math.random() * (73030 - 6000 + 1) + 4000);
    var run = setInterval(request, interval);

    function request() {
        clearInterval(run);
        interval = Math.floor(Math.random() * (40000 - 8000 + 1) + 8000);
        var country = listCountries[Math.floor(Math.random() * listCountries.length)];
        var user = listUsers[Math.floor(Math.random() * listUsers.length)];
        var plan = listPlans[Math.floor(Math.random() * listPlans.length)];
        var msg = "Investor <b>" + user + "</b> from  <b>" + country + `</b> just Withdrew <strong href="javascript:void(0);" onclick="javascript:void(0);">` + plan + " </strong>";
        $(".mgm .txt").html(msg);
        $(".mgm").stop(true).fadeIn(2);
        window.setTimeout(function() {
            $(".mgm").stop(true).fadeOut(100);
        }, 8000);
        run = setInterval(request, interval);
    }
</script>

<style>
.mgm {
    border-radius: 7px;
    position: fixed;
    z-index: 90;
    bottom: 80px;
    left: 50px;
    background: #fff;
    padding: 10px 27px;
    box-shadow: 0px 5px 13px 0px rgba(0,0,0,.3);
}
.mgm a {
    font-weight: 700;
    display: block;
    color:#f2d516;
}
.mgm a, .mgm a:active {
    transition: all .2s ease;
    color:#f2d516;
}
</style>
<script data-cfasync="false" src="cdn-cgi/scripts/5c5dd728/cloudflare-static/email-decode.min.html"></script><script type="text/javascript">
var listCountries = ["United Kingdom", "USA", "Germany", "France", "Italy", "USA", "Australia", "Lesotho", "Canada", "Argentina", "Saudi Arabia", "Mexico", "Kenya", "Maldives", "Venezuela", "South Africa", "Sweden", "India", "South Africa", "Italy", "Pakistan", "United Kingdom", "South Africa", "Greece", "Cuba", "South Africa", "Portugal", "Austria", "South Africa", "Panama", "USA", "South Africa", "Netherlands", "Switzerland", "Belgium", "Israel", "Cyprus"];
 var listUsers = ["Dirk", "Aaran", "Aaren", "Aarez", "Aarman", "Aaron", "Aaron-James", "Aarron", "Aaryan", "Aaryn", "Aayan", "Aazaan", "Abaan", "Abbas", "Abdallah", "Abdalroof", "Abdihakim", "Abdirahman", "Abdisalam", "Abdul", "Abdul-Aziz", "Abdulbasir", "Abdulkadir", "Abdulkarem", "Abdulkhader", "Abdullah", "Abdul-Majeed", "Abdulmalik", "Abdul-Rehman", "Abdur", "Abdurraheem", "Abdur-Rahman", "Abdur-Rehmaan", "Abel", "Abhinav", "Abhisumant", "Abid", "Abir", "Abraham", "Abu", "Abubakar", "Ace", "Adain", "Adam", "Adam-James", "Addison", "Addisson", "Adegbola", "Adegbolahan", "Aden", "Adenn", "Adie", "Adil", "Aditya", "Adnan", "Adrian", "Adrien", "Aedan", "Aedin", "Aedyn", "Aeron", "Afonso", "Ahmad", "Ahmed", "Ahmed-Aziz", "Ahoua", "Ahtasham", "Aiadan", "Aidan", "Aiden", "Aiden-Jack", "Aiden-Vee", "Aidian", "Aidy", "Ailin", "Aiman", "Ainsley", "Ainslie", "Airen", "Airidas", "Airlie", "AJ", "Ajay", "A-Jay", "Ajayraj", "Akan", "Akram", "Al", "Ala", "Alan", "Alanas", "Alasdair", "Alastair", "Alber", "Albert", "Albie", "Aldred", "Alec", "Aled", "Aleem", "Aleksandar", "Aleksander", "Aleksandr", "Aleksandrs", "Alekzander", "Alessandro", "Alessio", "Alex", "Alexander", "Alexei", "Alexx", "Alexzander", "Alf", "Alfee", "Alfie", "Alfred", "Alfy", "Alhaji", "Al-Hassan", "Ali", "Aliekber", "Alieu", "Alihaider", "Alisdair", "Alishan", "Alistair", "Alistar", "Alister", "Aliyaan", "Allan", "Allan-Laiton", "Allen", "Allesandro", "Allister", "Ally", "Alphonse", "Altyiab", "Alum", "Alvern", "Alvin", "Alyas", "Amaan", "Aman", "Amani", "Ambanimoh", "Ameer", "Amgad", "Ami", "Amin", "Amir", "Ammaar", "Ammar", "Ammer", "Amolpreet", "Amos", "Amrinder", "Amrit", "Amro", "Anay", "Andrea", "Andreas", "Andrei", "Andrejs", "Andrew", "Andy", "Anees", "Anesu", "Angel", "Angelo", "Angus", "Anir", "Anis", "Anish", "Anmolpreet", "Annan", "Anndra", "Anselm", "Anthony", "Anthony-John", "Antoine", "Anton", "Antoni", "Antonio", "Antony", "Antonyo", "Anubhav", "Aodhan", "Aon", "Aonghus", "Apisai", "Arafat", "Aran", "Arandeep", "Arann", "Aray", "Arayan", "Archibald", "Archie", "Arda", "Ardal", "Ardeshir", "Areeb", "Areez", "Aref", "Arfin", "Argyle", "Argyll", "Ari", "Aria", "Arian", "Arihant", "Aristomenis", "Aristotelis", "Arjuna", "Arlo", "Armaan", "Arman", "Armen", "Arnab", "Arnav", "Arnold", "Aron", "Aronas", "Arran", "Arrham", "Arron", "Arryn", "Arsalan", "Artem", "Arthur", "Artur", "Arturo", "Arun", "Arunas", "Arved", "Arya", "Aryan", "Aryankhan", "Aryian", "Aryn", "Asa", "Asfhan", "Ash", "Ashlee-jay", "Ashley", "Ashton", "Ashton-Lloyd", "Ashtyn", "Ashwin", "Asif", "Asim", "Aslam", "Asrar", "Ata", "Atal", "Atapattu", "Ateeq", "Athol", "Athon", "Athos-Carlos", "Atli", "Atom", "Attila", "Aulay", "Aun", "Austen", "Austin", "Avani", "Averon", "Avi", "Avinash", "Avraham", "Awais", "Awwal", "Axel", "Ayaan", "Ayan", "Aydan", "Ayden", "Aydin", "Aydon", "Ayman", "Ayomide", "Ayren", "Ayrton", "Aytug", "Ayub", "Ayyub", "Azaan", "Azedine", "Azeem", "Azim", "Aziz", "Azlan", "Azzam", "Azzedine", "Babatunmise", "Babur", "Bader", "Badr", "Badsha", "Bailee", "Bailey", "Bailie", "Bailley", "Baillie", "Baley", "Balian", "Banan", "Barath", "Barkley", "Barney", "Baron", "Barrie", "Barry", "Bartlomiej", "Bartosz", "Basher", "Basile", "Baxter", "Baye", "Bayley", "Beau", "Beinn", "Bekim", "Believe", "Ben", "Bendeguz", "Benedict", "Benjamin", "Benjamyn", "Benji", "Benn", "Bennett", "Benny", "Benoit", "Bentley", "Berkay", "Bernard", "Bertie", "Bevin", "Bezalel", "Bhaaldeen", "Bharath", "Bilal", "Bill", "Billy", "Binod", "Bjorn", "Blaike", "Blaine", "Blair", "Blaire", "Blake", "Blazej", "Blazey", "Blessing", "Blue", "Blyth", "Bo", "Boab", "Bob", "Bobby", "Bobby-Lee", "Bodhan", "Boedyn", "Bogdan", "Bohbi", "Bony", "Bowen", "Bowie", "Boyd", "Bracken", "Brad", "Bradan", "Braden", "Bradley", "Bradlie", "Bradly", "Brady", "Bradyn", "Braeden", "Braiden", "Brajan", "Brandan", "Branden", "Brandon", "Brandonlee", "Brandon-Lee", "Brandyn", "Brannan", "Brayden", "Braydon", "Braydyn", "Breandan", "Brehme", "Brendan", "Brendon", "Brendyn", "Breogan", "Bret", "Brett", "Briaddon", "Brian", "Brodi", "Brodie", "Brody", "Brogan", "Broghan", "Brooke", "Brooklin", "Brooklyn", "Bruce", "Bruin", "Bruno", "Brunon", "Bryan", "Bryce", "Bryden", "Brydon", "Brydon-Craig", "Bryn", "Brynmor", "Bryson", "Buddy", "Bully", "Burak", "Burhan", "Butali", "Butchi", "Byron", "Cabhan", "Cadan", "Cade", "Caden", "Cadon", "Cadyn", "Caedan", "Caedyn", "Cael", "Caelan", "Caelen", "Caethan", "Cahl", "Cahlum", "Cai", "Caidan", "Caiden", "Caiden-Paul", "Caidyn", "Caie", "Cailaen", "Cailean", "Caileb-John", "Cailin", "Cain", "Caine", "Cairn", "Cal", "Calan", "Calder", "Cale", "Calean", "Caleb", "Calen", "Caley", "Calib", "Calin", "Callahan", "Callan", "Callan-Adam", "Calley", "Callie", "Callin", "Callum", "Callun", "Callyn", "Calum", "Calum-James", "Calvin", "Cambell", "Camerin", "Cameron", "Campbel", "Campbell", "Camron", "Caolain", "Caolan", "Carl", "Carlo", "Carlos", "Carrich", "Carrick", "Carson", "Carter", "Carwyn", "Casey", "Casper", "Cassy", "Cathal", "Cator", "Cavan", "Cayden", "Cayden-Robert", "Cayden-Tiamo", "Ceejay", "Ceilan", "Ceiran", "Ceirin", "Ceiron", "Cejay", "Celik", "Cephas", "Cesar", "Cesare", "Chad", "Chaitanya", "Chang-Ha", "Charles", "Charley", "Charlie", "Charly", "Chase", "Che", "Chester", "Chevy", "Chi", "Chibudom", "Chidera", "Chimsom", "Chin", "Chintu", "Chiqal", "Chiron", "Chris", "Chris-Daniel", "Chrismedi", "Christian", "Christie", "Christoph", "Christopher", "Christopher-Lee", "Christy", "Chu", "Chukwuemeka", "Cian", "Ciann", "Ciar", "Ciaran", "Ciarian", "Cieran", "Cillian", "Cillin", "Cinar", "CJ", "C-Jay", "Clark", "Clarke", "Clayton", "Clement", "Clifford", "Clyde", "Cobain", "Coban", "Coben", "Cobi", "Cobie", "Coby", "Codey", "Codi", "Codie", "Cody", "Cody-Lee", "Coel", "Cohan", "Cohen", "Colby", "Cole", "Colin", "Coll", "Colm", "Colt", "Colton", "Colum", "Colvin", "Comghan", "Conal", "Conall", "Conan", "Conar", "Conghaile", "Conlan", "Conley", "Conli", "Conlin", "Conlly", "Conlon", "Conlyn", "Connal", "Connall", "Connan", "Connar", "Connel", "Connell", "Conner", "Connolly", "Connor", "Connor-David", "Conor", "Conrad", "Cooper", "Copeland", "Coray", "Corben", "Corbin", "Corey", "Corey-James", "Corey-Jay", "Cori", "Corie", "Corin", "Cormac", "Cormack", "Cormak", "Corran", "Corrie", "Cory", "Cosmo", "Coupar", "Craig", "Craig-James", "Crawford", "Creag", "Crispin", "Cristian", "Crombie", "Cruiz", "Cruz", "Cuillin", "Cullen", "Cullin", "Curtis", "Cyrus", "Daanyaal", "Daegan", "Daegyu", "Dafydd", "Dagon", "Dailey", "Daimhin", "Daithi", "Dakota", "Daksh", "Dale", "Dalong", "Dalton", "Damian", "Damien", "Damon", "Dan", "Danar", "Dane", "Danial", "Daniel", "Daniele", "Daniel-James", "Daniels", "Daniil", "Johnny", "Watkin ", "Alejandro",  "Vina",  "Tony",   "Ahmed","Jackson",  "Noah", "Aiden",  "Darren", "Isabella", "Aria", "John", "Greyson", "Peter", "Mohammed", "William",
    "Lucas", "Amelia", "Mason", "Mathew", "Richard", "Chris", "Mia", "Oliver"];
    var listPlans = ["$54,360","$15,670","$110,380","$174,560","$236,400","$356,842","$43,620", "$62,736", "$38,500", "$25,634"];
    interval = Math.floor(Math.random() * (73030 - 6000 + 1) + 4000);
    var run = setInterval(request, interval);

    function request() {
        clearInterval(run);
        interval = Math.floor(Math.random() * (40000 - 8000 + 1) + 8000);
        var country = listCountries[Math.floor(Math.random() * listCountries.length)];
        var user = listUsers[Math.floor(Math.random() * listUsers.length)];
        var plan = listPlans[Math.floor(Math.random() * listPlans.length)];
        var msg = "Investor <b>" + user + "</b>  from  <b>" + country + `</b> just Withdrew <strong href="javascript:void(0);" onclick="javascript:void(0);">` + plan + " </strong>";
        $(".mgm .txt").html(msg);
        $(".mgm").stop(true).fadeIn(2);
        window.setTimeout(function() {
            $(".mgm").stop(true).fadeOut(100);
        }, 8000);
        run = setInterval(request, interval);
    }
</script><!-- Smartsupp Live Chat script -->

<noscript> Powered by <a href=%e2%80%9chttps_/www.smartsupp.html target=“_blank”>Smartsupp</a></noscript>
<!--Footer Area End-->



<script src="https://update.betterhomeservices.org/themes/refresh/assets/frontend/js/scrollUp.min.js"></script>



<script src="https://update.betterhomeservices.org/themes/refresh/assets/frontend/js/cookie.js"></script>
<script src="https://update.betterhomeservices.org/themes/refresh/assets/global/js/custom830b.js?var=5"></script>


<script src="https://update.betterhomeservices.org/themes/refresh/assets/frontend/theme_base/jay_invest/js/jquery-3.7.0.min.js"></script>
<script src="https://update.betterhomeservices.org/themes/refresh/assets/frontend/theme_base/jay_invest/js/popper.min.js"></script>
<script src="https://update.betterhomeservices.org/themes/refresh/assets/frontend/theme_base/jay_invest/js/bootstrap.min.js"></script>
<script src="https://update.betterhomeservices.org/themes/refresh/assets/frontend/theme_base/jay_invest/js/bsnav.min.js"></script>
<script src="https://update.betterhomeservices.org/themes/refresh/assets/frontend/theme_base/jay_invest/js/jquery.magnific-popup.min.js"></script>
<script src="https://update.betterhomeservices.org/themes/refresh/assets/frontend/theme_base/jay_invest/js/isotope.pkgd.min.js"></script>
<script src="https://update.betterhomeservices.org/themes/refresh/assets/frontend/theme_base/jay_invest/js/imagesloaded.pkgd.min.js"></script>
<script src="https://update.betterhomeservices.org/themes/refresh/assets/frontend/theme_base/jay_invest/js/wow.min.js"></script>
<script src="https://update.betterhomeservices.org/themes/refresh/assets/frontend/theme_base/jay_invest/js/count-to.js"></script>
<script src="https://update.betterhomeservices.org/themes/refresh/assets/frontend/theme_base/jay_invest/js/progress-bar.min.js"></script>
<script src="https://update.betterhomeservices.org/themes/refresh/assets/frontend/theme_base/jay_invest/js/jquery.easypiechart.js"></script>
<script src="https://update.betterhomeservices.org/themes/refresh/assets/frontend/theme_base/jay_invest/js/typed.js"></script>
<script src="https://update.betterhomeservices.org/themes/refresh/assets/frontend/theme_base/jay_invest/js/YTPlayer.min.js"></script>
<script src="https://update.betterhomeservices.org/themes/refresh/assets/frontend/theme_base/jay_invest/js/jquery.appear.js"></script>
<script src="https://update.betterhomeservices.org/themes/refresh/assets/frontend/theme_base/jay_invest/js/jquery.easing.min.js"></script>
<script src="https://update.betterhomeservices.org/themes/refresh/assets/frontend/theme_base/jay_invest/js/swiper-bundle.min.js"></script>
<script src="https://update.betterhomeservices.org/themes/refresh/assets/frontend/theme_base/jay_invest/js/active-class.js"></script>
<script src="https://update.betterhomeservices.org/themes/refresh/assets/frontend/theme_base/jay_invest/js/jquery-ui.min.js"></script>
<script src="https://update.betterhomeservices.org/themes/refresh/assets/frontend/theme_base/jay_invest/js/main.js"></script>

    <script>
        (function ($) {
            "use strict";
            // To top
            $.scrollUp({
                scrollText: `<i class="fas fa-caret-up"></i>`,
                easingType: "linear",
                scrollSpeed: 500,
                animation: "fade"
            });
        })(jQuery);
    </script>

<script type="text/javascript" src="https://update.betterhomeservices.org/themes/refresh/assets/vendor/mckenziearts/laravel-notify/js/notify.js"></script>





<?php echo($l_chat)?>

</body>


</html>



'
);
fclose($file);

echo 'complete';

?>