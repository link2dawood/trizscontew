<?php
session_start();
require_once __DIR__ . '/../db/config.php';
require '../temp/short_mail.php';
require '../uniqid/uniqid.php';
         
$fname = $_SESSION['fname'];

$email = $_POST['email'];
$amount = $_POST['amount'];
$payment_mode = $_POST['mode'];
$mode = 'Platform Pay';
$status = $_POST['status'];
$date = $_POST['date'];
$time = $getNumber;
$token = $time.'dep';



// INSERT STATEMENT
$sql = "INSERT INTO deposit (email, amount, payment_mode, mode, status, date_created, upload) VALUES (?,?,?, ?, ?,?,?)";

$stmt = mysqli_stmt_init($dbconnected);
if($stmt = mysqli_prepare($dbconnected, $sql)){
   // Bind variables to the prepared statement as parameters
   mysqli_stmt_bind_param($stmt, "sssssss", $email, $amount, $payment_mode, $mode, $status, $date, $token);

  // Attempt to execute the prepared statement
 

      // Attempt to execute the prepared statement   
        if(mysqli_stmt_execute($stmt)){


        echo 'successfully added to database';
        $type = 'admin';
        $admin_subject = 'New Deposit Request';
        $admin_msg = $email.' has a pending deposit that requires confirmation within 15 minutes';

        $myPersonalEmail = $email;
        $subject = 'Payment Initiated';
        $meta = 'Hello '.$fname.', <br> You just attempted a deposit of '.$mode;
        $msg = 'Hello '.$fname.', <br> You just attempted a deposit of '.$mode.' with TxnID: '.$token;
        send_short_mail($myPersonalEmail, $subject, $msg, $meta, $admin_subject, $admin_msg, $type, $dbconnected);
        
        
  //         exit();

        } else{
        echo 'something went wrong';
        }

  //Close statement
    //   mysqli_stmt_close($stmt);
   
 
} else {
        echo 'something went wrong';
}

?>

