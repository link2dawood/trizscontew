<?php

foreach (glob("../db/config.php") as $config){include_once($config);}


$id = $_POST['id'];
$investment = $_POST['investment'];
$loan = $_POST['loan'];
$buysell = $_POST['buysell'];
$p2psend = $_POST['p2psend'];






// UPDATE STATEMENT
    $sql = "UPDATE platform SET investment=?, loan=?, buysell=?, p2psend=?  WHERE id=?";
    $stmt = mysqli_stmt_init($dbconnected);

    if($stmt = mysqli_prepare($dbconnected, $sql)){

      // Bind variables to the prepared statement as parameters
      mysqli_stmt_bind_param($stmt, "ssssi", $investment, $loan, $buysell, $p2psend, $id);

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

