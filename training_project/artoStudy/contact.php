<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>Bizimlə Əlaqə - Onlayn Dərs & Təhsil</title>
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
            <div class="container-fluid">
            <?php include('common/header.php'); ?>
            </div>
            <!-- End header Rashid -->
            
        </div>
        
        <a class="rbt-close_side_menu" href="javascript:void(0);"></a>
    </header>
    <!-- Mobile Menu Section Start -->
    <?php include('common/mobile_menu.php'); ?>
    <!-- Mobile Menu Section End -->
    
    <a class="close_side_menu" href="javascript:void(0);"></a>

    <div class="rbt-conatct-area bg-gradient-11 rbt-section-gap">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="section-title text-center mb--60">
                        <span class="subtitle bg-secondary-opacity">BİZİMLƏ ƏLAQƏ</span>
                        <h2 class="title">ARTO Study Əlaqə <br> bizimlə inkişafa doğru.</h2>
                    </div>
                </div>
            </div>
            <div class="row g-5">
                <div class="col-lg-4 col-md-6 col-sm-6 col-12 sal-animate" data-sal="slide-up" data-sal-delay="150" data-sal-duration="800">
                    <div class="rbt-address">
                        <div class="icon">
                            <i class="feather-headphones"></i>
                        </div>
                        <div class="inner">
                            <h4 class="title">Əlaqə Nömrələrimiz</h4>
                            <p><a href="tel:+994997087828">+994 99 708 78 28</a></p>
                            <p><a href="tel:+994559992408">+994 55 999 24 08</a></p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 col-sm-6 col-12 sal-animate" data-sal="slide-up" data-sal-delay="200" data-sal-duration="800">
                    <div class="rbt-address">
                        <div class="icon">
                            <i class="feather-mail"></i>
                        </div>
                        <div class="inner">
                            <h4 class="title">Email Ünvanlarımız</h4>
                            <p><a href="mailto:hr@artostudy.com">hr@artostudy.com</a></p>
                            <p><a href="mailto:admin@artostudy.com">admin@artostudy.com</a></p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 col-sm-6 col-12 sal-animate" data-sal="slide-up" data-sal-delay="250" data-sal-duration="800">
                    <div class="rbt-address">
                        <div class="icon">
                            <i class="feather-map-pin"></i>
                        </div>
                        <div class="inner">
                            <h4 class="title">Ünvanımız</h4>
                            <p>Azərbaycan, Bakı</p>
                             
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="rbt-contact-address">
        <div class="container">
            <div class="row g-5">
                <div class="col-lg-6">
                    <div class="thumbnail">
                        <img class="w-100 radius-6" src="assets/images/about/contact.jpg" alt="Contact Images">
                    </div>
                </div>

                <div class="col-lg-6">
                    <div class="rbt-contact-form contact-form-style-1 max-width-auto">
                        <div class="section-title text-start">
                            <span class="subtitle bg-primary-opacity">TƏHSİL HƏRKƏS ÜÇÜNDÜR</span>
                        </div>
                        <h3 class="title">BİZİMLƏ ƏLAQƏ QURA BİLƏRSİNİZ</h3>
                        <form id="contact-form" method="POST" action="mail.php" class="rainbow-dynamic-form max-width-auto">
                            <div class="form-group">
                                <input name="contact-full-name" id="contact-name" type="text" required>
                                <label>Soyad və Ad</label>
                                <span class="focus-border"></span>
                            </div>
                            <div class="form-group">
                                <input name="contact-email" type="email" required>
                                <label>Email</label>
                                <span class="focus-border"></span>
                            </div>
                            <div class="form-group">
                                <input type="text" id="subject" name="subject" required>
                                <label>Məzmun Başlığı</label>
                                <span class="focus-border"></span>
                            </div>
                            <div class="form-group">
                                <textarea name="contact-message" id="contact-message" required></textarea>
                                <label>Məzmun</label>
                                <span class="focus-border"></span>
                            </div>
                            <div class="form-submit-group">
                                <button name="submit" type="submit" id="submit" class="rbt-btn btn-md btn-gradient hover-icon-reverse w-100">
                                    <span class="icon-reverse-wrapper">
                                        <span class="btn-text">GÖNDƏR</span>
                                    <span class="btn-icon"><i class="feather-arrow-right"></i></span>
                                    <span class="btn-icon"><i class="feather-arrow-right"></i></span>
                                    </span>
                                </button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="rbt-google-map bg-color-white rbt-section-gapTop">
        <!-- <iframe class="w-100" src="https://www.google.com/maps/embed?pb=!1m16!1m12!1m3!1d2965.0824050173574!2d-93.63905729999999!3d41.998507000000004!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!2m1!1sWebFilings%2C+University+Boulevard%2C+Ames%2C+IA!5e0!3m2!1sen!2sus!4v1390839289319" height="600" style="border:0"></iframe> -->
            <iframe class="w-100"  src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3036.1470507687554!2d49.74207091535682!3d40.449882179361296!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x40308538dd715ba1%3A0x61f3137aa146a945!2sAbsheron%20city%20Xirdalan!5e0!3m2!1sen!2saz!4v1678180268788!5m2!1sen!2saz"  height="600" style="border:0;" ></iframe>
    </div>

    <!-- Start Footer aera -->
    <?php include('common/footer_except_index.php'); ?>
    <!-- End Footer aera -->
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
    <script src="assets/js/by_me.js"></script>
</body>

</html>