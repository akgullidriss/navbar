<?php      include 'ayar.php';
include 'func.php';
?>



<!DOCTYPE html>
<html lang="en-US">
  <head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>İDRİS-AKGÜL</title>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.3/jquery.min.js"></script>
  <link rel="stylesheet" href="https://unpkg.com/swiper@7/swiper-bundle.min.css" />
  <script src="https://unpkg.com/swiper@7/swiper-bundle.min.js"></script>
    <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
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
      <script async src="https://pagead2.googlesyndication.com/pagead/js/adsbygoogle.js?client=ca-pub-7456278163035496" crossorigin="anonymous"></script>
      <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css" />
    
    </noscript>

    <link rel="stylesheet" href="style.css">
  </head>
  <body id="top" >
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








<div class="section px-3 px-lg-2 pt-5" id="projeler">
  <div class="container-narrow">
    <div class="text-center mb-5">
   

      <h2 class="marker marker-center">PROJELER</h2>
      
    </div>
    <div class="row">
      
<?php   
          $veri=$db->query("select * from projeler limit 6 offset 6" , PDO::FETCH_ASSOC);
          $verii= $veri->rowCount();
          if ($verii==0) {
            echo '<div class="bg-light p-3 my-2" style="text-align:center">HİÇ PROJE EKLENMEDİ</div>';
          }

          foreach ($veri as $row){
        
          
    echo          
     '<div class="col-md-6">
        <div class="card  mb-3" data-aos="fade-right" data-aos-delay="100" >
          <div class="card-header px-3 py-2">
            <a href="blog1.php?link='.$row["link"].'" style="text-decoration: none;">      <div class="d-flex justify-content-between">
            <div>
            <h3 class="h3m h5 mb-1">'.$row["baslik"].'</h3>
            <h5 class="h3m h5 mb-1" style="font-size:10px">'.$row["tarih"].'</h5>
              </div>'.'<img src=img/'.$row["projeicon"].' width="48" height="48" alt="ui-ux"/>
            </div>
          </div></a> 
          <div class="card-body px-3 py-2">
            <p class="pproje">'.kisalt($row["aciklama"],150).'</p>
           
          </div>
        </div>
      </div>';
         
       
           }   ?>
          
      
    </div>
  </div>
</div>
</div>
    </div>

</div>
    </div>
    <div class="pagenation">
    <ul>
       
        <li ><a href="projeler.php">1</a></li>
        <li class="active">2</li>
        <li><a href="projeler3.php">3</a></li>
        <li><a href="#">4</a></li>
        <li><a href="#">5</a></li>
        <li><a href="#">6</a></li>
        <li><a href="#">7</a></li>
       
    </ul>
</div>
<script>
  document.getElementsByTagName("h1")[0].style.fontSize = "80px";
</script>
      
    <div id="scrolltop" ><a class="btn btn-secondary" href="#top" style="background-color:rgb(246,224,94) !important;"><span class="icon" ><i class="fas fa-angle-up fa-x" style="background-color:rgb(246,224,94) !important;"></i></span></a></div>
    <script src="./scripts/imagesloaded.pkgd.min.js?ver=1.2.0"></script>
    <script src="./scripts/masonry.pkgd.min.js?ver=1.2.0"></script>
    <script src="./scripts/BigPicture.min.js?ver=1.2.0"></script>
    <script src="./scripts/purecounter.min.js?ver=1.2.0"></script>
    <script src="./scripts/bootstrap.bundle.min.js?ver=1.2.0"></script>
    <script src="./scripts/aos.min.js?ver=1.2.0"></script>
    <script src="./scripts/main.js?ver=1.2.0"></script>
    <script src="js/jquery-3.3.1.min.js"></script>
    <script src="js/popper.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/Headroom.js"></script>
    <script src="js/jQuery.headroom.js"></script>
    <script src="js/owl.carousel.min.js"></script>
    <script src="js/smoothscroll.js"></script>
    <script src="js/custom.js"></script>
 
<script>
setInterval(function(){
window.location.reload(false);
},600000);
</script>
  </body>
</html>