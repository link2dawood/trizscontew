<?php

foreach (glob("../db/config.php") as $config){include_once($config);}

// Attempt select query execution
$sql = "SELECT * FROM platform";
if($result = mysqli_query($dbconnected, $sql)){
  $rowCount = mysqli_num_rows($result);
  if($rowCount > 0){
    $data = array();
    while($row = mysqli_fetch_array($result)){
      $data[] = $row;
    }
    $json = json_encode($data);
    $usejson = json_decode($json, true);
    $icon = $usejson['0']['icon'];
    $check = isset($icon);
    if($check == true) {
      // echo "icon exists";
    } else {

      // Attempt select query execution
      $addicon = "ALTER TABLE platform ADD icon VARCHAR(100) NOT NULL";
      if($result = mysqli_query($dbconnected, $addicon)){
        echo "Colmun added";
      } else{
        echo "Column not added";
      }

      $id = 1;
      $location = 'upload/logo.svg';
      $sql = "UPDATE platform SET icon=? WHERE id=?";
                $stmt = mysqli_stmt_init($dbconnected);

                if($stmt = mysqli_prepare($dbconnected, $sql)){

                // Bind variables to the prepared statement as parameters
                mysqli_stmt_bind_param($stmt, "si", $location, $id);

                // Attempt to execute the prepared statement   
                    if(mysqli_stmt_execute($stmt)){


                    // echo 'ok';
                    //         exit();

                    } else{
                    // echo 'failed';
                    }

                //Close statement
                mysqli_stmt_close($stmt);
                } else {
                // echo 'failed';
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
