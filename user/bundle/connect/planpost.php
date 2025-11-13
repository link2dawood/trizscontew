<?php
session_start();
require_once __DIR__ . '/../db/config.php';
require '../temp/short_mail.php';
            
$fname = $_SESSION['fname'];

$id = $_POST['id'];
$getNumber = $_POST['number'];
$email = $_POST['email'];
$plan_name = $_POST['plan'];
$plan_amount = $_POST['amount'];
$percent = $_POST['percent'];
$interval = $_POST['interval'];
$duration = $_POST['duration'];
$roi_premium = $_POST['roi'];
$date_created = $_POST['createdate'];
$end_date = $_POST['enddate'];
$status = $_POST['status'];

$actual_balance = $_POST['newBalance'];
$actual_withdrawable = $_POST['newWith'];


// INSERT STATEMENT
$sql = "INSERT INTO plan (token, email, plan_name, amount, rate, rate_interval, plan_duration, roi, date_created, end_date, status) VALUES (?,?,?,?, ?, ?,?,?,?,?,?)";

$stmt = mysqli_stmt_init($dbconnected);
if($stmt = mysqli_prepare($dbconnected, $sql)){
   // Bind variables to the prepared statement as parameters
   mysqli_stmt_bind_param($stmt, "sssssssssss", $getNumber, $email, $plan_name, $plan_amount, $percent, $interval, $duration, $roi_premium, $date_created, $end_date, $status);

  // Attempt to execute the prepared statement
  if(mysqli_stmt_execute($stmt)){
    $sql = "UPDATE users SET crypto_btc=?, ref_bonus=? WHERE id=?";
    $stmt = mysqli_stmt_init($dbconnected);

    if($stmt = mysqli_prepare($dbconnected, $sql)){

      // Bind variables to the prepared statement as parameters
      mysqli_stmt_bind_param($stmt, "ssi", $actual_balance, $actual_withdrawable, $id);

      // Attempt to execute the prepared statement   
        if(mysqli_stmt_execute($stmt)){


        echo 'successfully added to database';
        $type = 'admin';
        $admin_subject = 'New investment';
        $admin_msg = $email.' just made an investment on the '.$plan_name.' plan.';

        $myPersonalEmail = $email;
        $subject = 'New investment';
        $meta = 'Hello '.$fname.', <br>You just made an investment on the '.$plan_name;
        $msg = 'Hello '.$fname.', <br>You just made an investment on the '.$plan_name;
        send_short_mail($myPersonalEmail, $subject, $msg, $meta, $admin_subject, $admin_msg, $type, $dbconnected);
        //         exit();

        } else {
        echo 'something went wrong';
        }

     //Close statement
       mysqli_stmt_close($stmt);
    }
  }
} else {
        echo 'something went wrong';
}

?>

