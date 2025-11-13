<?php
require_once __DIR__ . '/../db/config.php';

$version = $_POST['version'];

$script_digit = str_replace(".", "", $version);
$script = 'AppScripts'.$script_digit;
$id = 1;

// UPDATE STATEMENT
$sql = "UPDATE theme SET script=?  WHERE id=?";
$stmt = mysqli_stmt_init($dbconnected);

if($stmt = mysqli_prepare($dbconnected, $sql)){

  // Bind variables to the prepared statement as parameters
  mysqli_stmt_bind_param($stmt, "si", $script, $id);

  // Attempt to execute the prepared statement   
    if(mysqli_stmt_execute($stmt)){


    echo 'ok';
//         exit();

    } else{
    echo 'error';
    }

//Close statement
   mysqli_stmt_close($stmt);
} else {
  echo 'error';
}




?>