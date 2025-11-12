<?php
session_start();
$lang = '';
$arrayOfObjects = '';
if(isset($_SESSION['lang'])) {
    $arrayOfObjects = array(
        'lang' => $_SESSION['lang']
    );
} else {
    $arrayOfObjects = array(
        'lang' => 'none'
    );
}
$lang = json_encode($arrayOfObjects);
echo $lang;



?>