<?php

/* Attempt to connect to MySQL database */
$dbconnected = mysqli_connect(DB_SERVER, DB_USERNAME, DB_PASSWORD, DB_NAME);
 
if($dbconnected === false){
    die("ERROR: Could not connect to database. " . mysqli_connect_error());
}

// Attempt select query execution
$sql = "SELECT * FROM referral";
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
