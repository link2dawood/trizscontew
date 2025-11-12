<?php
session_start();
foreach (glob('dashboard/dashboard.php') as $dashboard){include_once $dashboard;}

foreach (glob("../bundle/connect/theme.php") as $theme) {
  include $theme;
}

foreach (glob("../bundle/connect/platform.php") as $platform) {
  include $platform;
}

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
              $mname = $row["mname"];
              $email = $row["email"];
              $phone = $row["phone"];
              $age = $row["age"];
              $dob = $row["dob"];
              $country = $row["country"];
              $nationality = $row["nationality"];
              $issued_country = $row["issued_country"];
              $city = $row["city"];
              $zip_code = $row["zip_code"];
              $address = $row["address"];
              $doc_type = $row["doc_type"];
              $first_doc = $row["first_doc"];
              $second_doc = $row["second_doc"];

              //FETCH USERS FINANCIAL RECORDS
              


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

?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Cryptilo | Verification</title>
  <!-- Favicon icon -->
  <link rel="icon" type="image/png" sizes="16x16" href="img/logo.png" />
  <link
    href="https://fonts.googleapis.com/css2?family=Nunito+Sans:ital,wght@0,300;0,400;0,600;0,700;0,800;0,900;1,300;1,400;1,600;1,700;1,800;1,900&display=swap"
    rel="stylesheet">
  <!-- Custom CSS -->
  <link rel="stylesheet" href="css/vendor/vendor.css">
  <link href="css/vendor/assets/libs/datatables.net-bs4/css/dataTables.bootstrap4.css" rel="stylesheet">
  <link href="css/vendor/assets/libs/toastr/build/toastr.min.css" rel="stylesheet">
  <link href="css/vendor/dist/css/style.min.css" rel="stylesheet" />
  <script src="//code.iconify.design/1/1.0.6/iconify.min.js"></script>
  <script src="https://unpkg.com/ionicons@5.1.2/dist/ionicons.js"></script>
  <link rel="stylesheet" href="css/main.css">
  <script src="css/vendor/assets/libs/jquery/dist/jquery.min.js"></script>

  <style>
    .hido {
      display: none;
    }

    .pend {
      background: red;
    }

    .appr {
      background: green;
    }
  </style>
</head>

<body>
  <!-- Start Preloader -->
  <div class="preloader">
    <div class="lds-ripple">
      <div class="lds-pos"></div>
      <div class="lds-pos"></div>
    </div>
  </div>
  <!-- End Preloader -->

  <div id="main-wrapper">
    <!-- ============================================================== -->
    <!-- Topbar header - style you can find in pages.scss -->
    <!-- ============================================================== -->
    <header class="topbar">
      <nav class="navbar top-navbar navbar-expand-md navbar-dark">
        <div class="navbar-header bg-bitmine">
          <!-- This is for the sidebar toggle which is visible on mobile only -->
          <a class="nav-toggler waves-effect waves-light d-block d-md-none" href="javascript:void(0)"><i
              class="ti-menu ti-close"></i></a>
          <!-- ============================================================== -->
          <!-- Logo -->
          <!-- ============================================================== -->
          <a class="navbar-brand" href="#">
            <!-- Logo icon -->
            <b class="logo-icon">
              <!-- Light Logo icon -->
              <img src="img/logo.png" alt="bitmine" class="logo mt-1" />
            </b>
            <!--End Logo icon -->
          </a>
          <!-- ============================================================== -->
          <!-- End Logo -->
          <!-- ============================================================== -->
          <!-- ============================================================== -->
          <!-- Toggle which is visible on mobile only -->
          <!-- ============================================================== -->
          <a class="topbartoggler d-block d-md-none waves-effect waves-light" href="javascript:void(0)"
            data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent"
            aria-expanded="false" aria-label="Toggle navigation"><i class="ti-more"></i></a>
        </div>
        <!-- ============================================================== -->
        <!-- End Logo -->
        <!-- ============================================================== -->
        <div class="navbar-collapse collapse" id="navbarSupportedContent">
          <!-- ============================================================== -->
          <!-- toggle and nav items -->
          <!-- ============================================================== -->
          <ul class="navbar-nav float-left mr-auto">
            <li class="nav-item d-none d-md-block">
              <a class="nav-link sidebartoggler waves-effect waves-light" href="javascript:void(0)"
                data-sidebartype="mini-sidebar"><i class="mdi mdi-menu font-24"></i></a>
            </li>
            <!-- ============================================================== -->
            <!-- Search -->
            <!-- ============================================================== -->
            <li class="nav-item search-box">
              <a class="nav-link waves-effect waves-dark" href="javascript:void(0)"><i class="ti-search"></i></a>
              <form class="app-search position-absolute">
                <input type="text" class="form-control" placeholder="Search &amp; enter" />
                <a class="srh-btn"><i class="ti-close"></i></a>
              </form>
            </li>
            <li>
              <span class="navbar-text ml-md-3 mr-md-auto mt-3">
                <!-- <span class="badge badge-mark border-orange-300 mr-2"></span> -->
                Welcome back, Admin
              </span>
            </li>
          </ul>
          <!-- ============================================================== -->
          <!-- Right side toggle and nav items -->
          <!-- ============================================================== -->
          <ul class="navbar-nav float-right">
            <li class="nav-item dropdown dropdown-user mr-3 mt-1">
              <a href="#" class="navbar-nav-link dropdown-toggle" data-toggle="dropdown">
                <span class="d-inline-block pt-1">Admin </span>
                <ion-icon name="chevron-down-outline" class="d-inline-block pt-1"></ion-icon>
              </a>

              <div class="dropdown-menu dropdown-menu-right">
                <a href="#" class="dropdown-item">
                  <ion-icon name="lock-closed-outline"></ion-icon> Account information
                </a>
                <a href="logout" class="dropdown-item">
                  <ion-icon name="power-outline"></ion-icon> Logout
                </a>
              </div>
            </li>
            <!-- ============================================================== -->
            <!-- User profile and search -->
            <!-- ============================================================== -->
            <li class="nav-item d-flex">
              <img src="img/user-icon.jpg" alt="user" class="nav-item__user">
            </li>
            <!-- ============================================================== -->
            <!-- User profile and search -->
            <!-- ============================================================== -->
          </ul>
        </div>
      </nav>
    </header>
    <!-- ============================================================== -->
    <!-- End Topbar header -->
    <!-- ============================================================== -->


    <!-- ============================================================== -->
    <!-- Left Sidebar - style you can find in sidebar.scss  -->
    <!-- ============================================================== -->
    <aside class="left-sidebar bg-bitmine">
      <!-- Sidebar scroll-->
      <div class="scroll-sidebar">
        <!-- Sidebar navigation-->
        <nav class="sidebar-nav">
          <ul id="sidebarnav" class="bg-bitmine mt-4">

            <li class="sidebar-item" id="dashboard__menu">
              <a class="sidebar-link waves-effect waves-dark sidebar-link nav__link" href="admin-dashboard"
                aria-expanded="false">
                <ion-icon name="grid" class="nav__icon"></ion-icon><span class="hide-menu">Dashboard</span>
              </a>
            </li>

            <li class="sidebar-item">
              <a class="sidebar-link waves-effect waves-dark sidebar-link nav__link" href="setup"
                aria-expanded="false">
                <ion-icon name="build" class="nav__icon"></ion-icon><span class="hide-menu">Setup</span>
              </a>
            </li>

            <li class="sidebar-item" id="dashboard__menu">
              <a class="sidebar-link waves-effect waves-dark sidebar-link nav__link" href="registered-users"
                aria-expanded="false">
                <ion-icon name="people-circle" class="nav__icon"></ion-icon><span class="hide-menu">Registered Users</span>
              </a>
            </li>

            

            <li class="sidebar-item">
              <a class="sidebar-link waves-effect waves-dark sidebar-link nav__link" href="verification"
                aria-expanded="false">
                <ion-icon name="finger-print" class="nav__icon"></ion-icon><span class="hide-menu">Verification
                  </span>
              </a>
            </li>
            <li class="sidebar-item">
              <a class="sidebar-link waves-effect waves-dark sidebar-link nav__link" href="referral-earnings"
                aria-expanded="false">
                <ion-icon name="git-merge" class="nav__icon"></ion-icon><span class="hide-menu">Referral Earnings
                  </span>
              </a>
            </li>
            <li class="sidebar-item">
              <a class="sidebar-link waves-effect waves-dark sidebar-link nav__link" href="buy-sell"
                aria-expanded="false">
                <ion-icon name="bar-chart" class="nav__icon"></ion-icon><span class="hide-menu">Buy/Sell
                  </span>
              </a>
            </li>
            






           

            <li class="sidebar-item">
              <a class="sidebar-link has-arrow waves-effect waves-dark nav__link" href="javascript:void(0)"
                aria-expanded="false">
                <span class="iconify nav__icon font-16" data-icon="mdi-cash-multiple"></span><span
                  class="hide-menu ">Investment System</span></a>
              <ul aria-expanded="false" class="collapse  first-level color-collapse">


                <li class="sidebar-item"><a href="running-investment" class="sidebar-link nav__link"><span
                      class="iconify nav__icon font-16" data-icon="mdi-cash-check"></span>
                    </i><span class="hide-menu"> Running Investments </span></a></li>
                <li class="sidebar-item"><a href="completed-investment" class="sidebar-link nav__link"><span
                      class="iconify nav__icon font-16" data-icon="mdi-cash-remove"></span><span class="hide-menu">
                      Completed Investments</span></a></li>

              </ul>
            </li>

            <li class="sidebar-item">
              <a class="sidebar-link has-arrow waves-effect waves-dark nav__link" href="javascript:void(0)"
                aria-expanded="false">
                <span class="iconify nav__icon font-16" data-icon="mdi-cash-multiple"></span><span
                  class="hide-menu ">Deposit System</span></a>
                  <ul aria-expanded="false" class="collapse  first-level color-collapse">
                
                <li class="sidebar-item"><a href="deposits-logs" class="sidebar-link nav__link">
                    <span class="iconify nav__icon font-16" data-icon="mdi-format-align-bottom"></span><span
                      class="hide-menu">Deposits Logs</span>
                  </a></li>
                  <li class="sidebar-item"><a href="payment-wallet" class="sidebar-link nav__link">
                    <span class="iconify nav__icon font-16" data-icon="mdi-wallet-plus-outline"></span><span
                      class="hide-menu">Payment Wallets</span>
                  </a></li>
                  <li class="sidebar-item"><a href="payments" class="sidebar-link nav__link"><span
                      class="iconify nav__icon font-16" data-icon="mdi-cash-check"></span>
                    </i><span class="hide-menu"> Payment/Gateway settings </span></a></li>


              </ul>
            </li>
            <li class="sidebar-item">
              <a class="sidebar-link has-arrow waves-effect waves-dark nav__link" href="javascript:void(0)"
                aria-expanded="false">
                <span class="iconify nav__icon font-16" data-icon="mdi-account-cash"></span><span
                  class="hide-menu ">Withdrawal
                  System</span></a>
              <ul aria-expanded="false" class="collapse  first-level color-collapse">
                <li class="sidebar-item"><a href="withdrawal-logs" class="sidebar-link nav__link">
                    <span class="iconify nav__icon font-16" data-icon="mdi-chart-bar-stacked"></span><span
                      class="hide-menu">Withdrawal Logs</span>
                  </a></li>
                <li class="sidebar-item"><a href="approved-withdrawal" class="sidebar-link nav__link"> <span
                      class="iconify nav__icon font-16" data-icon="mdi-cash-check"></span><span class="hide-menu">
                      Approved Withdrawals </span></a></li>
                <li class="sidebar-item"><a href="declined-withdrawal" class="sidebar-link nav__link"> <span
                      class="iconify nav__icon font-16" data-icon="mdi-cash-remove"></span><span class="hide-menu">
                      Declined Withdrawals</span></a></li>


              </ul>
            </li>

            <li class="sidebar-item">
              <a class="sidebar-link waves-effect waves-dark sidebar-link nav__link" href="loan"
                aria-expanded="false">
                <ion-icon name="server" class="nav__icon"></ion-icon><span class="hide-menu">Loan
                  </span>
              </a>
            </li>

             <!-- customization-->
             <li class="nav-small-cap color-sec">
              <i class="mdi mdi-dots-horizontal"></i>
              <span class="hide-menu">More</span>
            </li>

            <li class="sidebar-item">
              <a class="sidebar-link waves-effect waves-dark sidebar-link nav__link" href="mailing"
                aria-expanded="false">
                <ion-icon name="mail" class="nav__icon"></ion-icon><span class="hide-menu">Mailing
                  </span>
              </a>
            </li>
            <li class="sidebar-item">
              <a class="sidebar-link waves-effect waves-dark sidebar-link nav__link" href="smtp"
                aria-expanded="false">
                <ion-icon name="mail-open" class="nav__icon"></ion-icon><span class="hide-menu">SMTP Settings
                  </span>
              </a>
            </li>
            <li class="sidebar-item">
              <a class="sidebar-link waves-effect waves-dark sidebar-link nav__link" href="backup"
                aria-expanded="false">
                <ion-icon name="cloud-download" class="nav__icon"></ion-icon><span class="hide-menu">Backup/Restore
                  </span>
              </a>
            </li>
            <li class="sidebar-item">
              <a class="sidebar-link waves-effect waves-dark sidebar-link nav__link" href="themes"
                aria-expanded="false">
                <ion-icon name="contrast" class="nav__icon"></ion-icon><span class="hide-menu">Themes
                  </span>
              </a>
            </li>



            <li class="sidebar-item">
              <a class="sidebar-link waves-effect waves-dark sidebar-link nav__link" href="admin-account"
                aria-expanded="false">
                <ion-icon name="person-circle" class="nav__icon"></ion-icon><span class="hide-menu">Account</span>
              </a>
            </li>

            <li class="sidebar-item">
              <a class="sidebar-link waves-effect waves-dark sidebar-link nav__link" href="settings"
                aria-expanded="false">
                <ion-icon name="settings-sharp" class="nav__icon"></ion-icon><span class="hide-menu">Settings</span>
              </a>
            </li>

            <li class="sidebar-item">
              <a class="sidebar-link waves-effect waves-dark sidebar-link nav__link" href="logout"
                aria-expanded="false">
                <ion-icon name="power" class="nav__icon"></ion-icon><span class="hide-menu">Logout</span>
              </a>
            </li>
          </ul>
        </nav>
        <!-- End Sidebar navigation -->
      </div>
      <!-- End Sidebar scroll-->
    </aside>
    <!-- ============================================================== -->
    <!-- End Left Sidebar - style you can find in sidebar.scss  -->
    <!-- ============================================================== -->
    <div class="page-wrapper">
      <!-- Start Dashboard -->
      <div class="container-fluid" id="dashboard">
        <!-- TradingView Widget BEGIN -->
        <div style="height: 28px; background-color: #696969; display:flex; justify-content: center; align-items: center; border-radius: 3px;">
              <div style="width: 100%; max-width: 500px; display: flex; justify-content: space-between; align-items: center; padding: .6rem; margin: 0;">
                <div style="font-size: 15px; color: #fff; font-weight: bold;"><?php echo($platform_name);?></div>
                <!-- <div style="margin-left: 0; color: #fff;"><?php echo($currency);?></div> -->
                <div><img width="38px" style="width: 38px; height: 38px; outline: 4px solid #fff;" src="<?php echo($image);?>" alt="<?php echo($name);?>"></div>
              </div>
            </div>
        <!-- TradingView Widget END -->


                  <div class="row py-5">
                    <div class="col-12">
                      <div class="card">
                        <div class="card-body">
                          <a type="button" class="btn btn-default waves-effect" href="verification">Back</a>
                          <h4 class="card-title"></h4>
                          <h5 class="card-title"></h5>

                                    
                                    <!-- <a type="button" class="btn btn-default waves-effect" href="Registered-users">Back</a> -->
                                    
                                    <div class="form-group row">
                                      <label class="col-form-label col-lg-2"> First Name:</label>
                                      <div class="col-lg-6">
                                        <div class="input-group">
                                         <input value="<?php echo($fname);?>" readonly class="form-control">
                                        </div>
                                      </div>
                                    </div>
                                    <div class="form-group row">
                                      <label class="col-form-label col-lg-2"> Last Name:</label>
                                      <div class="col-lg-6">
                                        <div class="input-group">
                                         <input value="<?php echo($lname);?>" readonly class="form-control">
                                        </div>
                                      </div>
                                    </div>
                                    <div class="form-group row">
                                      <label class="col-form-label col-lg-2"> Middle Name (optional):</label>
                                      <div class="col-lg-6">
                                        <div class="input-group">
                                         <input value="<?php echo($mname);?>" readonly class="form-control">
                                        </div>
                                      </div>
                                    </div>
                                    <div class="form-group row">
                                      <label class="col-form-label col-lg-2"> Email:</label>
                                      <div class="col-lg-6">
                                        <div class="input-group">
                                         <input value="<?php echo($email);?>" readonly class="form-control email">
                                        </div>
                                      </div>
                                    </div>
                                    <div class="form-group row">
                                      <label class="col-form-label col-lg-2"> Phone (optional):</label>
                                      <div class="col-lg-6">
                                        <div class="input-group">
                                         <input value="<?php echo($phone);?>" readonly class="form-control">
                                        </div>
                                      </div>
                                    </div>
                                    <div class="form-group row">
                                      <label class="col-form-label col-lg-2"> Date of Birth:</label>
                                      <div class="col-lg-6">
                                        <div class="input-group">
                                         <input id="dob" value="<?php echo($dob);?>" readonly class="form-control">
                                        </div>
                                      </div>
                                    </div>
                                    <div class="form-group row">
                                      <label class="col-form-label col-lg-2"> Age:</label>
                                      <div class="col-lg-6">
                                        <div class="input-group">
                                         <input id="age" value="" readonly class="form-control">
                                        </div>
                                      </div>
                                    </div>
                                    <div class="form-group row">
                                      <label class="col-form-label col-lg-2"> Country of Residence:</label>
                                      <div class="col-lg-6">
                                        <div class="input-group">
                                         <input value="<?php echo($country);?>" readonly class="form-control">
                                        </div>
                                      </div>
                                    </div>
                                    <div class="form-group row">
                                      <label class="col-form-label col-lg-2"> Nationality:</label>
                                      <div class="col-lg-6">
                                        <div class="input-group">
                                         <input value="<?php echo($nationality);?>" readonly class="form-control">
                                        </div>
                                      </div>
                                    </div>
                                    <div class="form-group row">
                                      <label class="col-form-label col-lg-2"> City:</label>
                                      <div class="col-lg-6">
                                        <div class="input-group">
                                         <input value="<?php echo($city);?>" readonly class="form-control">
                                        </div>
                                      </div>
                                    </div>
                                    <div class="form-group row">
                                      <label class="col-form-label col-lg-2"> Zip:</label>
                                      <div class="col-lg-6">
                                        <div class="input-group">
                                         <input value="<?php echo($zip_code);?>" readonly class="form-control">
                                        </div>
                                      </div>
                                    </div>
                                    <div class="form-group row">
                                      <label class="col-form-label col-lg-2"> Address (optional):</label>
                                      <div class="col-lg-6">
                                        <div class="input-group">
                                         <input value="<?php echo($address);?>" readonly class="form-control">
                                        </div>
                                      </div>
                                    </div>

                                    <div style="display: flex; gap: 1rem; justify-content: center; align-items: center; flex-direction: column;">
                                    <div>
                                      <p>Verification Status:</p><p id="status-cont" style="display: flex; font-weight: 500; justify-content: center; align-items: center; padding: 0 .3rem; color: #000; border-radius: 2px;"></p>
                                    </div>
                                      <div>
                                      <button type="update" id="approve-btn" class="btn bg-dark text-white update-btn">Approve<i class="icon-paperplane ml-2"></i></button>
                                      </div>
                                      <div>
                                      <button type="update" id="reject-btn" class="btn bg-red text-white update-btn">Reject<i class="icon-paperplane ml-2"></i></button>
                                      </div>
                                    </div>




                                    <br>
                                    <br>
                                    <div class="form-group row">
                                      <label class="col-form-label col-lg-2"></label>
                                      <div class="col-lg-6">
                                        <div  style="display: flex; flex-direction: column; align-items: center; width: 100%;">
                                        <p>Document Type:</p>
                                         <input value="<?php echo($doc_type);?>" readonly class="form-control" style="text-align: center;">
                                         <!-- here -->
                                         <br>
                                         <p> Country of document Issue:</p>
                                         <input value="<?php echo($issued_country);?>" readonly class="form-control" style="text-align: center;">
                                         <div class="form-group row">
                                
                                      <div class="col-lg-6">
                                        <div class="input-group">
                                         
                                        </div>
                                      </div>
                                    </div>
                                         <!-- here -->
                                        </div>
                                      </div>
                                    </div>


                                    <div class="form-group row">
                                      <label class="col-form-label col-lg-12"></label>
                                      <div class="col-lg-6">
                                        <div  style="display: flex; flex-direction: column; align-items: center; justify-content: space-around; width: 100%; outline: 1px solid #8A8987; max-width: 400px; height: 400px; margin: .5rem;">
                                        <p>Doc Front Page:</p>
                                         <img src="../bundle/verification/<?php echo($first_doc);?>" alt="Front Page" style="width: 80%;">
                                         <a style="margin-top: auto;" class="btn bg-dark text-white update-btn" href="../bundle/verification/<?php echo($first_doc);?>">View/Download</a>
                                        </div>
                                      </div>
                                      <br>
                                      <div class="col-lg-6">
                                        <div  style="display: flex; flex-direction: column; align-items: center; width: 100%; outline: 1px solid #8A8987; max-width: 400px; height: 400px; margin: .5rem;">
                                        <p>Doc Back Page:</p>
                                         <img src="../bundle/verification/<?php echo($second_doc);?>" alt="Back Page" style="width: 80%;">
                                         <a style="margin-top: auto;" class="btn bg-dark text-white update-btn" href="../bundle/verification/<?php echo($second_doc);?>">View/Download</a>
                                        </div>
                                      </div>
                                    </div>
                                    <br>
                                    

                                    
                                  </div>
                      </div>
                                  


                                   


                                  

                              
                                

                              </div>
                              

                            </div>
                          </div>
                        </div>
                        <!-- /.modal -->

              </div>
            </div>
              

          </div>
        </div>

      </div>
      <!-- End Dashboard -->

    </div>
  </div>




  <script type="module" defer src="<?php echo($js)?>adminVerificationDetails.js"></script>
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
  <script src="css/vendor/assets/extra-libs/DataTables/datatables.min.js"></script>
  <script src="css/vendor/dist/js/pages/datatable/datatable-basic.init.js"></script>
  <script src="css/vendor/assets/libs/toastr/build/toastr.min.js"></script>
  <script src="css/vendor/assets/extra-libs/toastr/toastr-init.js"></script>
  <script src="js/app.js"></script>
</body>

</html>


