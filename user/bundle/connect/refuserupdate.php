<?php

foreach (glob("../db/config.php") as $config){include_once($config);}


$goref = $_POST['goref'];
$email = $_POST['email'];
$refemail = $_POST['refemail'];
$refusername = $_POST['refusername'];
$amount = $_POST['amount'];
$asset = $_POST['asset'];
$coin = $_POST['coin'];
$balance = $_POST['balance'];
$date = $_POST['date'];



if($goref == 'yes') {
  
  // INSERT STATEMENT
  $sql = "INSERT INTO referral (email, refuser, refemail, amount, asset, date) VALUES (?,?, ?,?, ?,?)";

  $stmt = mysqli_stmt_init($dbconnected);
  if($stmt = mysqli_prepare($dbconnected, $sql)){
    // Bind variables to the prepared statement as parameters
    mysqli_stmt_bind_param($stmt, "ssssss", $refemail, $refusername, $email, $amount, $coin, $date);

    // Attempt to execute the prepared statement
    if(mysqli_stmt_execute($stmt)){
      $sql = "UPDATE users SET $asset=? WHERE email=?";
      $stmt = mysqli_stmt_init($dbconnected);

      if($stmt = mysqli_prepare($dbconnected, $sql)){

        // Bind variables to the prepared statement as parameters
        mysqli_stmt_bind_param($stmt, "ss", $balance, $refemail);

        // Attempt to execute the prepared statement   
          if(mysqli_stmt_execute($stmt)){


          echo 'successfully added to database';
          //         exit();

          } else{
          echo 'something went wrong';
          }

      //Close statement
        mysqli_stmt_close($stmt);
      }
    }
  } else {
          echo 'something went wrong';
  }

}

?>

