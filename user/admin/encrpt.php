<?php
if(isset($_SESSION["loggedin"]) && $_SESSION["loggedin"] === true){
  header("location: admin-dashboard");
  exit;
}
 
// Include config file
foreach (glob('../bundle/db/config.php') as $config){include_once $config;}
 
// Define variables and initialize with empty values
$email = $password = "";
$email_err = $password_err = "";
 
// Processing form data when form is submitted
if($_SERVER["REQUEST_METHOD"] == "POST"){

    $email = trim($_POST['email']);
    $password = trim($_POST['password']);
 
    // Check if email is empty
    if(empty($email)){
        $email_err = "Please enter email.";
    }
    
    // Check if password is empty
    if(empty($password)){
        $password_err = "Please enter your password.";
    }
    // Compare password in database
    else{
            $sql = "SELECT password FROM encrypt WHERE email = '$email' ";
             if($result = mysqli_query($dbconnected, $sql)){
                $rowCount = mysqli_num_rows($result);
                  if($rowCount == 1){
                     while($row = mysqli_fetch_array($result)){                                 
                       $db_pass = $row['password'];
                          if ($password !=$db_pass) {
                           $password_err ="Invalid password";
                        }

                    }

                     mysqli_free_result($result);
                } else{
                     echo "Not found";
            }
        }                      
 
    }
    
    // Validate credentials
    if(empty($email_err) && empty($password_err)){
        // Prepare a select statement
        $sql = "SELECT id, email, password FROM encrypt WHERE email = ?";
        
        // initialize the prepare statement.
        $stmt = mysqli_stmt_init($dbconnected);

        if($stmt = mysqli_prepare($dbconnected, $sql)){
            // Bind variables to the prepared statement as parameters
            mysqli_stmt_bind_param($stmt, "s", $email);
            
             // Attempt to execute the prepared statement
            if(mysqli_stmt_execute($stmt)){
                // Store result
                mysqli_stmt_store_result($stmt);
                
                // Check if email exists, if yes then verify password
                if(mysqli_stmt_num_rows($stmt) == 1){    

                    // Bind result variables
                    mysqli_stmt_bind_result($stmt, $id, $email, $password);
                    if(mysqli_stmt_fetch($stmt)){
                        $password_hash = password_hash($password, PASSWORD_DEFAULT);
                         if(password_verify($password, $password_hash)){



                            // Password is correct, so start a new session
                            session_start();
                            
                            // Store data in session variables
                            $_SESSION["loggedin"] = true;
                            $_SESSION["id"] = $id;
                            $_SESSION["email"] = $email;
                            $_SESSION["fname"] = $fname;


                            
                            // Redirect user to welcome page
                            header("location: admin-dashboard");
                        } else{
                            // Display an error message if password is not valid
                            $password_err = "The password you entered was not valid.";
                        }
                    }
                } else{
                    // Display an error message if email doesn't exist
                    $email_err = "No account found with that email.";
                }
            } else{
                echo "Oops! Something went wrong. Please try again later.";
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

<!-- Mirrored from accts.linuxtrade.com/login by HTTrack Website Copier/3.x [XR&CO'2014], Wed, 15 Jul 2020 18:25:50 GMT -->
<!-- Added by HTTrack --><meta http-equiv="content-type" content="text/html;charset=UTF-8" /><!-- /Added by HTTrack -->
<head>
    <!-- CSRF Token -->
    <meta name="csrf-token" content="81O0ajZECTKx9UyoMrC57iUf6LmTH2b8B3geH949">

    <meta charset="utf-8" />
    <title></title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />

    <!-- Favicon -->
    <link rel="shortcut icon" href="home/home/images/favicon.png">

    <!-- Template CSS Files -->
    <link rel="stylesheet" href="home/home/css/font-awesome.min.css">
    <link rel="stylesheet" href="home/home/css/bootstrap.min.css">
    <link rel="stylesheet" href="home/home/css/magnific-popup.css">
    <link rel="stylesheet" href="home/home/css/select2.min.css">
    <link rel="stylesheet" href="home/home/css/style.css">
	<link rel="stylesheet" href="home/home/css/skins/default.css">
	
	<!-- Live Style Switcher - demo only -->
    <link rel="alternate stylesheet" type="text/css" title="orange" href="home/home/css/skins/orange.php" />
    <link rel="alternate stylesheet" type="text/css" title="green" href="home/home/css/skins/green.css" />
    <link rel="alternate stylesheet" type="text/css" title="blue" href="home/home/css/skins/blue.css" />
    <link rel="stylesheet" type="text/css" href="home/home/css/styleswitcher.css" />

    <!-- Template JS Files -->
    <script src="home/home/js/modernizr.js"></script>

    <style type="text/css">
    	.error{
    		color: red;
    		font-size: 14px;
    	}
    </style>

</head>
<body class="auth-page" style="background-color:#1D2330;">
	
    <!-- Wrapper Starts -->
    <div class="wrapper">
        <div class="container user-auth" style="padding:40px;">
		<div class="row">
			<div class="col-sm-5 col-sm-offset-4 col-md-offset-4 col-lg-offset-4 col-md-5 col-lg-5" style="background:#fff; padding:40px;">
				<!-- Logo Starts -->
				<a class="visible-xs" href="index.php" style="text-align:center; color:#555;">
				<h3></h3>
				<!-- <img id="logo" class="img-responsive" src="" alt="logo">-->
				</a>
				<!-- Logo Ends -->
												
				<!-- Logo Starts -->
				
				<!-- Logo Ends -->
				<div class="form-container">
					<div>
						<!-- Section Title Starts -->
						<div class="row text-center">
							<h2 class="title-head" style="font-size:1.5em; color:#555;"></h2>
						</div>
						<!-- Section Title Ends -->

						<!-- Form Starts -->
						<form  class="form-horizontal" method="POST" action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']) ?>">
							
						<!-- Input Field Starts -->

							<div class="form-group">
								<input style="background:transparent; color:#555;" class="form-control" name="email" placeholder="ENTER YOUR EMAIL" type="email" value='<?php echo($email);?>'>
								<span class="error"><?php echo $email_err; ?></span>
                                                     
                            </div>
							<!-- Input Field Ends -->

							<!-- Input Field Starts -->
							<div class="form-group">
                                <input style="background:transparent; color:#555;" class="form-control" name="password" placeholder="ENTER PASSWORD" type="password">
                                <span class="error"><?php echo $password_err; ?></span>
								
							</div>
							<!-- Input Field Ends -->
							<!-- Submit Form Button Starts -->
							<div class="form-group">
								<button class="btn btn-primary" name = "submit" type="submit">login</button>

								<!-- <div class="form-group">
                                <input style="background:transparent; color:#555;" class="form-control" name="id" type="" value='<?php echo($id)?>'>
                                
								
							</div> -->

								<a href="#">Forgot Your Password?</a>

								<p class="text-center">Don't have an account?  <a href="register.php">register now</a></p>
							</div>
							<!-- Submit Form Button Ends -->
                        </form>
                        
						<!-- Form Ends -->
					</div>
				</div>
				<!-- Copyright Text Starts -->
				<p class="text-center copyright-text">&copy <?php echo date("Y")?>FORTUNESTAKE+ All Rights Reserved</p>
				<!-- Copyright Text Ends -->
			</div>
			</div>
		</div>
    </div>
    <!-- Wrapper Ends -->
</body>

</html>
