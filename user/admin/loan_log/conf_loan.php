<?php 
session_start();

foreach (glob("../../bundle/db/config.php") as $config){include_once($config);}
require '../../bundle/temp/short_mail2.php';
            

  $status = trim($_GET['status']);
  $id = trim($_GET['id']);
  $email = trim($_GET['email']);
  $amount = trim($_GET['amount']);   
        

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
              $usdt = $row['crypto_usdt'];
              $asset = 'crypto_usdt';
              $value = $amount + $usdt;


    if ($status == 'Approved') {
      $sql = "UPDATE loan SET status = ? WHERE id = ?";
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
                  $_SESSION['status'] = "success";
                  $_SESSION['title'] = "Approved";
                  $_SESSION['message'] = "User loan application Approved";
                  echo "<script>window.open('../loan', '_self')</script>";

                  
                  $type = 'admin';
                  $admin_subject = 'Loan Approved for user';
                  $admin_msg = 'You approved a loan of $'.$amount.' on account: '.$email;
          
                  $myPersonalEmail = $email;
                  $subject = 'Loan application approved';
                  $meta = 'Your loan of $'.$amount.' has been approved';
                  $msg = 'Your loan of $'.$amount.' has been approved';
                  send_short_mail($myPersonalEmail, $subject, $msg, $meta, $admin_subject, $admin_msg, $type, $dbconnected);

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

   if ($status=='Paid') {
    $sql = "UPDATE loan SET status = ? WHERE id = ?";
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
             $_SESSION['title'] = "Mark Paid";
             $_SESSION['message'] = "User loan mark as Paid";
              echo "<script>window.open('../loan', '_self')</script>";

              $type = 'admin';
                  $admin_subject = 'Loan Mark as Paid';
                  $admin_msg = 'You marked a loan of $'.$amount.' on account: '.$email.' as paid';
          
                  $myPersonalEmail = $email;
                  $subject = 'Your loan has been repaid';
                  $meta = 'Your loan of $'.$amount.' has been repaid';
                  $msg = 'Your loan of $'.$amount.' has been repaid. Thank you for using our loan service';
                  send_short_mail($myPersonalEmail, $subject, $msg, $meta, $admin_subject, $admin_msg, $type, $dbconnected);
        //  exit();

         } else{
           $_SESSION['status'] = "error";
           $_SESSION['title'] = "Error";
           $_SESSION['message'] = "Something went wrong. Please try again later.";
         }

         // Close statement
         mysqli_stmt_close($stmt);
     }
   }    
 if ($status=='Declined') {
        $sql = "UPDATE loan SET status = ? WHERE id = ?";
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
                 $_SESSION['message'] = "User loan application Declined";
                  echo "<script>window.open('../loan', '_self')</script>";
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
     $sql = "DELETE FROM loan WHERE id = ?";
 
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
           // echo "<script>window.open('../loan', '_self')</script>";
             header("location: ../loan");
             exit();
         } else{
             echo "Oops! Something went wrong. Please try again later.";
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