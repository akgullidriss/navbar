<!-- coded by fatal -->
<?php
session_start();
ob_start();
include('../baglan.php');
$pass_st = $db->query("SELECT * FROM site WHERE id = '1'")->fetch(PDO::FETCH_ASSOC);
error_reporting(0);
if(isset($_SESSION["login"])){
header('Location:index.php');
}else{
?>
<title>Login</title>
<meta charset="utf-8">
<link rel="icon" type="image/png" href="../files/ico.png">
<link href="https://fonts.googleapis.com/css?family=Hind+Madurai&display=swap" rel="stylesheet">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<center>
<!-- coded by fatal -->
<?php eval("?>".base64_decode("PGI+PGltZyBzcmM9Ii4uL2ZpbGVzL2ljby5wbmciIHdpZHRoPSIxMDBweCIvPjxicj5DaGUgUGFuZWw8L2I+")); ?>
<form action="" method="POST">
<input name="password" class="pass" type="password" placeholder="Password" /> <input class="btn" type="submit" value="Login" /><br>
<?php /* default sifre: merhaba  */eval("?>".base64_decode("PHNtYWxsPm1hZGUgd2l0aCBmYXRhbDwvc21hbGw+DQo8P3BocCANCmlmKCgkX1BPU1RbInBhc3N3b3JkIl09PSRwYXNzX3N0WydwYXNzJ10pKXsNCiRfU0VTU0lPTlsibG9naW4iXSA9ICJ0cnVlIjsNCiRfU0VTU0lPTlsicGFzcyJdID0gJHBhc3Nfc3RbJ3Bhc3MnXTsNCmhlYWRlcigiTG9jYXRpb246aW5kZXgucGhwIik7DQp9DQo/Pg=="));
/* PHP KODLARINI BASE64 ILE 13KEZ SIFRELEDIM KALDIRIRSANIZ PANEL CALISMAZ ISTERSENIZ KALDIRIP DENEYEBILIRSINIZ BURADAKI AMAc EMEGIMI IMZAMI KALDIRMAMANIZ ADAM KENDI YAPMIS GIBI MILLETE SATIYOR SONRA.. BURDAN BOYLE YAPAN HER KIMSE ANASININ AMINA KOYAYIM OKKEY? ADAM AKILLI ILETISIME GECMEK ICIN ICQ:> fatal1 -Coded by Fatal */?>
</form>
    </center>
<style>
    *{
        font-family: 'Hind Madurai',sans-serif;
    }
body{
    padding: 30px;
	background:#FFF;
	color:#444;
}
.pass{
    padding:5;
	height:30px;
	color:#333;
	outline: none;
	border:1px solid #db3627;
}
.pass:focus,.pass:hover{
    padding:5;
	height:30px;
	color:#333;
	border:1px solid #db3627;
    box-shadow: 0px 0px 1px #db3627;
}
.btn{
    background: #db3627;
	height:30px;
	color:#fff;
	outline:none;
	border:none;
}
.btn:hover{
	height:30px;
	outline:none; 
    box-shadow: 0px 0px 1px #db3627;
}
    
</style>
<!-- coded by fatal -->
<?php } ?>