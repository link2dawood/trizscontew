<?php
session_start();
if(!isset($_SESSION["loggedin"]) || $_SESSION["loggedin"] !== true){
  header("location: login");
  exit;
}
foreach (glob("../../db/config.php") as $config){include_once($config);};
require_once 'coinpayments-php/src/CoinpaymentsAPI.php';
require '../../uniqid/uniqid.php';

$public_key = '*********************';
$private_key = '*********************';

$cp = new CoinpaymentsAPI($private_key, $public_key, 'json');

$userid = $_SESSION['id'];
$useremail = $_SESSION['email'];

$data = json_decode($_POST['data'], true);
$cryptoamount = $data['cryptoAmount'];
$dollaramount = $data['dollarAmount'];
$coin = $data['coin'];
// $time = time();
$time = $getNumber;
$token = $time.'trad';
$payment_mode = $coin.' '.$cryptoamount;
$mode = 'coinpayments';
$status = 'Pending';
$type = 'buy';
$date = gmdate(DATE_ISO8601);
$description = 'Buy order';
$hostname = getenv('HTTP_HOST');




/// INSERT STATEMENT
$sql = "INSERT INTO trade (token, email, amount, payment_mode, mode, status, type, date) VALUES (?,?, ?, ?,?,?,?,?)";

$stmt = mysqli_stmt_init($dbconnected);
if($stmt = mysqli_prepare($dbconnected, $sql)){
   // Bind variables to the prepared statement as parameters
   mysqli_stmt_bind_param($stmt, "ssssssss", $token, $useremail, $dollaramount, $payment_mode, $mode, $status, $type, $date);

  // Attempt to execute the prepared statement
 

      // Attempt to execute the prepared statement   
        if(mysqli_stmt_execute($stmt)){


          try {
            $transaction = $cp->CreateCustomTransaction([
                'currency1' => 'LTCT',
                'currency2' => 'LTCT',
                'amount' => 0.001,
                'buyer_email' => $useremail,
                'item_name' => 'Buy '.$coin,
                'custom' => 'custom_data',
                'invoice' => 'inv:'.$token,
                'success_url' => 'https://'.$hostname.'/user/wallet',
                'cancel_url' => 'https://'.$hostname.'/user/wallet',
                'ipn_url' => 'https://'.$hostname.'/user/bundle/payment/coinpayments/coinpayments_webhook_api.php'
            ]);
        
            if ($transaction['error'] == 'ok') {
                $paymentUrl = $transaction['result']['checkout_url'];
                // header("Location: $paymentUrl");
                echo 'url:'.$paymentUrl;
                exit();
            } else {
                echo 'Error: ' . $transaction['error'];
            }
          } catch (Exception $e) {
              echo 'Exception: ' . $e->getMessage();
          }
  //         exit();

        } else{
        echo 'error';
        }

  //Close statement
       mysqli_stmt_close($stmt);
   
 
} else {
        echo 'error';
}

?>
