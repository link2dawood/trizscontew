<?php
session_start();
foreach (glob('dashboard/dashboard.php') as $dashboard){include_once $dashboard;}

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
  <title>BitMerchants | Settings</title>
  <!-- Favicon icon -->
  <link rel="icon" type="image/png" sizes="16x16" href="img/logo.png" />
  <link
    href="https://fonts.googleapis.com/css2?family=Nunito+Sans:ital,wght@0,300;0,400;0,600;0,700;0,800;0,900;1,300;1,400;1,600;1,700;1,800;1,900&display=swap"
    rel="stylesheet">
  <!-- Custom CSS -->
  <link rel="stylesheet" href="css/vendor/vendor.css">
  <link href="css/vendor/assets/libs/toastr/build/toastr.min.css" rel="stylesheet">
  <link href="css/vendor/dist/css/style.min.css" rel="stylesheet" />
  <script src="//code.iconify.design/1/1.0.6/iconify.min.js"></script>
  <script src="https://unpkg.com/ionicons@5.1.2/dist/ionicons.js"></script>
  <link rel="stylesheet" href="css/main.css">

  <style>
    p, h5 {
      color: #fff;
    }

    .yi {
      display: none;
    }

    /* switch button (settings) */
/* .check-box {
  transform: scale(2);
} */

input[type="checkbox"] {
    position: relative;
    appearance: none;
    width: 34px;
    height: 17px;
    background: #ccc;
    border-radius: 50px;
    box-shadow: inset 0 0 5px rgba(0, 0, 0, 0.2);
    cursor: pointer;
    transition: 0.4s;
    margin-right: .3rem;
}

input:checked[type="checkbox"] {
    background: #1E68F6;
}

#inv-check input:checked[type="checkbox"] {
  background: #699AF9;
}

input[type="checkbox"]::after {
    position: absolute;
    content: "";
    width: 17px;
    height: 17px;
    top: 0;
    left: 0;
    background: #fff;
    border-radius: 50%;
    box-shadow: 0 0 5px rgba(0, 0, 0, 0.2);
    transform: scale(1.1);
    transition: 0.4s;
}

input:checked[type="checkbox"]::after {
    left: 50%;
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
        <nav class="sidebar-nav yi">
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
            <div class="col-md-4 mr-auto ml-auto dest"></div>
        <!-- TradingView Widget END -->



        <div class="row mt-4">
          <div class="col-md-10 col-sm-12 center">
            <div class="card bg-dark pt-4 pb-4 rounded-lg">
              <div class="card-header header-elements-inline">
                <h3 class="mb-0 text-white font-20">Settings</h3>
              </div>
              <div class="card-body">
                


              <div class="form-group row p-2">
                    <label class="col-form-label col-lg-3 text-white font-16">Auto Updates</label>
                    <div class="col-lg-9">
                      <div class="check-box">
                        <input id="auto-update" name="auto-update" type="checkbox">
                      </div>
                      <p style="font-size: 13px;">Auto install latest features and bug fixes immediately they are available</p>
                    </div>
                  </div>
                
                  

                    

                  <div class="form-group row p-2">
                    <label class="col-form-label col-lg-3 text-white font-16">Languages (<span id="lang-num"></span>)</label>
                    <div class="col-lg-9" style="display: flex; align-items: center; gap: .7rem;">
                      <button type="submit" class="btn btn-default bg-white text-gray-dark bold" id="lang-btn">Manage</button>
                    </div>
                  </div>

                  <div class="form-group row p-2">
                    <label class="col-form-label col-lg-3 text-white font-16">Investment</label>
                    <div class="col-lg-9">
                      <div class="check-box" id="inv-check">
                        <input id="toggle-investment" name="toggle-feature" type="checkbox" disabled checked>
                      </div>
                      <p style="font-size: 13px;">Activate investment feature on this platform</p>
                    </div>
                  </div>

                  <div class="form-group row p-2">
                    <label class="col-form-label col-lg-3 text-white font-16">Loan</label>
                    <div class="col-lg-9">
                      <div class="check-box">
                        <input id="toggle-loan" name="toggle-feature" type="checkbox">
                      </div>
                      <p style="font-size: 13px;">Activate loan feature on this platform</p>
                    </div>
                  </div>

                  <div class="form-group row p-2">
                    <label class="col-form-label col-lg-3 text-white font-16">Buy/Sell</label>
                    <div class="col-lg-9">
                      <div class="check-box">
                        <input id="toggle-buysell" name="toggle-feature" type="checkbox">
                      </div>
                      <p style="font-size: 13px;">Activate crypto Buy/Sell feature on this platform. (Requires at least one payment gateway option)</p>
                      <!-- <span style="font-size: 13px;">Requires at least one payment gateway option</span> -->
                    </div>
                  </div>

                  <div class="form-group row p-2">
                    <label class="col-form-label col-lg-3 text-white font-16">P2P Send</label>
                    <div class="col-lg-9">
                      <div class="check-box">
                        <input id="toggle-p2psend" name="toggle-feature" type="checkbox">
                      </div>
                      <p style="font-size: 13px;">Activate crypto P2P sending feature on this platform</p>
                    </div>
                  </div>

                  <div class="form-group row p-2">
                    <label class="col-form-label col-lg-3 text-white font-16">Payment Gateways</label>
                    <div class="col-lg-9">
                      <button type="submit" class="btn btn-default bg-white text-gray-dark bold" id="gateway-btn">Manage</button>
                    </div>
                  </div>

                  <div class="form-group row p-2">
                    <label class="col-form-label col-lg-3 text-white font-16">Reset Software</label>
                    <div class="col-lg-9">
                      <button type="submit" class="btn btn-default bg-white text-gray-dark bold" id="reset-btn">Reset</button>
                    </div>
                  </div>

                  <div class="form-group row p-2">
                    <label class="col-form-label col-lg-3 text-white font-16">Software</label>
                    <div class="col-lg-9">
                      <h5 id="s-name">....</h5>
                        
                    </div>
                  </div>

                  <div class="form-group row p-2">
                    <label class="col-form-label col-lg-3 text-white font-16">Developer/Author</label>
                    <div class="col-lg-9" style="display: flex; align-items: center; gap: .7rem;">
                     <h5><a id="s-dev" target="_blank">....</a></h5>
                     <img src="img/logo.png" alt="" style="width: 90px;">
                    </div>
                     </div>

                     <div class="form-group row p-2">
                    <label class="col-form-label col-lg-3 text-white font-16">Compatibility</label>
                    <div class="col-lg-9">
                    <h5 id="s-comp">....</h5>
                    </div>
                     </div>

                     <div class="form-group row p-2">
                    <label class="col-form-label col-lg-3 text-white font-16">Released on</label>
                    <div class="col-lg-9">
                    <h5 id="s-rel">....</h5>
                    </div>
                     </div>

                  <div class="form-group row p-2">
                    <label class="col-form-label col-lg-3 text-white font-16">Current Version</label>
                    <div class="col-lg-9">

                      <div style="display: flex; flex-direction: column; justify-content: center;">
                        <div style="display: flex; align-items: center; gap: .5rem;">
                          <p style="font-weight: bold;">Version:</p>
                          <p id="s-version">....</p>
                        </div>
                        <div style="display: flex; align-items: center; gap: .5rem;">
                          <p style="font-weight: bold;">Date:</p>
                          <p id="s-version-date">....</p>
                        </div>
                      </div>
                        
                    </div>
                  </div>

                
              </div>
            </div>
          </div>
        </div>



      </div>
      <!-- End Dashboard -->

    </div>
  </div>



  <script src="../bundle/install/reset.js"></script>
  <script src="<?php echo($file)?>"></script>
  <script type="module" defer src="<?php echo($js)?>adminSettings.js"></script>
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