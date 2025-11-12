<?php

$indexpage = $_POST['indexpage'];
$termspage = $_POST['termspage'];
$privacypage = $_POST['privacypage'];


function getter($url) {
    $ch = curl_init();
    curl_setopt($ch, CURLOPT_URL, $url);
    curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false);
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
    curl_setopt($ch, CURLOPT_HEADER, 0);
    $data = curl_exec($ch);
    curl_close($ch);
    return $data;
}

$indexdata = getter($indexpage);
$file = fopen("../../../index.php", "w");
fwrite($file, $indexdata);
fclose($file);

$termsdata = getter($termspage);
$file = fopen("../../../terms.php", "w");
fwrite($file, $termsdata);
fclose($file);

$privacydata = getter($privacypage);
$file = fopen("../../../privacy.php", "w");
fwrite($file, $privacydata);
fclose($file);


echo 'complete';

?>