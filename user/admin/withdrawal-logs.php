<?php 
session_start();
?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>BitMerchants | Withdrawal Logs</title>
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
  <link rel="stylesheet" href="css/sweetalert2.min.css">
  <script src="css/vendor/assets/libs/jquery/dist/jquery.min.js"></script>
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
        <div class="tradingview-widget-container mb-1-5m">
          <div class="tradingview-widget-container__widget"></div>
          <script type="text/javascript" src="https://s3.tradingview.com/external-embedding/embed-widget-ticker-tape.js"
            async>
              {
                "symbols": [{
                  "proName": "OANDA:SPX500USD",
                  "title": "S&P 500"
                },
                {
                  "proName": "OANDA:NAS100USD",
                  "title": "Nasdaq 100"
                },
                {
                  "proName": "FX_IDC:EURUSD",
                  "title": "EUR/USD"
                },
                {
                  "proName": "BITSTAMP:BTCUSD",
                  "title": "BTC/USD"
                },
                {
                  "proName": "BITSTAMP:ETHUSD",
                  "title": "ETH/USD"
                }
                ],
                  "colorTheme": "light",
                    "isTransparent": false,
                      "displayMode": "regular",
                        "locale": "en"
              }
            </script>
        </div>
        <!-- TradingView Widget END -->


        <div class="row py-4">
          <div class="col-12">
            <div class="card">
              <div class="card-body">
                <h4 class="card-title">Withdrawal Logs</h4>

                         <?php foreach (glob('withdrawal_log/list_withdrawal.php') as $list_withdrawal){include_once $list_withdrawal;}?>

                </div>
              </div>
            </div>
          </div>
        </div>




      </div>
      <!-- End Dashboard -->

    </div>
  </div>



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
  <script src="js/sweetalert2.min.js"></script>

 <?php
    include_once 'sweetalert2.php';
    ?>
    
</body>

</html>