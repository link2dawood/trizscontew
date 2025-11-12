<?php

if (!empty($_GET['id'])) {
 
foreach(glob('../../bundle/db/config.php') as $config){include_once $config;};
    
    // Prepare a delete statement
    $sql = "DELETE FROM users WHERE id = ?";

    // Set parameters
    $id = trim($_GET["id"]);
    
    $stmt = mysqli_stmt_init($dbconnected);
    if($stmt = mysqli_prepare($dbconnected, $sql)){
        // Bind variables to the prepared statement as parameters
        mysqli_stmt_bind_param($stmt, "i", $id);
            
        // Attempt to execute the prepared statement
        if(mysqli_stmt_execute($stmt)){
            // Records deleted successfully. Redirect to landing page
            header("location: ../registered-users");
            exit();
        } else{
            echo "Oops! Something went wrong. Please try again later.";
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
