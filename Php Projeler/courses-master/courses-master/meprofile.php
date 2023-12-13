<?php
ob_start();
session_start();
include("verit.php");
include("function.php");


 
$id=@$_GET["id"];
$data=$db ->prepare("select * from üyeler where id=?");
$data ->execute([

 $id

]);
$_data=$data->fetch(PDO::FETCH_ASSOC);
$adsoyad = ucwords($_data["adsoyad"]);

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?=$adsoyad?></title>
    <link rel="shortcut icon" type="image/x-icon" href="img/university.png">
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="fontawesome-free-6.1.2-web/css/all.css">
</head>

<body>
    <div class="container">

        <div class="box">
            <nav>
                <a href="userindex.php" class="logo">
                    <img src="img/World of-photoaidcom-cropped (5).png" alt="" style="width: 50px;height: 50px;">
                </a>
                <ul>
                <?=  '    <li><a href="meprofile.php?id='.$_data["id"].'"  style="color:purple">Anasayfa</a></li>';?>
                <?=  '  <li><a href="meprofileabout.php?id='.$_data["id"].'">Hakkında</a></li>';?>
                <?=  '    <li><a href="meprofileyetenek.php?id='.$_data["id"].'">Yetenekler</a></li>';?>
                <?=  '    <li><a href="meprofileprojeler.php?id='.$_data["id"].'">Projeler</a></li>';?>
                <?=  '    <li><a href="meprofileedit.php?id='.$_data["id"].'">Düzenle</a></li>';?>
                </ul>
            </nav>
            <div class="contains">

<?php
$adsoyad = ucwords($_data["adsoyad"]);
$bolum= mb_strtolower($_data["bolum"]);
                        $bolum =ucwords($bolum);
?>




                <div class="section-1">
                    <h1> <?=$adsoyad?></h1>
                    <h3><?=$bolum?></h3>
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Quaerat, deserunt vitae, at dicta sed consequatur laborum non veniam adipisci blanditiis incidunt.</p>
                  
                </div>

                <div class="section-2">
                <?php
  if($_data["resim"]==null and $_data["cinsiyet"] == "bay"){
    echo '  <img src="assets/img/gallery/images.jpeg" alt="Admin" >';
  }
  else if($_data["resim"]==null and $_data["cinsiyet"] == "bayan"){
    echo '  <img src="assets/img/gallery/imagess.png" alt="Admin" >';
  }
  else{
    echo '<img src="img/' . $_data["resim"] . '" alt="avatar" >';
  }
  
                   ?>
                    
                </div>

                <div class="section-3">
                    <a href="<?=$_data["linkedln"]?>"><i class="fa-brands fa-linkedin"></i></a>
                    <a href="<?=$_data["twitter"]?>"><i class="fa-brands fa-twitter"></i></a>
                    <a href="<?=$_data["insta"]?>"><i class="fa-brands fa-instagram"></i></a>
                    
                </div>

            </div>
        </div>
    </div>
</body>

</html>