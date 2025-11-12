<?php

        session_start();
 
    // Check if the user is logged in, if not then redirect him to login page
    if(isset($_SESSION["loggedin"]) || $_SESSION["loggedin"] == true){
        //header("location: login");
       // exit;

        //include '../config.php';
        foreach(glob("../../bundle/db/config.php") as $config){include $config;}                 


                    if(isset($_POST['submit'])){      
  

            // ------------------ Image validation ------------------

                $file =($_FILES['file']) ; // Checks and declares the file the file type 
                $img_name = $_FILES['file']['name']; // The name of uploaded image
                $tmp_name = $_FILES['file']['tmp_name']; // temporary storage name of the file
                $size = $_FILES['file']['size']; // size of the file to upload
                $error = $_FILES['file']['error']; // error of the file to be uploaded

                //explode from punctuation
                //explode function basically splits a string into separate arrays 
                //takes in two argurements, first is the point to split, second is the file to explode
                $tmpExtension = explode('.', $img_name);
                $fileExtension = strtolower(end($tmpExtension));

                //allowed extensions
                $isAllowed = array('jpg','jpeg','png','pdf',); // sets of allowwable image formats
                    if (!empty($fileExtension)) {      
                      if(in_array($fileExtension, $isAllowed)){
                        if ($error === 0) {
                            if ($size<300 * 1024) {
                                $newFileName = uniqid('', true).'.'.$fileExtension;
                                $fileDestination = "../uploads/".$newFileName;
                                move_uploaded_file($tmp_name, $fileDestination);

                                 //$date = date("Y-m-d H:m:s A", strtotime("now"));
                                   
                        }else{
                                //echo "sorry your file size is too big";
                                 $img_err = "sorry your file size is too big";
                        }
                        }else{
                            
                                $img_err = "There was an error please try again";
                        }
                        }else{
                            
                                $img_err = "Sorry your file type is not accepted";
                        } 
                        }else{
                                $img_err = "Please Select a file";

                        }

                        
                    //}  


         $session_id = trim($_POST['id']);
         $session_email = trim($_POST['email']);
         $deposit_amount = trim($_POST['amount']);
         $payment_mode = trim($_POST['waltype']);
         $status = "Pending";

        if (empty($session_id)) {
            $session_id_err = "User id fetch error";
        }
        if (empty($session_email)) {
            $session_email_err = "Email identification error";
        }
        if (empty($deposit_amount)) {
            $deposit_amount_err = "No amount specified";
        }
    // Check input errors before inserting in database
    if(empty($img_err) && empty($session_id_err) && empty($session_email_err) && empty($deposit_amount_err)){
       
        // Prepare an insert statement
        $sql = "INSERT INTO deposit (email, amount, payment_mode, status, upload) VALUES (?, ?, ?, ?,?)";

         $stmt = mysqli_stmt_init($dbconnected);
        if($stmt = mysqli_prepare($dbconnected, $sql)){
            // Bind variables to the prepared statement as parameters
            mysqli_stmt_bind_param($stmt, "sssss", $session_email, $deposit_amount, $payment_mode, $status, $newFileName);
           
            // Attempt to execute the prepared statement
            if(mysqli_stmt_execute($stmt)){

                $_SESSION['status'] = "success";
                $_SESSION['title'] = "Deposited";
                $_SESSION['message'] = "Your deposite was successful";
                echo "<script>window.open('../../deposit', '_self')</script>";

               //header("location: index.php");
                exit();
            } else{
                echo "Something went wrong. Please try again later.";
            }
        }
         
        //Close statement
       mysqli_stmt_close($stmt);
    }
    
    // Close connection
    mysqli_close($dbconnected);

    }
}

else{
        header('location:\bitmine\error.php');
    }
   

     
    ?>
    