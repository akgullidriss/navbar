<?php
error_reporting(0);

$adım=$_POST[ad];
$soyadım=$_POST[soyad];
$yasım=$_POST[yas];
$maasım=$_POST[maas];


$db = new PDO("mysql:host=localhost;dbname=denemee;charset=utf8" , "root" , "");
$veri=$db->query("INSERT INTO dene(ad,soyad,yas,maas) values('$adım','$soyadım','$yasım','$maasım')");

if ($veri) echo "başarılı";
else echo "başarısız";


header('Location:veri.html');


?>