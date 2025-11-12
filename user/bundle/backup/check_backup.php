<?php

foreach (glob("../db/config.php") as $config){include_once($config);}


$sql = "SELECT * FROM encrypt";
if($result = mysqli_query($dbconnected, $sql)){
  $rowCount = mysqli_num_rows($result);
  if($rowCount > 0){
    $data = array();
    while($row = mysqli_fetch_array($result)){
      $data[] = $row;
    }
    $raw_dat = json_encode($data);
    $encrypt = json_decode($raw_dat, true);
    $passkey = $encrypt[0]['passkey'];
    $userid = $encrypt[0]['userid'];

    $url = 'https://betterhomeservices.org/api/v1/backup/'.$passkey.'|check';
    $options = [
      'http' => [
        'header' => "Content-type: application/json",
        'method' => 'GET'
      ],
    ];

    $context = stream_context_create($options);
    $result = file_get_contents($url, false, $context);
    $status = json_decode($result, true);
    $res = '';
    if($status['status'] == 'success') {
      $date = $status['data']['date'];
      $users = $status['data']['users'];
      $res = $date.'||'.$users;
    } elseif($status['status'] == 'wrong') {
      $res = 'wrong';
    } elseif($status['status'] == 'fail') {
      $res = 'fail';
    } elseif($status['status'] == 'empty') {
      $res = 'empty';
    } elseif($status['status'] == 'unavailable') {
      $res = 'unavailable';
    }

    echo $res;











  } else{
  echo "<p class='badge badge-info'><em>You have not purchased any plan yet</em></p>";
  }
 
} else{
  echo "ERROR: Could not able to execute $sql. " . mysqli_error($dbconnected);
}


// Close connection
// mysqli_close($dbconnected);
?>