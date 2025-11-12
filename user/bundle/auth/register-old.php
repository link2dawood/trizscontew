<?php
session_start();
foreach (glob("bundle/connect/platform.php") as $platform) {
	include $platform;
}
foreach (glob("bundle/db/config.php") as $config){include_once($config);}
include_once('uniqid.php');

$errors = array();
// Define variables and initialize with empty values
$fname= $lname = $email= $phone =$country=$city=$address=$zip=$password= $confirm_password =$deposited =$profit =$bonus =$ref_bonus =$main_balance =$message ="";
$fname_err=$lname_err=$email_err=$phone_err =$country_err=$city_err=$address_err=$zip_err=$password_err=$confirm_password_err= $country_err =$deposited_err =$profit_err =$bonus_err =$ref_bonus_err =$main_balance_err =$message_err ="";
 
// Processing form data when form is submitted
if($_SERVER["REQUEST_METHOD"] == "POST"){

        //set parameters
    $refered_by = trim($_POST['refered_by']);
    $fname = trim($_POST['fname']);
    $lname = trim($_POST['lname']);
    $email = trim($_POST['email']);
    $phone = trim($_POST['phone']);
    $country = trim($_POST['country']);
    $city = trim($_POST['city']);
    $address = trim($_POST['address']);
    $zip = trim($_POST['zip']);
    $password = trim($_POST['password']);
    $confirm_password = trim($_POST['conf_password']);

    $ref_code = explode('@', $email);
    $ref_code = $ref_code[0].$getNumber;
    

    	//LAZYMAN VARIABLE TO AVOID FOREIGN KEY DATABASE THINGY.. HAHAHA!
    $deposit ="0";
    $profit ="0";
    $bonus ="0";
    $ref_bonus ="0";
    $main_balance ="0";
    $message = "Welcome to PowerFx, start investing for your future. Always check this box for real time message from the admin. Enjoy!!!";
    
    //Validate name
    if (empty($fname) || empty($lname) || empty($phone) || empty($country) || empty($city) || empty($email) || empty($address) || empty($zip) || empty($password) || empty($confirm_password)) {
    array_push($errors, "Field/s must not be empty");
    }

    //VALIDATE WHO REFERED USER
    if (!empty($refered_by)) {
        // Prepare a select statement
        $sql = "SELECT email FROM users WHERE ref_code = ?";

        $stmt = mysqli_stmt_init($dbconnected);
        
        if($stmt = mysqli_prepare($dbconnected, $sql)){
            // Bind variables to the prepared statement as parameters
            mysqli_stmt_bind_param($stmt, "s", $refered_by);
            
            // Attempt to execute the prepared statement
            if(mysqli_stmt_execute($stmt)){
                
                /* store result */
                mysqli_stmt_store_result($stmt);
                
                // Check database if data exit and store the count in a variable.
                $rowCount = mysqli_stmt_num_rows($stmt); 
                if( $rowCount == 0){
                     array_push($errors, "No such username");
                } 
            } 
            else{
                echo "Oops! Something went wrong. Please try again later.";
            }

            // Close statement
            mysqli_stmt_close($stmt);
        }
    }
    else{
        // Prepare a select statement
        $sql = "SELECT id FROM users WHERE email = ?";

        $stmt = mysqli_stmt_init($dbconnected);
        
        if($stmt = mysqli_prepare($dbconnected, $sql)){
            // Bind variables to the prepared statement as parameters
            mysqli_stmt_bind_param($stmt, "s", $email);
            
            // Attempt to execute the prepared statement
            if(mysqli_stmt_execute($stmt)){
                
                /* store result */
                mysqli_stmt_store_result($stmt);
                
                // Check database if data exit and store the count in a variable.
                $rowCount = mysqli_stmt_num_rows($stmt); 
                if( $rowCount == 1){
                     array_push($errors, "Email address has already been registered");
                } 
            } 
            else{
                echo "Oops! Something went wrong. Please try again later.";
            }

            // Close statement
            mysqli_stmt_close($stmt);
        }
    }

    //VALIDATE PASSWORD AND CONFIRM PASSWORD
     if(!empty($password) && (!empty($confirm_password)) && ($password != $confirm_password)){
         array_push($errors, "Password do not match");
        }
    
    // Check input errors before inserting in database
    if(empty($errors)){
        
        // Prepare an insert statement
        $sql = "INSERT INTO users (fname, lname, email, phone, country, city, zip_code, address, password, deposit, profit, bonus, ref_bonus, main_balance, message, ref_code, refered_by) VALUES (?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?)";

        $password_hash = password_hash($password, PASSWORD_DEFAULT); // Creates a password hash
         
        if($stmt = mysqli_prepare($dbconnected, $sql)){
            // Bind variables to the prepared statement as parameters
            mysqli_stmt_bind_param($stmt, "sssssssssiiiiisss", $fname, $lname, $email, $phone, $country, $city, $zip, $address, $password, $deposit, $profit, $bonus, $ref_bonus, $main_balance, $message, $ref_code, $refered_by);
         
                    
            // Attempt to execute the prepared statement
            if(mysqli_stmt_execute($stmt)){
                
                //SEND A MAIL TO USER
                 //include_once('mail_welcome.php');
                 
                $_SESSION['status'] = "success";
                $_SESSION['title'] = "Registered";
                $_SESSION['message'] = "You're rgistered successfully... Please Login";
                echo "<script>window.open('login', '_self')</script>";
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
    
    // Close connection
    mysqli_close($dbconnected);
}

?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title><?php echo(strip_tags($platform_name))?> | Register</title>
  <!-- Favicon icon -->
  <link rel="icon" type="image/png" sizes="16x16" href="img/new_logo.png" />
  <link
    href="https://fonts.googleapis.com/css2?family=Nunito+Sans:ital,wght@0,300;0,400;0,600;0,700;0,800;0,900;1,300;1,400;1,600;1,700;1,800;1,900&display=swap"
    rel="stylesheet">
  <!-- Custom CSS -->

  <link href="css/vendor/assets/libs/toastr/build/toastr.min.css" rel="stylesheet">
  <link href="css/vendor/dist/css/style.min.css" rel="stylesheet" />
  <script src="https://unpkg.com/ionicons@5.1.2/dist/ionicons.js"></script>
  <link rel="stylesheet" href="css/vendor/vendor.css">
  <link rel="stylesheet" href="css/main.css">
  <link rel="stylesheet" href="css/sweetalert2.min.css">

    <!-- Template JS Files -->
    <script src="home/home/js/modernizr.js"></script>

    <style type="text/css">
        .error{
            color: red;
            font-size: 14px;
        }
        .btnn{
            width: 40%;
            border-radius: 5px;
            border: 0;
            padding-top: 15px;
            padding-bottom: 15px;


        }
        .btn-yellow{
            background-color: #ed9121;
            color: #fff;
            
        }
        .btn-yellow:hover{
            width: 35%;
            font-weight: bolder;            
        }
        .label{
            font-size: 9px;
        }
    </style>

</head>
<body class="auth-page" style="background-color:#1D2330;">
    
    <!-- Wrapper Starts -->
    <center>
    <div class="wrapper" style="width: 350px;">
        <div class="container user-auth" style="margin-top: 50px;">
            <div style="padding-bottom: 20px">
                <img src="../assets/media/images/icons/logo.svg" width="100px">
            </div>

            <div style="padding-bottom: 10px; font-size: 20px"> REGISTER WITH <?php echo($platform_name)?> </div>
                    
                        <div class="text-yellow">
                            <?php foreach ($errors as $error) {
                                echo $error."<br>";
                            } ?>
                        </div>
                        <form class="needs-validation" novalidate method="POST" action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']) ?>">

                        <div class="form-group">
                        <label class="text-left label">Who referred you?</label>
                        <input class="form-control" name="refered_by" placeholder="Your referer userId, leave empty if none" type="text" >
                        </div>

                       <div class="form-row">
                         <div class="col-md-6">
                         <div class="form-group">
                        <label class="text-left label">First name</label>
                         <input type="text" name="fname" class="form-control input" placeholder="First name" required>
                         </div>
                        </div><!-- form-group -->

                        <div class="col-md-6">
                        <div class="form-group">
                        <label class="text-left label">Last name</label>
                        <input type="text" name="lname" class="form-control input" placeholder="Last name" required>
                        </div>
                      </div><!-- form-group -->
                    </div>

                        <div class="form-group">
                        <label class="text-left label">Email</label>
                        <input class="form-control" name="email" placeholder="Valid Email" type="email"  required>
                        </div>

                        <div class="form-group">
                        <label class="text-left label">Phone</label>
                        <input class="form-control" name="phone" placeholder="Phone" type="tel"  required>
                        </div>

                        <div class="form-row">
                        <div class="col-md-4">
                        <div class="form-group">
                        <label class="text-left label"> Select Country</label>
                        <select class="form-control" name="country" placeholder="country" type="text"  required>
                            <?php include_once 'countries.php'?>
                        </select>
                             </div>
                    </div>

                        <div class="col-md-4">
                        <div class="form-group">
                        <label class="text-left label" style="font-size: 8px">City</label>
                        <input class="form-control" name="city" placeholder="city" type="text"  required>
                               </div>
                    </div>

                        <div class="col-md-4">
                        <div class="form-group">
                        <label class="text-left label">Zip</label>
                        <input class="form-control" name="zip" placeholder="zip" type="text" required>
                          </div>
                        </div>
                    </div>

                        <div class="form-group">
                        <label class="text-left label">Address</label>
                        <input class="form-control" name="address" placeholder="address" type="text" required>
                        </div>

                        <div class="form-group">
                            <label class="text-left label">Password</label>
                        <input class="form-control" name="password" placeholder="password" type="password" required>
                        </div>

                        <div class="form-group">
                        <label class="text-left label">Confirm Password</label>
                        <input class="form-control" name="conf_password" placeholder="confirm password" type="password" required>
                       </div>
    
                            <div class="form-group">
                                <button class="btnn btn-yellow" name = "submit" type="submit">Register</button>
                            </div>
                            <span style="font-size: 13px"> Login <a href = "login">here</a></span>
                            
                        </form>
                        
                        <!-- Form Ends -->
                    </div>
                </div>
                <!-- Copyright Text Starts -->
                <p class="text-center copyright-text">&copy <?php echo date("Y")?> <?php echo($domain_url)?></p>
                <!-- Copyright Text Ends -->
                <img src="img/comodoS.png" height="50px">
            </center>
            </div>
            </div>
        </div>
    </div>
    </div>
    <!-- Wrapper Ends -->

    <script src="css/vendor/assets/libs/jquery/dist/jquery.min.js"></script>
  <!-- Bootstrap tether Core JavaScript -->
  <script src="css/vendor/assets/libs/popper.js/dist/umd/popper.min.js"></script>
  <script src="css/vendor/assets/libs/bootstrap/dist/js/bootstrap.min.js"></script>
  <!-- apps -->
  <script src="css/vendor/dist/js/app.min.js"></script>
  <script src="css/vendor/dist/js/app.init.light-sidebar.js"></script>
  <script src="css/vendor/dist/js/app-style-switcher.js"></script>
  <!-- slimscrollbar scrollbar JavaScript -->
  <script src="css/vendor/assets/libs/perfect-scrollbar/dist/perfect-scrollbar.jquery.min.js"></script>
  <script src="css/vendor/assets/extra-libs/sparkline/sparkline.js"></script>
  <!--Wave Effects -->
  <script src="css/vendor/dist/js/waves.js"></script>
  <!--Menu sidebar -->
  <script src="css/vendor/dist/js/sidebarmenu.js"></script>
  <!--Custom JavaScript -->
  <script src="css/vendor/dist/js/custom.min.js"></script>
  <!--This page JavaScript -->
  <script src="css/vendor/assets/libs/toastr/build/toastr.min.js"></script>
  <script src="css/vendor/assets/extra-libs/toastr/toastr-init.js"></script>
  <script src="js/app.js"></script>
  <script src="js/sweetalert2.min.js"></script>
  <script src="js/formValidation.js"></script>
  <script type="text/javascript">

    function showPassword(){
        var temp = document.getElementById("show");
        if (temp.type=== "password") {
            temp.type = "text";
        }
        else{
            temp.type = "password";
        }
    }

  </script>

</body>

</html>
