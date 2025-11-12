<?php
// Initialize the session
session_start();
 
// Check if the user is logged in, if not then redirect him to login page
if(isset($_SESSION["loggedin"]) || $_SESSION["loggedin"] == true){
    

    include_once('../user/config.php');

  }else{
    header('location: login.php');
    exit;
  }
  ?>


<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
      <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Fortune Admin</title>
	<!-- BOOTSTRAP STYLES-->
    <link href="../assets/css/bootstrap.css" rel="stylesheet" />
     <!-- FONTAWESOME STYLES-->
    <link href="../assets/css/font-awesome.css" rel="stylesheet" />
     <!-- MORRIS CHART STYLES-->
    <link href="../assets/js/morris/morris-0.4.3.min.css" rel="stylesheet" />
        <!-- CUSTOM STYLES-->
    <link href="../assets/css/custom.css" rel="stylesheet" />
     <!-- GOOGLE FONTS-->
   <link href='http://fonts.googleapis.com/css?family=Open+Sans' rel='stylesheet' type='text/css' />
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
                <a class="navbar-brand" href="../index.php"><span class="fortune">Fortune Stake</span> <span class="plus">+</span></a>
            </div>
  <div style="color: white;
padding: 15px 50px 5px 50px;
float: right;
font-size: 16px;"> Last access : <?php echo date("(d:m:Y) - h:i:sa"); ?> &nbsp; <a href="logout.php" class="btn btn-danger square-btn-adjust">Logout</a> </div>
        </nav>   
           <!-- /. NAV TOP  -->
           <nav class="navbar-default navbar-side" role="navigation">
            <div class="sidebar-collapse">
                <ul class="nav" id="main-menu">
				<li class="text-center">
                    <img src="../assets/img/find_user.png" class="user-image img-responsive"/>
					</li>
				
					
                    <li>
                        <a class="active-menu"  href="index.php"><i class="fa fa-dashboard fa-3x"></i> Registered Users</a>
                    </li>
                    <li  >
                      <a  href="messages.php"><i class="fa fa-table fa-3x"></i> Messages</a>
                  </li>
                  <li  >
                    <a href="deposit.php"><i class="fa fa-table fa-3x"></i>Payment Request</a>
                </li>
                    	
                    
                    		
					
					                   
                    
                </ul>
               
            </div>
            
        </nav>  
        <!-- /. NAV SIDE  -->
        <div id="page-wrapper" >
            <div id="page-inner">
                <div class="row">
                    <div class="col-md-12">
                      <h2><i class="fa fa-eye" style="font-size: 50px;" ></i>User Profile</h2>   
                        <h5> </h5>
                    </div>
                </div>              
                 <!-- /. ROW  -->
                  <hr />
                 
                          <div class="container-fluid">
                        <div class="form-group">
                            Set Main Balance
                            <input type="number" class="form-control" id="confirm" required placeholder="Enter Amount">
                         </div>

                            <div class="form-group">
                              Set Deposit
                              <input type="number" class="form-control" id="confirm" required placeholder="Enter Amount">
                              
                            </div>

                            <div class="form-group">
                                Set Total Profit
                                <input type="number" class="form-control" id="confirm" required placeholder="Enter Amount">
                                
                            </div>

                            <div class="form-group">
                              Set Bonus
                              <input type="number" class="form-control" id="confirm" required placeholder="Enter Amount">
                              
                            </div>

                            <div class="form-group">
                              Set Ref. Bonus
                              <input type="number" class="form-control" id="confirm" required placeholder="Enter Amount">
                              
                            </div>

                            <div class="form-group">
                              Send Message To User
                              <textarea name="message" placeholder="Your message" class="form-control" id="confirm" rows="5" 
                cols="60"></textarea>
                              
                            </div>

                            <div class="setbut_container">
                              <button type="submit" class="btn btn-primary">Set</button>
                            </div>

                              </div>




                    <!--EDIT -->
                     <!-- modal with a button -->
                     
                      
                     <!-- View Popup -->
                     <div class="modal fade" id="myView" role="dialog">
                       <div class="modal-dialog">
                       
                         
                         <div class="modal-content view_all">
                           <div class="modal-header">
                             <button type="button" class="close" data-dismiss="modal">&times;</button>
                             <h4 class="modal-title">User Information</h4>
                             
                           </div>
                           <div class="modal-body pop_form view_pop">
                             
                          <div class="view_top">
                            <p>Main Balance: <span class="vfirst">$800</span></p>
                            <p>Deposit: <span class="vfirst">$12</span></p>
                            <p>Total Profit: <span class="vfirst">$50</span></p>
                            <p>Bonus: <span class="vfirst">$50</span></p>
                            <p>Ref. Bonus: <span class="vfirst">$10</span></p>
                          </div>
                      
                          <div class="view_down">
                            <p>Name: <span class="vfirst">John</span></p>
                            <p>Surname: <span class="vfirst">Paul</span></p>
                          </div>

                          <div class="view_tran">
                            <div class="bankd">
                              <h2>Bank Details</h2>
                              <p>Bank Name: <span class="vsec">Diamond Bank</span></p>
                              <p>Name: <span class="vsec">John Paul</span></p>
                              <p>Acc No.: <span class="vsec">0034555786</span></p>
                            </div>

                            <div class="bitcoind">
                              <h2>Bitcoin Details</h2>
                              <p>Add: <span class="vsec">1rttdgd64474hffgfyr77rur7f</span></p>
                            </div>
                            
                         </div>
                               

                           </div>
                           <div class="modal-footer view_but">
                             <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                           </div>
                         </div>
                         
                       </div>
                     </div>

                     <!-- Edit Popup -->
                     <div class="modal fade" id="myEdit" role="dialog">
                      <div class="modal-dialog">
                      
                        
                        <div class="modal-content set_all">
                          <div class="modal-header">
                            <button type="button" class="close" data-dismiss="modal">&times;</button>
                            <h4 class="modal-title">Edit user details</h4>
                          </div>
                          <div class="modal-body pop_form set_wrap">

                            <div class="set_bal set_form">
                            <p>Set Main Balance</p>
                            <input type="number" class="form-control" id="confirm" required placeholder="Enter Amount">
                            
                            </div>

                            <div class="set_dep set_form">
                              <p>Set Deposit</p>
                              <input type="number" class="form-control" id="confirm" required placeholder="Enter Amount">
                              
                            </div>

                            <div class="set_prof set_form">
                                <p>Set Total Profit</p>
                                <input type="number" class="form-control" id="confirm" required placeholder="Enter Amount">
                                
                            </div>

                            <div class="set_bon set_form">
                              <p>Set Bonus</p>
                              <input type="number" class="form-control" id="confirm" required placeholder="Enter Amount">
                              
                            </div>

                            <div class="set_ref set_form">
                              <p>Set Ref. Bonus</p>
                              <input type="number" class="form-control" id="confirm" required placeholder="Enter Amount">
                              
                            </div>

                            <div class="set_msg set_form">
                              <p>Send Message To User</p>
                              <textarea name="message" placeholder="Your message" class="form-control" id="confirm" rows="5" 
                cols="60"></textarea>
                              
                            </div>

                            <div class="setbut_container">
                              <button type="submit" class="btn btn-primary">Set</button>
                            </div>

                            
                            
                          </div>
                          <div class="modal-footer">
                            <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                          </div>
                        </div>
                        
                      </div>
                    </div>

                     


              
		     </div>
			</div>
              
                      
                    </div>
                </div>     
                 <!-- /. ROW  -->           
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
     <!-- MORRIS CHART SCRIPTS -->
     <script src="../assets/js/morris/raphael-2.1.0.min.js"></script>
    <script src="../assets/js/morris/morris.js"></script>
      <!-- CUSTOM SCRIPTS -->
    <script src="../assets/js/custom.js"></script>
    
   
</body>
</html>
