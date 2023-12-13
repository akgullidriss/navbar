<?php      include 'verit.php';
ob_start();
 
$id=@$_GET["id"];
$data=$db ->prepare("select * from projeler where id=?");
$data ->execute([

 $id

]);
$_data=$data->fetch(PDO::FETCH_ASSOC);



?>



<!DOCTYPE html>
<html lang="en">

<head>

<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
<link href="./css/bootstrap.min.css" rel="stylesheet">

      <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
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


<?php

$dogumTarihi = $_data["tarih"];
$bugun = date("Y-m-d");
$diff = date_diff(date_create($dogumTarihi), date_create($bugun));

$day = date('d/m/y h:s:m', strtotime($dogumTarihi));
?>

    <main style="margin-top: 150px;" class="content">
        <section class="content" >
            <div class="content container pt-lg-md mb-2">
                <div class="row no-gutters">
                    <div class=" col-lg-12 p-4 mb-0" style="text-align: center;">
                    <h1 class="h1"><?=$_data["baslik"]?></h1>
                    <h5 class="h5"><?=$day?></h5>
                    </div>
                </div>
            </div>
        </section>

    <section class="content " style="margin-top: 50px;">
        <div class="container">
            <div class="row">
                <div class="col-md-9">
                    
                    
                    <div class="content row row-grid align-items-center mb-4">
                        <div class="col-lg-6">
                            <img src="projeler/<?=$_data["resim1"]?>" class="img-fluid rounded shadow" style="height: 200px;width: 520px;">
                        </div>
                        <div class="col-lg-6 text-center">
                           <!-- <h3 class="h3">vvv</h3>-->
                            <p class="lead mt-4"><?=$_data["aciklama"]?></p>
                        </div>
                    </div><hr>
                    <div class="content row row-grid align-items-center mb-4">
                        <div class="col-lg-6">
                            <img src="projeler/<?=$_data["resim2"]?>" class="img-fluid rounded shadow" style="height: 200px;width: 520px;">
                        </div>
                        <div class="col-lg-6 text-center">
                            
                            <p class="lead mt-4"><?=$_data["aciklama2"]?></p>
                        </div>
                    </div><hr>
                    <div class="content row row-grid align-items-center mb-4">
                        <div class="col-lg-6">
                            <img src="projeler/<?=$_data["resim3"]?>" class="img-fluid rounded shadow " style="height: 200px;width: 520px;">
                        </div>
                        <div class="col-lg-6 text-center">
                            
                            <p class="lead mt-4"><?=$_data["aciklama3"]?></p>
                        </div>
                    </div><hr>
                    <div class="content row row-grid align-items-center mb-4">
                        <div class="col-lg-6">
                            <img src="projeler/<?=$_data["resim4"]?>" class="img-fluid rounded shadow" style="height: 200px;width: 520px;">
                        </div>
                        <div class="col-lg-6 text-center">
                            
                            <p class="lead mt-4"><?=$_data["aciklama4"]?></p>
                        </div>
                    </div><hr>
                    
                    <div class="content row" >
                        <div class="col-12 text-center" >
                        <iframe width="100%" height="400px" src="<?=$_data["video"]?>" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen></iframe>  
                     
                        </div>
                      
                    </div>
                    
                
                </div>
                
                <div class="content col-md-3">
                    <div class=" card" style="">
                        <div class="content card-body p-1" >
                            <h3 class="card-title" style="text-align: center;"><?=$_data["alan"]?></h3>
                            <hr>
                            <?php
                       $alan= $_data["alan"];
                            $veri = $db -> prepare("SELECT * FROM projeler where alan='$alan'");
                            $veri -> execute();
                            
                            $veri = $veri -> fetchALL(PDO::FETCH_ASSOC);
                            
                            foreach($veri as $row){
                            
                            echo '
                      <a href="projedetail.php?id='.$row["id"].'">     
                        <div class="content row no-gutters mb-2">
                             
                                <div class="col-6 pr-2">
                                    <img src="projeler/'.$row["projeicon"].'" class="img-fluid rounded shadow" style="width:100px;height:50px;margin-left:10px">
                                </div>
                                <div class="col-6">
                                    <p style="text-align:center;">'.$row["baslik"].'</p>
                                </div>
                            </div></a><hr>';
}
                          ?>
                        </div>
                    </div>
                    
                   
                </div>
            </div>
            <hr>            
        </div>
    </section>
        
    </main>
      





























    <script>

        $(window).scroll(function () {
            $('nav').toggleClass('scrolled', $(this).scrollTop() > 50);
        });

    </script>

    <script src="src/js/main.js"></script>

    <scrip  src="src/js/animated.headline.js"></script>


    <script type="text/javascript"
        src="https://cdnjs.cloudflare.com/ajax/libs/owl-carousel/1.3.3/owl.carousel.min.js"></script>

    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"
        integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo"
        crossorigin="anonymous"></script>

    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js"
        integrity="sha384-OgVRvuATP1z7JjHLkuOU7Xw704+h835Lr+6QL9UvYjZE3Ipu6Tp75j7Bh/kR0JKI"
        crossorigin="anonymous"></script>
 <!-- Placed at the end of the document so the pages load faster -->
 <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>

    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>

</body>

</html>
<?php
ob_end_flush();
?>