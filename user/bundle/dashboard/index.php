<?php
if(!isset($_SESSION["loggedin"]) || $_SESSION["loggedin"] !== true){
    header("location: login");
    exit;
}
require_once __DIR__ . '/../db/config.php';
    
    $message_err ="";

    $userid = $_SESSION['id'];
    $email = $_SESSION['email'];
    $_SESSION['verified'] = false;

    // Prepare a select statement
        $sql = "SELECT * FROM users WHERE email = ?";

        $stmt = mysqli_stmt_init($dbconnected);
        
        if($stmt = mysqli_prepare($dbconnected, $sql)){
            // Bind variables to the prepared statement as parameters
            mysqli_stmt_bind_param($stmt, "s", $_SESSION['email']);
            
            // Attempt to execute the prepared statement
            if(mysqli_stmt_execute($stmt)){
                 $result = mysqli_stmt_get_result($stmt);
                
                /* store result */
                mysqli_stmt_store_result($stmt);
                
                // Check database if data exit and store the count in a variable.
                $rowCount = mysqli_num_rows($result); 
                if( $rowCount === 0){
                    $_SESSION = [];
                    if(session_status() === PHP_SESSION_ACTIVE){
                        session_destroy();
                    }
                    header('location: login');
                    exit;

                } else if($rowCount == 1){
                    $row = mysqli_fetch_array($result, MYSQLI_ASSOC);
                
                        // Retrieve individual field value

                        $id = $row["id"];
                        $fname = $row['fname'];
                        $lname = $row['lname'];
                        $email = $row['email'];
                        $phone = $row['phone'];
                        $country= $row['country'];

                        $deposit = $row['deposit']; 
                        $profit =$row['profit'];
                        $bonus = $row['bonus'];
                        $ref_bonus =$row["ref_bonus"]; 
                        $ref_code =$row["ref_code"]; 
                        $crypto_btc =$row["crypto_btc"]; 
                        $message =$row["message"]; 
                        $ip_addr =$row["ip_addr"]; 
                        $avatar = $row["avatar"];
                        $verif_complete = $row["verif_complete"];
                        $verif_status = $row["verif_status"];

                        $_SESSION['fname'] = $fname;

                        if($verif_complete == 'yes') {
                            $_SESSION['verified'] = true;
                        }
                        
                    

                        
                }
            } else{
                echo "email doest exit";
            }

            // Close statement
            mysqli_stmt_close($stmt);
        }
   
?>    