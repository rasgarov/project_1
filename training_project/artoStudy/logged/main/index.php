<?php
date_default_timezone_set("Asia/Baku");
require_once('../../procedures/connection/connect.php');
?>
<?php

// 2 hours in seconds
$inactive = 600; 
ini_set('session.gc_maxlifetime', $inactive); // set the session max lifetime to 2 hours

session_start();
$_SESSION['testing'] = time(); // Update session
if (isset($_SESSION['testing']) && (time() - $_SESSION['testing'] > $inactive)) {
    // last request was more than 2 hours ago
    session_unset();     // unset $_SESSION variable for this page
    session_destroy();   // destroy session data
}



if (isset($_SESSION['username'])) {

}else{

    header("location:../../login.php#contMain");

}


?>


<!DOCTYPE html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <title>ARTO Study - Onlayn Dərs & Təhsil</title>
    <link rel="stylesheet" href="assets/vendors/mdi/css/materialdesignicons.min.css" />
    <link rel="stylesheet" href="assets/vendors/flag-icon-css/css/flag-icon.min.css" />
    <link rel="stylesheet" href="assets/vendors/css/vendor.bundle.base.css" />
    <link rel="stylesheet" href="assets/vendors/font-awesome/css/font-awesome.min.css" />
    <link rel="stylesheet" href="assets/vendors/bootstrap-datepicker/bootstrap-datepicker.min.css" />
    <link rel="stylesheet" href="assets/css/style.css" />
    <link rel="shortcut icon" href="assets/images/favicon.png" />
  </head>
  <body>
    <div class="container-scroller">
      <nav class="sidebar sidebar-offcanvas" id="sidebar">
        <div class="text-center sidebar-brand-wrapper d-flex align-items-center">
          <a class="sidebar-brand brand-logo" href="index.php"><img src="assets/images/logo.png" alt="ARTO Study Logo" /></a>
          <a class="sidebar-brand brand-logo-mini pl-4 pt-3" href="index.php"><img src="assets/images/logo-mini.svg" alt="ARTO Study Logo" /></a>
        </div>
        <ul class="nav">
          <li class="nav-item nav-profile">
            <a href="#" class="nav-link">
              <div class="nav-profile-image">
                <img src="assets/images/faces/face1.jpg" alt="profile" />
                <span class="login-status online"></span>
                <!--change to offline or busy as needed-->
              </div>
              <div class="nav-profile-text d-flex flex-column pr-3">
                <span class="font-weight-medium mb-2"><?php echo $_SESSION['username'];?></span>
                <span class="font-weight-normal">50 AZN</span>
              </div>
              <!-- <span class="badge badge-danger text-white ml-3 rounded">3</span> -->
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="index.php">
              <i class="mdi mdi-home menu-icon"></i>
              <span class="menu-title">Ana Səhifə</span>
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" data-toggle="collapse" href="#ui-basic" aria-expanded="false" aria-controls="ui-basic">
              <i class="mdi mdi-crosshairs-gps menu-icon"></i>
              <span class="menu-title">Dərslər</span>
              <i class="menu-arrow"></i>
            </a>
            <div class="collapse" id="ui-basic">
              <ul class="nav flex-column sub-menu">
                <li class="nav-item">
                  <a class="nav-link" href="#">Məktəbəqədər</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="#">Universitet</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="#">Bağça</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="#">Kurslar</a>
                </li>
              </ul>
            </div>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#">
              <i class="mdi mdi-contacts menu-icon"></i>
              <span class="menu-title">Profil Məlumatları</span>
            </a>
          </li>
          
          <li class="nav-item sidebar-actions">
            <div class="nav-link">
              <div class="mt-4">
               
                <ul class="mt-4 pl-0">
                  <li onclick="window.location.href='../../procedures/logout.php?logout';">Sign Out</li>
                </ul>
              </div>
            </div>
          </li>
        </ul>
      </nav>
      <div class="container-fluid page-body-wrapper">
        <div id="theme-settings" class="settings-panel">
          <i class="settings-close mdi mdi-close"></i>
          <p class="settings-heading">SIDEBAR SKINS</p>
          <div class="sidebar-bg-options selected" id="sidebar-default-theme">
            <div class="img-ss rounded-circle bg-light border mr-3"></div> Default
          </div>
          <div class="sidebar-bg-options" id="sidebar-dark-theme">
            <div class="img-ss rounded-circle bg-dark border mr-3"></div> Dark
          </div>
          <p class="settings-heading mt-2">HEADER SKINS</p>
          <div class="color-tiles mx-0 px-4">
            <div class="tiles light"></div>
            <div class="tiles dark"></div>
          </div>
        </div>
        <nav class="navbar col-lg-12 col-12 p-lg-0 fixed-top d-flex flex-row">
          <div class="navbar-menu-wrapper d-flex align-items-stretch justify-content-between">
            <a class="navbar-brand brand-logo-mini align-self-center d-lg-none" href="index.php"><img src="assets/images/logo-mini.svg" alt="logo" /></a>
            <button class="navbar-toggler navbar-toggler align-self-center mr-2" type="button" data-toggle="minimize">
              <i class="mdi mdi-menu"></i>
            </button>
           
            <ul class="navbar-nav navbar-nav-right ml-lg-auto">
              
              <li class="nav-item nav-profile dropdown border-0">
                <a class="nav-link dropdown-toggle" id="profileDropdown" href="#" data-toggle="dropdown">
                  <img class="nav-profile-img mr-2" alt="" src="assets/images/faces/face1.jpg" />
                  <span class="profile-name"><?php echo $_SESSION['username'];?></span>
                </a>
                <div class="dropdown-menu navbar-dropdown w-100" aria-labelledby="profileDropdown">
                 
                  <a class="dropdown-item" href="../../procedures/logout.php?logout">
                    <i class="mdi mdi-logout mr-2 text-primary"></i> Hesabdan Çıx </a>
                </div>
              </li>
            </ul>
            <button class="navbar-toggler navbar-toggler-right d-lg-none align-self-center" type="button" data-toggle="offcanvas">
              <span class="mdi mdi-menu"></span>
            </button>
          </div>
        </nav>
        <div class="main-panel">
          <div class="content-wrapper pb-0">
            <div class="page-header flex-wrap">
              <h3 class="mb-0"> Xoş gördük <?php echo $_SESSION['username'];?>! <span class="pl-0 h6 pl-sm-2 text-muted d-inline-block">ARTO Study - Onlayn Dərs & Təhsil</span>
              </h3>
              
            </div>


           <div class="row">
            <div class="col-xl-4 col-md-6 grid-margin stretch-card">
              <!-- to_do_rashid_start -->
              <div class="card">
                  <div class="card-body">
                    <h4 class="card-title text-black">Görüləcək işlər siyahısı</h4>
                    <p class="text-muted">Tərtib etdi: Rashid Asgarov</p>
                    <div class="list-wrapper">
                      <ul class="d-flex flex-column-reverse todo-list todo-list-custom">
                        <li>
                          <div class="form-check">
                            <label class="form-check-label">
                              <input class="checkbox" type="checkbox" /> Ev tapşırıqlarını etmək </label>
                            <!-- <span class="list-time"></span> -->
                            
<!-- echo date("H:i:s"); -->
                          </div>
                        </li>
                        <li>
                          <div class="form-check">
                            <label class="form-check-label">
                              <input class="checkbox" type="checkbox" /> Dərsə yazılmaq </label>
                            <!-- <span class="list-time"></span> -->
                          </div>
                        </li>
                        <li class="completed">
                          <div class="form-check">
                            <label class="form-check-label">
                              <input class="checkbox" type="checkbox" checked /> Qeydiyyatdan keçmək </label>
                            <!-- <span class="list-time"></span> -->
                          </div>
                        </li>
                       
                      </ul>
                    </div>
                    <div class="add-items d-flex flex-wrap flex-sm-nowrap">
                      <input type="text" class="form-control todo-list-input flex-grow" id="work_to_do" placeholder="Görüləcək işi yazın" />
                      <button class="add btn btn-primary font-weight-regular text-nowrap" id="add-task"> Əlavə Et </button>
                    </div>
                  </div>
                </div>
                <!-- to_do_rashid_end -->
            </div>
            <div class="col-xl-4 col-md-6 grid-margin stretch-card">
              <!--datepicker-->
              <div class="card">
                <div class="card-body">
                  <div id="inline-datepicker" class="datepicker table-responsive"></div>
                </div>
              </div>
              <!--datepicker ends-->
            </div>
            <div class="col-xl-4 col-md-6 stretch-card grid-margin stretch-card">
             <!--activity-->
             <div class="card">
                  <div class="card-body">
                    <h4 class="card-title">
                      <span class="d-flex justify-content-between">
                        <span>Aktivlik</span>
                        
                      </span>
                    </h4>
                    <ul class="gradient-bullet-list border-bottom">
                     
                      <li>
                        <h6 class="mb-0"> Uğurla qeydiyyatdan keçdiniz </h6>
                        <p class="text-muted">1 saat əvvəl</p>
                      </li>
                      <li>
                        <h6 class="mb-0"> Balansınızı artırdınız </h6>
                        <p class="text-muted">20 dəqiqə əvvəl</p>
                      </li>
                    </ul>
                  
                  </div>
                </div>
                <!--activity ends-->
            </div>
          </div>
          
          
          </div>
          <footer class="footer">
            <div class="d-sm-flex justify-content-center justify-content-sm-between">
              <span class="text-muted d-block text-center text-sm-left d-sm-inline-block">Müəllif hüququ © ARTO Study</span>
              
            </div>
          </footer>
        </div>
        <!-- main-panel ends -->
      </div>
      <!-- page-body-wrapper ends -->
    </div>
    <!-- container-scroller -->
    <!-- plugins:js -->
    <script src="assets/vendors/js/vendor.bundle.base.js"></script>
    <!-- endinject -->
    <!-- Plugin js for this page -->
    <script src="assets/vendors/chart.js/Chart.min.js"></script>
    <script src="assets/vendors/bootstrap-datepicker/bootstrap-datepicker.min.js"></script>
    <script src="assets/vendors/flot/jquery.flot.js"></script>
    <script src="assets/vendors/flot/jquery.flot.resize.js"></script>
    <script src="assets/vendors/flot/jquery.flot.categories.js"></script>
    <script src="assets/vendors/flot/jquery.flot.fillbetween.js"></script>
    <script src="assets/vendors/flot/jquery.flot.stack.js"></script>
    <script src="assets/vendors/flot/jquery.flot.pie.js"></script>
    <!-- End plugin js for this page -->
    <!-- inject:js -->
    <script src="assets/js/off-canvas.js"></script>
    <script src="assets/js/hoverable-collapse.js"></script>
    <script src="assets/js/misc.js"></script>
    <!-- endinject -->
    <!-- Custom js for this page -->
    <script src="assets/js/dashboard.js"></script>
    <!-- End custom js for this page -->
    <script src="assets/js/by_me.js"></script>
  </body>
</html>