<?php

error_reporting(0);
$ad=$_POST['ad'];
$v=$_POST['v'];
$f=$_POST['f'];
$vi=number_format($v);
$fi=number_format($f);
$ort=($vi*0.4)+($fi*0.6);

$db = new PDO("mysql:host=localhost;dbname=ogrenim;charset=utf8", "root", "");
$ekle = $db->query("INSERT INTO ogrenciler (ad,vize,final,ortalama) VALUES ('$ad', '$v', '$f','$ort')");

if ($ekle)
{
    echo "<script>alert('BAŞARILI')</script>";
}
else
{
    echo "<script>alert('BAŞARISIZ')</script>";
}
header('Location:giris.php');

?>