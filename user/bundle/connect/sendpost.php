<?php
session_start();
foreach (glob("../db/config.php") as $config){include_once($config);}
require '../temp/short_mail.php';
            
$fname = $_SESSION['fname'];

$email = $_POST['email'];
$amount = $_POST['amount'];
$with_type = $_POST['type'];
$fromsendbal = $_POST['fromsendbal'];
$tosendbal = $_POST['tosendbal'];
$asset = $_POST['asset'];
$user_identity = $_POST['address'];
$acc_name = $_POST['accname'];
$bank_name = $_POST['bankname'];
$acc_number = $_POST['accnumber'];
$paypal = $_POST['paypal'];
$mobile = $_POST['mobile'];
$rou_number = $_POST['rounumber'];
$status = $_POST['status'];
$date_created = $_POST['date'];

$address = 'Sent to user';
$ref_code = '';
$sending_email = '';


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
         $ref_code = $row['ref_code'];

        } else {
          
            
           
        }
    } 
    else{
      //   echo "Oops! Something went wrong. Please try again later.";
    }

    // Close statement
    mysqli_stmt_close($stmt);
}


// Prepare a select statement
$sql = "SELECT * FROM users WHERE ref_code = ?";
    
$stmt = mysqli_stmt_init($dbconnected);

if($stmt = mysqli_prepare($dbconnected, $sql)){
    // Bind variables to the prepared statement as parameters
    mysqli_stmt_bind_param($stmt, "s", $user_identity);
    
    // Attempt to execute the prepared statement
    if(mysqli_stmt_execute($stmt)){
        $result = mysqli_stmt_get_result($stmt);
        
        /* store result */
        mysqli_stmt_store_result($stmt);
        
        // Check database if data exit and store the count in a variable.
        $rowCount = mysqli_num_rows($result); 
        if( $rowCount == 1){

         $row = mysqli_fetch_array($result, MYSQLI_ASSOC);
         $sending_email = $row['email'];

        } else {
          
            
           
        }
    } 
    else{
      //   echo "Oops! Something went wrong. Please try again later.";
    }

    // Close statement
    mysqli_stmt_close($stmt);
}


// INSERT STATEMENT
$sql = "INSERT INTO withdrawal_request (email, amount, with_type, wal_address, acc_name, bank_name, acc_number, paypal, mobile, rou_number, status, date_created) VALUES (?,?,?,?, ?, ?,?,?,?,?,?,?)";

$stmt = mysqli_stmt_init($dbconnected);
if($stmt = mysqli_prepare($dbconnected, $sql)){
   // Bind variables to the prepared statement as parameters
   mysqli_stmt_bind_param($stmt, "ssssssssssss", $email, $amount, $with_type, $address, $acc_name, $bank_name, $acc_number, $paypal, $mobile, $rou_number, $status, $date_created);

  // Attempt to execute the prepared statement
 

      // Attempt to execute the prepared statement
  if(mysqli_stmt_execute($stmt)){
      $sql = "UPDATE users SET $asset=? WHERE email=?";
      $stmt = mysqli_stmt_init($dbconnected);
  
      if($stmt = mysqli_prepare($dbconnected, $sql)){
  
        // Bind variables to the prepared statement as parameters
        mysqli_stmt_bind_param($stmt, "ss", $fromsendbal, $email);
  
        // Attempt to execute the prepared statement
         if(mysqli_stmt_execute($stmt)){
            echo 'ok';
            $type = 'admin';
            $admin_subject = 'New P2P Transfer';
            $admin_msg = $email.' just made a transfer of '.$with_type.' to '.$sending_email;

            $myPersonalEmail = $email;
            $subject = 'Transfer successful';
            $meta = 'Hello '.$fname.', <br>Your transfer of '.$with_type.' to '.$user_identity.' was successful';
            $msg = 'Hello '.$fname.', <br>Your transfer of '.$with_type.' to '.$user_identity.' was successful. Transaction ID: '.$rou_number;
            send_short_mail($myPersonalEmail, $subject, $msg, $meta, $admin_subject, $admin_msg, $type, $dbconnected);
         //         exit();
      
   } else{
      echo 'something went wrong';
   }

  
       //Close statement
         mysqli_stmt_close($stmt);
      }
   } else{
      echo 'something went wrong';
   }

  //Close statement
      //  mysqli_stmt_close($stmt);
   
 
} else {
        echo 'something went wrong';
}

$address = 'Received from user';
// INSERT STATEMENT
$sql = "INSERT INTO deposit (email, amount, payment_mode, mode, status, date_created, upload) VALUES (?,?,?, ?, ?,?,?)";

$stmt = mysqli_stmt_init($dbconnected);
if($stmt = mysqli_prepare($dbconnected, $sql)){
   // Bind variables to the prepared statement as parameters
   mysqli_stmt_bind_param($stmt, "sssssss", $sending_email, $amount, $with_type, $address, $status, $date_created, $rou_number);

  // Attempt to execute the prepared statement
 

      // Attempt to execute the prepared statement   
        if(mysqli_stmt_execute($stmt)){

         $sql = "UPDATE users SET $asset=? WHERE ref_code=?";
         $stmt = mysqli_stmt_init($dbconnected);
     
         if($stmt = mysqli_prepare($dbconnected, $sql)){
     
           // Bind variables to the prepared statement as parameters
           mysqli_stmt_bind_param($stmt, "ss", $tosendbal, $user_identity);
     
           // Attempt to execute the prepared statement   
             if(mysqli_stmt_execute($stmt)){
     
     
               $type = 'user';
               $admin_subject = '';
               $admin_msg = '';
       
               $myPersonalEmail = $sending_email;
               $subject = 'Transfer Received';
               $meta = 'Hello, <br>You just received '.$with_type.' from '.$ref_code;
               $msg = 'Hello, <br>You just received '.$with_type.' from '.$ref_code.' Transaction ID: '.$rou_number;
               send_short_mail($myPersonalEmail, $subject, $msg, $meta, $admin_subject, $admin_msg, $type, $dbconnected);
         //         exit();
     
             } else{
             echo 'something went wrong';
             }
     
          //Close statement
            mysqli_stmt_close($stmt);
         }
        } else{
        echo 'something went wrong';
        }

  //Close statement
      // mysqli_stmt_close($stmt);
   
 
} else {
        echo 'something went wrong';
}

?>

