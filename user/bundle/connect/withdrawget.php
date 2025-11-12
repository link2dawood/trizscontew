<?php

foreach (glob("../db/config.php") as $config){include_once($config);}

// Attempt select query execution
$sql = "SELECT * FROM withdrawal_request";
if($result = mysqli_query($dbconnected, $sql)){
  $rowCount = mysqli_num_rows($result);
  if($rowCount > 0){
    $data = array();
    while($row = mysqli_fetch_array($result)){
      $data[] = $row;
    }
    print(json_encode($data));
  } else{
  echo "<p class='badge badge-info'><em>You have not purchased any plan yet</em></p>";
  }
 
} else{
  echo "ERROR: Could not able to execute $sql. " . mysqli_error($dbconnected);
}


// Close connection
mysqli_close($dbconnected);
