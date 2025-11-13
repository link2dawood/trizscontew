<?php
session_start();
if(isset($_SESSION["loggedin"]) && $_SESSION["loggedin"] === true){
  header("location: dashboard");
  exit;
}
 
// Include config file
require_once __DIR__ . '/../db/config.php';
 
// Define variables and initialize with empty values
$email = $password = "";
$email_err = $password_err = "";
 
// Processing form data when form is submitted
if($_SERVER["REQUEST_METHOD"] == "POST"){

    $email = trim($_POST['email']);
    $password = trim($_POST['password']);
 
    // Check if email is empty
    if(empty($email)){
        $email_err = "Please enter email.";
    }
    
    // Check if password is empty
    if(empty($password)){
        $password_err = "Please enter your password.";
    }
    // Validate credentials
    if(empty($email_err) && empty($password_err)){
        // Prepare a select statement
        $sql = "SELECT id, email, password, fname FROM users WHERE email = ?";
        
        // initialize the prepare statement.
        $stmt = mysqli_stmt_init($dbconnected);

        if($stmt = mysqli_prepare($dbconnected, $sql)){
            // Bind variables to the prepared statement as parameters
            mysqli_stmt_bind_param($stmt, "s", $email);
            
             // Attempt to execute the prepared statement
            if(mysqli_stmt_execute($stmt)){
                // Store result
                mysqli_stmt_store_result($stmt);
                
                // Check if email exists, if yes then verify password
                if(mysqli_stmt_num_rows($stmt) == 1){    

                    // Bind result variables
                    mysqli_stmt_bind_result($stmt, $id, $email, $hashed_password, $fname);
                    if(mysqli_stmt_fetch($stmt)){
                        if(password_verify($password, $hashed_password) || hash_equals($hashed_password, $password)){

                            // Store data in session variables
                            $_SESSION["loggedin"] = true;
                            $_SESSION["id"] = $id;
                            $_SESSION["email"] = $email;
                            $_SESSION["fname"] = $fname;

                            // Redirect user to welcome page
                            header("location: dashboard");
                        } else{
                            // Display an error message if password is not valid
                            $password_err = "The password you entered was not valid.";
                        }
                    }
                } else{
                    // Display an error message if email doesn't exist
                    $email_err = "No account found with that email.";
                }
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
