<?php
 // Include config file
foreach (glob('../bundle/db/config.php') as $config){include_once $config;}
// Check if the user is logged in, otherwise redirect to login page
if(!isset($_SESSION["loggedin"]) || $_SESSION["loggedin"] !== true){
    header("location: login");
    exit;
}
    $id = $_SESSION['id'];
       
    $bitcoin = $ethereum = $bitcoin_cash = $litecoin = "";
    $bitcoin_err = $ethereum_err = $bitcoin_cash_err = $litecoin_err = "";


    if (isset($_POST['update'])) {

    $id = trim($_POST['id']);
    $bitcoin = trim($_POST['bitcoin']);
    $ethereum = trim($_POST['ethereum']);
    $bitcoin_cash = trim($_POST['bitcoin_cash']);
    $litecoin = trim($_POST['litecoin']);
        
    // Check input errors before updating the database
    if(empty($bitcoin_err) && empty($ethereum_err) && empty($bitcoin_cash_err) && empty($litecoin_err)){


        // Prepare an update statement
        $sql = "UPDATE wallet_address SET bitcoin = ?, ethereum =?, bitcoin_cash=?, litecoin = ?";
        
        $stmt = mysqli_stmt_init($dbconnected);
        if($stmt = mysqli_prepare($dbconnected, $sql)){
            // Bind variables to the prepared statement as parameters
            mysqli_stmt_bind_param($stmt, "ssss", $bitcoin, $ethereum, $bitcoin_cash, $litecoin);
            
            // Set parameters
            //$password_harsh = password_hash($new_password, PASSWORD_DEFAULT);
            //$id = $id;
            
            // Attempt to execute the prepared statement
            if(mysqli_stmt_execute($stmt)){
               
                $_SESSION['status'] = "success";
                $_SESSION['title'] = "Updated";
                $_SESSION['message'] = "Payment wallet Updated successfully";
                 echo "<script>window.open('payment-wallet', '_self')</script>";
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

    $sql = "SELECT * FROM wallet_address";
                    if($result = mysqli_query($dbconnected, $sql)){
                        $rowCount = mysqli_num_rows($result);
                        if($rowCount > 0){
                                $index = 0;

                                while($row = mysqli_fetch_array($result)){

                                    $index++;
                                    $bitcoin = $row['bitcoin'];
                                    $ethereum = $row['ethereum'];
                                    $bitcoin_cash = $row['bitcoin_cash'];
                                    $litecoin = $row['litecoin'];
                                }
                                 mysqli_free_result($result);
                            }else{
                                echo "No address found";
                            }
                        }else{
                           echo "Oops! Something went wrong. Please try again later.";
                        }
                        // Close connection
                         mysqli_close($dbconnected);
}

?>

