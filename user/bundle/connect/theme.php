<?php

foreach (glob("bundle/db/config.php") as $config){include_once($config);}

// Attempt select query execution
$sql = "SELECT * FROM theme";
if($result = mysqli_query($dbconnected, $sql)){
  $rowCount = mysqli_num_rows($result);
  if($rowCount == 1){
    $row = mysqli_fetch_array($result, MYSQLI_ASSOC);
                
    // Retrieve individual field value  

    $id = $row["id"];
    $name = $row["name"];
    $img = $row["img"];
    $data = $row["data"];
    $script = $row["script"];
    $hostname = getenv('HTTP_HOST');
  $style = '';
  $image = '';
  $js = '';
  if($name === 'Cryptilo Blue' || $name === 'My Custom' || $name === 'MGM Base' || $name === 'Horizon' || $name === 'Refresh') {
    $style = 'https://'.$hostname.'/user/themes/'.$data;
    $image = 'https://'.$hostname.'/user/themes/'.$img;
    $js = 'https://'.$hostname.'/user/'.$script.'/';
  } else {
    $style = $data;
    $image = $img;
    if(substr($script, 0, 5) == 'AppSc' || substr($script, 0, 5) == 'Appsc') {
      $js = 'https://'.$hostname.'/user/'.$script.'/';
    } else {
      $js = $script;
    }
  }

  } else{
    echo "theme doest exit";
  }
 
} else{
  echo "ERROR: Could not able to execute $sql. " . mysqli_error($dbconnected);
}


// Close connection
// mysqli_close($dbconnected);
