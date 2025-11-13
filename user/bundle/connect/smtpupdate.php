<?php
require_once __DIR__ . '/../db/config.php';


$id = $_POST['id'];
$username = $_POST['username'];
$password = $_POST['password'];
$host = $_POST['host'];
$auth = $_POST['auth'];
$security = $_POST['security'];
$port = $_POST['port'];
$adminemail = $_POST['adminemail'];
$name = $_POST['name'];






// UPDATE STATEMENT
    $sql = "UPDATE smtp SET username=?, password=?, host=?, auth=?, security=?, port=?, adminemail=?, name=?  WHERE id=?";
    $stmt = mysqli_stmt_init($dbconnected);

    if($stmt = mysqli_prepare($dbconnected, $sql)){

      // Bind variables to the prepared statement as parameters
      mysqli_stmt_bind_param($stmt, "ssssssssi", $username, $password, $host, $auth, $security, $port, $adminemail, $name, $id);

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

