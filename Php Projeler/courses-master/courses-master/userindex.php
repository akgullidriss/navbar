<?php
ob_start();
session_start();
include("verit.php");
include("function.php");
 

?>
<?php
    function kucukten_buyuge($metin){
        $bul = array('ı','i','ğ','ü','ş','ö','ç');
        $degistir = array('I','İ','Ğ','Ü','Ş','Ö','Ç');
        $metin = str_replace($bul,$degistir,$metin);
        return $metin;
    }  
    function buyukten_kucuge($metin){
        $bul = array('I','İ','Ğ','Ü','Ş','Ö','Ç');
        $degistir = array('ı','i','ğ','ü','ş','ö','ç');
        $metin = str_replace($bul,$degistir,$metin);
        return $metin;
    } 
?>
<!doctype html>
<html class="no-js" lang="tr">

<head>
    
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title> | World Of Education
    </title>
    <link rel="shortcut icon" type="image/x-icon" href="img/university.png">
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="manifest" href="site.webmanifest">


    <!-- CSS here -->
    <link rel="stylesheet" href="assets/css/bootstrap.min.css">
    <link rel="stylesheet" href="assets/css/owl.carousel.min.css">
    <link rel="stylesheet" href="assets/css/slicknav.css">
    <link rel="stylesheet" href="assets/css/flaticon.css">
    <link rel="stylesheet" href="assets/css/progressbar_barfiller.css">
    <link rel="stylesheet" href="assets/css/gijgo.css">
    <link rel="stylesheet" href="assets/css/animate.min.css">
    <link rel="stylesheet" href="assets/css/animated-headline.css">
    <link rel="stylesheet" href="assets/css/magnific-popup.css">
    <link rel="stylesheet" href="assets/css/fontawesome-all.min.css">
    <link rel="stylesheet" href="assets/css/themify-icons.css">
    <link rel="stylesheet" href="assets/css/slick.css">
    <link rel="stylesheet" href="assets/css/nice-select.css">
    <link rel="stylesheet" href="assets/css/style.css">

</head>

<body>
    <?php
     $dogumTarihi = $_SESSION["dogumtarihi"];
    
 $bugunn = date("m-d"); 
 $dogumTarihii = date('m-d', strtotime($dogumTarihi));
 if($dogumTarihii==$bugunn){
    echo '<img src="assets/img/gallery/345.gif"     style="position:absolute;width:100%;height:75%;opacity:1;margin-top:75px">';
 }




?>

    <!-- ? Preloader Start -->
    <div id="preloader-active">
        <div class="preloader d-flex align-items-center justify-content-center">
            <div class="preloader-inner position-relative">
                <div class="preloader-circle"></div>
                <div class="preloader-img pere-text">
                    <img src="img/university.png" alt="">
                </div>
            </div>
        </div>
    </div>
    <!-- Preloader Start -->
    <header>
        <!-- Header Start -->
        <div class="header-area header-transparent">
            <div class="main-header ">
                <div class="header-bottom  header-sticky">
                    <div class="container-fluid">
                        <div class="row align-items-center">
                            <!-- Logo -->
                            <div class="col-xl-2 col-lg-2">
                                <div class="logo">
                                    <a href="index.php">
                                        <img src="img/World of-photoaidcom-cropped (5).png" alt="" style="width: 75px;height: 75px;">
                                    </a>
                                </div>
                            </div>
                            <div class="col-xl-10 col-lg-10">
                                <div class="menu-wrapper d-flex align-items-center justify-content-end">
                                    <!-- Main-menu -->
                                    <div class="main-menu d-none d-lg-block">
                                        <nav>
                                            <ul id="navigation">
                                                <li class="active"><a href="userindex.php">Anasayfa</a></li>
                                                <li><a href="ogr.php">Bölümler</a></li>
                                              <?php
                                            $me =  $_SESSION['user'] ;
                                                 if($me!=null){
                                                  echo ' <li><a href="chat.php">Chat</a></li>';
                                                 }
                                                 else{
                                                    echo ' <li><a href="sign-in.php">Chat</a></li>';
                                                 }
                                              ?>
                                              
                                                <li><a href="mediahome.php">Media</a></li>
                
                                                <li><a href="videomedia.php">Vİdeo</a></li>
                                                <li> <a href="logout.php">Çıkış yap</a></li>
                                                <!-- Button -->
                                                <?php

                        
$users=allusers();

          foreach ($users as $user) {
              if ($user["id"] == $_SESSION["user"]) {
                
          if($user["resim"]==null and $user["cinsiyet"] == "bay"){
            echo '<li><a href="meprofile.php?id='.$_SESSION["user"].'"><img class="avatar-xl" src="assets/img/gallery/images.jpeg" alt="avatar" style="width:50px;height:50px;border-radius:50%"></a></li>';
          }
          else if($user["resim"]==null and $user["cinsiyet"] == "bayan"){
            echo '<li><a href="meprofile.php?id='.$_SESSION["user"].'"><img class="avatar-xl" src="assets/img/gallery/imagess.png" alt="avatar" style="width:50px;height:50px;border-radius:50%"></a></li>';
          }
          else{
            echo '<li><a href="meprofile.php?id='.$_SESSION["user"].'"><img class="avatar-xl" src="img/' . $user["resim"] . '" alt="avatar" style="width:50px;height:50px;border-radius:50%"></a></li>';
          }
          
          
                }

              
          }    
              
        
          
?>
                                            </ul>
                                        </nav>
                                    </div>
                                </div>
                            </div>
                            <!-- Mobile Menu -->
                            <div class="col-12">
                                <div class="mobile_menu d-block d-lg-none"></div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Header End -->
    </header>
    <main>
        <!--? slider Area Start-->
       
                <!-- Single Slider -->
                <?php
 

 $dogumTarihi = $_SESSION["dogumtarihi"];
 $bugun = date("Y-m-d");
 $diff = date_diff(date_create($dogumTarihi), date_create($bugun));
 
                        
$users=allusers();

          foreach ($users as $user) {
                    if ($user["id"] == $_SESSION["user"]) {
                        $adsoyad =ucwords($user["adsoyad"]);
                       $bolum= mb_strtolower($user["bolum"]);
                        $bolum =ucwords($bolum);
                        echo '<section class="slider-area ">
            <div class="slider-active">
                <div class="single-slider slider-height d-flex align-items-center">
                    <div class="container">
                        <div class="row">
                            <div class="col-xl-6 col-lg-7 col-md-12">
                                <div class="hero__caption">
                                    <h1 data-animation="fadeInLeft" data-delay="0.2s"  style="font-size:35px">Merhaba!</h1>
                                      <h1 data-animation="fadeInLeft" data-delay="0.2s"> ' . $adsoyad . '</h1>';

                                      $bugunn = date("m-d"); 
                                      $dogumTarihii = date('m-d', strtotime($dogumTarihi));
                                      if($dogumTarihii==$bugunn){
                                         echo '<p>DOĞUM GÜNÜN KUTLU OLSUN İYİKİ DOĞDUN!!!</p>';
                                      }
                                          
                            echo'    <p data-animation="fadeInLeft" data-delay="0.4s">Bu platformda'.' '.$bolum.' '.' hakkında bilgi edinebilir ve Bu Bölümden insanlarla tanışıp fikir alışverişi yapabilirsin</p>
                                    ';



                       echo '         </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>   ';

                    } }    
              

          
?>
        <!-- ? services-area -->
        <div class="services-area">
            <div class="container">
                <div class="row justify-content-sm-center">
                    <?php
$a= $db->query("SELECT * FROM üyeler");
$a= $a->rowCount(); 


                echo '    <div class="col-lg-4 col-md-6 col-sm-8">
                        <div class="single-services mb-30">
                            <div class="features-icon">
                                <img src="assets/img/icon/icon1.svg" alt="">
                            </div>
                            <div class="features-caption">
                                <h3>'.$a.'+ Öğrenci</h3>
                                <p>Bu Platformda '.$a.' Öğrenci bulunmaktadır</p>
                            </div>
                        </div>
                    </div>';
                    ?>
                    <div class="col-lg-4 col-md-6 col-sm-8">
                        <div class="single-services mb-30">
                            <div class="features-icon">
                                <img src="assets/img/icon/icon2.svg" alt="">
                            </div>
                            <div class="features-caption" >
                                <h3>0+ Video</h3>
                                <p>Bu Platformda 0  Video bulunmaktadır</p>
                            </div>
                        </div>
                    </div>
                    <?php
$b= $db->query("SELECT DISTINCT bolum FROM üyeler");
$b= $b->rowCount(); 

                echo ' 
                    <div class="col-lg-4 col-md-6 col-sm-8">
                        <div class="single-services mb-30">
                            <div class="features-icon">
                                <img src="assets/img/icon/play-svgrepo-com.svg" alt="">
                            </div>
                            <div class="features-caption">
                                <h3>'.$b.'+ Bölüm</h3>
                                <p>Bu Platformda '.$b.'  Bölüm bulunmaktadır</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>';
      ?>
      
                
                 <div class="courses-area section-padding40 fix">
                 <div class="container">
                     <div class="row justify-content-center">
                         <div class="col-xl-7 col-lg-8">
                             <div class="section-tittle text-center mb-55">
                             <?php

$users=allusers();

                             foreach ($users as $user) {
                                 if ($user["id"] == $_SESSION["user"]) {
                            
                                    $bolum= mb_strtolower($user["bolum"]);
                        $bolum =ucwords($bolum);
                                     echo '    <h2 style="font-size:35px;">' . $bolum. ' ' . ' Bölümünden Üyeler</h2>';
                                 }
                             }

                 ?>
                        </div>
                    </div>
                </div><div class="courses-actives">
                     <?php

$users=allusers();
$per=busers();
                     foreach ($users as $user) {
                         if ($user["id"] == $_SESSION["user"]) {
                             $_SESSION['blm'] = $user['bolum'];

                             foreach ($per as $p) {

 

                                 $adsoyad = ucwords($p["adsoyad"]);
                                 $bolum= mb_strtolower($p["bolum"]);
                        $bolum =ucwords($bolum);
                                 echo ' 
                                 <div class="swiper-slide card">
                                 <div class="card-content">
                                   <div class="image">';
                                   if ($p["resim"] == null and $p["cinsiyet"]=="bay") {
                                  echo'   <img src="assets/img/gallery/images.jpeg" alt="">';
                                
                                   }
                                   else if ($p["resim"] == null and $p["cinsiyet"]=="bayan") {
                                    echo'   <img src="assets/img/gallery/imagess.png" alt="">';
                                  
                                     }
                                     else {
                                        echo'   <img src="img/'.$p["resim"].'" alt="">';
                                      
                                         }
                       
                                 echo'    </div> <div class="media-icons">
                                <a href="'.$p["insta"].'">     <i class="fab fa-instagram"></i></a>
                                  <a href="'.$p["twitter"].'">   <i class="fab fa-twitter"></i></a>
                                     <a href="'.$p["linkedln"].'"><i class="fab fa-linkedin-in"></i></i></a>
                                   </div>
                       
                                   <div class="name-profession">
                                     <span class="name">'.$adsoyad.'</span>
                                     <span class="profession">'.$bolum.'</span>
                                   </div>
                       
                                   <div class="rating">
                                     <i class="fas fa-star"></i>
                                     <i class="fas fa-star"></i>
                                     <i class="fas fa-star"></i>
                                     <i class="fas fa-star"></i>
                                     <i class="fas fa-star"></i>
                                   </div>
                       
                                   <div class="button">
                                     <button class="aboutMe"><a href="userprofile.php?id='.$p["id"].'">Hakkında</a></button>
                                     <button class="hireMe">Mesaj Yaz</button>
                                   </div>
                                 </div>
                               </div>
                               '
                           
               ;
                             }
                         }
                     }
    ?>      
    </div>
    
    
    
            </div>
        </div>














        <!-- Courses area End -->
        <!--? About Area-1 Start -->
        <section class="about-area1 fix pt-10">
            <div class="support-wrapper align-items-center">
                <div class="left-content1">
                    <div class="about-icon" style="height: 60px;width: 60px;">
                        <img src="assets/img/icon/target-dartboard-aim-svgrepo-com.svg" alt="">
                    </div>
                    <!-- section tittle -->
                    <div class="section-tittle section-tittle2 mb-55">
                        <div class="front-text">
                            <h2 class="">World of Education'un Amacı ve Hedefleri</h2>
                            <p>Bu Platform fikri 2017'de ortaya çıkmış İnsanların kendi bölümünden ve ilgi alanından insanlarla sohbet edip bilgi alışverişi yapabilecekleri bir platformdur.
                            </p>
                        </div>
                    </div>
                    <div class="single-features">
                        <div class="features-icon">
                            <img src="assets/img/icon/edit-svgrepo-com.svg" alt="">
                        </div>
                        <div class="features-caption">
                            <p>İnsanların ilgi alanlarını geliştirirken motive olması</p>
                        </div>
                    </div>
                    <div class="single-features">
                        <div class="features-icon">
                            <img src="assets/img/icon/edit-svgrepo-com.svg" alt="">
                        </div>
                        <div class="features-caption">
                            <p>Daha kısa Zamanda ilgi alanında ilerleyip gelişmesi</p>
                        </div>
                    </div>

                    <div class="single-features">
                        <div class="features-icon">
                            <img src="assets/img/icon/edit-svgrepo-com.svg" alt="">
                        </div>
                        <div class="features-caption">
                            <p>Kendi bölümüne ait kaynak ve belgelere kısa sürede ulaşması</p>
                        </div>
                    </div>
                </div>
                <div class="right-content1">
                    <!-- img -->
                    <div class="right-img">
                        <img src="img/tanitim-filmi-cekimi-piktora.jpg" alt="">

                        <div class="video-icon">
                            <a class="popup-video btn-icon" href="assets/img/login-bg.mp4"><i class="fas fa-play"></i></a>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- About Area End -->
  
        <div class="courses-area section-padding40 fix">
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-xl-7 col-lg-8">
                        <div class="section-tittle text-center mb-55">
                            <h2>Tüm Bölümler</h2>
                        </div>
                    </div>
                </div>
                <!--  <div class="properties__img overlay1">
                                <a href="#"><img src="assets/img/gallery/featured1.png" alt=""></a>
                            </div>-->
                <div class="courses-actives" >
                <?php
$b= $db->query("SELECT bolum,count(*) as sayi FROM üyeler GROUP BY bolum");

 

                foreach($b as $row){
                    
                    $kaç=$row["sayi"];
                   
                    $deg=strlen($bolum);
                
                    $bolum= mb_strtolower($row["bolum"]);
                    $bolum =ucwords($bolum);
                  
                   
              echo'  <div class="properties pb-20" >
                        <div class="properties__card" >
                          
                            <div class="properties__caption">  
                            <h3 style="font-size:15px;"><a href="#">'.$bolum.'</a></h3>
                             <div class="properties__footer d-flex justify-content-between align-items-center">
                                    <div class="restaurant-name">
                                        <div class="rating">
                                            <i class="fas fa-star"></i>
                                            <i class="fas fa-star"></i>
                                            <i class="fas fa-star"></i>
                                            <i class="fas fa-star"></i>
                                            <i class="fas fa-star-half"></i>
                                        </div>
                                        <p><span>(4.5)</span> based on 120</p>
                                    </div>
                                    <div class="price">
                                        <span>'.$kaç.'</span>
                                    </div>
                                </div>
                                <a href="bolumpage.php?bolum='.$row["bolum"].'" class="border-btn border-btn2">Bölümü Gör</a>
                            </div>

                        </div>
                    </div> ';} 
                    ?>
                    <!-- Single -->
                    <!-- Single -->
               
                </div>
            </div>
        </div>
        <!-- top subjects End -->
        <!--? About Area-3 Start -->               
               
        <section class="about-area3 fix">
            <div class="support-wrapper align-items-center">
                <div class="right-content3">
                    <!-- img -->
                    <div class="right-img">
                        <img src="img/istockphoto-1026102910-170667a.jpg" alt="">
                    </div>
                </div>
                <div class="left-content3">
                    <!-- section tittle -->
                    <div class="section-tittle section-tittle2 mb-20">
                        <div class="front-text">
                            <h2 class="">World of Education'da Neler Var?</h2>
                        </div>
                    </div>
                    <div class="single-features">
                        <div class="features-icon">
                            <img src="assets/img/icon/edit-svgrepo-com.svg" alt="">
                        </div>
                        <div class="features-caption">
                            <p>Kendi bölümünden ve ilgi alanından insanlarla sohbet için chat bulunuyor.</p>
                        </div>
                    </div>
                    <div class="single-features">
                        <div class="features-icon">
                            <img src="assets/img/icon/edit-svgrepo-com.svg" alt="">
                        </div>
                        <div class="features-caption">
                            <p>Herhangi bir konuda yardım almak için eğitmenler mevcuttur </p>
                        </div>
                    </div>
                    <div class="single-features">
                        <div class="features-icon">
                            <img src="assets/img/icon/edit-svgrepo-com.svg" alt="">
                        </div>
                        <div class="features-caption">
                            <p>Freelancer işler yapmak veya satın almak için extra bir pazar yeri vardır.</p>
                        </div>
                    </div>
                    <div class="single-features">
                        <div class="features-icon">
                            <img src="assets/img/icon/edit-svgrepo-com.svg" alt="">
                        </div>
                        <div class="features-caption">
                            <p>Belirli konuda bilgi sahibi olmak için eğitim yüklenen videolar vardır.</p>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- About Area End -->
        <!--? Team -->
              
        <div class="courses-area section-padding40 fix">
                 <div class="container">
                     <div class="row justify-content-center">
                         <div class="col-xl-7 col-lg-8">
                             <div class="section-tittle text-center mb-55">
                             <?php

$users=allusers();

                             foreach ($users as $user) {
                                 if ($user["id"] == $_SESSION["user"]) {
                            
                                    $bolum= mb_strtolower($user["bolum"]);
                        $bolum =ucwords($bolum);
                                     echo '    <h2 style="font-size:35px;">Tüm Üyeler</h2>';
                                 }
                             }

                 ?>
                        </div>
                    </div>
                </div><div class="courses-actives" id="team-active">
                     <?php

$users=allusers();

                     foreach ($users as $p) {
                    
                                 $adsoyad = ucwords($p["adsoyad"]);
                                 $bolum= mb_strtolower($p["bolum"]);
                        $bolum =ucwords($bolum);
                                 echo ' 
                                 <div class="swiper-slide card">
                                 <div class="card-content">
                                   <div class="image">';
                                   if ($p["resim"] == null and $p["cinsiyet"]=="bay") {
                                  echo'   <img src="assets/img/gallery/images.jpeg" alt="">';
                                
                                   }
                                   else if ($p["resim"] == null and $p["cinsiyet"]=="bayan") {
                                    echo'   <img src="assets/img/gallery/imagess.png" alt="">';
                                  
                                     }
                                     else {
                                        echo'   <img src="img/'.$p["resim"].'" alt="">';
                                      
                                         }
                       
                                 echo'    </div> <div class="media-icons">
                                     <i class="fab fa-facebook"><a href="'.$p["insta"].'"></a></i>
                                     <i class="fab fa-twitter"><a href="'.$p["twitter"].'"></a></i>
                                     <i class="fab fa-github"><a href="'.$p["linkedln"].'"></a></i>
                                   </div>
                       
                                   <div class="name-profession">
                                     <span class="name">'.$adsoyad.'</span>
                                     <span class="profession" style="font-size:13px">'.$bolum.'</span>
                                   </div>
                       
                                   <div class="rating">
                                     <i class="fas fa-star"></i>
                                     <i class="fas fa-star"></i>
                                     <i class="fas fa-star"></i>
                                     <i class="far fa-star"></i>
                                     <i class="far fa-star"></i>
                                   </div>
                       
                                   <div class="button">
                                     <button class="aboutMe"><a href="userprofile.php?id='.$p["id"].'">Hakkında</a></button>
                                     <button class="hireMe">Mesaj Yaz</button>
                                   </div>
                                 </div>
                               </div>
                               '
                           
               ;
                             }
                    
    ?>      
    </div>
    
    
    
            </div>
        </div>






        <!-- Services End -->
        <!--? About Area-2 Start -->
        <section class="about-area2 fix pb-padding">
            <div class="support-wrapper align-items-center">
                <div class="right-content2">
                    <!-- img -->
                    <div class="right-img">
                        <img src="img/contact_yeps-scaled.jpg" alt="">
                    </div>
                </div>
                <div class="left-content2">
                    <!-- section tittle -->
                    <div class="section-tittle section-tittle2 mb-20">
                        <div class="front-text">
                            <h2 class="">Herhangi bir konuda sorunuz varsa herkese açık chat bölümünden yazabilirsiniz.</h2>
                            <p>World of Education platform'u hakkında istek sorun ve fikirlerinizi 7/24 açık olan müşteri dostunuza yazabilirsiniz.</p>
                            <a href="#" class="btn">Eğitim Dostum'a Yaz</a>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- About Area End -->
    </main>
    <footer>
        <div class="footer-wrappper footer-bg">
            <!-- Footer Start-->
            <div class="footer-area footer-padding">
                <div class="container">
                    <div class="row justify-content-between">
                        <div class="col-xl-4 col-lg-5 col-md-4 col-sm-6">
                            <div class="single-footer-caption mb-50">
                                <div class="single-footer-caption mb-30">
                                    <!-- logo -->
                                    <div class="footer-logo mb-25">
                                        <a href="index.html">
                                            <h1 style="color: white;">World Of Education</h1>
                                        </a>
                                    </div>
                                    <div class="footer-tittle">
                                        <div class="footer-pera">
                                            <p>Sende kendi bölümünde veya ilgi alanında ilerleyip gelişmek istiyorsan Hemen Üye ol!</p>
                                        </div>
                                    </div>
                                    <!-- social -->
                                    <div class="footer-social">
                                        <a href="#"><i class="fab fa-twitter"></i></a>
                                        <a href="#"><i class="fab fa-facebook-f"></i></a>
                                        <a href="#"><i class="fab fa-whatsapp"></i></a>
                                        <a href="#"><i class="fab fa-linkedin"></i></a>
                                        <a href="#"><i class="fab fa-instagram"></i></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-2 col-lg-3 col-md-4 col-sm-5">
                            <div class="single-footer-caption mb-50">
                                <div class="footer-tittle">
                                    <h4>Ön Lisans</h4>
                                    <ul>
                                        <li><a href="#">Bilgisayar Programcılığı</a></li>
                                        <li><a href="#">Ağız ve Diş Sağlığı</a></li>
                                        <li><a href="#">Adalet</a></li>
                                        <li><a href="#">İlk ve Acil Yardım  </a></li>
                                        <li><a href="#">Restorasyon</a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-2 col-lg-4 col-md-4 col-sm-6">
                            <div class="single-footer-caption mb-50">
                                <div class="footer-tittle">
                                    <h4>Lisans</h4>
                                    <ul>
                                        <li><a href="#">Bilgisayar Bilimleri</a></li>
                                        <li><a href="#">Bilgisayar Mühendisliği</a></li>
                                        <li><a href="#">Elektrik-Elektronik Mühendisliği </a></li>
                                        <li><a href="#">Mimarlık</a></li>
                                        <li><a href="#">Tıp</a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-2 col-lg-3 col-md-4 col-sm-6">
                            <div class="single-footer-caption mb-50">
                                <div class="footer-tittle">
                                    <h4>İlgi Alanları</h4>
                                    <ul>
                                        <li><a href="#">Yemek Pişirme</a></li>
                                        <li><a href="#">Bir Enstrüman Çalmak </a></li>
                                        <li><a href="#">Fotoğraf Çekimleri</a></li>
                                        <li><a href="#">Yabancı Diller</a></li>
                                        <li><a href="#">Tiyatro</a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- footer-bottom area -->
            <div class="footer-bottom-area">
                <div class="container">
                    <div class="footer-border">
                        <div class="row d-flex align-items-center">
                            <div class="col-xl-12 ">
                                <div class="footer-copy-right text-center">
                                    <p>
                                        <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
                                        Copyright &copy;
                                        <script>
                                            document.write(new Date().getFullYear());
                                        </script> All rights reserved
                                        <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
                                    </p>

                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Footer End-->
        </div>
    </footer>
    <!-- Scroll Up -->
    <div id="back-top">
        <a title="Go to Top" href="#"> <i class="fas fa-angle-double-up	"></i></a>
    </div>

    <!-- JS here -->
    <script src="./assets/js/vendor/modernizr-3.5.0.min.js"></script>
    <!-- Jquery, Popper, Bootstrap -->
    <script src="./assets/js/vendor/jquery-1.12.4.min.js"></script>
    <script src="./assets/js/popper.min.js"></script>
    <script src="./assets/js/bootstrap.min.js"></script>
    <!-- Jquery Mobile Menu -->
    <script src="./assets/js/jquery.slicknav.min.js"></script>

    <!-- Jquery Slick , Owl-Carousel Plugins -->
    <script src="./assets/js/owl.carousel.min.js"></script>
    <script src="./assets/js/slick.min.js"></script>
    <!-- One Page, Animated-HeadLin -->
    <script src="./assets/js/wow.min.js"></script>
    <script src="./assets/js/animated.headline.js"></script>
    <script src="./assets/js/jquery.magnific-popup.js"></script>

    <!-- Date Picker -->
    <script src="./assets/js/gijgo.min.js"></script>
    <!-- Nice-select, sticky -->
    <script src="./assets/js/jquery.nice-select.min.js"></script>
    <script src="./assets/js/jquery.sticky.js"></script>
    <!-- Progress -->
    <script src="./assets/js/jquery.barfiller.js"></script>

    <!-- counter , waypoint,Hover Direction -->
    <script src="./assets/js/jquery.counterup.min.js"></script>
    <script src="./assets/js/waypoints.min.js"></script>
    <script src="./assets/js/jquery.countdown.min.js"></script>
    <script src="./assets/js/hover-direction-snake.min.js"></script>

    <!-- contact js -->
    <script src="./assets/js/contact.js"></script>
    <script src="./assets/js/jquery.form.js"></script>
    <script src="./assets/js/jquery.validate.min.js"></script>
    <script src="./assets/js/mail-script.js"></script>
    <script src="./assets/js/jquery.ajaxchimp.min.js"></script>

    <!-- Jquery Plugins, main Jquery -->
    <script src="./assets/js/plugins.js"></script>
    <script src="./assets/js/main.js"></script>

</body>

</html>