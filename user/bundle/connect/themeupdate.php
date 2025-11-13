<?php
require_once __DIR__ . '/../db/config.php';


$id = 1;
$name = $_POST['name'];
$img = $_POST['img'];
$data = $_POST['data'];
$script = $_POST['script'];





// UPDATE STATEMENT
    $sql = "UPDATE theme SET name=?, img=?, data=?, script=?  WHERE id=?";
    $stmt = mysqli_stmt_init($dbconnected);

    if($stmt = mysqli_prepare($dbconnected, $sql)){

      // Bind variables to the prepared statement as parameters
      mysqli_stmt_bind_param($stmt, "ssssi", $name, $img, $data, $script, $id);

      // Attempt to execute the prepared statement   
        if(mysqli_stmt_execute($stmt)){


        echo 'ok';
  //         exit();

        } else{
        echo 'error';
        }

  //Close statement
       mysqli_stmt_close($stmt);
    } else {
      echo 'error';
    }
  

?>

