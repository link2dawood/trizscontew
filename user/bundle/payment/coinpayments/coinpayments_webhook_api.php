<?php

foreach (glob("../../db/config.php") as $config){include_once($config);}; 
require_once 'coinpayments-php/src/CoinpaymentsAPI.php';

$cp_ipn_secret = 'ipn_secret';

$request = @file_get_contents('php://input');


$hmac = hash_hmac("sha512", $request, $cp_ipn_secret);
if (!hash_equals($hmac, $_SERVER['HTTP_HMAC'])) {
    die('HMAC signature does not match');
}

// Parse the URL-encoded request string into an associative array
parse_str($request, $data);

$invoice = $data['invoice'];
$delimetery = ':';
$invoice_break = explode($delimetery, $invoice);

$paystatus = '';
if ($data['status'] >= 100 || $data['status'] == 2) {
  $paystatus = 'successful';
} else if ($data['status'] < 0) {
  $paystatus = 'failed';
} else {
  $paystatus = 'pending';
}

$tx_ref = $invoice_break[1];
$flw_ref = $data['txn_id'];
$payment_id = $data['txn_id'];
$date = gmdate(DATE_ISO8601);
$currency = $data['currency1'];
$payment_type = 'crypto';
$amount_paid = $data['amount1'];
$amount_charged = $data['amount1'];
$email = $data['email'];
$status = 'Approved';
$merchant = 'coinpayments';


if($paystatus == 'successful') {

  // FETCH Order Details
// Prepare a select statement
$sql = "SELECT * FROM trade WHERE token = ?";
    
$stmt = mysqli_stmt_init($dbconnected);

if($stmt = mysqli_prepare($dbconnected, $sql)){
    // Bind variables to the prepared statement as parameters
    mysqli_stmt_bind_param($stmt, "s", $tx_ref);
    
    // Attempt to execute the prepared statement
    if(mysqli_stmt_execute($stmt)){
        $result = mysqli_stmt_get_result($stmt);
        
        /* store result */
        mysqli_stmt_store_result($stmt);
        
        // Check database if data exit and store the count in a variable.
        $rowCount = mysqli_num_rows($result); 
        if( $rowCount == 1){

            //Order exists

            $row = mysqli_fetch_array($result, MYSQLI_ASSOC);
            $payment_mode = $row['payment_mode'];

        } else {
          
            //No Order exists
           
        }
    } 
    else{
      //   echo "Oops! Something went wrong. Please try again later.";
    }

    // Close statement
    mysqli_stmt_close($stmt);
}

$delimeter = ' ';
$words = explode($delimeter, $payment_mode);
$coin = $words[0];
$coin = strtolower($coin);
$value_raw = $words[1];

$crypto_column = 'crypto_'.$coin;
$current_crypto_value = '';


// Prepare a select statement
$sql = "SELECT * FROM users WHERE email = ?";
    
$stmt = mysqli_stmt_init($dbconnected);

if($stmt = mysqli_prepare($dbconnected, $sql)){
    // Bind variables to the prepared statement as parameters
    mysqli_stmt_bind_param($stmt, "s", $email);
    
    // Attempt to execute the prepared statement
    if(mysqli_stmt_execute($stmt)){
        $result = mysqli_stmt_get_result($stmt);
        
        /* store result */
        mysqli_stmt_store_result($stmt);
        
        // Check database if data exit and store the count in a variable.
        $rowCount = mysqli_num_rows($result); 
        if( $rowCount == 1){

            

          $row = mysqli_fetch_array($result, MYSQLI_ASSOC);
          if(isset($row[$crypto_column])) {
            $current_crypto_value = $row[$crypto_column];
          } else {
            $add_column = "ALTER TABLE users ADD $crypto_column VARCHAR(100) NOT NULL";
            if($result = mysqli_query($dbconnected, $add_column)){
              // echo 'column added';
              $current_crypto_value = 0;
            }
          }

        } else {
          
            
           
        }
    } 
    else{
      //   echo "Oops! Something went wrong. Please try again later.";
    }

    // Close statement
    mysqli_stmt_close($stmt);
}

$new_crypto_value = $current_crypto_value + $value_raw;




    
    /// INSERT STATEMENT
$sql = "INSERT INTO payments (email, merchant, payment_id, tx_ref, flw_ref, order_ref, amount_paid, amount_settled, payment_type, status, date_created) VALUES (?,?,?, ?, ?,?,?,?,?,?,?)";

$stmt = mysqli_stmt_init($dbconnected);
if($stmt = mysqli_prepare($dbconnected, $sql)){
  // Bind variables to the prepared statement as parameters
  mysqli_stmt_bind_param($stmt, "sssssssssss", $email, $merchant, $payment_id, $tx_ref, $flw_ref, $tx_ref, $amount_paid, $amount_charged, $payment_type, $paystatus, $date );

  // Attempt to execute the prepared statement
  if(mysqli_stmt_execute($stmt)){
    $sql = "UPDATE trade SET status=? WHERE token=?";
    $stmt = mysqli_stmt_init($dbconnected);

    if($stmt = mysqli_prepare($dbconnected, $sql)){

      // Bind variables to the prepared statement as parameters
      mysqli_stmt_bind_param($stmt, "ss", $status, $tx_ref);

      // Attempt to execute the prepared statement   
        if(mysqli_stmt_execute($stmt)){


          $sql = "UPDATE users SET $crypto_column=? WHERE email=?";
          $stmt = mysqli_stmt_init($dbconnected);

          if($stmt = mysqli_prepare($dbconnected, $sql)){

            // Bind variables to the prepared statement as parameters
            mysqli_stmt_bind_param($stmt, "ss", $new_crypto_value, $email);

            // Attempt to execute the prepared statement   
              if(mysqli_stmt_execute($stmt)){


              echo 'ok';
              
            
        //         exit();

              } else{
              echo 'fail';
              }
        //Close statement
            mysqli_stmt_close($stmt);
          }
        

        } else{
        echo 'fail';
        }
  //Close statement
      // mysqli_stmt_close($stmt);
    }
  }
   
 
} else {
      
}
    
    
    
} elseif ($paystatus == 'failed') {

  $status = 'Declined';


    /// INSERT STATEMENT
    $sql = "INSERT INTO payments (email, merchant, payment_id, tx_ref, flw_ref, order_ref, amount_paid, amount_settled, payment_type, status, date_created) VALUES (?,?,?, ?, ?,?,?,?,?,?,?)";

    $stmt = mysqli_stmt_init($dbconnected);
    if($stmt = mysqli_prepare($dbconnected, $sql)){
      // Bind variables to the prepared statement as parameters
      mysqli_stmt_bind_param($stmt, "sssssssssss", $email, $merchant, $payment_id, $tx_ref, $flw_ref, $tx_ref, $amount_paid, $amount_charged, $payment_type, $paystatus, $date );
    
      // Attempt to execute the prepared statement
  if(mysqli_stmt_execute($stmt)){
    $sql = "UPDATE trade SET status=? WHERE token=?";
    $stmt = mysqli_stmt_init($dbconnected);

    if($stmt = mysqli_prepare($dbconnected, $sql)){

      // Bind variables to the prepared statement as parameters
      mysqli_stmt_bind_param($stmt, "ss", $status, $tx_ref);

      // Attempt to execute the prepared statement   
        if(mysqli_stmt_execute($stmt)){


        echo 'ok';
        
  //         exit();

        } else{
        echo 'fail';
        }
  //Close statement
      mysqli_stmt_close($stmt);
    }
  }
   
 
} else {
      
}
    
    


}

http_response_code(200);


?>
