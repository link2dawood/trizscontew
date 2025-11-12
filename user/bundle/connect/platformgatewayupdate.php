<?php

foreach (glob("../db/config.php") as $config){include_once($config);}


$id = $_POST['id'];
$coinpayments = $_POST['coinpayments'];
$flutterwave = $_POST['flutterwave'];
$coingate = $_POST['coingate'];


// UPDATE STATEMENT
    $sql = "UPDATE platform SET coinpayments=?, flutterwave=?, coingate=?  WHERE id=?";
    $stmt = mysqli_stmt_init($dbconnected);

    if($stmt = mysqli_prepare($dbconnected, $sql)){

      // Bind variables to the prepared statement as parameters
      mysqli_stmt_bind_param($stmt, "sssi", $coinpayments, $flutterwave, $coingate, $id);

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
      echo 'error';
    }
  

?>

