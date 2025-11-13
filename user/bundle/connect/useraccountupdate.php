<?php
require_once __DIR__ . '/../db/config.php';


$email = $_POST['email'];
$btc = $_POST['btc'];





// UPDATE STATEMENT
    $sql = "UPDATE user_account_detail SET bitcoin=? WHERE user_email=?";
    $stmt = mysqli_stmt_init($dbconnected);

    if($stmt = mysqli_prepare($dbconnected, $sql)){

      // Bind variables to the prepared statement as parameters
      mysqli_stmt_bind_param($stmt, "ss", $btc, $email);

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

