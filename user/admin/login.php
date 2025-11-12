<?php
foreach (glob("auth/login.php") as $login){include_once($login);
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>BitMerchants | Admin-Login</title>
  <!-- Favicon icon -->
  <link rel="icon" type="image/png" sizes="16x16" href="img/logo.png" />
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
    </style>

</head>
<body class="auth-page" style="background-color:#1D2330;">
	
    <!-- Wrapper Starts -->
    <center>
    <div class="wrapper" style="width: 400px;">
        <div class="container user-auth" style="margin-top: 150px;">
        	<div style="padding-bottom: 20px">
        		<img src="img/logo.png">
        	</div>
        	<div style="padding-bottom: 10px; font-size: 20px">ADMINISTRATOR'S PORTAL</div>
        			
						<form class="needs-validation" novalidate method="POST" action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']) ?>">
						<div class="form-group">
						<input class="form-control" name="email" placeholder="YOUR EMAIL" type="email" value='<?php echo($email);?>' required>
						<span class="invalid-feedback">Invalid/Empty field</span>
                  		<span class="valid-feedback">Looks Good</span>
						<span class="error"><?php echo $email_err; ?></span>         
                        </div>

						<div class="form-group">
                        <input class="form-control" name="password" placeholder="YOUR PASSWORD" type="password" required>
                        <span class="invalid-feedback">Field must not be empty</span>
                        <span class="valid-feedback">Looks Good</span>
                        <span class="error"><?php echo $password_err; ?></span>
						
						</div>
	
							<div class="form-group">
								<button class="btnn btn-yellow" name = "submit" type="submit">Login</button>
                			</div>
                			
                        </form>
                        
						<!-- Form Ends -->
					</div>
				</div>
				<!-- Copyright Text Starts -->
			
				<!-- Copyright Text Ends -->
				<!--<img src="img/" height="40px">-->
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
