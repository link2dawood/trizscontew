<?php

        session_start();
 
    // Check if the user is logged in, if not then redirect him to login page
    if(isset($_SESSION["loggedin"]) || $_SESSION["loggedin"] == true){
        foreach (glob('bundle/db/config.php') as $config){include_once $config;}
        //header("location: login.php");
       // exit;
        
            $deposit_amount = $_GET['amount'];
            $session_id = $_SESSION['id'];
            $session_name = $_SESSION['fname'];
            $session_email = $_SESSION['email'];
            $payment_mode = "Bitcoin";

    
            $session_id_err = "";
            $session_name_err = "";
            $session_email_err = "";
            $deposit_amount_err ="";
            $img_err="";
            
                //CHECK IF THE URL CONTAINS THE AMOUNT ELSE RETURN TO DEPOSIT PAGE..
            if (empty($deposit_amount)) {
                header('location: deposits.php');
                exit;
            }
            
            


            // Attempt select query execution
                    $sql = "SELECT * FROM bitcoin_address ";
                    if($result = mysqli_query($dbconnected, $sql)){
                      $rowCount = mysqli_num_rows($result);
                        if($rowCount > 0){

                                $index = 0;

                                while($row = mysqli_fetch_array($result)){
                                    
                                    //i added this extra hack for the index
                                    //so that when a record is deleted
                                    //it does't give a skipped index.
                                    // Hpwever, 
                                    //Note that i passed the actual id of
                                    //each record in the action dropdown.$row['id']

                             $bitcoin_address = $row['address'];
                                                                        }
                            
                            // Free result set
                            mysqli_free_result($result);
                        } else{
                            echo "<p class='lead'><em>No bitcoin address found.</em></p>";
                        }
                    } else{
                        echo "ERROR: Could not able to execute $sql. " . mysqli_error($dbconnected);
                    }
 
                    // Close connection
                    mysqli_close($dbconnected);

                }else{
                    header('location: login');
                }
        
   
    ?>
    

<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
      <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Make Deposit</title>
	<!-- BOOTSTRAP STYLES-->
    <link href="../assets/css/bootstrap.css" rel="stylesheet" />
     <!-- FONTAWESOME STYLES-->
    <link href="../assets/css/font-awesome.css" rel="stylesheet" />
        <!-- CUSTOM STYLES-->
    <link href="../assets/css/custom.css" rel="stylesheet" />
     <!-- GOOGLE FONTS-->
   <link href='http://fonts.googleapis.com/css?family=Open+Sans' rel='stylesheet' type='text/css' />

    <style type="text/css">
        .error{
            color: red;
            font-size: 14px;
        }
    </style>

</head>
<body>
    <div id="wrapper">
        <nav class="navbar navbar-default navbar-cls-top " role="navigation" style="margin-bottom: 0">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".sidebar-collapse">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="../index.html"><span class="fortune">Fortune Stake</span> <span class="plus">+</span></a> 
            </div>
  <div style="color: white;
padding: 15px 50px 5px 50px;
float: right;
font-size: 16px;"> Last access : <?php echo date("(d:m:Y)-H:i:sa")?> &nbsp; <a href="logout.php" class="btn btn-danger square-btn-adjust">Logout</a> </div>
        </nav>   
           <!-- /. NAV TOP  -->
           <nav class="navbar-default navbar-side" role="navigation">
            <div class="sidebar-collapse">
                <ul class="nav" id="main-menu">
				<li class="text-center">
                    <img src="../assets/img/find_user.png" class="user-image img-responsive"/>
					</li>
				
					
                    <li>
                        <a class="active-menu"  href="index.php"><i class="fa fa-dashboard fa-3x"></i> Dashboard</a>
                    </li>
                    <li>
                        <a href="#"><i class="fa fa-sitemap fa-3x"></i> Account<span class="fa arrow"></span></a>
                        <ul class="nav nav-second-level">
                            <li>
                                <a href="change_pass.php">Change Password</a>
                            </li>
                            <li>
                                <a href="update_pass.php">Update Account</a>
                            </li>
                            
                        </ul>
                      </li>  
                 	
                     
                    <li>
                        <a  href="deposits.php"><i class="fa fa-qrcode fa-3x"></i> Deposits</a>
                    </li>
						   <li  >
                        <a   href="withdrawals.php"><i class="fa fa-bar-chart-o fa-3x"></i> Withdrawals</a>
                    </li>	
                    		
                      <li  >
                        <a  href="refer.php"><i class="fa fa-table fa-3x"></i> Refer users</a>
                    </li>
                    <li  >
                        <a  href="support.php"><i class="fa fa-square-o fa-3x"></i> Support</a>
                    </li>
					
					                   
                    
                </ul>
               
            </div>
            
        </nav>  
        <!-- /. NAV SIDE  -->
        <div id="page-wrapper" >
            <div id="page-inner">
                <div class="row">
                    <div class="col-md-12">
                     <h2></h2>   
                        
                       
                    </div>
                </div>
                 <!-- /. ROW  -->
                 <hr />

                 <div class="pay_top">
                     <p class="alert alert-danger">You are to make payment of <strong>$<?php echo $deposit_amount;?></strong> using the bitcoin wallet address below...</p>

                     <?php 
                        $star = '*************';
                     if(strrpos($bitcoin_address, $star) !== false){
                        echo "<p class = 'btc'>**********************************</p>";
                        echo "<p class = 'center alert alert-warning'><strong>Note!: </strong>Address not available for security reasons, please request updated address from admin below </p>";
                        echo "
                                <form action ='' method = 'POST'>
                                    <div class = 'form-group'>
                                    <input type = 'hidden' name = 'email' class='form-control' value='$session_email'>
                                    </div>

                                    <div class = 'form-group'>
                                    <input type = 'hidden' name = 'amount' class='form-control' value='$deposit_amount'>   
                                    </div>

                                     <div class = 'form-group'>
                                     <label> Subject</label>
                                    <input type = 'text' name = 'subject' class='form-control' value='Request for Bitcoin Address'>   
                                    </div>

                                    <div class = 'form-group'> 
                                    <label>Message</label>
                                    <textarea name='message' class='form-control'> 'Admin, kindly send me your updated bitcoin address to make a transfer of $$deposit_amount'</textarea>
                                    </div>

                                    <input class='btn btn-success' type ='Submit' name='deposit-message'>
                                                

                                </form>  "   ;  

                     }else{
                        echo "<p class = 'btc'>$bitcoin_address</p>";
                    
                 echo '</div>';

                           
                        echo '<form action="deposit_process.php" method="POST" enctype="multipart/form-data">
                         
                    <div class="pay_bottom">
                         <div class="form-group upload">
                         <div class="upload_bit_wrap">
                            <label>Upload Payment proof</label>
                         </div>
                            <input type="file" name="file" class="form-control" required value="">
                        </div>
                        <span class="error"><?php echo $img_err;?></span>

                        <div class="form-group">
                            <input type="hidden" name="id" class="form-control" value ="<?php echo $session_id; ?>"/>
                        </div> 
                        <span class="error"><?php echo $session_id_err;?></span>

                        <div class="form-group">
                            <input type="hidden" name="email" class="form-control" value ="<?php echo $session_email; ?>"/>
                        </div>
                        <span class="error"><?php echo $session_email_err;?></span>

                        <div class="form-group">
                          <input type="hidden" name="deposit_amount" class="form-control" value="<?php echo $deposit_amount; ?>">
                        </div>        
                         <span class="error"><?php echo $deposit_amount_err;?></span>            

                        

                        <div class="form-group pay_mode">
                            <label>Payment Mode</label>
                            <select type="text" name="payment_mode" class="form-control">
                                <option>Bitcoin</option>
                            </select>
                        </div>
                        <input type="submit" name = "submit" class="btn btn-primary" value="Submit"/>
                        <a href="deposit" class="btn btn-danger">Cancel</a>
                    </div>
                    </form>';
                    } ?>

               
    </div>
             <!-- /. PAGE INNER  -->
            </div>
         <!-- /. PAGE WRAPPER  -->
        </div>
     <!-- /. WRAPPER  -->
    <!-- SCRIPTS -AT THE BOTOM TO REDUCE THE LOAD TIME-->
    <!-- JQUERY SCRIPTS -->
    <script src="../assets/js/jquery-1.10.2.js"></script>
      <!-- BOOTSTRAP SCRIPTS -->
    <script src="../assets/js/bootstrap.min.js"></script>
    <!-- METISMENU SCRIPTS -->
    <script src="../assets/js/jquery.metisMenu.js"></script>
      <!-- CUSTOM SCRIPTS -->
    <script src="../assets/js/custom.js"></script>
    
   
</body>
</html>

 <!----------- SEND MESSAGE TO ADMIN FOR BICOIN ADDRESS ---------------->

<?php

 $email=$amount=$Subject=$message="";
 $email_err=$amount_err=$Subject_err=$message_err="";
   
//if($_SERVER["REQUEST_METHOD"] == "POST"){
    if (isset($_POST['deposit-message'])) {
        
    //basic email header injections
    function has_header_injection($str){
        return preg_match("/[\r\n]/", $str);
    }

    $email=trim($_POST['email']);
    $amount=trim($_POST['amount']);
    $subject=trim($_POST['subject']);
    $message=trim($_POST['message']);


    if (empty($email)) {
        header('location: deposit.php');
    }
    if (empty($amount)) {
         header('location: deposit.php');
    }
    if (empty($subject)) {
        $subject_err = "Please enter subject";
    }
    if (empty($message)) {
        $message_err = "Please enter message";
    }
   
    if (has_header_injection($email) || has_header_injection($amount) || has_header_injection($subject) || has_header_injection($message)) {

            die(); // kills or stops the script..
           
    }
    if (empty($subject_err) && empty($message_err)) {


    $myMail = "customer@ustradelive.com";
    $header = "from: ".$email;
    $alert = " <strong>REQUEST FOR BITCOIN ADDRESS</strong>"."\n\nClient's Email : ". $email. "\n\n Amount to deposit: ". $amount. "\n\nSubject". $subject."\n\nMessage". $message;
    mail($myMail, $subject, $alert, $header);

    echo "<script>alert('Message sent successfully')</script>";
     echo "<script>window.open('deposit', '_self')</script>";

    }
   

}

?>


