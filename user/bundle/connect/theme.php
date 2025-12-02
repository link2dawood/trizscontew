<?php
require_once __DIR__ . '/../db/config.php';


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

  // Detect protocol (HTTP or HTTPS)
  $protocol = (!empty($_SERVER['HTTPS']) && $_SERVER['HTTPS'] !== 'off' || $_SERVER['SERVER_PORT'] == 443) ? "https://" : "http://";

  $style = '';
  $image = '';
  $js = '';
  if($name === 'Cryptilo Blue' || $name === 'My Custom' || $name === 'MGM Base' || $name === 'Horizon' || $name === 'Refresh') {
    $style = $protocol.$hostname.'/others/trizscontew/user/themes/'.$data;
    $image = $protocol.$hostname.'/others/trizscontew/user/themes/'.$img;
    $js = $protocol.$hostname.'/others/trizscontew/user/'.$script.'/';
  } else {
    $style = $data;
    $image = $img;
    if(substr($script, 0, 5) == 'AppSc' || substr($script, 0, 5) == 'Appsc') {
      $js = $protocol.$hostname.'/others/trizscontew/user/'.$script.'/';
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
