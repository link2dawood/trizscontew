<?php
session_start();

foreach (glob("../db/config.php") as $config){include_once($config);}

$userid = $_SESSION['id'];
$useremail = $_SESSION['email'];


$bank_name = $_POST['bankname'];
$account_name = $_POST['accname'];
$account_number = $_POST['accnum'];
$routing_number = $_POST['paypalacc'];
$ethereum = $_POST['ethereum'];



// INSERT STATEMENT
$sql = "INSERT INTO user_account_detail (user_id, user_email, bank_name, account_name, account_number, routing_number, ethereum) VALUES (?,?,?,?,?,?,?)";

$stmt = mysqli_stmt_init($dbconnected);
if($stmt = mysqli_prepare($dbconnected, $sql)){
   // Bind variables to the prepared statement as parameters
   mysqli_stmt_bind_param($stmt, "sssssss", $userid, $useremail, $bank_name, $account_name, $account_number, $routing_number, $ethereum);

  // Attempt to execute the prepared statement
 

      // Attempt to execute the prepared statement   
      if(mysqli_stmt_execute($stmt)){


        echo 'ok';
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