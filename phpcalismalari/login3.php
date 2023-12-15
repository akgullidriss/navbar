<?php
/*
// strlen fonksiyonu girilen verinin karakter sayısını verir.r
$username=$_POST['username'];

echo strlen($username);
*/


/*
//kyullanıcı adı karaktar uzunluğu 10dan uzun oldugunda if kısa oldugunda else deki kodlar çalışır
$username=$_POST['username'];
$maxLenght = 10;
$usernameLenght = strlen($username);//strlen fonksiyonun türkçe karakter karşılığı mb_strlen kullanılır.

if($usernameLenght > $maxLenght){
	echo "kullanıcı adı 10 karakterden fazla olamaz.";	
}
else 
	echo "hoşgeldiniz : " .$username;

*/ 


//strpos fonksiyonu girilen veride belirtilen karakkter kaçıncı sırada onu söyler
$comment = $_POST['comment'];

$index = strpos($comment,".");//türkçe karakterlisi mb_strpos

echo $index;








?>