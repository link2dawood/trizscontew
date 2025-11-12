<?php
session_start();
if(!isset($_SESSION["loggedin"]) || $_SESSION["loggedin"] !== true){
    header("location: login");
    exit;
}
foreach (glob("../../db/config.php") as $config){include_once($config);};
require '../../uniqid/uniqid.php';

$userid = $_SESSION['id'];
$useremail = $_SESSION['email'];

$data = json_decode($_POST['data'], true);
$cryptoamount = $data['cryptoAmount'];
$dollaramount = $data['dollarAmount'];
$coin = $data['coin'];
$time = $getNumber;
$token = $time.'dep';
$payment_mode = $coin.' '.$cryptoamount;
$mode = 'flutterwave';
$status = 'Pending';
$date = gmdate(DATE_ISO8601);
// $description = 'Buy '. $coin;
$description = 'Deposit';

$public_key = '********************';




// INSERT STATEMENT
$sql = "INSERT INTO deposit (email, amount, payment_mode, mode, status, date_created, upload) VALUES (?,?,?, ?, ?,?,?)";

$stmt = mysqli_stmt_init($dbconnected);
if($stmt = mysqli_prepare($dbconnected, $sql)){
   // Bind variables to the prepared statement as parameters
   mysqli_stmt_bind_param($stmt, "sssssss", $useremail, $dollaramount, $payment_mode, $mode, $status, $date, $token);

  // Attempt to execute the prepared statement
 

      // Attempt to execute the prepared statement   
        if(mysqli_stmt_execute($stmt)){


            $obj = (object) [
                'id' => $userid,
                'email' => $useremail,
                'total' => $dollaramount,
                'token' => $token,
                'description' => $description,
                'public' => $public_key
            ];
            
            echo json_encode($obj);
  //         exit();

        } else{
        echo 'error';
        }

  //Close statement
       mysqli_stmt_close($stmt);
   
 
} else {
        echo '||error';
}








?>

