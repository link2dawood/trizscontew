<?php
session_start();
require_once __DIR__ . '/../db/config.php';
require '../temp/short_mail.php';

$header = $_POST['header'];
$msg = $_POST['msg'];

// Attempt select query execution
$sql = "SELECT * FROM users";
if($result = mysqli_query($dbconnected, $sql)){
  $rowCount = mysqli_num_rows($result);
  if($rowCount > 0){
    $data = array();
    while($row = mysqli_fetch_array($result)){
      $data[] = $row;
    }
      $emails = [];
      foreach($data as $item) {
            $emails[] = $item['email'];
      }

      $type = 'user';
      $admin_subject = '';
      $admin_msg = '';

      $myPersonalEmail = $emails;
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

