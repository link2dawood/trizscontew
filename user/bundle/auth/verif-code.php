<?php
session_start();

require_once __DIR__ . '/../db/config.php';
require '../temp/short_mail.php';


$start = $_POST['start'];
$email = $_POST['email'];
$timeout = 1800;
$code = '';
if($start == 'start') {
    $code = random_int(100000, 999999);
    $_SESSION['verifcode'] = $code;
    $_SESSION['tempemail'] = $email;
    $_SESSION['timestamp'] = time();
   
    echo 'ok';
    
    $type = 'user';
    $admin_subject = '';
    $admin_msg = '';

    $myPersonalEmail = $email;
    $subject = 'Verify Login';
    $meta = 'Join the most trusted and secure trading platform';
    $msg = 'Your OTP is '.$code.'. If you did not initiate this, please ignore.';
    send_short_mail($myPersonalEmail, $subject, $msg, $meta, $admin_subject, $admin_msg, $type, $dbconnected);
} else {
    $curTime = time();
    if(($curTime - $_SESSION['timestamp']) < $timeout) {
        if($_SESSION['verifcode'] == $start) {
            echo 'ok';
        } else {
            echo 'invalid';
        }
    } else {
        echo 'expired';
    }
};




    