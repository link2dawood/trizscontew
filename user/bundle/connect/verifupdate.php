<?php
require_once __DIR__ . '/../db/config.php';
require '../temp/short_mail.php';

$email = $_POST['email'];
$verifcomplete = $_POST['verifcomplete'];
$verifstatus = $_POST['verifstatus'];








// UPDATE STATEMENT
    $sql = "UPDATE users SET verif_status=?, verif_complete=?  WHERE email=?";
    $stmt = mysqli_stmt_init($dbconnected);

    if($stmt = mysqli_prepare($dbconnected, $sql)){

      // Bind variables to the prepared statement as parameters
      mysqli_stmt_bind_param($stmt, "sss", $verifstatus, $verifcomplete, $email);

      // Attempt to execute the prepared statement   
        if(mysqli_stmt_execute($stmt)){


        echo 'successfully added to database';
        if($verifstatus == 'yes') {
          $type = 'admin';
          $admin_subject = 'KYC Approved';
          $admin_msg = 'You approved KYC for account: '.$email;

          $myPersonalEmail = $email;
          $subject = 'KYC Approved';
          $meta = 'Your KYC verification has been approved. There are no restrictions on your account, start growing your portfolio.';
          $msg = 'Your KYC verification has been approved. There are no restrictions on your account, start growing your portfolio.';
          send_short_mail($myPersonalEmail, $subject, $msg, $meta, $admin_subject, $admin_msg, $type, $dbconnected);
        } elseif($verifstatus == 'no') {
          $type = 'admin';
          $admin_subject = 'KYC Rejected';
          $admin_msg = 'You rejected KYC for account: '.$email;

          $myPersonalEmail = $email;
          $subject = 'KYC Rejected';
          $meta = 'Your KYC verification could not be accepted.';
          $msg = 'Your KYC verification could not be accepted. Some/all of the information you provided may not have been valid. Please Go to the verification center and restart your KYC. Remember to use valid documents only.';
          send_short_mail($myPersonalEmail, $subject, $msg, $meta, $admin_subject, $admin_msg, $type, $dbconnected);
        }
  //         exit();

        } else{
        echo 'something went wrong';
        }

  //Close statement
       mysqli_stmt_close($stmt);
    } else {
      echo 'error';
    }
  

?>

