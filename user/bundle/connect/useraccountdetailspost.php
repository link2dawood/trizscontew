<?php
require_once __DIR__ . '/../db/config.php';


$email = $_POST['email'];
$bank_name = $_POST['bankname'];
$account_name = $_POST['accountname'];
$account_number = $_POST['accountnumber'];
$routing_number = $_POST['routingnumber'];
$bitcoin = $_POST['btc'];
$ethereum = $_POST['eth'];
$litecoin = $_POST['ltc'];



// INSERT STATEMENT
$sql = "INSERT INTO user_account_detail (user_email, bank_name, account_name, account_number, routing_number, bitcoin, ethereum, litecoin) VALUES (?,?, ?, ?,?,?,?,?)";

$stmt = mysqli_stmt_init($dbconnected);
if($stmt = mysqli_prepare($dbconnected, $sql)){
   // Bind variables to the prepared statement as parameters
   mysqli_stmt_bind_param($stmt, "ssssssss", $email, $bank_name, $account_name, $account_number, $routing_number, $bitcoin, $ethereum, $litecoin);

  // Attempt to execute the prepared statement
 

      // Attempt to execute the prepared statement   
      if(mysqli_stmt_execute($stmt)){


        echo 'successfully added to database';
  //         exit();

        } else{
        echo 'something went wrong';
        }

  //Close statement
       mysqli_stmt_close($stmt);
   
 
} else {
        echo 'something went wrong';
}

?>