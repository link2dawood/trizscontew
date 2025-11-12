<?php

foreach (glob("../db/config.php") as $config){include_once($config);}


$token = $_POST['token'];


 
// DELETE STATEMENT
     // Prepare a delete statement
     $sql = "DELETE FROM deposit WHERE upload = ?";

     $stmt = mysqli_stmt_init($dbconnected);
     if($stmt = mysqli_prepare($dbconnected, $sql)){
         // Bind variables to the prepared statement as parameters
         mysqli_stmt_bind_param($stmt, "s", $token);
             
         // Attempt to execute the prepared statement
         if(mysqli_stmt_execute($stmt)){
             // Records deleted successfully. Redirect to landing page
            //  header("location: ../registered-users");
             exit();
         } else{
             echo "Oops! Something went wrong. Please try again later.";
         }
 
          // Close statement
         mysqli_stmt_close($stmt);
     }
  

?>

