<?php
 session_start();
if(isset($_SESSION["loggedin"]) || $_SESSION["loggedin"] == true){  
  // Include config file
    foreach (glob('../../bundle/db/config.php') as $config){include_once $config;}

    if (isset($_POST['update'])) {
    
   $id = trim($_POST['id']);     
   $roi = trim($_POST['roi']);
   $progression = trim($_POST['progression']);
   $status = trim($_POST['status']);

    $sql = "UPDATE plan SET roi = ?, progression=?, status =? WHERE id = ?";
        
        $stmt = mysqli_stmt_init($dbconnected);
        if($stmt = mysqli_prepare($dbconnected, $sql)){
            // Bind variables to the prepared statement as parameters
            mysqli_stmt_bind_param($stmt, "sssi", $roi, $progression, $status, $id);
            
            // Set parameters
           $id = $id;
            
            // Attempt to execute the prepared statement
            if(mysqli_stmt_execute($stmt)){
                $_SESSION['status'] = "success";
                $_SESSION['title'] = "Updated";
                $_SESSION['message'] = "Users investment updated";
                 echo "<script>window.open('../running-investment', '_self')</script>";
            exit();

            } else{
              $_SESSION['status'] = "error";
              $_SESSION['title'] = "Error";
              $_SESSION['message'] = "Something went wrong. Please try again later.";
            }

            // Close statement
            mysqli_stmt_close($stmt);
        }
        }
        }else{

            header('location: ../login.php');
        }
    
?>     