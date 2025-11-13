<?php
session_start();
require_once __DIR__ . '/../db/config.php';
require '../temp/short_mail.php';
            

$email = $_POST['email'];
$fname = $_POST['fname'];
$newuserbalance = $_POST['newuserbalance'];
$asset = $_POST['asset'];
$amount = $_POST['amount'];
$with_type = $_POST['type'];
$wal_address = $_POST['address'];
$acc_name = $_POST['accname'];
$bank_name = $_POST['bankname'];
$acc_number = $_POST['accnumber'];
$rou_number = $_POST['rounumber'];
$status = $_POST['status'];
$date_created = $_POST['date'];

// INSERT STATEMENT
$sql = "INSERT INTO withdrawal_request (email, amount, with_type, wal_address, acc_name, bank_name, acc_number, rou_number, status, date_created) VALUES (?,?, ?, ?,?,?,?,?,?,?)";

$stmt = mysqli_stmt_init($dbconnected);
if($stmt = mysqli_prepare($dbconnected, $sql)){
   // Bind variables to the prepared statement as parameters
   mysqli_stmt_bind_param($stmt, "ssssssssss", $email, $amount, $with_type, $wal_address, $acc_name, $bank_name, $acc_number, $rou_number, $status, $date_created);

  // Attempt to execute the prepared statement
  if(mysqli_stmt_execute($stmt)){
    $sql = "UPDATE users SET $asset=? WHERE email=?";
    $stmt = mysqli_stmt_init($dbconnected);

    if($stmt = mysqli_prepare($dbconnected, $sql)){

      // Bind variables to the prepared statement as parameters
      mysqli_stmt_bind_param($stmt, "ss", $newuserbalance, $email);

      // Attempt to execute the prepared statement   
        if(mysqli_stmt_execute($stmt)){


        echo 'successfully added to database';
        $type = 'admin';
        $admin_subject = 'Withdrawal successfully added';
        $admin_msg = 'You withdrew '.$with_type.' from account: '.$email;

        $myPersonalEmail = $email;
        $subject = 'Account deduction';
        $meta = 'Hello '.$fname.', <br> A withdrawal of '.$with_type.' was made on your account';
        $msg = 'Hello '.$fname.', <br> A withdrawal of '.$with_type.' was made on your account';
        send_short_mail($myPersonalEmail, $subject, $msg, $meta, $admin_subject, $admin_msg, $type, $dbconnected);
        //         exit();

        } else{
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

