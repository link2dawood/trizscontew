<?php
session_start();

require_once __DIR__ . '/../db/config.php';


$userid = $_SESSION['id'];
$useremail = $_SESSION['email'];

$id = $_POST['id'];
$paycoin = $_POST['paycoin'];
$getcoin = $_POST['getcoin'];
$payamount = $_POST['payamount'];
$getamount = $_POST['getamount'];


//Get Crypto
$getcoin = strtolower($getcoin);
$pay_crypto_column = 'crypto_'.$paycoin;
$get_crypto_column = 'crypto_'.$getcoin;
$current_get_value = '';

// Prepare a select statement
$sql = "SELECT * FROM users WHERE email = ?";
    
$stmt = mysqli_stmt_init($dbconnected);

if($stmt = mysqli_prepare($dbconnected, $sql)){
    // Bind variables to the prepared statement as parameters
    mysqli_stmt_bind_param($stmt, "s", $useremail);
    
    // Attempt to execute the prepared statement
    if(mysqli_stmt_execute($stmt)){
        $result = mysqli_stmt_get_result($stmt);
        
        /* store result */
        mysqli_stmt_store_result($stmt);
        
        // Check database if data exit and store the count in a variable.
        $rowCount = mysqli_num_rows($result); 
        if( $rowCount == 1){

            

          $row = mysqli_fetch_array($result, MYSQLI_ASSOC);
          if(isset($row[$get_crypto_column])) {
            $current_get_value = $row[$get_crypto_column];
          } else {
            $add_column = "ALTER TABLE users ADD $get_crypto_column VARCHAR(50) NULL";
            if($result = mysqli_query($dbconnected, $add_column)){
              // echo 'column added';
              $current_get_value = 0;
            }
          }

        } else {
          
            
           
        }
    } 
    else{
      //   echo "Oops! Something went wrong. Please try again later.";
    }

    // Close statement
    mysqli_stmt_close($stmt);
}

$new_get_value = $current_get_value + $getamount;

  
// UPDATE STATEMENT
$sql = "UPDATE users SET $get_crypto_column=?, $pay_crypto_column=? WHERE email=?";
    $stmt = mysqli_stmt_init($dbconnected);

    if($stmt = mysqli_prepare($dbconnected, $sql)){

      // Bind variables to the prepared statement as parameters
      mysqli_stmt_bind_param($stmt, "sss", $new_get_value, $payamount, $useremail);

      // Attempt to execute the prepared statement   
        if(mysqli_stmt_execute($stmt)){


        echo 'ok';
  //         exit();

        } else{
        echo 'fail';
        }

  //Close statement
       mysqli_stmt_close($stmt);
    } else {
      echo 'error';
    }
  

?>

