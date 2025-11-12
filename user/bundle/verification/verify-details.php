<?php
session_start();

foreach (glob("../db/config.php") as $config){include_once($config);}
require '../temp/short_mail.php';
 

$firstname = $_POST['firstname'];
$platform = $_POST['platform'];
$lastname = $_POST['lastname'];
$middlename = $_POST['middlename'];
$age = $_POST['age'];
$dob = $_POST['dob'];
$residency = $_POST['residency'];
$nationality = $_POST['nationality'];
$issuecountry = $_POST['issuecountry'];
$address = $_POST['address'];
$city = $_POST['city'];
$postal = $_POST['postal'];
$idtype = $_POST['idtype'];
$verif_complete = 'yes';


$email = $_SESSION["email"];

$sql = "UPDATE users SET fname=?, lname=?, mname=?, age=?, dob=?, country=?, nationality=?, issued_country=?, address=?, city=?, zip_code=?, doc_type=?, verif_complete=? WHERE email=?";
    $stmt = mysqli_stmt_init($dbconnected);

    if($stmt = mysqli_prepare($dbconnected, $sql)){

      // Bind variables to the prepared statement as parameters
      mysqli_stmt_bind_param($stmt, "ssssssssssssss", $firstname, $lastname, $middlename, $age, $dob, $residency, $nationality, $issuecountry, $address, $city, $postal, $idtype, $verif_complete, $email);

      // Attempt to execute the prepared statement   
        if(mysqli_stmt_execute($stmt)){
            $_SESSION['verified'] = true;

        echo 'ok';
        $type = 'user';
        $admin_subject = '';
        $admin_msg = '';

        $myPersonalEmail = $email;
        $subject = 'KYC processing';
        $meta = 'Thank you for completing your KYC verification.';
        $msg = 'Thank you for completing your KYC. It will take 1 to 3 business days to review the information you submitted.';
        send_short_mail($myPersonalEmail, $subject, $msg, $meta, $admin_subject, $admin_msg, $type, $dbconnected);

        $myPersonalEmail = $email;
        $subject = $firstname.' welcome onboard';
        $meta = 'We are delighted to welcome you to the '.$platform.' community!';
        $msg = 'We are delighted to welcome you to the '.$platform.' community! We hope that your journey here will be both rewarding and enlightening.';
        send_short_mail($myPersonalEmail, $subject, $msg, $meta, $admin_subject, $admin_msg, $type, $dbconnected);
  //         exit();

        } else{
        echo 'invalid';
        }

  //Close statement
       mysqli_stmt_close($stmt);
    } else {
      echo 'invalid';
    }



?>


