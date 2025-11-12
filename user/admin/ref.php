<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>BitMerchants | Referral Earnings</title>
  <!-- Favicon icon -->
  <link rel="icon" type="image/png" sizes="16x16" href="img/logo.png" />
  <link
    href="https://fonts.googleapis.com/css2?family=Nunito+Sans:ital,wght@0,300;0,400;0,600;0,700;0,800;0,900;1,300;1,400;1,600;1,700;1,800;1,900&display=swap"
    rel="stylesheet">
  <!-- Custom CSS -->
  <script src="css/vendor/assets/libs/jquery/dist/jquery.min.js"></script>
  <link href="css/vendor/assets/libs/datatables.net-bs4/css/dataTables.bootstrap4.css" rel="stylesheet">
  <link href="css/vendor/assets/libs/toastr/build/toastr.min.css" rel="stylesheet">
  <link href="css/vendor/assets/libs/toastr/build/toastr.min.css" rel="stylesheet">
  <link href="css/vendor/dist/css/style.min.css" rel="stylesheet" />
  <script src="https://unpkg.com/ionicons@5.1.2/dist/ionicons.js"></script>
  <link rel="stylesheet" href="css/vendor/vendor.css">
  <link rel="stylesheet" href="css/main.css">
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
          </ul>
          <!-- ============================================================== -->
          <!-- Right side toggle and nav items -->
          <!-- ============================================================== -->
          <ul class="navbar-nav float-right">

            <!-- ============================================================== -->
            <!-- User profile and search -->
            <!-- ============================================================== -->
            <li class="nav-item d-flex">
              <div class="nav-item__balance">0.00047482<span>BTC</span></div>
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
              <a class="sidebar-link waves-effect waves-dark sidebar-link nav__link" href="dashboard"
                aria-expanded="false">
                <ion-icon name="grid" class="nav__icon"></ion-icon><span class="hide-menu">Dashboard</span>
              </a>
            </li>

            <li class="sidebar-item" id="profile__menu">
              <a class="sidebar-link waves-effect waves-dark sidebar-link nav__link" href="deposit"
                aria-expanded="false">
                <ion-icon name="card" class="nav__icon"></ion-icon><span class="hide-menu">Deposit</span>
              </a>
            </li>

            <li class="sidebar-item" id="referral__menu">
              <a class="sidebar-link waves-effect waves-dark sidebar-link nav__link" href="withdraw"
                aria-expanded="false">
                <ion-icon name="wallet" class="nav__icon"></ion-icon><span class="hide-menu">Withdraw</span>
              </a>
            </li>

            <li class="sidebar-item">
              <a class="sidebar-link waves-effect waves-dark sidebar-link nav__link" href="investment"
                aria-expanded="false">
                <ion-icon name="stats-chart" class="nav__icon"></ion-icon><span class="hide-menu">Investment
                  Plans</span>
              </a>
            </li>

            <!-- User Payment Menu-->
            <li class="nav-small-cap color-sec">
              <i class="mdi mdi-dots-horizontal"></i>
              <span class="hide-menu">More</span>
            </li>

            <li class="sidebar-item">
              <a class="sidebar-link waves-effect waves-dark sidebar-link nav__link" href="support"
                aria-expanded="false">
                <ion-icon name="chatbox-ellipses" class="nav__icon"></ion-icon><span class="hide-menu">Support </span>
              </a>
            </li>

            <li class="sidebar-item">
              <a class="sidebar-link waves-effect waves-dark sidebar-link nav__link" href="account"
                aria-expanded="false">
                <ion-icon name="person-circle" class="nav__icon"></ion-icon><span class="hide-menu">Account</span>
              </a>
            </li>

            <li class="sidebar-item">
              <a class="sidebar-link waves-effect waves-dark sidebar-link nav__link" href="security"
                aria-expanded="false">
                <ion-icon name="key" class="nav__icon"></ion-icon><span class="hide-menu">Security</span>
              </a>
            </li>

            <li class="sidebar-item">
              <a class="sidebar-link waves-effect waves-dark sidebar-link nav__link" href="referrals"
                aria-expanded="false">
                <ion-icon name="people" class="nav__icon"></ion-icon><span class="hide-menu">Referrals</span>
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



        <div class="row mt-4">
          <div class="col-lg-12">
            <div class="card bg-dark">
              <div class="card-header bg-transparent">
                <h3 class="mb-0 text-white">Referrals</h3>
              </div>
              <div class="table-responsive py-4">
                <table class="table align-items-center table-flush table-dark">
                  <thead class="thead-dark">
                    <tr>
                      <th>S/N</th>
                      <th>Name</th>
                      <th>Username</th>
                      <th>Created</th>
                      <th>Updated</th>
                    </tr>
                  </thead>
                  <tbody>
                    <tr>
                      <td>1.</td>
                      <td>sdfg</td>
                      <td>sdfg</td>
                      <td>2020/02/19 06:26:PM</td>
                      <td>2020/02/19 05:25:PM</td>
                    </tr>
                    <tr>
                      <td>2.</td>
                      <td>Ravi kash Gupat</td>
                      <td>ravikash</td>
                      <td>2020/06/08 11:31:AM</td>
                      <td>2020/06/08 11:31:AM</td>
                    </tr>
                    <tr>
                      <td>3.</td>
                      <td>Susheel</td>
                      <td>susheelindoria</td>
                      <td>2020/06/13 11:52:PM</td>
                      <td>2020/06/13 11:52:PM</td>
                    </tr>
                  </tbody>
                </table>
              </div>
            </div>
          </div>
          <div class="col-lg-12">
            <div class="card bg-dark">
              <div class="card-header bg-transparent">
                <h3 class="mb-0 text-white">Earnings</h3>
              </div>
              <div class="table-responsive py-4">
                <table class="table align-items-center table-flush table-dark">
                  <thead class="thead-dark">
                    <tr>
                      <th>S/N</th>
                      <th>Amount</th>
                      <th>Name</th>
                      <th>Username</th>
                      <th>Created</th>
                      <th>Updated</th>
                    </tr>
                  </thead>
                  <tbody>
                    <tr>
                      <td>1.</td>
                      <td>$0.0001</td>
                      <td>Julius Boom</td>
                      <td>user</td>
                      <td>2020/02/20 02:00:AM</td>
                      <td>2020/02/20 02:00:AM</td>
                    </tr>
                  </tbody>
                </table>
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
</body>

</html>