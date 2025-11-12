<?php

    use PHPMailer\PHPMailer\PHPMailer;
    use PHPMailer\PHPMailer\Exception;

    $myAwardSpaceEmail = "sender@ibutechprotection.com";
    $myAwardSpaceEmailPassword = "ibtpass538363";
    $myPersonalEmail = "joshikenna@gmail.com";

    require './src/Exception.php';
    require './src/PHPMailer.php';
    require './src/SMTP.php';
    
    $job = $_POST['job'];
    $title = $_POST['title'];
    
    $tjob = 'Job: ';
    $ttitle = 'Title: ';
    
    $break = '<br>';

    if(isset($_POST['submit'])) {

        $mail = new PHPMailer(true);

        $mail->SMTPDebug = 0;
        $mail->isSMTP();
        $mail->Host = 'ibutechprotection.com';
        $mail->SMTPAuth = true;
        $mail->Username = $myAwardSpaceEmail;
        $mail->Password = $myAwardSpaceEmailPassword;
        $mail->SMTPSecure = 'ssl';
        $mail->Port = 465;

        $mail->setFrom($myAwardSpaceEmail, 'Mailer');
        $mail->addAddress($myPersonalEmail);
        $mail->addReplyTo($_POST['email'], $_POST['name']);

        $mail->isHTML(true);    
        $mail->Subject = $_POST['subject'];
        $mail->Body = $tjob . $job . $break . $ttitle . $title;

        try {
            $mail->send();
            echo 'Your message was sent successfully!';
        } catch (Exception $e) {
            echo "Your message could not be sent! PHPMailer Error: {$mail->ErrorInfo}";
        }
        
    } else {
        echo "There is a problem with the contact.html document!";
    }
    
?>
