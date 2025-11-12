<?php
session_start();
if(!isset($_SESSION["loggedin"]) || $_SESSION["loggedin"] !== true){
  header("location: login");
  exit;
}
foreach (glob("../../db/config.php") as $config){include_once($config);};
// Include the CoinGate PHP SDK
require 'coingate/init.php';

use CoinGate\Client;
use CoinGate\Exception\ApiErrorException;

// Configure your CoinGate credentials
$client = new Client('YOUR_API_KEY', true); // Use true for sandbox, false for live

$userid = $_SESSION['id'];
$useremail = $_SESSION['email'];

$data = json_decode($_POST['data'], true);
$cryptoamount = $data['cryptoAmount'];
$dollaramount = $data['dollarAmount'];
$coin = $data['coin'];
$token = time();
$payment_mode = $coin.' '.$cryptoamount;
$mode = 'coingate';
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


            // Create a new order
            $params = [
              'order_id'          => $token, // Unique order ID
              'price_amount'      => $dollaramount,       // Amount in specified currency
              'price_currency'    => 'USD',        // Currency of the amount
              'receive_currency'  => 'BTC',        // Currency in which you want to receive payment
              'callback_url'      => 'https://'.$hostname.'/user/bundle/payment/coingate/coingate_webhook_api.php', // URL for handling callbacks
              'cancel_url'        => 'https://'.$hostname.'/user/wallet',   // URL if the user cancels the payment
              'success_url'       => 'https://'.$hostname.'/user/wallet',  // URL for successful payment
              'title'             => 'Order #1234',                          // Order title
              'description'       =>  $description                            // Order description
            ];

            try {
              $order = $client->order->create($params);
              echo 'url:'.$order->payment_url;
              // header("Location: " . $order->payment_url);
              exit;
            } catch (ApiErrorException $e) {
              echo "Order creation failed: " . $e->getMessage();
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
