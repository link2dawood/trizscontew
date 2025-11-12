<?php

function planStatus(){
 $sql = "UPDATE plan SET status=$status WHERE token='$token'";
         
     $stmt = mysqli_stmt_init($dbconnected);
    if($stmt = mysqli_prepare($dbconnected, $sql)){
        // Bind variables to the prepared statement as parameters
        mysqli_stmt_bind_param($stmt, "ss", $status, $token);
        
        // Attempt to execute the prepared statement
        if(mysqli_stmt_execute($stmt)){
            // Records updated successfully. Redirect to landing page
            $status = "Completed";
        exit();

        } else{
          $status = "Running";
        }
        // Close statement
    mysqli_stmt_close($stmt);
    }
}


// function userTotalAmount(){
// 	 $sql = "UPDATE users SET main_balance=? WHERE id=?";
         
//      $stmt = mysqli_stmt_init($dbconnected);
//     if($stmt = mysqli_prepare($dbconnected, $sql)){
//         // Bind variables to the prepared statement as parameters
//         mysqli_stmt_bind_param($stmt, "si", $status, $id);
        
//         // Attempt to execute the prepared statement
//         if(mysqli_stmt_execute($stmt)){
//             // Records updated successfully. Redirect to landing page
//             $status = "Completed";
//         exit();

//         } else{
//           $status = "Running";
//         }
//         // Close statement
//     mysqli_stmt_close($stmt);
//     }

// }

?>