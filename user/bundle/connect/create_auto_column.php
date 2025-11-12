<?php

foreach (glob("../db/config.php") as $config){include_once($config);}

// Attempt select query execution
$sql = "SELECT * FROM encrypt";
if($result = mysqli_query($dbconnected, $sql)){
  $rowCount = mysqli_num_rows($result);
  if($rowCount > 0){
    $data = array();
    while($row = mysqli_fetch_array($result)){
      $data[] = $row;
    }
    $json = json_encode($data);
    $usejson = json_decode($json, true);
    $auto = $usejson['0']['auto'];
    $check = isset($auto);
    if($check == true) {
      // echo "auto exists";
    } else {

      // Attempt select query execution
      $addauto = "ALTER TABLE encrypt ADD auto VARCHAR(5) NOT NULL";
      if($result = mysqli_query($dbconnected, $addauto)){
        echo "Colmun added";
      } else{
        echo "Column not added";
      }



    }
  } else{
  echo "<p class='badge badge-info'><em>You have not purchased any plan yet</em></p>";
  }
 
} else{
  echo "ERROR: Could not able to execute $sql. " . mysqli_error($dbconnected);
}


// Close connection
mysqli_close($dbconnected);
