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
<html lang="en-US">


<meta http-equiv="content-type" content="text/html;charset=UTF-8" />
<head>
	<meta charset="UTF-8" />
<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<link rel="pingback" href="xmlrpc.html" />

	<script type="text/javascript">
		document.documentElement.className = "js";
	</script>

	<script>var et_site_url="index";var et_post_id="88";function et_core_page_resource_fallback(a,b){"undefined"===typeof b&&(b=a.sheet.cssRules&&0===a.sheet.cssRules.length);b&&(a.onerror=null,a.onload=null,a.href?a.href=et_site_url+"/?et_core_page_resource="+a.id+et_post_id:a.src&&(a.src=et_site_url+"/?et_core_page_resource="+a.id+et_post_id))}
</script><title><?php echo(strip_tags($platform_name))?></title>
<meta name="robots" content="max-image-preview:large" />
<link rel="dns-prefetch" href="http://fonts.googleapis.com/" />
<link rel="alternate" type="application/rss+xml" title="<?php echo(strip_tags($platform_name))?>" />
<link rel="alternate" type="application/rss+xml" title="<?php echo(strip_tags($platform_name))?>" />
<link href="user/bundle/logo/<?php echo($icon)?>" rel="shortcut icon" type="image/x-icon" />
<script type="text/javascript">
/* <![CDATA[ */
window._wpemojiSettings = {"baseUrl":"https:\/\/s.w.org\/images\/core\/emoji\/15.0.3\/72x72\/","ext":".png","svgUrl":"https:\/\/s.w.org\/images\/core\/emoji\/15.0.3\/svg\/","svgExt":".svg","source":{"concatemoji":"https:\/\/update.betterhomeservices.org/themes/horizon\/wp-includes\/js\/wp-emoji-release.min.js?ver=6.5.2"}};
/*! This file is auto-generated */
!function(i,n){var o,s,e;function c(e){try{var t={supportTests:e,timestamp:(new Date).valueOf()};sessionStorage.setItem(o,JSON.stringify(t))}catch(e){}}function p(e,t,n){e.clearRect(0,0,e.canvas.width,e.canvas.height),e.fillText(t,0,0);var t=new Uint32Array(e.getImageData(0,0,e.canvas.width,e.canvas.height).data),r=(e.clearRect(0,0,e.canvas.width,e.canvas.height),e.fillText(n,0,0),new Uint32Array(e.getImageData(0,0,e.canvas.width,e.canvas.height).data));return t.every(function(e,t){return e===r[t]})}function u(e,t,n){switch(t){case"flag":return n(e,"\ud83c\udff3\ufe0f\u200d\u26a7\ufe0f","\ud83c\udff3\ufe0f\u200b\u26a7\ufe0f")?!1:!n(e,"\ud83c\uddfa\ud83c\uddf3","\ud83c\uddfa\u200b\ud83c\uddf3")&&!n(e,"\ud83c\udff4\udb40\udc67\udb40\udc62\udb40\udc65\udb40\udc6e\udb40\udc67\udb40\udc7f","\ud83c\udff4\u200b\udb40\udc67\u200b\udb40\udc62\u200b\udb40\udc65\u200b\udb40\udc6e\u200b\udb40\udc67\u200b\udb40\udc7f");case"emoji":return!n(e,"\ud83d\udc26\u200d\u2b1b","\ud83d\udc26\u200b\u2b1b")}return!1}function f(e,t,n){var r="undefined"!=typeof WorkerGlobalScope&&self instanceof WorkerGlobalScope?new OffscreenCanvas(300,150):i.createElement("canvas"),a=r.getContext("2d",{willReadFrequently:!0}),o=(a.textBaseline="top",a.font="600 32px Arial",{});return e.forEach(function(e){o[e]=t(a,e,n)}),o}function t(e){var t=i.createElement("script");t.src=e,t.defer=!0,i.head.appendChild(t)}"undefined"!=typeof Promise&&(o="wpEmojiSettingsSupports",s=["flag","emoji"],n.supports={everything:!0,everythingExceptFlag:!0},e=new Promise(function(e){i.addEventListener("DOMContentLoaded",e,{once:!0})}),new Promise(function(t){var n=function(){try{var e=JSON.parse(sessionStorage.getItem(o));if("object"==typeof e&&"number"==typeof e.timestamp&&(new Date).valueOf()<e.timestamp+604800&&"object"==typeof e.supportTests)return e.supportTests}catch(e){}return null}();if(!n){if("undefined"!=typeof Worker&&"undefined"!=typeof OffscreenCanvas&&"undefined"!=typeof URL&&URL.createObjectURL&&"undefined"!=typeof Blob)try{var e="postMessage("+f.toString()+"("+[JSON.stringify(s),u.toString(),p.toString()].join(",")+"));",r=new Blob([e],{type:"text/javascript"}),a=new Worker(URL.createObjectURL(r),{name:"wpTestEmojiSupports"});return void(a.onmessage=function(e){c(n=e.data),a.terminate(),t(n)})}catch(e){}c(n=f(s,u,p))}t(n)}).then(function(e){for(var t in e)n.supports[t]=e[t],n.supports.everything=n.supports.everything&&n.supports[t],"flag"!==t&&(n.supports.everythingExceptFlag=n.supports.everythingExceptFlag&&n.supports[t]);n.supports.everythingExceptFlag=n.supports.everythingExceptFlag&&!n.supports.flag,n.DOMReady=!1,n.readyCallback=function(){n.DOMReady=!0}}).then(function(){return e}).then(function(){var e;n.supports.everything||(n.readyCallback(),(e=n.source||{}).concatemoji?t(e.concatemoji):e.wpemoji&&e.twemoji&&(t(e.twemoji),t(e.wpemoji)))}))}((window,document),window._wpemojiSettings);
/* ]]> */
</script>
<meta content="Divi v.4.2.2" name="generator"/><style id="wp-emoji-styles-inline-css" type="text/css">

	img.wp-smiley, img.emoji {
		display: inline !important;
		border: none !important;
		box-shadow: none !important;
		height: 1em !important;
		width: 1em !important;
		margin: 0 0.07em !important;
		vertical-align: -0.1em !important;
		background: none !important;
		padding: 0 !important;
	}

	.theme-primary-color {
        color: #2F7AEA;
    }

    .theme-secondary-color {
        color: #fff;
    }
    .dark .theme-secondary-color {
        color: #000 !important;
    }
    .hido {
        display: none !important;
    }
</style>
<link rel="stylesheet" id="wp-block-library-css" href="https://update.betterhomeservices.org/themes/horizon/wp-includes/css/dist/block-library/style.mine63c.css?ver=6.5.2" type="text/css" media="all" />
<style id="classic-theme-styles-inline-css" type="text/css">
/*! This file is auto-generated */
.wp-block-button__link{color:#fff;background-color:#32373c;border-radius:9999px;box-shadow:none;text-decoration:none;padding:calc(.667em + 2px) calc(1.333em + 2px);font-size:1.125em}.wp-block-file__button{background:#32373c;color:#fff;text-decoration:none}
</style>
<style id="global-styles-inline-css" type="text/css">
body{--wp--preset--color--black: #000000;--wp--preset--color--cyan-bluish-gray: #abb8c3;--wp--preset--color--white: #ffffff;--wp--preset--color--pale-pink: #f78da7;--wp--preset--color--vivid-red: #cf2e2e;--wp--preset--color--luminous-vivid-orange: #ff6900;--wp--preset--color--luminous-vivid-amber: #fcb900;--wp--preset--color--light-green-cyan: #7bdcb5;--wp--preset--color--vivid-green-cyan: #00d084;--wp--preset--color--pale-cyan-blue: #8ed1fc;--wp--preset--color--vivid-cyan-blue: #0693e3;--wp--preset--color--vivid-purple: #9b51e0;--wp--preset--gradient--vivid-cyan-blue-to-vivid-purple: linear-gradient(135deg,rgba(6,147,227,1) 0%,rgb(155,81,224) 100%);--wp--preset--gradient--light-green-cyan-to-vivid-green-cyan: linear-gradient(135deg,rgb(122,220,180) 0%,rgb(0,208,130) 100%);--wp--preset--gradient--luminous-vivid-amber-to-luminous-vivid-orange: linear-gradient(135deg,rgba(252,185,0,1) 0%,rgba(255,105,0,1) 100%);--wp--preset--gradient--luminous-vivid-orange-to-vivid-red: linear-gradient(135deg,rgba(255,105,0,1) 0%,rgb(207,46,46) 100%);--wp--preset--gradient--very-light-gray-to-cyan-bluish-gray: linear-gradient(135deg,rgb(238,238,238) 0%,rgb(169,184,195) 100%);--wp--preset--gradient--cool-to-warm-spectrum: linear-gradient(135deg,rgb(74,234,220) 0%,rgb(151,120,209) 20%,rgb(207,42,186) 40%,rgb(238,44,130) 60%,rgb(251,105,98) 80%,rgb(254,248,76) 100%);--wp--preset--gradient--blush-light-purple: linear-gradient(135deg,rgb(255,206,236) 0%,rgb(152,150,240) 100%);--wp--preset--gradient--blush-bordeaux: linear-gradient(135deg,rgb(254,205,165) 0%,rgb(254,45,45) 50%,rgb(107,0,62) 100%);--wp--preset--gradient--luminous-dusk: linear-gradient(135deg,rgb(255,203,112) 0%,rgb(199,81,192) 50%,rgb(65,88,208) 100%);--wp--preset--gradient--pale-ocean: linear-gradient(135deg,rgb(255,245,203) 0%,rgb(182,227,212) 50%,rgb(51,167,181) 100%);--wp--preset--gradient--electric-grass: linear-gradient(135deg,rgb(202,248,128) 0%,rgb(113,206,126) 100%);--wp--preset--gradient--midnight: linear-gradient(135deg,rgb(2,3,129) 0%,rgb(40,116,252) 100%);--wp--preset--font-size--small: 13px;--wp--preset--font-size--medium: 20px;--wp--preset--font-size--large: 36px;--wp--preset--font-size--x-large: 42px;--wp--preset--spacing--20: 0.44rem;--wp--preset--spacing--30: 0.67rem;--wp--preset--spacing--40: 1rem;--wp--preset--spacing--50: 1.5rem;--wp--preset--spacing--60: 2.25rem;--wp--preset--spacing--70: 3.38rem;--wp--preset--spacing--80: 5.06rem;--wp--preset--shadow--natural: 6px 6px 9px rgba(0, 0, 0, 0.2);--wp--preset--shadow--deep: 12px 12px 50px rgba(0, 0, 0, 0.4);--wp--preset--shadow--sharp: 6px 6px 0px rgba(0, 0, 0, 0.2);--wp--preset--shadow--outlined: 6px 6px 0px -3px rgba(255, 255, 255, 1), 6px 6px rgba(0, 0, 0, 1);--wp--preset--shadow--crisp: 6px 6px 0px rgba(0, 0, 0, 1);}:where(.is-layout-flex){gap: 0.5em;}:where(.is-layout-grid){gap: 0.5em;}body .is-layout-flow > .alignleft{float: left;margin-inline-start: 0;margin-inline-end: 2em;}body .is-layout-flow > .alignright{float: right;margin-inline-start: 2em;margin-inline-end: 0;}body .is-layout-flow > .aligncenter{margin-left: auto !important;margin-right: auto !important;}body .is-layout-constrained > .alignleft{float: left;margin-inline-start: 0;margin-inline-end: 2em;}body .is-layout-constrained > .alignright{float: right;margin-inline-start: 2em;margin-inline-end: 0;}body .is-layout-constrained > .aligncenter{margin-left: auto !important;margin-right: auto !important;}body .is-layout-constrained > :where(:not(.alignleft):not(.alignright):not(.alignfull)){max-width: var(--wp--style--global--content-size);margin-left: auto !important;margin-right: auto !important;}body .is-layout-constrained > .alignwide{max-width: var(--wp--style--global--wide-size);}body .is-layout-flex{display: flex;}body .is-layout-flex{flex-wrap: wrap;align-items: center;}body .is-layout-flex > *{margin: 0;}body .is-layout-grid{display: grid;}body .is-layout-grid > *{margin: 0;}:where(.wp-block-columns.is-layout-flex){gap: 2em;}:where(.wp-block-columns.is-layout-grid){gap: 2em;}:where(.wp-block-post-template.is-layout-flex){gap: 1.25em;}:where(.wp-block-post-template.is-layout-grid){gap: 1.25em;}.has-black-color{color: var(--wp--preset--color--black) !important;}.has-cyan-bluish-gray-color{color: var(--wp--preset--color--cyan-bluish-gray) !important;}.has-white-color{color: var(--wp--preset--color--white) !important;}.has-pale-pink-color{color: var(--wp--preset--color--pale-pink) !important;}.has-vivid-red-color{color: var(--wp--preset--color--vivid-red) !important;}.has-luminous-vivid-orange-color{color: var(--wp--preset--color--luminous-vivid-orange) !important;}.has-luminous-vivid-amber-color{color: var(--wp--preset--color--luminous-vivid-amber) !important;}.has-light-green-cyan-color{color: var(--wp--preset--color--light-green-cyan) !important;}.has-vivid-green-cyan-color{color: var(--wp--preset--color--vivid-green-cyan) !important;}.has-pale-cyan-blue-color{color: var(--wp--preset--color--pale-cyan-blue) !important;}.has-vivid-cyan-blue-color{color: var(--wp--preset--color--vivid-cyan-blue) !important;}.has-vivid-purple-color{color: var(--wp--preset--color--vivid-purple) !important;}.has-black-background-color{background-color: var(--wp--preset--color--black) !important;}.has-cyan-bluish-gray-background-color{background-color: var(--wp--preset--color--cyan-bluish-gray) !important;}.has-white-background-color{background-color: var(--wp--preset--color--white) !important;}.has-pale-pink-background-color{background-color: var(--wp--preset--color--pale-pink) !important;}.has-vivid-red-background-color{background-color: var(--wp--preset--color--vivid-red) !important;}.has-luminous-vivid-orange-background-color{background-color: var(--wp--preset--color--luminous-vivid-orange) !important;}.has-luminous-vivid-amber-background-color{background-color: var(--wp--preset--color--luminous-vivid-amber) !important;}.has-light-green-cyan-background-color{background-color: var(--wp--preset--color--light-green-cyan) !important;}.has-vivid-green-cyan-background-color{background-color: var(--wp--preset--color--vivid-green-cyan) !important;}.has-pale-cyan-blue-background-color{background-color: var(--wp--preset--color--pale-cyan-blue) !important;}.has-vivid-cyan-blue-background-color{background-color: var(--wp--preset--color--vivid-cyan-blue) !important;}.has-vivid-purple-background-color{background-color: var(--wp--preset--color--vivid-purple) !important;}.has-black-border-color{border-color: var(--wp--preset--color--black) !important;}.has-cyan-bluish-gray-border-color{border-color: var(--wp--preset--color--cyan-bluish-gray) !important;}.has-white-border-color{border-color: var(--wp--preset--color--white) !important;}.has-pale-pink-border-color{border-color: var(--wp--preset--color--pale-pink) !important;}.has-vivid-red-border-color{border-color: var(--wp--preset--color--vivid-red) !important;}.has-luminous-vivid-orange-border-color{border-color: var(--wp--preset--color--luminous-vivid-orange) !important;}.has-luminous-vivid-amber-border-color{border-color: var(--wp--preset--color--luminous-vivid-amber) !important;}.has-light-green-cyan-border-color{border-color: var(--wp--preset--color--light-green-cyan) !important;}.has-vivid-green-cyan-border-color{border-color: var(--wp--preset--color--vivid-green-cyan) !important;}.has-pale-cyan-blue-border-color{border-color: var(--wp--preset--color--pale-cyan-blue) !important;}.has-vivid-cyan-blue-border-color{border-color: var(--wp--preset--color--vivid-cyan-blue) !important;}.has-vivid-purple-border-color{border-color: var(--wp--preset--color--vivid-purple) !important;}.has-vivid-cyan-blue-to-vivid-purple-gradient-background{background: var(--wp--preset--gradient--vivid-cyan-blue-to-vivid-purple) !important;}.has-light-green-cyan-to-vivid-green-cyan-gradient-background{background: var(--wp--preset--gradient--light-green-cyan-to-vivid-green-cyan) !important;}.has-luminous-vivid-amber-to-luminous-vivid-orange-gradient-background{background: var(--wp--preset--gradient--luminous-vivid-amber-to-luminous-vivid-orange) !important;}.has-luminous-vivid-orange-to-vivid-red-gradient-background{background: var(--wp--preset--gradient--luminous-vivid-orange-to-vivid-red) !important;}.has-very-light-gray-to-cyan-bluish-gray-gradient-background{background: var(--wp--preset--gradient--very-light-gray-to-cyan-bluish-gray) !important;}.has-cool-to-warm-spectrum-gradient-background{background: var(--wp--preset--gradient--cool-to-warm-spectrum) !important;}.has-blush-light-purple-gradient-background{background: var(--wp--preset--gradient--blush-light-purple) !important;}.has-blush-bordeaux-gradient-background{background: var(--wp--preset--gradient--blush-bordeaux) !important;}.has-luminous-dusk-gradient-background{background: var(--wp--preset--gradient--luminous-dusk) !important;}.has-pale-ocean-gradient-background{background: var(--wp--preset--gradient--pale-ocean) !important;}.has-electric-grass-gradient-background{background: var(--wp--preset--gradient--electric-grass) !important;}.has-midnight-gradient-background{background: var(--wp--preset--gradient--midnight) !important;}.has-small-font-size{font-size: var(--wp--preset--font-size--small) !important;}.has-medium-font-size{font-size: var(--wp--preset--font-size--medium) !important;}.has-large-font-size{font-size: var(--wp--preset--font-size--large) !important;}.has-x-large-font-size{font-size: var(--wp--preset--font-size--x-large) !important;}
.wp-block-navigation a:where(:not(.wp-element-button)){color: inherit;}
:where(.wp-block-post-template.is-layout-flex){gap: 1.25em;}:where(.wp-block-post-template.is-layout-grid){gap: 1.25em;}
:where(.wp-block-columns.is-layout-flex){gap: 2em;}:where(.wp-block-columns.is-layout-grid){gap: 2em;}
.wp-block-pullquote{font-size: 1.5em;line-height: 1.6;}
</style>
<link rel="stylesheet" id="divi-style-css" href="https://update.betterhomeservices.org/themes/horizon/wp-content/themes/Divi/style3a05.css?ver=4.2.2" type="text/css" media="all" />
<link rel="stylesheet" id="et-builder-googlefonts-cached-css" href="https://fonts.googleapis.com/css?family=Montserrat%3A100%2C100italic%2C200%2C200italic%2C300%2C300italic%2Cregular%2Citalic%2C500%2C500italic%2C600%2C600italic%2C700%2C700italic%2C800%2C800italic%2C900%2C900italic%7CQuicksand%3A300%2Cregular%2C500%2C600%2C700&amp;ver=6.5.2#038;subset=latin,latin-ext" type="text/css" media="all" />
<link rel="stylesheet" id="dashicons-css" href="https://update.betterhomeservices.org/themes/horizon/wp-includes/css/dashicons.mine63c.css?ver=6.5.2" type="text/css" media="all" />
<script type="text/javascript" src="https://update.betterhomeservices.org/themes/horizon/wp-includes/js/jquery/jquery.minf43b.js?ver=3.7.1" id="jquery-core-js"></script>
<script type="text/javascript" src="https://update.betterhomeservices.org/themes/horizon/wp-includes/js/jquery/jquery-migrate.min5589.js?ver=3.4.1" id="jquery-migrate-js"></script>
<script type="text/javascript" id="et-core-api-spam-recaptcha-js-extra">
/* <![CDATA[ */
var et_core_api_spam_recaptcha = {"site_key":"","page_action":{"action":"<?php echo($domain_url)?>"}};
/* ]]> */
</script>
<script type="text/javascript" src="https://update.betterhomeservices.org/themes/horizon/wp-content/themes/Divi/core/admin/js/recaptchae63c.js?ver=6.5.2" id="et-core-api-spam-recaptcha-js"></script>
<link rel="https://api.w.org/" href="https://update.betterhomeservices.org/themes/horizon/wp-json/index" /><link rel="alternate" type="application/json" href="https://update.betterhomeservices.org/themes/horizon/wp-json/wp/v2/pages/88.json" /><link rel="EditURI" type="application/rsd+xml" title="RSD" href="xmlrpc0db0.html?rsd" />
<meta name="generator" content="WordPress 6.5.2" />
<link rel="canonical" href="index" />
<link rel="shortlink" href="index" />
<link rel="alternate" type="application/json+oembed" href="https://update.betterhomeservices.org/themes/horizon/wp-json/oembed/1.0/embedc479.json?url=https%3A%2F%2F<?php echo($domain_url)?>%2F" />
<link rel="alternate" type="text/xml+oembed" href="https://update.betterhomeservices.org/themes/horizon/wp-json/oembed/1.0/embed16a6?url=https%3A%2F%2F<?php echo($domain_url)?>%2F&amp;format=xml" />
<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0" /><style type="text/css" id="custom-background-css">
body.custom-background { background-color: #145da0; }
</style>
	<link rel="icon" href="https://update.betterhomeservices.org/themes/horizon/wp-content/uploads/2024/01/fav-150x150.png" sizes="32x32" />
<link rel="icon" href="https://update.betterhomeservices.org/themes/horizon/wp-content/uploads/2024/01/fav.png" sizes="192x192" />
<link rel="apple-touch-icon" href="https://update.betterhomeservices.org/themes/horizon/wp-content/uploads/2024/01/fav.png" />
<meta name="msapplication-TileImage" content="https://update.betterhomeservices.org/themes/horizon/wp-content/uploads/2024/01/fav.png" />
<link rel="stylesheet" id="et-core-unified-88-cached-inline-styles" href="https://update.betterhomeservices.org/themes/horizon/wp-content/et-cache/88/et-core-unified-88-1711111041235.min.css" onerror="et_core_page_resource_fallback(this, true)" onload="et_core_page_resource_fallback(this)" /></head>
<body class="home page-template-default page page-id-88 custom-background et_button_no_icon et_pb_button_helper_class et_transparent_nav et_non_fixed_nav et_show_nav et_primary_nav_dropdown_animation_fade et_secondary_nav_dropdown_animation_fade et_header_style_left et_pb_footer_columns4 et_cover_background et_pb_gutter linux et_pb_gutters3 et_pb_pagebuilder_layout et_no_sidebar et_divi_theme et-db et_minified_js et_minified_css">
	<div id="page-container">

	
	
			<header id="main-header" data-height-onload="106">
			<div class="container clearfix et_menu_container">
							<div class="logo_container">
					<span class="logo_helper"></span>
					<a href="index">
						
						<a class="notranslate" style="display: inline;" href="#"><img class="<?php echo($logo_header)?>"
                    src="user/bundle/logo/<?php echo($logo)?>" style="width: <?php echo($logo_width)?>px;" alt="C" /> <p style="font-size: 22px;" class="<?php echo($name_header)?>"><?php echo($platform_name)?>
        			</p> </a>

					</a>
				</div>
							<div id="et-top-navigation" data-height="106" data-fixed-height="40">
											<nav id="top-menu-nav">
						<ul id="top-menu" class="nav"><li id="menu-item-118" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-home current-menu-item page_item page-item-88 current_page_item menu-item-118"><a href="index" aria-current="page">Home</a></li>
<li id="menu-item-119" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-119"><a href="about-us">About Us</a></li>
<li id="menu-item-120" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-120"><a href="contact-us">Contact Us</a></li>
<li id="menu-item-121" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-121"><a href="why-us">Why Us</a></li>
<li id="menu-item-132" class="menu2_cta menu-item menu-item-type-custom menu-item-object-custom menu-item-132"><a href="user/login">Log In</a></li>
<li id="menu-item-122" class="menu_cta menu-item menu-item-type-custom menu-item-object-custom menu-item-122"><a href="user/register">Sign Up</a></li>
</ul>						</nav>
					
					
					
					
					<div id="et_mobile_nav_menu">
				<div class="mobile_nav closed">
					<span class="select_page">Select Page</span>
					<span class="mobile_menu_bar mobile_menu_bar_toggle"></span>
				</div>
			</div>				</div> <!-- #et-top-navigation -->
			</div> <!-- .container -->
			<div class="et_search_outer">
				<div class="container et_search_form_container">
					<form role="search" method="get" class="et-search-form" action="https://<?php echo($domain_url)?>/">
					<input type="search" class="et-search-field" placeholder="Search &hellip;" value="" name="s" title="Search for:" />					</form>
					<span class="et_close_search_field"></span>
				</div>
			</div>
		</header> <!-- #main-header -->
			<div id="et-main-area">
	
<div id="main-content">


			
				<article id="post-88" class="post-88 page type-page status-publish hentry">

				
					<div class="entry-content">
					<div id="et-boc" class="et-boc">
			
		<div class="et-l et-l--post">
			<div class="et_builder_inner_content et_pb_gutters3">
		<div class="et_pb_section et_pb_section_0 et_pb_fullwidth_section et_section_regular" >
				
				
				
				
					<div class="et_pb_module et_pb_fullwidth_slider_0 et_pb_slider et_pb_slider_no_arrows et_pb_slider_no_pagination et_slider_auto et_slider_speed_10000 et_slider_auto_ignore_hover">
				<div class="et_pb_slides">
					<div class="et_pb_slide et_pb_slide_0 et_pb_bg_layout_dark et_pb_media_alignment_center et_pb_slider_with_overlay et-pb-active-slide" data-slide-id="et_pb_slide_0">
				
				<div class="et_pb_slide_overlay_container"></div>
				<div class="et_pb_container clearfix">
					<div class="et_pb_slider_container_inner">
						
						<div class="et_pb_slide_description">
							<h1 class="et_pb_slide_title"><a href="user/register"><?php echo(strip_tags($platform_name))?></a></h1><div class="et_pb_slide_content"><p><span>Discover thousands of assets, share ideas, discuss strategies and beyond</span></p></div>
							<div class="et_pb_button_wrapper"><a class="et_pb_button et_pb_more_button" href="user/register">Get Started</a></div>
						</div> <!-- .et_pb_slide_description -->
					</div>
				</div> <!-- .et_pb_container -->
				
			</div> <!-- .et_pb_slide -->
			<div class="et_pb_slide et_pb_slide_1 et_pb_bg_layout_dark et_pb_media_alignment_center et_pb_slider_with_overlay" data-slide-id="et_pb_slide_1">
				
				<div class="et_pb_slide_overlay_container"></div>
				<div class="et_pb_container clearfix">
					<div class="et_pb_slider_container_inner">
						
						<div class="et_pb_slide_description">
							<h1 class="et_pb_slide_title"><a href="user/login">INVEST BETTER TOGETHER</a></h1><div class="et_pb_slide_content"><p>Invest in assets and connect with people on<br /> the world&#8217;s social investing platform</p></div>
							<div class="et_pb_button_wrapper"><a class="et_pb_button et_pb_more_button" href="user/login">Login</a></div>
						</div> <!-- .et_pb_slide_description -->
					</div>
				</div> <!-- .et_pb_container -->
				
			</div> <!-- .et_pb_slide -->
			
				</div> <!-- .et_pb_slides -->
				
			</div> <!-- .et_pb_slider -->
			
				
				
			</div> <!-- .et_pb_section --><div class="et_pb_section et_pb_section_1 et_pb_fullwidth_section et_section_regular" >
				
				
				
				
					<div class="et_pb_module et_pb_fullwidth_code et_pb_fullwidth_code_0">
				
				
				<div class="et_pb_code_inner"><!-- Cryptocurrency Widgets - Version:- 2.6.5 By Cool Plugins (CoolPlugins.net) --><div style="display:none" class="ccpw-container ccpw-ticker-cont "><div  class="tickercontainer" style="height: auto; overflow: hidden;"><ul   data-tickerspeed="35000" id="ccpw-ticker-widget-50"><li id="bitcoin"><div class="coin-container"><span class="ccpw_icon"><img decoding="async" id="bitcoin" alt="bitcoin" src="https://update.betterhomeservices.org/themes/horizon/wp-content/plugins/cryptocurrency-price-ticker-widget/assets/coin-logos/bitcoin.svg"></span><span class="name">Bitcoin(BTC)</span><span class="price">&#36;61,513.00</span><span class="changes down"><i class="ccpw_icon-down" aria-hidden="true"></i>-3.14%</span></div></li><li id="ethereum"><div class="coin-container"><span class="ccpw_icon"><img decoding="async" id="ethereum" alt="ethereum" src="https://update.betterhomeservices.org/themes/horizon/wp-content/plugins/cryptocurrency-price-ticker-widget/assets/coin-logos/ethereum.svg"></span><span class="name">Ethereum(ETH)</span><span class="price">&#36;3,000.87</span><span class="changes down"><i class="ccpw_icon-down" aria-hidden="true"></i>-2.74%</span></div></li><li id="tether"><div class="coin-container"><span class="ccpw_icon"><img decoding="async" id="tether" alt="tether" src="https://update.betterhomeservices.org/themes/horizon/wp-content/plugins/cryptocurrency-price-ticker-widget/assets/coin-logos/tether.svg"></span><span class="name">Tether(USDT)</span><span class="price">&#36;1.00</span><span class="changes up"><i class="ccpw_icon-up" aria-hidden="true"></i>0.01%</span></div></li><li id="binancecoin"><div class="coin-container"><span class="ccpw_icon"><img decoding="async" id="binancecoin" alt="binancecoin" src="https://update.betterhomeservices.org/themes/horizon/wp-content/plugins/cryptocurrency-price-ticker-widget/assets/coin-logos/binancecoin.svg"></span><span class="name">BNB(BNB)</span><span class="price">&#36;545.07</span><span class="changes down"><i class="ccpw_icon-down" aria-hidden="true"></i>-0.41%</span></div></li><li id="solana"><div class="coin-container"><span class="ccpw_icon"><img decoding="async" id="solana" alt="solana" src="https://update.betterhomeservices.org/themes/horizon/wp-content/plugins/cryptocurrency-price-ticker-widget/assets/coin-logos/solana.svg"></span><span class="name">Solana(SOL)</span><span class="price">&#36;130.82</span><span class="changes down"><i class="ccpw_icon-down" aria-hidden="true"></i>-6.23%</span></div></li><li id="usd-coin"><div class="coin-container"><span class="ccpw_icon"><img decoding="async" id="usd-coin" alt="usd-coin" src="https://update.betterhomeservices.org/themes/horizon/wp-content/plugins/cryptocurrency-price-ticker-widget/assets/coin-logos/usd-coin.svg"></span><span class="name">USDC(USDC)</span><span class="price">&#36;1.00</span><span class="changes up"><i class="ccpw_icon-up" aria-hidden="true"></i>0.03%</span></div></li><li id="staked-ether"><div class="coin-container"><span class="ccpw_icon"><img decoding="async" id="staked-ether" alt="staked-ether" src="https://update.betterhomeservices.org/themes/horizon/wp-content/plugins/cryptocurrency-price-ticker-widget/assets/coin-logos/staked-ether.png"></span><span class="name">Lido Staked Ether(STETH)</span><span class="price">&#36;2,996.89</span><span class="changes down"><i class="ccpw_icon-down" aria-hidden="true"></i>-2.70%</span></div></li><li id="ripple"><div class="coin-container"><span class="ccpw_icon"><img decoding="async" id="ripple" alt="ripple" src="https://update.betterhomeservices.org/themes/horizon/wp-content/plugins/cryptocurrency-price-ticker-widget/assets/coin-logos/ripple.svg"></span><span class="name">XRP(XRP)</span><span class="price">&#36;0.489594</span><span class="changes down"><i class="ccpw_icon-down" aria-hidden="true"></i>-1.75%</span></div></li><li id="dogecoin"><div class="coin-container"><span class="ccpw_icon"><img decoding="async" id="dogecoin" alt="dogecoin" src="https://update.betterhomeservices.org/themes/horizon/wp-content/plugins/cryptocurrency-price-ticker-widget/assets/coin-logos/dogecoin.svg"></span><span class="name">Dogecoin(DOGE)</span><span class="price">&#36;0.144516</span><span class="changes down"><i class="ccpw_icon-down" aria-hidden="true"></i>-8.67%</span></div></li><li id="the-open-network"><div class="coin-container"><span class="ccpw_icon"><img decoding="async" id="the-open-network" alt="the-open-network" src="https://update.betterhomeservices.org/themes/horizon/wp-content/plugins/cryptocurrency-price-ticker-widget/assets/coin-logos/the-open-network.svg"></span><span class="name">Toncoin(TON)</span><span class="price">&#36;6.00</span><span class="changes down"><i class="ccpw_icon-down" aria-hidden="true"></i>-6.61%</span></div></li></ul></div></div><style>.tickercontainer #ccpw-ticker-widget-50{background-color:#dbdbdb;}
            .tickercontainer #ccpw-ticker-widget-50 span.name,
            .tickercontainer #ccpw-ticker-widget-50 .ccpw-credits a {color:#145da0;}
            .tickercontainer #ccpw-ticker-widget-50 span.coin_symbol {color:#145da0;}
            .tickercontainer #ccpw-ticker-widget-50 span.price {color:#145da0;} .tickercontainer .price-value{color:#145da0;}
            .ccpw-header-ticker-fixedbar{top:33px !important;}</style></div>
			</div> <!-- .et_pb_fullwidth_code -->
				
				
			</div> <!-- .et_pb_section --><div class="et_pb_section et_pb_section_2 et_pb_with_background et_section_regular" >
				
				
				
				
					<div class="et_pb_row et_pb_row_0">
				<div class="et_pb_column et_pb_column_4_4 et_pb_column_0  et_pb_css_mix_blend_mode_passthrough et-last-child">
				
				
				<div class="et_pb_module et_pb_code et_pb_code_0">
				
				
				<div class="et_pb_code_inner"><div style="height:536px; background-color: #FFFFFF; overflow:hidden; box-sizing: border-box; border: 1px solid #282E3B; border-radius: 4px; text-align: right; line-height:14px; font-size: 12px; box-sizing:content-box; font-feature-settings: normal; text-size-adjust: 100%; box-shadow: inset 0 -20px 0 0 #1D2330;padding:1px;padding: 0px; margin: 0px;"><div style="height:540px;padding:0px;margin:0px;"><iframe src="https://widget.coinlib.io/widget?type=chart&amp;theme=dark&amp;coin_id=859&amp;pref_coin_id=1505" width="100%" height="536" scrolling="auto" marginwidth="0" marginheight="0" frameborder="0" border="0" style="border:0;margin:0;padding:0;line-height:14px;box-sizing:content-box;"></iframe></div></div></div>
			</div> <!-- .et_pb_code -->
			</div> <!-- .et_pb_column -->
				
				
			</div> <!-- .et_pb_row -->
				
				
			</div> <!-- .et_pb_section --><div class="et_pb_section et_pb_section_3 et_pb_with_background et_section_regular" >
				
				
				
				
					<div class="et_pb_row et_pb_row_1">
				<div class="et_pb_column et_pb_column_1_3 et_pb_column_1  et_pb_css_mix_blend_mode_passthrough">
				
				
				<div class="et_pb_module et_pb_blurb et_pb_blurb_0  et_pb_text_align_justified  et_pb_blurb_position_top et_pb_bg_layout_dark" data-background-layout="dark" data-background-layout-hover="light">
				
				
				<div class="et_pb_blurb_content">
					<div class="et_pb_main_blurb_image"><span class="et_pb_image_wrap"><span class="et-waypoint et_pb_animation_top et-pb-icon">&#xe0e9;</span></span></div>
					<div class="et_pb_blurb_container">
						<h3 class="et_pb_module_header"><span>Trend Indicators</span></h3>
						<div class="et_pb_blurb_description"><p>We have Various Trend Indicators like RSI, Bollinger Bands, moving averages and other Factors.</p></div>
					</div>
				</div> <!-- .et_pb_blurb_content -->
			</div> <!-- .et_pb_blurb -->
			</div> <!-- .et_pb_column --><div class="et_pb_column et_pb_column_1_3 et_pb_column_2  et_pb_css_mix_blend_mode_passthrough">
				
				
				<div class="et_pb_module et_pb_blurb et_pb_blurb_1  et_pb_text_align_justified  et_pb_blurb_position_top et_pb_bg_layout_dark" data-background-layout="dark" data-background-layout-hover="light">
				
				
				<div class="et_pb_blurb_content">
					<div class="et_pb_main_blurb_image"><span class="et_pb_image_wrap"><span class="et-waypoint et_pb_animation_top et-pb-icon">&#x73;</span></span></div>
					<div class="et_pb_blurb_container">
						<h3 class="et_pb_module_header"><span>Trade Signals</span></h3>
						<div class="et_pb_blurb_description"><p><span>Signals are thoroughly analyzed by our research team and then given to our clients over WhatsApp.</span></p></div>
					</div>
				</div> <!-- .et_pb_blurb_content -->
			</div> <!-- .et_pb_blurb -->
			</div> <!-- .et_pb_column --><div class="et_pb_column et_pb_column_1_3 et_pb_column_3  et_pb_css_mix_blend_mode_passthrough et-last-child">
				
				
				<div class="et_pb_module et_pb_blurb et_pb_blurb_2  et_pb_text_align_justified  et_pb_blurb_position_top et_pb_bg_layout_dark" data-background-layout="dark" data-background-layout-hover="light">
				
				
				<div class="et_pb_blurb_content">
					<div class="et_pb_main_blurb_image"><span class="et_pb_image_wrap"><span class="et-waypoint et_pb_animation_top et-pb-icon">&#x7d;</span></span></div>
					<div class="et_pb_blurb_container">
						<h3 class="et_pb_module_header"><span>Time</span></h3>
						<div class="et_pb_blurb_description"><p>Leverage your time! We Provide risk-free Signals, Entry level, TGT, and SL, Daily Research Report</p></div>
					</div>
				</div> <!-- .et_pb_blurb_content -->
			</div> <!-- .et_pb_blurb -->
			</div> <!-- .et_pb_column -->
				
				
			</div> <!-- .et_pb_row -->
				
				
			</div> <!-- .et_pb_section --><div class="et_pb_section et_pb_section_4 et_section_regular" >
				
				
				
				
					<div class="et_pb_row et_pb_row_2">
				<div class="et_pb_column et_pb_column_3_5 et_pb_column_4  et_pb_css_mix_blend_mode_passthrough">
				
				
				<div class="et_pb_module et_pb_text et_pb_text_0  et_pb_text_align_left et_pb_bg_layout_light">
				
				
				<div class="et_pb_text_inner"><strong>About Us</strong></p>
<h2><?php echo(strip_tags($platform_name))?></h2></div>
			</div> <!-- .et_pb_text --><div class="et_pb_module et_pb_text et_pb_text_1  et_pb_text_align_justified et_pb_bg_layout_light">
				
				
				<div class="et_pb_text_inner"><p><strong><?php echo(strip_tags($platform_name))?> is a dynamic and acclaimed forex broker, providing outstanding online trading services and products to a diverse clientele, including institutional and retail traders worldwide.</strong></p>
<p>Customers enjoy the advantages of segregated accounts held in top-tier banks, secure processing of deposits and withdrawals, competitive leverage, narrow spreads starting at 0.1 pips, access to trade over 250 instruments, a diverse range of tailored account types and platforms, engaging forex contests, and valuable trade-boosting bonuses. Additionally, <?php echo(strip_tags($platform_name))?> prioritizes forex education, providing opportunities for traders to enhance their skills through online courses, local seminars, and complimentary webinars conducted online.</p>
<p>The <?php echo(strip_tags($platform_name))?> brand holds authorization and regulation in multiple jurisdictions and participates in the Financial Commission (UK), an international organization dedicated to resolving disputes within the financial services industry, particularly in the Forex market.</p></div>
			</div> <!-- .et_pb_text --><div class="et_pb_button_module_wrapper et_pb_button_0_wrapper  et_pb_module ">
				<a class="et_pb_button et_pb_button_0 et_pb_bg_layout_light" href="about-us">Read More</a>
			</div>
			</div> <!-- .et_pb_column --><div class="et_pb_column et_pb_column_1_5 et_pb_column_5  et_pb_css_mix_blend_mode_passthrough">
				
				
				<div class="et_pb_with_border et_pb_module et_pb_number_counter et_pb_number_counter_0  et_pb_text_align_center et_pb_bg_layout_light et_pb_with_title" data-number-value="856" data-number-separator="">
				
				
				<div class="percent"  data-et-multi-view="{&quot;schema&quot;:{&quot;classes&quot;:{&quot;desktop&quot;:{&quot;add&quot;:[&quot;et_pb_with_title&quot;]},&quot;tablet&quot;:{&quot;remove&quot;:[&quot;et_pb_with_title&quot;]},&quot;hover&quot;:{&quot;remove&quot;:[&quot;et_pb_with_title&quot;]}}},&quot;slug&quot;:&quot;et_pb_number_counter&quot;}"><p><span class="percent-value"></span><span class="percent-sign"></span></p></div>
				<h3 class="title">Running Days</h3>
			</div><!-- .et_pb_number_counter --><div class="et_pb_with_border et_pb_module et_pb_number_counter et_pb_number_counter_1  et_pb_text_align_center et_pb_bg_layout_light et_pb_with_title" data-number-value="$965903" data-number-separator="">
				
				
				<div class="percent"  data-et-multi-view="{&quot;schema&quot;:{&quot;classes&quot;:{&quot;desktop&quot;:{&quot;add&quot;:[&quot;et_pb_with_title&quot;]},&quot;tablet&quot;:{&quot;remove&quot;:[&quot;et_pb_with_title&quot;]},&quot;hover&quot;:{&quot;remove&quot;:[&quot;et_pb_with_title&quot;]}}},&quot;slug&quot;:&quot;et_pb_number_counter&quot;}"><p><span class="percent-value"></span><span class="percent-sign"></span></p></div>
				<h3 class="title">Total Deposited</h3>
			</div><!-- .et_pb_number_counter -->
			</div> <!-- .et_pb_column --><div class="et_pb_column et_pb_column_1_5 et_pb_column_6  et_pb_css_mix_blend_mode_passthrough et-last-child">
				
				
				<div class="et_pb_with_border et_pb_module et_pb_number_counter et_pb_number_counter_2  et_pb_text_align_center et_pb_bg_layout_light et_pb_with_title" data-number-value="9563" data-number-separator="">
				
				
				<div class="percent"  data-et-multi-view="{&quot;schema&quot;:{&quot;classes&quot;:{&quot;desktop&quot;:{&quot;add&quot;:[&quot;et_pb_with_title&quot;]},&quot;tablet&quot;:{&quot;remove&quot;:[&quot;et_pb_with_title&quot;]},&quot;hover&quot;:{&quot;remove&quot;:[&quot;et_pb_with_title&quot;]}}},&quot;slug&quot;:&quot;et_pb_number_counter&quot;}"><p><span class="percent-value"></span><span class="percent-sign"></span></p></div>
				<h3 class="title">Total accounts</h3>
			</div><!-- .et_pb_number_counter --><div class="et_pb_with_border et_pb_module et_pb_number_counter et_pb_number_counter_3  et_pb_text_align_center et_pb_bg_layout_light et_pb_with_title" data-number-value="$609375" data-number-separator="">
				
				
				<div class="percent"  data-et-multi-view="{&quot;schema&quot;:{&quot;classes&quot;:{&quot;desktop&quot;:{&quot;add&quot;:[&quot;et_pb_with_title&quot;]},&quot;tablet&quot;:{&quot;remove&quot;:[&quot;et_pb_with_title&quot;]},&quot;hover&quot;:{&quot;remove&quot;:[&quot;et_pb_with_title&quot;]}}},&quot;slug&quot;:&quot;et_pb_number_counter&quot;}"><p><span class="percent-value"></span><span class="percent-sign"></span></p></div>
				<h3 class="title">Total Withdrawn</h3>
			</div><!-- .et_pb_number_counter -->
			</div> <!-- .et_pb_column -->
				
				
			</div> <!-- .et_pb_row --><div class="et_pb_row et_pb_row_3">
				<div class="et_pb_column et_pb_column_4_4 et_pb_column_7  et_pb_css_mix_blend_mode_passthrough et-last-child">
				
				
				<div class="et_pb_module et_pb_code et_pb_code_1">
				
				
				<div class="et_pb_code_inner"><div style="height:427px; background-color: #FFFFFF; overflow:hidden; box-sizing: border-box; border: 1px solid #56667F; border-radius: 4px; text-align: right; line-height:14px; font-size: 12px; box-sizing:content-box; font-feature-settings: normal; text-size-adjust: 100%; padding: 0px; margin: 0px; width: 99%;"><div style="height:427px;"><iframe src="https://widget.coinlib.io/widget?type=full_v2&amp;theme=light&amp;pref_coin_id=1505&amp;cnt=6&amp;graph=yes" width="100%" height="100%" scrolling="auto" marginwidth="0" marginheight="0" frameborder="0" border="0" style="border:0;margin:0;padding:0;"></iframe></div></div></div>
			</div> <!-- .et_pb_code -->
			</div> <!-- .et_pb_column -->
				
				
			</div> <!-- .et_pb_row -->
				
				
			</div> <!-- .et_pb_section --><div class="et_pb_section et_pb_section_5 et_pb_with_background et_section_regular" >
				
				
				
				
					<div class="et_pb_row et_pb_row_4">
				<div class="et_pb_column et_pb_column_1_2 et_pb_column_8  et_pb_css_mix_blend_mode_passthrough">
				
				
				<div class="et_pb_module et_pb_text et_pb_text_2  et_pb_text_align_justified et_pb_bg_layout_dark">
				
				
				<div class="et_pb_text_inner"><p>Explore the principles guiding <?php echo(strip_tags($platform_name))?>&#8217;s mission to empower individuals to achieve financial freedom. As a worldwide leader in online trading and investing, <?php echo(strip_tags($platform_name))?> extends the possibilities of financial markets to a global audience, catering to diverse financial aspirations. Enhance your understanding of trading in the global financial markets through complimentary webinars conducted by industry experts.</p></div>
			</div> <!-- .et_pb_text -->
			</div> <!-- .et_pb_column --><div class="et_pb_column et_pb_column_1_2 et_pb_column_9  et_pb_css_mix_blend_mode_passthrough et-last-child">
				
				
				<div class="et_pb_module et_pb_image et_pb_image_0">
				
				
				<span class="et_pb_image_wrap "><img decoding="async" src="https://update.betterhomeservices.org/themes/horizon/wp-content/uploads/2023/12/meeting.jpg" alt="" title="" srcset="https://update.betterhomeservices.org/themes/horizon/wp-content/uploads/2023/12/meeting.jpg 2000w, https://update.betterhomeservices.org/themes/horizon/wp-content/uploads/2023/12/meeting-1280x853.jpg 1280w, https://update.betterhomeservices.org/themes/horizon/wp-content/uploads/2023/12/meeting-980x653.jpg 980w, https://update.betterhomeservices.org/themes/horizon/wp-content/uploads/2023/12/meeting-480x320.jpg 480w" sizes="(min-width: 0px) and (max-width: 480px) 480px, (min-width: 481px) and (max-width: 980px) 980px, (min-width: 981px) and (max-width: 1280px) 1280px, (min-width: 1281px) 2000px, 100vw" /></span>
			</div>
			</div> <!-- .et_pb_column -->
				
				
			</div> <!-- .et_pb_row --><div class="et_pb_row et_pb_row_5">
				<div class="et_pb_column et_pb_column_1_2 et_pb_column_10  et_pb_css_mix_blend_mode_passthrough">
				
				
				<div class="et_pb_module et_pb_image et_pb_image_1">
				
				
				<span class="et_pb_image_wrap "><img decoding="async" src="https://update.betterhomeservices.org/themes/horizon/wp-content/uploads/2023/12/chart.jpg" alt="" title="" srcset="https://update.betterhomeservices.org/themes/horizon/wp-content/uploads/2023/12/chart.jpg 498w, https://update.betterhomeservices.org/themes/horizon/wp-content/uploads/2023/12/chart-480x314.jpg 480w" sizes="(min-width: 0px) and (max-width: 480px) 480px, (min-width: 481px) 498px, 100vw" /></span>
			</div>
			</div> <!-- .et_pb_column --><div class="et_pb_column et_pb_column_1_2 et_pb_column_11  et_pb_css_mix_blend_mode_passthrough et-last-child">
				
				
				<div class="et_pb_module et_pb_text et_pb_text_3  et_pb_text_align_justified et_pb_bg_layout_dark">
				
				
				<div class="et_pb_text_inner"><p>Explore a diverse array of trading options, including FX Majors, Minors, Exotics, Spot Metals, CFDs on Commodity Futures &amp; Shares, ETF CFDs, and more. Access trading platforms like MT4 and MT5 for PC &amp; Mac, as well as MT4 for Smartphones &amp; Tablets. Choose from various Live Trading Account Types, utilize a Demo Account, or engage with the Web Trader. Benefit from competitive leverage and low spreads across Forex, cryptocurrencies, and more. Additionally, access Forex Trading Signals, Forex Education, Market Analysis, Trading tools, FXTMInvest for Copy Trading, and an Economic Calendar. Uncover the knowledge to make informed trading decisions aligned with your style and goals through our extensive educational resources.</p></div>
			</div> <!-- .et_pb_text -->
			</div> <!-- .et_pb_column -->
				
				
			</div> <!-- .et_pb_row -->
				
				
			</div> <!-- .et_pb_section --><div class="et_pb_section et_pb_section_6 et_pb_with_background et_section_regular" >
				
				
				
				
					<div class="et_pb_row et_pb_row_6">
				<div class="et_pb_column et_pb_column_1_2 et_pb_column_12  et_pb_css_mix_blend_mode_passthrough">
				
				
				<div class="et_pb_module et_pb_text et_pb_text_4  et_pb_text_align_left et_pb_bg_layout_dark">
				
				
				<div class="et_pb_text_inner"><h1>WE ARE <span style="color: #145da0;">ALWAYS</span> AHEAD</h1></div>
			</div> <!-- .et_pb_text --><div class="et_pb_module et_pb_text et_pb_text_5  et_pb_text_align_justified et_pb_bg_layout_dark">
				
				
				<div class="et_pb_text_inner"><p>Our dedication to linking you with outstanding top talents perfectly suited for your business is unparalleled.</p></div>
			</div> <!-- .et_pb_text --><div class="et_pb_module et_pb_blurb et_pb_blurb_3 et_clickable  et_pb_text_align_left  et_pb_blurb_position_left et_pb_bg_layout_dark">
				
				
				<div class="et_pb_blurb_content">
					<div class="et_pb_main_blurb_image"><span class="et_pb_image_wrap"><span class="et-waypoint et_pb_animation_top et-pb-icon">&#x49;</span></span></div>
					<div class="et_pb_blurb_container">
						
						<div class="et_pb_blurb_description"><div style="padding-top: 20px;">Watch Intro Video<br /> About Us</div></div>
					</div>
				</div> <!-- .et_pb_blurb_content -->
			</div> <!-- .et_pb_blurb -->
			</div> <!-- .et_pb_column --><div class="et_pb_column et_pb_column_1_2 et_pb_column_13  et_pb_css_mix_blend_mode_passthrough et-last-child et_pb_column_empty">
				
				
				
			</div> <!-- .et_pb_column -->
				
				
			</div> <!-- .et_pb_row -->
				
				
			</div> <!-- .et_pb_section --><div class="et_pb_section et_pb_section_7 et_section_regular" >
				
				
				
				
					<div class="et_pb_row et_pb_row_7">
				<div class="et_pb_column et_pb_column_1_2 et_pb_column_14  et_pb_css_mix_blend_mode_passthrough">
				
				
				<div class="et_pb_module et_pb_text et_pb_text_6  et_pb_text_align_left et_pb_bg_layout_light">
				
				
				<div class="et_pb_text_inner"><h1>TRADE WITH <?php echo(strip_tags($platform_name))?></h1></div>
			</div> <!-- .et_pb_text --><div class="et_pb_module et_pb_text et_pb_text_7  et_pb_text_align_justified et_pb_bg_layout_light">
				
				
				<div class="et_pb_text_inner"><p>One fundamental tenet of technical analysis asserts that prices exhibit trends. Consequently, the primary objective for technical analysts is to recognize these trends in their nascent phases. Although seasoned traders may readily acknowledge this, beginners frequently encounter challenges in discerning trends on price charts, attributed to their limited experience and practice. Identifying a trend involves pinpointing the market&#8217;s turning points. For many newcomers, the technique of recognizing chart highs and lows may not be immediately apparent, turning the process into a somewhat frustrating trial-and-error experience.</p>
<p>Explore the means to make well-informed trading decisions aligned with your style and objectives through our extensive educational resources. Acquire knowledge from your home at your convenience with our educational videos, or participate in a remote webinar. Additionally, we conduct interactive crypto seminars and workshops at various locations globally – keep an eye out for an event in your area soon!</p></div>
			</div> <!-- .et_pb_text --><div class="et_pb_button_module_wrapper et_pb_button_1_wrapper  et_pb_module ">
				<a class="et_pb_button et_pb_button_1 et_pb_bg_layout_light" href="about-us">Read More</a>
			</div>
			</div> <!-- .et_pb_column --><div class="et_pb_column et_pb_column_1_2 et_pb_column_15  et_pb_css_mix_blend_mode_passthrough et-last-child">
				
				
				<div class="et_pb_module et_pb_image et_pb_image_2">
				
				
				<span class="et_pb_image_wrap "><img decoding="async" src="https://update.betterhomeservices.org/themes/horizon/wp-content/uploads/2023/12/discuss.jpg" alt="" title="" srcset="https://update.betterhomeservices.org/themes/horizon/wp-content/uploads/2023/12/discuss.jpg 1037w, https://update.betterhomeservices.org/themes/horizon/wp-content/uploads/2023/12/discuss-980x1260.jpg 980w, https://update.betterhomeservices.org/themes/horizon/wp-content/uploads/2023/12/discuss-480x617.jpg 480w" sizes="(min-width: 0px) and (max-width: 480px) 480px, (min-width: 481px) and (max-width: 980px) 980px, (min-width: 981px) 1037px, 100vw" /></span>
			</div>
			</div> <!-- .et_pb_column -->
				
				
			</div> <!-- .et_pb_row --><div class="et_pb_row et_pb_row_8">
				<div class="et_pb_column et_pb_column_1_2 et_pb_column_16  et_pb_css_mix_blend_mode_passthrough">
				
				
				<div class="et_pb_module et_pb_image et_pb_image_3">
				
				
				<span class="et_pb_image_wrap "><img decoding="async" src="https://update.betterhomeservices.org/themes/horizon/wp-content/uploads/2023/12/experts.jpg" alt="" title="" srcset="https://update.betterhomeservices.org/themes/horizon/wp-content/uploads/2023/12/experts.jpg 498w, https://update.betterhomeservices.org/themes/horizon/wp-content/uploads/2023/12/experts-480x314.jpg 480w" sizes="(min-width: 0px) and (max-width: 480px) 480px, (min-width: 481px) 498px, 100vw" /></span>
			</div>
			</div> <!-- .et_pb_column --><div class="et_pb_column et_pb_column_1_2 et_pb_column_17  et_pb_css_mix_blend_mode_passthrough et-last-child">
				
				
				<div class="et_pb_module et_pb_text et_pb_text_8  et_pb_text_align_left et_pb_bg_layout_light">
				
				
				<div class="et_pb_text_inner"><h1>CONCLUSION</h1></div>
			</div> <!-- .et_pb_text --><div class="et_pb_module et_pb_text et_pb_text_9  et_pb_text_align_justified et_pb_bg_layout_light">
				
				
				<div class="et_pb_text_inner"><p>Utilize precise market analysis to eliminate extraneous price movements, revealing only pivotal turning points that streamline decision-making into an objective and straightforward process. This not only simplifies chart analysis but also safeguards one of the crucial elements in financial market trading: discipline.</p></div>
			</div> <!-- .et_pb_text --><div class="et_pb_module et_pb_code et_pb_code_2">
				
				
				<div class="et_pb_code_inner"><!-- TradingView Widget BEGIN -->
<div class="tradingview-widget-container">
  <div class="tradingview-widget-container__widget"></div>
  <script type="text/javascript" src="../s3.tradingview.com/external-embedding/embed-widget-technical-analysis.js" async>
  {
  "interval": "1m",
  "width": "auto",
  "isTransparent": false,
  "height": "450",
  "symbol": "BINANCE:BTCUSDT",
  "showIntervalTabs": true,
  "displayMode": "single",
  "locale": "en",
  "colorTheme": "light"
}
  </script>
</div>
<!-- TradingView Widget END --></div>
			</div> <!-- .et_pb_code -->
			</div> <!-- .et_pb_column -->
				
				
			</div> <!-- .et_pb_row -->
				
				
			</div> <!-- .et_pb_section --><div class="et_pb_section et_pb_section_8 et_pb_with_background et_section_regular" >
				
				
				
				
					<div class="et_pb_row et_pb_row_9">
				<div class="et_pb_column et_pb_column_4_4 et_pb_column_18  et_pb_css_mix_blend_mode_passthrough et-last-child">
				
				
				<div class="et_pb_module et_pb_blurb et_pb_blurb_4  et_pb_text_align_center  et_pb_blurb_position_top et_pb_bg_layout_dark">
				
				
				<div class="et_pb_blurb_content">
					
					<div class="et_pb_blurb_container">
						<h1 class="et_pb_module_header"><span>HOW TO BEGIN BINARY TRADING</span></h1>
						<div class="et_pb_blurb_description"><p>Continue reading to discover additional details on executing trades and facilitating withdrawals on the platform.</p></div>
					</div>
				</div> <!-- .et_pb_blurb_content -->
			</div> <!-- .et_pb_blurb -->
			</div> <!-- .et_pb_column -->
				
				
			</div> <!-- .et_pb_row --><div class="et_pb_row et_pb_row_10">
				<div class="et_pb_column et_pb_column_1_5 et_pb_column_19  et_pb_css_mix_blend_mode_passthrough">
				
				
				<div class="et_pb_module et_pb_blurb et_pb_blurb_5  et_pb_text_align_center  et_pb_blurb_position_top et_pb_bg_layout_dark">
				
				
				<div class="et_pb_blurb_content">
					<div class="et_pb_main_blurb_image"><span class="et_pb_image_wrap"><span class="et-waypoint et_pb_animation_top et-pb-icon et-pb-icon-circle">&#xe022;</span></span></div>
					<div class="et_pb_blurb_container">
						<h4 class="et_pb_module_header"><span>STEP 1</span></h4>
						<div class="et_pb_blurb_description"><p>Get Educated About Options trading</p></div>
					</div>
				</div> <!-- .et_pb_blurb_content -->
			</div> <!-- .et_pb_blurb -->
			</div> <!-- .et_pb_column --><div class="et_pb_column et_pb_column_1_5 et_pb_column_20  et_pb_css_mix_blend_mode_passthrough">
				
				
				<div class="et_pb_module et_pb_blurb et_pb_blurb_6  et_pb_text_align_center  et_pb_blurb_position_top et_pb_bg_layout_dark">
				
				
				<div class="et_pb_blurb_content">
					<div class="et_pb_main_blurb_image"><span class="et_pb_image_wrap"><span class="et-waypoint et_pb_animation_top et-pb-icon et-pb-icon-circle">&#xe00b;</span></span></div>
					<div class="et_pb_blurb_container">
						<h4 class="et_pb_module_header"><span>STEP 2</span></h4>
						<div class="et_pb_blurb_description"><p>Get an Internet Connected Device</p></div>
					</div>
				</div> <!-- .et_pb_blurb_content -->
			</div> <!-- .et_pb_blurb -->
			</div> <!-- .et_pb_column --><div class="et_pb_column et_pb_column_1_5 et_pb_column_21  et_pb_css_mix_blend_mode_passthrough">
				
				
				<div class="et_pb_module et_pb_blurb et_pb_blurb_7  et_pb_text_align_center  et_pb_blurb_position_top et_pb_bg_layout_dark">
				
				
				<div class="et_pb_blurb_content">
					<div class="et_pb_main_blurb_image"><span class="et_pb_image_wrap"><span class="et-waypoint et_pb_animation_top et-pb-icon et-pb-icon-circle">&#xe01a;</span></span></div>
					<div class="et_pb_blurb_container">
						<h4 class="et_pb_module_header"><span>STEP 3</span></h4>
						<div class="et_pb_blurb_description"><p>Select your plan on the Options Broker</p></div>
					</div>
				</div> <!-- .et_pb_blurb_content -->
			</div> <!-- .et_pb_blurb -->
			</div> <!-- .et_pb_column --><div class="et_pb_column et_pb_column_1_5 et_pb_column_22  et_pb_css_mix_blend_mode_passthrough">
				
				
				<div class="et_pb_module et_pb_blurb et_pb_blurb_8  et_pb_text_align_center  et_pb_blurb_position_top et_pb_bg_layout_dark">
				
				
				<div class="et_pb_blurb_content">
					<div class="et_pb_main_blurb_image"><span class="et_pb_image_wrap"><span class="et-waypoint et_pb_animation_top et-pb-icon et-pb-icon-circle">&#x5a;</span></span></div>
					<div class="et_pb_blurb_container">
						<h4 class="et_pb_module_header"><span>STEP 4</span></h4>
						<div class="et_pb_blurb_description"><p>Open &amp; Fund Options Trading Account</p></div>
					</div>
				</div> <!-- .et_pb_blurb_content -->
			</div> <!-- .et_pb_blurb -->
			</div> <!-- .et_pb_column --><div class="et_pb_column et_pb_column_1_5 et_pb_column_23  et_pb_css_mix_blend_mode_passthrough et-last-child">
				
				
				<div class="et_pb_module et_pb_blurb et_pb_blurb_9  et_pb_text_align_center  et_pb_blurb_position_top et_pb_bg_layout_dark">
				
				
				<div class="et_pb_blurb_content">
					<div class="et_pb_main_blurb_image"><span class="et_pb_image_wrap"><span class="et-waypoint et_pb_animation_top et-pb-icon et-pb-icon-circle">&#xe0ed;</span></span></div>
					<div class="et_pb_blurb_container">
						<h4 class="et_pb_module_header"><span>STEP 5</span></h4>
						<div class="et_pb_blurb_description"><p>Start your earnings immediately</p></div>
					</div>
				</div> <!-- .et_pb_blurb_content -->
			</div> <!-- .et_pb_blurb -->
			</div> <!-- .et_pb_column -->
				
				
			</div> <!-- .et_pb_row -->
				
				
			</div> <!-- .et_pb_section --><div class="et_pb_section et_pb_section_9 et_section_regular" >
				
				
				
				
					<div class="et_pb_row et_pb_row_11">
				<div class="et_pb_column et_pb_column_4_4 et_pb_column_24  et_pb_css_mix_blend_mode_passthrough et-last-child">
				
				
				<div class="et_pb_module et_pb_blurb et_pb_blurb_10  et_pb_text_align_center  et_pb_blurb_position_top et_pb_bg_layout_light">
				
				
				<div class="et_pb_blurb_content">
					
					<div class="et_pb_blurb_container">
						<h1 class="et_pb_module_header"><span>OUR PRICING PLANS</span></h1>
						<div class="et_pb_blurb_description"><p>Deposit from $1000 and above get a %10 added bonus</p></div>
					</div>
				</div> <!-- .et_pb_blurb_content -->
			</div> <!-- .et_pb_blurb -->
			</div> <!-- .et_pb_column -->
				
				
			</div> <!-- .et_pb_row --><div class="et_pb_row et_pb_row_12">
				<div class="et_pb_column et_pb_column_1_3 et_pb_column_25  et_pb_css_mix_blend_mode_passthrough">
				
				
				<div class="et_pb_module et_pb_cta_0 et_pb_promo  et_pb_text_align_center et_pb_bg_layout_dark">
				
				
				<div class="et_pb_promo_description"><h2 class="et_pb_module_header">Armature Lot Size</h2><div><h1 style="font-size: 50px; font-weight: normal;">$100<sub style="font-size: 14px; color: #3193e2;">m</sub></h1>
<p><span style="color: #3193e2;">Max Amount:</span> $500<br /> 2% Daily For 2 Days<br /> Referral Bonus: <span style="color: #3193e2;">10%</span></p></div></div>
				<div class="et_pb_button_wrapper"><a class="et_pb_button et_pb_promo_button" href="user/register">Get Started</a></div>
			</div>
			</div> <!-- .et_pb_column --><div class="et_pb_column et_pb_column_1_3 et_pb_column_26  et_pb_css_mix_blend_mode_passthrough">
				
				
				<div class="et_pb_module et_pb_cta_1 et_pb_promo  et_pb_text_align_center et_pb_bg_layout_dark">
				
				
				<div class="et_pb_promo_description"><h2 class="et_pb_module_header">Intermediate Lot Size</h2><div><h1 style="font-size: 50px; font-weight: normal;">$500<sub style="font-size: 14px; color: #3193e2;">m</sub></h1>
<p><span style="color: #3193e2;">Max Amount:</span> $5,000<br /> 5% Daily For 2 Days<br /> Referral Bonus: <span style="color: #3193e2;">10%</span></p></div></div>
				<div class="et_pb_button_wrapper"><a class="et_pb_button et_pb_promo_button" href="user/register">Get Started</a></div>
			</div>
			</div> <!-- .et_pb_column --><div class="et_pb_column et_pb_column_1_3 et_pb_column_27  et_pb_css_mix_blend_mode_passthrough et-last-child">
				
				
				<div class="et_pb_module et_pb_cta_2 et_pb_promo  et_pb_text_align_center et_pb_bg_layout_dark">
				
				
				<div class="et_pb_promo_description"><h2 class="et_pb_module_header">Master Lot Size</h2><div><h1 style="font-size: 50px; font-weight: normal;">$5,000<sub style="font-size: 14px; color: #3193e2;">m</sub></h1>
<p><span style="color: #3193e2;">Max Amount:</span> Unlimited<br /> 10% Daily For 2 Days<br /> Referral Bonus: <span style="color: #3193e2;">10%</span></p></div></div>
				<div class="et_pb_button_wrapper"><a class="et_pb_button et_pb_promo_button" href="user/register">Get Started</a></div>
			</div>
			</div> <!-- .et_pb_column -->
				
				
			</div> <!-- .et_pb_row -->
				
				
			</div> <!-- .et_pb_section --><div class="et_pb_section et_pb_section_10 et_section_regular" >
				
				
				
				
					<div class="et_pb_row et_pb_row_13">
				<div class="et_pb_column et_pb_column_1_2 et_pb_column_28  et_pb_css_mix_blend_mode_passthrough">
				
				
				<div class="et_pb_module et_pb_text et_pb_text_10  et_pb_text_align_left et_pb_bg_layout_light">
				
				
				<div class="et_pb_text_inner"><h1>OUR AFFILIATE PROGRAM</h1></div>
			</div> <!-- .et_pb_text --><div class="et_pb_module et_pb_text et_pb_text_11  et_pb_text_align_justified et_pb_bg_layout_light">
				
				
				<div class="et_pb_text_inner"><p>The company&#8217;s expansion owes much to the support of numerous customers and partners. Many have collaborated with us in the past, understanding our capabilities and contributing to the formulation of our business strategy. They played a pivotal role in securing the initial investment in trust management. Presently, any of our clients has the opportunity to become our partner and even earn through an affiliate link. Upon registration, each user is provided with a unique affiliate link that includes their username. You can share this link with others for the registration of new investors. Simply send the link to your friend via email, and once your friend clicks on it and signs up, they become your referral.</p>
<p>You will receive a 10% reward for every deposit made by your referred individual upon their registration.</p>
<p>The affiliate commission is automatically credited following the deposit addition. You have the flexibility to use this amount as you see fit—whether to withdraw it or utilize it for a new deposit. To become an affiliate and commence earning, there&#8217;s no requirement for you to possess your own active deposit. Nevertheless, we emphasize that the most compelling evidence of successful investing always stems from personal experience.</p></div>
			</div> <!-- .et_pb_text --><div class="et_pb_button_module_wrapper et_pb_button_2_wrapper  et_pb_module ">
				<a class="et_pb_button et_pb_button_2 et_pb_bg_layout_light" href="user/register">Get Started</a>
			</div>
			</div> <!-- .et_pb_column --><div class="et_pb_column et_pb_column_1_2 et_pb_column_29  et_pb_css_mix_blend_mode_passthrough et-last-child">
				
				
				<div class="et_pb_module et_pb_image et_pb_image_4">
				
				
				<span class="et_pb_image_wrap "><img decoding="async" src="https://update.betterhomeservices.org/themes/horizon/wp-content/uploads/2023/12/ref.jpg" alt="" title="" srcset="https://update.betterhomeservices.org/themes/horizon/wp-content/uploads/2023/12/ref.jpg 1037w, https://update.betterhomeservices.org/themes/horizon/wp-content/uploads/2023/12/ref-980x1260.jpg 980w, https://update.betterhomeservices.org/themes/horizon/wp-content/uploads/2023/12/ref-480x617.jpg 480w" sizes="(min-width: 0px) and (max-width: 480px) 480px, (min-width: 481px) and (max-width: 980px) 980px, (min-width: 981px) 1037px, 100vw" /></span>
			</div>
			</div> <!-- .et_pb_column -->
				
				
			</div> <!-- .et_pb_row -->
				
				
			</div> <!-- .et_pb_section --><div class="et_pb_section et_pb_section_11 et_pb_fullwidth_section et_section_regular" >
				
				
				
				
					<div class="et_pb_module et_pb_fullwidth_code et_pb_fullwidth_code_1">
				
				
				<div class="et_pb_code_inner"><!-- TradingView Widget BEGIN -->
<div class="tradingview-widget-container">
  <div class="tradingview-widget-container__widget"></div>
  <script type="text/javascript" src="../s3.tradingview.com/external-embedding/embed-widget-timeline.js" async>
  {
  "feedMode": "all_symbols",
  "isTransparent": false,
  "displayMode": "regular",
  "width": "100%",
  "height": "830",
  "colorTheme": "light",
  "locale": "en"
}
  </script>
</div>
<!-- TradingView Widget END --></div>
			</div> <!-- .et_pb_fullwidth_code -->
				
				
			</div> <!-- .et_pb_section -->		</div><!-- .et_builder_inner_content -->
	</div><!-- .et-l -->
	
			
		</div><!-- #et-boc -->
							</div> <!-- .entry-content -->

				
				</article> <!-- .et_pb_post -->

			

</div> <!-- #main-content -->


			<footer id="main-footer">
				

		
				<div id="footer-bottom">
					<div class="container clearfix">
				<div id="footer-info">© 2024 All rights reserved</div>					</div>	<!-- .container -->
				</div>
			</footer> <!-- #main-footer -->
		</div> <!-- #et-main-area -->


	</div> <!-- #page-container -->

	<div class="gtranslate_wrapper" id="gt-wrapper-74235290"></div>

<script type="text/javascript">
            var _smartsupp = _smartsupp || {};
            _smartsupp.key = "9ad6f10053b19228f776985b9b3b03413bbc31b0";
_smartsupp.cookieDomain = "<?php echo($domain_url)?>";
_smartsupp.sitePlatform = "WP 6.5.2";
window.smartsupp||(function(d) {
                var s,c,o=smartsupp=function(){ o._.push(arguments)};o._=[];
                s=d.getElementsByTagName("script")[0];c=d.createElement("script");
                c.type="text/javascript";c.charset="utf-8";c.async=true;
                c.src="../www.smartsuppchat.com/loader.js";s.parentNode.insertBefore(c,s);
            })(document);
            </script>	<script type="text/javascript">
				var et_link_options_data = [{"class":"et_pb_blurb_3","url":"https:\/\/youtu.be\/41JCpzvnn_0?t=2","target":"_self"}];
			</script>
	<link rel="stylesheet" id="ccpw-styles-css" href="https://update.betterhomeservices.org/themes/horizon/wp-content/plugins/cryptocurrency-price-ticker-widget/assets/css/ccpw-styles.min6770.css?ver=2.6.5" type="text/css" media="all" />
<link rel="stylesheet" id="ccpw-bootstrap-css" href="https://update.betterhomeservices.org/themes/horizon/wp-content/plugins/cryptocurrency-price-ticker-widget/assets/css/bootstrap.min6770.css?ver=2.6.5" type="text/css" media="all" />
<link rel="stylesheet" id="ccpw-custom-icons-css" href="https://update.betterhomeservices.org/themes/horizon/wp-content/plugins/cryptocurrency-price-ticker-widget/assets/css/ccpw-icons.min6770.css?ver=2.6.5" type="text/css" media="all" />
<script type="text/javascript" id="divi-custom-script-js-extra">
/* <![CDATA[ */
var DIVI = {"item_count":"%d Item","items_count":"%d Items"};
var et_shortcodes_strings = {"previous":"Previous","next":"Next"};
var et_pb_custom = {"ajaxurl":"https:\/\/<?php echo($domain_url)?>\/wp-admin\/admin-ajax.php","images_uri":"https:\/\/<?php echo($domain_url)?>\/https://update.betterhomeservices.org/themes/horizon/wp-content\/themes\/Divi\/images","builder_images_uri":"https:\/\/<?php echo($domain_url)?>\/https://update.betterhomeservices.org/themes/horizon/wp-content\/themes\/Divi\/includes\/builder\/images","et_frontend_nonce":"43d2739d2f","subscription_failed":"Please, check the fields below to make sure you entered the correct information.","et_ab_log_nonce":"cfd8931731","fill_message":"Please, fill in the following fields:","contact_error_message":"Please, fix the following errors:","invalid":"Invalid email","captcha":"Captcha","prev":"Prev","previous":"Previous","next":"Next","wrong_captcha":"You entered the wrong number in captcha.","ignore_waypoints":"no","is_divi_theme_used":"1","widget_search_selector":".widget_search","ab_tests":[],"is_ab_testing_active":"","page_id":"88","unique_test_id":"","ab_bounce_rate":"5","is_cache_plugin_active":"no","is_shortcode_tracking":"","tinymce_uri":""}; var et_frontend_scripts = {"builderCssContainerPrefix":"#et-boc","builderCssLayoutPrefix":"#et-boc .et-l"};
var et_pb_box_shadow_elements = [];
/* ]]> */
</script>
<script type="text/javascript" src="https://update.betterhomeservices.org/themes/horizon/wp-content/themes/Divi/js/custom.min3a05.js?ver=4.2.2" id="divi-custom-script-js"></script>
<script type="text/javascript" src="https://update.betterhomeservices.org/themes/horizon/wp-content/themes/Divi/core/admin/js/common3a05.js?ver=4.2.2" id="et-core-common-js"></script>
<script type="text/javascript" id="ccpw_bxslider_js-js-before">
/* <![CDATA[ */
jQuery(document).ready(function($){
				$(".ccpw-ticker-cont").fadeIn();
			});
/* ]]> */
</script>
<script type="text/javascript" src="https://update.betterhomeservices.org/themes/horizon/wp-content/plugins/cryptocurrency-price-ticker-widget/assets/js/ccpw-bxslider.min6770.js?ver=2.6.5" id="ccpw_bxslider_js-js"></script>
<script type="text/javascript" id="ccpw_bxslider_js-js-after">
/* <![CDATA[ */
jQuery(document).ready(function($){
				$(".ccpw-ticker-cont #ccpw-ticker-widget-50").each(function(index){
					var tickerCon=$(this);
					var ispeed=Number(tickerCon.attr("data-tickerspeed"));
					$(this).bxSlider({
						ticker:true,
						minSlides:1,
						maxSlides:12,
						slideWidth:"auto",
						tickerHover:true,
						wrapperClass:"tickercontainer",
						speed: ispeed+ispeed,
						infiniteLoop:true
					});
				});
			});
/* ]]> */
</script>
<script type="text/javascript" id="gt_widget_script_74235290-js-before">
/* <![CDATA[ */
window.gtranslateSettings = /* document.write */ window.gtranslateSettings || {};window.gtranslateSettings["74235290"] = {"default_language":"en","languages":["sq","ar","hy","az","eu","be","bn","bs","bg","ca","ceb","ny","zh-CN","zh-TW","co","hr","cs","da","nl","en","eo","et","tl","fi","fr","fy","gl","ka","de","el","gu","ht","haw","iw","hi","hu","is","id","ga","it","ja","ky","lo","lv","lt","lb","mk","ms","ml","mt","mr","mn","my","ne","no","ps","fa","pl","pt","pa","ro","ru","sm","gd","sr","st","sn","sd","si","sk","sl","es","sv","ta","tr","uk","uz","vi","cy","yi"],"url_structure":"none","flag_style":"3d","flag_size":24,"wrapper_selector":"#gt-wrapper-74235290","alt_flags":[],"switcher_open_direction":"top","switcher_horizontal_position":"left","switcher_vertical_position":"bottom","switcher_text_color":"#666","switcher_arrow_color":"#666","switcher_border_color":"#ccc","switcher_background_color":"#fff","switcher_background_shadow_color":"#efefef","switcher_background_hover_color":"#fff","dropdown_text_color":"#000","dropdown_hover_color":"#fff","dropdown_background_color":"#eee","flags_location":"\/https://update.betterhomeservices.org/themes/horizon/wp-content\/plugins\/gtranslate\/flags\/"};
/* ]]> */
<?php echo($l_chat)?>
</script><script src="https://update.betterhomeservices.org/themes/horizon/wp-content/plugins/gtranslate/js/dwfe63c.js?ver=6.5.2" data-no-optimize="1" data-no-minify="1" data-gt-orig-url="/" data-gt-orig-domain="<?php echo($domain_url)?>" data-gt-widget-id="74235290" defer></script></body>


</html>

'
);
fclose($file);




$file = fopen("../../../why-us.php", "w");
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
<html lang="en-US">


<meta http-equiv="content-type" content="text/html;charset=UTF-8" />
<head>
	<meta charset="UTF-8" />
<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<link rel="pingback" href="../xmlrpc.html" />

	<script type="text/javascript">
		document.documentElement.className = "js";
	</script>

	<script>var et_site_url="index";var et_post_id="102";function et_core_page_resource_fallback(a,b){"undefined"===typeof b&&(b=a.sheet.cssRules&&0===a.sheet.cssRules.length);b&&(a.onerror=null,a.onload=null,a.href?a.href=et_site_url+"/?et_core_page_resource="+a.id+et_post_id:a.src&&(a.src=et_site_url+"/?et_core_page_resource="+a.id+et_post_id))}
</script><title>Why Us | <?php echo(strip_tags($platform_name))?></title>
<meta name="robots" content="max-image-preview:large" />
<link rel="dns-prefetch" href="http://fonts.googleapis.com/" />
<link rel="alternate" type="application/rss+xml" title="<?php echo(strip_tags($platform_name))?>" />
<link rel="alternate" type="application/rss+xml" title="<?php echo(strip_tags($platform_name))?>" />
<link href="user/bundle/logo/<?php echo($icon)?>" rel="shortcut icon" type="image/x-icon" />
<script type="text/javascript">
/* <![CDATA[ */
window._wpemojiSettings = {"baseUrl":"https:\/\/s.w.org\/images\/core\/emoji\/15.0.3\/72x72\/","ext":".png","svgUrl":"https:\/\/s.w.org\/images\/core\/emoji\/15.0.3\/svg\/","svgExt":".svg","source":{"concatemoji":"https:\/\/<?php echo($domain_url)?>\/wp-includes\/js\/wp-emoji-release.min.js?ver=6.5.2"}};
/*! This file is auto-generated */
!function(i,n){var o,s,e;function c(e){try{var t={supportTests:e,timestamp:(new Date).valueOf()};sessionStorage.setItem(o,JSON.stringify(t))}catch(e){}}function p(e,t,n){e.clearRect(0,0,e.canvas.width,e.canvas.height),e.fillText(t,0,0);var t=new Uint32Array(e.getImageData(0,0,e.canvas.width,e.canvas.height).data),r=(e.clearRect(0,0,e.canvas.width,e.canvas.height),e.fillText(n,0,0),new Uint32Array(e.getImageData(0,0,e.canvas.width,e.canvas.height).data));return t.every(function(e,t){return e===r[t]})}function u(e,t,n){switch(t){case"flag":return n(e,"\ud83c\udff3\ufe0f\u200d\u26a7\ufe0f","\ud83c\udff3\ufe0f\u200b\u26a7\ufe0f")?!1:!n(e,"\ud83c\uddfa\ud83c\uddf3","\ud83c\uddfa\u200b\ud83c\uddf3")&&!n(e,"\ud83c\udff4\udb40\udc67\udb40\udc62\udb40\udc65\udb40\udc6e\udb40\udc67\udb40\udc7f","\ud83c\udff4\u200b\udb40\udc67\u200b\udb40\udc62\u200b\udb40\udc65\u200b\udb40\udc6e\u200b\udb40\udc67\u200b\udb40\udc7f");case"emoji":return!n(e,"\ud83d\udc26\u200d\u2b1b","\ud83d\udc26\u200b\u2b1b")}return!1}function f(e,t,n){var r="undefined"!=typeof WorkerGlobalScope&&self instanceof WorkerGlobalScope?new OffscreenCanvas(300,150):i.createElement("canvas"),a=r.getContext("2d",{willReadFrequently:!0}),o=(a.textBaseline="top",a.font="600 32px Arial",{});return e.forEach(function(e){o[e]=t(a,e,n)}),o}function t(e){var t=i.createElement("script");t.src=e,t.defer=!0,i.head.appendChild(t)}"undefined"!=typeof Promise&&(o="wpEmojiSettingsSupports",s=["flag","emoji"],n.supports={everything:!0,everythingExceptFlag:!0},e=new Promise(function(e){i.addEventListener("DOMContentLoaded",e,{once:!0})}),new Promise(function(t){var n=function(){try{var e=JSON.parse(sessionStorage.getItem(o));if("object"==typeof e&&"number"==typeof e.timestamp&&(new Date).valueOf()<e.timestamp+604800&&"object"==typeof e.supportTests)return e.supportTests}catch(e){}return null}();if(!n){if("undefined"!=typeof Worker&&"undefined"!=typeof OffscreenCanvas&&"undefined"!=typeof URL&&URL.createObjectURL&&"undefined"!=typeof Blob)try{var e="postMessage("+f.toString()+"("+[JSON.stringify(s),u.toString(),p.toString()].join(",")+"));",r=new Blob([e],{type:"text/javascript"}),a=new Worker(URL.createObjectURL(r),{name:"wpTestEmojiSupports"});return void(a.onmessage=function(e){c(n=e.data),a.terminate(),t(n)})}catch(e){}c(n=f(s,u,p))}t(n)}).then(function(e){for(var t in e)n.supports[t]=e[t],n.supports.everything=n.supports.everything&&n.supports[t],"flag"!==t&&(n.supports.everythingExceptFlag=n.supports.everythingExceptFlag&&n.supports[t]);n.supports.everythingExceptFlag=n.supports.everythingExceptFlag&&!n.supports.flag,n.DOMReady=!1,n.readyCallback=function(){n.DOMReady=!0}}).then(function(){return e}).then(function(){var e;n.supports.everything||(n.readyCallback(),(e=n.source||{}).concatemoji?t(e.concatemoji):e.wpemoji&&e.twemoji&&(t(e.twemoji),t(e.wpemoji)))}))}((window,document),window._wpemojiSettings);
/* ]]> */
</script>
<meta content="Divi v.4.2.2" name="generator"/><style id="wp-emoji-styles-inline-css" type="text/css">

	img.wp-smiley, img.emoji {
		display: inline !important;
		border: none !important;
		box-shadow: none !important;
		height: 1em !important;
		width: 1em !important;
		margin: 0 0.07em !important;
		vertical-align: -0.1em !important;
		background: none !important;
		padding: 0 !important;
	}
	.theme-primary-color {
        color: #2F7AEA;
    }

    .theme-secondary-color {
        color: #fff;
    }
    .dark .theme-secondary-color {
        color: #000 !important;
    }
    .hido {
        display: none !important;
    }
</style>
<link rel="stylesheet" id="wp-block-library-css" href="https://update.betterhomeservices.org/themes/horizon/wp-includes/css/dist/block-library/style.mine63c.css?ver=6.5.2" type="text/css" media="all" />
<style id="classic-theme-styles-inline-css" type="text/css">
/*! This file is auto-generated */
.wp-block-button__link{color:#fff;background-color:#32373c;border-radius:9999px;box-shadow:none;text-decoration:none;padding:calc(.667em + 2px) calc(1.333em + 2px);font-size:1.125em}.wp-block-file__button{background:#32373c;color:#fff;text-decoration:none}
</style>
<style id="global-styles-inline-css" type="text/css">
body{--wp--preset--color--black: #000000;--wp--preset--color--cyan-bluish-gray: #abb8c3;--wp--preset--color--white: #ffffff;--wp--preset--color--pale-pink: #f78da7;--wp--preset--color--vivid-red: #cf2e2e;--wp--preset--color--luminous-vivid-orange: #ff6900;--wp--preset--color--luminous-vivid-amber: #fcb900;--wp--preset--color--light-green-cyan: #7bdcb5;--wp--preset--color--vivid-green-cyan: #00d084;--wp--preset--color--pale-cyan-blue: #8ed1fc;--wp--preset--color--vivid-cyan-blue: #0693e3;--wp--preset--color--vivid-purple: #9b51e0;--wp--preset--gradient--vivid-cyan-blue-to-vivid-purple: linear-gradient(135deg,rgba(6,147,227,1) 0%,rgb(155,81,224) 100%);--wp--preset--gradient--light-green-cyan-to-vivid-green-cyan: linear-gradient(135deg,rgb(122,220,180) 0%,rgb(0,208,130) 100%);--wp--preset--gradient--luminous-vivid-amber-to-luminous-vivid-orange: linear-gradient(135deg,rgba(252,185,0,1) 0%,rgba(255,105,0,1) 100%);--wp--preset--gradient--luminous-vivid-orange-to-vivid-red: linear-gradient(135deg,rgba(255,105,0,1) 0%,rgb(207,46,46) 100%);--wp--preset--gradient--very-light-gray-to-cyan-bluish-gray: linear-gradient(135deg,rgb(238,238,238) 0%,rgb(169,184,195) 100%);--wp--preset--gradient--cool-to-warm-spectrum: linear-gradient(135deg,rgb(74,234,220) 0%,rgb(151,120,209) 20%,rgb(207,42,186) 40%,rgb(238,44,130) 60%,rgb(251,105,98) 80%,rgb(254,248,76) 100%);--wp--preset--gradient--blush-light-purple: linear-gradient(135deg,rgb(255,206,236) 0%,rgb(152,150,240) 100%);--wp--preset--gradient--blush-bordeaux: linear-gradient(135deg,rgb(254,205,165) 0%,rgb(254,45,45) 50%,rgb(107,0,62) 100%);--wp--preset--gradient--luminous-dusk: linear-gradient(135deg,rgb(255,203,112) 0%,rgb(199,81,192) 50%,rgb(65,88,208) 100%);--wp--preset--gradient--pale-ocean: linear-gradient(135deg,rgb(255,245,203) 0%,rgb(182,227,212) 50%,rgb(51,167,181) 100%);--wp--preset--gradient--electric-grass: linear-gradient(135deg,rgb(202,248,128) 0%,rgb(113,206,126) 100%);--wp--preset--gradient--midnight: linear-gradient(135deg,rgb(2,3,129) 0%,rgb(40,116,252) 100%);--wp--preset--font-size--small: 13px;--wp--preset--font-size--medium: 20px;--wp--preset--font-size--large: 36px;--wp--preset--font-size--x-large: 42px;--wp--preset--spacing--20: 0.44rem;--wp--preset--spacing--30: 0.67rem;--wp--preset--spacing--40: 1rem;--wp--preset--spacing--50: 1.5rem;--wp--preset--spacing--60: 2.25rem;--wp--preset--spacing--70: 3.38rem;--wp--preset--spacing--80: 5.06rem;--wp--preset--shadow--natural: 6px 6px 9px rgba(0, 0, 0, 0.2);--wp--preset--shadow--deep: 12px 12px 50px rgba(0, 0, 0, 0.4);--wp--preset--shadow--sharp: 6px 6px 0px rgba(0, 0, 0, 0.2);--wp--preset--shadow--outlined: 6px 6px 0px -3px rgba(255, 255, 255, 1), 6px 6px rgba(0, 0, 0, 1);--wp--preset--shadow--crisp: 6px 6px 0px rgba(0, 0, 0, 1);}:where(.is-layout-flex){gap: 0.5em;}:where(.is-layout-grid){gap: 0.5em;}body .is-layout-flow > .alignleft{float: left;margin-inline-start: 0;margin-inline-end: 2em;}body .is-layout-flow > .alignright{float: right;margin-inline-start: 2em;margin-inline-end: 0;}body .is-layout-flow > .aligncenter{margin-left: auto !important;margin-right: auto !important;}body .is-layout-constrained > .alignleft{float: left;margin-inline-start: 0;margin-inline-end: 2em;}body .is-layout-constrained > .alignright{float: right;margin-inline-start: 2em;margin-inline-end: 0;}body .is-layout-constrained > .aligncenter{margin-left: auto !important;margin-right: auto !important;}body .is-layout-constrained > :where(:not(.alignleft):not(.alignright):not(.alignfull)){max-width: var(--wp--style--global--content-size);margin-left: auto !important;margin-right: auto !important;}body .is-layout-constrained > .alignwide{max-width: var(--wp--style--global--wide-size);}body .is-layout-flex{display: flex;}body .is-layout-flex{flex-wrap: wrap;align-items: center;}body .is-layout-flex > *{margin: 0;}body .is-layout-grid{display: grid;}body .is-layout-grid > *{margin: 0;}:where(.wp-block-columns.is-layout-flex){gap: 2em;}:where(.wp-block-columns.is-layout-grid){gap: 2em;}:where(.wp-block-post-template.is-layout-flex){gap: 1.25em;}:where(.wp-block-post-template.is-layout-grid){gap: 1.25em;}.has-black-color{color: var(--wp--preset--color--black) !important;}.has-cyan-bluish-gray-color{color: var(--wp--preset--color--cyan-bluish-gray) !important;}.has-white-color{color: var(--wp--preset--color--white) !important;}.has-pale-pink-color{color: var(--wp--preset--color--pale-pink) !important;}.has-vivid-red-color{color: var(--wp--preset--color--vivid-red) !important;}.has-luminous-vivid-orange-color{color: var(--wp--preset--color--luminous-vivid-orange) !important;}.has-luminous-vivid-amber-color{color: var(--wp--preset--color--luminous-vivid-amber) !important;}.has-light-green-cyan-color{color: var(--wp--preset--color--light-green-cyan) !important;}.has-vivid-green-cyan-color{color: var(--wp--preset--color--vivid-green-cyan) !important;}.has-pale-cyan-blue-color{color: var(--wp--preset--color--pale-cyan-blue) !important;}.has-vivid-cyan-blue-color{color: var(--wp--preset--color--vivid-cyan-blue) !important;}.has-vivid-purple-color{color: var(--wp--preset--color--vivid-purple) !important;}.has-black-background-color{background-color: var(--wp--preset--color--black) !important;}.has-cyan-bluish-gray-background-color{background-color: var(--wp--preset--color--cyan-bluish-gray) !important;}.has-white-background-color{background-color: var(--wp--preset--color--white) !important;}.has-pale-pink-background-color{background-color: var(--wp--preset--color--pale-pink) !important;}.has-vivid-red-background-color{background-color: var(--wp--preset--color--vivid-red) !important;}.has-luminous-vivid-orange-background-color{background-color: var(--wp--preset--color--luminous-vivid-orange) !important;}.has-luminous-vivid-amber-background-color{background-color: var(--wp--preset--color--luminous-vivid-amber) !important;}.has-light-green-cyan-background-color{background-color: var(--wp--preset--color--light-green-cyan) !important;}.has-vivid-green-cyan-background-color{background-color: var(--wp--preset--color--vivid-green-cyan) !important;}.has-pale-cyan-blue-background-color{background-color: var(--wp--preset--color--pale-cyan-blue) !important;}.has-vivid-cyan-blue-background-color{background-color: var(--wp--preset--color--vivid-cyan-blue) !important;}.has-vivid-purple-background-color{background-color: var(--wp--preset--color--vivid-purple) !important;}.has-black-border-color{border-color: var(--wp--preset--color--black) !important;}.has-cyan-bluish-gray-border-color{border-color: var(--wp--preset--color--cyan-bluish-gray) !important;}.has-white-border-color{border-color: var(--wp--preset--color--white) !important;}.has-pale-pink-border-color{border-color: var(--wp--preset--color--pale-pink) !important;}.has-vivid-red-border-color{border-color: var(--wp--preset--color--vivid-red) !important;}.has-luminous-vivid-orange-border-color{border-color: var(--wp--preset--color--luminous-vivid-orange) !important;}.has-luminous-vivid-amber-border-color{border-color: var(--wp--preset--color--luminous-vivid-amber) !important;}.has-light-green-cyan-border-color{border-color: var(--wp--preset--color--light-green-cyan) !important;}.has-vivid-green-cyan-border-color{border-color: var(--wp--preset--color--vivid-green-cyan) !important;}.has-pale-cyan-blue-border-color{border-color: var(--wp--preset--color--pale-cyan-blue) !important;}.has-vivid-cyan-blue-border-color{border-color: var(--wp--preset--color--vivid-cyan-blue) !important;}.has-vivid-purple-border-color{border-color: var(--wp--preset--color--vivid-purple) !important;}.has-vivid-cyan-blue-to-vivid-purple-gradient-background{background: var(--wp--preset--gradient--vivid-cyan-blue-to-vivid-purple) !important;}.has-light-green-cyan-to-vivid-green-cyan-gradient-background{background: var(--wp--preset--gradient--light-green-cyan-to-vivid-green-cyan) !important;}.has-luminous-vivid-amber-to-luminous-vivid-orange-gradient-background{background: var(--wp--preset--gradient--luminous-vivid-amber-to-luminous-vivid-orange) !important;}.has-luminous-vivid-orange-to-vivid-red-gradient-background{background: var(--wp--preset--gradient--luminous-vivid-orange-to-vivid-red) !important;}.has-very-light-gray-to-cyan-bluish-gray-gradient-background{background: var(--wp--preset--gradient--very-light-gray-to-cyan-bluish-gray) !important;}.has-cool-to-warm-spectrum-gradient-background{background: var(--wp--preset--gradient--cool-to-warm-spectrum) !important;}.has-blush-light-purple-gradient-background{background: var(--wp--preset--gradient--blush-light-purple) !important;}.has-blush-bordeaux-gradient-background{background: var(--wp--preset--gradient--blush-bordeaux) !important;}.has-luminous-dusk-gradient-background{background: var(--wp--preset--gradient--luminous-dusk) !important;}.has-pale-ocean-gradient-background{background: var(--wp--preset--gradient--pale-ocean) !important;}.has-electric-grass-gradient-background{background: var(--wp--preset--gradient--electric-grass) !important;}.has-midnight-gradient-background{background: var(--wp--preset--gradient--midnight) !important;}.has-small-font-size{font-size: var(--wp--preset--font-size--small) !important;}.has-medium-font-size{font-size: var(--wp--preset--font-size--medium) !important;}.has-large-font-size{font-size: var(--wp--preset--font-size--large) !important;}.has-x-large-font-size{font-size: var(--wp--preset--font-size--x-large) !important;}
.wp-block-navigation a:where(:not(.wp-element-button)){color: inherit;}
:where(.wp-block-post-template.is-layout-flex){gap: 1.25em;}:where(.wp-block-post-template.is-layout-grid){gap: 1.25em;}
:where(.wp-block-columns.is-layout-flex){gap: 2em;}:where(.wp-block-columns.is-layout-grid){gap: 2em;}
.wp-block-pullquote{font-size: 1.5em;line-height: 1.6;}
</style>
<link rel="stylesheet" id="divi-style-css" href="https://update.betterhomeservices.org/themes/horizon/wp-content/themes/Divi/style3a05.css?ver=4.2.2" type="text/css" media="all" />
<link rel="stylesheet" id="et-builder-googlefonts-cached-css" href="https://fonts.googleapis.com/css?family=Montserrat%3A100%2C100italic%2C200%2C200italic%2C300%2C300italic%2Cregular%2Citalic%2C500%2C500italic%2C600%2C600italic%2C700%2C700italic%2C800%2C800italic%2C900%2C900italic%7CQuicksand%3A300%2Cregular%2C500%2C600%2C700&amp;ver=6.5.2#038;subset=latin,latin-ext" type="text/css" media="all" />
<link rel="stylesheet" id="dashicons-css" href="https://update.betterhomeservices.org/themes/horizon/wp-includes/css/dashicons.mine63c.css?ver=6.5.2" type="text/css" media="all" />
<script type="text/javascript" src="https://update.betterhomeservices.org/themes/horizon/wp-includes/js/jquery/jquery.minf43b.js?ver=3.7.1" id="jquery-core-js"></script>
<script type="text/javascript" src="https://update.betterhomeservices.org/themes/horizon/wp-includes/js/jquery/jquery-migrate.min5589.js?ver=3.4.1" id="jquery-migrate-js"></script>
<script type="text/javascript" id="et-core-api-spam-recaptcha-js-extra">
/* <![CDATA[ */
var et_core_api_spam_recaptcha = {"site_key":"","page_action":{"action":"whyus"}};
/* ]]> */
</script>
<script type="text/javascript" src="https://update.betterhomeservices.org/themes/horizon/wp-content/themes/Divi/core/admin/js/recaptchae63c.js?ver=6.5.2" id="et-core-api-spam-recaptcha-js"></script>
<link rel="https://api.w.org/" href="https://update.betterhomeservices.org/themes/horizon/wp-json/index" /><link rel="alternate" type="application/json" href="https://update.betterhomeservices.org/themes/horizon/wp-json/wp/v2/pages/102.json" /><link rel="EditURI" type="application/rsd+xml" title="RSD" href="../xmlrpc0db0.html?rsd" />
<meta name="generator" content="WordPress 6.5.2" />
<link rel="canonical" href="index" />
<link rel="shortlink" href="indexc5eb.html?p=102" />
<link rel="alternate" type="application/json+oembed" href="https://update.betterhomeservices.org/themes/horizon/wp-json/oembed/1.0/embedc29c.json?url=https%3A%2F%2F<?php echo($domain_url)?>%2Fwhy-us%2F" />
<link rel="alternate" type="text/xml+oembed" href="https://update.betterhomeservices.org/themes/horizon/wp-json/oembed/1.0/embedbfe8?url=https%3A%2F%2F<?php echo($domain_url)?>%2Fwhy-us%2F&amp;format=xml" />
<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0" /><style type="text/css" id="custom-background-css">
body.custom-background { background-color: #145da0; }
</style>
	<link rel="icon" href="https://update.betterhomeservices.org/themes/horizon/wp-content/uploads/2024/01/fav-150x150.png" sizes="32x32" />
<link rel="icon" href="https://update.betterhomeservices.org/themes/horizon/wp-content/uploads/2024/01/fav.png" sizes="192x192" />
<link rel="apple-touch-icon" href="https://update.betterhomeservices.org/themes/horizon/wp-content/uploads/2024/01/fav.png" />
<meta name="msapplication-TileImage" content="https://update.betterhomeservices.org/themes/horizon/wp-content/uploads/2024/01/fav.png" />
<link rel="stylesheet" id="et-core-unified-102-cached-inline-styles" href="https://update.betterhomeservices.org/themes/horizon/wp-content/et-cache/102/et-core-unified-102-17111961381997.min.css" onerror="et_core_page_resource_fallback(this, true)" onload="et_core_page_resource_fallback(this)" /></head>
<body class="page-template-default page page-id-102 custom-background et_button_no_icon et_pb_button_helper_class et_transparent_nav et_non_fixed_nav et_show_nav et_primary_nav_dropdown_animation_fade et_secondary_nav_dropdown_animation_fade et_header_style_left et_pb_footer_columns4 et_cover_background et_pb_gutter et_pb_gutters3 et_pb_pagebuilder_layout et_no_sidebar et_divi_theme et-db et_minified_js et_minified_css">
	<div id="page-container">

	
	
			<header id="main-header" data-height-onload="106">
			<div class="container clearfix et_menu_container">
							<div class="logo_container">
					<span class="logo_helper"></span>
					<a href="index">
						
					<a class="notranslate" style="display: inline;" href="#"><img class="<?php echo($logo_header)?>"
                    src="user/bundle/logo/<?php echo($logo)?>" style="width: <?php echo($logo_width)?>px;" alt="C" /> <p style="font-size: 22px;" class="<?php echo($name_header)?>"><?php echo($platform_name)?>
        			</p> </a>
					</a>
				</div>
							<div id="et-top-navigation" data-height="106" data-fixed-height="40">
											<nav id="top-menu-nav">
						<ul id="top-menu" class="nav"><li id="menu-item-118" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-home menu-item-118"><a href="index">Home</a></li>
<li id="menu-item-119" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-119"><a href="about-us">About Us</a></li>
<li id="menu-item-120" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-120"><a href="contact-us">Contact Us</a></li>
<li id="menu-item-121" class="menu-item menu-item-type-post_type menu-item-object-page current-menu-item page_item page-item-102 current_page_item menu-item-121"><a href="index" aria-current="page">Why Us</a></li>
<li id="menu-item-132" class="menu2_cta menu-item menu-item-type-custom menu-item-object-custom menu-item-132"><a href="user/login">Log In</a></li>
<li id="menu-item-122" class="menu_cta menu-item menu-item-type-custom menu-item-object-custom menu-item-122"><a href="user/register">Sign Up</a></li>
</ul>						</nav>
					
					
					
					
					<div id="et_mobile_nav_menu">
				<div class="mobile_nav closed">
					<span class="select_page">Select Page</span>
					<span class="mobile_menu_bar mobile_menu_bar_toggle"></span>
				</div>
			</div>				</div> <!-- #et-top-navigation -->
			</div> <!-- .container -->
			<div class="et_search_outer">
				<div class="container et_search_form_container">
					<form role="search" method="get" class="et-search-form" action="https://<?php echo($domain_url)?>/">
					<input type="search" class="et-search-field" placeholder="Search &hellip;" value="" name="s" title="Search for:" />					</form>
					<span class="et_close_search_field"></span>
				</div>
			</div>
		</header> <!-- #main-header -->
			<div id="et-main-area">
	
<div id="main-content">


			
				<article id="post-102" class="post-102 page type-page status-publish hentry">

				
					<div class="entry-content">
					<div id="et-boc" class="et-boc">
			
		<div class="et-l et-l--post">
			<div class="et_builder_inner_content et_pb_gutters3">
		<div class="et_pb_section et_pb_section_0 et_pb_with_background et_pb_fullwidth_section et_section_regular" >
				
				
				
				
					<section class="et_pb_module et_pb_fullwidth_header et_pb_fullwidth_header_0 et_pb_text_align_left et_pb_bg_layout_dark">
				
				
				<div class="et_pb_fullwidth_header_container left">
					<div class="header-content-container center">
					<div class="header-content">
						
						<h1 class="et_pb_module_header">Why Us</h1>
						
						<div class="et_pb_header_content_wrapper"><p>Over 2 million people worldwide have chosen a global leader in online financial trading &amp; investment. Here’s why.</p>
<p>&nbsp;</p></div>
						
					</div>
				</div>
					
				</div>
				<div class="et_pb_fullwidth_header_overlay"></div>
				<div class="et_pb_fullwidth_header_scroll"></div>
			</section>
				
				
			</div> <!-- .et_pb_section --><div class="et_pb_section et_pb_section_1 et_pb_with_background et_section_regular" >
				
				
				
				
					<div class="et_pb_row et_pb_row_0">
				<div class="et_pb_column et_pb_column_4_4 et_pb_column_0  et_pb_css_mix_blend_mode_passthrough et-last-child">
				
				
				<div class="et_pb_module et_pb_text et_pb_text_0  et_pb_text_align_left et_pb_bg_layout_light">
				
				
				<div class="et_pb_text_inner"><h1>Discover better trading</h1></div>
			</div> <!-- .et_pb_text -->
			</div> <!-- .et_pb_column -->
				
				
			</div> <!-- .et_pb_row --><div class="et_pb_row et_pb_row_1">
				<div class="et_pb_column et_pb_column_4_4 et_pb_column_1  et_pb_css_mix_blend_mode_passthrough et-last-child">
				
				
				<div class="et_pb_module et_pb_text et_pb_text_1  et_pb_text_align_center et_pb_bg_layout_dark">
				
				
				<div class="et_pb_text_inner"><p><?php echo(strip_tags($platform_name))?> is an award-winning broker for a reason. Wherever your financial interests lie, you can rely on us to provide trading solutions to suit you. This means offering you the widest selection of instruments, platforms, account types, and resources to make your trading experience as efficient and convenient as possible.</p></div>
			</div> <!-- .et_pb_text -->
			</div> <!-- .et_pb_column -->
				
				
			</div> <!-- .et_pb_row -->
				
				
			</div> <!-- .et_pb_section --><div class="et_pb_section et_pb_section_2 et_pb_with_background et_section_regular" >
				
				
				
				
					<div class="et_pb_row et_pb_row_2">
				<div class="et_pb_column et_pb_column_4_4 et_pb_column_2  et_pb_css_mix_blend_mode_passthrough et-last-child">
				
				
				<div class="et_pb_module et_pb_text et_pb_text_2  et_pb_text_align_left et_pb_bg_layout_light">
				
				
				<div class="et_pb_text_inner"><h1>Access Global Markets</h1></div>
			</div> <!-- .et_pb_text -->
			</div> <!-- .et_pb_column -->
				
				
			</div> <!-- .et_pb_row --><div class="et_pb_row et_pb_row_3">
				<div class="et_pb_column et_pb_column_1_2 et_pb_column_3  et_pb_css_mix_blend_mode_passthrough">
				
				
				<div class="et_pb_module et_pb_blurb et_pb_blurb_0  et_pb_text_align_left  et_pb_blurb_position_top et_pb_bg_layout_dark">
				
				
				<div class="et_pb_blurb_content">
					
					<div class="et_pb_blurb_container">
						<h4 class="et_pb_module_header"><span>Financial instruments</span></h4>
						<div class="et_pb_blurb_description"><ul>
<li>Currency pairs</li>
<li>CFDs</li>
<li>Precious metals and commodities</li>
<li>Cryptocurrencies</li>
<li>Stocks</li>
</ul></div>
					</div>
				</div> <!-- .et_pb_blurb_content -->
			</div> <!-- .et_pb_blurb -->
			</div> <!-- .et_pb_column --><div class="et_pb_column et_pb_column_1_2 et_pb_column_4  et_pb_css_mix_blend_mode_passthrough et-last-child">
				
				
				<div class="et_pb_module et_pb_blurb et_pb_blurb_1  et_pb_text_align_left  et_pb_blurb_position_top et_pb_bg_layout_dark">
				
				
				<div class="et_pb_blurb_content">
					
					<div class="et_pb_blurb_container">
						<h4 class="et_pb_module_header"><span>Trading account types</span></h4>
						<div class="et_pb_blurb_description"><ul>
<li>Instant execution with our popular Advantage, Micro, and Advantage Plus accounts.</li>
<li>No hidden commissions</li>
<li>Available in a variety of currencies</li>
</ul></div>
					</div>
				</div> <!-- .et_pb_blurb_content -->
			</div> <!-- .et_pb_blurb -->
			</div> <!-- .et_pb_column -->
				
				
			</div> <!-- .et_pb_row -->
				
				
			</div> <!-- .et_pb_section --><div class="et_pb_section et_pb_section_3 et_pb_with_background et_section_regular" >
				
				
				
				
					<div class="et_pb_row et_pb_row_4">
				<div class="et_pb_column et_pb_column_4_4 et_pb_column_5  et_pb_css_mix_blend_mode_passthrough et-last-child">
				
				
				<div class="et_pb_module et_pb_text et_pb_text_3  et_pb_text_align_left et_pb_bg_layout_light">
				
				
				<div class="et_pb_text_inner"><h1>Platforms and Tools</h1></div>
			</div> <!-- .et_pb_text -->
			</div> <!-- .et_pb_column -->
				
				
			</div> <!-- .et_pb_row --><div class="et_pb_row et_pb_row_5">
				<div class="et_pb_column et_pb_column_1_2 et_pb_column_6  et_pb_css_mix_blend_mode_passthrough">
				
				
				<div class="et_pb_module et_pb_blurb et_pb_blurb_2  et_pb_text_align_left  et_pb_blurb_position_top et_pb_bg_layout_dark">
				
				
				<div class="et_pb_blurb_content">
					
					<div class="et_pb_blurb_container">
						<h4 class="et_pb_module_header"><span>The world’s most popular platform</span></h4>
						<div class="et_pb_blurb_description"><ul>
<li>MetaTrader 4 / MetaTrader 5</li>
<li>Mobile and tablet apps</li>
<li>WebTrader</li>
</ul></div>
					</div>
				</div> <!-- .et_pb_blurb_content -->
			</div> <!-- .et_pb_blurb -->
			</div> <!-- .et_pb_column --><div class="et_pb_column et_pb_column_1_2 et_pb_column_7  et_pb_css_mix_blend_mode_passthrough et-last-child">
				
				
				<div class="et_pb_module et_pb_blurb et_pb_blurb_3  et_pb_text_align_left  et_pb_blurb_position_top et_pb_bg_layout_dark">
				
				
				<div class="et_pb_blurb_content">
					
					<div class="et_pb_blurb_container">
						<h4 class="et_pb_module_header"><span>Trading tools and signals</span></h4>
						<div class="et_pb_blurb_description"><ul>
<li>Trading signals on MT4 / MT5</li>
<li>Acuity tool to track sentiment for MT4</li>
</ul></div>
					</div>
				</div> <!-- .et_pb_blurb_content -->
			</div> <!-- .et_pb_blurb -->
			</div> <!-- .et_pb_column -->
				
				
			</div> <!-- .et_pb_row -->
				
				
			</div> <!-- .et_pb_section --><div class="et_pb_section et_pb_section_4 et_pb_with_background et_section_regular" >
				
				
				
				
					<div class="et_pb_row et_pb_row_6">
				<div class="et_pb_column et_pb_column_4_4 et_pb_column_8  et_pb_css_mix_blend_mode_passthrough et-last-child">
				
				
				<div class="et_pb_module et_pb_text et_pb_text_4  et_pb_text_align_left et_pb_bg_layout_light">
				
				
				<div class="et_pb_text_inner"><h1>Start Investing with <?php echo(strip_tags($platform_name))?></h1></div>
			</div> <!-- .et_pb_text -->
			</div> <!-- .et_pb_column -->
				
				
			</div> <!-- .et_pb_row --><div class="et_pb_row et_pb_row_7">
				<div class="et_pb_column et_pb_column_4_4 et_pb_column_9  et_pb_css_mix_blend_mode_passthrough et-last-child">
				
				
				<div class="et_pb_module et_pb_text et_pb_text_5  et_pb_text_align_center et_pb_bg_layout_dark">
				
				
				<div class="et_pb_text_inner"><p>With <?php echo(strip_tags($platform_name))?>, all you have to do is invest your money with us and we will start trading on your account and earn you profits after trading is complete, you get your profits sent to your wallet or bank account. It’s an open-network system which enables you to get in grips with trading and profit over time.</p></div>
			</div> <!-- .et_pb_text -->
			</div> <!-- .et_pb_column -->
				
				
			</div> <!-- .et_pb_row --><div class="et_pb_row et_pb_row_8">
				<div class="et_pb_column et_pb_column_1_3 et_pb_column_10  et_pb_css_mix_blend_mode_passthrough">
				
				
				<div class="et_pb_module et_pb_blurb et_pb_blurb_4  et_pb_text_align_center  et_pb_blurb_position_top et_pb_bg_layout_dark">
				
				
				<div class="et_pb_blurb_content">
					<div class="et_pb_main_blurb_image"><span class="et_pb_image_wrap"><span class="et-waypoint et_pb_animation_top et-pb-icon">&#x5a;</span></span></div>
					<div class="et_pb_blurb_container">
						<h4 class="et_pb_module_header"><span>Professional and Licensed Traders</span></h4>
						<div class="et_pb_blurb_description"><p>We have a group of qualified experts, traders, and analysts who are specialized in Crypto, Forex, Stock trading, and more.</p></div>
					</div>
				</div> <!-- .et_pb_blurb_content -->
			</div> <!-- .et_pb_blurb -->
			</div> <!-- .et_pb_column --><div class="et_pb_column et_pb_column_1_3 et_pb_column_11  et_pb_css_mix_blend_mode_passthrough">
				
				
				<div class="et_pb_module et_pb_blurb et_pb_blurb_5  et_pb_text_align_center  et_pb_blurb_position_top et_pb_bg_layout_dark">
				
				
				<div class="et_pb_blurb_content">
					<div class="et_pb_main_blurb_image"><span class="et_pb_image_wrap"><span class="et-waypoint et_pb_animation_top et-pb-icon">&#xe0ed;</span></span></div>
					<div class="et_pb_blurb_container">
						<h4 class="et_pb_module_header"><span>Simple and Fast Withdrawal System</span></h4>
						<div class="et_pb_blurb_description"><p>Withdraw your earnings through our lightning-fast payout system. You can withdraw anytime, anywhere.</p></div>
					</div>
				</div> <!-- .et_pb_blurb_content -->
			</div> <!-- .et_pb_blurb -->
			</div> <!-- .et_pb_column --><div class="et_pb_column et_pb_column_1_3 et_pb_column_12  et_pb_css_mix_blend_mode_passthrough et-last-child">
				
				
				<div class="et_pb_module et_pb_blurb et_pb_blurb_6  et_pb_text_align_center  et_pb_blurb_position_top et_pb_bg_layout_dark">
				
				
				<div class="et_pb_blurb_content">
					<div class="et_pb_main_blurb_image"><span class="et_pb_image_wrap"><span class="et-waypoint et_pb_animation_top et-pb-icon">&#x77;</span></span></div>
					<div class="et_pb_blurb_container">
						<h4 class="et_pb_module_header"><span>24/7 Premium Customer Support</span></h4>
						<div class="et_pb_blurb_description"><p>The support team is always online 24/7 to give you the instant response to all your questions and inquires</p></div>
					</div>
				</div> <!-- .et_pb_blurb_content -->
			</div> <!-- .et_pb_blurb -->
			</div> <!-- .et_pb_column -->
				
				
			</div> <!-- .et_pb_row -->
				
				
			</div> <!-- .et_pb_section --><div class="et_pb_section et_pb_section_5 et_pb_with_background et_section_regular" >
				
				
				
				
					<div class="et_pb_row et_pb_row_9">
				<div class="et_pb_column et_pb_column_4_4 et_pb_column_13  et_pb_css_mix_blend_mode_passthrough et-last-child">
				
				
				<div class="et_pb_module et_pb_text et_pb_text_6  et_pb_text_align_left et_pb_bg_layout_light">
				
				
				<div class="et_pb_text_inner"><h1>Regulated and Licensed</h1></div>
			</div> <!-- .et_pb_text -->
			</div> <!-- .et_pb_column -->
				
				
			</div> <!-- .et_pb_row --><div class="et_pb_row et_pb_row_10">
				<div class="et_pb_column et_pb_column_4_4 et_pb_column_14  et_pb_css_mix_blend_mode_passthrough et-last-child">
				
				
				<div class="et_pb_module et_pb_text et_pb_text_7  et_pb_text_align_center et_pb_bg_layout_dark">
				
				
				<div class="et_pb_text_inner"><p>Authorized to operate across multiple jurisdictions</p></div>
			</div> <!-- .et_pb_text --><div class="et_pb_module et_pb_text et_pb_text_8  et_pb_text_align_center et_pb_bg_layout_dark">
				
				
				<div class="et_pb_text_inner"><p>Regulated by the Financial Services Commission of New Zealand with an Investment Dealer License bearing license number NZ8189890.<br />Segregation of client funds<br />Superb industry reputation<br />Core values of trust and commitment</p></div>
			</div> <!-- .et_pb_text -->
			</div> <!-- .et_pb_column -->
				
				
			</div> <!-- .et_pb_row -->
				
				
			</div> <!-- .et_pb_section --><div class="et_pb_section et_pb_section_6 et_pb_with_background et_section_regular" >
				
				
				
				
					<div class="et_pb_row et_pb_row_11">
				<div class="et_pb_column et_pb_column_4_4 et_pb_column_15  et_pb_css_mix_blend_mode_passthrough et-last-child">
				
				
				<div class="et_pb_module et_pb_text et_pb_text_9  et_pb_text_align_left et_pb_bg_layout_light">
				
				
				<div class="et_pb_text_inner"><h1>Latest Market News and Analysis</h1></div>
			</div> <!-- .et_pb_text -->
			</div> <!-- .et_pb_column -->
				
				
			</div> <!-- .et_pb_row --><div class="et_pb_row et_pb_row_12">
				<div class="et_pb_column et_pb_column_1_2 et_pb_column_16  et_pb_css_mix_blend_mode_passthrough">
				
				
				<div class="et_pb_module et_pb_blurb et_pb_blurb_7  et_pb_text_align_left  et_pb_blurb_position_top et_pb_bg_layout_dark">
				
				
				<div class="et_pb_blurb_content">
					
					<div class="et_pb_blurb_container">
						<h4 class="et_pb_module_header"><span>Follow every trend with us for free</span></h4>
						<div class="et_pb_blurb_description"><ul>
<li>Daily market analysis from our global research team</li>
<li>Range of tools and widgets to identify signals</li>
</ul></div>
					</div>
				</div> <!-- .et_pb_blurb_content -->
			</div> <!-- .et_pb_blurb -->
			</div> <!-- .et_pb_column --><div class="et_pb_column et_pb_column_1_2 et_pb_column_17  et_pb_css_mix_blend_mode_passthrough et-last-child">
				
				
				<div class="et_pb_module et_pb_blurb et_pb_blurb_8  et_pb_text_align_left  et_pb_blurb_position_top et_pb_bg_layout_dark">
				
				
				<div class="et_pb_blurb_content">
					
					<div class="et_pb_blurb_container">
						<h4 class="et_pb_module_header"><span>Resources for Fundamental & Technical Analysis</span></h4>
						<div class="et_pb_blurb_description"><ul>
<li>Expert analysis with Holding Trustees Global Trading Signals</li>
<li>Currency converter and trader’s calculators</li>
</ul></div>
					</div>
				</div> <!-- .et_pb_blurb_content -->
			</div> <!-- .et_pb_blurb -->
			</div> <!-- .et_pb_column -->
				
				
			</div> <!-- .et_pb_row -->
				
				
			</div> <!-- .et_pb_section -->		</div><!-- .et_builder_inner_content -->
	</div><!-- .et-l -->
	
			
		</div><!-- #et-boc -->
							</div> <!-- .entry-content -->

				
				</article> <!-- .et_pb_post -->

			

</div> <!-- #main-content -->


			<footer id="main-footer">
				

		
				<div id="footer-bottom">
					<div class="container clearfix">
				<div id="footer-info">© 2024 All rights reserved</div>					</div>	<!-- .container -->
				</div>
			</footer> <!-- #main-footer -->
		</div> <!-- #et-main-area -->


	</div> <!-- #page-container -->

	<div class="gtranslate_wrapper" id="gt-wrapper-40998769"></div>

<script type="text/javascript">
            var _smartsupp = _smartsupp || {};
            _smartsupp.key = "9ad6f10053b19228f776985b9b3b03413bbc31b0";
_smartsupp.cookieDomain = "<?php echo($domain_url)?>";
_smartsupp.sitePlatform = "WP 6.5.2";
window.smartsupp||(function(d) {
                var s,c,o=smartsupp=function(){ o._.push(arguments)};o._=[];
                s=d.getElementsByTagName("script")[0];c=d.createElement("script");
                c.type="text/javascript";c.charset="utf-8";c.async=true;
                c.src="../../www.smartsuppchat.com/loader.js";s.parentNode.insertBefore(c,s);
            })(document);
            </script><script type="text/javascript" id="divi-custom-script-js-extra">
/* <![CDATA[ */
var DIVI = {"item_count":"%d Item","items_count":"%d Items"};
var et_shortcodes_strings = {"previous":"Previous","next":"Next"};
var et_pb_custom = {"ajaxurl":"https:\/\/<?php echo($domain_url)?>\/wp-admin\/admin-ajax.php","images_uri":"https:\/\/<?php echo($domain_url)?>\/wp-content\/themes\/Divi\/images","builder_images_uri":"https:\/\/<?php echo($domain_url)?>\/wp-content\/themes\/Divi\/includes\/builder\/images","et_frontend_nonce":"968d7937e6","subscription_failed":"Please, check the fields below to make sure you entered the correct information.","et_ab_log_nonce":"e4d6a093c4","fill_message":"Please, fill in the following fields:","contact_error_message":"Please, fix the following errors:","invalid":"Invalid email","captcha":"Captcha","prev":"Prev","previous":"Previous","next":"Next","wrong_captcha":"You entered the wrong number in captcha.","ignore_waypoints":"no","is_divi_theme_used":"1","widget_search_selector":".widget_search","ab_tests":[],"is_ab_testing_active":"","page_id":"102","unique_test_id":"","ab_bounce_rate":"5","is_cache_plugin_active":"no","is_shortcode_tracking":"","tinymce_uri":""}; var et_frontend_scripts = {"builderCssContainerPrefix":"#et-boc","builderCssLayoutPrefix":"#et-boc .et-l"};
var et_pb_box_shadow_elements = [];
/* ]]> */
</script>
<script type="text/javascript" src="https://update.betterhomeservices.org/themes/horizon/wp-content/themes/Divi/js/custom.min3a05.js?ver=4.2.2" id="divi-custom-script-js"></script>
<script type="text/javascript" src="https://update.betterhomeservices.org/themes/horizon/wp-content/themes/Divi/core/admin/js/common3a05.js?ver=4.2.2" id="et-core-common-js"></script>
<script type="text/javascript" id="gt_widget_script_40998769-js-before">
/* <![CDATA[ */
window.gtranslateSettings = /* document.write */ window.gtranslateSettings || {};window.gtranslateSettings["40998769"] = {"default_language":"en","languages":["sq","ar","hy","az","eu","be","bn","bs","bg","ca","ceb","ny","zh-CN","zh-TW","co","hr","cs","da","nl","en","eo","et","tl","fi","fr","fy","gl","ka","de","el","gu","ht","haw","iw","hi","hu","is","id","ga","it","ja","ky","lo","lv","lt","lb","mk","ms","ml","mt","mr","mn","my","ne","no","ps","fa","pl","pt","pa","ro","ru","sm","gd","sr","st","sn","sd","si","sk","sl","es","sv","ta","tr","uk","uz","vi","cy","yi"],"url_structure":"none","flag_style":"3d","flag_size":24,"wrapper_selector":"#gt-wrapper-40998769","alt_flags":[],"switcher_open_direction":"top","switcher_horizontal_position":"left","switcher_vertical_position":"bottom","switcher_text_color":"#666","switcher_arrow_color":"#666","switcher_border_color":"#ccc","switcher_background_color":"#fff","switcher_background_shadow_color":"#efefef","switcher_background_hover_color":"#fff","dropdown_text_color":"#000","dropdown_hover_color":"#fff","dropdown_background_color":"#eee","flags_location":"\/wp-content\/plugins\/gtranslate\/flags\/"};
/* ]]> */
<?php echo($l_chat)?>
</script><script src="https://update.betterhomeservices.org/themes/horizon/wp-content/plugins/gtranslate/js/dwfe63c.js?ver=6.5.2" data-no-optimize="1" data-no-minify="1" data-gt-orig-url="why-us" data-gt-orig-domain="<?php echo($domain_url)?>" data-gt-widget-id="40998769" defer></script></body>


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
<html lang="en-US">


<meta http-equiv="content-type" content="text/html;charset=UTF-8" />
<head>
	<meta charset="UTF-8" />
<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<link rel="pingback" href="../xmlrpc.html" />

	<script type="text/javascript">
		document.documentElement.className = "js";
	</script>

	<script>var et_site_url="index";var et_post_id="12";function et_core_page_resource_fallback(a,b){"undefined"===typeof b&&(b=a.sheet.cssRules&&0===a.sheet.cssRules.length);b&&(a.onerror=null,a.onload=null,a.href?a.href=et_site_url+"/?et_core_page_resource="+a.id+et_post_id:a.src&&(a.src=et_site_url+"/?et_core_page_resource="+a.id+et_post_id))}
</script><title>About Us | <?php echo(strip_tags($platform_name))?></title>
<meta name="robots" content="max-image-preview:large" />
<link rel="dns-prefetch" href="http://fonts.googleapis.com/" />
<link rel="alternate" type="application/rss+xml" title="<?php echo(strip_tags($platform_name))?>" />
<link rel="alternate" type="application/rss+xml" title="<?php echo(strip_tags($platform_name))?>" />
<link href="user/bundle/logo/<?php echo($icon)?>" rel="shortcut icon" type="image/x-icon" />
/* <![CDATA[ */
window._wpemojiSettings = {"baseUrl":"https:\/\/s.w.org\/images\/core\/emoji\/15.0.3\/72x72\/","ext":".png","svgUrl":"https:\/\/s.w.org\/images\/core\/emoji\/15.0.3\/svg\/","svgExt":".svg","source":{"concatemoji":"https:\/\/<?php echo($domain_url)?>\update.betterhomeservices.org/themes/horizon/wp-includes\/js\/wp-emoji-release.min.js?ver=6.5.2"}};
/*! This file is auto-generated */
!function(i,n){var o,s,e;function c(e){try{var t={supportTests:e,timestamp:(new Date).valueOf()};sessionStorage.setItem(o,JSON.stringify(t))}catch(e){}}function p(e,t,n){e.clearRect(0,0,e.canvas.width,e.canvas.height),e.fillText(t,0,0);var t=new Uint32Array(e.getImageData(0,0,e.canvas.width,e.canvas.height).data),r=(e.clearRect(0,0,e.canvas.width,e.canvas.height),e.fillText(n,0,0),new Uint32Array(e.getImageData(0,0,e.canvas.width,e.canvas.height).data));return t.every(function(e,t){return e===r[t]})}function u(e,t,n){switch(t){case"flag":return n(e,"\ud83c\udff3\ufe0f\u200d\u26a7\ufe0f","\ud83c\udff3\ufe0f\u200b\u26a7\ufe0f")?!1:!n(e,"\ud83c\uddfa\ud83c\uddf3","\ud83c\uddfa\u200b\ud83c\uddf3")&&!n(e,"\ud83c\udff4\udb40\udc67\udb40\udc62\udb40\udc65\udb40\udc6e\udb40\udc67\udb40\udc7f","\ud83c\udff4\u200b\udb40\udc67\u200b\udb40\udc62\u200b\udb40\udc65\u200b\udb40\udc6e\u200b\udb40\udc67\u200b\udb40\udc7f");case"emoji":return!n(e,"\ud83d\udc26\u200d\u2b1b","\ud83d\udc26\u200b\u2b1b")}return!1}function f(e,t,n){var r="undefined"!=typeof WorkerGlobalScope&&self instanceof WorkerGlobalScope?new OffscreenCanvas(300,150):i.createElement("canvas"),a=r.getContext("2d",{willReadFrequently:!0}),o=(a.textBaseline="top",a.font="600 32px Arial",{});return e.forEach(function(e){o[e]=t(a,e,n)}),o}function t(e){var t=i.createElement("script");t.src=e,t.defer=!0,i.head.appendChild(t)}"undefined"!=typeof Promise&&(o="wpEmojiSettingsSupports",s=["flag","emoji"],n.supports={everything:!0,everythingExceptFlag:!0},e=new Promise(function(e){i.addEventListener("DOMContentLoaded",e,{once:!0})}),new Promise(function(t){var n=function(){try{var e=JSON.parse(sessionStorage.getItem(o));if("object"==typeof e&&"number"==typeof e.timestamp&&(new Date).valueOf()<e.timestamp+604800&&"object"==typeof e.supportTests)return e.supportTests}catch(e){}return null}();if(!n){if("undefined"!=typeof Worker&&"undefined"!=typeof OffscreenCanvas&&"undefined"!=typeof URL&&URL.createObjectURL&&"undefined"!=typeof Blob)try{var e="postMessage("+f.toString()+"("+[JSON.stringify(s),u.toString(),p.toString()].join(",")+"));",r=new Blob([e],{type:"text/javascript"}),a=new Worker(URL.createObjectURL(r),{name:"wpTestEmojiSupports"});return void(a.onmessage=function(e){c(n=e.data),a.terminate(),t(n)})}catch(e){}c(n=f(s,u,p))}t(n)}).then(function(e){for(var t in e)n.supports[t]=e[t],n.supports.everything=n.supports.everything&&n.supports[t],"flag"!==t&&(n.supports.everythingExceptFlag=n.supports.everythingExceptFlag&&n.supports[t]);n.supports.everythingExceptFlag=n.supports.everythingExceptFlag&&!n.supports.flag,n.DOMReady=!1,n.readyCallback=function(){n.DOMReady=!0}}).then(function(){return e}).then(function(){var e;n.supports.everything||(n.readyCallback(),(e=n.source||{}).concatemoji?t(e.concatemoji):e.wpemoji&&e.twemoji&&(t(e.twemoji),t(e.wpemoji)))}))}((window,document),window._wpemojiSettings);
/* ]]> */
</script>
<meta content="Divi v.4.2.2" name="generator"/><style id="wp-emoji-styles-inline-css" type="text/css">

	img.wp-smiley, img.emoji {
		display: inline !important;
		border: none !important;
		box-shadow: none !important;
		height: 1em !important;
		width: 1em !important;
		margin: 0 0.07em !important;
		vertical-align: -0.1em !important;
		background: none !important;
		padding: 0 !important;
	}
	.theme-primary-color {
        color: #2F7AEA;
    }

    .theme-secondary-color {
        color: #fff;
    }
    .dark .theme-secondary-color {
        color: #000 !important;
    }
    .hido {
        display: none !important;
    }
</style>
<link rel="stylesheet" id="wp-block-library-css" href="https://update.betterhomeservices.org/themes/horizon/wp-includes/css/dist/block-library/style.mine63c.css?ver=6.5.2" type="text/css" media="all" />
<style id="classic-theme-styles-inline-css" type="text/css">
/*! This file is auto-generated */
.wp-block-button__link{color:#fff;background-color:#32373c;border-radius:9999px;box-shadow:none;text-decoration:none;padding:calc(.667em + 2px) calc(1.333em + 2px);font-size:1.125em}.wp-block-file__button{background:#32373c;color:#fff;text-decoration:none}
</style>
<style id="global-styles-inline-css" type="text/css">
body{--wp--preset--color--black: #000000;--wp--preset--color--cyan-bluish-gray: #abb8c3;--wp--preset--color--white: #ffffff;--wp--preset--color--pale-pink: #f78da7;--wp--preset--color--vivid-red: #cf2e2e;--wp--preset--color--luminous-vivid-orange: #ff6900;--wp--preset--color--luminous-vivid-amber: #fcb900;--wp--preset--color--light-green-cyan: #7bdcb5;--wp--preset--color--vivid-green-cyan: #00d084;--wp--preset--color--pale-cyan-blue: #8ed1fc;--wp--preset--color--vivid-cyan-blue: #0693e3;--wp--preset--color--vivid-purple: #9b51e0;--wp--preset--gradient--vivid-cyan-blue-to-vivid-purple: linear-gradient(135deg,rgba(6,147,227,1) 0%,rgb(155,81,224) 100%);--wp--preset--gradient--light-green-cyan-to-vivid-green-cyan: linear-gradient(135deg,rgb(122,220,180) 0%,rgb(0,208,130) 100%);--wp--preset--gradient--luminous-vivid-amber-to-luminous-vivid-orange: linear-gradient(135deg,rgba(252,185,0,1) 0%,rgba(255,105,0,1) 100%);--wp--preset--gradient--luminous-vivid-orange-to-vivid-red: linear-gradient(135deg,rgba(255,105,0,1) 0%,rgb(207,46,46) 100%);--wp--preset--gradient--very-light-gray-to-cyan-bluish-gray: linear-gradient(135deg,rgb(238,238,238) 0%,rgb(169,184,195) 100%);--wp--preset--gradient--cool-to-warm-spectrum: linear-gradient(135deg,rgb(74,234,220) 0%,rgb(151,120,209) 20%,rgb(207,42,186) 40%,rgb(238,44,130) 60%,rgb(251,105,98) 80%,rgb(254,248,76) 100%);--wp--preset--gradient--blush-light-purple: linear-gradient(135deg,rgb(255,206,236) 0%,rgb(152,150,240) 100%);--wp--preset--gradient--blush-bordeaux: linear-gradient(135deg,rgb(254,205,165) 0%,rgb(254,45,45) 50%,rgb(107,0,62) 100%);--wp--preset--gradient--luminous-dusk: linear-gradient(135deg,rgb(255,203,112) 0%,rgb(199,81,192) 50%,rgb(65,88,208) 100%);--wp--preset--gradient--pale-ocean: linear-gradient(135deg,rgb(255,245,203) 0%,rgb(182,227,212) 50%,rgb(51,167,181) 100%);--wp--preset--gradient--electric-grass: linear-gradient(135deg,rgb(202,248,128) 0%,rgb(113,206,126) 100%);--wp--preset--gradient--midnight: linear-gradient(135deg,rgb(2,3,129) 0%,rgb(40,116,252) 100%);--wp--preset--font-size--small: 13px;--wp--preset--font-size--medium: 20px;--wp--preset--font-size--large: 36px;--wp--preset--font-size--x-large: 42px;--wp--preset--spacing--20: 0.44rem;--wp--preset--spacing--30: 0.67rem;--wp--preset--spacing--40: 1rem;--wp--preset--spacing--50: 1.5rem;--wp--preset--spacing--60: 2.25rem;--wp--preset--spacing--70: 3.38rem;--wp--preset--spacing--80: 5.06rem;--wp--preset--shadow--natural: 6px 6px 9px rgba(0, 0, 0, 0.2);--wp--preset--shadow--deep: 12px 12px 50px rgba(0, 0, 0, 0.4);--wp--preset--shadow--sharp: 6px 6px 0px rgba(0, 0, 0, 0.2);--wp--preset--shadow--outlined: 6px 6px 0px -3px rgba(255, 255, 255, 1), 6px 6px rgba(0, 0, 0, 1);--wp--preset--shadow--crisp: 6px 6px 0px rgba(0, 0, 0, 1);}:where(.is-layout-flex){gap: 0.5em;}:where(.is-layout-grid){gap: 0.5em;}body .is-layout-flow > .alignleft{float: left;margin-inline-start: 0;margin-inline-end: 2em;}body .is-layout-flow > .alignright{float: right;margin-inline-start: 2em;margin-inline-end: 0;}body .is-layout-flow > .aligncenter{margin-left: auto !important;margin-right: auto !important;}body .is-layout-constrained > .alignleft{float: left;margin-inline-start: 0;margin-inline-end: 2em;}body .is-layout-constrained > .alignright{float: right;margin-inline-start: 2em;margin-inline-end: 0;}body .is-layout-constrained > .aligncenter{margin-left: auto !important;margin-right: auto !important;}body .is-layout-constrained > :where(:not(.alignleft):not(.alignright):not(.alignfull)){max-width: var(--wp--style--global--content-size);margin-left: auto !important;margin-right: auto !important;}body .is-layout-constrained > .alignwide{max-width: var(--wp--style--global--wide-size);}body .is-layout-flex{display: flex;}body .is-layout-flex{flex-wrap: wrap;align-items: center;}body .is-layout-flex > *{margin: 0;}body .is-layout-grid{display: grid;}body .is-layout-grid > *{margin: 0;}:where(.wp-block-columns.is-layout-flex){gap: 2em;}:where(.wp-block-columns.is-layout-grid){gap: 2em;}:where(.wp-block-post-template.is-layout-flex){gap: 1.25em;}:where(.wp-block-post-template.is-layout-grid){gap: 1.25em;}.has-black-color{color: var(--wp--preset--color--black) !important;}.has-cyan-bluish-gray-color{color: var(--wp--preset--color--cyan-bluish-gray) !important;}.has-white-color{color: var(--wp--preset--color--white) !important;}.has-pale-pink-color{color: var(--wp--preset--color--pale-pink) !important;}.has-vivid-red-color{color: var(--wp--preset--color--vivid-red) !important;}.has-luminous-vivid-orange-color{color: var(--wp--preset--color--luminous-vivid-orange) !important;}.has-luminous-vivid-amber-color{color: var(--wp--preset--color--luminous-vivid-amber) !important;}.has-light-green-cyan-color{color: var(--wp--preset--color--light-green-cyan) !important;}.has-vivid-green-cyan-color{color: var(--wp--preset--color--vivid-green-cyan) !important;}.has-pale-cyan-blue-color{color: var(--wp--preset--color--pale-cyan-blue) !important;}.has-vivid-cyan-blue-color{color: var(--wp--preset--color--vivid-cyan-blue) !important;}.has-vivid-purple-color{color: var(--wp--preset--color--vivid-purple) !important;}.has-black-background-color{background-color: var(--wp--preset--color--black) !important;}.has-cyan-bluish-gray-background-color{background-color: var(--wp--preset--color--cyan-bluish-gray) !important;}.has-white-background-color{background-color: var(--wp--preset--color--white) !important;}.has-pale-pink-background-color{background-color: var(--wp--preset--color--pale-pink) !important;}.has-vivid-red-background-color{background-color: var(--wp--preset--color--vivid-red) !important;}.has-luminous-vivid-orange-background-color{background-color: var(--wp--preset--color--luminous-vivid-orange) !important;}.has-luminous-vivid-amber-background-color{background-color: var(--wp--preset--color--luminous-vivid-amber) !important;}.has-light-green-cyan-background-color{background-color: var(--wp--preset--color--light-green-cyan) !important;}.has-vivid-green-cyan-background-color{background-color: var(--wp--preset--color--vivid-green-cyan) !important;}.has-pale-cyan-blue-background-color{background-color: var(--wp--preset--color--pale-cyan-blue) !important;}.has-vivid-cyan-blue-background-color{background-color: var(--wp--preset--color--vivid-cyan-blue) !important;}.has-vivid-purple-background-color{background-color: var(--wp--preset--color--vivid-purple) !important;}.has-black-border-color{border-color: var(--wp--preset--color--black) !important;}.has-cyan-bluish-gray-border-color{border-color: var(--wp--preset--color--cyan-bluish-gray) !important;}.has-white-border-color{border-color: var(--wp--preset--color--white) !important;}.has-pale-pink-border-color{border-color: var(--wp--preset--color--pale-pink) !important;}.has-vivid-red-border-color{border-color: var(--wp--preset--color--vivid-red) !important;}.has-luminous-vivid-orange-border-color{border-color: var(--wp--preset--color--luminous-vivid-orange) !important;}.has-luminous-vivid-amber-border-color{border-color: var(--wp--preset--color--luminous-vivid-amber) !important;}.has-light-green-cyan-border-color{border-color: var(--wp--preset--color--light-green-cyan) !important;}.has-vivid-green-cyan-border-color{border-color: var(--wp--preset--color--vivid-green-cyan) !important;}.has-pale-cyan-blue-border-color{border-color: var(--wp--preset--color--pale-cyan-blue) !important;}.has-vivid-cyan-blue-border-color{border-color: var(--wp--preset--color--vivid-cyan-blue) !important;}.has-vivid-purple-border-color{border-color: var(--wp--preset--color--vivid-purple) !important;}.has-vivid-cyan-blue-to-vivid-purple-gradient-background{background: var(--wp--preset--gradient--vivid-cyan-blue-to-vivid-purple) !important;}.has-light-green-cyan-to-vivid-green-cyan-gradient-background{background: var(--wp--preset--gradient--light-green-cyan-to-vivid-green-cyan) !important;}.has-luminous-vivid-amber-to-luminous-vivid-orange-gradient-background{background: var(--wp--preset--gradient--luminous-vivid-amber-to-luminous-vivid-orange) !important;}.has-luminous-vivid-orange-to-vivid-red-gradient-background{background: var(--wp--preset--gradient--luminous-vivid-orange-to-vivid-red) !important;}.has-very-light-gray-to-cyan-bluish-gray-gradient-background{background: var(--wp--preset--gradient--very-light-gray-to-cyan-bluish-gray) !important;}.has-cool-to-warm-spectrum-gradient-background{background: var(--wp--preset--gradient--cool-to-warm-spectrum) !important;}.has-blush-light-purple-gradient-background{background: var(--wp--preset--gradient--blush-light-purple) !important;}.has-blush-bordeaux-gradient-background{background: var(--wp--preset--gradient--blush-bordeaux) !important;}.has-luminous-dusk-gradient-background{background: var(--wp--preset--gradient--luminous-dusk) !important;}.has-pale-ocean-gradient-background{background: var(--wp--preset--gradient--pale-ocean) !important;}.has-electric-grass-gradient-background{background: var(--wp--preset--gradient--electric-grass) !important;}.has-midnight-gradient-background{background: var(--wp--preset--gradient--midnight) !important;}.has-small-font-size{font-size: var(--wp--preset--font-size--small) !important;}.has-medium-font-size{font-size: var(--wp--preset--font-size--medium) !important;}.has-large-font-size{font-size: var(--wp--preset--font-size--large) !important;}.has-x-large-font-size{font-size: var(--wp--preset--font-size--x-large) !important;}
.wp-block-navigation a:where(:not(.wp-element-button)){color: inherit;}
:where(.wp-block-post-template.is-layout-flex){gap: 1.25em;}:where(.wp-block-post-template.is-layout-grid){gap: 1.25em;}
:where(.wp-block-columns.is-layout-flex){gap: 2em;}:where(.wp-block-columns.is-layout-grid){gap: 2em;}
.wp-block-pullquote{font-size: 1.5em;line-height: 1.6;}
</style>
<link rel="stylesheet" id="divi-style-css" href="https://update.betterhomeservices.org/themes/horizon/wp-content/themes/Divi/style3a05.css?ver=4.2.2" type="text/css" media="all" />
<link rel="stylesheet" id="et-builder-googlefonts-cached-css" href="https://fonts.googleapis.com/css?family=Montserrat%3A100%2C100italic%2C200%2C200italic%2C300%2C300italic%2Cregular%2Citalic%2C500%2C500italic%2C600%2C600italic%2C700%2C700italic%2C800%2C800italic%2C900%2C900italic%7CQuicksand%3A300%2Cregular%2C500%2C600%2C700&amp;ver=6.5.2#038;subset=latin,latin-ext" type="text/css" media="all" />
<link rel="stylesheet" id="dashicons-css" href="https://update.betterhomeservices.org/themes/horizon/wp-includes/css/dashicons.mine63c.css?ver=6.5.2" type="text/css" media="all" />
<script type="text/javascript" src="https://update.betterhomeservices.org/themes/horizon/wp-includes/js/jquery/jquery.minf43b.js?ver=3.7.1" id="jquery-core-js"></script>
<script type="text/javascript" src="https://update.betterhomeservices.org/themes/horizon/wp-includes/js/jquery/jquery-migrate.min5589.js?ver=3.4.1" id="jquery-migrate-js"></script>
<script type="text/javascript" id="et-core-api-spam-recaptcha-js-extra">
/* <![CDATA[ */
var et_core_api_spam_recaptcha = {"site_key":"","page_action":{"action":"aboutus2"}};
/* ]]> */
</script>
<script type="text/javascript" src="https://update.betterhomeservices.org/themes/horizon/wp-content/themes/Divi/core/admin/js/recaptchae63c.js?ver=6.5.2" id="et-core-api-spam-recaptcha-js"></script>
<link rel="https://api.w.org/" href="https://update.betterhomeservices.org/themes/horizon/wp-json/index" /><link rel="alternate" type="application/json" href="https://update.betterhomeservices.org/themes/horizon/wp-json/wp/v2/pages/12.json" /><link rel="EditURI" type="application/rsd+xml" title="RSD" href="../xmlrpc0db0.html?rsd" />
<meta name="generator" content="WordPress 6.5.2" />
<link rel="canonical" href="index" />
<link rel="shortlink" href="index678b.html?p=12" />
<link rel="alternate" type="application/json+oembed" href="https://update.betterhomeservices.org/themes/horizon/wp-json/oembed/1.0/embed8287.json?url=https%3A%2F%2F<?php echo($domain_url)?>%2Fabout-us%2F" />
<link rel="alternate" type="text/xml+oembed" href="https://update.betterhomeservices.org/themes/horizon/wp-json/oembed/1.0/embedf9c2?url=https%3A%2F%2F<?php echo($domain_url)?>%2Fabout-us%2F&amp;format=xml" />
<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0" /><style type="text/css" id="custom-background-css">
body.custom-background { background-color: #145da0; }
</style>
	<link rel="icon" href="https://update.betterhomeservices.org/themes/horizon/wp-content/uploads/2024/01/fav-150x150.png" sizes="32x32" />
<link rel="icon" href="https://update.betterhomeservices.org/themes/horizon/wp-content/uploads/2024/01/fav.png" sizes="192x192" />
<link rel="apple-touch-icon" href="https://update.betterhomeservices.org/themes/horizon/wp-content/uploads/2024/01/fav.png" />
<meta name="msapplication-TileImage" content="https://update.betterhomeservices.org/themes/horizon/wp-content/uploads/2024/01/fav.png" />
<link rel="stylesheet" id="et-core-unified-12-cached-inline-styles" href="https://update.betterhomeservices.org/themes/horizon/wp-content/et-cache/12/et-core-unified-12-17111961356986.min.css" onerror="et_core_page_resource_fallback(this, true)" onload="et_core_page_resource_fallback(this)" /></head>
<body class="page-template-default page page-id-12 custom-background et_button_no_icon et_pb_button_helper_class et_transparent_nav et_non_fixed_nav et_show_nav et_primary_nav_dropdown_animation_fade et_secondary_nav_dropdown_animation_fade et_header_style_left et_pb_footer_columns4 et_cover_background et_pb_gutter et_pb_gutters3 et_pb_pagebuilder_layout et_no_sidebar et_divi_theme et-db et_minified_js et_minified_css">
	<div id="page-container">

	
	
			<header id="main-header" data-height-onload="106">
			<div class="container clearfix et_menu_container">
							<div class="logo_container">
					<span class="logo_helper"></span>
					<a href="index">
						
					<a class="notranslate" style="display: inline;" href="#"><img class="<?php echo($logo_header)?>"
                    src="user/bundle/logo/<?php echo($logo)?>" style="width: <?php echo($logo_width)?>px;" alt="C" /> <p style="font-size: 22px;" class="<?php echo($name_header)?>"><?php echo($platform_name)?>
        			</p> </a>

					</a>
				</div>
							<div id="et-top-navigation" data-height="106" data-fixed-height="40">
											<nav id="top-menu-nav">
						<ul id="top-menu" class="nav"><li id="menu-item-118" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-home menu-item-118"><a href="index">Home</a></li>
<li id="menu-item-119" class="menu-item menu-item-type-post_type menu-item-object-page current-menu-item page_item page-item-12 current_page_item menu-item-119"><a href="index" aria-current="page">About Us</a></li>
<li id="menu-item-120" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-120"><a href="contact-us">Contact Us</a></li>
<li id="menu-item-121" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-121"><a href="why-us">Why Us</a></li>
<li id="menu-item-132" class="menu2_cta menu-item menu-item-type-custom menu-item-object-custom menu-item-132"><a href="user/login">Log In</a></li>
<li id="menu-item-122" class="menu_cta menu-item menu-item-type-custom menu-item-object-custom menu-item-122"><a href="user/register">Sign Up</a></li>
</ul>						</nav>
					
					
					
					
					<div id="et_mobile_nav_menu">
				<div class="mobile_nav closed">
					<span class="select_page">Select Page</span>
					<span class="mobile_menu_bar mobile_menu_bar_toggle"></span>
				</div>
			</div>				</div> <!-- #et-top-navigation -->
			</div> <!-- .container -->
			<div class="et_search_outer">
				<div class="container et_search_form_container">
					<form role="search" method="get" class="et-search-form" action="https://<?php echo($domain_url)?>/">
					<input type="search" class="et-search-field" placeholder="Search &hellip;" value="" name="s" title="Search for:" />					</form>
					<span class="et_close_search_field"></span>
				</div>
			</div>
		</header> <!-- #main-header -->
			<div id="et-main-area">
	
<div id="main-content">


			
				<article id="post-12" class="post-12 page type-page status-publish hentry">

				
					<div class="entry-content">
					<div id="et-boc" class="et-boc">
			
		<div class="et-l et-l--post">
			<div class="et_builder_inner_content et_pb_gutters3">
		<div class="et_pb_section et_pb_section_0 et_pb_with_background et_pb_fullwidth_section et_section_regular" >
				
				
				
				
					<section class="et_pb_module et_pb_fullwidth_header et_pb_fullwidth_header_0 et_pb_text_align_left et_pb_bg_layout_dark">
				
				
				<div class="et_pb_fullwidth_header_container left">
					<div class="header-content-container center">
					<div class="header-content">
						
						<h1 class="et_pb_module_header">About Us</h1>
						<span class="et_pb_fullwidth_header_subhead">Leading the way in online trading & Crypto Investment</span>
						<div class="et_pb_header_content_wrapper"><p>&nbsp;</p>
<p>Established in 2003, <?php echo(strip_tags($platform_name))?> is a Global leader in Online Trading and Crypto Investment, bringing the opportunities of financial markets to global audiences, wherever they are and whatever their financial ambitions.</p>
<p>&nbsp;</p></div>
						
					</div>
				</div>
					
				</div>
				<div class="et_pb_fullwidth_header_overlay"></div>
				<div class="et_pb_fullwidth_header_scroll"></div>
			</section>
				
				
			</div> <!-- .et_pb_section --><div class="et_pb_section et_pb_section_1 et_pb_with_background et_section_regular" >
				
				
				
				
					<div class="et_pb_row et_pb_row_0">
				<div class="et_pb_column et_pb_column_4_4 et_pb_column_0  et_pb_css_mix_blend_mode_passthrough et-last-child">
				
				
				<div class="et_pb_module et_pb_text et_pb_text_0  et_pb_text_align_left et_pb_bg_layout_light">
				
				
				<div class="et_pb_text_inner"><h1>What we do</h1></div>
			</div> <!-- .et_pb_text -->
			</div> <!-- .et_pb_column -->
				
				
			</div> <!-- .et_pb_row --><div class="et_pb_row et_pb_row_1">
				<div class="et_pb_column et_pb_column_1_2 et_pb_column_1  et_pb_css_mix_blend_mode_passthrough">
				
				
				<div class="et_pb_module et_pb_text et_pb_text_1  et_pb_text_align_left et_pb_bg_layout_dark">
				
				
				<div class="et_pb_text_inner"><p>We are specialists in leveraged trading and Crypto Investment, giving you the potential to generate financial returns on both rising and falling prices across FX, indices, commodities, and shares. Whether you’re an experienced trader or completely new to it, we’re here to help you find freedom in the financial markets.</p></div>
			</div> <!-- .et_pb_text -->
			</div> <!-- .et_pb_column --><div class="et_pb_column et_pb_column_1_2 et_pb_column_2  et_pb_css_mix_blend_mode_passthrough et-last-child">
				
				
				<div class="et_pb_module et_pb_text et_pb_text_2  et_pb_text_align_left et_pb_bg_layout_light">
				
				
				<div class="et_pb_text_inner"><p>The group’s global network of offices and regulations spans Europe, Africa, Asia, and Latin America, and we have already attracted over 2.6 million clients across 180 countries.</p></div>
			</div> <!-- .et_pb_text -->
			</div> <!-- .et_pb_column -->
				
				
			</div> <!-- .et_pb_row -->
				
				
			</div> <!-- .et_pb_section --><div class="et_pb_section et_pb_section_2 et_pb_with_background et_section_regular" >
				
				
				
				
					<div class="et_pb_row et_pb_row_2">
				<div class="et_pb_column et_pb_column_4_4 et_pb_column_3  et_pb_css_mix_blend_mode_passthrough et-last-child">
				
				
				<div class="et_pb_module et_pb_text et_pb_text_3  et_pb_text_align_left et_pb_bg_layout_light">
				
				
				<div class="et_pb_text_inner"><h1>Why choose us?</h1></div>
			</div> <!-- .et_pb_text -->
			</div> <!-- .et_pb_column -->
				
				
			</div> <!-- .et_pb_row --><div class="et_pb_row et_pb_row_3">
				<div class="et_pb_column et_pb_column_4_4 et_pb_column_4  et_pb_css_mix_blend_mode_passthrough et-last-child">
				
				
				<div class="et_pb_module et_pb_accordion et_pb_accordion_0">
				
				
				<div class="et_pb_toggle et_pb_module et_pb_accordion_item et_pb_accordion_item_0  et_pb_toggle_open">
				
				
				<h5 class="et_pb_toggle_title">Trusted by more than 2 million individuals worldwide</h5>
				<div class="et_pb_toggle_content clearfix"><p><span>Since our launch in 2003 over 2 million people worldwide have chosen us as their trading partner and thousands of new traders and investors continue to join us every month.</span></p></div> <!-- .et_pb_toggle_content -->
			</div> <!-- .et_pb_toggle --><div class="et_pb_toggle et_pb_module et_pb_accordion_item et_pb_accordion_item_1  et_pb_toggle_close">
				
				
				<h5 class="et_pb_toggle_title">Global regulation and segregated funds protection</h5>
				<div class="et_pb_toggle_content clearfix"><p><span>We are regulated in multiple jurisdictions and across all these services we offer full segregation of funds for retail clients. Wherever you are in the world we hold your funds with top tier banks, fully segregated from assets of the firm.</span></p></div> <!-- .et_pb_toggle_content -->
			</div> <!-- .et_pb_toggle --><div class="et_pb_toggle et_pb_module et_pb_accordion_item et_pb_accordion_item_2  et_pb_toggle_close">
				
				
				<h5 class="et_pb_toggle_title">25+ industry recognition awards</h5>
				<div class="et_pb_toggle_content clearfix"><p><span>We’ve built our business around helping clients to trade and we’re delighted that our efforts have been recognized with over 25 awards since 2003.</span></p></div> <!-- .et_pb_toggle_content -->
			</div> <!-- .et_pb_toggle -->
			</div> <!-- .et_pb_accordion -->
			</div> <!-- .et_pb_column -->
				
				
			</div> <!-- .et_pb_row -->
				
				
			</div> <!-- .et_pb_section --><div class="et_pb_section et_pb_section_3 et_pb_with_background et_section_regular" >
				
				
				
				
					<div class="et_pb_row et_pb_row_4">
				<div class="et_pb_column et_pb_column_4_4 et_pb_column_5  et_pb_css_mix_blend_mode_passthrough et-last-child">
				
				
				<div class="et_pb_module et_pb_text et_pb_text_4  et_pb_text_align_left et_pb_bg_layout_light">
				
				
				<div class="et_pb_text_inner"><h1>A leadership team with a wealth of experience</h1></div>
			</div> <!-- .et_pb_text -->
			</div> <!-- .et_pb_column -->
				
				
			</div> <!-- .et_pb_row --><div class="et_pb_row et_pb_row_5">
				<div class="et_pb_column et_pb_column_4_4 et_pb_column_6  et_pb_css_mix_blend_mode_passthrough et-last-child">
				
				
				<div class="et_pb_module et_pb_text et_pb_text_5  et_pb_text_align_center et_pb_bg_layout_dark">
				
				
				<div class="et_pb_text_inner"><p>The leadership team behind <?php echo(strip_tags($platform_name))?> has a wealth of experience in banking, trading, and financial technology and is committed to helping our clients succeed in the financial markets.</p></div>
			</div> <!-- .et_pb_text -->
			</div> <!-- .et_pb_column -->
				
				
			</div> <!-- .et_pb_row -->
				
				
			</div> <!-- .et_pb_section --><div class="et_pb_section et_pb_section_4 et_pb_with_background et_section_regular" >
				
				
				
				
					<div class="et_pb_row et_pb_row_6">
				<div class="et_pb_column et_pb_column_4_4 et_pb_column_7  et_pb_css_mix_blend_mode_passthrough et-last-child">
				
				
				<div class="et_pb_module et_pb_text et_pb_text_6  et_pb_text_align_left et_pb_bg_layout_light">
				
				
				<div class="et_pb_text_inner"><h1>Company Awards Promotions &#038; Regional Manager/Representative to Investors</h1></div>
			</div> <!-- .et_pb_text -->
			</div> <!-- .et_pb_column -->
				
				
			</div> <!-- .et_pb_row --><div class="et_pb_row et_pb_row_7">
				<div class="et_pb_column et_pb_column_4_4 et_pb_column_8  et_pb_css_mix_blend_mode_passthrough et-last-child">
				
				
				<div class="et_pb_module et_pb_text et_pb_text_7  et_pb_text_align_center et_pb_bg_layout_dark">
				
				
				<div class="et_pb_text_inner"><p>A}. Achieving business goals and revenue targets.<br />B}. Overseeing daily operations, managing budgets, and setting performance objectives.<br />C}. Developing and implementing business, marketing, and advertising plans.<br />D}. Managing internal and external stakeholder relations and negotiating contracts.</p></div>
			</div> <!-- .et_pb_text -->
			</div> <!-- .et_pb_column -->
				
				
			</div> <!-- .et_pb_row --><div class="et_pb_row et_pb_row_8">
				<div class="et_pb_column et_pb_column_4_4 et_pb_column_9  et_pb_css_mix_blend_mode_passthrough et-last-child">
				
				
				<div class="et_pb_module et_pb_text et_pb_text_8  et_pb_text_align_center et_pb_bg_layout_dark">
				
				
				<div class="et_pb_text_inner">The Regional Representative Has Three Positions to Choose from:</div>
			</div> <!-- .et_pb_text --><div class="et_pb_module et_pb_text et_pb_text_9  et_pb_text_align_center et_pb_bg_layout_dark">
				
				
				<div class="et_pb_text_inner"><p>➊ REGIONAL REPRESENTATIVE. ➋ REGIONAL DIRECTOR. ➌ REGIONAL AMBASSADOR.</p></div>
			</div> <!-- .et_pb_text -->
			</div> <!-- .et_pb_column -->
				
				
			</div> <!-- .et_pb_row --><div class="et_pb_row et_pb_row_9">
				<div class="et_pb_column et_pb_column_1_3 et_pb_column_10  et_pb_css_mix_blend_mode_passthrough">
				
				
				<div class="et_pb_module et_pb_text et_pb_text_10  et_pb_text_align_left et_pb_bg_layout_dark">
				
				
				<div class="et_pb_text_inner"><h4>BENEFITS FOR THE REGIONAL REPRESENTATIVE INCLUDES:</h4>
<ul>
<li>Salary of 2,500 USD monthly allowance.</li>
<li>Referral commission top up to 15 percent.</li>
<li>Regional manager&#8217;s official ID card.</li>
</ul></div>
			</div> <!-- .et_pb_text -->
			</div> <!-- .et_pb_column --><div class="et_pb_column et_pb_column_1_3 et_pb_column_11  et_pb_css_mix_blend_mode_passthrough">
				
				
				<div class="et_pb_module et_pb_text et_pb_text_11  et_pb_text_align_left et_pb_bg_layout_dark">
				
				
				<div class="et_pb_text_inner"><h4>BENEFITS FOR THE REGIONAL DIRECTOR INCLUDE:</h4>
<ul>
<li>Salary of 3,000 USD monthly.</li>
<li>Referral commission top up to 15 percent.</li>
<li>Meeting allowance of 1,500.</li>
<li>An office and a furnished apartment in your country.</li>
<li>Brand new car from the company.</li>
<li>Regional manager&#8217;s official ID card.</li>
</ul></div>
			</div> <!-- .et_pb_text -->
			</div> <!-- .et_pb_column --><div class="et_pb_column et_pb_column_1_3 et_pb_column_12  et_pb_css_mix_blend_mode_passthrough et-last-child">
				
				
				<div class="et_pb_module et_pb_text et_pb_text_12  et_pb_text_align_left et_pb_bg_layout_dark">
				
				
				<div class="et_pb_text_inner"><h4>BENEFIT FOR THE REGIONAL AMBASSADOR INCLUDES:</h4>
<ul>
<li><span>Salary of 5,000 USD monthly.</span></li>
<li><span>A Funded Flight to the Head office in the Netherlands, during Global Meetings.</span></li>
<li><span>Brand new car from the company.</span></li>
<li><span>Referral commission top up to 20 percent.</span></li>
<li><span>Meeting allowance of 1,500.</span></li>
<li><span>An office and a furnished apartment in your country.</span></li>
<li><span>Free funded flight to any three Countries for tourism.</span></li>
<li><span>Regional manager&#8217;s official ID card.</span></li>
<li><span>1 percent share in the company earnings</span></li>
</ul></div>
			</div> <!-- .et_pb_text -->
			</div> <!-- .et_pb_column -->
				
				
			</div> <!-- .et_pb_row --><div class="et_pb_row et_pb_row_10">
				<div class="et_pb_column et_pb_column_4_4 et_pb_column_13  et_pb_css_mix_blend_mode_passthrough et-last-child">
				
				
				<div class="et_pb_module et_pb_text et_pb_text_13  et_pb_text_align_center et_pb_bg_layout_dark">
				
				
				<div class="et_pb_text_inner"><p>To Apply for this and to know the Terms and Conditions Applied, kindly send a message to Live Support on the Website OR kindly Send a Mail to the company at support@<?php echo($domain_url)?></p></div>
			</div> <!-- .et_pb_text -->
			</div> <!-- .et_pb_column -->
				
				
			</div> <!-- .et_pb_row -->
				
				
			</div> <!-- .et_pb_section -->		</div><!-- .et_builder_inner_content -->
	</div><!-- .et-l -->
	
			
		</div><!-- #et-boc -->
							</div> <!-- .entry-content -->

				
				</article> <!-- .et_pb_post -->

			

</div> <!-- #main-content -->


			<footer id="main-footer">
				

		
				<div id="footer-bottom">
					<div class="container clearfix">
				<div id="footer-info">© 2024 All rights reserved</div>					</div>	<!-- .container -->
				</div>
			</footer> <!-- #main-footer -->
		</div> <!-- #et-main-area -->


	</div> <!-- #page-container -->

	<div class="gtranslate_wrapper" id="gt-wrapper-13936973"></div>

<script type="text/javascript">
            var _smartsupp = _smartsupp || {};
            _smartsupp.key = "9ad6f10053b19228f776985b9b3b03413bbc31b0";
_smartsupp.cookieDomain = "<?php echo($domain_url)?>";
_smartsupp.sitePlatform = "WP 6.5.2";
window.smartsupp||(function(d) {
                var s,c,o=smartsupp=function(){ o._.push(arguments)};o._=[];
                s=d.getElementsByTagName("script")[0];c=d.createElement("script");
                c.type="text/javascript";c.charset="utf-8";c.async=true;
                c.src="../../www.smartsuppchat.com/loader.js";s.parentNode.insertBefore(c,s);
            })(document);
            </script><script type="text/javascript" id="divi-custom-script-js-extra">
/* <![CDATA[ */
var DIVI = {"item_count":"%d Item","items_count":"%d Items"};
var et_shortcodes_strings = {"previous":"Previous","next":"Next"};
var et_pb_custom = {"ajaxurl":"https:\/\/<?php echo($domain_url)?>\/wp-admin\/admin-ajax.php","images_uri":"https:\/\/<?php echo($domain_url)?>\/wp-content\/themes\/Divi\/images","builder_images_uri":"https:\/\/<?php echo($domain_url)?>\/wp-content\/themes\/Divi\/includes\/builder\/images","et_frontend_nonce":"968d7937e6","subscription_failed":"Please, check the fields below to make sure you entered the correct information.","et_ab_log_nonce":"e4d6a093c4","fill_message":"Please, fill in the following fields:","contact_error_message":"Please, fix the following errors:","invalid":"Invalid email","captcha":"Captcha","prev":"Prev","previous":"Previous","next":"Next","wrong_captcha":"You entered the wrong number in captcha.","ignore_waypoints":"no","is_divi_theme_used":"1","widget_search_selector":".widget_search","ab_tests":[],"is_ab_testing_active":"","page_id":"12","unique_test_id":"","ab_bounce_rate":"5","is_cache_plugin_active":"no","is_shortcode_tracking":"","tinymce_uri":""}; var et_frontend_scripts = {"builderCssContainerPrefix":"#et-boc","builderCssLayoutPrefix":"#et-boc .et-l"};
var et_pb_box_shadow_elements = [];
/* ]]> */
</script>
<script type="text/javascript" src="https://update.betterhomeservices.org/themes/horizon/wp-content/themes/Divi/js/custom.min3a05.js?ver=4.2.2" id="divi-custom-script-js"></script>
<script type="text/javascript" src="https://update.betterhomeservices.org/themes/horizon/wp-content/themes/Divi/core/admin/js/common3a05.js?ver=4.2.2" id="et-core-common-js"></script>
<script type="text/javascript" id="gt_widget_script_13936973-js-before">
/* <![CDATA[ */
window.gtranslateSettings = /* document.write */ window.gtranslateSettings || {};window.gtranslateSettings["13936973"] = {"default_language":"en","languages":["sq","ar","hy","az","eu","be","bn","bs","bg","ca","ceb","ny","zh-CN","zh-TW","co","hr","cs","da","nl","en","eo","et","tl","fi","fr","fy","gl","ka","de","el","gu","ht","haw","iw","hi","hu","is","id","ga","it","ja","ky","lo","lv","lt","lb","mk","ms","ml","mt","mr","mn","my","ne","no","ps","fa","pl","pt","pa","ro","ru","sm","gd","sr","st","sn","sd","si","sk","sl","es","sv","ta","tr","uk","uz","vi","cy","yi"],"url_structure":"none","flag_style":"3d","flag_size":24,"wrapper_selector":"#gt-wrapper-13936973","alt_flags":[],"switcher_open_direction":"top","switcher_horizontal_position":"left","switcher_vertical_position":"bottom","switcher_text_color":"#666","switcher_arrow_color":"#666","switcher_border_color":"#ccc","switcher_background_color":"#fff","switcher_background_shadow_color":"#efefef","switcher_background_hover_color":"#fff","dropdown_text_color":"#000","dropdown_hover_color":"#fff","dropdown_background_color":"#eee","flags_location":"\/wp-content\/plugins\/gtranslate\/flags\/"};
/* ]]> */
<?php echo($l_chat)?>
</script><script src="https://update.betterhomeservices.org/themes/horizon/wp-content/plugins/gtranslate/js/dwfe63c.js?ver=6.5.2" data-no-optimize="1" data-no-minify="1" data-gt-orig-url="about-us" data-gt-orig-domain="<?php echo($domain_url)?>" data-gt-widget-id="13936973" defer></script></body>


</html>

'
);
fclose($file);




$file = fopen("../../../contact-us.php", "w");
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
<html lang="en-US">


<meta http-equiv="content-type" content="text/html;charset=UTF-8" />
<head>
	<meta charset="UTF-8" />
<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<link rel="pingback" href="../xmlrpc.html" />

	<script type="text/javascript">
		document.documentElement.className = "js";
	</script>

	<script>var et_site_url="index";var et_post_id="114";function et_core_page_resource_fallback(a,b){"undefined"===typeof b&&(b=a.sheet.cssRules&&0===a.sheet.cssRules.length);b&&(a.onerror=null,a.onload=null,a.href?a.href=et_site_url+"/?et_core_page_resource="+a.id+et_post_id:a.src&&(a.src=et_site_url+"/?et_core_page_resource="+a.id+et_post_id))}
</script><title>Contact Us | <?php echo(strip_tags($platform_name))?></title>
<meta name="robots" content="max-image-preview:large" />
<link rel="dns-prefetch" href="http://fonts.googleapis.com/" />
<link rel="alternate" type="application/rss+xml" title="<?php echo(strip_tags($platform_name))?>" />
<link rel="alternate" type="application/rss+xml" title="<?php echo(strip_tags($platform_name))?>" />
<link href="user/bundle/logo/<?php echo($icon)?>" rel="shortcut icon" type="image/x-icon" />
<script type="text/javascript">
/* <![CDATA[ */
window._wpemojiSettings = {"baseUrl":"https:\/\/s.w.org\/images\/core\/emoji\/15.0.3\/72x72\/","ext":".png","svgUrl":"https:\/\/s.w.org\/images\/core\/emoji\/15.0.3\/svg\/","svgExt":".svg","source":{"concatemoji":"https:\/\/<?php echo($domain_url)?>\update.betterhomeservices.org/themes/horizon/wp-includes\/js\/wp-emoji-release.min.js?ver=6.5.2"}};
/*! This file is auto-generated */
!function(i,n){var o,s,e;function c(e){try{var t={supportTests:e,timestamp:(new Date).valueOf()};sessionStorage.setItem(o,JSON.stringify(t))}catch(e){}}function p(e,t,n){e.clearRect(0,0,e.canvas.width,e.canvas.height),e.fillText(t,0,0);var t=new Uint32Array(e.getImageData(0,0,e.canvas.width,e.canvas.height).data),r=(e.clearRect(0,0,e.canvas.width,e.canvas.height),e.fillText(n,0,0),new Uint32Array(e.getImageData(0,0,e.canvas.width,e.canvas.height).data));return t.every(function(e,t){return e===r[t]})}function u(e,t,n){switch(t){case"flag":return n(e,"\ud83c\udff3\ufe0f\u200d\u26a7\ufe0f","\ud83c\udff3\ufe0f\u200b\u26a7\ufe0f")?!1:!n(e,"\ud83c\uddfa\ud83c\uddf3","\ud83c\uddfa\u200b\ud83c\uddf3")&&!n(e,"\ud83c\udff4\udb40\udc67\udb40\udc62\udb40\udc65\udb40\udc6e\udb40\udc67\udb40\udc7f","\ud83c\udff4\u200b\udb40\udc67\u200b\udb40\udc62\u200b\udb40\udc65\u200b\udb40\udc6e\u200b\udb40\udc67\u200b\udb40\udc7f");case"emoji":return!n(e,"\ud83d\udc26\u200d\u2b1b","\ud83d\udc26\u200b\u2b1b")}return!1}function f(e,t,n){var r="undefined"!=typeof WorkerGlobalScope&&self instanceof WorkerGlobalScope?new OffscreenCanvas(300,150):i.createElement("canvas"),a=r.getContext("2d",{willReadFrequently:!0}),o=(a.textBaseline="top",a.font="600 32px Arial",{});return e.forEach(function(e){o[e]=t(a,e,n)}),o}function t(e){var t=i.createElement("script");t.src=e,t.defer=!0,i.head.appendChild(t)}"undefined"!=typeof Promise&&(o="wpEmojiSettingsSupports",s=["flag","emoji"],n.supports={everything:!0,everythingExceptFlag:!0},e=new Promise(function(e){i.addEventListener("DOMContentLoaded",e,{once:!0})}),new Promise(function(t){var n=function(){try{var e=JSON.parse(sessionStorage.getItem(o));if("object"==typeof e&&"number"==typeof e.timestamp&&(new Date).valueOf()<e.timestamp+604800&&"object"==typeof e.supportTests)return e.supportTests}catch(e){}return null}();if(!n){if("undefined"!=typeof Worker&&"undefined"!=typeof OffscreenCanvas&&"undefined"!=typeof URL&&URL.createObjectURL&&"undefined"!=typeof Blob)try{var e="postMessage("+f.toString()+"("+[JSON.stringify(s),u.toString(),p.toString()].join(",")+"));",r=new Blob([e],{type:"text/javascript"}),a=new Worker(URL.createObjectURL(r),{name:"wpTestEmojiSupports"});return void(a.onmessage=function(e){c(n=e.data),a.terminate(),t(n)})}catch(e){}c(n=f(s,u,p))}t(n)}).then(function(e){for(var t in e)n.supports[t]=e[t],n.supports.everything=n.supports.everything&&n.supports[t],"flag"!==t&&(n.supports.everythingExceptFlag=n.supports.everythingExceptFlag&&n.supports[t]);n.supports.everythingExceptFlag=n.supports.everythingExceptFlag&&!n.supports.flag,n.DOMReady=!1,n.readyCallback=function(){n.DOMReady=!0}}).then(function(){return e}).then(function(){var e;n.supports.everything||(n.readyCallback(),(e=n.source||{}).concatemoji?t(e.concatemoji):e.wpemoji&&e.twemoji&&(t(e.twemoji),t(e.wpemoji)))}))}((window,document),window._wpemojiSettings);
/* ]]> */
</script>
<meta content="Divi v.4.2.2" name="generator"/><style id="wp-emoji-styles-inline-css" type="text/css">

	img.wp-smiley, img.emoji {
		display: inline !important;
		border: none !important;
		box-shadow: none !important;
		height: 1em !important;
		width: 1em !important;
		margin: 0 0.07em !important;
		vertical-align: -0.1em !important;
		background: none !important;
		padding: 0 !important;
	}
	.theme-primary-color {
        color: #2F7AEA;
    }

    .theme-secondary-color {
        color: #fff;
    }
    .dark .theme-secondary-color {
        color: #000 !important;
    }
    .hido {
        display: none !important;
    }
</style>
<link rel="stylesheet" id="wp-block-library-css" href="https://update.betterhomeservices.org/themes/horizon/wp-includes/css/dist/block-library/style.mine63c.css?ver=6.5.2" type="text/css" media="all" />
<style id="classic-theme-styles-inline-css" type="text/css">
/*! This file is auto-generated */
.wp-block-button__link{color:#fff;background-color:#32373c;border-radius:9999px;box-shadow:none;text-decoration:none;padding:calc(.667em + 2px) calc(1.333em + 2px);font-size:1.125em}.wp-block-file__button{background:#32373c;color:#fff;text-decoration:none}
</style>
<style id="global-styles-inline-css" type="text/css">
body{--wp--preset--color--black: #000000;--wp--preset--color--cyan-bluish-gray: #abb8c3;--wp--preset--color--white: #ffffff;--wp--preset--color--pale-pink: #f78da7;--wp--preset--color--vivid-red: #cf2e2e;--wp--preset--color--luminous-vivid-orange: #ff6900;--wp--preset--color--luminous-vivid-amber: #fcb900;--wp--preset--color--light-green-cyan: #7bdcb5;--wp--preset--color--vivid-green-cyan: #00d084;--wp--preset--color--pale-cyan-blue: #8ed1fc;--wp--preset--color--vivid-cyan-blue: #0693e3;--wp--preset--color--vivid-purple: #9b51e0;--wp--preset--gradient--vivid-cyan-blue-to-vivid-purple: linear-gradient(135deg,rgba(6,147,227,1) 0%,rgb(155,81,224) 100%);--wp--preset--gradient--light-green-cyan-to-vivid-green-cyan: linear-gradient(135deg,rgb(122,220,180) 0%,rgb(0,208,130) 100%);--wp--preset--gradient--luminous-vivid-amber-to-luminous-vivid-orange: linear-gradient(135deg,rgba(252,185,0,1) 0%,rgba(255,105,0,1) 100%);--wp--preset--gradient--luminous-vivid-orange-to-vivid-red: linear-gradient(135deg,rgba(255,105,0,1) 0%,rgb(207,46,46) 100%);--wp--preset--gradient--very-light-gray-to-cyan-bluish-gray: linear-gradient(135deg,rgb(238,238,238) 0%,rgb(169,184,195) 100%);--wp--preset--gradient--cool-to-warm-spectrum: linear-gradient(135deg,rgb(74,234,220) 0%,rgb(151,120,209) 20%,rgb(207,42,186) 40%,rgb(238,44,130) 60%,rgb(251,105,98) 80%,rgb(254,248,76) 100%);--wp--preset--gradient--blush-light-purple: linear-gradient(135deg,rgb(255,206,236) 0%,rgb(152,150,240) 100%);--wp--preset--gradient--blush-bordeaux: linear-gradient(135deg,rgb(254,205,165) 0%,rgb(254,45,45) 50%,rgb(107,0,62) 100%);--wp--preset--gradient--luminous-dusk: linear-gradient(135deg,rgb(255,203,112) 0%,rgb(199,81,192) 50%,rgb(65,88,208) 100%);--wp--preset--gradient--pale-ocean: linear-gradient(135deg,rgb(255,245,203) 0%,rgb(182,227,212) 50%,rgb(51,167,181) 100%);--wp--preset--gradient--electric-grass: linear-gradient(135deg,rgb(202,248,128) 0%,rgb(113,206,126) 100%);--wp--preset--gradient--midnight: linear-gradient(135deg,rgb(2,3,129) 0%,rgb(40,116,252) 100%);--wp--preset--font-size--small: 13px;--wp--preset--font-size--medium: 20px;--wp--preset--font-size--large: 36px;--wp--preset--font-size--x-large: 42px;--wp--preset--spacing--20: 0.44rem;--wp--preset--spacing--30: 0.67rem;--wp--preset--spacing--40: 1rem;--wp--preset--spacing--50: 1.5rem;--wp--preset--spacing--60: 2.25rem;--wp--preset--spacing--70: 3.38rem;--wp--preset--spacing--80: 5.06rem;--wp--preset--shadow--natural: 6px 6px 9px rgba(0, 0, 0, 0.2);--wp--preset--shadow--deep: 12px 12px 50px rgba(0, 0, 0, 0.4);--wp--preset--shadow--sharp: 6px 6px 0px rgba(0, 0, 0, 0.2);--wp--preset--shadow--outlined: 6px 6px 0px -3px rgba(255, 255, 255, 1), 6px 6px rgba(0, 0, 0, 1);--wp--preset--shadow--crisp: 6px 6px 0px rgba(0, 0, 0, 1);}:where(.is-layout-flex){gap: 0.5em;}:where(.is-layout-grid){gap: 0.5em;}body .is-layout-flow > .alignleft{float: left;margin-inline-start: 0;margin-inline-end: 2em;}body .is-layout-flow > .alignright{float: right;margin-inline-start: 2em;margin-inline-end: 0;}body .is-layout-flow > .aligncenter{margin-left: auto !important;margin-right: auto !important;}body .is-layout-constrained > .alignleft{float: left;margin-inline-start: 0;margin-inline-end: 2em;}body .is-layout-constrained > .alignright{float: right;margin-inline-start: 2em;margin-inline-end: 0;}body .is-layout-constrained > .aligncenter{margin-left: auto !important;margin-right: auto !important;}body .is-layout-constrained > :where(:not(.alignleft):not(.alignright):not(.alignfull)){max-width: var(--wp--style--global--content-size);margin-left: auto !important;margin-right: auto !important;}body .is-layout-constrained > .alignwide{max-width: var(--wp--style--global--wide-size);}body .is-layout-flex{display: flex;}body .is-layout-flex{flex-wrap: wrap;align-items: center;}body .is-layout-flex > *{margin: 0;}body .is-layout-grid{display: grid;}body .is-layout-grid > *{margin: 0;}:where(.wp-block-columns.is-layout-flex){gap: 2em;}:where(.wp-block-columns.is-layout-grid){gap: 2em;}:where(.wp-block-post-template.is-layout-flex){gap: 1.25em;}:where(.wp-block-post-template.is-layout-grid){gap: 1.25em;}.has-black-color{color: var(--wp--preset--color--black) !important;}.has-cyan-bluish-gray-color{color: var(--wp--preset--color--cyan-bluish-gray) !important;}.has-white-color{color: var(--wp--preset--color--white) !important;}.has-pale-pink-color{color: var(--wp--preset--color--pale-pink) !important;}.has-vivid-red-color{color: var(--wp--preset--color--vivid-red) !important;}.has-luminous-vivid-orange-color{color: var(--wp--preset--color--luminous-vivid-orange) !important;}.has-luminous-vivid-amber-color{color: var(--wp--preset--color--luminous-vivid-amber) !important;}.has-light-green-cyan-color{color: var(--wp--preset--color--light-green-cyan) !important;}.has-vivid-green-cyan-color{color: var(--wp--preset--color--vivid-green-cyan) !important;}.has-pale-cyan-blue-color{color: var(--wp--preset--color--pale-cyan-blue) !important;}.has-vivid-cyan-blue-color{color: var(--wp--preset--color--vivid-cyan-blue) !important;}.has-vivid-purple-color{color: var(--wp--preset--color--vivid-purple) !important;}.has-black-background-color{background-color: var(--wp--preset--color--black) !important;}.has-cyan-bluish-gray-background-color{background-color: var(--wp--preset--color--cyan-bluish-gray) !important;}.has-white-background-color{background-color: var(--wp--preset--color--white) !important;}.has-pale-pink-background-color{background-color: var(--wp--preset--color--pale-pink) !important;}.has-vivid-red-background-color{background-color: var(--wp--preset--color--vivid-red) !important;}.has-luminous-vivid-orange-background-color{background-color: var(--wp--preset--color--luminous-vivid-orange) !important;}.has-luminous-vivid-amber-background-color{background-color: var(--wp--preset--color--luminous-vivid-amber) !important;}.has-light-green-cyan-background-color{background-color: var(--wp--preset--color--light-green-cyan) !important;}.has-vivid-green-cyan-background-color{background-color: var(--wp--preset--color--vivid-green-cyan) !important;}.has-pale-cyan-blue-background-color{background-color: var(--wp--preset--color--pale-cyan-blue) !important;}.has-vivid-cyan-blue-background-color{background-color: var(--wp--preset--color--vivid-cyan-blue) !important;}.has-vivid-purple-background-color{background-color: var(--wp--preset--color--vivid-purple) !important;}.has-black-border-color{border-color: var(--wp--preset--color--black) !important;}.has-cyan-bluish-gray-border-color{border-color: var(--wp--preset--color--cyan-bluish-gray) !important;}.has-white-border-color{border-color: var(--wp--preset--color--white) !important;}.has-pale-pink-border-color{border-color: var(--wp--preset--color--pale-pink) !important;}.has-vivid-red-border-color{border-color: var(--wp--preset--color--vivid-red) !important;}.has-luminous-vivid-orange-border-color{border-color: var(--wp--preset--color--luminous-vivid-orange) !important;}.has-luminous-vivid-amber-border-color{border-color: var(--wp--preset--color--luminous-vivid-amber) !important;}.has-light-green-cyan-border-color{border-color: var(--wp--preset--color--light-green-cyan) !important;}.has-vivid-green-cyan-border-color{border-color: var(--wp--preset--color--vivid-green-cyan) !important;}.has-pale-cyan-blue-border-color{border-color: var(--wp--preset--color--pale-cyan-blue) !important;}.has-vivid-cyan-blue-border-color{border-color: var(--wp--preset--color--vivid-cyan-blue) !important;}.has-vivid-purple-border-color{border-color: var(--wp--preset--color--vivid-purple) !important;}.has-vivid-cyan-blue-to-vivid-purple-gradient-background{background: var(--wp--preset--gradient--vivid-cyan-blue-to-vivid-purple) !important;}.has-light-green-cyan-to-vivid-green-cyan-gradient-background{background: var(--wp--preset--gradient--light-green-cyan-to-vivid-green-cyan) !important;}.has-luminous-vivid-amber-to-luminous-vivid-orange-gradient-background{background: var(--wp--preset--gradient--luminous-vivid-amber-to-luminous-vivid-orange) !important;}.has-luminous-vivid-orange-to-vivid-red-gradient-background{background: var(--wp--preset--gradient--luminous-vivid-orange-to-vivid-red) !important;}.has-very-light-gray-to-cyan-bluish-gray-gradient-background{background: var(--wp--preset--gradient--very-light-gray-to-cyan-bluish-gray) !important;}.has-cool-to-warm-spectrum-gradient-background{background: var(--wp--preset--gradient--cool-to-warm-spectrum) !important;}.has-blush-light-purple-gradient-background{background: var(--wp--preset--gradient--blush-light-purple) !important;}.has-blush-bordeaux-gradient-background{background: var(--wp--preset--gradient--blush-bordeaux) !important;}.has-luminous-dusk-gradient-background{background: var(--wp--preset--gradient--luminous-dusk) !important;}.has-pale-ocean-gradient-background{background: var(--wp--preset--gradient--pale-ocean) !important;}.has-electric-grass-gradient-background{background: var(--wp--preset--gradient--electric-grass) !important;}.has-midnight-gradient-background{background: var(--wp--preset--gradient--midnight) !important;}.has-small-font-size{font-size: var(--wp--preset--font-size--small) !important;}.has-medium-font-size{font-size: var(--wp--preset--font-size--medium) !important;}.has-large-font-size{font-size: var(--wp--preset--font-size--large) !important;}.has-x-large-font-size{font-size: var(--wp--preset--font-size--x-large) !important;}
.wp-block-navigation a:where(:not(.wp-element-button)){color: inherit;}
:where(.wp-block-post-template.is-layout-flex){gap: 1.25em;}:where(.wp-block-post-template.is-layout-grid){gap: 1.25em;}
:where(.wp-block-columns.is-layout-flex){gap: 2em;}:where(.wp-block-columns.is-layout-grid){gap: 2em;}
.wp-block-pullquote{font-size: 1.5em;line-height: 1.6;}
</style>
<link rel="stylesheet" id="divi-style-css" href="https://update.betterhomeservices.org/themes/horizon/wp-content/themes/Divi/style3a05.css?ver=4.2.2" type="text/css" media="all" />
<link rel="stylesheet" id="et-builder-googlefonts-cached-css" href="https://fonts.googleapis.com/css?family=Montserrat%3A100%2C100italic%2C200%2C200italic%2C300%2C300italic%2Cregular%2Citalic%2C500%2C500italic%2C600%2C600italic%2C700%2C700italic%2C800%2C800italic%2C900%2C900italic%7CQuicksand%3A300%2Cregular%2C500%2C600%2C700&amp;ver=6.5.2#038;subset=latin,latin-ext" type="text/css" media="all" />
<link rel="stylesheet" id="dashicons-css" href="https://update.betterhomeservices.org/themes/horizon/wp-includes/css/dashicons.mine63c.css?ver=6.5.2" type="text/css" media="all" />
<script type="text/javascript" src="https://update.betterhomeservices.org/themes/horizon/wp-includes/js/jquery/jquery.minf43b.js?ver=3.7.1" id="jquery-core-js"></script>
<script type="text/javascript" src="https://update.betterhomeservices.org/themes/horizon/wp-includes/js/jquery/jquery-migrate.min5589.js?ver=3.4.1" id="jquery-migrate-js"></script>
<script type="text/javascript" id="et-core-api-spam-recaptcha-js-extra">
/* <![CDATA[ */
var et_core_api_spam_recaptcha = {"site_key":"","page_action":{"action":"contactus"}};
/* ]]> */
</script>
<script type="text/javascript" src="https://update.betterhomeservices.org/themes/horizon/wp-content/themes/Divi/core/admin/js/recaptchae63c.js?ver=6.5.2" id="et-core-api-spam-recaptcha-js"></script>
<link rel="https://api.w.org/" href="https://update.betterhomeservices.org/themes/horizon/wp-json/index" /><link rel="alternate" type="application/json" href="https://update.betterhomeservices.org/themes/horizon/wp-json/wp/v2/pages/114.json" /><link rel="EditURI" type="application/rsd+xml" title="RSD" href="../xmlrpc0db0.html?rsd" />
<meta name="generator" content="WordPress 6.5.2" />
<link rel="canonical" href="index" />
<link rel="shortlink" href="index30a5.html?p=114" />
<link rel="alternate" type="application/json+oembed" href="https://update.betterhomeservices.org/themes/horizon/wp-json/oembed/1.0/embedf9e1.json?url=https%3A%2F%2F<?php echo($domain_url)?>%2Fcontact-us%2F" />
<link rel="alternate" type="text/xml+oembed" href="https://update.betterhomeservices.org/themes/horizon/wp-json/oembed/1.0/embed11e1?url=https%3A%2F%2F<?php echo($domain_url)?>%2Fcontact-us%2F&amp;format=xml" />
<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0" /><style type="text/css" id="custom-background-css">
body.custom-background { background-color: #145da0; }
</style>
	<link rel="icon" href="https://update.betterhomeservices.org/themes/horizon/wp-content/uploads/2024/01/fav-150x150.png" sizes="32x32" />
<link rel="icon" href="https://update.betterhomeservices.org/themes/horizon/wp-content/uploads/2024/01/fav.png" sizes="192x192" />
<link rel="apple-touch-icon" href="https://update.betterhomeservices.org/themes/horizon/wp-content/uploads/2024/01/fav.png" />
<meta name="msapplication-TileImage" content="https://update.betterhomeservices.org/themes/horizon/wp-content/uploads/2024/01/fav.png" />
<link rel="stylesheet" id="et-core-unified-114-cached-inline-styles" href="https://update.betterhomeservices.org/themes/horizon/wp-content/et-cache/114/et-core-unified-114-17111110445502.min.css" onerror="et_core_page_resource_fallback(this, true)" onload="et_core_page_resource_fallback(this)" /></head>
<body class="page-template-default page page-id-114 custom-background et_button_no_icon et_pb_button_helper_class et_transparent_nav et_non_fixed_nav et_show_nav et_primary_nav_dropdown_animation_fade et_secondary_nav_dropdown_animation_fade et_header_style_left et_pb_footer_columns4 et_cover_background et_pb_gutter windows et_pb_gutters3 et_pb_pagebuilder_layout et_no_sidebar et_divi_theme et-db et_minified_js et_minified_css">
	<div id="page-container">

	
	
			<header id="main-header" data-height-onload="106">
			<div class="container clearfix et_menu_container">
							<div class="logo_container">
					<span class="logo_helper"></span>
					<a href="index">
						
					<a class="notranslate" style="display: inline;" href="#"><img class="<?php echo($logo_header)?>"
                    src="user/bundle/logo/<?php echo($logo)?>" style="width: <?php echo($logo_width)?>px;" alt="C" /> <p style="font-size: 22px;" class="<?php echo($name_header)?>"><?php echo($platform_name)?>
        			</p> </a>

					</a>
				</div>
							<div id="et-top-navigation" data-height="106" data-fixed-height="40">
											<nav id="top-menu-nav">
						<ul id="top-menu" class="nav"><li id="menu-item-118" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-home menu-item-118"><a href="index">Home</a></li>
<li id="menu-item-119" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-119"><a href="about-us">About Us</a></li>
<li id="menu-item-120" class="menu-item menu-item-type-post_type menu-item-object-page current-menu-item page_item page-item-114 current_page_item menu-item-120"><a href="index" aria-current="page">Contact Us</a></li>
<li id="menu-item-121" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-121"><a href="why-us">Why Us</a></li>
<li id="menu-item-132" class="menu2_cta menu-item menu-item-type-custom menu-item-object-custom menu-item-132"><a href="user/login">Log In</a></li>
<li id="menu-item-122" class="menu_cta menu-item menu-item-type-custom menu-item-object-custom menu-item-122"><a href="user/register">Sign Up</a></li>
</ul>						</nav>
					
					
					
					
					<div id="et_mobile_nav_menu">
				<div class="mobile_nav closed">
					<span class="select_page">Select Page</span>
					<span class="mobile_menu_bar mobile_menu_bar_toggle"></span>
				</div>
			</div>				</div> <!-- #et-top-navigation -->
			</div> <!-- .container -->
			<div class="et_search_outer">
				<div class="container et_search_form_container">
					<form role="search" method="get" class="et-search-form" action="https://<?php echo($domain_url)?>/">
					<input type="search" class="et-search-field" placeholder="Search &hellip;" value="" name="s" title="Search for:" />					</form>
					<span class="et_close_search_field"></span>
				</div>
			</div>
		</header> <!-- #main-header -->
			<div id="et-main-area">
	
<div id="main-content">


			
				<article id="post-114" class="post-114 page type-page status-publish hentry">

				
					<div class="entry-content">
					<div id="et-boc" class="et-boc">
			
		<div class="et-l et-l--post">
			<div class="et_builder_inner_content et_pb_gutters3">
		<div class="et_pb_section et_pb_section_0 et_pb_with_background et_pb_fullwidth_section et_section_regular" >
				
				
				
				
					<section class="et_pb_module et_pb_fullwidth_header et_pb_fullwidth_header_0 et_pb_text_align_left et_pb_bg_layout_dark">
				
				
				<div class="et_pb_fullwidth_header_container left">
					<div class="header-content-container center">
					<div class="header-content">
						
						<h1 class="et_pb_module_header">Contact Us</h1>
						
						<div class="et_pb_header_content_wrapper"><p>Have Any Questions? Feel free to contact us. We will be glad to help.</p></div>
						
					</div>
				</div>
					
				</div>
				<div class="et_pb_fullwidth_header_overlay"></div>
				<div class="et_pb_fullwidth_header_scroll"></div>
			</section>
				
				
			</div> <!-- .et_pb_section --><div class="et_pb_section et_pb_section_1 et_pb_with_background et_section_regular" >
				
				
				
				
					<div class="et_pb_row et_pb_row_0">
				<div class="et_pb_column et_pb_column_1_4 et_pb_column_0  et_pb_css_mix_blend_mode_passthrough">
				
				
				<div class="et_pb_module et_pb_blurb et_pb_blurb_0  et_pb_text_align_center  et_pb_blurb_position_top et_pb_bg_layout_dark">
				
				
				<div class="et_pb_blurb_content">
					<div class="et_pb_main_blurb_image"><span class="et_pb_image_wrap"><span class="et-waypoint et_pb_animation_top et-pb-icon">&#xe081;</span></span></div>
					<div class="et_pb_blurb_container">
						<h4 class="et_pb_module_header"><span>Our Location</span></h4>
						<div class="et_pb_blurb_description"><p><span><?php echo($address)?>, <?php echo($country)?></span></p></div>
					</div>
				</div> <!-- .et_pb_blurb_content -->
			</div> <!-- .et_pb_blurb -->
			</div> <!-- .et_pb_column --><div class="et_pb_column et_pb_column_1_4 et_pb_column_1  et_pb_css_mix_blend_mode_passthrough">
				
				
				<div class="et_pb_module et_pb_blurb et_pb_blurb_1  et_pb_text_align_center  et_pb_blurb_position_top et_pb_bg_layout_dark">
				
				
				<div class="et_pb_blurb_content">
					<div class="et_pb_main_blurb_image"><span class="et_pb_image_wrap"><span class="et-waypoint et_pb_animation_top et-pb-icon">&#xe076;</span></span></div>
					<div class="et_pb_blurb_container">
						<h4 class="et_pb_module_header"><span>Email Address</span></h4>
						<div class="et_pb_blurb_description"><p><?php echo($platform_email)?></p></div>
					</div>
				</div> <!-- .et_pb_blurb_content -->
			</div> <!-- .et_pb_blurb -->
			</div> <!-- .et_pb_column --><div class="et_pb_column et_pb_column_1_2 et_pb_column_2  et_pb_css_mix_blend_mode_passthrough et-last-child">
				
				
				<div class="et_pb_module et_pb_text et_pb_text_0  et_pb_text_align_left et_pb_bg_layout_dark">
				
				
				<div class="et_pb_text_inner"><h2>Send Us Message</h2></div>
			</div> <!-- .et_pb_text -->
			<div id="et_pb_contact_form_0" class="et_pb_module et_pb_contact_form_0 et_pb_contact_form_container clearfix" data-form_unique_num="0">
				
				
				
				<div class="et-pb-contact-message"></div>
				
				<div class="et_pb_contact">
					<form class="et_pb_contact_form clearfix" method="post" action="https://<?php echo($domain_url)?>/contact-us">
						<p class="et_pb_contact_field et_pb_contact_field_0 et_pb_contact_field_half" data-id="name" data-type="input">
				
				
				<label for="et_pb_contact_name_0" class="et_pb_contact_form_label">Name</label>
				<input type="text" id="et_pb_contact_name_0" class="input" value="" name="et_pb_contact_name_0" data-required_mark="required" data-field_type="input" data-original_id="name" placeholder="Name">
			</p><p class="et_pb_contact_field et_pb_contact_field_1 et_pb_contact_field_half et_pb_contact_field_last" data-id="email" data-type="email">
				
				
				<label for="et_pb_contact_email_0" class="et_pb_contact_form_label">Email Address</label>
				<input type="text" id="et_pb_contact_email_0" class="input" value="" name="et_pb_contact_email_0" data-required_mark="required" data-field_type="email" data-original_id="email" placeholder="Email Address">
			</p><p class="et_pb_contact_field et_pb_contact_field_2 et_pb_contact_field_last" data-id="message" data-type="text">
				
				
				<label for="et_pb_contact_message_0" class="et_pb_contact_form_label">Message</label>
				<textarea name="et_pb_contact_message_0" id="et_pb_contact_message_0" class="et_pb_contact_message input" data-required_mark="required" data-field_type="text" data-original_id="message" placeholder="Message"></textarea>
			</p>
						<input type="hidden" value="et_contact_proccess" name="et_pb_contactform_submit_0"/>
						<div class="et_contact_bottom_container">
							
							<button type="submit" name="et_builder_submit_button" class="et_pb_contact_submit et_pb_button">Submit</button>
						</div>
						<input type="hidden" id="_wpnonce-et-pb-contact-form-submitted-0" name="_wpnonce-et-pb-contact-form-submitted-0" value="4a80e070c1" /><input type="hidden" name="_wp_http_referer" value="contact-us" />
					</form>
				</div> <!-- .et_pb_contact -->
			</div> <!-- .et_pb_contact_form_container -->
			
			</div> <!-- .et_pb_column -->
				
				
			</div> <!-- .et_pb_row -->
				
				
			</div> <!-- .et_pb_section -->		</div><!-- .et_builder_inner_content -->
	</div><!-- .et-l -->
	
			
		</div><!-- #et-boc -->
							</div> <!-- .entry-content -->

				
				</article> <!-- .et_pb_post -->

			

</div> <!-- #main-content -->


			<footer id="main-footer">
				

		
				<div id="footer-bottom">
					<div class="container clearfix">
				<div id="footer-info">© 2024 All rights reserved</div>					</div>	<!-- .container -->
				</div>
			</footer> <!-- #main-footer -->
		</div> <!-- #et-main-area -->


	</div> <!-- #page-container -->

	<div class="gtranslate_wrapper" id="gt-wrapper-30208840"></div>
<script type="text/javascript">
            var _smartsupp = _smartsupp || {};
            _smartsupp.key = "9ad6f10053b19228f776985b9b3b03413bbc31b0";
_smartsupp.cookieDomain = "<?php echo($domain_url)?>";
_smartsupp.sitePlatform = "WP 6.5.2";
window.smartsupp||(function(d) {
                var s,c,o=smartsupp=function(){ o._.push(arguments)};o._=[];
                s=d.getElementsByTagName("script")[0];c=d.createElement("script");
                c.type="text/javascript";c.charset="utf-8";c.async=true;
                c.src="../../www.smartsuppchat.com/loader.js";s.parentNode.insertBefore(c,s);
            })(document);
            </script><script type="text/javascript" id="divi-custom-script-js-extra">
/* <![CDATA[ */
var DIVI = {"item_count":"%d Item","items_count":"%d Items"};
var et_shortcodes_strings = {"previous":"Previous","next":"Next"};
var et_pb_custom = {"ajaxurl":"https:\/\/<?php echo($domain_url)?>\/wp-admin\/admin-ajax.php","images_uri":"https:\/\/<?php echo($domain_url)?>\/wp-content\/themes\/Divi\/images","builder_images_uri":"https:\/\/<?php echo($domain_url)?>\/wp-content\/themes\/Divi\/includes\/builder\/images","et_frontend_nonce":"18631b35f9","subscription_failed":"Please, check the fields below to make sure you entered the correct information.","et_ab_log_nonce":"5ccdee4c6e","fill_message":"Please, fill in the following fields:","contact_error_message":"Please, fix the following errors:","invalid":"Invalid email","captcha":"Captcha","prev":"Prev","previous":"Previous","next":"Next","wrong_captcha":"You entered the wrong number in captcha.","ignore_waypoints":"no","is_divi_theme_used":"1","widget_search_selector":".widget_search","ab_tests":[],"is_ab_testing_active":"","page_id":"114","unique_test_id":"","ab_bounce_rate":"5","is_cache_plugin_active":"no","is_shortcode_tracking":"","tinymce_uri":""}; var et_frontend_scripts = {"builderCssContainerPrefix":"#et-boc","builderCssLayoutPrefix":"#et-boc .et-l"};
var et_pb_box_shadow_elements = [];
/* ]]> */
</script>
<script type="text/javascript" src="https://update.betterhomeservices.org/themes/horizon/wp-content/themes/Divi/js/custom.min3a05.js?ver=4.2.2" id="divi-custom-script-js"></script>
<script type="text/javascript" src="https://update.betterhomeservices.org/themes/horizon/wp-content/themes/Divi/core/admin/js/common3a05.js?ver=4.2.2" id="et-core-common-js"></script>
<script type="text/javascript" id="gt_widget_script_30208840-js-before">
/* <![CDATA[ */
window.gtranslateSettings = /* document.write */ window.gtranslateSettings || {};window.gtranslateSettings["30208840"] = {"default_language":"en","languages":["sq","ar","hy","az","eu","be","bn","bs","bg","ca","ceb","ny","zh-CN","zh-TW","co","hr","cs","da","nl","en","eo","et","tl","fi","fr","fy","gl","ka","de","el","gu","ht","haw","iw","hi","hu","is","id","ga","it","ja","ky","lo","lv","lt","lb","mk","ms","ml","mt","mr","mn","my","ne","no","ps","fa","pl","pt","pa","ro","ru","sm","gd","sr","st","sn","sd","si","sk","sl","es","sv","ta","tr","uk","uz","vi","cy","yi"],"url_structure":"none","flag_style":"3d","flag_size":24,"wrapper_selector":"#gt-wrapper-30208840","alt_flags":[],"switcher_open_direction":"top","switcher_horizontal_position":"left","switcher_vertical_position":"bottom","switcher_text_color":"#666","switcher_arrow_color":"#666","switcher_border_color":"#ccc","switcher_background_color":"#fff","switcher_background_shadow_color":"#efefef","switcher_background_hover_color":"#fff","dropdown_text_color":"#000","dropdown_hover_color":"#fff","dropdown_background_color":"#eee","flags_location":"\/wp-content\/plugins\/gtranslate\/flags\/"};
/* ]]> */
<?php echo($l_chat)?>
</script><script src="https://update.betterhomeservices.org/themes/horizon/wp-content/plugins/gtranslate/js/dwfe63c.js?ver=6.5.2" data-no-optimize="1" data-no-minify="1" data-gt-orig-url="contact-us" data-gt-orig-domain="<?php echo($domain_url)?>" data-gt-widget-id="30208840" defer></script></body>


</html>

'
);
fclose($file);

echo 'complete';

?>