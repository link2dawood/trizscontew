<?php

include('config.php');
include_once('uniqid.php');

// Define variables and initialize with empty values
$fname= $lname = $email= $phone =$password= $confirm_password = $country =$deposited =$profit =$bonus =$ref_bonus =$main_balance =$message ="";
$fname_err=$lname_err=$email_err=$phone_err =$password_err=$confirm_password_err= $country_err =$deposited_err =$profit_err =$bonus_err =$ref_bonus_err =$main_balance_err =$message_err =$refered_by_err="";

   
// Processing form data when form is submitted
if($_SERVER["REQUEST_METHOD"] == "POST"){

          //set parameters
    $fname = trim($_POST['fname']);
    $lname = trim($_POST['lname']);
    $email = trim($_POST['email']);
    $phone = trim($_POST['phone']);
    $password = trim($_POST['password']);
    $confirm_password = trim($_POST['conf_password']);
    $country = trim($_POST['country']);

    	//LAZYMAN VARIABLE TO AVOID FOREIGN KEY DATABASE THINGY.. HAHAHA!
    $deposit ="0";
    $profit ="0";
    $bonus ="0";
    $ref_bonus ="0";
    $main_balance ="0";
    $message = "Welcome to FORTUNESTAKE+, start investing for your future. Always check this box for real time message from the admin. Enjoy!!!";

    	//REFERER LINK GENERATOR
    $email_ref=explode("@", $email);
    $user_ref_code = $email_ref[0].$getNumber;

       
    //Validate name
    if (empty($fname)) {
      $fname_err = "Please enter your first name";
    }else{
      $fname;
    }
    if(empty($lname)){
    	$lname_err = "Please enter your last name";
    }else{$lname;}
    
    // Validate email
    if(empty($email)){
        $email_err = "Please enter a password.";
    } else{
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
                    $email_err = "This email address has already been registered.";
                } else{
                    
                    $email;
                }
            } else{
                echo "Oops! Something went wrong. Please try again later.";
            }

            // Close statement
            mysqli_stmt_close($stmt);
        }
    }
    //VALIDATE PHONE NUMBER 
    if(empty($phone)){
        $phone_err = "Please enter a phone number.";     
    }  else{
        // Repitition not to make my else statement blank
        $phone;
    }
    
    // Validate password
    if(empty($password)){
        $password_err = "Please enter a password.";     
    }  else{
        // Repitition not to make my else statement blank
        $password;
    }
    
    // Validate confirm password
    if(empty($confirm_password)){
        $confirm_password_err = "Please confirm password.";     
    } else{
        if(empty($password_err) && ($password != $confirm_password)){
            $confirm_password_err = "Password did not match.";
        }
    }
    if (empty($country)) {
    	$country_err = "Select your country";
    }
    
    // Check input errors before inserting in database
    if(empty($fname_err) && empty($lname_err) && empty($email_err) && empty($phone_err) && empty($password_err) && empty($confirm_password_err) && empty($country_err)){
        
        // Prepare an insert statement
        $sql = "INSERT INTO users (fname, lname, email, phone, password, country, deposit, profit, bonus, ref_bonus, main_balance, message, ref_code, refered_by) VALUES (?,?,?,?,?,?,?,?,?,?,?,?,?,?)";

        $password_hash = password_hash($password, PASSWORD_DEFAULT); // Creates a password hash
         
        if($stmt = mysqli_prepare($dbconnected, $sql)){
            // Bind variables to the prepared statement as parameters
            mysqli_stmt_bind_param($stmt, "ssssssssssssss", $fname, $lname, $email, $phone, $password, $country, $deposit, $profit, $bonus, $ref_bonus, $main_balance, $message, $user_ref_code, $refered_by);
         
                    
            // Attempt to execute the prepared statement
            if(mysqli_stmt_execute($stmt)){

                include_once('mail_welcome.php');
                // Pop alert for successful registration..
                echo "<script>alert('You are Registered successfully!')</script>";
                //redirect to login page
                echo "<script>window.open('login.php', '_self')</script>";
                
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







<!DOCTYPE html>
<html lang="en">


<meta http-equiv="content-type" content="text/html;charset=UTF-8" />
<head>
    <!-- CSRF Token -->
    <meta name="csrf-token" content="81O0ajZECTKx9UyoMrC57iUf6LmTH2b8B3geH949">

    <meta charset="utf-8" />
    <title>FORTUNESTAKE+ | Register</title>
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
<script src="../ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js"></script>

<body class="auth-page" style="background-color:#1D2330;">
	
    <!-- Wrapper Starts -->
    <div class="wrapper">
        <div class="container user-auth" style="padding:40px;">
			<div class="row">
			<div class="col-sm-5 col-sm-offset-4 col-md-offset-4 col-lg-offset-4 col-md-5 col-lg-5" style="background:#fff; padding:40px;">
				<!-- Logo Starts -->
				<div style="text-align:center;">
				<a href="index.php">
				<img id="logo" src="../assets/img/head_logo.png" width="220px" style="background-color: #fff;" alt="logo">   
				</a>
				</div>
				<!-- Logo Ends -->
				<div class="form-container">
					<div>
						<!-- Section Title Starts -->
						<div class="row text-center">
							<h3 class="title-head" style="font-size:1.5em; color:#555;">Registration</h3>
						</div>
						<!-- Section Title Ends -->
						<!-- Form Starts -->
						<form  class="form-horizontal" method="POST" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>">
                         <!-- Input Field Starts -->

							
                            <div class="form-group">
								<input style="background:transparent; color:#555;" class="form-control" id="name" placeholder="ENTER YOUR FIRSTNAME" name="fname" type="text" value='<?php echo($fname)?>' autofocus>
								<span class="error"><?php echo $fname_err; ?></span>
                            
                                                            </div>
							<!-- Input Field Ends -->
	
							<!-- Input Field Starts for lastname -->
							<div class="form-group">
								<input style="background:transparent; color:#555;" class="form-control" id="name" placeholder="ENTER YOUR LASTNAME" name="lname" type="text" value='<?php echo($lname);?>'autofocus>
								<span class="error"><?php echo $lname_err; ?></span>
                            
                                                            </div>
							<!-- Input Field Ends -->

                        <!-- Input Field Starts -->
							<div class="form-group">
								<input style="background:transparent; color:#555;" class="form-control" id="email" placeholder="ENTER YOUR EMAIL" name="email" type="email" value='<?php echo $email;?>'>
								<span class="error"><?php echo $email_err; ?></span>
                            
                                                            </div>
                            
                            <div class="form-group">
								<input style="background:transparent; color:#555;" class="form-control" placeholder="MOBILE NUMBER" name="phone" type="text" value='<?php echo($phone);?>' >
								<span class="error"><?php echo $phone_err; ?></span>
                                
                                							</div
							
							
							<!-- Input Field Ends -->
							<!-- Input Field Starts -->
							<div class="form-group">
                                <input style="background:transparent; color:#555;" class="form-control" id="password" name="password" placeholder="ENTER PASSWORD" type="password" value="" >
                                <span class="error"><?php echo $password_err; ?></span>
							</div>
                            <!-- Input Field Ends -->
                            <!-- Input Field Starts -->
							<div class="form-group">
								<input style="background:transparent; color:#555;" class="form-control" id="password" placeholder="RE-ENTER YOUR PASSWORD" name="conf_password" type="password" value="" >
								<span class="error"><?php echo $confirm_password_err; ?></span>
                                
							</div>
							<!-- Input Field Ends -->
                            <!-- Input Field Starts -->
                            
                            
                            <div class="form-group">
								
								<select style="background:transparent; color:#555;" class="form-control" name="country">
								<option>Select country</option>
																<option value="Afghanistan">Afghanistan</option>
																<option value="Albania">Albania</option>
																<option value="Algeria">Algeria</option>
																<option value="American Samoa">American Samoa</option>
																<option value="Andorra">Andorra</option>
																<option value="Angola">Angola</option>
																<option value="Anguilla">Anguilla</option>
																<option value="Antarctica">Antarctica</option>
																<option value="Antigua and Barbuda">Antigua and Barbuda</option>
																<option value="Argentina">Argentina</option>
																<option value="Armenia">Armenia</option>
																<option value="Aruba">Aruba</option>
																<option value="Australia">Australia</option>
																<option value="Austria">Austria</option>
																<option value="Azerbaijan">Azerbaijan</option>
																<option value="Bahamas">Bahamas</option>
																<option value="Bahrain">Bahrain</option>
																<option value="Bangladesh">Bangladesh</option>
																<option value="Barbados">Barbados</option>
																<option value="Belarus">Belarus</option>
																<option value="Belgium">Belgium</option>
																<option value="Belize">Belize</option>
																<option value="Benin">Benin</option>
																<option value="Bermuda">Bermuda</option>
																<option value="Bhutan">Bhutan</option>
																<option value="Bolivia">Bolivia</option>
																<option value="Bosnia and Herzegowina">Bosnia and Herzegowina</option>
																<option value="Botswana">Botswana</option>
																<option value="Bouvet Island">Bouvet Island</option>
																<option value="Brazil">Brazil</option>
																<option value="British Indian Ocean Territory">British Indian Ocean Territory</option>
																<option value="Brunei Darussalam">Brunei Darussalam</option>
																<option value="Bulgaria">Bulgaria</option>
																<option value="Burkina Faso">Burkina Faso</option>
																<option value="Burundi">Burundi</option>
																<option value="Cambodia">Cambodia</option>
																<option value="Cameroon">Cameroon</option>
																<option value="Canada">Canada</option>
																<option value="Cape Verde">Cape Verde</option>
																<option value="Cayman Islands">Cayman Islands</option>
																<option value="Central African Republic">Central African Republic</option>
																<option value="Chad">Chad</option>
																<option value="Chile">Chile</option>
																<option value="China">China</option>
																<option value="Christmas Island">Christmas Island</option>
																<option value="Cocos (Keeling) Islands">Cocos (Keeling) Islands</option>
																<option value="Colombia">Colombia</option>
																<option value="Comoros">Comoros</option>
																<option value="Congo">Congo</option>
																<option value="Congo, the Democratic Republic of the">Congo, the Democratic Republic of the</option>
																<option value="Cook Islands">Cook Islands</option>
																<option value="Costa Rica">Costa Rica</option>
																<option value="Cote d&#039;Ivoire">Cote d&#039;Ivoire</option>
																<option value="Croatia (Hrvatska)">Croatia (Hrvatska)</option>
																<option value="Cuba">Cuba</option>
																<option value="Cyprus">Cyprus</option>
																<option value="Czech Republic">Czech Republic</option>
																<option value="Denmark">Denmark</option>
																<option value="Djibouti">Djibouti</option>
																<option value="Dominica">Dominica</option>
																<option value="Dominican Republic">Dominican Republic</option>
																<option value="East Timor">East Timor</option>
																<option value="Ecuador">Ecuador</option>
																<option value="Egypt">Egypt</option>
																<option value="El Salvador">El Salvador</option>
																<option value="Equatorial Guinea">Equatorial Guinea</option>
																<option value="Eritrea">Eritrea</option>
																<option value="Estonia">Estonia</option>
																<option value="Ethiopia">Ethiopia</option>
																<option value="Falkland Islands (Malvinas)">Falkland Islands (Malvinas)</option>
																<option value="Faroe Islands">Faroe Islands</option>
																<option value="Fiji">Fiji</option>
																<option value="Finland">Finland</option>
																<option value="France">France</option>
																<option value="France Metropolitan">France Metropolitan</option>
																<option value="French Guiana">French Guiana</option>
																<option value="French Polynesia">French Polynesia</option>
																<option value="French Southern Territories">French Southern Territories</option>
																<option value="Gabon">Gabon</option>
																<option value="Gambia">Gambia</option>
																<option value="Georgia">Georgia</option>
																<option value="Germany">Germany</option>
																<option value="Ghana">Ghana</option>
																<option value="Gibraltar">Gibraltar</option>
																<option value="Greece">Greece</option>
																<option value="Greenland">Greenland</option>
																<option value="Grenada">Grenada</option>
																<option value="Guadeloupe">Guadeloupe</option>
																<option value="Guam">Guam</option>
																<option value="Guatemala">Guatemala</option>
																<option value="Guinea">Guinea</option>
																<option value="Guinea-Bissau">Guinea-Bissau</option>
																<option value="Guyana">Guyana</option>
																<option value="Haiti">Haiti</option>
																<option value="Heard and Mc Donald Islands">Heard and Mc Donald Islands</option>
																<option value="Holy See (Vatican City State)">Holy See (Vatican City State)</option>
																<option value="Honduras">Honduras</option>
																<option value="Hong Kong">Hong Kong</option>
																<option value="Hungary">Hungary</option>
																<option value="Iceland">Iceland</option>
																<option value="India">India</option>
																<option value="Indonesia">Indonesia</option>
																<option value="Iran (Islamic Republic of)">Iran (Islamic Republic of)</option>
																<option value="Iraq">Iraq</option>
																<option value="Ireland">Ireland</option>
																<option value="Israel">Israel</option>
																<option value="Italy">Italy</option>
																<option value="Jamaica">Jamaica</option>
																<option value="Japan">Japan</option>
																<option value="Jordan">Jordan</option>
																<option value="Kazakhstan">Kazakhstan</option>
																<option value="Kenya">Kenya</option>
																<option value="Kiribati">Kiribati</option>
																<option value="Korea, Democratic People&#039;s Republic of">Korea, Democratic People&#039;s Republic of</option>
																<option value="Korea, Republic of">Korea, Republic of</option>
																<option value="Kuwait">Kuwait</option>
																<option value="Kyrgyzstan">Kyrgyzstan</option>
																<option value="Lao, People&#039;s Democratic Republic">Lao, People&#039;s Democratic Republic</option>
																<option value="Latvia">Latvia</option>
																<option value="Lebanon">Lebanon</option>
																<option value="Lesotho">Lesotho</option>
																<option value="Liberia">Liberia</option>
																<option value="Libyan Arab Jamahiriya">Libyan Arab Jamahiriya</option>
																<option value="Liechtenstein">Liechtenstein</option>
																<option value="Lithuania">Lithuania</option>
																<option value="Luxembourg">Luxembourg</option>
																<option value="Macau">Macau</option>
																<option value="Macedonia, The Former Yugoslav Republic of">Macedonia, The Former Yugoslav Republic of</option>
																<option value="Madagascar">Madagascar</option>
																<option value="Malawi">Malawi</option>
																<option value="Malaysia">Malaysia</option>
																<option value="Maldives">Maldives</option>
																<option value="Mali">Mali</option>
																<option value="Malta">Malta</option>
																<option value="Marshall Islands">Marshall Islands</option>
																<option value="Martinique">Martinique</option>
																<option value="Mauritania">Mauritania</option>
																<option value="Mauritius">Mauritius</option>
																<option value="Mayotte">Mayotte</option>
																<option value="Mexico">Mexico</option>
																<option value="Micronesia, Federated States of">Micronesia, Federated States of</option>
																<option value="Moldova, Republic of">Moldova, Republic of</option>
																<option value="Monaco">Monaco</option>
																<option value="Mongolia">Mongolia</option>
																<option value="Montserrat">Montserrat</option>
																<option value="Morocco">Morocco</option>
																<option value="Mozambique">Mozambique</option>
																<option value="Myanmar">Myanmar</option>
																<option value="Namibia">Namibia</option>
																<option value="Nauru">Nauru</option>
																<option value="Nepal">Nepal</option>
																<option value="Netherlands">Netherlands</option>
																<option value="Netherlands Antilles">Netherlands Antilles</option>
																<option value="New Caledonia">New Caledonia</option>
																<option value="New Zealand">New Zealand</option>
																<option value="Nicaragua">Nicaragua</option>
																<option value="Niger">Niger</option>
																<option value="Nigeria">Nigeria</option>
																<option value="Niue">Niue</option>
																<option value="Norfolk Island">Norfolk Island</option>
																<option value="Northern Mariana Islands">Northern Mariana Islands</option>
																<option value="Norway">Norway</option>
																<option value="Oman">Oman</option>
																<option value="Pakistan">Pakistan</option>
																<option value="Palau">Palau</option>
																<option value="Panama">Panama</option>
																<option value="Papua New Guinea">Papua New Guinea</option>
																<option value="Paraguay">Paraguay</option>
																<option value="Peru">Peru</option>
																<option value="Philippines">Philippines</option>
																<option value="Pitcairn">Pitcairn</option>
																<option value="Poland">Poland</option>
																<option value="Portugal">Portugal</option>
																<option value="Puerto Rico">Puerto Rico</option>
																<option value="Qatar">Qatar</option>
																<option value="Reunion">Reunion</option>
																<option value="Romania">Romania</option>
																<option value="Russian Federation">Russian Federation</option>
																<option value="Rwanda">Rwanda</option>
																<option value="Saint Kitts and Nevis">Saint Kitts and Nevis</option>
																<option value="Saint Lucia">Saint Lucia</option>
																<option value="Saint Vincent and the Grenadines">Saint Vincent and the Grenadines</option>
																<option value="Samoa">Samoa</option>
																<option value="San Marino">San Marino</option>
																<option value="Sao Tome and Principe">Sao Tome and Principe</option>
																<option value="Saudi Arabia">Saudi Arabia</option>
																<option value="Senegal">Senegal</option>
																<option value="Seychelles">Seychelles</option>
																<option value="Sierra Leone">Sierra Leone</option>
																<option value="Singapore">Singapore</option>
																<option value="Slovakia (Slovak Republic)">Slovakia (Slovak Republic)</option>
																<option value="Slovenia">Slovenia</option>
																<option value="Solomon Islands">Solomon Islands</option>
																<option value="Somalia">Somalia</option>
																<option value="South Africa">South Africa</option>
																<option value="South Georgia and the South Sandwich Islands">South Georgia and the South Sandwich Islands</option>
																<option value="Spain">Spain</option>
																<option value="Sri Lanka">Sri Lanka</option>
																<option value="St. Helena">St. Helena</option>
																<option value="St. Pierre and Miquelon">St. Pierre and Miquelon</option>
																<option value="Sudan">Sudan</option>
																<option value="Suriname">Suriname</option>
																<option value="Svalbard and Jan Mayen Islands">Svalbard and Jan Mayen Islands</option>
																<option value="Swaziland">Swaziland</option>
																<option value="Sweden">Sweden</option>
																<option value="Switzerland">Switzerland</option>
																<option value="Syrian Arab Republic">Syrian Arab Republic</option>
																<option value="Taiwan, Province of China">Taiwan, Province of China</option>
																<option value="Tajikistan">Tajikistan</option>
																<option value="Tanzania, United Republic of">Tanzania, United Republic of</option>
																<option value="Thailand">Thailand</option>
																<option value="Togo">Togo</option>
																<option value="Tokelau">Tokelau</option>
																<option value="Tonga">Tonga</option>
																<option value="Trinidad and Tobago">Trinidad and Tobago</option>
																<option value="Tunisia">Tunisia</option>
																<option value="Turkey">Turkey</option>
																<option value="Turkmenistan">Turkmenistan</option>
																<option value="Turks and Caicos Islands">Turks and Caicos Islands</option>
																<option value="Tuvalu">Tuvalu</option>
																<option value="Uganda">Uganda</option>
																<option value="Ukraine">Ukraine</option>
																<option value="United Arab Emirates">United Arab Emirates</option>
																<option value="United Kingdom">United Kingdom</option>
																<option value="United States">United States</option>
																<option value="United States Minor Outlying Islands">United States Minor Outlying Islands</option>
																<option value="Uruguay">Uruguay</option>
																<option value="Uzbekistan">Uzbekistan</option>
																<option value="Vanuatu">Vanuatu</option>
																<option value="Venezuela">Venezuela</option>
																<option value="Vietnam">Vietnam</option>
																<option value="Virgin Islands (British)">Virgin Islands (British)</option>
																<option value="Virgin Islands (U.S.)">Virgin Islands (U.S.)</option>
																<option value="Wallis and Futuna Islands">Wallis and Futuna Islands</option>
																<option value="Western Sahara">Western Sahara</option>
																<option value="Yemen">Yemen</option>
																<option value="Yugoslavia">Yugoslavia</option>
																<option value="Zambia">Zambia</option>
																<option value="Zimbabwe">Zimbabwe</option>
																</select>
																<span class="error"><?php echo $country_err; ?></span>
                            </div>


                            		

             

							<!-- Input Field Ends -->

							 <!-- Input Field Starts -->
						<!--	 <div class="form-group">
								<input name="sign" type="checkbox"  > 
								I have read and agreed to the <a href="https://accts.linuxtrade.com/terms">Terms of Service</a> and 
								<a href="https://accts.linuxtrade.com/privacy">Privacy Policy</a>
                            </div>-->
							<!-- Input Field Ends -->

							<!-- Submit Form Button Starts -->
							<div class="form-group">
								<button class="btn btn-primary" type="submit">Create account</button>
                                
								<p class="text-center">Already a member?  <a href="login.php">Login now</a></p>
							</div>
							<!-- Submit Form Button Ends -->
                        </form>
						<!-- Form Ends -->
					</div>
				</div>
				<!-- Copyright Text Starts -->
				<p class="text-center copyright-text">&copy <?php echo date("Y")?> FORTUNESTAKE+ All Rights Reserved</p>
				<!-- Copyright Text Ends -->
			</div>
			</div>
		</div>

    </div>
    <!-- Wrapper Ends -->
</body>

</html>

