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
  <title>BitMerchant | Website Setup</title>
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

    .photo-area {
      width: 100px;
      height: 100px;
      border: 2px solid #2F8AF5;
      border-radius: 5px;
      background: #E2DEDB;
      cursor: not-allowed;
      margin-bottom: 15px;
      display: flex;
      justify-content: center;
      align-items: center;
      filter: blur(6px);
    }

    .errr-msg {
      color: #D82122 !important;
      font-size: 13px !important;
      font-weight: 100 !important;
      display: none !important;
    }
  
    .form-group.error .photo-area {
        border: 1px solid #D82122 !important;
    }

    .form-group.good .photo-area {
        border: 1px solid green !important;
    }
      
    .form-group.error .errr-msg {
        display: block !important;
    }

    .form-group.good .errr-msg {
        display: block !important;
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
                          <h4 class="card-title">Setup Your Platform</h4>
                          

                                    
                                    <!-- <a type="button" class="btn btn-default waves-effect" href="Registered-users">Back</a> -->
                                    
                                    

                                   <div class="form-group row">
                                    <label class="col-form-label col-lg-2">Platform Name:</label>
                                    <div class="col-lg-10">
                                    <span style="color: red;"><small>You can write text (one word) or html to style your name</small></span>
                                      <textarea type="text" class="form-control" id="platform-name"></textarea>
                                      
                                      <div style="display: flex;">
                                        <p style="font-size: 12px;">Set name in website header</p>
                                        <div class="input-group">
                                          <select type="text" id="name-header" class="form-control">
                                              <option value="showy">YES</option>
                                              <option value="hido">NO</option>
                                          </select>
                                        </div>
                                      </div>
                                    </div>
                                    
                                  </div>


                                  <div class="form-group row logo-group">
                                    <label class="col-form-label col-lg-2">Logo:</label>
                                    <div class="col-lg-10">
                                    <span style="color: red;"><small>Select to upload your website logo</small></span>
                                      <div style="display: flex; gap: 3rem;">
                                        <div class="photo-area logo-area" id="logo-upload">
                                          <div><img src="../bundle/logo/<?php echo $logo ?>" width="70px" height="70px" style="width: 70px; border-radius: 5px;" id="current-logo" alt="website logo"></div>
                                        </div>

                                        <div class="logo-width-area" style="display: flex;">
                                          <input style="width: 77px;" id="logo-width" type="number" class="form-control">
                                          <p>px</p>
                                        </div>
                                      </div>

                                      <div style="display: flex;">
                                        <p style="font-size: 12px;">Set logo in website header</p>
                                        <div class="input-group">
                                          <select type="text" id="logo-header" class="form-control">
                                              <option value="showy">YES</option>
                                              <option value="hido">NO</option>
                                          </select>
                                        </div>
                                      </div>
                                    </div>
                                    
                                  </div>




                                  <div class="form-group row icon-group">
                                    <label class="col-form-label col-lg-2">Icon:</label>
                                    <div class="col-lg-10">
                                    <span style="color: red;"><small>Select to upload your website icon/ favicon (also used in transaction receipt)</small></span>
                                      <div style="display: flex; gap: 3rem;">
                                        <div class="photo-area icon-area" id="icon-upload">
                                          <div><img src="../bundle/logo/<?php echo $icon ?>" width="70px" height="70px" style="width: 70px; border-radius: 5px;" id="current-icon" alt="website icon"></div>
                                        </div>
                                      </div>
                                    </div>
                                  </div>
                                  


                                   

                                   <div class="form-group row">
                                    <label class="col-form-label col-lg-2">Domain URL<br> (without 'http'):</label>
                                    <div class="col-lg-10">
                                      <div class="input-group">
                                       <input id="platform-url" type="text" class="form-control">
                                      </div>
                                      <span class="text-danger"></span>
                                    </div>
                                  </div>

                                   <div class="form-group row">
                                    <label class="col-form-label col-lg-2">Support Email:</label>
                                    <div class="col-lg-10">
                                      <div class="input-group">
                                       <input type="email" id="platform-email" class="form-control">
                                      </div>
                                      
                                    </div>
                                  </div>

                                  <div class="form-group row">
                                    <label class="col-form-label col-lg-2">Phone Number:</label>
                                    <div class="col-lg-10">
                                      <div class="input-group">
                                       <input type="text" id="platform-number" class="form-control">
                                      </div>
                                      
                                    </div>
                                  </div>

                                  <div class="form-group row">
                                    <label class="col-form-label col-lg-2">Parent Company:</label>
                                    <div class="col-lg-10">
                                    
                                      <textarea type="text" class="form-control" id="parent"></textarea>
                                      
                                    </div>
                                  </div>

                                  <div class="form-group row">
                                    <label class="col-form-label col-lg-2">License Body/Commission:</label>
                                    <div class="col-lg-10">
                                    
                                      <textarea type="text" class="form-control" id="license-body"></textarea>
                                      
                                    </div>
                                  </div>

                                  <div class="form-group row">
                                    <label class="col-form-label col-lg-2">License Number:</label>
                                    <div class="col-lg-10">
                                    
                                      <input type="text" id="license-number" class="form-control">
                                      
                                    </div>
                                  </div>




                                  <div class="form-group row">
                                    <label class="col-form-label col-lg-2">Full Address:</label>
                                    <div class="col-lg-10">
                                    
                                      <textarea type="text" class="form-control" id="platform-address"></textarea>
                                      
                                    </div>
                                  </div>

                                  <div class="form-group row">
                                    <label class="col-form-label col-lg-2">Country:</label>
                                    <div class="col-lg-10">
                                      <div class="input-group">
                                       <input type="text" id="platform-country" class="form-control">
                                      </div>
                                      
                                    </div>
                                  </div>

                                  <div class="form-group row">
                                    <label class="col-form-label col-lg-2">Default Currency:</label>
                                    <div class="col-lg-10">
                                      <div class="input-group">
                                       <select type="text" id="platform-currency" class="form-control">
                                          <option value="USD">USD</option>
                                          <option value="EUR">EUR</option>
                                          <option value="YEN">YEN</option>
                                       </select>
                                      </div>
                                    </div>  
                                  </div>

                                  <div class="form-group row">
                                    <label class="col-form-label col-lg-2">Withdrawal fee in %:</label>
                                    <div class="col-lg-10">
                                      <div class="input-group">
                                       <input type="number" id="with-fee" class="form-control">
                                      </div>
                                      
                                    </div>
                                  </div>


                                  <label class="col-form-label col-lg-2">Referrals:</label>
                                    <div style="font-size: 12px; color: #1F519C;">Note that referers will earn only on the crypto asset deposited by their referees. If they do not have a wallet on that asset, a wallet will be created automatically.</div>
                                    <div style="font-size: 12px; color: #1F519C;">To disable referrals on this platform, set Referral Bonus percentage to 0.</div>
                                  <div class="form-group row">
                                    <div class="col-lg-3">
                                    <label class="col-form-label ">Referral Bonus in %:</label>
                                      <div class="input-group">
                                       <input type="number" id="ref-bonus-inp" class="form-control">
                                      </div>
                                    </div>

                                    <div class="col-lg-3">
                                    <label class="col-form-label">Referral Earning instance:</label>
                                      <div class="input-group">
                                       <select type="text" id="ref-inst-inp" class="form-control">
                                          <option value="one">First Deposit</option>
                                          <option value="all">All Deposits</option>
                                       </select>
                                      </div>
                                      <span style="font-size: 11px;">The referer will get <span id="ref-bonus-div"></span>% of <span id="ref-inst-div"></span> deposit made by the referee</span>
                                    </div>
                                  </div>

                                  <label for="">Investment Plans in USD:</label>
                                  <div style="font-size: 12px; color: #1F519C;">User can only make investments with funds in their BTC wallet. <br>User can fund their BTC wallet directly or swap other crypto to BTC using the platform's exchange feature</div>
                                  <span style="color: red;"><small>Max should not be less than min and should not be "0"</small></span>
                                  <div class="investment-plans" style="padding: 1rem;">
                                    <div class="form-group row">
                                      <label class="col-form-label col-lg-2" style="font-size: 16px; color:brown">Starter:</label>
                                      <div class="col-lg-3">
                                      <h5>Min</h5>
                                        <div class="input-group">
                                        <input type="number" id="starter-min" placeholder="Min"  class="form-control">
                                        </div>
                                        
                                      </div>
                                      <div class="col-lg-3">
                                      <h5>Max</h5>
                                        <div class="input-group">
                                        <input type="number" id="starter-max" placeholder="Max"  class="form-control">
                                        </div>
                                        
                                      </div>

                                      <div class="col-lg-2">
                                      <h5>Rate (%)</h5>
                                        <div class="input-group">
                                        <input type="number" id="starter-rate" placeholder="Rate"  class="form-control">
                                        </div>
                                        
                                      </div>

                                      <div class="col-lg-6">
                                        <h5>Interest interval</h5>
                                        <div class="col-lg-3">
                                          <div class="input-group">
                                            <input type="number" id="starter-int-val" placeholder="Value"  class="form-control">
                                          </div>
                                        </div>
                                        <div class="col-lg-3">
                                          <div class="input-group">
                                            <select type="text" id="starter-int-time" class="form-control">
                                              <option value="hours">hours</option>
                                              <option value="days">days</option>
                                              <option value="weeks">weeks</option>
                                              <option value="months">months</option>
                                              <option value="years">years</option>
                                            </select>
                                          </div>
                                        </div>
                                      </div>

                                      <div class="col-lg-6">
                                        <h5>Investment Period</h5>
                                        <div class="col-lg-3">
                                          <div class="input-group">
                                            <input type="number" id="starter-inv-val" placeholder="Value"  class="form-control">
                                          </div>
                                        </div>
                                        <div class="col-lg-3">
                                          <div class="input-group">
                                            <select type="text" id="starter-inv-time" class="form-control">
                                              <option value="hours">hours</option>
                                              <option value="days">days</option>
                                              <option value="weeks">weeks</option>
                                              <option value="months">months</option>
                                              <option value="years">years</option>
                                            </select>
                                          </div>
                                        </div>
                                      </div>
                                    </div>

                                    <div class="form-group row">
                                      <label class="col-form-label col-lg-2" style="font-size: 16px; color:brown">Basic:</label>
                                      <div class="col-lg-3">
                                      <h5>Min</h5>
                                        <div class="input-group">
                                        <input type="number" id="basic-min" placeholder="Min"  class="form-control">
                                        </div>
                                        
                                      </div>
                                      <div class="col-lg-3">
                                        <h5>Max</h5>
                                        <div class="input-group">
                                        <input type="number" id="basic-max" placeholder="Max"  class="form-control">
                                        </div>
                                        
                                      </div>

                                      <div class="col-lg-2">
                                      <h5>Rate (%)</h5>
                                        <div class="input-group">
                                        <input type="number" id="basic-rate" placeholder="Rate"  class="form-control">
                                        </div>
                                        
                                      </div>

                                      <div class="col-lg-6">
                                        <h5>Interest interval</h5>
                                        <div class="col-lg-3">
                                          <div class="input-group">
                                            <input type="number" id="basic-int-val" placeholder="Value"  class="form-control">
                                          </div>
                                        </div>
                                        <div class="col-lg-3">
                                          <div class="input-group">
                                            <select type="text" id="basic-int-time" class="form-control">
                                              <option value="hours">hours</option>
                                              <option value="days">days</option>
                                              <option value="weeks">weeks</option>
                                              <option value="months">months</option>
                                              <option value="years">years</option>
                                            </select>
                                          </div>
                                        </div>
                                      </div>

                                      <div class="col-lg-6">
                                        <h5>Investment Period</h5>
                                        <div class="col-lg-3">
                                          <div class="input-group">
                                            <input type="number" id="basic-inv-val" placeholder="Value"  class="form-control">
                                          </div>
                                        </div>
                                        <div class="col-lg-3">
                                          <div class="input-group">
                                            <select type="text" id="basic-inv-time" class="form-control">
                                              <option value="hours">hours</option>
                                              <option value="days">days</option>
                                              <option value="weeks">weeks</option>
                                              <option value="months">months</option>
                                              <option value="years">years</option>
                                            </select>
                                          </div>
                                        </div>
                                      </div>
                                    </div>

                                    <div class="form-group row">
                                      <label class="col-form-label col-lg-2" style="font-size: 16px; color:brown">Premium:</label>
                                      <div class="col-lg-3">
                                      <h5>Min</h5>
                                        <div class="input-group">
                                        <input type="number" id="premium-min" placeholder="Min"  class="form-control">
                                        </div>
                                        
                                      </div>
                                      <div class="col-lg-3">
                                      <h5>Max</h5>
                                        <div class="input-group">
                                        <input type="number" id="premium-max" placeholder="Max"  class="form-control">
                                        </div>
                                        
                                      </div>

                                      <div class="col-lg-2">
                                      <h5>Rate (%)</h5>
                                        <div class="input-group">
                                        <input type="number" id="premium-rate" placeholder="Rate"  class="form-control">
                                        </div>
                                        
                                      </div>

                                      <div class="col-lg-6">
                                        <h5>Interest interval</h5>
                                        <div class="col-lg-3">
                                          <div class="input-group">
                                            <input type="number" id="premium-int-val" placeholder="Value"  class="form-control">
                                          </div>
                                        </div>
                                        <div class="col-lg-3">
                                          <div class="input-group">
                                            <select type="text" id="premium-int-time" class="form-control">
                                              <option value="hours">hours</option>
                                              <option value="days">days</option>
                                              <option value="weeks">weeks</option>
                                              <option value="months">months</option>
                                              <option value="years">years</option>
                                            </select>
                                          </div>
                                        </div>
                                      </div>

                                      <div class="col-lg-6">
                                        <h5>Investment Period</h5>
                                        <div class="col-lg-3">
                                          <div class="input-group">
                                            <input type="number" id="premium-inv-val" placeholder="Value"  class="form-control">
                                          </div>
                                        </div>
                                        <div class="col-lg-3">
                                          <div class="input-group">
                                            <select type="text" id="premium-inv-time" class="form-control">
                                              <option value="hours">hours</option>
                                              <option value="days">days</option>
                                              <option value="weeks">weeks</option>
                                              <option value="months">months</option>
                                              <option value="years">years</option>
                                            </select>
                                          </div>
                                        </div>
                                      </div>
                                    </div>

                                    <div class="form-group row">
                                      <label class="col-form-label col-lg-2" style="font-size: 16px; color:brown">Gold:</label>
                                      <div class="col-lg-3">
                                      <h5>Min</h5>
                                        <div class="input-group">
                                        <input type="number" id="gold-min" placeholder="Min"  class="form-control">
                                        </div>
                                        
                                      </div>
                                      <div class="col-lg-3">
                                      <h5>Max</h5>
                                        <div class="input-group">
                                        <input type="number" id="gold-max" placeholder="Max"  class="form-control">
                                        </div>
                                        
                                      </div>
                                      <div class="col-lg-2">
                                      <h5>Rate (%)</h5>
                                        <div class="input-group">
                                        <input type="number" id="gold-rate" placeholder="Rate"  class="form-control">
                                        </div>
                                        
                                      </div>

                                      <div class="col-lg-6">
                                        <h5>Interest interval</h5>
                                        <div class="col-lg-3">
                                          <div class="input-group">
                                            <input type="number" id="gold-int-val" placeholder="Value"  class="form-control">
                                          </div>
                                        </div>
                                        <div class="col-lg-3">
                                          <div class="input-group">
                                            <select type="text" id="gold-int-time" class="form-control">
                                              <option value="hours">hours</option>
                                              <option value="days">days</option>
                                              <option value="weeks">weeks</option>
                                              <option value="months">months</option>
                                              <option value="years">years</option>
                                            </select>
                                          </div>
                                        </div>
                                      </div>

                                      <div class="col-lg-6">
                                        <h5>Investment Period</h5>
                                        <div class="col-lg-3">
                                          <div class="input-group">
                                            <input type="number" id="gold-inv-val" placeholder="Value"  class="form-control">
                                          </div>
                                        </div>
                                        <div class="col-lg-3">
                                          <div class="input-group">
                                            <select type="text" id="gold-inv-time" class="form-control">
                                              <option value="hours">hours</option>
                                              <option value="days">days</option>
                                              <option value="weeks">weeks</option>
                                              <option value="months">months</option>
                                              <option value="years">years</option>
                                            </select>
                                          </div>
                                        </div>
                                      </div>
                                    </div>
                                  <!-- cut -->


                                  <label for="">Arbitrage</label>
                                  <div style="font-size: 12px; color: #1F519C;">Add + or - values to increase or decrease crypto prices by a certain amount (e.g -1.005)</div>
                                  <div style="font-size: 12px; color: #1F519C;">Leave as 0 if you aren't using arbitrage</div>
                                  <div class="investment-plans" style="padding: 1rem;">
                                    <div class="form-group row">
                                      <label class="col-form-label col-lg-2" style="font-size: 16px; color:brown">BTC:</label>
                                      <div class="col-lg-3">
                                        <div class="input-group">
                                        <input type="number" id="btc-alt" placeholder="e.g +0.6855"  class="form-control">
                                        </div>
                                        
                                      </div>

                                      <div class="col-lg-3">
                                        <div class="input-group">
                                        <p style="font-size: 13px;">(Price: <span id="btc-price-value"></span>)</p>
                                        </div>
                                        
                                      </div>
                                      
                                    </div>
                                    <div class="form-group row">
                                      <label class="col-form-label col-lg-2" style="font-size: 16px; color:brown">ETH:</label>
                                      <div class="col-lg-3">
                                        <div class="input-group">
                                        <input type="number" id="eth-alt" placeholder="e.g -2.1666"  class="form-control">
                                        </div>
                                        
                                      </div>

                                      <div class="col-lg-3">
                                        <div class="input-group">
                                        <p style="font-size: 13px;">(Price: <span id="eth-price-value"></span>)</p>
                                        </div>
                                        
                                      </div>
                                      
                                    </div>
                                    <div class="form-group row">
                                      <label class="col-form-label col-lg-2" style="font-size: 16px; color:brown">USDT:</label>
                                      <div class="col-lg-3">
                                        <div class="input-group">
                                        <input type="number" id="usdt-alt" placeholder="e.g +1.0876"  class="form-control">
                                        </div>
                                        
                                      </div>

                                      <div class="col-lg-3">
                                        <div class="input-group">
                                        <p style="font-size: 13px;">(Price: <span id="usdt-price-value"></span>)</p>
                                        </div>
                                        
                                      </div>
                                      
                                    </div>
                                    <div class="form-group row">
                                      <label class="col-form-label col-lg-2" style="font-size: 16px; color:brown">BNB:</label>
                                      <div class="col-lg-3">
                                        <div class="input-group">
                                        <input type="number" id="bnb-alt" placeholder="e.g -0.0657"  class="form-control">
                                        </div>
                                        
                                      </div>

                                      <div class="col-lg-3">
                                        <div class="input-group">
                                        <p style="font-size: 13px;">(Price: <span id="bnb-price-value"></span>)</p>
                                        </div>
                                        
                                      </div>
                                      
                                    </div>
                                  </div>

                                  <div class="form-group row">
                                    <label class="col-form-label col-lg-2">Live Chat (optional):</label>
                                    <div class="col-lg-10">
                                      <div class="input-group">
                                      <textarea type="text" class="form-control" id="live-chat"></textarea>
                                      </div>
                                      
                                    </div>
                                  </div>

                                  <div class="form-group row">
                                    <label class="col-form-label col-lg-2">Start Button Position:</label>
                                    <div class="col-lg-3">
                                    <h4 style="font-size: 12px;">If your livechat is placed on the right, set start button to left (and vice versa)</h4>
                                    <div class="input-group">
                                       <select type="text" id="start-pos" class="form-control">
                                          <option value="left">Left</option>
                                          <option value="right">Right</option>
                                       </select>
                                      </div>
                                      
                                    </div>
                                  </div>

                                  

                                  <div class="text-right">
                                   
                                    <button type="update" class="btn bg-dark text-white update-btn">Update<i class="icon-paperplane ml-2"></i></button>
                                  </div>
                                

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



  <script type="module" defer src="<?php echo($js)?>adminSetup.js"></script>
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


