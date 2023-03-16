<?php
 
if(isset($_GET['id'])){
    require_once("procedures/connection/connect.php");
    $query_course = "SELECT tedris_bloku FROM tedris_bloklari WHERE id=".$_GET['id'].";";
    $result_course = mysqli_query($conn, $query_course);
    $userParams_course = mysqli_fetch_assoc($result_course);
    $course_name=$userParams_course['tedris_bloku'];
    $course_name_uppercase=mb_strtoupper($course_name, 'UTF-8');
}


?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title><?php echo $course_name;?> Kursları - Onlayn Dərs & Təhsil</title>
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
    

    <div class="rbt-about-area about-style-1 rbt-section-gapTop pb--30 pb_md--80 pb_sm--80 bg-color-white">
        <div class="container">
            <div class="row g-5 align-items-center">
                <div class="col-lg-6">
                    <div class="thumbnail-wrapper">
                        <div class="thumbnail image-1">
                            <img data-parallax='{"x": 0, "y": -20}' src="assets/images/about/about-01.jpeg" alt="Education Images">
                        </div>
                        <div class="thumbnail image-2 d-none d-xl-block">
                            <img data-parallax='{"x": 0, "y": 60}' src="assets/images/about/about-02.jpg" alt="Education Images">
                        </div>
                        <div class="thumbnail image-3 d-none d-md-block">
                            <img data-parallax='{"x": 0, "y": 80}' src="assets/images/about/about-03.png" alt="Education Images">
                        </div>
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="inner pl--50 pl_sm--0 pl_md--0">
                        <div class="section-title text-start">
                            <span class="subtitle bg-coral-opacity">ARTO Study Haqqında</span>
                            <h2 class="title">Platforma Haqqında</h2>
                        </div>

                        <p class="description mt--30">
                        <strong>ARTO Study</strong> onlayn Dərs & təhsil platforması 2022-ci ilin yanvar ayında <strong>Əsgərova Təranə Məmməd</strong> qızının rəhbərliyi altında fəaliyyətə başlamışdır. Fəaliyyətə başladığı ilk günlərdən kurs və təhsil ocaqları arasında öz peşəkarlığı, tədris keyfiyyəti və müştəri məmnuniyyəti ilə xüsusi seçilmişdir. Platformanın məzunları təhsil və karyera sahəsində yüksəlmiş, adımızı və əlbəttə ki, doğma vətənimiz Azərbaycanı xarici ölkələrdə də ləyaqətlə təmsil etmişlər. Tələbələrimizin və onların tövsiyəsi ilə bizə müraciət edən növbəti nəsillərin nəticələri ilə qürurlandığımızı və eyni xidməti bizə etimad göstərən hər bir tələbəyə göstərmək arzusunda olduğumuzu sizin diqqətinizə çatdırırıq.

<h3 class="title">
                                        <span class="header-caption">
                                            <span class="cd-headline zoom">
                                                <span class="cd-words-wrapper" style="width: 201px;">
                                                    <b class="theme-gradient is-hidden">FƏRQİMİZİ ÖZÜNÜZ GÖRÜN!!!</b>
                                                    <b class="theme-gradient is-visible">FƏRQİMİZİ ÖZÜNÜZ GÖRÜN!!!</b>
                                                    <b class="theme-gradient is-hidden">FƏRQİMİZİ ÖZÜNÜZ GÖRÜN!!!</b>
                                                </span>
                                        </span>
                                        </span>
                                    </h3>

                        </p>

                        <!-- Start Feature List  -->

                        <div class="rbt-feature-wrapper mt--20 ml_dec_20">
                            <div class="rbt-feature feature-style-2 rbt-radius">
                                <div class="icon bg-pink-opacity">
                                    <i class="feather-heart"></i>
                                </div>
                                <div class="feature-content">
                                    <h6 class="feature-title">Peşəkar & Təcrübəli Müəllimlər</h6>
                                    <p class="feature-description">Biz respublika üzrə bütün peşəkar və təcrübəli müəllimlər ilə işləyirik.</p>
                                </div>
                            </div>

                            <div class="rbt-feature feature-style-2 rbt-radius">
                                <div class="icon bg-primary-opacity">
                                    <i class="feather-book"></i>
                                </div>
                                <div class="feature-content">
                                    <h6 class="feature-title">Onlayn Dərs & Təhsil</h6>
                                    <p class="feature-description">Müxtəlif kurslara getmək üçün evdən çıxmağınıza ehtiyac yoxdur. Vaxtınıza qənaət edin və ARTO Study ilə özünüzü inkişaf etdirin.</p>
                                </div>
                            </div>
                        </div>

                        <!-- End Feature List  -->
                        <!-- <div class="about-btn mt--40">
                            <a class="rbt-btn btn-gradient hover-icon-reverse" href="#">
                                <span class="icon-reverse-wrapper">
                            <span class="btn-text">Haqqımızda Ətraflı</span>
                                <span class="btn-icon"><i class="feather-arrow-right"></i></span>
                                <span class="btn-icon"><i class="feather-arrow-right"></i></span>
                                </span>
                            </a>
                        </div> -->
                    </div>
                </div>
            </div>
        </div>
    </div>

    

    <!-- Start Card Style -->
    <div class="rbt-course-card-area rbt-section-gap bg-color-white">
        <div class="container">
            <div class="row align-items-center mb--60">
                <div class="col-lg-12">
                    <div class="section-title text-center">
                        <span class="subtitle bg-pink-opacity">BİZİM <?php echo $course_name_uppercase;?> KURSLARIMIZ</span>
                        <h2 class="title"><?php echo $course_name;?> Kursları</h2>
                    
                    </div>
                </div>
            </div>
            <!-- Start Card Area -->
            <ul class="row g-3 nav nav-tabs" id="myCategoryTab" role="tablist">
<!-- RASHID EDIT START AUTOMATION -->
<?php 
$query_alt_bolme = "SELECT * FROM `tedris` WHERE tedris_bloklari_id=".$_GET['id']."";
$result_alt_bolme = mysqli_query($conn, $query_alt_bolme);
$saygac=1;
$arr_alt_bolme=array();
while($userParams_alt_bolme = mysqli_fetch_assoc($result_alt_bolme)){
//  active - add this class to a class only to first element

array_push($arr_alt_bolme,$userParams_alt_bolme["id"]);
if($saygac==1){
    echo '
    <li class="col-xl-2 col-lg-3 col-md-6 col-sm-6 col-12">
                    <a class="rbt-cat-box rbt-cat-box-1 image-overlaping-content with-image-content active" 
                    id="cat-tab-'.$saygac.'-tab" data-bs-toggle="tab" data-bs-target="#cat-tab-'.$saygac.'" role="tab" aria-controls="cat-tab-'.$saygac.'" aria-selected="true">
                        <div class="inner">
                            <div class="thumbnail">
                                <img src="assets/images/category/image/six_in_one.jpg" alt="Icons Images">
                            </div>
                            <div class="content">
                                <div class="icons">
                                    <img src="assets/images/category/lang_instead_6_pics_1_pic.png" alt="Icons Images">
                                </div>
                                <h5 class="title">'.$userParams_alt_bolme["alt_bolme"].'</h5>
                            </div>
                        </div>
                    </a>
                </li>
    ';
}else{
    echo '
    <li class="col-xl-2 col-lg-3 col-md-6 col-sm-6 col-12">
                    <a class="rbt-cat-box rbt-cat-box-1 image-overlaping-content with-image-content" id="cate-tab-'.$saygac.'-tab" data-bs-toggle="tab" data-bs-target="#cate-tab-'.$saygac.'" role="tab" aria-controls="cate-tab-'.$saygac.'" aria-selected="true">
                        <div class="inner">
                            <div class="thumbnail">
                                <img src="assets/images/category/image/six_in_one.jpg" alt="Icons Images">
                            </div>
                            <div class="content">
                                <div class="icons">
                                    <img src="assets/images/category/lang_instead_6_pics_1_pic.png" alt="Icons Images">
                                </div>
                                <h5 class="title">'.$userParams_alt_bolme["alt_bolme"].'</h5>
                            </div>
                        </div>
                    </a>
                </li>
    ';
}

$saygac++;
}
?>
<!-- RASHID EDIT END AUTOMATION -->

            <!-- OLD START RECOVER IF NOT WORKS -->
            <!-- Start Category Box Layout  -->
            <!-- <li class="col-xl-2 col-lg-3 col-md-6 col-sm-6 col-12">
                <a class="rbt-cat-box rbt-cat-box-1 image-overlaping-content with-image-content active" id="cat-tab-1-tab" data-bs-toggle="tab" data-bs-target="#cat-tab-1" role="tab" aria-controls="cat-tab-1" aria-selected="true">
                    <div class="inner">
                        <div class="thumbnail">
                            <img src="assets/images/category/image/six_in_one.jpg" alt="Icons Images">
                        </div>
                        <div class="content">
                            <div class="icons">
                                <img src="assets/images/category/lang_instead_6_pics_1_pic.png" alt="Icons Images">
                            </div>
                            <h5 class="title">İngilis Dili</h5>
                        </div>
                    </div>
                </a>
            </li> -->
            <!-- End Category Box Layout  -->
            <!-- Start Category Box Layout  -->
            <!-- <li class="col-xl-2 col-lg-3 col-md-6 col-sm-6 col-12">
                <a class="rbt-cat-box rbt-cat-box-1 image-overlaping-content with-image-content" id="cate-tab-2-tab" data-bs-toggle="tab" data-bs-target="#cate-tab-2" role="tab" aria-controls="cate-tab-2" aria-selected="false">
                    <div class="inner">
                        <div class="thumbnail">
                            <img src="assets/images/category/image/six_in_one.jpg" alt="Icons Images">
                        </div>
                        <div class="content">
                            <div class="icons">
                                <img src="assets/images/category/lang_instead_6_pics_1_pic.png" alt="Icons Images">
                            </div>
                            <h5 class="title">Fransız Dili</h5>
                        </div>
                    </div>
                </a>
            </li> -->
            <!-- End Category Box Layout  -->

            <!-- Start Category Box Layout  -->
            <!-- <li class="col-xl-2 col-lg-3 col-md-6 col-sm-6 col-12">
                <a class="rbt-cat-box rbt-cat-box-1 image-overlaping-content with-image-content" id="cate-tab-3-tab" data-bs-toggle="tab" data-bs-target="#cate-tab-3" role="tab" aria-controls="cate-tab-3" aria-selected="false">
                    <div class="inner">
                        <div class="thumbnail">
                            <img src="assets/images/category/image/six_in_one.jpg" alt="Icons Images">
                        </div>
                        <div class="content">
                            <div class="icons">
                                <img src="assets/images/category/lang_instead_6_pics_1_pic.png" alt="Icons Images">
                            </div>
                            <h5 class="title">Alman Dili</h5>
                        </div>
                    </div>
                </a>
            </li> -->
            <!-- End Category Box Layout  -->

            <!-- Start Category Box Layout  -->
            <!-- <li class="col-xl-2 col-lg-3 col-md-6 col-sm-6 col-12">
                <a class="rbt-cat-box rbt-cat-box-1 image-overlaping-content with-image-content" id="cate-tab-4-tab" data-bs-toggle="tab" data-bs-target="#cate-tab-4" role="tab" aria-controls="cate-tab-4" aria-selected="false">
                    <div class="inner">
                        <div class="thumbnail">
                            <img src="assets/images/category/image/six_in_one.jpg" alt="Icons Images">
                        </div>
                        <div class="content">
                            <div class="icons">
                                <img src="assets/images/category/lang_instead_6_pics_1_pic.png" alt="Icons Images">
                            </div>
                            <h5 class="title">İtalyan Dili</h5>
                        </div>
                    </div>
                </a>
            </li> -->
            <!-- End Category Box Layout  -->

            <!-- Start Category Box Layout  -->
            <!-- <li class="col-xl-2 col-lg-3 col-md-6 col-sm-6 col-12">
                <a class="rbt-cat-box rbt-cat-box-1 image-overlaping-content with-image-content" id="cate-tab-5-tab" data-bs-toggle="tab" data-bs-target="#cate-tab-5" role="tab" aria-controls="cate-tab-5" aria-selected="false">
                    <div class="inner">
                        <div class="thumbnail">
                            <img src="assets/images/category/image/six_in_one.jpg" alt="Icons Images">
                        </div>
                        <div class="content">
                            <div class="icons">
                                <img src="assets/images/category/lang_instead_6_pics_1_pic.png" alt="Icons Images">
                            </div>
                            <h5 class="title">İspan Dili</h5>
                        </div>
                    </div>
                </a>
            </li> -->
            <!-- End Category Box Layout  -->

            <!-- Start Category Box Layout  -->
            <!-- <li class="col-xl-2 col-lg-3 col-md-6 col-sm-6 col-12">
                <a class="rbt-cat-box rbt-cat-box-1 image-overlaping-content with-image-content" id="cate-tab-6-tab" data-bs-toggle="tab" data-bs-target="#cate-tab-6" role="tab" aria-controls="cate-tab-6" aria-selected="false">
                    <div class="inner">
                        <div class="thumbnail">
                            <img src="assets/images/category/image/six_in_one.jpg" alt="Icons Images">
                        </div>
                        <div class="content">
                            <div class="icons">
                                <img src="assets/images/category/lang_instead_6_pics_1_pic.png" alt="Icons Images">
                            </div>
                            <h5 class="title">Rus Dili</h5>
                        </div>
                    </div>
                </a>
            </li> -->
            <!-- End Category Box Layout  -->
<!-- OLD END RECOVER IF NOT WORKS -->
        </ul>

        <div class="row mt--30">
            <div class="col-lg-12">
                <div class="tab-content" id="myCategoryTabContent">

<!-- RASHID EDIT START AUTOMATION -->
<?php 
// $arr_alt_bolme

$query_tedris_shirketler = "SELECT tedris_shirketler.id,shirketler.ad AS shirketAdi, tedris.alt_bolme AS tedrisAltBolmeAdi,shirketler.link AS courseLink
FROM tedris_shirketler
INNER JOIN tedris ON tedris_shirketler.tedris_alt_bolme_id = tedris.id
INNER JOIN shirketler ON tedris_shirketler.shirketler_id = shirketler.id
INNER JOIN tedris_bloklari ON tedris.tedris_bloklari_id = tedris_bloklari.id
WHERE tedris_bloklari.id=".$_GET['id']."  GROUP BY tedris.alt_bolme";
$result_tedris_shirketler = mysqli_query($conn, $query_tedris_shirketler);
$saygac_tedris_shirketler=1;
$reqem_sayg_ters=0;
$reqem_sayg=1;
while($userParams_tedris_shirketler = mysqli_fetch_assoc($result_tedris_shirketler)){
//  active - add this class to a div only to first element
// first is cat-tab tab others cate-tab ?



if($saygac_tedris_shirketler==1){
    echo '
    <div class="tab-pane fade show active" id="cat-tab-'.$saygac_tedris_shirketler.'" role="tabpanel" aria-labelledby="cat-tab-'.$saygac_tedris_shirketler.'-tab">
                            <div class="rbt-categori-list medium-size flex-wrap justify-content-center">
                            ';
                            
                            
                                $query_shirketler = "SELECT tedris_shirketler.id,shirketler.ad AS shirketAdi, tedris.alt_bolme AS tedrisAltBolmeAdi,shirketler.link AS courseLink
                                FROM tedris_shirketler
                                INNER JOIN tedris ON tedris_shirketler.tedris_alt_bolme_id = tedris.id
                                INNER JOIN shirketler ON tedris_shirketler.shirketler_id = shirketler.id
                                INNER JOIN tedris_bloklari ON tedris.tedris_bloklari_id = tedris_bloklari.id
                                WHERE tedris_bloklari.id=".$_GET['id']." AND tedris_shirketler.tedris_alt_bolme_id=".$arr_alt_bolme[$reqem_sayg_ters].";";
                                $result_shirketler = mysqli_query($conn, $query_shirketler);
                                while($userParams_shirketler = mysqli_fetch_assoc($result_shirketler)){
                                    echo ' <a href="'.$userParams_shirketler['courseLink'].'" target="_blank" >'.$userParams_shirketler['shirketAdi'].'</a>';
                                }
                               
                           
                           
                            echo '
                            </div>
                        </div>
    ';
}else{
    echo '
    <div class="tab-pane fade" id="cate-tab-'.$saygac_tedris_shirketler.'" role="tabpanel" aria-labelledby="cate-tab-'.$saygac_tedris_shirketler.'-tab">
                            <div class="rbt-categori-list medium-size flex-wrap justify-content-center">
                            ';
                           
                                $query_shirketler = "SELECT tedris_shirketler.id,shirketler.ad AS shirketAdi, tedris.alt_bolme AS tedrisAltBolmeAdi,shirketler.link AS courseLink
                                FROM tedris_shirketler
                                INNER JOIN tedris ON tedris_shirketler.tedris_alt_bolme_id = tedris.id
                                INNER JOIN shirketler ON tedris_shirketler.shirketler_id = shirketler.id
                                INNER JOIN tedris_bloklari ON tedris.tedris_bloklari_id = tedris_bloklari.id
                                WHERE tedris_bloklari.id=".$_GET['id']." AND tedris_shirketler.tedris_alt_bolme_id=".$arr_alt_bolme[$reqem_sayg].";";
                                $result_shirketler = mysqli_query($conn, $query_shirketler);
                                while($userParams_shirketler = mysqli_fetch_assoc($result_shirketler)){
                                    echo ' <a href="'.$userParams_shirketler['courseLink'].'" target="_blank" >'.$userParams_shirketler['shirketAdi'].'</a>';
                                }
                                
                            
                           
                            echo '
                            </div>
                        </div>
    ';
}
if($saygac_tedris_shirketler!=1){
    $reqem_sayg++;
}
$saygac_tedris_shirketler++;
}
?>
<!-- RASHID EDIT END AUTOMATION -->

<!-- OLD START RECOVER IF NOT WORKS -->
                    <!-- <div class="tab-pane fade show active" id="cat-tab-1" role="tabpanel" aria-labelledby="cat-tab-1-tab">
                        <div class="rbt-categori-list medium-size flex-wrap justify-content-center">
                           
                            <a href="https://celt.az/" target="_blank" >ADAS</a>
                            <a href="https://celt.az/" target="_blank" >AZEREDU</a>
                            <a href="https://celt.az/" target="_blank" >AZSERTIFIKA</a>
                            <a href="https://celt.az/" target="_blank" >BAKI KOMPUTER MERKEZI</a>
                            <a href="https://celt.az/" target="_blank" >BERC ACADEMY</a>
                        </div>
                    </div>

                    <div class="tab-pane fade" id="cate-tab-2" role="tabpanel" aria-labelledby="cate-tab-2-tab">
                        <div class="rbt-categori-list medium-size flex-wrap justify-content-center">
                            <a href="https://celt.az/" target="_blank" >AKADEMI GROUP</a>
                            <a href="https://celt.az/" target="_blank" >BILIK TEDRIS MERKEZI</a>
                            <a href="https://celt.az/" target="_blank" >BRISTOL ACADEMY</a>
                            <a href="https://celt.az/" target="_blank" >BRITISH ACADEMY</a>
                            <a href="https://celt.az/" target="_blank" >BUSINESS MANAGEMENT SCHOOL</a>
                        </div>
                    </div>

                    <div class="tab-pane fade" id="cate-tab-3" role="tabpanel" aria-labelledby="cate-tab-3-tab">
                        <div class="rbt-categori-list medium-size flex-wrap justify-content-center">
                            <a href="https://celt.az/" target="_blank" >BUSINESS MIND ACADEMY</a>
                            <a href="https://celt.az/" target="_blank" >CASPIAN LEARNING CENTER</a>
                         
                            <a href="https://celt.az/" target="_blank" >DATA SOCOOL</a>
                            <a href="https://celt.az/" target="_blank" >DIV ACADEMY</a>
                            <a href="https://celt.az/" target="_blank" >DREAM LANGUAGE SCHOOL</a>
                        </div>
                    </div>

                    <div class="tab-pane fade" id="cate-tab-4" role="tabpanel" aria-labelledby="cate-tab-4-tab">
                        <div class="rbt-categori-list medium-size flex-wrap justify-content-center">
                        
                            <a href="https://celt.az/" target="_blank" >EDU STUDIO</a>
                            <a href="https://celt.az/" target="_blank" >F12 SCHOOL</a>
                            <a href="https://celt.az/" target="_blank" >FREE CHILDREN</a>
                            <a href="https://celt.az/" target="_blank" >GOLD LANGUAGE</a>
                            <a href="https://celt.az/" target="_blank" >GRBS</a>
                        </div>
                    </div>

                    <div class="tab-pane fade" id="cate-tab-5" role="tabpanel" aria-labelledby="cate-tab-5-tab">
                        <div class="rbt-categori-list medium-size flex-wrap justify-content-center">
                            <a href="https://celt.az/" target="_blank" >HED ACADEMY</a>
                            <a href="https://celt.az/" target="_blank" >HEDEF KURSLARI NIZAMI</a>
                            <a href="https://celt.az/" target="_blank" >IB CLUB</a>
                            <a href="https://celt.az/" target="_blank" >IMZA GROUP</a>
                            <a href="https://celt.az/" target="_blank" >INLINGUA BAKU</a>
                        </div>
                    </div>

                    <div class="tab-pane fade" id="cate-tab-6" role="tabpanel" aria-labelledby="cate-tab-6-tab">
                        <div class="rbt-categori-list medium-size flex-wrap justify-content-center">
                            <a href="https://celt.az/" target="_blank" >INTELLEKT</a>
                            <a href="https://celt.az/" target="_blank" >INTERSTUDENT</a>
                         
                            <a href="https://celt.az/" target="_blank" >KASPI KIDS</a>
                            <a href="https://celt.az/" target="_blank" >KREATIV INKISHAF MERKEZI</a>
                            <a href="https://celt.az/" target="_blank" >LONDON SCHOOL</a>
                        </div>
                    </div> -->
<!-- OLD END RECOVER IF NOT WORKS -->
                </div>

            </div>
        </div>
            <!-- End Card Area -->
        </div>
    </div>
    <!-- End Card Style -->

    <div class="rbt-counterup-area rbt-section-gapBottom bg-gradient-1">
        <div class="container">
            <div class="row mb--60">
                <div class="col-lg-12">
                    <div class="section-title text-center">
                        <span class="subtitle bg-primary-opacity">Niyə ARTO Study</span>
                        <h2 class="title">Niyə ARTO Study</h2>
                    
                    </div>
                </div>
            </div>
            <div class="row g-5 hanger-line">
                <!-- Start Single Counter  -->
                <div class="col-lg-3 col-md-6 col-sm-6 col-12">
                    <div class="rbt-counterup rbt-hover-03 border-bottom-gradient">
                        <div class="top-circle-shape"></div>
                        <div class="inner">
                            <div class="rbt-round-icon">
                                <img src="assets/images/icons/counter-01.png" alt="Icons Images">
                            </div>
                            <div class="content">
                                <h3 class="counter"><span class="odometer" data-count="500">00</span>
                                </h3>
                                <span class="subtitle">Şagird</span>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- End Single Counter  -->

                <!-- Start Single Counter  -->
                <div class="col-lg-3 col-md-6 col-sm-6 col-12 mt--60 mt_md--30 mt_sm--30 mt_mobile--60">
                    <div class="rbt-counterup rbt-hover-03 border-bottom-gradient">
                        <div class="top-circle-shape"></div>
                        <div class="inner">
                            <div class="rbt-round-icon">
                                <img src="assets/images/icons/counter-02.png" alt="Icons Images">
                            </div>
                            <div class="content">
                                <h3 class="counter"><span class="odometer" data-count="800">00</span>
                                </h3>
                                <span class="subtitle">Kurslar & Video</span>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- End Single Counter  -->

                <!-- Start Single Counter  -->
                <div class="col-lg-3 col-md-6 col-sm-6 col-12 mt_md--60 mt_sm--60">
                    <div class="rbt-counterup rbt-hover-03 border-bottom-gradient">
                        <div class="top-circle-shape"></div>
                        <div class="inner">
                            <div class="rbt-round-icon">
                                <img src="assets/images/icons/counter-03.png" alt="Icons Images">
                            </div>
                            <div class="content">
                                <h3 class="counter"><span class="odometer" data-count="1000">00</span>
                                </h3>
                                <span class="subtitle">Sertifikatlı Şagird</span>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- End Single Counter  -->

                <!-- Start Single Counter  -->
                <div class="col-lg-3 col-md-6 col-sm-6 col-12 mt--60 mt_md--60 mt_sm--60">
                    <div class="rbt-counterup rbt-hover-03 border-bottom-gradient">
                        <div class="top-circle-shape"></div>
                        <div class="inner">
                            <div class="rbt-round-icon">
                                <img src="assets/images/icons/counter-04.png" alt="Icons Images">
                            </div>
                            <div class="content">
                                <h3 class="counter"><span class="odometer" data-count="100">00</span>
                                </h3>
                                <span class="subtitle">Müəllim</span>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- End Single Counter  -->
            </div>
        </div>
    </div>

    

    <div class="rbt-countdown-area bg_image bg_image--6 bg_image_fixed rbt-section-gap" data-black-overlay="5">
        <div class="container">
            <div class="row g-5 align-items-center">
                <div class="col-lg-6">
                    <div class="inner">
                        <div class="section-title text-start">
                            <span class="subtitle bg-white-opacity">NƏ ÜÇÜN BİZİ SEÇMƏLİSİNİZ</span>
                            <h2 class="title color-white">ARTO Study İlə Bütün Kurslara Endirim</h2>
                            <p class="description has-medium-font-size mt--20 mb--0 color-white opacity-7">Bizim platformada qeydiyyatdan keçin və bütün kurslar üçün endirim promokodunu əldə edin.</p>
                        </div>
                        <div class="countdown-style-1 mt--50">
                            <div class="countdown" data-date="2023-04-15">
                                <div class="countdown-container days">
                                    <span class="countdown-value">87</span>
                                    <span class="countdown-heading">Gün</span>
                                </div>
                                <div class="countdown-container hours">
                                    <span class="countdown-value">23</span>
                                    <span class="countdown-heading">Saat</span>
                                </div>
                                <div class="countdown-container minutes">
                                    <span class="countdown-value">38</span>
                                    <span class="countdown-heading">Dəqiqə</span>
                                </div>
                                <div class="countdown-container seconds">
                                    <span class="countdown-value">27</span>
                                    <span class="countdown-heading">Saniyə</span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="rbt-contact-form contact-form-style-1 w-100">
                        <div class="section-title text-start">
                            <span class="subtitle bg-primary-opacity">TƏHSİL HƏRKƏS ÜÇÜNDÜR</span>
                        </div>
                        <h3 class="title">Qeydiyyat Pəncərəsi</h3>
                        
                        <form method="post" class="w-100"  id="reg_form" action="procedures/register.php" enctype="multipart/form-data" autoComplete="new-password">
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
                            <select class="w-100" tabindex="null" required>
                                <option disabled selected value="">İstifadəçi növünü seçin..</option>
                                <option>Müəllim</option>
                                <option>Tələbə</option>
                                <option>Valideyn</option>
                            </select>
                        </div>
                    </div>
                    </div>
                        <!-- Rashid end -->
                            <div class="form-submit-group mt--40">
                                <button type="submit" class="rbt-btn btn-gradient hover-icon-reverse w-100"  name="registered">
                                    <span class="icon-reverse-wrapper">
                                    <span class="btn-text">Qeydiyyat ol</span>
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
</body>

</html>