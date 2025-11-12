<?php
// Initialize the session
foreach(glob('../bundle/db/config.php') as $config){include_once $config;};

// Check if the user is logged in, if not then redirect him to login page
if(isset($_SESSION["loggedin"]) || $_SESSION["loggedin"] == true){
   
 $avatar=$fname=$lname=$email=$phone=$country=$city=$zip_code=$address=$deposit=$ref_bonus=$main_balance="";
$avatar_err=$fname_err=$lname_err=$email_err=$phone_err=$country_err=$city_err=$zip_code_err=$address_err=$deposit_err=$ref_bonus_err=$main_balance_err="";
   // Processing form data when form is submitted
if(isset($_POST["update"])) {
    // Get hidden input value
    $id = $_POST["id"];

    // fetch entries
    $fname = trim($_POST['fname']);
    $lname = trim($_POST['lname']);
    $email = trim($_POST['email']);
    $phone = trim($_POST['phone']);
    $country = trim($_POST['country']);
    $city = trim($_POST['city']);
    $zip_code = trim($_POST['zip_code']);
    $address = trim($_POST['address']);

    $deposit = trim($_POST['deposit']);
    $ref_bonus = trim($_POST['ref_bonus']);
    $main_balance = trim($_POST['crypto_btc']);

    if (empty($fname)) {
        $fname_err = "Field must not be empty";
    }
    if (empty($lname)) {
        $lname_err = "Field must not be empty";
    }
    if (empty($email)) {
        $email_err = "Field must not be empty";
    }
    if (empty($phone)) {
        $phone_err = "Field must not be empty";
    }
    if (empty($country)) {
        $country_err = "Field must not be empty";
    }
    if (empty($city)) {
        $city_err = "Field must not be empty";
    }
    if (empty($zip_code)) {
        $zip_code_err = "Field must not be empty";
    }
    if (empty($address)) {
        $address_err = "Field must not be empty";
    }
    if (is_null($deposit)) {
        $deposit_err = "Field must not be empty";
    }
    if (is_null($ref_bonus)) {
        $ref_bonus_err = "Field must not be empty";
    }
    if (is_null($main_balance)) {
        $main_balance_err = "Field must not be empty";
    }


    // Check input errors before inserting in database
    if(empty($fname_err) && empty($lname_err) && empty($email_err) && empty($phone_err) && empty($country_err) && empty($city_err) && empty($zip_code_err) && empty($address_err) && empty($deposit_err) && empty($ref_bonus_err) && empty($main_balance_err)){
        // Prepare an update statement
        $sql = "UPDATE users SET fname=?, lname=?, email=?, phone=?, country=?, city=?, zip_code=?, address=?, profit=?, ref_bonus=?, main_balance=? WHERE id=?";
         
         $stmt = mysqli_stmt_init($dbconnected);
        if($stmt = mysqli_prepare($dbconnected, $sql)){
            // Bind variables to the prepared statement as parameters
            mysqli_stmt_bind_param($stmt, "sssssssssssi", $fname, $lname, $email, $phone, $country, $city, $zip_code, $address, $deposit, $ref_bonus, $main_balance, $id);
            
            // Attempt to execute the prepared statement
            if(mysqli_stmt_execute($stmt)){
                // Records updated successfully. Redirect to landing page
                 $_SESSION['status'] = "success";
                $_SESSION['title'] = "Updated";
                $_SESSION['message'] = "Users information updated successfully";
                 echo "<script>window.open('registered-users', '_self')</script>";
            exit();

            } else{
              $_SESSION['status'] = "error";
              $_SESSION['title'] = "Error";
              $_SESSION['message'] = "Something went wrong. Please try again later.";

            }
        }
         
        // Close statement
        mysqli_stmt_close($stmt);
    }
    
    // Close connection
    mysqli_close($dbconnected);
}else{
    // Check existence of id parameter before processing further
    if(isset($_GET["id"]) && !empty(trim($_GET["id"]))){
        // Get URL parameter
        $id =  trim($_GET["id"]);
        
        // Prepare a select statement
        $sql = "SELECT * FROM users WHERE id = ?";
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
                    $ref_code = $row['ref_code'];
                    $avatar = $row['avatar'];
                    $fname = $row["fname"];
                    $lname = $row["lname"];
                    $email = $row["email"];
                    $phone = $row["phone"];
                    $country = $row["country"];
                    $city = $row["city"];
                    $zip_code = $row["zip_code"];
                    $address = $row["address"];

                    //FETCH USERS FINANCIAL RECORDS
                    $deposit = $row['profit'];
                    $ref_bonus = $row['ref_bonus'];
                    $main_balance = $row['crypto_btc'];


                     $sql = "SELECT count('refered_by') as ref_no FROM users WHERE refered_by = '$ref_code'";
                     $result = mysqli_query($dbconnected, $sql);
                      $rowCount = mysqli_num_rows($result);
                      $row = mysqli_fetch_array($result);

                      $ref_no = $row['ref_no'];
                } else{
                    // URL doesn't contain valid id. Redirect to error page
                    header("location: error.php");
                    exit();
                }
                
            } else{
                echo "Oops! Something went wrong. Please try again later, possibly your query .";
            }
        }
        
        // // Close statement
        // mysqli_stmt_close($stmt);
        
        // // Close connection
        // mysqli_close($dbconnected);
    }  else{
        // URL doesn't contain id parameter. Redirect to error page
        header("location: error.php");
        exit();
    }
} 


  }else{
    header('location: login');
    exit;
  }

  ?>


      <!-- This part is not functional yet, i added a hidden form in the registration page as to eliminate inserting into database here again -->
 <?php
        if (isset($_POST['submit'])) {
            include('config.php');

             // Get hidden input value
    $id = $_POST["id"];
    
    // fetch entries
    $name = trim($_POST["name"]);
    $main_balance = trim($_POST["main_balance"]);
    $deposit = trim($_POST["deposit"]);
    $profit = trim($_POST["profit"]);
    $bonus = trim($_POST['bonus']);
    $ref_bonus = trim($_POST['ref_bonus']);
    $message = trim($_POST["message"]);
            
 //validate main balance
    if(empty($main_balance)){
        $main_balance_err = "Please enter a main balance and set value";
    } 

    // Validate deposit
    if(empty($deposit)){
        $deposit_err = "Please enter a deposit and set value";     
    }
    // Validate profit
    if(empty($profit)){
        $profit_err = "Please enter the profit and set value.";     
    } 
    // Validate profit
    if(empty($bonus)){
        $bonus_err = "Please enter the bonus and set value.";     
    } 
    // Validate profit
    if(empty($ref_bonus)){
        $ref_bonus_err = "Please enter the referer bonus and set value.";     
    }
    if(empty($message)){
        $message_err = "Please enter a message"; 
    }

    // Check input errors before inserting in database
    if(empty($main_balance_err) && empty($deposit_err) && empty($profit_err) && empty($bonus_err) && empty($ref_bonus_err) && empty($message_err)){
        
        // Prepare an insert statement
        $sql = "INSERT INTO users (deposit, profit, bonus, ref_bonus, main_balance, message) VALUES (?,?,?,?,?,?) WHERE id = ?";
      
        if($stmt = mysqli_prepare($dbconnected, $sql)){
            // Bind variables to the prepared statement as parameters
            mysqli_stmt_bind_param($stmt, "ssssssi", $deposit, $profit, $bonus, $ref_bonus, $main_balance, $messages, $id);
         
                    
            // Attempt to execute the prepared statement
            if(mysqli_stmt_execute($stmt)){

                // Pop alert for successful registration..
                echo "<script>alert('Account added successfully!')</script>";
                //redirect to login page
                echo "<script>window.open('index.php', '_self')</script>";
                
                //header("location: login.php");
            } else{
                echo "<script>alert('Something went wrong. Please try again later!')</script>";
                //echo "Something went wrong. Please try again later.";
            }

            // Close statement
            mysqli_stmt_close($stmt);
        }
    }
    
    // Close connection
    mysqli_close($dbconnected);
}
?>
