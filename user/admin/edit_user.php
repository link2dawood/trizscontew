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
  <script src="https://unpkg.com/ionicons@5.1.2/dist/ionicons.js"></script>
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
                                  <h4>Total Balance: $<span id="total-cont">....</span></h4>
                                  
                                  <br>
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
</body>

</html>


