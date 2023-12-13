<?php

#CODED BY BOZKURT ROOT

$servername = "localhost";
$username   = "root";
$password   = "";
$dbname     = "kentpark";

try {
     $db = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
     $db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
     $db->exec("SET NAMES 'utf8'; SET CHARSET 'utf8'");
    }
catch(PDOException $e)
    {
     echo "Connection failed: " . $e->getMessage();
    }

#CODED BY BOZKURT ROOT
function guvenlik($gelen)
{
    $giden = addslashes($gelen);
    $giden = htmlspecialchars($giden);
    $giden = strip_tags($giden);
    $giden = htmlentities($giden);

    return $giden;
}

#CODED BY BOZKURT ROOT

function icerikTemizle($gelen){
$istenmeyen= array('hakaret','edepsiz','anan','şerefsiz','piç','sikeyim','yarak','am','göt','hızır','hizir','şikayet','anasini','avradini','ibne','yavşak','oyna','sahte','dolandırıcı','reklam','gavat','orospu','çocuğu','mehmet','ahmet','deneme');
$degisen = array('*','xxx','***','***','biiip');
$giden = str_replace($istenmeyen,$degisen,$gelen);
return $giden;
}
#CODED BY BOZKURT ROOT
?>