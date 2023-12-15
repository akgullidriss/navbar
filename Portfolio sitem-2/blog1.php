<?php      include 'ayar.php';
include 'func.php';
 
$link=@$_GET["link"];
$data=$db ->prepare("select * from projeler where link=?");
$data ->execute([

 $link

]);
$_data=$data->fetch(PDO::FETCH_ASSOC);



?>


<!DOCTYPE html>
<!-- upto 2 directory depth-->
<html lang="en-US">
  <head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title><?php echo $_data["baslik"] ?></title>
    <link rel="icon" type="image/x-icon" href="img/FAVİCON1.png">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin="crossorigin"/>
    <link rel="preload" as="style" href="https://fonts.googleapis.com/css2?family=Nunito+Sans:wght@300;400;700;800&amp;display=swap"/>
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Nunito+Sans:wght@300;400;700;800&amp;display=swap" media="print" onload="this.media='all'"/>
    <noscript>
      <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Nunito+Sans:wght@300;400;700;800&amp;display=swap"/>
    </noscript>
    <link href="./css/font-awesome/css/all.min.css?ver=1.2.0" rel="stylesheet">
    <link href="./css/bootstrap-icons/bootstrap-icons.css?ver=1.2.0" rel="stylesheet">
    <link href="./css/bootstrap.min.css?ver=1.2.0" rel="stylesheet">
    <link href="./css/aos.css?ver=1.2.0" rel="stylesheet">
    <link href="./css/main.css?ver=1.2.0" rel="stylesheet">
    <noscript>
      <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css" />
      
    </noscript><link rel="stylesheet" href="style.css">
  </head>
  <body id="top">

      
<div class="wrapperr">
    <input type="checkbox" id="btnn" hidden>
  <label for="btnn" class="menu-btnn">

  <a href="index.php"> <i class="fas fa-home"></i></a>

    </label>
</div>
<div class="wrapperl">
    <input type="checkbox" id="btnl" hidden>
  <label for="btnl" class="menu-btnl">
   
      <i class="fa fa-chevron-circle-left" onclick="history.back();"></i>
    </label>
</div>

  
   
    <div class="page-content">
      <div id="content">

<div class="section pt-4 px-3 px-lg-4" id="about">
  <div class="container-narrow">
    <div class="row">
      <h2 class="h4 my-2" style="text-align: center;"><?=$_data["baslik"]?></h2>
      <h4 class="h6 my-0" style="text-align: center;padding-bottom:70px;"><?=$_data["tarih"]?></h4>
      <div class="col-md-6" style="word-wrap: break-word;">
        
        <p style="height: auto;"> <?=$_data["aciklama"]?></p>
       
      </div>

      <div class="col-md-5 offset-md-1" style="text-align: center;"><img class="avatar img-fluid mt-1" src="img/<?=$_data["resim1"]?>" width="400" height="400" alt="WPKLON"/></div>
      <div class="col-md-6" style="word-wrap: break-word;">
       
        <p style="margin-top:20px;"> <?=$_data["aciklama2"]?> </p>
      
      </div>

    
  <div class="col-md-5 offset-md-1"  style="text-align: center;"><img class="avatar img-fluid mt-1" src="img/<?=$_data["resim2"]?>" width="400" height="400" alt="WPKLON"/></div>
  <div class="col-md-6" style="word-wrap: break-word;">
       
    <p style="margin-top:20px;"> <?=$_data["aciklama3"]?> </p>
   
  </div>

  <div class="col-md-5 offset-md-1"  style="text-align: center;" ><img class="avatar img-fluid mt-1" src="img/<?=$_data["resim3"]?>" width="400" height="400" alt="WPKLON"/></div>
  <div class="col-md-6" style="word-wrap: break-word;">
       
    <p style="margin-top:20px;"> <?=$_data["videoaciklama"]?>  </p>
 
  </div>

  <div class="col-md-5 offset-md-1"  style="text-align: center;"><video class="avatar img-fluid mt-1" src="img/<?=$_data["video"]?>" controls style="border-radius: 20px;" width="400" height="400" alt="WPKLON"></div>
 

    </div>
  </div>
</div>



<footer class="pt-4 pb-4 text-center bg-light">
  <div class="container">
    <div class="my-3">
      <div class="h4">İdris Akgül</div>
      <p>Web Designer & computer programmer</p>
      <div class="social-nav">
        <nav role="navigation">
                <ul class="nav justify-content-center">
                  <li class="nav-item"><a class="nav-link" href="https://twitter.com/idrissakgull" title="Twitter"><i class="fab fa-twitter"></i><span class="menu-title sr-only">Twitter</span></a></li>
                  <li class="nav-item"><a class="nav-link" href="https://www.facebook.com/profile.php?id=100082503443787" title="Facebook"><i class="fab fa-facebook"></i><span class="menu-title sr-only">Facebook</span></a></li>
                  <li class="nav-item"><a class="nav-link" href="https://www.instagram.com/idrissakgull/" title="Instagram"><i class="fab fa-instagram"></i><span class="menu-title sr-only">Instagram</span></a></li>
                  <li class="nav-item"><a class="nav-link" href="https://www.linkedin.com/in/idris-akg%C3%BCl-aa3161217/" title="LinkedIn"><i class="fab fa-linkedin"></i><span class="menu-title sr-only">LinkedIn</span></a></li>
                  <li class="nav-item"><a class="nav-link" href="mailto:idrissakgull@gmail.com"  title="E-MAİL"><i class="bi bi-envelope-fill"></i><span class="menu-title sr-only">e-posta</span></a></li>
                </ul>
        </nav>
      </div>
    </div>
    <div class="text-small text-secondary">
      <div class="mb-1">&copy; 2022-Tüm Hakları Saklıdır.</div>
      <div>
      Design - idris akgül</div>
    </div>
  </div>
</footer></div>
    </div>
    <div id="scrolltop"><a class="btn btn-secondary" href="#top"><span class="icon"><i class="fas fa-angle-up fa-x"></i></span></a></div>
    <script src="./scripts/imagesloaded.pkgd.min.js?ver=1.2.0"></script>
    <script src="./scripts/masonry.pkgd.min.js?ver=1.2.0"></script>
    <script src="./scripts/BigPicture.min.js?ver=1.2.0"></script>
    <script src="./scripts/purecounter.min.js?ver=1.2.0"></script>
    <script src="./scripts/bootstrap.bundle.min.js?ver=1.2.0"></script>
    <script src="./scripts/aos.min.js?ver=1.2.0"></script>
    <script src="./scripts/main.js?ver=1.2.0"></script>
  </body>
</html>