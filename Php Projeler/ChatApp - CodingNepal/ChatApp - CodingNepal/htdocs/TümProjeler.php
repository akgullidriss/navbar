<?php      include 'verit.php';
ob_start();
 
$id=@$_GET["id"];
$data=$db ->prepare("select * from alanlar where id=?");
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
    <style>
        @import url("https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;600;700&display=swap");
        :root {
    --background: #F9F9FF;
    --secondary-background: #FFF;
    --font-color: #454360;
    --secondary-font-color: #000;
}

[data-theme="dark"] {
    --background: #353353;
    --secondary-background: #302f4e;
    --font-color: #FFF;
    --secondary-font-color: #FFF;
}
body {
  font-family: "Poppins", sans-serif !important;
}
@media (min-width: 990px) {
   .back{
    display: none;
   }
    
}
@media (max-width: 990px) {
   .backk i{
    display: none;
   }
    
}
.back,.backk,.nav-item i{
   color: var(--font-color);
   background-color: var(--background);

   }
    </style>
</head>

<body class="content">



    <!---------------------------------NAVBAR START---------------------------------->
    <navbar id="home"></navbar>
    <nav class="navbar navbar-expand-lg id=" style="position: fixed;">
        <div class="container-fluid">

        <div class="back" id="back" style="font-size: 35px;margin-top: 5px;margin-left: 5px;">

<i class="fa-solid fa-circle-chevron-left" onclick="history.back();"></i>
</div>
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
                    <li class="nav-item" style="font-size: 25px;">
                    <a href="index.php"><i class="fa-solid fa-house" style="font-size: 30px !important ;margin-right: 20px;margin-top: 10px;"></i></a>
                    </li>
                 
                </ul>
            </div>
        </div>
    </nav>



<main>
<div class="container my-5" >
  <div class="text-center mb-5" style="margin-top: 100px;">
    <span class="text-secondary text-uppercase">Projeler</span>
    <h1 class="text-capitalize font-weight-bold mt-2">Tüm <span style="color:#9B5DE5">Projeler</span></h1>
  </div>
  <div class="row">
  <?php
  
                              $veri=$db->query("select * from projeler", PDO::FETCH_ASSOC);
                            
                    
                              foreach ($veri as $row){
                                $id=$row["id"];
                                $dogumTarihi = $row["tarih"];
                                $bugun = date("Y-m-d");
                                $diff = date_diff(date_create($dogumTarihi), date_create($bugun));
                                
                                $day = date('d/m/y h:s:m', strtotime($dogumTarihi));
                                $gün=date('d', strtotime($dogumTarihi));
                                $ay=date('m', strtotime($dogumTarihi));
                                $yil=date('y', strtotime($dogumTarihi));
                                if($ay=="01"){
                                  $ay="Ocak";
                                }
                                elseif($ay=="02"){
                                  $ay="Şubat";
                                }
                                elseif($ay=="03"){
                                  $ay="Mart";
                                }
                                elseif($ay=="04"){
                                  $ay="Nisan";
                                }
                                elseif($ay==05){
                                  $ay="Mayıs";
                                }
                                elseif($ay=="06"){
                                  $ay="Haziran";
                                }
                                elseif($ay=="07"){
                                  $ay="Temmuz";
                                }
                                elseif($ay=="08"){
                                  $ay="Agustos";
                                }
                                elseif($ay=="09"){
                                  $ay="Eylül";
                                }
                                elseif($ay=="10"){
                                  $ay="Ekim";
                                }
                                elseif($ay=="11"){
                                  $ay="Kasım";
                                }
                                elseif($ay=="12"){
                                  $ay="Aralık";
                                }

                                
                              
                        echo          
                         '
                         <a href="projedetail.php?id='.$id.'"> <div class="col-md-4 p-4">
      <div class="border">
        <div class="position-relative w-100" style="height: 250px;background-image: url(projeler/'.$row["projeicon"].'); background-size: cover; background-position: center;">
          <div class="position-absolute bg-dark" style="opacity: .3; top: 0; left:0; right: 0; bottom: 0;"></div>
          <div class="position-absolute text-white d-flex flex-column justify-content-center align-items-center rounded-circle" style="top:10px; right:10px; width: 70px; height: 70px; background-color: #9B5DE5;">
            <small>'.$gün.'</small>
            <small><b>'.$ay.'</b></small>
            <small><b>'.$yil.'</b></small>
          </div>
          <a href="#" class="position-absolute px-3 py-2 text-white" style="bottom:10px; left: 10px; background-color: #9B5DE5;"><small>'.$row["alan"].'</small></a>
        </div>
        <div class="px-3 pt-4 pb-3" style="text-align:center">
          <a href="#" class="d-inline-block"><h5  style="font-weight: 600; font-size: 1.1rem;">'.$row["baslik"].'</h5></a>
          
   
        </div>
      </div>
    </div></a>';
               }
        ?>
    <!--<div class="col-md-4 p-4">
      <div class="border">
        <div class="position-relative w-100" style="height: 250px;background-image: url(https://images.pexels.com/photos/545032/pexels-photo-545032.jpeg?auto=compress&cs=tinysrgb&dpr=1&w=500); background-size: cover; background-position: center;">
          <div class="position-absolute bg-dark" style="opacity: .3; top: 0; left:0; right: 0; bottom: 0;"></div>
          <div class="position-absolute text-white d-flex flex-column justify-content-center align-items-center rounded-circle" style="top:10px; right:10px; width: 70px; height: 70px; background-color: #9B5DE5;">
            <small>27</small>
            <small><b>MAR</b></small>
          </div>
          <a href="#" class="position-absolute px-3 py-2 text-white" style="bottom:10px; left: 10px; background-color: #9B5DE5;"><small>PHOTOS</small></a>
        </div>
        <div class="px-3 pt-4 pb-3">
          <a href="#" class="d-inline-block"><h4 class="text-dark" style="font-weight: 600; font-size: 1.1rem;">Lorem ipsum dolor sit amet.</h4></a>
          <p class="tex-secondary">asperiores dolore explicabo aut excepturi aliquam nam?</p>
          <div class="d-flex mt-4">
            <div class="d-flex align-items-center mr-4">
              <svg height="16px" class="mr-2" version="1.1" id="Capa_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px"
                viewBox="0 0 300.988 300.988" style="enable-background:new 0 0 300.988 300.988;" xml:space="preserve">
              <g>
                <g>
                  <path d="M150.494,0.001C67.511,0.001,0,67.512,0,150.495s67.511,150.493,150.494,150.493s150.494-67.511,150.494-150.493
                    S233.476,0.001,150.494,0.001z M150.494,285.987C75.782,285.987,15,225.206,15,150.495S75.782,15.001,150.494,15.001
                    s135.494,60.782,135.494,135.493S225.205,285.987,150.494,285.987z"/>
                  <polygon points="142.994,142.995 83.148,142.995 83.148,157.995 157.994,157.995 157.994,43.883 142.994,43.883 		"/>
                </g>
              </svg>
              <small class="mt-1" style="color: #9B5DE5;">6 min ago</small>
            </div>
            <div class="d-flex align-items-center">
              <svg height="16px" class="mr-2" version="1.1" id="Capa_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px"
                  viewBox="0 0 60.015 60.015" style="enable-background:new 0 0 60.015 60.015;" xml:space="preserve">
                <g>
                  <path d="M42.007,0h-24c-9.925,0-18,8.075-18,18v14c0,9.59,7.538,17.452,17,17.973v8.344c0,0.688,0.411,1.304,1.047,1.568
                    c0.211,0.087,0.433,0.13,0.652,0.13c0.44,0,0.873-0.173,1.198-0.498l1.876-1.876C26.708,52.713,33.259,50,40.227,50h1.781
                    c9.925,0,18-8.075,18-18V18C60.007,8.075,51.932,0,42.007,0z M58.007,32c0,8.822-7.178,16-16,16h-1.781
                    c-7.502,0-14.555,2.921-19.86,8.226l-1.359,1.359V49v-1v-4c0-0.552-0.448-1-1-1s-1,0.448-1,1v3.949c-8.356-0.52-15-7.465-15-15.949
                    V18c0-8.822,7.178-16,16-16h24c8.822,0,16,7.178,16,16V32z"/>
                  <path d="M17.007,19.015h14c0.552,0,1-0.448,1-1s-0.448-1-1-1h-14c-0.552,0-1,0.448-1,1S16.455,19.015,17.007,19.015z"/>
                  <path d="M44.007,25.015h-27c-0.552,0-1,0.448-1,1s0.448,1,1,1h27c0.552,0,1-0.448,1-1S44.56,25.015,44.007,25.015z"/>
                  <path d="M44.007,33.015h-27c-0.552,0-1,0.448-1,1s0.448,1,1,1h27c0.552,0,1-0.448,1-1S44.56,33.015,44.007,33.015z"/>
                </g>
              </svg>
              <small class="mt-1" style="color: #9B5DE5;">3 comments</small>
            </div>
          </div>
        </div>
      </div>
    </div>
    <div class="col-md-4 p-4">
      <div class="border">
        <div class="position-relative w-100" style="height: 250px;background-image: url(https://images.pexels.com/photos/310983/pexels-photo-310983.jpeg?auto=compress&cs=tinysrgb&dpr=1&w=500); background-size: cover; background-position: center;">
          <div class="position-absolute bg-dark" style="opacity: .3; top: 0; left:0; right: 0; bottom: 0;"></div>
          <div class="position-absolute text-white d-flex flex-column justify-content-center align-items-center rounded-circle" style="top:10px; right:10px; width: 70px; height: 70px; background-color: #9B5DE5;">
            <small>27</small>
            <small><b>MAR</b></small>
          </div>
          <a href="#" class="position-absolute px-3 py-2 text-white" style="bottom:10px; left: 10px; background-color: #9B5DE5;"><small>PHOTOS</small></a>
        </div>
        <div class="px-3 pt-4 pb-3">
          <a href="#" class="d-inline-block"><h4 class="text-dark" style="font-weight: 600; font-size: 1.1rem;">Lorem ipsum dolor sit amet.</h4></a>
          <p class="tex-secondary">asperiores dolore explicabo aut excepturi aliquam nam?</p>
          <div class="d-flex mt-4">
            <div class="d-flex align-items-center mr-4">
              <svg height="16px" class="mr-2" version="1.1" id="Capa_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px"
                viewBox="0 0 300.988 300.988" style="enable-background:new 0 0 300.988 300.988;" xml:space="preserve">
              <g>
                <g>
                  <path d="M150.494,0.001C67.511,0.001,0,67.512,0,150.495s67.511,150.493,150.494,150.493s150.494-67.511,150.494-150.493
                    S233.476,0.001,150.494,0.001z M150.494,285.987C75.782,285.987,15,225.206,15,150.495S75.782,15.001,150.494,15.001
                    s135.494,60.782,135.494,135.493S225.205,285.987,150.494,285.987z"/>
                  <polygon points="142.994,142.995 83.148,142.995 83.148,157.995 157.994,157.995 157.994,43.883 142.994,43.883 		"/>
                </g>
              </svg>
              <small class="mt-1" style="color: #9B5DE5;">6 min ago</small>
            </div>
            <div class="d-flex align-items-center">
              <svg height="16px" class="mr-2" version="1.1" id="Capa_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px"
                  viewBox="0 0 60.015 60.015" style="enable-background:new 0 0 60.015 60.015;" xml:space="preserve">
                <g>
                  <path d="M42.007,0h-24c-9.925,0-18,8.075-18,18v14c0,9.59,7.538,17.452,17,17.973v8.344c0,0.688,0.411,1.304,1.047,1.568
                    c0.211,0.087,0.433,0.13,0.652,0.13c0.44,0,0.873-0.173,1.198-0.498l1.876-1.876C26.708,52.713,33.259,50,40.227,50h1.781
                    c9.925,0,18-8.075,18-18V18C60.007,8.075,51.932,0,42.007,0z M58.007,32c0,8.822-7.178,16-16,16h-1.781
                    c-7.502,0-14.555,2.921-19.86,8.226l-1.359,1.359V49v-1v-4c0-0.552-0.448-1-1-1s-1,0.448-1,1v3.949c-8.356-0.52-15-7.465-15-15.949
                    V18c0-8.822,7.178-16,16-16h24c8.822,0,16,7.178,16,16V32z"/>
                  <path d="M17.007,19.015h14c0.552,0,1-0.448,1-1s-0.448-1-1-1h-14c-0.552,0-1,0.448-1,1S16.455,19.015,17.007,19.015z"/>
                  <path d="M44.007,25.015h-27c-0.552,0-1,0.448-1,1s0.448,1,1,1h27c0.552,0,1-0.448,1-1S44.56,25.015,44.007,25.015z"/>
                  <path d="M44.007,33.015h-27c-0.552,0-1,0.448-1,1s0.448,1,1,1h27c0.552,0,1-0.448,1-1S44.56,33.015,44.007,33.015z"/>
                </g>
              </svg>
              <small class="mt-1" style="color: #9B5DE5;">3 comments</small>
            </div>
          </div>
        </div>
      </div>
    </div>-->
  </div>
</div>

   

</main>



        

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