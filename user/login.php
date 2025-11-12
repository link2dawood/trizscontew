<?php
foreach (glob("bundle/connect/platform.php") as $platform) {
	include $platform;
}
foreach (glob("bundle/connect/theme.php") as $theme) {
	include $theme;
}
foreach (glob("bundle/login/login.php") as $login)
{
    include_once($login);
}
?>

<!doctype html>
<html lang="en">
<meta http-equiv="content-type" content="text/html;charset=UTF-8" />

<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width,initial-scale=1" />
    <title class="notranslate"><?php echo(strip_tags($platform_name))?> | Login</title>
    <meta content="Sign In | <?php echo(strip_tags($platform_name))?> trading platform" class="notranslate" property="og:title">
    <meta content="Sign In | <?php echo(strip_tags($platform_name))?> trading platform" class="notranslate" property="twitter:title">
    <meta name="description" content="<?php echo(strip_tags($platform_name))?> trading platform" class="notranslate" />
    <link href="bundle/logo/<?php echo($icon)?>" rel="shortcut icon" type="image/x-icon" />
    <link href="../assets/css/styles.bundle.css" rel="stylesheet" />
    <link href="../assets/css/pages/sign-in.css" rel="stylesheet" />
    <link href="<?php echo($style)?>" rel="stylesheet" />
</head>

<body class="" style="height: 100vh;">
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


        <div class="login-area padded">
            <div class="login-left">
                <div class="back hido"><svg viewBox="0 0 96 96" width="17px" height="17px" fill="#94A6C3" xmlns="http://www.w3.org/2000/svg"><title/><path d="M39.3756,48.0022l30.47-25.39a6.0035,6.0035,0,0,0-7.6878-9.223L26.1563,43.3906a6.0092,6.0092,0,0,0,0,9.2231L62.1578,82.615a6.0035,6.0035,0,0,0,7.6878-9.2231Z"/></svg><p>Back</p></div>

                <!-- <div class="back">
                    <svg viewBox="0 0 96 96" width="17px" height="17px" fill="#94A6C3" xmlns="http://www.w3.org/2000/svg"><title/><path d="M39.3756,48.0022l30.47-25.39a6.0035,6.0035,0,0,0-7.6878-9.223L26.1563,43.3906a6.0092,6.0092,0,0,0,0,9.2231L62.1578,82.615a6.0035,6.0035,0,0,0,7.6878-9.2231Z"/></svg>
                </div> -->
                

                <!-- <div class="login-form">
                    <h3>Forgot Password</h3>


                    <div class="forgot-text">
                        <p>A link has been sent to johndoe@gmail.com with instructions for you to change your password.</p>
                    </div>
                </div> -->
            </div>
            <div class="login-right">
                <div class="login-form">
                    <h3 class="mb-3">Log In</h3>
                    <?php if(!empty($email_err) || !empty($password_err)): ?>
                        <div class="alert alert-danger" role="alert">
                            <?php echo htmlspecialchars($email_err ?: $password_err); ?>
                        </div>
                    <?php endif; ?>
                    <form method="post" action="">
                        <div class="mb-3">
                            <label for="email" class="form-label">Email</label>
                            <input
                                type="email"
                                name="email"
                                id="email"
                                class="form-control"
                                value="<?php echo htmlspecialchars($email); ?>"
                                required
                            >
                            <?php if(!empty($email_err)): ?>
                                <div class="form-text text-danger"><?php echo htmlspecialchars($email_err); ?></div>
                            <?php endif; ?>
                        </div>
                        <div class="mb-3">
                            <label for="password" class="form-label">Password</label>
                            <input
                                type="password"
                                name="password"
                                id="password"
                                class="form-control"
                                required
                            >
                            <?php if(!empty($password_err)): ?>
                                <div class="form-text text-danger"><?php echo htmlspecialchars($password_err); ?></div>
                            <?php endif; ?>
                        </div>
                        <button type="submit" class="btn btn-primary w-100">Sign In</button>
                    </form>
                </div>
            </div>
        </div>
    </div>

    <div class="nav-name hido"><?php echo(strip_tags($platform_name))?></div>
    <div class="footer-c"></div>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.1.0/jquery.min.js"></script>
    <script src="<?php echo($js)?>translate_only.js"></script>
    <script type="text/javascript" src="//translate.google.com/translate_a/element.js?cb=googleTranslateElementInit"></script>
    <script type="text/javascript" src="//translate.google.com/#en/hi/Hello"></script> 
    <script type="module" defer src="<?php echo($js)?>login/login.js"></script>
    <script src="../assets/js/scripts.bundle.js"></script>
    <script src="../assets/js/custom/sidebar.js"></script>
    <script src="../assets/js/pages/sign-in-page.js"></script>
    <?php echo($l_chat)?>
</body>


</html>