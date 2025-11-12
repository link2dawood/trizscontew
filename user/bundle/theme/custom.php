<?php


$indexdata = '';
if(file_exists("../../../main.html")) {
  $main = fopen("../../../main.html", "r");
  $indexdata = fread($main, filesize("../../../main.html"));
  fclose($main);
} else {
  $indexdata = '
  <!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>No Custom Theme</title>
    <style>
        body {
            font-family: system-ui;
            background: #f06d06;
            color: white;
            text-align: center;
        }
    </style>
</head>
<body>
    <h1>👋 No Custom Template Here!</h1>
    <p>Go to "Themes" and install another theme</p>

    <p style="color: blue;">To add your own html landing page template, put your template content in "main.html" located in the root of this project.<br> It will show up here once you install "custom" in your admin "themes"</p>
    <script>
        document.getElementsByTagName("h1")[0].style.fontSize = "6vw";
    </script>
</body>
</html>';

$main = fopen("../../../main.html", "w");
fwrite($main, $indexdata);
fclose($main);
}

$indexdata = str_replace('</body>', '<?php echo($l_chat)?></body>', $indexdata);

$complete_index = '
<?php
foreach (glob("user/bundle/db/config.php") as $config){include_once($config);}
foreach (glob("user/bundle/connect/platform.php") as $platform) {
	include $platform;
}
foreach (glob("user/bundle/connect/theme.php") as $theme) {
	include $theme;
}
?>'.$indexdata;

$indexpage = fopen("../../../index.php", "w");
fwrite($indexpage, $complete_index);
fclose($indexpage);


echo 'complete';

?>