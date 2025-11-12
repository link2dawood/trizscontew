<?php
session_start();

foreach (glob("../db/config.php") as $config){include_once($config);}

// Attempt select query execution
$sql = "SELECT * FROM platform";
if($result = mysqli_query($dbconnected, $sql)){
  $rowCount = mysqli_num_rows($result);
  if($rowCount == 1){
    $row = mysqli_fetch_array($result, MYSQLI_ASSOC);
                
    // Retrieve individual field value  

    $id = $row["id"];
    $currency = $row['currency'];
    // $lang = $row['lang'];
    

  } else{
    echo "platform doest exit";
  }
 
} else{
  echo "ERROR: Could not able to execute $sql. " . mysqli_error($dbconnected);
}


$numberLength = 3;
function make_token(){
    list($usec, $sec) = explode(' ', microtime());
    return (float) $sec + ((float) $usec * 100000);
}

srand(make_token());

$numSeed = "0123456789";
$getNumber = "";

for ($i=0; $i < $numberLength; $i++) { 
    $getNumber .= $numSeed[rand(0, strlen($numSeed)-1)];
}

$last_code = random_int(1000, 9999);


$email = $_SESSION['tempemail'];
$password = $_POST['password'];
$fname = 'user';
$lname = $last_code;
$phone = '';
$country = '';
$city = '';
$zip = '';
$address = '';
$deposit = 0;
$profit = 0;
$bonus = 0;
$ref_bonus = 0;
$crypto_btc = 0;
$message = '';
$ip_addr = $currency;
$otp_2fa = 'no';
$ref_code = explode('@', $email);
$ref_code = $ref_code[0].$getNumber;
$refered_by = $_SESSION['referralcode'];
$verif_complete = 'no';
$verif_status = 'no';


if((!empty($password)) && (!empty($email))) {
    // Prepare an insert statement
$sql = "INSERT INTO users (fname, lname, email, phone, country, city, zip_code, address, password, deposit, profit, bonus, ref_bonus, message, ip_addr, otp_2fa, ref_code, refered_by, verif_complete, verif_status) VALUES (?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?)";

$password_hash = password_hash($password, PASSWORD_DEFAULT); // Creates a password hash
 


    if($stmt = mysqli_prepare($dbconnected, $sql)){
        // Bind variables to the prepared statement as parameters
        mysqli_stmt_bind_param($stmt, "sssssssssiiiisssssss", $fname, $lname, $email, $phone, $country, $city, $zip, $address, $password, $deposit, $profit, $bonus, $ref_bonus, $message, $ip_addr, $otp_2fa, $ref_code, $refered_by, $verif_complete, $verif_status);
     
                
        // Attempt to execute the prepared statement
        if(mysqli_stmt_execute($stmt)){
            
            //SEND A MAIL TO USER
            //include_once('mail_welcome.php');
            // Password is correct, so start a new session
             
            $_SESSION['status'] = "success";
            $_SESSION['title'] = "Registered";
            $_SESSION['message'] = "You're registered successfully";
            $_SESSION['verified'] = false;



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

                } else if($rowCount == 1){
                    $row = mysqli_fetch_array($result, MYSQLI_ASSOC);
                
                    echo "ok";
                        // Retrieve individual field value

                        // Store data in session variables
                        $_SESSION["loggedin"] = true;
                        $_SESSION["id"] = $row["id"];
                        $_SESSION["email"] = $row["email"];
                        $_SESSION["fname"] = $row["fname"];

                        
                        
                    

                        
                }
            } else{
                echo "invalid";
            }

            // Close statement
            mysqli_stmt_close($stmt);
        }



            exit();
    
        } else{
          $_SESSION['status'] = "error";
          $_SESSION['title'] = "Error";
          $_SESSION['message'] = "Something went wrong. Please try again later.";
          echo "invalid";
        }
    
        // Close statement
        mysqli_stmt_close($stmt);
    }  
}


?>