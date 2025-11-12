<?php
session_start();
foreach (glob("../db/config.php") as $config){include_once($config);}
require '../temp/short_mail.php';
            
$email = $_POST['email'];
$fname = $_POST['fname'];
$refereename = $_POST['refereename'];
$amount = $_POST['amount'];
$payment_mode = $_POST['mode'];
$mode = 'Platform Pay';
$status = $_POST['status'];
$date = $_POST['date'];
$token = $_POST['token'];

$goref = $_POST['goref'];
$depositamount = $_POST['depositamount'];
$newuserbalance = $_POST['newuserbalance'];
$refuseremail = $_POST['refuseremail'];
$newrefbalance = $_POST['newrefbalance'];
$refamount = $_POST['refamount'];
$asset = $_POST['asset'];
$coin = $_POST['coin'];


// $email = 'johndoe@gmail.com';
// $fname = 'user';
// $refereename = 'user 3670';
// $amount = '100.00';
// $payment_mode = "BTC 0.00165";
// $mode = 'Platform Pay';
// $status = "Approved";
// $date = "2024-08-10 08:38:34";
// $token = "05SmO4XlgvO2tr3lU";

// $goref = "no";
// $depositamount = "0.00165";
// $newuserbalance = "0.01323";
// $refuseremail = 'none';
// $newrefbalance = "0.00000";
// $refamount = "0.00000";
// $asset = "crypto_btc";
// $coin = "BTC";



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
          if(isset($row[$asset])) {
            $current_asset_value = $row[$asset];
          } else {
            $add_column = "ALTER TABLE users ADD $asset VARCHAR(50) NULL";
            if($result = mysqli_query($dbconnected, $add_column)){
              // echo 'column added';
              $current_asset_value = 0;
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

$new_asset_value = $current_asset_value + $depositamount;











// INSERT STATEMENT
$sql = "INSERT INTO deposit (email, amount, payment_mode, mode, status, date_created, upload) VALUES (?,?,?, ?, ?,?,?)";

$stmt = mysqli_stmt_init($dbconnected);
if($stmt = mysqli_prepare($dbconnected, $sql)){
   // Bind variables to the prepared statement as parameters
   mysqli_stmt_bind_param($stmt, "sssssss", $email, $amount, $payment_mode, $mode, $status, $date, $token);

  // Attempt to execute the prepared statement
  if(mysqli_stmt_execute($stmt)){
    $sql = "UPDATE users SET $asset=? WHERE email=?";
    $stmt = mysqli_stmt_init($dbconnected);

    if($stmt = mysqli_prepare($dbconnected, $sql)){

      // Bind variables to the prepared statement as parameters
      mysqli_stmt_bind_param($stmt, "ss", $new_asset_value, $email);

      // Attempt to execute the prepared statement   
        if(mysqli_stmt_execute($stmt)){


        echo 'successfully added to database';
        $type = 'admin';
        $admin_subject = 'Deposit successfully added';
        $admin_msg = 'You deposited '.$mode.' to account: '.$email;

        $myPersonalEmail = $email;
        $subject = 'Account credit';
        $meta = 'Hello '.$fname.', <br> You just received a deposit of '.$mode;
        $msg = 'Hello '.$fname.', <br> You just received a deposit of '.$mode;
        send_short_mail($myPersonalEmail, $subject, $msg, $meta, $admin_subject, $admin_msg, $type, $dbconnected);
        //         exit();

        } else{
        echo 'something went wrong';
        }

     //Close statement
       mysqli_stmt_close($stmt);
    }
  } else {
      echo 'deposit insert failed';
  }
} else {
        echo 'something went wrong';
}


if ($refuseremail != 'none' && $goref == 'yes') {
      
      // INSERT STATEMENT
      $sql = "INSERT INTO referral (email, refuser, refemail, amount, asset, date) VALUES (?,?, ?,?, ?,?)";

      $stmt = mysqli_stmt_init($dbconnected);
      if($stmt = mysqli_prepare($dbconnected, $sql)){
      // Bind variables to the prepared statement as parameters
      mysqli_stmt_bind_param($stmt, "ssssss", $refuseremail, $refereename, $email, $refamount, $coin, $date);

      // Attempt to execute the prepared statement
      if(mysqli_stmt_execute($stmt)){
      $sql = "UPDATE users SET $asset=? WHERE email=?";
      $stmt = mysqli_stmt_init($dbconnected);

      if($stmt = mysqli_prepare($dbconnected, $sql)){

            // Bind variables to the prepared statement as parameters
            mysqli_stmt_bind_param($stmt, "ss", $newrefbalance, $refuseremail);

            // Attempt to execute the prepared statement   
            if(mysqli_stmt_execute($stmt)){


            echo 'successfully added to database';
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
}


?>

