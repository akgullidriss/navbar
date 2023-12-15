<?php
include ('verit.php');
ob_start();
$id=1;
$data=$db ->prepare("select * from me where id=?");
$data ->execute([

 $id

]);
$_data=$data->fetch(PDO::FETCH_ASSOC);
?>


<!DOCTYPE html>
<html lang="en">

<head>


<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.3/jquery.min.js"></script>
  <link rel="stylesheet" href="https://unpkg.com/swiper@7/swiper-bundle.min.css" />
  <script src="https://unpkg.com/swiper@7/swiper-bundle.min.js"></script>
    <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">

    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin="crossorigin"/>
    <link rel="preload" as="style" href="https://fonts.googleapis.com/css2?family=Nunito+Sans:wght@300;400;700;800&amp;display=swap"/>
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Nunito+Sans:wght@300;400;700;800&amp;display=swap" media="print" onload="this.media='all'"/>
    <noscript>
      <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Nunito+Sans:wght@300;400;700;800&amp;display=swap"/>
 
      <script async src="https://pagead2.googlesyndication.com/pagead/js/adsbygoogle.js?client=ca-pub-7456278163035496" crossorigin="anonymous"></script>
      <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css" />
    
    </noscript>

    <link rel="stylesheet" href="style.css">
    <script async src="https://pagead2.googlesyndication.com/pagead/js/adsbygoogle.js?client=ca-pub-7456278163035496"
     crossorigin="anonymous"></script>





    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width,initial-scale=1.0,shrink-to-fit=no">

    <meta name="robots" content="index,follow">

    <meta name="Keywords"
        content="İDRİS AKGÜL, idris akgül, İdris Akgül, website designer in idris, website designer in akgül, portfolio website, portfolio website for students, ui ux designer portfolio, dezyne ecole college, idrisakgul, software developer, idrissakgull, idris-akg%C3%BCl-aa3161217, idrissakgull.me, idrisakgul.com, idrissakgüll.com, idris akgül epizy, idris akgül freelancer, idris  akgül software developer, idris akgül full stack developer,idris akgül website, idris akgül facebook, idris akgül  youtube, idris akgül instagram, idris akgül twitter, idris akgül  linkedin, website templates, portfolio website templates, resume website, website designs,personal portfolio website templates,personal portfolio websites,personal portfolio website templates free, personal portfolio website design, personal portfolio website github, personal portfolio websites examples, personal portfolio websites free, personal portfolio website using html and css, personal portfolio website examples, personal portfolio website templates bootstrap, personal portfolio website templates wordpress, best personal portfolio website, best personal portfolio website templates, personal portfolio website code, personal portfolio website codepen, personal portfolio website download, responsive personal portfolio website, software developer portfolio personal website, idrisakgul.tk, idris akgül downloads">

    <meta name="description"
        content="idris akgül - Website Developer. Hey Everyone I am idris akgül a Full stack website Developer live in turkey/izmir. I design and develop services for customers of all sizes, specializing in creating stylish, modern websites, web services and softwares.">
    
    <meta property="og:title" content="İdris Akgül | Website Designer & computer Programmimg">
    
    <meta property="og:description" content="idris akgül - Website Developer. Hey Everyone I am idris akgül a Full stack website Developer live in turkey/izmir. I design and develop services for customers of all sizes, specializing in creating stylish, modern websites, web services and softwares">
    
    <meta property="og:image" content="https://www.google.com/maps/place/Karaba%C4%9Flar%2F%C4%B0zmir/@38.3468956,26.9700654,12z/data=!4m6!3m5!1s0x14bbdd90b68f66c1:0x9ba9144f9143566e!8m2!3d38.3465596!4d27.0441059!16s%2Fm%2F05p6tvm">

    <meta name="author" content="İdris Akgül">
    <meta name="owner" content="idrissakgull@gmail.com">
    <link rel="canonical" href="https://www.idrissakgull.me">
    <script async src="https://www.googletagmanager.com/gtag/js?id=UA-141281251-2"></script>
    
    <script>
        window.dataLayer = window.dataLayer || [];
        function gtag(){dataLayer.push(arguments);}
        gtag('js', new Date());
        gtag('config', 'UA-141281251-2');
    </script>
    

    <link rel="stylesheet" href="src/css/style.css">
    <link rel="stylesheet" href="src/css/responsive.css">
    <link rel="shortcut icon" type="image/x-icon" href="img/FAVİCON1.png">


    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.3.0/css/all.min.css" integrity="sha512-SzlrxWUlpfuzQ+pcUCosxcglQRNAq/DZjVsC0lE40xsADsfeQoEypE+enwcOiGjk/bSuGGKHEyjSoQ1zVisanQ==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css"
        integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/owl-carousel/1.3.3/owl.carousel.min.css" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/owl-carousel/1.3.3/owl.theme.min.css" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/owl-carousel/1.3.3/owl.transitions.css">

    <script src="https://unpkg.com/swiper@7/swiper-bundle.min.js"></script>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>

    <noscript>
      <script async src="https://pagead2.googlesyndication.com/pagead/js/adsbygoogle.js?client=ca-pub-7456278163035496" crossorigin="anonymous"></script>
      <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css" />
    
    </noscript>

    <title>İdris Akgül | Computer Programming</title>
    
</head>

<body>



    <!---------------------------------NAVBAR START---------------------------------->
    <navbar id="home"></navbar>
    <nav class="navbar navbar-expand-lg id=" style="position: fixed;">
        <div class="container-fluid">

          

            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent"
                aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="icon-bar"><i class="fa-solid fa-bars"></i></span>
            </button>
            <div class="theme-switch-wrapper">
            <i class="fa-solid fa-sun"></i>
                <label class="theme-switch" for="checkbox">
                    <input type="checkbox" id="checkbox" />
                    <div class="slider round"></div>
                </label>
                <i class="fa-solid fa-moon"></i>
            </div>
            <!-- navbar links -->
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav ml-auto">
                    <li class="nav-item">
                        <a class="nav-link active" href="#home" data-scroll-nav="0">Anasayfa</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#about" data-scroll-nav="1">Hakkında</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#skills" data-scroll-nav="2">Beceriler</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#services" data-scroll-nav="3">Alanlar</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#experience" data-scroll-nav="4">Deneyim-Eğitim</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#projects" data-scroll-nav="5">Projeler</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#contact" data-scroll-nav="6">İletişim</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>




    <!---------------------------------NAVBAR END------------------------------------>

    <!---------------------------------HEADER START---------------------------------->
    <main class="content">
        <div class="container home">
            <div class="row">
                <div class="col-12">
                    <div class="header-text">
                     <a href="loginpanel.php"><img src="img/<?=$_data["resim"]?>" alt="Aavtar"></a>  
                        <h1>İdris Akgül</h1>
                        <h2 class="cd-headline clip">
                            <span class="blc" style="font-family: serif;">I'm a</span>
                            <span class="cd-words-wrapper" style="font-family: serif;">
                                <b class="is-visible">Website Designer</b>
                                <b>  Programmer</b>
                                <b>Front-end Developer</b>
                                <b> Freelancer</b>
                            </span>
                        </h2>
                        <div class="social-icon">
                            <a href="<?=$_data["facebook"]?>" target="_blank"><i class="fa fa-facebook facebook"></i></a>
                            <a href="<?=$_data["twitter"]?>" target="_blank"><i class="fa fa-twitter twitter"></i></a>
                            <a href="<?=$_data["insta"]?>" target="_blank"><i class="fa fa-instagram instagram"></i></a>
                            <a href="<?=$_data["linkedln"]?>" target="_blank"><i class="fa fa-linkedin linkedin" target="_blank"></i></a>
                           
                        </div>
                        <a href="#contact"><button class="button">İletişim'e Geç</button></a>
                    </div>
                </div>
                <div class="col-12 header-arrow">
                    <div class="scroll-down">
                        <a href="#about" class="mouse-wrapper">
                         <i class="fa-solid fa-chevron-down"></i>
                        </a>
                    </div>
                </div>
            </div>
        </div>


        <!----------------------------------ABOUT START---------------------------------->
        <section id="about">
            <div class="container about">
                <div class="row">
                    <div class="col-12">
                        <h2 class="container-title">Hakkımda</h2>
                    </div>
                    <div class="col-lg-5 col-12">
                        <div class="card-container">
                            <div class="card-item">
                                <div class="card-header" style="background-color: var(--secondary-background);">
                                    <div class="card-header__bg"></div>
                                    <img src="img/<?=$_data["resim"]?>"  alt="Aavtar" class="card-header__img">
                                    
                                    <div class="card-header__text">
                                        <span class="card-header__name">
                                          İdris Akgül
                                        </span>
                                        <span class="card-header__job">
                                            <?=$_data["bolum"]?>
                                        </span>
                                    </div>
                                    <div class="card-button">
                                    <a href="img/<?=$_data["cv"]?>" download target="_blank"><button class="button">Download CV</button></a>
                                    </div>
                                </div>
                                <div class="card-social">
                                    <div class="card-social__item">
                                        <div class="card-social__icon facebook">
                                            <a href="<?=$_data["facebook"]?>" target="_blank"><i
                                                    class="fa fa-facebook facebook"></i></a>
                                        </div>
                                    </div>
                                    <div class="card-social__item">
                                        <div class="card-social__icon twitter">
                                            <a href="<?=$_data["twitter"]?>" target="_blank"><i
                                                    class="fa fa-twitter twitter"></i></a>
                                        </div>
                                    </div>
                                    <div class="card-social__item">
                                        <div class="card-social__icon instagram">
                                            <a href="<?=$_data["insta"]?>" target="_blank"><i
                                                    class="fa fa-instagram instagram"></i></a>
                                        </div>
                                    </div>
                                    <div class="card-social__item">
                                        <div class="card-social__icon linkedin">
                                            <a href="<?=$_data["linkedln"]?>" target="_blank"><i
                                                    class="fa fa-linkedin linkedin"></i></a>
                                        </div>
                                    </div>
                              
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-7 col-12">
                        <div class="about-text">
                          
                            <h4> Yazılım geliştirme konusunda tutkulu biriyim.</h4>
                            <p>Uzmanlığım, 
                                farklı platformlarda ve dillerde yazılım geliştirme, web uygulamaları, mobil uygulamalar ve veritabanı 
                                yönetimi alanlarındadır. Çözüm odaklı bir yaklaşımla, yaratıcı ve yenilikçi çözümler üretmek için teknolojiyi 
                                takip ediyorum. Kendimi sürekli geliştiriyorum</p>

                            <div class="details">
                                <div class="about-details">
                                    <p>Ehliyet Durumu   &nbsp;| &nbsp;Almadı </p>
                                    <p>Doğum Yeri &nbsp;| &nbsp;Nusaybin</p>
                                    <p>Doğum Tarihi &nbsp;| &nbsp;10-01-2001</p>
                                    <p>Askerlik Durumu &nbsp;| &nbsp;Yapmadı</p>

                                </div>
                                <div class="about-details1">
                                    <p>Bölüm  &nbsp;| &nbsp;<?=$_data["bolum"]?> </p>
                                    <p>Telefon &nbsp;|&nbsp; <?=$_data["telefon"]?></p>
                                    <p>Adres &nbsp;|&nbsp; <?=$_data["adres"]?></p>
                                    <p>Email &nbsp;|&nbsp;<?=$_data["email"]?></p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>


        <!----------------------------------ABOUT END------------------------------------>


        <!---------------------------------SKILLS START---------------------------------->
        <section id="skills">
            <div class="container skills">
                <div class="row">
                    <div class="col-12">
                        <h2 class="container-title">Beceriler</h2>
                    </div>
                    <div class="col-lg-6 col-12">
                        <div class="skill-box">
                            <?php
  $dataList = $db -> prepare("SELECT * FROM yetenekler where ( id % 2 ) <> 0 order by oran desc");
$dataList -> execute();
$dataList = $dataList -> fetchALL(PDO::FETCH_ASSOC);

foreach($dataList as $row){
 echo '
       
                            <div class="skill">
                                <div class="skill-name">'.$row["ad"].'</div>
                                <div class="skill-bar">
                                    <div class="skill-per color1" per="'.$row["oran"].'"></div>
                                </div>
                            </div>';
}
                       ?>
                        </div>
                    </div>
                    <div class="col-lg-6 col-12">
                        <div class="skill-box">

                           <?php
  $dataList = $db -> prepare("SELECT * FROM yetenekler where ( id % 2 ) = 0 order by oran desc");
$dataList -> execute();
$dataList = $dataList -> fetchALL(PDO::FETCH_ASSOC);

foreach($dataList as $row){
 echo '

                            <div class="skill">
                                <div class="skill-name">'.$row["ad"].'</div>
                                <div class="skill-bar">
                                    <div class="skill-per color1" per="'.$row["oran"].'"></div>
                                </div>
                            </div>';
}
                        ?>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!---------------------------------SKILLS END---------------------------------->


        <!-------------------------------SERVICES START-------------------------------->

        <section id="services">
            <div class="container services">
                <div class="row">
                    <div class="col-12">
                        <h2 class="container-title">Alanlar</h2>
                    </div>
                    <!--  <div class="col-12 services-container">
                      
                        <div class="col-md-4">
                          
                            <div class="service-box text-center color3">
                                <img src="img/data.png" alt="UI/UX Designs" style="width: 90px;height:90px;" />
                                <h3 class="mb-3 mt-0">Veri Bilimi</h3>
                                <p class="mb-0">Veri Bilimi konusunda bilgi sahibiyim. MySql,Mssql ve acces  gibi temel veri tabanı teknolojilerine hakimim..</p>
                            </div>
                        </div>

                        <div class="col-md-4">
                       
                            <div class="service-box text-center color1">
                                <img src="img/web_development.png" alt="Web Development" />
                                <h3 class="mb-3 mt-0" style="color: black;">Mobil Geliştirme</h3>
                                <p class="mb-0" style="color: black;">Mobil tasarım konusunda bilgi sahibiyim. Java ve xml gibi temel mobil teknolojilerine hakimim..</p>
                            </div>
                        </div>

                        <div class="col-md-4">
                        
                            <div class="service-box text-center color2">
                                <img src="img/software_development.png" alt="Software Development" />
                                <h3 class="mb-3 mt-0">Masaüstü Geliştirme</h3>
                                <p class="mb-0">Masaüstü tasarım konusunda bilgi sahibiyim. C# ve Delphi gibi temel masaüstü teknolojilerine hakimim.</p>
                            </div>
                        </div>
                        <div class="col-md-4">
                        
                            <div class="service-box text-center color3">
                                <img src="img/graphic_design.png" alt="Graphics Design" />
                                <h3 class="mb-3 mt-0">Grafik Tasarım</h3>
                                <p class="mb-0"> Grafik tasarım konusunda bilgi  sahibiyim.Tasarımlar oluşturmak için tasarım araçlarını kullanabilirim.</p>
                            </div>
                        </div>

                        <div class="col-md-4">
                       
                            <div class="service-box text-center color1">
                                <img src="img/website_design.png" alt="Website Designing" />
                                <h3 class="mb-3 mt-0" style="color: black;">Web Tasarım</h3>
                                <p class="mb-0" style="color: black;">Web tasarım konusunda bilgi sahibiyim. HTML, CSS ve JavaScript gibi temel web teknolojilerine hakimim.</p>
                            </div>
                        </div>

                        <div class="col-md-4">
                         
                            <div class="service-box text-center color2">
                                <img src="img/oyun.png" alt="Freelancing" style="width: 90px;height: 90px;" />
                                <h3 class="mb-3 mt-0">Oyun Geliştirme</h3>
                                <p class="mb-0">
Unity oyun motoru ile gelişmiş,mekaniği yüksek ve arayüzü gerçekçi oyunlar geliştirebilirim</p>
                            </div>
                        </div>

                       
                    </div>-->
                </div>
      


       
       

    <div class="w3-content w3-display-container">
    <div class=" mySlides">
    <div class="row py-0">
      <div class="col-md-3 text-center" style="margin-top: 50px !important;" data-aos="fade-up" data-aos-delay="100" >
      <img class="mb-2" src="img/webtasarım.png" width="80" height="80" alt="webtasarım"/>
        <div class="h5">Web Tasarımı</div>
      </div>
      <div class="col-md-3 text-center" style="margin-top: 50px !important;" data-aos="fade-up" data-aos-delay="200">
      <img class="mb-2" src="img/htmlcss.png" width="80" height="80" alt="htmlcss"/>
        <div class="h5">Html-Css</div>
      </div>
      <div class="col-md-3 text-center" style="margin-top: 50px !important;" data-aos="fade-up" data-aos-delay="300">
      <img class="mb-2" src="img/sql.png" width="80" height="80" alt="MSSQL"/>
        <div class="h5">Sql</div>
      </div>
      <div class="col-md-3 text-center" style="margin-top: 50px !important;" data-aos="fade-up" data-aos-delay="400">
      <img class="mb-2" src="img/c-sharp.png" width="80" height="80" alt="C#"/>
        <div class="h5">C#</div>
      </div>
      
    </div></div>

<div class=" mySlides">
    <div class="row py-0">

      <div class="col-md-3 text-center" style="margin-top: 50px !important;" data-aos="fade-up" data-aos-delay="100">
      <img class="mb-2" src="img/photoshop.png" width="80" height="80" alt="ps"/>
        <div class="h5">Photoshop</div>
      </div>
      <div class="col-md-3 text-center" style="margin-top: 50px !important;" data-aos="fade-up" data-aos-delay="200">
      <img class="mb-2" src="img/delphi.png" width="80" height="80" alt="Delphi"/>
        <div class="h5">Delphi</div>
      </div>
   
      <div class="col-md-3 text-center" style="margin-top: 50px !important;" data-aos="fade-up" data-aos-delay="300">
      <img class="mb-2" src="img/js.png" width="80" height="80" alt="js"/>
        <div class="h5">JavaScript</div>
      </div>
      <div class="col-md-3 text-center" style="margin-top: 50px !important;" data-aos="fade-up" data-aos-delay="400">
      <img class="mb-2" src="img/php.png" width="80" height="80" alt="php"/>
        <div class="h5">Php</div>
      </div>
    </div></div>



    
<div class=" mySlides">
    <div class="row py-0">

      <div class="col-md-3 text-center" style="margin-top: 50px !important;" data-aos="fade-up" data-aos-delay="100">
      <img class="mb-2" src="img/game.png" width="80" height="80" alt="ps"/>
        <div class="h5">Oyun Geliştirme</div>
      </div>
      <div class="col-md-3 text-center" style="margin-top: 50px !important;" data-aos="fade-up" data-aos-delay="200">
      <img class="mb-2" src="img/illustration.png" width="80" height="80" alt="Delphi"/>
        <div class="h5">Grafik Tasarım</div>
      </div>
   
      <div class="col-md-3 text-center" style="margin-top: 50px !important;" data-aos="fade-up" data-aos-delay="300">
      <img class="mb-2" src="img/designer.png" width="80" height="80" alt="js"/>
        <div class="h5">Masaüstü Geliştirme</div>
      </div>
      <div class="col-md-3 text-center" style="margin-top: 50px !important;" data-aos="fade-up" data-aos-delay="400">
      <img class="mb-2" src="img/mobil.png" width="80" height="80" alt="php"/>
        <div class="h5">Mobil Geliştirme</div>
      </div>
    </div></div>


    <div class=" mySlides">
    <div class="row py-0">

      <div class="col-md-3 text-center" style="margin-top: 50px !important;" data-aos="fade-up" data-aos-delay="100">
      <img class="mb-2" src="img/unity.png" width="80" height="80" alt="ps"/>
        <div class="h5">Unity</div>
      </div>
      <div class="col-md-3 text-center" style="margin-top: 50px !important;" data-aos="fade-up" data-aos-delay="200">
      <img class="mb-2" src="img/java.png" width="80" height="80" alt="Delphi"/>
        <div class="h5">Java</div>
      </div>
   
      <div class="col-md-3 text-center" style="margin-top: 50px !important;" data-aos="fade-up" data-aos-delay="300">
      <img class="mb-2" src="img/ver.png" width="80" height="80" alt="js"/>
        <div class="h5">Veri Bilimi</div>
      </div>
      <div class="col-md-3 text-center" style="margin-top: 50px !important;" data-aos="fade-up" data-aos-delay="400">
      <img class="mb-2" src="img/kotlin.png" width="80" height="80" alt="php"/>
        <div class="h5">Kotlin</div>
      </div>
    </div></div>

  <button class="w3-button w3-black w3-display-left" onclick="plusDivs(-1)" style="border-radius:50%;background-color:rgb(246,224,94) !important;color:black !important;">&#10094;</button>
  <button class="w3-button w3-black w3-display-right" onclick="plusDivs(1)" style="border-radius:50%;background-color:rgb(246,224,94) !important;color:black !important;">&#10095;</button>

</div>

<script>
var slideIndex = 1;
showDivs(slideIndex);

function plusDivs(n) {
  showDivs(slideIndex += n);
}

function showDivs(n) {
  var i;
  var x = document.getElementsByClassName("mySlides");
  if (n > x.length) {slideIndex = 1}
  if (n < 1) {slideIndex = x.length}
  for (i = 0; i < x.length; i++) {
    x[i].style.display = "none";  
  }
  x[slideIndex-1].style.display = "block";  
}
</script>

</div>
<div class="col-12 mt-5 text-center hireme" style="margin-bottom: 20;">
                            <p class="mb-0">Serbest Çalışan mı Arıyorsunuz?<a href="#contact"> Buraya tıklayın!</a> Benimle iletişime geçin!  👋
                                👋</p>
                                
 
                        </div>
        </section>





















        <!-------------------------------SERVICES END---------------------------------->


        <!-----------------------------EXPERIENCE START-------------------------------->

        <section id="experience">
            <div class="container experience">
                <div class="row">
                    <div class="col-12">
                        <h2 class="container-title">Deneyim-Eğitim</h2>
                    </div>
                    <div class="col-md-6">

                        <!-- timeline wrapper -->
                        <div class="timeline edu">

                            <!-- timeline item -->
                            <div class="timeline-container">
                                <div class="content">
                                    <span class="time">2015-2019</span>
                                    <h3 class="title">Saadet Uçar Anadolu Lisesi</h3>
                                    <p>Batman Saadet Uçar Anadolu Lisesinde 4 yıllık lise eğitimimi tamamladım</p>
                                </div>
                            </div>

                            <!-- timeline item -->
                            <div class="timeline-container">
                                <div class="content">
                                    <span class="time">2021-2023</span>
                                    <h3 class="title">Dokuz Eylül  Üniversitesi</h3>
                                    <p>İzmir Dokuz Eylül Üniversitesinde önlisans Bilgisayar Programcılığı Bölümünde Devam etmekteyim </p>
                                </div>
                            </div>

                            <!-- timeline item -->
                            <div class="timeline-container">
                                <div class="content">
                                    <span class="time">2023 - 2027</span>
                                    <h3 class="title">Dokuz Eylül  Üniversitesi</h3>
                                    <p>İzmir Dokuz Eylül Üniversitesinde lisans Bilgisayar Mühendisliği Bölümünü Hedeflemekteyim </p>
                                </div>
                            </div>

                            <!-- main line -->
                            <span class="line"></span>

                        </div>

                    </div>

                    <div class="col-md-6">
                        <!-- timeline wrapper -->
                        <div class="timeline exp ">
                            <!-- timeline item -->
                            <div class="timeline-container wow fadeInUp" data-wow-delay="0.4s">
                                <div class="content">
                                    <span class="time">2021 - Şuan</span>
                                    <h3 class="title">Freelancer</h3>
                                    <p>Serbest çalışma konusunda deneyimim var. İlk önceliğim müşteri
                                        memnuniyetidir.</p>
                                </div>
                            </div>

                            <!-- timeline item -->
                            <div class="timeline-container wow fadeInUp" data-wow-delay="0.4s">
                                <div class="content">
                                    <span class="time">2021 - Şuan</span>
                                    <h3 class="title">Freelancer</h3>
                                    <p>Serbest çalışma konusunda deneyimim var. İlk önceliğim müşteri
                                        memnuniyetidir.</p>
                                </div>
                            </div>
                            <!-- timeline item -->
                            <div class="timeline-container wow fadeInUp" data-wow-delay="0.4s">
                                <div class="content">
                                    <span class="time">2021 - Şuan</span>
                                    <h3 class="title">Freelancer</h3>
                                    <p>Serbest çalışma konusunda deneyimim var. İlk önceliğim müşteri
                                        memnuniyetidir.</p>
                                </div>
                            </div>

                            <!-- main line -->
                            <span class="line"></span>

                        </div>

                    </div>
                </div>
            </div>
        </section>




        <!-----------------------------EXPERIENCE START-------------------------------->


        <!-------------------------------HIREME START---------------------------------->

        <section id="hire">
            <div class="container hire" style="padding: 10px;padding-top: 125px;">
                <div class="col-12">
                    <div class="hire-text">
                        <h1>  Müthiş Projeniz İçin Beni İşe Alın</h1>
                        <h5 class="m-3">Serbest çalışma için uygunum, bu nedenle herhangi bir projenizin yapılmasına ihtiyacınız varsa benimle iletişime geçebilirsiniz..</h5>
  
                        <a href="#contact"><button class="button m-3">İletişim'e Geç</button></a>
                    </div>
                </div>
            </div>
        </section>


        <!--------------------------------HIREME END----------------------------------->


        <!------------------------------PROJECTS START--------------------------------->


     <section id="projects">
            <div class="container projects">
                <div class="row">
                    <div class="col-12">
                        <h2 class="container-title">Projeler</h2>
                    </div>

                    <div class="col-md-12">
                        <div id="news-slider" class="owl-carousel">
  
                            <?php
                              $veri=$db->query("select * from projeler limit 4" , PDO::FETCH_ASSOC);
                              $verii= $veri->rowCount();
                              if ($verii==0) {
                                echo '<div class="bg-light p-3 my-2" style="text-align:center"></div>';
                              }
                    
                              foreach ($veri as $row){
                                $dogumTarihi = $row["tarih"];
                                $bugun = date("Y-m-d");
                                $diff = date_diff(date_create($dogumTarihi), date_create($bugun));
                                
                                $day = date('d/m/y h:s:m', strtotime($dogumTarihi));
                              
                        echo          
                         '
                            <div class="post-slide">
                                <div class="post-img">
                                    <img src="projeler/'.$row["projeicon"].'" alt="Portfolio Image">
                                    <div class="category">'.$row["alan"].'</div>
                                </div>
                                <div class="post-review">
                                <a href="projedetail.php?id='.$row["id"].'">   <h3 class="post-title" style="font-size:15px;">'.$row["baslik"].'
                                  </a> </h3>
                                    
                                    <div class="post-bar">
                                        <span><i class="fa-solid fa-calendar-days"></i>'.$day.'</span>
                                        <span class="comments"><i class="fa fa-comments"></i> <a
                                        href="projedetail.php?id='.$row["id"].'">Devamı</a></span>
                                    </div>
                                </div>
                            </div>';
                                 } 
                            ?>
                       
                                
                            </div>
                           <!--   <div class="post-slide">
                                <div class="post-img">
                                    <img src="img/voiceassistant.jpg" alt="voice Assistant Image">
                                    <div class="category">Software</div>
                                </div>
                                <div class="post-review">
                                    <h3 class="post-title"><a href="#">Python'da Jarvis Masaüstü Asistanı</a></h3>
                                    <p class="post-description">
                                    Bu yazılımı python dilinde oluşturdum. bu yazılım sayesinde biz
                                        tıpkı Google Asistan gibi sesimizle bilgisayarımızı çalıştırabilir. şarkı çalabiliriz
                                        hey jarvis müzik çal diyerek bilgisayarımıza.
                                    </p>
                                    <div class="post-bar">
                                        <span><i class="fa-solid fa-calendar-days"></i>20.01.2001</span>
                                        <span class="comments"><i class="fa fa-comments"></i> <a
                                                href="#">Devamı</a></span>
                                    </div>
                                </div>
                            </div>
                            <div class="post-slide">
                                <div class="post-img">
                                    <img src="img/brickbreaker.jpg" alt="Game Image">
                                    <div class="category">Game</div>
                                </div>
                                <div class="post-review">
                                    <h3 class="post-title"><a href="#">
Java'da Brick Breaker oyunu</a></h3>
                                    <p class="post-description">
                                    Bu tuğla kırma oyununu java dilinde yarattım. Bu oyun için yaratılmıştır
                                        eğlence amaçlı. Bu oyunda, belirli çubukları tamamladıktan sonra
                                        Bu oyunun zorluk seviyesi artıyor.
                                    </p>
                                    <div class="post-bar">
                                        <span><i class="fa-solid fa-calendar-days"></i>20.01.2001</span>
                                        <span class="comments"><i class="fa fa-comments"></i> <a
                                                href="#">Devamı</a></span>
                                    </div>
                                </div>
                            </div>
                            <div class="post-slide">
                                <div class="post-img">
                                    <img src="img/smart_watch.PNG" alt="Website Image">
                                    <div class="category">Website</div>
                                </div>
                                <div class="post-review">
                                    <h3 class="post-title"><a href="#">
                                    apple smart'ta bir web sitesi
                   
                                    </a></h3>
                                    <p class="post-description">
                                    Html, css, javascript ve Bootstrap kullanarak akıllı saatler üzerine bir web sitesi oluşturdum
                                        dil. Bu web sitesi tüm detayları ve yeni özellikleri sergilemek için oluşturulmuştur.
                                        akıllı saatler kümesi.
                                    </p>
                                    <div class="post-bar">
                                        <span><i class="fa-solid fa-calendar-days"></i>20.01.2001</span>
                                        <span class="comments"><i class="fa fa-comments"></i> <a
                                        href="#">Devamı</a></span>
                                    </div>
                                </div>
                            </div>-->
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-12 mt-0 text-center hireme" style="margin-bottom: 20;">
                            <p class="mb-0">Diğer Tüm Projeleri<a href="projeseç.php"> Buraya tıklayıp</a> Görebilirsiniz!  👋
                                👋</p>
                                
 
                        </div>
                                
        </section>



        <!------------------------------PROJECTS END----------------------------------->


        <!---------------------------TESTIMONIALS START-------------------------------->

     

        <!---------------------------TESTIMONIALS END---------------------------------->

        <!----------------------------CONTACT START------------------------------------>



        <section id="contact">
            <div class="container contact">
                <div class="row">
                    <div class="col-12">
                        <h2 class="container-title">İletişim</h2>
                    </div>
                    <div class="col-lg-6 col-12">
                        <div class="contact-card">
                            <div class="follow-card">
                                <div class="card-title">
                                    <img class="card-img" src="img/<?=$_data["resim"]?>" alt="Aavtar">
                                    <div class="card-title-text">
                                        <h4>İdris Akgül</h4>
                                        <h6>@idrissakgull</h6>
                                    </div>
                                </div><br>
                                <div class="card-text">
                                    <p class="description">
                                        Bilgi,deneyim ve projelerimi paylaştığım yazılım grafik tasarım gibi alanlarda paylaşım yaptığım bilgi ve fikirleri görmek için  instagram hesabımı takip edebilirsiniz!
                                        <br> <br> 
                                    </p>
                                </div>
                                <div class="card-btn">
                                    <a href="<?=$_data["insta"]?>" target="_blank"><button class="button">Takip Et</button></a>
                                </div>
                            </div>
                        </div>
                        <div class="col-12 text-center hireme">
                            <p class="mb-0">Form Dışında <a href="mailto:idrissakgull@gmail.com">Buraya Tıklayarak</a> 
                                Bana Mail Yollayabilirsiniz📩</p>
                        </div>
                    </div>

                    <div class="col-lg-6 col-12 ">
                        <div class="contact-form">
                            <form action="index.php" method="POST">
                                <div class="row form-box">
                                    <div class="col-lg-6 col-12">
                                        <div class="form-group">
                                            <input type="text" class="form-control mb-30" name="name"
                                                placeholder="Ad-Soyad *" required="required">
                                        </div>
                                    </div>
                                    <div class="col-lg-6 col-12">
                                        <div class="form-group">
                                            <input type="email" class="form-control mb-30" name="email"
                                                placeholder="E-mail *" required="required">
                                        </div>
                                    </div>
                                    <div class="col-lg-12 col-12">
                                        <div class="form-group">
                                            <input type="text" name="subject" class="form-control mb-30" name="subject"
                                                placeholder="Konu *" required="required">
                                        </div>
                                    </div>

                                    <div class="col-lg-12 col-12">
                                        <div class="form-group">
                                            <textarea class="form-control mb-30" name="message" rows="8" cols="80"
                                                placeholder="Mesaj *" name="message" required="required"></textarea>
                                        </div>
                                    </div>
                                    <div class="col-lg-12 col-8 col-sm-10">
                                        <button class="button" type="submit" value="submit">Gönder</button>
                                    </div>
                                </div>
                            </form>
                            <?php
if ($_POST) {
$name = $_POST["name"];
$email= $_POST["email"];
$subject= $_POST["subject"];
$message= $_POST["message"];

$veriekle = $db -> prepare("INSERT INTO mesaj SET ad=?,email=?,konu=?, mesaj=?");
$veriekle ->execute([
$name,
$email,
$subject,
$message



]);

if ($veriekle) {
    echo '<p class="alert alert-success">Kayıt Başarılı OKEY.</p>';
    header("REFRESH:1;URL=index.php");
 
}
else {
    echo '<p class="alert alert-success">Kayıt Başarılı OKEY.</p>';
    header("REFRESH:1;URL=index.php");
}
 }

?>

                        </div>
                    </div>
                </div>
            </div>
        </section>

       
           
        <!-----------------------------CONTACT END------------------------------------->

    </main>

    <!------------------------------FOOTER START----------------------------------->






    <!------------------------------FOOTER END------------------------------------->


    <script>

        $(window).scroll(function () {
            $('nav').toggleClass('scrolled', $(this).scrollTop() > 50);
        });

    </script>

    <script src="src/js/main.js"></script>

    <script type="text/javascript" src="src/js/animated.headline.js"></script>


    <script type="text/javascript"
        src="https://cdnjs.cloudflare.com/ajax/libs/owl-carousel/1.3.3/owl.carousel.min.js"></script>

    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"
        integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo"
        crossorigin="anonymous"></script>

    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js"
        integrity="sha384-OgVRvuATP1z7JjHLkuOU7Xw704+h835Lr+6QL9UvYjZE3Ipu6Tp75j7Bh/kR0JKI"
        crossorigin="anonymous"></script>

</body>

</html>
<?php
ob_end_flush();
?>