<?php
session_start();
require_once __DIR__ . '/../db/config.php';
require '../temp/short_mail.php';
            
$fname = $_SESSION['fname'];

$id = 1;
$email = $_POST['email'];
$account = $_POST['account'];
$amount = $_POST['amount'];
$facility = $_POST['facility'];
$repayment = $_POST['repayment'];
$purpose = $_POST['purpose'];
$status = $_POST['status'];
$date = gmdate(DATE_ISO8601);


// INSERT STATEMENT
$sql = "INSERT INTO loan (email, account, amount, facility, repayment, purpose, status, date) VALUES (?,?,?,?,?, ?, ?,?)";

$stmt = mysqli_stmt_init($dbconnected);
if($stmt = mysqli_prepare($dbconnected, $sql)){
   // Bind variables to the prepared statement as parameters
   mysqli_stmt_bind_param($stmt, "ssssssss", $email, $account, $amount, $facility, $repayment, $purpose, $status, $date);

  // Attempt to execute the prepared statement
  if(mysqli_stmt_execute($stmt)){
    echo 'successfully added to database';
      $type = 'admin';
      $admin_subject = 'New Loan Request';
      $admin_msg = $email.' just requested a loan.';

      $myPersonalEmail = $email;
      $subject = 'Loan Request Submitted';
      $meta = 'Hello '.$fname.', <br>You just submitted your application for a loan';
      $msg = 'Hello '.$fname.', <br>You just submitted your application for a loan';
      send_short_mail($myPersonalEmail, $subject, $msg, $meta, $admin_subject, $admin_msg, $type, $dbconnected);
      //         exit();
  }
} else {
        echo 'something went wrong';
}

?>

