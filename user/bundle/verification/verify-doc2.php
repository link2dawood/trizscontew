<?php
session_start();

foreach (glob("../db/config.php") as $config){include_once($config);}

$doc2 = $_FILES['back_'];

$email = $_SESSION["email"];
$timename = time();
$filename = $timename.'5';

ini_set("upload_max_filesize", "5M");

if(isset($_FILES['back_'])) {
    $allowed = array('jpg', 'jpeg', 'png');
    if($filename !== '') {
        $get_extension = pathinfo($_FILES['back_']['name'], PATHINFO_EXTENSION);
        $get_extension = strtolower($get_extension);
        $location = 'uploads/'.$filename.'.'.$get_extension;
        
        if(in_array($get_extension, $allowed)) {
            if(move_uploaded_file($_FILES['back_']['tmp_name'], $location)) {


                $sql = "UPDATE users SET second_doc=? WHERE email=?";
                $stmt = mysqli_stmt_init($dbconnected);

                if($stmt = mysqli_prepare($dbconnected, $sql)){

                // Bind variables to the prepared statement as parameters
                mysqli_stmt_bind_param($stmt, "ss", $location, $email);

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


