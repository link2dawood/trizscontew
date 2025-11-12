<?php
session_start();

if (!empty($_GET['token'])) {
 
foreach(glob('../../bundle/db/config.php') as $config){include_once $config;};
    
    // Prepare a delete statement
    $sql = "DELETE FROM support WHERE token = ?";

    // Set parameters
    $token = trim($_GET["token"]);
    
    $stmt = mysqli_stmt_init($dbconnected);
    if($stmt = mysqli_prepare($dbconnected, $sql)){
        // Bind variables to the prepared statement as parameters
        mysqli_stmt_bind_param($stmt, "s", $token);
            
        // Attempt to execute the prepared statement
        if(mysqli_stmt_execute($stmt)){
            // Records deleted successfully. Redirect to landing page
                $_SESSION['status'] = "success";
                $_SESSION['title'] = "Deleted";
                $_SESSION['message'] = "User support ticket deleted successfully";
                 echo "<script>window.open('../support-tickets', '_self')</script>";
            exit();

            } else{
              $_SESSION['status'] = "error";
              $_SESSION['title'] = "Error";
              $_SESSION['message'] = "Something went wrong. Please try again later.";
        }

         // Close statement
    mysqli_stmt_close($stmt);
    }
     
   
    
    // Close connection
    mysqli_close($dbconnected);
} else{
      
        // URL doesn't contain id parameter. Redirect to error page
        header("location: ../admin-dashboard");
        exit();
    }

?>
