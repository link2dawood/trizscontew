<?php

foreach (glob("../../db/config.php") as $config){include_once($config);}; 

$response = @file_get_contents('php://input');

$data = json_decode($response, true);

$tx_ref = $data['data']['tx_ref'];
$flw_ref = $data['data']['flw_ref'];
$payment_id = $data['data']['id'];
$paystatus = $data['data']['status'];
$date = gmdate(DATE_ISO8601);
$currency = $data['data']['currency'];
$payment_type = $data['data']['payment_type'];
$amount_paid = $data['data']['amount'];
$amount_charged = $data['data']['charged_amount'];
$email = $data['data']['customer']['email'];
$status = 'Approved';
$merchant = 'flutterwave';

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
    
    
    
} elseif($paystatus == 'failed') {

  $status = 'Declined';


    /// INSERT STATEMENT
    $sql = "INSERT INTO payments (email, merchant, payment_id, tx_ref, flw_ref, order_ref, amount_paid, amount_settled, payment_type, status, date_created) VALUES (?,?, ?,?, ?,?,?,?,?,?,?)";

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