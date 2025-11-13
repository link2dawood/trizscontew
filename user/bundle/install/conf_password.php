<?php

$input_password = $_POST['password'];
require_once __DIR__ . '/../db/config.php';
/* Attempt to connect to MySQL database */
$dbconnected = mysqli_connect(DB_SERVER, DB_USERNAME, DB_PASSWORD, DB_NAME);
 
if($dbconnected === false){
    die("ERROR: Could not connect to database. " . mysqli_connect_error());
}

// Attempt select query execution
$sql = "SELECT * FROM admin";
if($result = mysqli_query($dbconnected, $sql)){
  $rowCount = mysqli_num_rows($result);
  if($rowCount > 0){
    $data = array();
    while($row = mysqli_fetch_array($result)){
      $data[] = $row;
    }
    $admin_password = $data[0]['password'];
    if($input_password == $admin_password) {
        echo 'ok';
    } else {
        echo 'wrong';
    }
  } else{
  echo "error";
  }
 
} else{
  echo "ERROR: Could not able to execute $sql. " . mysqli_error($dbconnected);
}


// Close connection
mysqli_close($dbconnected);
