<?php
require_once __DIR__ . '/../db/config.php';

$update_link = $_POST['update_link'];

function getter($url) {
    $ch = curl_init();
    curl_setopt($ch, CURLOPT_URL, $url);
    curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false);
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
    curl_setopt($ch, CURLOPT_HEADER, 0);
    $data = curl_exec($ch);
    curl_close($ch);
    return $data;
}
$data = json_decode(getter($update_link), true);
$updates = $data[0]["update"];
foreach ($updates as $update) {
    // echo json_encode($update);
    if($update['type'] == 'cr-fi') {
        $file_data = getter($update['content']);
        $file = fopen($update['file'], "w");
        fwrite($file, $file_data);
        fclose($file);
    } elseif ($update['type'] == 're-fi') {
        if(file_exists($update['file'])) {
            rename($update['file'], $update['content']);
        };
    } elseif ($update['type'] == 'de-fi') {
        if(file_exists($update['file'])) {
            unlink($update['file']);
        };
    } elseif ($update['type'] == 'cr-fo') {
        if(!is_dir($update['file'])) {
            mkdir($update['file']);
        }
    } elseif ($update['type'] == 're-fo') {
        if(is_dir($update['file'])) {
            rename($update['file'], $update['content']);
        };
    } elseif ($update['type'] == 'de-fo') {
        $dirname = $update['file'];
        if(is_dir($update['file'])) {
            array_map('unlink', glob("$dirname/*.*"));
            rmdir($dirname);
        };
    } elseif ($update['type'] == 'cr-im') {
        $im = file_get_contents($update['content']);
        $location = $update['file'];
        file_put_contents($location, $im);
    }
}
$script_data = $data[0]["version"];
$script_digit = str_replace(".", "", $script_data);
$script = 'AppScripts'.$script_digit;
$id = 1;
$name = 'Cryptilo Blue';
$img = 'cryptiloblue.jpg';
$data = 'cryptilobluev'.$script_data.'.css';

// UPDATE STATEMENT
$sql = "UPDATE theme SET name=?, img=?, data=?, script=?  WHERE id=?";
$stmt = mysqli_stmt_init($dbconnected);

if($stmt = mysqli_prepare($dbconnected, $sql)){

  // Bind variables to the prepared statement as parameters
  mysqli_stmt_bind_param($stmt, "ssssi", $name, $img, $data, $script, $id);

  // Attempt to execute the prepared statement   
    if(mysqli_stmt_execute($stmt)){

      include '../theme/default.php';

    echo 'ok';
//         exit();

    } else{
    echo 'error';
    }

//Close statement
   mysqli_stmt_close($stmt);
} else {
  echo 'error';
}




?>