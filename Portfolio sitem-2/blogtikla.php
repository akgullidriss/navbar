<?php      include 'ayar.php';
include 'func.php';
 
$link=@$_GET["link"];
$data=$db ->prepare("select * from bloglar where link=?");
$data ->execute([

 $link

]);
$_data=$data->fetch(PDO::FETCH_ASSOC);



?>

<html>
<head>
    <title><?php echo $_data["baslik"] ?></title>
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
              <li><a  href="loginpanel.php">Panel</a></li>
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
<?php
if ($_POST) {
    $email=htmlspecialchars($_POST["email"]);
    $mesaj=htmlspecialchars($_POST["mesaj"]);
    
    if (empty($email) || empty($mesaj)) {
        echo '<p class="alert alert-warning">Boş Alan Var</p>';
    }
    else{
$veriekle = $db -> prepare("INSERT INTO yorumlar SET email=?, mesaj=?");
$veriekle ->execute([
$email,
$mesaj


]);

    }
}

?>




<form action="" method="post" style="text-align:center;padding-top:30px">
  <label for="exampleFormControlInput1" class="form-label">Adınız:</label><br>
  <input type="text" class="form-control" id="exampleFormControlInput1" name="email"><br>

  <label for="exampleFormControlTextarea1" class="form-label">Mesajınız:</label><br>
  <textarea class="form-control" id="exampleFormControlTextarea1" rows="3"  name="mesaj"></textarea><br><br>
  
<input type="submit" value="GÖNDER" class="btn btn-dark"><br>
</form>

</div>
       <div class="me-hakkında" style="height:70% !important">
        
<?php   
          $veri=$db->query("select * from yorumlar" , PDO::FETCH_ASSOC);

          foreach ($veri as $row){
           
       echo        
  '<div><h5>'.$row["tarih"].'</h5>

    <h5 >'.$row["email"].'</h5>
    <p >'.$row["mesaj"].'</p></div><hr>';
         
  
          }
 
          ?>
 


          </div>    
          </div> 



     
        
        

         
    

 
<div class="cards">
  <div class="navbar">

  
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
              <li><a  href="loginpanel.php">Panel</a></li>
            </ul>

  </div>

</div>

<div class="blogs" style="display:flex;flex-direction: column;" >
<strong style="text-align:right;margin-top:20px;margin-right:20px;color:wheat;"><?php echo $_data["tarih"] ?></strong>
<img src='<?php echo "blogmedya/".$_data["resim"] ?>' style="width:50%; position:relative;margin:auto;margin-top:10px;"> <br>
<h1 style="text-align:center;color:wheat;"><?php echo $_data["baslik"] ?></h1>
<p style="color:white;margin-left:50px;margin-right:50px;width:88%;position:relative !important;"><?php echo $_data["aciklama"] ?></p>

     </div>






   



      
        








 




          
           
           
           
          
          
          
          
        
   
   
                                                      




















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

