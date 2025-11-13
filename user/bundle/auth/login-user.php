<?php
session_start();

require_once __DIR__ . '/../db/config.php';


$email = $_POST['email'];
$password = $_POST['password'];
$type = $_POST['type'];

if((!empty($password)) && (!empty($email))) {
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
                if( $rowCount === 0){
                    // header('location: login');
                    echo 'invalid';

                } else if($rowCount == 1){
                    $row = mysqli_fetch_array($result, MYSQLI_ASSOC);
                
                        // Retrieve individual field value

                        $stored_password = $row['password'];
                        $password_matches = password_verify($password, $stored_password) || hash_equals($stored_password, $password);
                        if($password_matches) {
                            if($type === 'first') {
                                if($row['otp_2fa'] === 'yes') {
                                    echo 'yes';
                                } else {
                                    echo 'ok';
                                    // Store data in session variables
                                    $_SESSION["loggedin"] = true;
                                    $_SESSION["id"] = $row["id"];
                                    $_SESSION["email"] = $row["email"];
                                    $_SESSION["fname"] = $row["fname"];
                                }
                            } else {
                                echo 'ok';
                                // Store data in session variables
                                $_SESSION["loggedin"] = true;
                                $_SESSION["id"] = $row["id"];
                                $_SESSION["email"] = $row["email"];
                                $_SESSION["fname"] = $row["fname"];
                            }
                    
                        } else {
                            echo 'wrong';
                        }
                        
                    

                        
                }
            } else{
                echo "invalid";
            }

            // Close statement
            mysqli_stmt_close($stmt);
        }
}


?>