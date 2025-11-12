<?php
session_start();
foreach (glob("../db/config.php") as $config){include_once($config);}
require '../temp/short_mail.php';
            
$userid = $_SESSION['id'];
$useremail = $_SESSION['email'];

$data = json_decode($_POST['data'], true);
$cryptoamount = $data['cryptoAmount'];
$dollaramount = $data['dollarAmount'];
$coin = $data['coin'];
$token = time();
$payment_mode = $coin.' '.$cryptoamount;
$mode = '-';
$status = 'Pending';
$type = 'sell';
$date = gmdate(DATE_ISO8601);

// INSERT STATEMENT
$sql = "INSERT INTO trade (token, email, amount, payment_mode, mode, status, type, date) VALUES (?,?, ?, ?,?,?,?,?)";

$stmt = mysqli_stmt_init($dbconnected);
if($stmt = mysqli_prepare($dbconnected, $sql)){
   // Bind variables to the prepared statement as parameters
   mysqli_stmt_bind_param($stmt, "ssssssss", $token, $useremail, $dollaramount, $payment_mode, $mode, $status, $type, $date);

  // Attempt to execute the prepared statement
 

      // Attempt to execute the prepared statement   
        if(mysqli_stmt_execute($stmt)){


        echo 'ok';
  //         exit();

        } else{
        echo 'fail';
        }

  //Close statement
       mysqli_stmt_close($stmt);
   
 
} else {
        echo 'fail';
}

?>

