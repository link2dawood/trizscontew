<?php
session_start();
foreach (glob('users/edit_user.php') as $edit_user){include_once $edit_user;}

foreach (glob("../bundle/connect/theme.php") as $theme) {
  include $theme;
}

foreach (glob("../bundle/connect/platform.php") as $platform) {
  include $platform;
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>BitMerchants | Update users</title>
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
  <link rel="stylesheet" href="css/main.css">
  <script src="css/vendor/assets/libs/jquery/dist/jquery.min.js"></script>

  <style>
    .hido {
      display: none;
    }

    .pop-modal {
  position: fixed;
  z-index: 10000 !important;
  top: 0;
  left: 0;
  width: 100vw;
  height: 100vh;
  background: rgba(0, 0, 0, .4);
  display: flex;
  justify-content: center;
  align-items: center;
  opacity: 0;
  backdrop-filter: blur(5px);
  transition: all .5s ease-in;
}

.pop-modal.go {
  opacity: 1;
}

.pop-modal .modal-main {
  z-index: 20000 !important;
  opacity: 0;
  /* background: rgba(30, 31, 37, .1); */
  transition: all .5s ease-in;
  width: min-content;
}

.pop-modal.go .modal-main {
  opacity: 1;
  /* background: rgba(30, 31, 37, 1); */
  width: auto;
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
                <span class="iconify" data-icon="mdi:chevron-down" class="d-inline-block pt-1"></span>
              </a>

              <div class="dropdown-menu dropdown-menu-right">
                <a href="#" class="dropdown-item">
                  <span class="iconify" data-icon="mdi:lock-outline"></span> Account information
                </a>
                <a href="logout" class="dropdown-item">
                  <span class="iconify" data-icon="mdi:power"></span> Logout
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
                <span class="iconify" data-icon="mdi:view-grid" class="nav__icon"></span><span class="hide-menu">Dashboard</span>
              </a>
            </li>

            <li class="sidebar-item">
              <a class="sidebar-link waves-effect waves-dark sidebar-link nav__link" href="setup"
                aria-expanded="false">
                <span class="iconify" data-icon="mdi:wrench" class="nav__icon"></span><span class="hide-menu">Setup</span>
              </a>
            </li>

            <li class="sidebar-item" id="dashboard__menu">
              <a class="sidebar-link waves-effect waves-dark sidebar-link nav__link" href="registered-users"
                aria-expanded="false">
                <span class="iconify" data-icon="mdi:account-circle" class="nav__icon"></span><span class="hide-menu">Registered Users</span>
              </a>
            </li>

            

            <li class="sidebar-item">
              <a class="sidebar-link waves-effect waves-dark sidebar-link nav__link" href="verification"
                aria-expanded="false">
                <span class="iconify" data-icon="mdi:fingerprint" class="nav__icon"></span><span class="hide-menu">Verification
                  </span>
              </a>
            </li>
            <li class="sidebar-item">
              <a class="sidebar-link waves-effect waves-dark sidebar-link nav__link" href="referral-earnings"
                aria-expanded="false">
                <span class="iconify" data-icon="mdi:source-merge" class="nav__icon"></span><span class="hide-menu">Referral Earnings
                  </span>
              </a>
            </li>
            <li class="sidebar-item">
              <a class="sidebar-link waves-effect waves-dark sidebar-link nav__link" href="buy-sell"
                aria-expanded="false">
                <span class="iconify" data-icon="mdi:chart-bar" class="nav__icon"></span><span class="hide-menu">Buy/Sell
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
                <span class="iconify" data-icon="mdi:server" class="nav__icon"></span><span class="hide-menu">Loan
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
                <span class="iconify" data-icon="mdi:email" class="nav__icon"></span><span class="hide-menu">Mailing
                  </span>
              </a>
            </li>
            <li class="sidebar-item">
              <a class="sidebar-link waves-effect waves-dark sidebar-link nav__link" href="smtp"
                aria-expanded="false">
                <span class="iconify" data-icon="mdi:email-open-outline" class="nav__icon"></span><span class="hide-menu">SMTP Settings
                  </span>
              </a>
            </li>
            <li class="sidebar-item">
              <a class="sidebar-link waves-effect waves-dark sidebar-link nav__link" href="backup"
                aria-expanded="false">
                <span class="iconify" data-icon="mdi:cloud-download" class="nav__icon"></span><span class="hide-menu">Backup/Restore
                  </span>
              </a>
            </li>
            <li class="sidebar-item">
              <a class="sidebar-link waves-effect waves-dark sidebar-link nav__link" href="themes"
                aria-expanded="false">
                <span class="iconify" data-icon="mdi:theme-light-dark" class="nav__icon"></span><span class="hide-menu">Themes
                  </span>
              </a>
            </li>



            <li class="sidebar-item">
              <a class="sidebar-link waves-effect waves-dark sidebar-link nav__link" href="admin-account"
                aria-expanded="false">
                <span class="iconify" data-icon="mdi:account-circle" class="nav__icon"></span><span class="hide-menu">Account</span>
              </a>
            </li>

            <li class="sidebar-item">
              <a class="sidebar-link waves-effect waves-dark sidebar-link nav__link" href="settings"
                aria-expanded="false">
                <span class="iconify" data-icon="mdi:cog" class="nav__icon"></span><span class="hide-menu">Settings</span>
              </a>
            </li>

            <li class="sidebar-item">
              <a class="sidebar-link waves-effect waves-dark sidebar-link nav__link" href="logout"
                aria-expanded="false">
                <span class="iconify" data-icon="mdi:power" class="nav__icon"></span><span class="hide-menu">Logout</span>
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
                          <h4 class="card-title">Update User</h4>
                          <div style="display: flex; justify-content: space-between;">
                                    <a type="button" class="btn btn-default waves-effect" href="registered-users">Back</a>
                            <button type="update" id="mail-btn" class="btn bg-dark text-white mail-btn">Mail user<i class="icon-paperplane ml-2"></i></button>
                            </div>
                                    <form action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']) ?>" method="POST">
                                    
                                    
                                    
                                    <input type="hidden" name="id" value="<?php echo($id) ?>">
                                    <input type="hidden" name="email" value="<?php echo($email) ?>">

                                    <div align="center">
                                      <img src="../<?php echo($avatar);?>" height=100 width=100>
                                    </div>

                                    <div align="center">
                                    <h4 class=" alert alert-secondary text-center text-yellow">Personal Account Update</h4>
                                  </div>

                                   <div class="form-group row">
                                    <label class="col-form-label col-lg-2">First Name:</label>
                                    <div class="col-lg-10">
                                      <input type="text" name="fname" class="form-control" value="<?php echo($fname)?>">
                                    </div>
                                  </div>
                                  <div class="form-group row">
                                    <label class="col-form-label col-lg-2">Last Name:</label>
                                    <div class="col-lg-10">
                                      <input type="text" name="lname" class="form-control" value="<?php echo($lname)?>">
                                    </div>
                                  </div>
                                  <div class="form-group row">
                                    <label class="col-form-label col-lg-2">Email:</label>
                                    <div class="col-lg-10">
                                      <input id="user-email" type="email" name="email" class="form-control" readonly
                                        value="<?php echo($email)?>">
                                    </div>
                                  </div>
                                  <div class="form-group row">
                                    <label class="col-form-label col-lg-2">Mobile:</label>
                                    <div class="col-lg-10">
                                      <input type="text" name="phone" class="form-control" value="<?php echo($phone);?>">
                                    </div>
                                  </div>
                                  <div class="form-group row">
                                    <label class="col-form-label col-lg-2">Country:</label>
                                    <div class="col-lg-10">
                                      <input type="text" name="country" class="form-control" value="<?php echo($country);?>">
                                    </div>
                                  </div>

                                  <div class="form-group row">
                                    <label class="col-form-label col-lg-2">City:</label>
                                    <div class="col-lg-10">
                                      <div class="input-group">
                                       <input type="text" name="city" value="<?php echo($city);?>"
                                          class="form-control">
                                      </div>
                                    </div>
                                  </div>

                                  <div class="form-group row">
                                    <label class="col-form-label col-lg-2">Zip code:</label>
                                    <div class="col-lg-10">
                                      <div class="input-group">
                                       <input type="text" name="zip_code" value="<?php echo $zip_code;?>"
                                          class="form-control">
                                      </div>
                                    </div>
                                  </div>

                                    <div class="form-group row">
                                    <label class="col-form-label col-lg-2">Address:</label>
                                    <div class="col-lg-10">
                                      <div class="input-group">
                                       <input type="text" name="address" value="<?php echo($address);?>"
                                          class="form-control">
                                      </div>
                                    </div>
                                  </div>

                                    <div class="form-group row">
                                    <label class="col-form-label col-lg-2">Verification status:</label>
                                    <div class="col-lg-10">
                                      <div class="input-group">
                                       <input type="text" name="verif" id="verif"
                                          class="form-control" readonly>
                                      </div>
                                    </div>
                                  </div>

                                  <div class="text-right">
                                    <button type="update" disabled class="btn bg-dark text-grey bad-btn hido">Update ??<i class="icon-paperplane ml-2"></i></button>
                                    <button name = "update" type="update" class="btn bg-dark text-white good-btn">Update<i class="icon-paperplane ml-2"></i></button>
                                  </div>

                                  <hr>
                                  <div align="center">
                                    <h4 class=" alert alert-secondary text-center text-yellow">Financial Account Update</h4>
                                  </div>

                                   <div class="form-group row" style="display: none;">
                                    <label class="col-form-label col-lg-2">Investment Profit:</label>
                                    <div class="col-lg-10">
                                      <div class="input-group">
                                       <input type="text" name="deposit" value="<?php echo($deposit);?>" class="form-control">
                                     </div>
                                     <span class="text-danger"><?php echo $deposit_err; ?></span>
                                    </div>
                                  </div>


                                  <div class="form-group row">
                                    <label class="col-form-label col-lg-2">No of referred User:</label>
                                    <div class="col-lg-10">
                                      <div class="input-group">
                                       <input type="text" name="ref_bonus" value="<?php echo($ref_no);?>" class="form-control" readonly>
                                     </div>
                                     <span class="text-danger"></span>
                                    </div>
                                  </div>
                                  


                                   

                                   <div class="form-group row hido">
                                    <label class="col-form-label col-lg-2">BTC Balance <strong>(BTC)</strong>:</label>
                                    <div class="col-lg-10">
                                      <div class="input-group">
                                      
                                      </div>
                                      <span class="text-danger"><?php echo $main_balance_err; ?></span>
                                    </div>
                                  </div>

                                   <div class="form-group row hido">
                                    <label class="col-form-label col-lg-2">BTC Balance <strong>(USD)</strong>:</label>
                                    <div class="col-lg-10">
                                      <div class="input-group">
                                       <input type="text" id="usd-convert" class="form-control">
                                      </div>
                                      <span class="text-danger">1 BTC = <span id="btc-price">......</span> [Note that BTC balance is static and USD balance varies with BTC rate]</span>
                                    </div>
                                  </div>

                                  <div class="form-group row hido">
                                    <label class="col-form-label col-lg-2">Withdrawable <strong>(BTC)</strong>:</label>
                                    <div class="col-lg-10">
                                      <div class="input-group">
                                       <input type="text" id="btc-withdrawable" name="ref_bonus" value="<?php echo($ref_bonus);?>" class="form-control">
                                     </div>
                                     <span class="text-danger"><?php echo $ref_bonus_err; ?></span>
                                    </div>
                                  </div>
                                   <div class="form-group row hido">
                                    <label class="col-form-label col-lg-2">Withdrawable <strong>(USD)</strong>:</label>
                                    <div class="col-lg-10">
                                      <div class="input-group">
                                       <input type="text" id="usd-withdrawable" class="form-control">
                                      </div>
                                      <span id="with-msg" class="text-dark"></span>
                                    </div>
                                  </div>
                                  

                                  <!-- Real start -->

                                  <br>
                                  <div style="background: #1B65F2; padding: 1.5rem; border-radius: 8px; margin-bottom: 1rem;">
                                    <h3 style="color: #fff; margin: 0; display: flex; align-items: center; gap: 0.5rem;">
                                      <svg xmlns="http://www.w3.org/2000/svg" width="32" height="32" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><line x1="12" y1="1" x2="12" y2="23"></line><path d="M17 5H9.5a3.5 3.5 0 0 0 0 7h5a3.5 3.5 0 0 1 0 7H6"></path></svg>
                                      Total Balance: <span style="font-size: 2rem; font-weight: bold;">$<span id="total-cont">Loading...</span></span>
                                    </h3>
                                    <p style="color: #fff; margin: 0.5rem 0 0 0; opacity: 0.9;">Combined balance across all wallets (USD equivalent)</p>
                                  </div>

                                  <h5 style="color: red;">To top up a user's balance, The user should make a deposit to any of their wallets. Once you approve the deposit, their wallet gets funded.</h5>
                                  <p class="timeout-info">Timeout for a deposit is 15 minutes, you should confirm and approve the deposit within this timeframe (only approve once you confirm transaction)</p>
                                  <div id="assets-tab"></div>
                                  <!-- <div class="form-group row">
                                    <label class="col-form-label col-lg-2">BTC Balance <strong>(BTC)</strong>:</label>
                                    <div class="col-lg-10">
                                      <div class="input-group">
                                       <input type="text" id="btc-crypto" disabled class="form-control">
                                      </div>
                                    </div>
                                  </div>
                                  <div class="form-group row">
                                    <label class="col-form-label col-lg-2">BTC Balance <strong>(USD)</strong>:</label>
                                    <div class="col-lg-10">
                                      <div class="input-group">
                                       <input type="text" id="btc-usd" disabled class="form-control">
                                      </div>
                                    </div>
                                  </div>
                                  <div class="trans-btns" style="display: flex; align-items: center;">
                                    <div class="btn bg-dark text-white fund-btn btc-btn" id="btc">Fund BTC<i class="icon-paperplane ml-2"></i></div>
                                    <div class="btn bg-dark text-white deduct-btn btc-d-btn" id="btc">Deduct BTC<i class="icon-paperplane ml-2"></i></div>
                                  </div>
                                  <br>
                                  <br> -->

                                  
                                  <div style="outline: 1px solid blue; padding: 1rem;">
                                    <h3>Account Information</h3>
                                    <label class="col-form-label col-lg-2">Bank Name:</label>
                                    <div class="input-group">
                                      <input type="text" value="not assigned" id="bank-name" disabled class="form-control">
                                    </div>

                                    <label class="col-form-label col-lg-2">Account Name:</label>
                                    <div class="input-group">
                                      <input type="text" value="not assigned" id="acc-name" disabled class="form-control">
                                    </div>

                                    <label class="col-form-label col-lg-2">Account Number:</label>
                                    <div class="input-group">
                                      <input type="text" value="not assigned" id="acc-num" disabled class="form-control">
                                    </div>

                                    <label class="col-form-label col-lg-2">Paypal Account:</label>
                                    <div class="input-group">
                                      <input type="text" value="not assigned" id="paypal-acc" disabled class="form-control">
                                    </div>

                                    <label class="col-form-label col-lg-2">Mobile Account:</label>
                                    <div class="input-group">
                                      <input type="text" value="not assigned" id="mobile-acc" disabled class="form-control">
                                    </div>
                                  </div>

                                  
                                </form>
                              </div>
                              <div class="modal-footer">
                                
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



  <script type="module" defer src="<?php echo($js)?>adminUser.js"></script>
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

  <!-- Load User Balance -->
  <script>
  // Use setTimeout to ensure this runs after adminUser.js module loads
  setTimeout(function() {
      var userEmail = $('#user-email').val();
      var cryptoButtons = {}; // Store crypto button references

      function loadUserBalance() {
          $.ajax({
              url: '../bundle/connect/userbalanceget.php',
              type: 'POST',
              data: { email: userEmail },
              dataType: 'json',
              success: function(data) {
                  if (data.success && data.totalBalance) {
                      var totalBalance = parseFloat(data.totalBalance);
                      var formattedBalance = totalBalance.toLocaleString('en-US', {
                          minimumFractionDigits: 2,
                          maximumFractionDigits: 2
                      });

                      // Update total balance display
                      $('#total-cont').text(formattedBalance);

                      // Update individual crypto balances if elements exist
                      if (data.balances) {
                          // BTC
                          if (data.balances.btc) {
                              $('#btc-crypto').val(data.balances.btc.crypto);
                              $('#btc-usd').val('$' + parseFloat(data.balances.btc.usd).toFixed(2));
                          }
                          // ETH
                          if (data.balances.eth) {
                              $('#eth-crypto').val(data.balances.eth.crypto);
                              $('#eth-usd').val('$' + parseFloat(data.balances.eth.usd).toFixed(2));
                          }
                          // USDT
                          if (data.balances.usdt) {
                              $('#usdt-crypto').val(data.balances.usdt.crypto);
                              $('#usdt-usd').val('$' + parseFloat(data.balances.usdt.usd).toFixed(2));
                          }
                          // BNB
                          if (data.balances.bnb) {
                              $('#bnb-crypto').val(data.balances.bnb.crypto);
                              $('#bnb-usd').val('$' + parseFloat(data.balances.bnb.usd).toFixed(2));
                          }
                      }
                  } else {
                      $('#total-cont').text('0.00');
                      console.log('Balance data not available:', data.error || 'Unknown error');
                  }
              },
              error: function(xhr, status, error) {
                  console.error('Error loading balance:', error);
                  $('#total-cont').text('Error loading');
              }
          });
      }

      // Load balance on page load
      loadUserBalance();

      // Refresh balance every 30 seconds
      setInterval(loadUserBalance, 30000);

      // COMPLETELY REMOVE all existing event handlers from adminUser.js
      $('.fund-btn, .deduct-btn').off('click');
      $(document).off('click', '.fund-btn');
      $(document).off('click', '.deduct-btn');
      $._data(document, 'events'); // Clear all event data

      // Handle Fund/Deduct button clicks - Stop all propagation
      $(document).on('click', '.fund-btn', function(e) {
          e.preventDefault();
          e.stopPropagation();
          e.stopImmediatePropagation();

          // Close any existing modals from adminUser.js
          $('.fund-modal, .deduct-modal, .modal').modal('hide').remove();
          $('.modal-backdrop').remove();

          var crypto = $(this).attr('id').toUpperCase();
          showFundModal(crypto);
          return false;
      });

      $(document).on('click', '.deduct-btn', function(e) {
          e.preventDefault();
          e.stopPropagation();
          e.stopImmediatePropagation();

          // Close any existing modals from adminUser.js
          $('.fund-modal, .deduct-modal, .modal').modal('hide').remove();
          $('.modal-backdrop').remove();

          var crypto = $(this).attr('id').toUpperCase();
          showDeductModal(crypto);
          return false;
      });

      // Show Fund Modal
      function showFundModal(crypto) {
          var modalHtml = `
              <div class="modal fade" id="fundModal" tabindex="-1" role="dialog">
                  <div class="modal-dialog" role="document">
                      <div class="modal-content">
                          <div class="modal-header">
                              <h5 class="modal-title">Fund User ${crypto} Wallet</h5>
                              <button type="button" class="close" data-dismiss="modal">
                                  <span>&times;</span>
                              </button>
                          </div>
                          <div class="modal-body">
                              <form id="fundForm">
                                  <div class="form-group">
                                      <label>Amount (${crypto})</label>
                                      <input type="number" step="0.00000001" class="form-control" id="fundAmount" placeholder="Enter amount" required>
                                  </div>
                                  <div class="alert alert-info">
                                      <strong>Note:</strong> This will add ${crypto} to the user's balance.
                                  </div>
                              </form>
                          </div>
                          <div class="modal-footer">
                              <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancel</button>
                              <button type="button" class="btn btn-primary" id="confirmFund">Fund ${crypto}</button>
                          </div>
                      </div>
                  </div>
              </div>
          `;

          // Remove existing modal if any
          $('#fundModal').remove();

          // Add modal to body
          $('body').append(modalHtml);

          // Show modal
          $('#fundModal').modal('show');

          // Handle confirm button
          $('#confirmFund').off('click').on('click', function() {
              var amount = parseFloat($('#fundAmount').val());
              if (amount && amount > 0) {
                  fundCrypto(crypto, amount);
              } else {
                  toastr.error('Please enter a valid amount', 'Error');
              }
          });
      }

      // Show Deduct Modal
      function showDeductModal(crypto) {
          var modalHtml = `
              <div class="modal fade" id="deductModal" tabindex="-1" role="dialog">
                  <div class="modal-dialog" role="document">
                      <div class="modal-content">
                          <div class="modal-header">
                              <h5 class="modal-title">Deduct User ${crypto} Wallet</h5>
                              <button type="button" class="close" data-dismiss="modal">
                                  <span>&times;</span>
                              </button>
                          </div>
                          <div class="modal-body">
                              <form id="deductForm">
                                  <div class="form-group">
                                      <label>Amount (${crypto})</label>
                                      <input type="number" step="0.00000001" class="form-control" id="deductAmount" placeholder="Enter amount" required>
                                  </div>
                                  <div class="alert alert-warning">
                                      <strong>Warning:</strong> This will deduct ${crypto} from the user's balance. Make sure they have sufficient balance.
                                  </div>
                              </form>
                          </div>
                          <div class="modal-footer">
                              <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancel</button>
                              <button type="button" class="btn btn-danger" id="confirmDeduct">Deduct ${crypto}</button>
                          </div>
                      </div>
                  </div>
              </div>
          `;

          // Remove existing modal if any
          $('#deductModal').remove();

          // Add modal to body
          $('body').append(modalHtml);

          // Show modal
          $('#deductModal').modal('show');

          // Handle confirm button
          $('#confirmDeduct').off('click').on('click', function() {
              var amount = parseFloat($('#deductAmount').val());
              if (amount && amount > 0) {
                  deductCrypto(crypto, amount);
              } else {
                  toastr.error('Please enter a valid amount', 'Error');
              }
          });
      }

      // Fund Crypto Function
      function fundCrypto(crypto, amount) {
          $.ajax({
              url: '../bundle/connect/adminfund.php',
              type: 'POST',
              data: {
                  email: userEmail,
                  crypto: crypto.toLowerCase(),
                  amount: amount
              },
              dataType: 'json',
              beforeSend: function() {
                  $('#confirmFund').prop('disabled', true).text('Processing...');
              },
              success: function(response) {
                  if (response.success) {
                      toastr.success(response.message, 'Success');
                      $('#fundModal').modal('hide');
                      // Reload balance
                      setTimeout(function() {
                          loadUserBalance();
                      }, 500);
                  } else {
                      toastr.error(response.error || 'Failed to fund account', 'Error');
                      $('#confirmFund').prop('disabled', false).text('Fund ' + crypto);
                  }
              },
              error: function(xhr, status, error) {
                  console.error('Error:', error);
                  toastr.error('Connection error. Please try again.', 'Error');
                  $('#confirmFund').prop('disabled', false).text('Fund ' + crypto);
              }
          });
      }

      // Deduct Crypto Function
      function deductCrypto(crypto, amount) {
          $.ajax({
              url: '../bundle/connect/admindeduct.php',
              type: 'POST',
              data: {
                  email: userEmail,
                  crypto: crypto.toLowerCase(),
                  amount: amount
              },
              dataType: 'json',
              beforeSend: function() {
                  $('#confirmDeduct').prop('disabled', true).text('Processing...');
              },
              success: function(response) {
                  if (response.success) {
                      toastr.success(response.message, 'Success');
                      $('#deductModal').modal('hide');
                      // Reload balance
                      setTimeout(function() {
                          loadUserBalance();
                      }, 500);
                  } else {
                      toastr.error(response.error || 'Failed to deduct from account', 'Error');
                      $('#confirmDeduct').prop('disabled', false).text('Deduct ' + crypto);
                  }
              },
              error: function(xhr, status, error) {
                  console.error('Error:', error);
                  toastr.error('Connection error. Please try again.', 'Error');
                  $('#confirmDeduct').prop('disabled', false).text('Deduct ' + crypto);
              }
          });
      }
  }, 1000); // Wait 1 second for adminUser.js module to load
  </script>
</body>

</html>


