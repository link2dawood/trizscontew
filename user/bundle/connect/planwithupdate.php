<?php
require_once __DIR__ . '/../db/config.php';


$id = $_POST['id'];
$amount = $_POST['amount'];
$token = $_POST['token'];
$withdrawn = 'withdrawn';




// INSERT STATEMENT
$sql = "UPDATE plan SET roi=? WHERE token=?";

$stmt = mysqli_stmt_init($dbconnected);
if($stmt = mysqli_prepare($dbconnected, $sql)){
   // Bind variables to the prepared statement as parameters
   mysqli_stmt_bind_param($stmt, "ss", $withdrawn, $token);

  // Attempt to execute the prepared statement
  if(mysqli_stmt_execute($stmt)){
    $sql = "UPDATE users SET crypto_btc=? WHERE id=?";
    $stmt = mysqli_stmt_init($dbconnected);

    if($stmt = mysqli_prepare($dbconnected, $sql)){

      // Bind variables to the prepared statement as parameters
      mysqli_stmt_bind_param($stmt, "si", $amount, $id);

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

?>

