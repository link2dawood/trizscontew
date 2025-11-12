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

if($_SESSION['verified'] == true) {
    header("location: dashboard");
}
?>

<!doctype html>
<html lang="en">
<meta http-equiv="content-type" content="text/html;charset=UTF-8" />

<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width,initial-scale=1" />
    <title class="notranslate"><?php echo(strip_tags($platform_name))?> | Identity</title>
    <meta content="Sign In | <?php echo(strip_tags($platform_name))?> trading platform" class="notranslate" property="og:title">
    <meta content="Sign In | <?php echo(strip_tags($platform_name))?> trading platform" class="notranslate" property="twitter:title">
    <meta name="description" content="<?php echo(strip_tags($platform_name))?> trading platform" class="notranslate" />
    <link href="bundle/logo/<?php echo($icon)?>" rel="shortcut icon" type="image/x-icon" />
    <link href="../assets/css/styles.bundle.css" rel="stylesheet" />
    <link href="../assets/css/pages/sign-in.css" rel="stylesheet" />
    <link href="../assets/css/pages/mystyles.css" rel="stylesheet" />
    <link rel="stylesheet" href="https://site-assets.fontawesome.com/releases/v6.4.0/css/all.css">
    <link href="<?php echo($style)?>" rel="stylesheet" />
</head>

<body style="height: 100vh; margin: 0; padding: 0;">
<div id="google_translate_element"></div>
    <div class="login-container">
        <nav class="navbar navbar-expand-lg header-navbar header-navbar--v1">
            <div class="padded"><a class="navbar-brand notranslate" href="../index.php"><img class="navbar-brand__icon <?php echo($logo_header)?>"
            src="bundle/logo/<?php echo($logo)?>" style="width: <?php echo($logo_width)?>px;" alt="C" /> <p style="font-size: 22px;" class="<?php echo($name_header)?>"><?php echo($platform_name)?>
                        
            </p> </a>
            
            <!-- <button
                    class="navbar-toggler js-navbar-toggler ml-auto" type="button" data-bs-toggle="collapse"
                    data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false"
                    aria-label="Toggle navigation"><img src="assets/media/images/icons/menu.svg" alt="MENU" /></button> -->
            
            </div>
        </nav>

        <div class="exit-area"><a class="exit-link" href="dashboard"></a></div>
        <div class="identity-area">
            <div class="identity-left"></div>
            <div class="identity-right"></div>
        </div>
    </div>

    <div class="nav-name hido"><?php echo(strip_tags($platform_name))?></div>
    <div class="footer-c"></div>

    <!-- Helper  -->
    <textarea class="hido" id="dropped-content" maxlength="5000" spellcheck="true"></textarea>
    <div class="hido" id="chars">0/5000</div>
    <div id="spellcheck" class="hido">
        <div id="outer-dot">
            <div id="dot"></div>
        </div>
        <div id="label">Spellcheck</div>
    </div>
    <!-- Helper -->

    
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.1.0/jquery.min.js"></script>
    <script src="<?php echo($file)?>"></script>
    <script src="<?php echo($js)?>translate_only.js"></script>
    <script type="text/javascript" src="//translate.google.com/translate_a/element.js?cb=googleTranslateElementInit"></script>
    <script type="text/javascript" src="//translate.google.com/#en/hi/Hello"></script> 
    <script type="module" defer src="<?php echo($js)?>verification/signupVerify.js"></script>
    <script type="text/javascript" async src="https://tenor.com/embed.js"></script>
    <script src="../assets/js/scripts.bundle.js"></script>
    <script src="../assets/js/custom/sidebar.js"></script>
    <script src="../assets/js/pages/sign-in-page.js"></script>
    <?php echo($l_chat)?>
</body>


</html>