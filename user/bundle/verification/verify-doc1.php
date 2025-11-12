<?php
session_start();

foreach (glob("../db/config.php") as $config){include_once($config);}

$doc1 = $_FILES['front_'];

$email = $_SESSION["email"];
$filename = time();

ini_set("upload_max_filesize", "5M");

if(isset($_FILES['front_'])) {
    $allowed = array('jpg', 'jpeg', 'png');
    if($filename !== '') {
        $get_extension = pathinfo($_FILES['front_']['name'], PATHINFO_EXTENSION);
        $get_extension = strtolower($get_extension);
        $location = 'uploads/'.$filename.'.'.$get_extension;
        
        if(in_array($get_extension, $allowed)) {
            if(move_uploaded_file($_FILES['front_']['tmp_name'], $location)) {


                $sql = "UPDATE users SET first_doc=? WHERE email=?";
                $stmt = mysqli_stmt_init($dbconnected);

                if($stmt = mysqli_prepare($dbconnected, $sql)){

                // Bind variables to the prepared statement as parameters
                mysqli_stmt_bind_param($stmt, "ss", $location, $email);

                // Attempt to execute the prepared statement   
                    if(mysqli_stmt_execute($stmt)){


                    echo 'ok';
                    //         exit();

                    } else{
                    echo 'failed2';
                    }

                //Close statement
                mysqli_stmt_close($stmt);
                } else {
                echo 'failed1';
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


