<div class="mainbar-row rbt-navigation-start align-items-center">
    <div class="header-left rbt-header-content">
        <div class="header-info">
            <div class="logo">
                <a href="index.php">
                    <img src="assets/images/logo/logo.png" alt="ARTO Study Logo">
                </a>
            </div>
        </div>
    </div>
    <div class="rbt-main-navigation d-none d-xl-block">
        <nav class="mainmenu-nav">
            <ul class="mainmenu">
                <li class="">
                <!--with-megamenu has-menu-child-item position-static -->
                    <a href="index.php">Ana səhifə
                        <!-- Home -->
                        <!-- <i class="feather-chevron-down"></i> -->
                    </a>
                   
                </li>

                <li class="with-megamenu has-menu-child-item  position-static">
                    <a href="#">Kurslar
                        <!-- Courses -->
                        <i class="feather-chevron-down"></i>
                    </a>
                    <!-- Start Mega Menu  -->
                     <div class="rbt-megamenu menu-skin-dark">
                     <div class="wrapper">
                         <div class="row row--15 home-plesentation-wrapper single-dropdown-menu-presentation">

<?php
require_once("procedures/connection/connect.php");
 $query_blok_siyahi = "SELECT * FROM tedris_bloklari;";
 $result_blok_siyahi = mysqli_query($conn, $query_blok_siyahi);
 while($userParams_blok_siyahi = mysqli_fetch_assoc($result_blok_siyahi)){
     echo '
     <div class="col-lg-12 col-xl-2 col-xxl-2 col-md-12 col-sm-12 col-12 single-mega-item">
                                 <div class="demo-single">
                                     <div class="inner">
                                         <div class="thumbnail">
                                             <a href="selected_course.php?id='.$userParams_blok_siyahi['id'].'">
                                                 <img src="assets/images/splash/demo/h13.jpg" alt="'.$userParams_blok_siyahi['tedris_bloku'].'">
                                             </a>
                                         </div>
                                         <div class="content">
                                             <h4 class="title">
                                                 <a href="#">'.$userParams_blok_siyahi['tedris_bloku'].'
                                                     <span class="btn-icon">
                                                         <i class="feather-arrow-right"></i>
                                                     </span>
                                                 </a>
                                             </h4>
                                         </div>
                                     </div>
                                 </div>
                             </div>
     ';
 }
?>
                         
                             <!-- XariciDilStart  -->
                             <!-- <div class="col-lg-12 col-xl-2 col-xxl-2 col-md-12 col-sm-12 col-12 single-mega-item">
                                 <div class="demo-single">
                                     <div class="inner">
                                         <div class="thumbnail">
                                             <a href="selected_course.php?id=11">
                                                 <img src="assets/images/splash/demo/h13.jpg" alt="Xarici Dil">
                                             </a>
                                         </div>
                                         <div class="content">
                                             <h4 class="title">
                                                 <a href="#">Xarici Dil
                                                     <span class="btn-icon">
                                                         <i class="feather-arrow-right"></i>
                                                     </span>
                                                 </a>
                                             </h4>
                                         </div>
                                     </div>
                                 </div>
                             </div> -->
                             <!-- XariciDilEnd  -->

    <!-- MuhasibatStart  -->
    <!-- <div class="col-lg-12 col-xl-2 col-xxl-2 col-md-12 col-sm-12 col-12 single-mega-item">
                                 <div class="demo-single">
                                     <div class="inner">
                                         <div class="thumbnail">
                                             <a href="selected_course.php?id=13">
                                                 <img src="assets/images/splash/demo/h13.jpg" alt="Mühasibat">
                                             </a>
                                         </div>
                                         <div class="content">
                                             <h4 class="title">
                                                 <a href="#">Mühasibat
                                                     <span class="btn-icon">
                                                         <i class="feather-arrow-right"></i>
                                                     </span>
                                                 </a>
                                             </h4>
                                         </div>
                                     </div>
                                 </div>
                             </div> -->
                             <!-- MuhasibatEnd  -->

                             <!-- MektebeQederStart  -->
                             <!-- <div class="col-lg-12 col-xl-2 col-xxl-2 col-md-12 col-sm-12 col-12 single-mega-item">
                                 <div class="demo-single">
                                     <div class="inner">
                                         <div class="thumbnail">
                                             <a href="#">
                                                 <img src="assets/images/splash/demo/h4.jpg" alt="Məktəbəqədər">
                                             </a>
                                         </div>
                                         <div class="content">
                                             <h4 class="title">
                                                 <a href="#">Məktəbəqədər
                                                     <span class="btn-icon">
                                                         <i class="feather-arrow-right"></i>
                                                     </span>
                                                 </a>
                                             </h4>
                                         </div>
                                     </div>
                                 </div>
                             </div> -->
                             <!-- MektebeQederEnd  -->



                             <!-- OnlineKursStart  -->
                             <!-- <div class="col-lg-12 col-xl-2 col-xxl-2 col-md-12 col-sm-12 col-12 single-mega-item">
                                 <div class="demo-single">
                                     <div class="inner">
                                         <div class="thumbnail">
                                             <a href="#">
                                                 <img src="assets/images/splash/demo/h14.jpg" alt="Onlayn Dərs">
                                             </a>
                                         </div>
                                         <div class="content">
                                             <h4 class="title">
                                                 <a href="#">Onlayn Dərs
                                                     <span class="btn-icon">
                                                         <i class="feather-arrow-right"></i>
                                                     </span>
                                                 </a>
                                             </h4>
                                         </div>
                                     </div>
                                 </div>
                             </div> -->
                             <!-- OnlineKursEnd  -->
                             


                         </div>

                         <div class="load-demo-btn text-center">
                             <a class="rbt-btn-link color-white" href="#">Daha çoxu üçün aşağı sürüşdürün
                                 <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-arrow-down-up" viewBox="0 0 16 16">
                                     <path fill-rule="evenodd" d="M11.5 15a.5.5 0 0 0 .5-.5V2.707l3.146 3.147a.5.5 0 0 0 .708-.708l-4-4a.5.5 0 0 0-.708 0l-4 4a.5.5 0 1 0 .708.708L11 2.707V14.5a.5.5 0 0 0 .5.5zm-7-14a.5.5 0 0 1 .5.5v11.793l3.146-3.147a.5.5 0 0 1 .708.708l-4 4a.5.5 0 0 1-.708 0l-4-4a.5.5 0 0 1 .708-.708L4 13.293V1.5a.5.5 0 0 1 .5-.5z"
                                     />
                                 </svg>
                             </a>
                         </div>
                     </div>
                 </div>
                 <!-- End Mega Menu  -->
                </li>

                <li class="has-dropdown has-menu-child-item">
                    <a href="#">Şəxsi kabinet
                        <!-- Dashboard -->
                        <i class="feather-chevron-down"></i>
                    </a>
                    <ul class="submenu">
                        <li class="has-dropdown">
                            <a href="login.php?m">Müəllim üçün</a>
                        </li>
                        <li class="has-dropdown">
                            <a href="login.php?t">Tələbə üçün</a>
                        </li>
                        <li class="has-dropdown">
                            <a href="login.php?v">Valideyn üçün</a>
                        </li>
                    </ul>
                </li>

               

               
                <li class="">
                <!--with-megamenu has-menu-child-item position-static -->
                    <a href="contact.php">Bizimlə əlaqə
                        <!-- Home -->
                        <!-- <i class="feather-chevron-down"></i> -->
                    </a>
                   
                </li>
               
            </ul>
        </nav>
    </div>
    <div class="header-right">
        <div class="rbt-btn-wrapper d-none d-xl-block">
            <a class="rbt-btn rbt-marquee-btn marquee-auto btn-border-gradient radius-round btn-sm hover-transform-none" href="login.php">
                <span data-text="Qeydiyyatdan Keç">Qeydiyyatdan Keç</span>
            </a>
        </div>
        <!-- Start Mobile-Menu-Bar -->
        <div class="mobile-menu-bar d-block d-xl-none">
            <div class="hamberger">
                <button class="hamberger-button rbt-round-btn">
                    <i class="feather-menu"></i>
                </button>
            </div>
        </div>
        <!-- Start Mobile-Menu-Bar -->
    </div>
</div>