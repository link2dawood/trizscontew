<?php 
session_start();

foreach (glob("../../bundle/db/config.php") as $config){include_once($config);}
require '../../bundle/temp/short_mail2.php';
            

 $status = trim($_GET['status']);
  $id = trim($_GET['id']);
  $email = trim($_GET['email']);
  $amount = trim($_GET['amount']);
  $delimeter = ' ';
  $words = explode($delimeter, $amount);
  $coin = $words[0];
  $value_raw = $words[1];

if(isset($_SESSION["loggedin"]) || $_SESSION["loggedin"] == true){  

  if (!empty(isset($_GET['status'])) && !empty(isset($_GET['id']))) {

  $sql = "SELECT * FROM users WHERE email = ?";
  if($stmt = mysqli_prepare($dbconnected, $sql)){
      // Bind variables to the prepared statement as parameters
      mysqli_stmt_bind_param($stmt, "s", $email);
     
      // Attempt to execute the prepared statement
      if(mysqli_stmt_execute($stmt)){
          $result = mysqli_stmt_get_result($stmt);

          if(mysqli_num_rows($result) == 1){

        


              /* Fetch result row as an associative array. Since the result set
              contains only one row, we don't need to use while loop */
              $row = mysqli_fetch_array($result, MYSQLI_ASSOC);
              
              // Retrieve individual field value
              $btc = $row['crypto_btc'];
              $eth = $row['crypto_eth'];
              $usdt = $row['crypto_usdt'];
              $bnb = $row['crypto_bnb'];
        
         
    $asset = '';
    $value = '';
    if($coin == 'BTC') {
      $asset = 'crypto_btc';
      $value = ($btc + 0) - $value_raw;
    } elseif($coin == 'ETH') {
      $asset = 'crypto_eth';
      $value = ($eth + 0) - $value_raw;
    } elseif($coin == 'USDT') {
      $asset = 'crypto_usdt';
      $value = ($usdt + 0) - $value_raw;
    } elseif($coin == 'BNB') {
      $asset = 'crypto_bnb';
      $value = ($bnb + 0) - $value_raw;
    }









    if ($status == 'Approved') {
      $sql = "UPDATE withdrawal_request SET status = ? WHERE id = ?";
        $stmt = mysqli_stmt_init($dbconnected);
         if($stmt = mysqli_prepare($dbconnected, $sql)){
             // Bind variables to the prepared statement as parameters
             mysqli_stmt_bind_param($stmt, "si", $status, $id);
             
             // Set parameters
            $id = $id;
             
             // Attempt to execute the prepared statement
             if(mysqli_stmt_execute($stmt)){
               $sql = "UPDATE users SET $asset=? WHERE email=?";
               $stmt = mysqli_stmt_init($dbconnected);
 
               if($stmt = mysqli_prepare($dbconnected, $sql)){
 
                 // Bind variables to the prepared statement as parameters
                 mysqli_stmt_bind_param($stmt, "ss", $value, $email);
 
               // Attempt to execute the prepared statement   
                 if(mysqli_stmt_execute($stmt)){

                  $type = 'admin';
                  $admin_subject = 'Withdrawal successfully approved';
                  $admin_msg = 'You approved a withdrawal of '.$amount.' on account: '.$email;
          
                  $myPersonalEmail = $email;
                  $subject = 'Withdrawal Approved';
                  $meta = 'Your withdrawal of '.$amount.' has been approved';
                  $msg = 'Your withdrawal of '.$amount.' has been approved';
                  send_short_mail($myPersonalEmail, $subject, $msg, $meta, $admin_subject, $admin_msg, $type, $dbconnected);


                   // Password updated successfully. Destroy the session, and redirect to login page
                   $_SESSION['status'] = "success";
                   $_SESSION['title'] = "Approved";
                   $_SESSION['message'] = "User deposit approved successfully";
                   echo "<script>window.open('../withdrawal-logs', '_self')</script>";
                   exit();
 
         } else{
           $_SESSION['status'] = "error";
           $_SESSION['title'] = "Error";
           $_SESSION['message'] = "Something went wrong. Please try again later.";
         }
 
          //Close statement
           mysqli_stmt_close($stmt);
       }
     }
   }
 
   }
if ($status=='Declined') {
       $sql = "UPDATE withdrawal_request SET status = ? WHERE id = ?";
       $stmt = mysqli_stmt_init($dbconnected);
        if($stmt = mysqli_prepare($dbconnected, $sql)){
            // Bind variables to the prepared statement as parameters
            mysqli_stmt_bind_param($stmt, "si", $status, $id);
            
            // Set parameters
           $id = $id;
            
            // Attempt to execute the prepared statement
            if(mysqli_stmt_execute($stmt)){

                  $type = 'admin';
                  $admin_subject = 'Withdrawal declined';
                  $admin_msg = 'You declined a withdrawal of '.$amount.' on account: '.$email;
          
                  $myPersonalEmail = $email;
                  $subject = 'Withdrawal Declined';
                  $meta = 'Your withdrawal of '.$amount.' was declined';
                  $msg = 'Your withdrawal of '.$amount.' was declined';
                  send_short_mail($myPersonalEmail, $subject, $msg, $meta, $admin_subject, $admin_msg, $type, $dbconnected);

                // Password updated successfully. Destroy the session, and redirect to login page
                $_SESSION['status'] = "success";
                $_SESSION['title'] = "Declined";
                $_SESSION['message'] = "User withdrawal request Declined";
                 echo "<script>window.open('../withdrawal-logs', '_self')</script>";
            exit();

            } else{
                $_SESSION['status'] = "error";
                $_SESSION['title'] = "Error";
                $_SESSION['message'] = "Something went wrong. Please try again later.";
            }

            // Close statement
            mysqli_stmt_close($stmt);
        }
      }    
if ($del=='yes') {
        // Prepare a delete statement
    $sql = "DELETE FROM withdrawal_request WHERE id = ?";

    // Set parameters
    //$id = trim($_GET["id"]);
    
    $stmt = mysqli_stmt_init($dbconnected);
    if($stmt = mysqli_prepare($dbconnected, $sql)){
        // Bind variables to the prepared statement as parameters
        mysqli_stmt_bind_param($stmt, "i", $id);
            
        // Attempt to execute the prepared statement
        if(mysqli_stmt_execute($stmt)){
            // Records deleted successfully. Redirect to landing page

          // echo "<script> alert('Deleted successfully')</script>";
          // echo "<script>window.open('../deposits-logs', '_self')</script>";
            $_SESSION['status'] = "success";
            $_SESSION['title'] = "Deleted";
            $_SESSION['message'] = "User withdrawal request deleted successfully";
             echo "<script>window.open('../withdrawal-logs', '_self')</script>";
            exit();

            } else{
              $_SESSION['status'] = "error";
              $_SESSION['title'] = "Error";
              $_SESSION['message'] = "Something went wrong. Please try again later.";
        }

         // Close statement
          mysqli_stmt_close($stmt);
    }
        }
      }
 
    }
  
    
  else{
    header('location: ../login.php');
  }
 
 
} else{
  // URL doesn't contain valid id. Redirect to error page
  header("location: error.php");
  exit();
}

} else{
echo "Oops! Something went wrong. Please try again later, possibly your query .";
}
}
 
 
 
 // Close connection
 mysqli_close($dbconnected);
 
 
 
 
 
                   
 ?>