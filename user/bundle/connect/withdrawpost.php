<?php
session_start();
foreach (glob("../db/config.php") as $config){include_once($config);}
require '../temp/short_mail.php';
            
$fname = $_SESSION['fname'];

$email = $_POST['email'];
$amount = $_POST['amount'];
$with_type = $_POST['type'];
$wal_address = $_POST['address'];
$acc_name = $_POST['accname'];
$bank_name = $_POST['bankname'];
$acc_number = $_POST['accnumber'];
$paypal = $_POST['paypal'];
$mobile = $_POST['mobile'];
$rou_number = $_POST['rounumber'];
$status = $_POST['status'];
$date_created = $_POST['date'];

// INSERT STATEMENT
$sql = "INSERT INTO withdrawal_request (email, amount, with_type, wal_address, acc_name, bank_name, acc_number, paypal, mobile, rou_number, status, date_created) VALUES (?,?,?,?, ?, ?,?,?,?,?,?,?)";

$stmt = mysqli_stmt_init($dbconnected);
if($stmt = mysqli_prepare($dbconnected, $sql)){
   // Bind variables to the prepared statement as parameters
   mysqli_stmt_bind_param($stmt, "ssssssssssss", $email, $amount, $with_type, $wal_address, $acc_name, $bank_name, $acc_number, $paypal, $mobile, $rou_number, $status, $date_created);

  // Attempt to execute the prepared statement
 

      // Attempt to execute the prepared statement   
        if(mysqli_stmt_execute($stmt)){


        echo 'ok';
        $type = 'admin';
        $admin_subject = 'New Withdrawal Request';
        $admin_msg = $email.' just submitted a withdrawal request of '.$with_type.'.';

        $myPersonalEmail = $email;
        $subject = 'New withdrawal request';
        $meta = 'Hello '.$fname.', <br>Your withdrawal of '.$with_type.' has been submitted for review';
        $msg = 'Hello '.$fname.', <br>Your withdrawal of '.$with_type.' with TxnID: '.$rou_number.' has been submitted for review';
        send_short_mail($myPersonalEmail, $subject, $msg, $meta, $admin_subject, $admin_msg, $type, $dbconnected);
  //         exit();

        } else{
        echo 'something went wrong';
        }

  //Close statement
       mysqli_stmt_close($stmt);
   
 
} else {
        echo 'something went wrong';
}

?>

