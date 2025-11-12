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



// UPDATE STATEMENT
    $sql = "UPDATE user_account_detail SET bank_name=?, account_name=?, account_number=?, routing_number=?, ethereum=? WHERE user_email=?";
    $stmt = mysqli_stmt_init($dbconnected);

    if($stmt = mysqli_prepare($dbconnected, $sql)){

      // Bind variables to the prepared statement as parameters
      mysqli_stmt_bind_param($stmt, "ssssss", $bank_name, $account_name, $account_number, $routing_number, $ethereum, $useremail);

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
      echo 'fail';
    }
  

?>

