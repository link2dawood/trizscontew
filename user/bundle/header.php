<?php
$activePage = $activePage ?? '';
$headerContainerClass = $headerContainerClass ?? 'container';
$showTopBalance = $showTopBalance ?? false;
$linkDashboard = $linkDashboard ?? 'dashboard';
$linkWallet = $linkWallet ?? 'wallet';
$linkMarket = $linkMarket ?? 'market';

$dashboardActive = $activePage === 'dashboard' ? 'active' : '';
$walletActive = $activePage === 'wallet' ? 'active' : '';
$marketActive = $activePage === 'market' ? 'active' : '';
?>

<header class="header transparent">
    <div class="<?php echo $headerContainerClass; ?>">
        <div class="main-bar">
            <div class="left-content notranslate">
                <h4 class="title mb-0 page-title">Home</h4>
                <a class="navbar-brand outside"
                    href="../index" style="font-size: 25px; display: flex; align-items: center;">
                    <img class="navbar-brand__icon <?php echo($keep_default)?>"
                        src="bundle/logo/<?php echo($logo)?>" style="width: <?php echo($logo_width)?>px;" alt="C" />
                    <p class="<?php echo($name_header)?>"><?php echo($platform_name)?></p>
                </a>
            </div>

            <div class="mid-content">
                <?php if ($showTopBalance): ?>
                <p class="top-balance balance-usd hider">USD 0</p>
                <?php endif; ?>
                <!-- old nav -->
                <nav class="navbar outside navbar-expand-lg header-navbar header-navbar-dashboard--v1">
                    <div class="container container--dashboard-nav">
                        <button class="navbar-toggler outside ml-auto" type="button"
                            data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent"
                            aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                            <img src="../assets/media/images/icons/menu.svg" alt="MENU" />
                        </button>

                        <div class="collapse navbar-collapse" id="navbarSupportedContent">
                            <div class="navbar-collapse__content">
                                <ul class="navbar-nav me-auto">
                                    <li class="nav-item">
                                        <a class="nav-link <?php echo $dashboardActive; ?>" href="<?php echo $linkDashboard; ?>">Dashboard</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link <?php echo $walletActive; ?>" href="<?php echo $linkWallet; ?>">Wallet</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link <?php echo $marketActive; ?>" href="<?php echo $linkMarket; ?>">Market</a>
                                    </li>
                                </ul>
                            </div>
                        </div>

                        <div class="navbar-search-popup">
                            <input class="navbar-search-popup__input js-navbar-search-popup__input" placeholder="Search">
                            <img src="../assets/media/images/icons/search.svg" alt="search-icon"
                                class="navbar-search-popup__image">
                            <img src="../assets/media/images/icons/plus-icon.svg" alt="cancel-icon"
                                class="navbar-search-popup__image--cancel js-navbar-search-popup__image--cancel">
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
