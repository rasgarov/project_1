

<?php
session_start();

if(isset($_SESSION['email'])){

    header("location:logged/main/");

}

$url = 'http://'.$_SERVER['SERVER_NAME'].$_SERVER['REQUEST_URI'];


if (strpos($url,'error') == true) {
   ?>
<script>
async function setMesg(){
    await alert('Email və ya şifrə yanlışdır');
    window.location.href="login.php#contMain";
}
setMesg();
</script>
<?php

} 
?>
<!DOCTYPE html>
<html lang="az">

<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>Giriş & Qeydiyyat - Onlayn Dərs & Təhsil</title>
    <meta name="robots" content="noindex, follow" />
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Favicon -->
    <link rel="shortcut icon" type="image/x-icon" href="assets/images/favicon.png">

    <!-- CSS
	============================================ -->
    <link rel="stylesheet" href="assets/css/vendor/bootstrap.min.css">
    <link rel="stylesheet" href="assets/css/vendor/slick.css">
    <link rel="stylesheet" href="assets/css/vendor/slick-theme.css">
    <link rel="stylesheet" href="assets/css/plugins/sal.css">
    <link rel="stylesheet" href="assets/css/plugins/feather.css">
    <link rel="stylesheet" href="assets/css/plugins/fontawesome.min.css">
    <link rel="stylesheet" href="assets/css/plugins/euclid-circulara.css">
    <link rel="stylesheet" href="assets/css/plugins/swiper.css">
    <link rel="stylesheet" href="assets/css/plugins/magnify.css">
    <link rel="stylesheet" href="assets/css/plugins/odometer.css">
    <link rel="stylesheet" href="assets/css/plugins/animation.css">
    <link rel="stylesheet" href="assets/css/plugins/bootstrap-select.min.css">
    <link rel="stylesheet" href="assets/css/plugins/jquery-ui.css">
    <link rel="stylesheet" href="assets/css/plugins/magnigy-popup.min.css">
    <link rel="stylesheet" href="assets/css/style.css">
</head>

<body class="rbt-header-sticky">

    <!-- Start Header Area -->
    <header class="rbt-header rbt-header-10">
        <div class="rbt-sticky-placeholder"></div>
        <!-- Start Header Top  -->
        <?php include('common/header_top.php'); ?>
        <!-- End Header Top  -->
        <div class="rbt-header-wrapper header-space-betwween header-sticky">
           


             <!-- Start header Rashid -->
             <div class="container-fluid" id="headCommon">
                    <?php include('common/header.php'); ?>
                </div>
    
                <!-- End header Rashid -->




        </div>
       
        <a class="rbt-close_side_menu" href="javascript:void(0);"></a>
    </header>

    
    <?php include('common/mobile_menu.php'); ?>
   
    <!-- Start breadcrumb Area -->
    <div class="rbt-breadcrumb-default ptb--100 ptb_md--50 ptb_sm--30 bg-gradient-1">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="breadcrumb-inner text-center">
                        <h2 class="title">Giriş & Qeydiyyat</h2>
                        <ul class="page-list">
                            <li class="rbt-breadcrumb-item">
                                <a href="index.php">Ana səhifə</a>
                            </li>
                            <li>
                                <div class="icon-right">
                                    <i class="feather-chevron-right"></i>
                                </div>
                            </li>
                            <li class="rbt-breadcrumb-item active">Giriş & Qeydiyyat</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- End Breadcrumb Area -->

    <div class="rbt-elements-area bg-color-white rbt-section-gap"  id="contMain">
        <div class="container">
            <div class="row gy-5 row--30">

                <div class="col-lg-6">
                    <div class="rbt-contact-form contact-form-style-1 max-width-auto">
                        <h3 class="title">Giriş</h3>
                        <!-- <form class="max-width-auto"> -->
                        <form method="post" class="max-width-auto"  id="log_form" action="procedures/login.php" enctype="multipart/form-data" role="login" autoComplete="new-password">
                        
                            <div class="form-group">
                                <input name="con_name" type="email" autoComplete="new-password" required />
                                <label>Email *</label>
                                <span class="focus-border"></span>
                            </div>
                            <div class="form-group">
                                <input name="con_email" type="password" autoComplete="new-password" required />
                                <label>Şifrə *</label>
                                <span class="focus-border"></span>
                            </div>

                            <div class="row mb--30">
                                <div class="col-lg-6">
                                    <div class="rbt-checkbox">
                                        <input type="checkbox" id="rememberme" name="rememberme">
                                        <label for="rememberme">Məni xatırla</label>
                                    </div>
                                </div>
                                <div class="col-lg-6">
                                    <div class="rbt-lost-password text-end">
                                        <a class="rbt-btn-link" href="#">Şifrəni unutdun?</a>
                                    </div>
                                </div>
                            </div>

                            <div class="form-submit-group">
                                <button type="submit" class="rbt-btn btn-md btn-gradient hover-icon-reverse w-100" name="logged">
                                    <span class="icon-reverse-wrapper">
                                        <span class="btn-text">Giriş et</span>
                                        <span class="btn-icon">
                                            <i class="feather-arrow-right"></i>
                                        </span>
                                        <span class="btn-icon">
                                            <i class="feather-arrow-right"></i>
                                        </span>
                                    </span>
                                </button>
                            </div>
                        </form>
                    </div>
                </div>

                <div class="col-lg-6">
                    <div class="rbt-contact-form contact-form-style-1 max-width-auto">
                        <h3 class="title">Qeydiyyat</h3>
                        <form method="post" class="max-width-auto"  id="reg_form" action="procedures/register.php" enctype="multipart/form-data" autoComplete="new-password">
                        <input autocomplete="false" name="hidden" type="text" style="display:none;">
                            <div class="form-group">
                                <input name="register-email" type="email" autoComplete="new-password" required />
                                <label>Email *</label>
                                <span class="focus-border"></span>
                            </div>

                            <div class="form-group">
                                <input name="register_user" type="text" autoComplete="new-password" required />
                                <label>İstifadəçi adı *</label>
                                <span class="focus-border"></span>
                            </div>
                            
                          
                            <div class="form-group">
                                <input name="register_password" type="password" autoComplete="new-password" required />
                                <label>Şifrə *</label>
                                <span class="focus-border"></span>
                            </div>

                            <div class="form-group">
                                <input name="register_conpassword" type="password" autoComplete="new-password" required />
                                <label>Şifrə təsdiqi *</label>
                                <span class="focus-border"></span>
                            </div>

                            <!-- Rashid start -->
                            <div  class="form-group">
                            <div class="rbt-modern-select bg-transparent height-45">
                                <div class="dropdown bootstrap-select w-100">
                                <select class="w-100" tabindex="null" required id="user-type" name="user-type">
                                    <option disabled selected value="">İstifadəçi növünü seçin..</option>
                                    <option value="teacher">Müəllim</option>
                                    <option value="student">Tələbə</option>
                                    <option value="parent">Valideyn</option>
                                </select>
                            </div>
                        </div>
                        </div>
                            <!-- Rashid end -->

                            <div class="form-submit-group">
                                <button type="submit" class="rbt-btn btn-md btn-gradient hover-icon-reverse w-100"  name="registered">
                                    <span class="icon-reverse-wrapper">
                                        <span class="btn-text">Qeydiyyat ol</span>
                                        <span class="btn-icon">
                                            <i class="feather-arrow-right"></i>
                                        </span>
                                        <span class="btn-icon">
                                            <i class="feather-arrow-right"></i>
                                        </span>
                                    </span>
                                </button>
                            </div>

                        </form>
                    </div>
                </div>

            </div>
        </div>
    </div>


    <div class="rbt-newsletter-area bg-gradient-6 ptb--50">
        <div class="container">
            <div class="row g-5 align-items-center">
                <div class="col-lg-5 col-md-12 col-12">
                    <div class="inner">
                        <div class="section-title text-center text-lg-start">
                            <h4 class="title">
                                
                                <span class="w-400">ARTO Study yeniliklərinə</span>
                                <br />
                                <strong>Abunə ol</strong>

                            </h4>
                        </div>
                    </div>
                </div>
                <div class="col-lg-7 col-md-12 col-12 text-start text-sm-end">
                    <form action="#" class="newsletter-form-1 me-0">
                        <input type="email" placeholder="Email ünvanınızı yazın">
                        <button type="submit" class="rbt-btn btn-md btn-gradient hover-icon-reverse">
                            <span class="icon-reverse-wrapper">
                                <span class="btn-text">Abunə ol</span>
                                <span class="btn-icon">
                                    <i class="feather-arrow-right"></i>
                                </span>
                                <span class="btn-icon">
                                    <i class="feather-arrow-right"></i>
                                </span>
                            </span>
                        </button>
                    </form>
                </div>
            </div>
        </div>
    </div>


    <!-- Start Footer aera -->
    <?php include('common/footer_except_index.php'); ?>
    <!-- End Footer aera -->
    <div class="rbt-separator-mid">
        <div class="container">
            <hr class="rbt-separator m-0">
        </div>
    </div>
    <!-- Start Copyright Area  -->
    <div class="copyright-area copyright-style-1 ptb--20">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-xxl-6 col-xl-6 col-lg-6 col-md-12 col-12">
                    <p class="rbt-link-hover text-center text-lg-start">Müəllif hüququ © 2023
                        <a href="#">ARTO Study.</a> Bütün hüquqlar qorunur</p>
                </div>
                <div class="col-xxl-6 col-xl-6 col-lg-6 col-md-12 col-12">
                    <ul class="copyright-link rbt-link-hover justify-content-center justify-content-lg-end mt_sm--10 mt_md--10">
                        <li>
                            <a href="#">Xidmət Şərtləri</a>
                        </li>
                        <li>
                            <a href="privacy-policy.html">Gizlilik Siyasəti</a>
                        </li>
                        <li>
                            <a href="subscription.html">Abunəlik</a>
                        </li>
                        <li>
                            <a href="login.php">Giriş & Qeydiyyat</a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
    <!-- End Copyright Area  -->
    <div class="rbt-progress-parent">
        <svg class="rbt-back-circle svg-inner" width="100%" height="100%" viewBox="-1 -1 102 102">
            <path d="M50,1 a49,49 0 0,1 0,98 a49,49 0 0,1 0,-98" />
        </svg>
    </div>

    <!-- JS
============================================ -->
    <!-- Modernizer JS -->
    <script src="assets/js/vendor/modernizr.min.js"></script>
    <!-- jQuery JS -->
    <script src="assets/js/vendor/jquery.js"></script>
    <!-- Bootstrap JS -->
    <script src="assets/js/vendor/bootstrap.min.js"></script>
    <!-- sal.js -->
    <script src="assets/js/vendor/sal.js"></script>
    <script src="assets/js/vendor/swiper.js"></script>
    <script src="assets/js/vendor/magnify.min.js"></script>
    <script src="assets/js/vendor/jquery-appear.js"></script>
    <script src="assets/js/vendor/odometer.js"></script>
    <script src="assets/js/vendor/backtotop.js"></script>
    <script src="assets/js/vendor/isotop.js"></script>
    <script src="assets/js/vendor/imageloaded.js"></script>

    <script src="assets/js/vendor/wow.js"></script>
    <script src="assets/js/vendor/waypoint.min.js"></script>
    <script src="assets/js/vendor/easypie.js"></script>
    <script src="assets/js/vendor/text-type.js"></script>
    <script src="assets/js/vendor/jquery-one-page-nav.js"></script>
    <script src="assets/js/vendor/bootstrap-select.min.js"></script>
    <script src="assets/js/vendor/jquery-ui.js"></script>
    <script src="assets/js/vendor/magnify-popup.min.js"></script>
    <script src="assets/js/vendor/paralax-scroll.js"></script>
    <script src="assets/js/vendor/paralax.min.js"></script>
    <script src="assets/js/vendor/countdown.js"></script>
    <!-- Main JS -->
    <script src="assets/js/main.js"></script>
</body>

</html>