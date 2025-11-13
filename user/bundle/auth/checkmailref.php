<?php
session_start();

require_once __DIR__ . '/../db/config.php';
// include_once('uniqid.php');

$email = $_POST['email'];
$refered_by = $_POST['ref'];
$_SESSION['referralcode'] = '';



    //VALIDATE WHO REFERED USER
    if (!empty($refered_by)) {
        // Prepare a select statement
        $sql = "SELECT email FROM users WHERE ref_code = ?";

        $stmt = mysqli_stmt_init($dbconnected);
        
        if($stmt = mysqli_prepare($dbconnected, $sql)){
            // Bind variables to the prepared statement as parameters
            mysqli_stmt_bind_param($stmt, "s", $refered_by);
            
            // Attempt to execute the prepared statement
            if(mysqli_stmt_execute($stmt)){
                
                /* store result */
                mysqli_stmt_store_result($stmt);
                
                // Check database if data exit and store the count in a variable.
                $rowCount = mysqli_stmt_num_rows($stmt); 
                if( $rowCount == 0){
                     echo "invalid";
                } else {
                    $_SESSION['referralcode'] = $refered_by; 
                }
            } 
            else{
                echo "Oops! Something went wrong. Please try again later.";
            }

            // Close statement
            mysqli_stmt_close($stmt);
        }
    }
    
    
    if(!empty($email)){
        // Prepare a select statement
        $sql = "SELECT id FROM users WHERE email = ?";

        $stmt = mysqli_stmt_init($dbconnected);
        
        if($stmt = mysqli_prepare($dbconnected, $sql)){
            // Bind variables to the prepared statement as parameters
            mysqli_stmt_bind_param($stmt, "s", $email);
            
            // Attempt to execute the prepared statement
            if(mysqli_stmt_execute($stmt)){
                
                /* store result */
                mysqli_stmt_store_result($stmt);
                
                // Check database if data exit and store the count in a variable.
                $rowCount = mysqli_stmt_num_rows($stmt); 
                if( $rowCount == 1){
                     echo "||taken";
                } else {
                    echo "||ok";
                }
            } 
            else{
                echo "Oops! Something went wrong. Please try again later.";
            }

            // Close statement
            mysqli_stmt_close($stmt);
        }
    }

   