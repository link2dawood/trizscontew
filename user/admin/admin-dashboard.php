<?php
session_start();
foreach (glob('dashboard/dashboard.php') as $dashboard){include_once $dashboard;}

foreach (glob("../bundle/connect/theme.php") as $theme) {
  include $theme;
}

foreach (glob("../bundle/connect/platform.php") as $platform) {
  include $platform;
}

include '../bundle/connect/create_icon_column.php';

  

?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>BitMerchants | Admin-Dashboard</title>
  <!-- Favicon icon -->
  <link rel="icon" type="image/png" sizes="16x16" href="img/logo.png" />
  <link
    href="https://fonts.googleapis.com/css2?family=Nunito+Sans:ital,wght@0,300;0,400;0,600;0,700;0,800;0,900;1,300;1,400;1,600;1,700;1,800;1,900&display=swap"
    rel="stylesheet">
  <!-- Custom CSS -->
  <link rel="stylesheet" href="css/vendor/vendor.css">
  <link rel="stylesheet" href="backup-styles.css">
  <link href="css/vendor/assets/libs/toastr/build/toastr.min.css" rel="stylesheet">
  <link href="css/vendor/dist/css/style.min.css" rel="stylesheet" />
  <script src="//code.iconify.design/1/1.0.6/iconify.min.js"></script>
  <!-- <script src="https://cdnjs.cloudflare.com/ajax/libs/ionic-framework/2.0.0-beta.2/ionic.js"></script> -->
  <script src="https://unpkg.com/ionicons@5.1.2/dist/ionicons.js"></script>
  <link rel="stylesheet" href="css/main.css">

  <style>
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

.back-on {
  color: green;
}
.back-off {
  color: red;
}

.hido {
  display: none;
}

.bug-link {
  text-decoration: underline;
  font-stretch: 1rem;
  font-size: 16px;
  margin-left: 5px;
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
                
              </span>
            </li>
          </ul>
          <!-- ============================================================== -->
          <!-- Right side toggle and nav items -->
          <!-- ============================================================== -->
          <ul class="navbar-nav float-right">
            <li class="nav-item dropdown dropdown-user mr-3 mt-1">
              <a href="#" class="navbar-nav-link dropdown-toggle" data-toggle="dropdown">
                <span class="d-inline-block pt-1"><h6 class="text-yellow"><?php echo htmlspecialchars($_SESSION["email"]); ?></h6> </span>
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
            <!-- TradingView Widget END -->

            <div style="height: 28px; background-color: #696969; display:flex; justify-content: center; align-items: center; border-radius: 3px;">
              <div style="width: 100%; max-width: 500px; display: flex; justify-content: space-between; align-items: center; padding: .6rem; margin: 0;">
                <div style="font-size: 15px; color: #fff; font-weight: bold;"><?php echo($platform_name);?></div>
                <!-- <div style="margin-left: 0; color: #fff;"><?php echo($currency);?></div> -->
                <div><img width="38px" style="width: 38px; height: 38px; outline: 4px solid #fff;" src="<?php echo($image);?>" alt="<?php echo($name);?>"></div>
              </div>
            </div>
<div style="display: none;">
<p><?php echo $total_deposit; ?></p>
<p><?php echo $num_deposit; ?></p>
<p><?php echo $amount_earn; ?></p>
<p><?php echo $total_earn; ?></p>
</div>

          <div class="col-md-4">
            <div class="card border-left-3 border-left-violet rounded-left-0">
              <div class="card-body">
                <div class="d-sm-flex align-item-sm-center flex-sm-nowrap">
                  <div>
                    <h4 class="font-weight-semibold">Pending Deposits</h4>
                    <ul class="list list-unstyled mb-0">
                      <li class="dep-show" style="color: red"> <span class="font-weight-semibold text-default"></span></li>
                    </ul>
                  </div>

                  <div class="text-sm-right mb-0 mt-3 mt-sm-0 ml-auto">
                    <h3 class="font-weight-semibold pend-deposit-val"><?php echo $pending_deposit; ?></h3>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="col-md-4">
            <div class="card border-left-3 border-left-violet rounded-left-0">
              <div class="card-body">
                <div class="d-sm-flex align-item-sm-center flex-sm-nowrap">
                  <div>
                    <h4 class="font-weight-semibold">Pending Withdrawals</h4>
                    <ul class="list list-unstyled mb-0">
                      <li class="with-show" style="color: red"> <span class="font-weight-semibold text-default"></span></li>
                    </ul>
                  </div>

                  <div class="text-sm-right mb-0 mt-3 mt-sm-0 ml-auto">
                    <h3 class="font-weight-semibold pend-withdrawal-val"><?php echo $pending_withdrawal; ?></h3>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="col-md-4">
            <div class="card border-left-3 border-left-violet rounded-left-0">
              <div class="card-body">
                <div class="d-sm-flex align-item-sm-center flex-sm-nowrap">
                  <div>
                    <h4 class="font-weight-semibold">Total Investment</h4>
                    <ul class="list list-unstyled mb-0">
                      <li>Amount in Dollars: <span class="font-weight-semibold text-default">$<?php echo $amount_invested; ?></span></li>
                    </ul>
                  </div>

                  <div class="text-sm-right mb-0 mt-3 mt-sm-0 ml-auto">
                    <h3 class="font-weight-semibold"><?php echo $total_investment; ?></h3>
                  </div>
                </div>
              </div>
            </div>
          </div>
          
          <div class="col-md-4">
            <div class="card border-left-3 border-left-violet rounded-left-0">
              <div class="card-body">
                <div class="d-sm-flex align-item-sm-center flex-sm-nowrap">
                  <div>
                    <h4 class="font-weight-semibold">Users</h4>
                    <ul class="list list-unstyled mb-0">
                      
                    </ul>
                  </div>

                  <div class="text-sm-right mb-0 mt-3 mt-sm-0 ml-auto">
                    <h3 class="font-weight-semibold"><?php echo $total_earn; ?></h3>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="col-md-4" style="display: none;">
            <div class="card border-left-3 border-left-violet rounded-left-0">
              <div class="card-body">
                <div class="d-sm-flex align-item-sm-center flex-sm-nowrap">
                  <div>
                    <h4 class="font-weight-semibold">Support Tickets</h4>
                    <ul class="list list-unstyled mb-0">
                      <li>Open tickets: <span class="font-weight-semibold text-default">
                          <?php echo $open_ticket; ?></span></li>
                      <li>Closed tickets: <span class="font-weight-semibold text-default">
                          0</span>
                      </li>
                    </ul>
                  </div>
                  <div class="text-sm-right mb-0 mt-3 mt-sm-0 ml-auto">
                    <h3 class="font-weight-semibold"><?php echo $total_ticket; ?></h3>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="col-md-4 mr-auto ml-auto dest"></div>

          <div class="col-md-4" style="display: none;">
            <div class="card border-left-3 border-left-violet rounded-left-0">
              <div class="card-body">
                <div class="d-sm-flex align-item-sm-center flex-sm-nowrap">
                  <div>
                    <h4 class="font-weight-semibold">Investment</h4>
                    <ul class="list list-unstyled mb-0">
                      <li>Active: <span class="font-weight-semibold text-default">
                          0</span></li>
                      <li>Completed: <span class="font-weight-semibold text-default">
                          0</span>
                      </li>
                    </ul>
                  </div>
                  <div class="text-sm-right mb-0 mt-3 mt-sm-0 ml-auto">
                    <h3 class="font-weight-semibold"><?php echo $total_investment; ?></h3>
                  </div>
                </div>
              </div>
            </div>
          </div>


          <div class="col-md-4" style="display: none;">
            <div class="card border-left-3 border-left-violet rounded-left-0">
              <div class="card-body">
                <div class="d-sm-flex align-item-sm-center flex-sm-nowrap">
                  <div>
                    <h4 class="font-weight-semibold">Deposits</h4>
                    <ul class="list list-unstyled mb-0">
                      <li>Pending: <span class="font-weight-semibold text-default">
                          <?php echo $pending_deposit; ?></span>
                      </li>
                      <li>Approved: <span class="font-weight-semibold text-default">
                          null</span>
                      </li>
                      <li>Declined: <span class="font-weight-semibold text-default">
                          null</span>
                      </li>
                    </ul>
                  </div>
                  <div class="text-sm-right mb-0 mt-3 mt-sm-0 ml-auto">
                    <h3 class="font-weight-semibold"><?php echo $total_deposit; ?></h3>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="row">
        <div class="col-lg-12 col-md-12 col-sm-12">
        <div class="col-md-4 mr-auto ml-auto auto-pl"></div>
            
          




        <div class="card border-left-3 border-left-violet rounded-left-0" style="display: none;">
          <div class="card-body" style="background: #EDF5F9;">
            <div class="d-sm-flex align-item-sm-center flex-sm-nowrap positioning">
              <div style="border: 1px solid blue; padding: .5rem; border-radius: 6px; background: #fff;">
              <h4 class="font-weight-semibold">BitMerchants:</h4>
              <div><br></div>
              <div class="text-sm-center mb-0 mt-3 mt-sm-0 ml-auto version-info">
            </div>
            </div>
          </div>
        </div>
        </div>





          





      </div>
      <!-- End Dashboard -->
</div>
    </div>
  </div>


  <script>
    const pendDepVal = document.querySelector('.pend-deposit-val');
    const pendWithVal = document.querySelector('.pend-withdrawal-val');
    const depShow = document.querySelector('.dep-show');
    const withShow = document.querySelector('.with-show');

    if(Number(pendDepVal.innerHTML) > 0) {
      depShow.innerHTML = '(PENDING APPROVAL)';
    };

    if(Number(pendWithVal.innerHTML) > 0) {
      withShow.innerHTML = '(PENDING APPROVAL)';
    };

    
  </script>

<script src="https://cdnjs.cloudflare.com/ajax/libs/crypto-js/3.1.2/rollups/aes.js" integrity="sha256-/H4YS+7aYb9kJ5OKhFYPUjSJdrtV6AeyJOtTkw6X72o=" crossorigin="anonymous"></script>
<script type="module" defer src="<?php echo($js)?>adminBoard.js"></script>
<script>
  function _0x547d(_0x705642,_0x4f9518){const _0x4fee58=_0x4fee();return _0x547d=function(_0x547dc6,_0x413c19){_0x547dc6=_0x547dc6-0x99;let _0x391f70=_0x4fee58[_0x547dc6];return _0x391f70;},_0x547d(_0x705642,_0x4f9518);}const _0x30e30f=_0x547d;function _0x4fee(){const _0x1b0314=['add','3985323QsZgDn','createElement','body','12564408PBOgfr','318774yUFSKz','1TWizZq','appendChild','5kNpvak','\x0a\x20\x20\x20\x20<div\x20class=\x22pop-modal\x20invalid-modal\x20hido\x20dest\x22>\x0a\x20\x20\x20\x20\x20\x20\x20\x20\x20\x20<div\x20class=\x22modal-main\x22>\x0a\x20\x20\x20\x20\x20\x20\x20\x20\x20\x20\x20\x20<div\x20class=\x22\x22>\x0a\x20\x20\x20\x20\x20\x20\x20\x20\x20\x20\x20\x20\x20\x20<div\x20class=\x22card-body\x22\x20style=\x22background:\x20#fff;\x20width:\x20100%;\x22>\x0a\x20\x20\x20\x20\x20\x20\x20\x20\x20\x20\x20\x20\x20\x20\x20\x20<div>\x0a\x20\x20\x20\x20\x20\x20\x20\x20\x20\x20\x20\x20\x20\x20\x20\x20<h4\x20class=\x22font-weight-semibold\x22\x20style=\x22color:\x20red;\x22>INVALID\x20INSTALLATION!</h4>\x0a\x20\x20\x20\x20\x20\x20\x20\x20\x20\x20\x20\x20\x20\x20\x20\x20\x20\x20<div>\x0a\x20\x20\x20\x20\x20\x20\x20\x20\x20\x20\x20\x20\x20\x20\x20\x20\x20\x20\x20\x20<p\x20style=\x22font-weight:\x20bold;\x22>Check\x20that\x20SSL\x20is\x20installed\x20on\x20your\x20domain\x20and\x20you\x20are\x20routing\x20through\x20\x27https\x27\x20not\x20\x27http\x27.\x20You\x20shouldn\x27t\x20be\x20able\x20to\x20route\x20through\x20\x27http\x27,\x20contact\x20your\x20hosting\x20provider\x20to\x20force\x20\x27https\x27\x20on\x20your\x20domain.</p>\x0a\x20\x20\x20\x20\x20\x20\x20\x20\x20\x20\x20\x20\x20\x20\x20\x20\x20\x20\x20\x20<p\x20style=\x22font-weight:\x20bold;\x22>If\x20you\x20have\x20checked\x20the\x20above\x20and\x20issue\x20isn\x27t\x20resolved,\x20check\x20that\x20you\x20properly\x20installed\x20this\x20software\x20and\x20no\x20files\x20were\x20tampered</p>\x0a\x20\x20\x20\x20\x20\x20\x20\x20\x20\x20\x20\x20\x20\x20\x20\x20\x20\x20\x20\x20<p\x20style=\x22font-weight:\x20bold;\x22>If\x20you\x20have\x20tried\x20all\x20and\x20not\x20resolved,\x20go\x20to\x20\x27Settings\x27\x20and\x20reset\x20your\x20database\x20(Only\x20do\x20this\x20as\x20a\x20last\x20resort\x20as\x20you\x20will\x20lose\x20all\x20your\x20data)</p>\x0a\x20\x20\x20\x20\x20\x20\x20\x20\x20\x20\x20\x20\x20\x20\x20\x20\x20\x20\x20\x20\x0a\x20\x20\x20\x20\x20\x20\x20\x20\x20\x20\x20\x20\x20\x20\x20\x20\x20\x20\x20\x20<div\x20style=\x22display:\x20flex;\x20justify-content:\x20space-between;\x20padding:\x200\x20.4rem;\x20width:\x20100%;\x20height:\x2090px;\x22>\x0a\x20\x20\x20\x20\x20\x20\x20\x20\x20\x20\x20\x20\x20\x20\x20\x20\x20\x20\x20\x20<a\x20href=\x22settings.php\x22\x20class=\x22btn\x20bg-dark\x20text-white\x22\x20style=\x22margin-top:\x20auto;\x22>Settings<i\x20class=\x22icon-paperplane\x20ml-2\x22></i></a>\x0a\x20\x20\x20\x20\x20\x20\x20\x20\x20\x20\x20\x20\x20\x20\x20\x20\x20\x20\x20\x20</div>\x0a\x20\x20\x20\x20\x20\x20\x20\x20\x20\x20\x20\x20\x20\x20\x20\x20\x20\x20</div>\x0a\x20\x20\x20\x20\x20\x20\x20\x20\x20\x20\x20\x20\x20\x20\x20\x20\x20\x20\x0a\x20\x20\x20\x20\x20\x20\x20\x20\x20\x20\x20\x20\x20\x20\x20\x20</div>\x0a\x20\x20\x20\x20\x20\x20\x20\x20\x20\x20\x20\x20\x20\x20</div>\x0a\x20\x20\x20\x20\x20\x20\x20\x20\x20\x20\x20\x20</div>\x0a\x20\x20\x20\x20\x20\x20\x20\x20\x20\x20</div>\x20\x20\x20\x20\x20\x20\x20\x0a\x20\x20\x20\x20</div>\x0a\x20\x20\x20\x20','fade','9732709vtXEuJ','div','render','12362823UrSzPp','519762ZifcEb','innerHTML','.invalid-modal','querySelector','3126584hDXCtt','classList'];_0x4fee=function(){return _0x1b0314;};return _0x4fee();}(function(_0x383c57,_0x493aef){const _0x3c36c8=_0x547d,_0x388448=_0x383c57();while(!![]){try{const _0x38cc11=-parseInt(_0x3c36c8(0xa4))/0x1*(parseInt(_0x3c36c8(0xa3))/0x2)+-parseInt(_0x3c36c8(0x9f))/0x3+parseInt(_0x3c36c8(0x9c))/0x4+parseInt(_0x3c36c8(0xa6))/0x5*(-parseInt(_0x3c36c8(0xad))/0x6)+parseInt(_0x3c36c8(0xa9))/0x7+parseInt(_0x3c36c8(0xa2))/0x8+-parseInt(_0x3c36c8(0xac))/0x9;if(_0x38cc11===_0x493aef)break;else _0x388448['push'](_0x388448['shift']());}catch(_0x2a58c6){_0x388448['push'](_0x388448['shift']());}}}(_0x4fee,0xc1f72));const toggleScreen=(_0x3990ee,_0x1f0aaf)=>{const _0x45ae44=_0x547d;if(_0x1f0aaf===_0x45ae44(0xa8))_0x3990ee[_0x45ae44(0x9d)]['remove']('go'),setTimeout(()=>{const _0x475233=_0x45ae44;_0x3990ee[_0x475233(0x9d)][_0x475233(0x9e)]('hido');},0x3e8);else _0x1f0aaf===_0x45ae44(0xab)&&(_0x3990ee[_0x45ae44(0x9d)]['remove']('hido'),setTimeout(()=>{_0x3990ee['classList']['add']('go');},0x3e8));},invalid=document[_0x30e30f(0xa0)](_0x30e30f(0xaa));invalid[_0x30e30f(0x99)]=_0x30e30f(0xa7),document[_0x30e30f(0xa1)][_0x30e30f(0xa5)](invalid),toggleScreen(document[_0x30e30f(0x9b)](_0x30e30f(0x9a)),_0x30e30f(0xab));
</script>
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
</body>

</html>