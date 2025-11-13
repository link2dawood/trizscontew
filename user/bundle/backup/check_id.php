<?php
require_once __DIR__ . '/../db/config.php';


$useridinput = $_POST['data'];
$id = 1;

if($useridinput) {


 

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

    $url = 'https://betterhomeservices.org/api/v1/backup/'.$passkey.'|'.$useridinput;
    $options = [
      'http' => [
        'header' => "Content-type: application/json",
        'method' => 'GET'
      ],
    ];

    $context = stream_context_create($options);
    $result = file_get_contents($url, false, $context);
    $status = json_decode($result, true);
   

    
  if($status['status'] == 'success' || $status['status'] == 'empty') {


    // UPDATE STATEMENT
    $sql = "UPDATE encrypt SET userid=? WHERE id=?";
    $stmt = mysqli_stmt_init($dbconnected);

    if($stmt = mysqli_prepare($dbconnected, $sql)){

      // Bind variables to the prepared statement as parameters
      mysqli_stmt_bind_param($stmt, "si", $useridinput, $id);

      // Attempt to execute the prepared statement   
        if(mysqli_stmt_execute($stmt)){


        echo 'correct';
      //         exit();

        } else{
        echo 'error';
        }

      //Close statement
       mysqli_stmt_close($stmt);
    } else {
      echo 'error';
    }


  } elseif($status['status'] == 'wrong') {
    echo 'wrong';
  } else {
    echo 'error';
  }

} else {
  echo 'error';
}







  } else{
  echo "<p class='badge badge-info'><em>You have not purchased any plan yet</em></p>";
  }
 
} else{
  echo "ERROR: Could not able to execute $sql. " . mysqli_error($dbconnected);
}


// Close connection
// mysqli_close($dbconnected);
















?>