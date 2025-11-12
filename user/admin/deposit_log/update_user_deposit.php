<?php
session_start();

  if(!isset($_SESSION["loggedin"]) || $_SESSION["loggedin"] !== true){
    header("location: ../login.php");
    exit;
}

    // Include config file
    foreach (glob('../../bundle/db/config.php') as $config){include_once $config;}
   

    $deposit=$ref_bonus=$main_balance="";
    $deposit_err=$ref_bonus_err=$main_balance_err="";

    if (isset($_POST['update'])) {
    $email = trim($_POST['email']);
    $deposit = trim($_POST['deposit']);
    $ref_bonus = trim($_POST['ref_bonus']);
    $main_balance = trim($_POST['main_balance']);

        if (is_null($deposit)) {
        $deposit_err = "Update this field, use 0 if empty";
        }
         if (is_null($ref_bonus)) {
        $ref_bonus_err = "Update this field, use 0 if empty";
        }
         if (is_null($main_balance)) {
        $main_balance_err = "Update this field, use 0 if empty";
        }

        if (empty($deposit_err) && empty($ref_bonus_err) && empty($main_balance_err)) {
                 // Prepare an update statement
        $sql = "UPDATE users SET deposit = ?, ref_bonus =?, main_balance=? WHERE email = ?";
        
        $stmt = mysqli_stmt_init($dbconnected);
        if($stmt = mysqli_prepare($dbconnected, $sql)){
            // Bind variables to the prepared statement as parameters
            mysqli_stmt_bind_param($stmt, "ssss", $deposit, $ref_bonus, $main_balance, $email);
            
            // Set parameters
           $email = $email;
            
            // Attempt to execute the prepared statement
            if(mysqli_stmt_execute($stmt)){
                // Password updated successfully. Destroy the session, and redirect to login page
                $_SESSION['status'] = "success";
                $_SESSION['title'] = "Updated";
                $_SESSION['message'] = "User deposit updated successfully";
                 echo "<script>window.open('../deposits-logs', '_self')</script>";
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

    ?>