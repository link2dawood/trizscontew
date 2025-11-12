<?php
// Check if the user is logged in, otherwise redirect to login page
if(!isset($_SESSION["loggedin"]) || $_SESSION["loggedin"] !== true){
    header("location: login.php");
    exit;
}
 
// Include config file
 foreach (glob('../bundle/db/config.php') as $config){include_once $config;}
 
    // Define variables and initialize with empty values
    $id = $_SESSION["id"];
    $old_pass=$new_password = $confirm_password = "";
    $old_pass_err=$new_password_err = $confirm_password_err = "";

    $sql = "SELECT password, email FROM admin WHERE id = '$id' ";
                    if($result = mysqli_query($dbconnected, $sql)){
                      $rowCount = mysqli_num_rows($result);
                        if($rowCount == 1){

                                $index = 0;

                                while($row = mysqli_fetch_array($result)){
                                                                     
                                  $db_pass = $row['password'];
                                  $email = $row['email'];

                                  }

                            mysqli_free_result($result);
                        } else{
                            echo "User not found";
                        }
                    } else{
                        echo "ERROR: Could not able to execute $sql. " . mysqli_error($dbconnected);
                    }                          
 
// Processing form data when form is submitted
if($_SERVER["REQUEST_METHOD"] == "POST"){

    $old_pass = trim($_POST['old_pass']);
    $new_password = trim($_POST['new_password']);
    $confirm_password = trim($_POST['confirm_password']);  

      
        // Validate old password
    if(empty($old_pass)){
        $old_pass_err = "Please enter old password";     
    }
    if ($db_pass != $old_pass) {
      $old_pass_err = "Password do not match";
        }

       // Validate new password
    if(empty($new_password)){
        $new_password_err = "Please enter the new password.";     
    }
    if (strlen($new_password) < 5) {
       $new_password_err = "Password must not be less than 5";
     } 
        
    // Validate confirm password
    if(empty($confirm_password)){
        $confirm_password_err = "Please confirm the password.";
    } 

        if(empty($new_password_err) && ($new_password != $confirm_password)){
            $confirm_password_err = "Password did not match.";
        }
    
        
    // Check input errors before updating the database
    if(empty($old_pass_err) && empty($new_password_err) && empty($confirm_password_err)){


        // Prepare an update statement
        $sql = "UPDATE admin SET password = ? WHERE id = ?";
        
        $stmt = mysqli_stmt_init($dbconnected);
        if($stmt = mysqli_prepare($dbconnected, $sql)){
            // Bind variables to the prepared statement as parameters
            mysqli_stmt_bind_param($stmt, "si", $new_password, $param_id);
            
            // Set parameters
            //$password_harsh = password_hash($new_password, PASSWORD_DEFAULT);
            $param_id = $id;
            
            // Attempt to execute the prepared statement
            if(mysqli_stmt_execute($stmt)){
                // Password updated successfully. Destroy the session, and redirect to login page
                session_destroy();
                echo "<script>alert('Password successfully Changed!')</script>";

                //redirect to login page
                echo "<script>window.open('login.php', '_self')</script>";
               
               // header("location: login.php");
                exit();
            } else{
                echo "Oops! Something went wrong. Please try again later.";
            }

            // Close statement
            mysqli_stmt_close($stmt);
        }
    }
    
    // Close connection
    mysqli_close($dbconnected);
}
?>
