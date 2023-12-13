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
                <?=  '    <li><a href="meprofile.php?id='.$_data["id"].'">Anasayfa</a></li>';?>
                <?=  '  <li><a href="meprofileabout.php?id='.$_data["id"].'" style="color:purple">Hakkında</a></li>';?>
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

$dogumTarihi = $_SESSION["dogumtarihi"];
$bugun = date("Y-m-d");
$diff = date_diff(date_create($dogumTarihi), date_create($bugun));
?>




                <div class="section-1">
                <div class="kutu">

                <h4>Ad-Soyad:</h4>
                <h4><?=$adsoyad?></h4>

</div>
<div class="kutu">

<h4> E-mail:</h4>
<h4><?=$_data["eposta"]?></h4>
</div>
<div class="kutu">
  
<h4> Cinsiyet:</h4>
<h4><?=$_data["cinsiyet"]?></h4>
</div>
<div class="kutu">
 
<h4>Bölüm:</h4>
<h4><?=$bolum?></h4>
</div>
                </div>

                <div class="section-2">
                <div class="kutu">
  
                <h4>Şehir:</h4>
                <h4><?=$_data["adres"]?></h4>
</div>
<div class="kutu">
 
<h4>  Kayıt Tarihi:</h4>
<h4><?=$_data["datetime"]?></h4>
</div>
<div class="kutu">
 
<h4> Şifre:</h4>
<h4><?=$_data["sifre"]?></h4>
</div>
<div class="kutu">

 <h4> Doğum Tarihi:</h4>
 <h4><?=$_data["dogumtarihi"].' '?>(<?=$diff->format('%y').' '.'Yaş'?> )</h4>
</div>
                    
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