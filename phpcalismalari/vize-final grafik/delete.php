<?php

error_reporting(0);

$db = new PDO("mysql:host=localhost;dbname=ogrenim;charset=utf8", "root", "");
$ekle = $db->query("DELETE FROM ogrenciler");

if ($ekle)
{
    echo "<script>alert('BAŞARILI')</script>";
}
else
{
    echo "<script>alert('BAŞARISIZ')</script>";
}
header('Location:siniflist.php');

?>