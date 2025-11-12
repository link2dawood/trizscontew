<?php
session_start();
foreach (glob("../db/config.php") as $config){include_once($config);}
require '../temp/short_mail.php';

$header = $_POST['header'];
$msg = $_POST['msg'];
$email = $_POST['email'];

// Attempt select query execution
$sql = "SELECT * FROM users";
if($result = mysqli_query($dbconnected, $sql)){
  $rowCount = mysqli_num_rows($result);
  if($rowCount > 0){
    $data = array();
    while($row = mysqli_fetch_array($result)){
      $data[] = $row;
    }
      $type = 'user';
      $admin_subject = '';
      $admin_msg = '';

      $myPersonalEmail = $email;
      $subject = $header;
      $meta = '';
      send_short_mail($myPersonalEmail, $subject, $msg, $meta, $admin_subject, $admin_msg, $type, $dbconnected);
      echo 'ok';
    
  } else{
  echo "fail";
  }
 
} else{
  echo "error";
}
// Close connection
mysqli_close($dbconnected);
?>

