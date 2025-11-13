<?php
session_start();
require_once __DIR__ . '/../db/config.php';
 
$doc = $_FILES['file_'];

$filename = time().'5';
$id = 1;

ini_set("upload_max_filesize", "5M");

if(isset($_FILES['file_'])) {
    $allowed = array('jpg', 'jpeg', 'png');
    if($filename !== '') {
        $get_extension = pathinfo($_FILES['file_']['name'], PATHINFO_EXTENSION);
        $get_extension = strtolower($get_extension);
        $location = 'upload/'.$filename.'.'.$get_extension;
        
        if(in_array($get_extension, $allowed)) {
            if(move_uploaded_file($_FILES['file_']['tmp_name'], $location)) {


                $sql = "UPDATE platform SET icon=? WHERE id=?";
                $stmt = mysqli_stmt_init($dbconnected);

                if($stmt = mysqli_prepare($dbconnected, $sql)){

                // Bind variables to the prepared statement as parameters
                mysqli_stmt_bind_param($stmt, "si", $location, $id);

                // Attempt to execute the prepared statement   
                    if(mysqli_stmt_execute($stmt)){


                    echo 'ok';
                    //         exit();

                    } else{
                    echo 'failed';
                    }

                //Close statement
                mysqli_stmt_close($stmt);
                } else {
                echo 'failed';
                }


            


            } else {
                echo 'failed';
            }
        } else {
            echo 'invalid-format';
        }


    } else {
        echo 'invalid-name';
    }
}






?>


