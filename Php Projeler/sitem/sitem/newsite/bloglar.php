
<html>
<head>
    <title>İDRİS-AKGÜL</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" type="text/css" href="stil.css"/>
    <link rel="icon" type="image/x-icon" href="img/FAVİCON1.png">
    <link rel="stylesheet" type="text/css" href="responsive.css"/>
    <link rel="stylesheet" href="https://wowjs.uk/css/libs/animate.css">
    <meta charset="UTF-8">
   

</head>
<body>
  
  <div class="menu" id="menu" onclick="gizleGoster('me')"><i class="fa-solid fa-user"></i></div>
  <script>
      function gizleGoster(me) {
        var secilenID = document.getElementById('me');
        var mininav = document.getElementById('mininavbar');
        if (secilenID.style.display == "none") {
          secilenID.style.display = "inline";
          mininav.style.display = "none";
          
          secilenID.style.margin = 5;
          secilenID.style.marginTop=0;
          secilenID.style.zIndex=500;
         
        } else {
          secilenID.style.display = "none";
        }
      }
      </script>
       <div class="navmenu" id="navmenu" onclick="gizleeGosterr('mininavbar')"><i class="fa-solid fa-ellipsis"></i></div>
        <div class="mininavbar" id="mininavbar">

    
        <ul>
              <li><a  href="index.php">Anasayfa</a></li>
              <?php      include 'ayar.php';

$a= $db->query("SELECT * FROM projeler");
 $a= $a->rowCount(); 
 
     
           
 

   echo '<li><a  href="projeler.php">'.'Projeler'.' '.$a.'</a></li>';
         
         ?>
              <?php      include 'ayar.php';

$a= $db->query("SELECT * FROM bloglar");
 $a= $a->rowCount(); 
 
     
           
 

   echo '<li><a  href="bloglar.php" style="color: wheat;">'.'Bloglar'.' '.$a.'</a></li>';
         
         ?>
              <li><a  href="hakkında.php">Hakkımda</a></li>
              <li><a  href="loginpanel.php">panel</a></li>
            </ul>
      
        </div>
  
       <script>
           function gizleeGosterr(mininavbar) {
             var secilenID = document.getElementById('mininavbar');
             var me = document.getElementById('me');
             if (secilenID.style.display == "none") {
               secilenID.style.display = "inline";
               me.style.display="none"
               secilenID.style.margin = 5;
               secilenID.style.marginTop=0;
               secilenID.style.zIndex=500;
              
             } else {
               secilenID.style.display = "none";
             }
           }
           </script>
    <div class="me" id="me">
   
<div class="me-img">
    <img src="img/idris.jpg" alt="">
    <h4>İDRİS AKGÜL</h4>
<p>WEB DESİGNER</p>

</div>
        <div class="me-hakkında">
        

        <div class="container">
      
      <?php 

$veri = $db -> prepare("SELECT * FROM alanyetenekler order by oran desc");
$veri -> execute();

$veri = $veri -> fetchALL(PDO::FETCH_ASSOC);

foreach($veri as $row){

echo '

       
          <div class="card">
            <div class="box">
              <div class="percent">
                <svg>
                  <circle cx="70" cy="70" r="30"></circle>'.
                 '<circle cx="70" cy="70" r="30" style="stroke-dashoffset: calc(440 - (440 * '.$row["oran"]/'2'.') / 100);stroke: #00ff43;"></circle>
                </svg>
                <div class="number">
                  <h2>'.$row["oran"].'<span>'.'%'.'</span></h2>
                </div>
              </div><h2 class="text">'.$row["ad"].'</h2>
            </div>
          </div>';
       
}
 

?>        
         
  </div>
            
      
          

  
    <?php 

$veri = $db -> prepare("SELECT * FROM yetenekler order by oran desc");
$veri -> execute();

$veri = $veri -> fetchALL(PDO::FETCH_ASSOC);

foreach($veri as $row){

echo 
           '<span style="margin-left: 30px;">'.$row["ad"].'</span>
            <div class="meter">
             <span style="width:'.$row["oran"].'"><span class="progress"><span>'.$row["oran"].'</span></span></span>
            </div><br> ' 
        ;}
   

?>





     
        </div>
        <div class="me-iletişim">

            <div class="icon">
             <div class="1"><a href="https://instagram.com/akgullidriss?utm_medium=copy_link"><i class="fab fa-instagram"></i></a></div>
                <div class="2"><a href="tel:+905300753714"><i class="fas fa-phone"></i></a></div>
                <div class="3"><a href="mailto:idrissakgull@gmail.com"><i class="fas fa-envelope-square"></i></a></div>
        <div class="4">
         <a href="https://www.linkedin.com/in/idris-akg%C3%BCl-aa3161217"><i class="fab fa-linkedin-in"></i></a></div>
        </div>
        </div>






        </div>
    </div>
 

 
<div class="cards">
  <div class="navbar">

  <ul>
      <li><a  href="index.php" >Anasayfa</a></li>
      <?php      include 'ayar.php';

$a= $db->query("SELECT * FROM projeler");
 $a= $a->rowCount(); 
 
     
           
 

   echo '<li><a  href="projeler.php">'.'Projeler'.' '.$a.'</a></li>';
         
         ?>

      <?php      include 'ayar.php';

 $a= $db->query("SELECT * FROM bloglar");
  $a= $a->rowCount(); 
	
      
            
  

    echo '<li><a  href="bloglar.php" style="color: wheat;">'.'Bloglar'.' '.$a.'</a></li>';
          
          ?>

      

      <li><a  href="hakkında.php">Hakkımda</a></li>
      <li><a  href="loginpanel.php">Panel</a></li>
    </ul>

  </div>

</div>














 


<?php      include 'ayar.php';
include 'func.php';
          $veri=$db->query("select * from bloglar where id <=12 " , PDO::FETCH_ASSOC);
     
  echo "<div class='blogs'>"; 
      
        

          foreach ($veri as $row){
           
          echo  '<div data-wow-delay="0.1s" class="blog wow bounceInLeft">'.
          '<a href="blogtikla.php?link='.$row["link"].'" > <img src="blogmedya/'.$row["resim"].'"> '.
          '<h2>'.$row["baslik"].'</h2>'.'<p>'.kisalt($row["aciklama"],100).'</p>'.'</div></a>';
          
          
          

           }
         
     echo "</div>";

          
          ?>
         
         

          
           
           
           
          
          
          
          
        
   
   
                                                      




















    <script>

function tıklaaç(){
    document.getElementById('nav').classList.toggle('active');


}

</script>


<script src="https://wowjs.uk/dist/wow.min.js"></script>
<script>
 new WOW().init();
</script>


</body>




</html>


