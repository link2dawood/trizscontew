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
  $coin = strtolower($coin);
  $value_raw = $words[1];

  $crypto_column = 'crypto_'.$coin;

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
              $cur_crypto_value = $row[$crypto_column];
         
              $new_crypto_value = ($cur_crypto_value + 0) - $value_raw;









    if ($status == 'Approved') {
      $sql = "UPDATE trade SET status = ? WHERE id = ?";
        $stmt = mysqli_stmt_init($dbconnected);
         if($stmt = mysqli_prepare($dbconnected, $sql)){
             // Bind variables to the prepared statement as parameters
             mysqli_stmt_bind_param($stmt, "si", $status, $id);
             
             // Set parameters
            $id = $id;
             
             // Attempt to execute the prepared statement
             if(mysqli_stmt_execute($stmt)){
               $sql = "UPDATE users SET $crypto_column=? WHERE email=?";
               $stmt = mysqli_stmt_init($dbconnected);
 
               if($stmt = mysqli_prepare($dbconnected, $sql)){
 
                 // Bind variables to the prepared statement as parameters
                 mysqli_stmt_bind_param($stmt, "ss", $new_crypto_value, $email);
 
               // Attempt to execute the prepared statement   
                 if(mysqli_stmt_execute($stmt)){

                  $type = 'admin';
                  $admin_subject = 'Sell order Approved';
                  $admin_msg = 'You approved a sell order of '.$amount.' on account: '.$email;
          
                  $myPersonalEmail = $email;
                  $subject = 'Sell order Approved';
                  $meta = 'Your sell order of '.$amount.' has been approved';
                  $msg = 'Your sell order of '.$amount.' has been approved';
                  send_short_mail($myPersonalEmail, $subject, $msg, $meta, $admin_subject, $admin_msg, $type, $dbconnected);


                   // Password updated successfully. Destroy the session, and redirect to login page
                   $_SESSION['status'] = "success";
                   $_SESSION['title'] = "Approved";
                   $_SESSION['message'] = "Sell order approved successfully";
                   echo "<script>window.open('../buy-sell', '_self')</script>";
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
       $sql = "UPDATE trade SET status = ? WHERE id = ?";
       $stmt = mysqli_stmt_init($dbconnected);
        if($stmt = mysqli_prepare($dbconnected, $sql)){
            // Bind variables to the prepared statement as parameters
            mysqli_stmt_bind_param($stmt, "si", $status, $id);
            
            // Set parameters
           $id = $id;
            
            // Attempt to execute the prepared statement
            if(mysqli_stmt_execute($stmt)){
                // Password updated successfully. Destroy the session, and redirect to login page
                $_SESSION['status'] = "success";
                $_SESSION['title'] = "Declined";
                $_SESSION['message'] = "Sell order request Declined";
                 echo "<script>window.open('../buy-sell', '_self')</script>";
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
    $sql = "DELETE FROM trade WHERE id = ?";

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
            $_SESSION['message'] = "Sell order request deleted successfully";
             echo "<script>window.open('../buy-sell', '_self')</script>";
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