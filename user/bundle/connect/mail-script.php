<?php
  
            use PHPMailer\PHPMailer\PHPMailer;
            use PHPMailer\PHPMailer\Exception;

            $myPersonalEmail = "";
            $subject = '';
            $msg = '';
    

            require './src/Exception.php';
            require './src/PHPMailer.php';
            require './src/SMTP.php';
            
            require_once __DIR__ . '/../db/config.php';
    
   function sendmail($myPersonalEmail, $subject, $msg) {
       
      require_once __DIR__ . '/../db/config.php';

        $id = 1;
          // Prepare a select statement
          $sql = "SELECT * FROM smtp WHERE id = ?";
          if($stmt = mysqli_prepare($dbconnected, $sql)){
              // Bind variables to the prepared statement as parameters
              mysqli_stmt_bind_param($stmt, "i", $id);
              
              // Set parameters
              $param_id = $id;
              
              // Attempt to execute the prepared statement
              if(mysqli_stmt_execute($stmt)){
                  $result = mysqli_stmt_get_result($stmt);
        
                  if(mysqli_num_rows($result) == 1){
        
                
        
        
                      /* Fetch result row as an associative array. Since the result set
                      contains only one row, we don't need to use while loop */
                      $row = mysqli_fetch_array($result, MYSQLI_ASSOC);
                      
                      // Retrieve individual field value
                      $username = $row['username'];
                      $password = $row['password'];
                      $host = $row['host'];
                      $auth = $row['auth'];
                      $security = $row['security'];
                      $port = $row['port'];
                      $adminemail = $row['adminemail'];
                      echo 'ok';
                    
                
                  } else{
                      echo 'bad url';
                      // URL doesn't contain valid id. Redirect to error page
                     
                      exit();
                  }
                  //Close statement
                    mysqli_stmt_close($stmt);
                  
              } else{
                  echo "Oops! Something went wrong. Please try again later, possibly your query .";
              }
          } else {
              echo 'bad';
          }
               
            //   $myEmail = '';
            //   if($myPersonalEmail == 'admin') {
            //       $myEmail = $adminemail;
            //   } else {
            //       $myEmail = $myPersonalEmail;
            //   };
       
       
       
       $myAwardSpaceEmail = $username;
        $myAwardSpaceEmailPassword = $password;
        $mail = new PHPMailer(true);

        $mail->SMTPDebug = 0;
        $mail->isSMTP();
        $mail->Host = $host;
        $mail->SMTPAuth = $auth;
        $mail->Username = $myAwardSpaceEmail;
        $mail->Password = $myAwardSpaceEmailPassword;
        $mail->SMTPSecure = $security;
        $mail->Port = $port;

        $mail->setFrom($myAwardSpaceEmail, 'Mailer');
        $mail->addAddress($myPersonalEmail);
        $mail->addReplyTo($myAwardSpaceEmail, 'Platform');

        $mail->isHTML(true);    
        $mail->Subject = $subject;
        $mail->Body = $msg;

        try {
            $mail->send();
            // echo 'Your message was sent successfully!';
        } catch (Exception $e) {
            // echo "Your message could not be sent! PHPMailer Error: {$mail->ErrorInfo}";
        }
   }
   
//   sendmail($myPersonalEmail, $subject, $msg);
   
   

    
    

    
    
?>
