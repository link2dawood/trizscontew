<?php
session_start();

foreach (glob("../db/config.php") as $config){include_once($config);}


$email = $_SESSION['tempemail'];
$password = $_POST['password'];





// UPDATE STATEMENT
    $sql = "UPDATE users SET password=? WHERE email=?";
    $stmt = mysqli_stmt_init($dbconnected);

    if($stmt = mysqli_prepare($dbconnected, $sql)){

      // Bind variables to the prepared statement as parameters
      mysqli_stmt_bind_param($stmt, "ss", $password, $email);

      // Attempt to execute the prepared statement   
        if(mysqli_stmt_execute($stmt)){


        echo 'ok';
  //         exit();

        } else{
        echo 'invalid';
        }

  //Close statement
       mysqli_stmt_close($stmt);
    } else {
      echo 'invalid';
    }
  

?>

