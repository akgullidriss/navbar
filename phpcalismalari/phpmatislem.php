<?php
/*
//php dosyaları kaydederken ingilizce türkçe karakterlere dikkat et yoksa localhost server hata verir.
$sayi1=80;
$sayi2=20;
//toplama işlemi
$toplam=$sayi1+$sayi2;
//çıkarma işlemi
$cıkarma=$sayi1-$sayi2;
//bölme işlemi
$bölme=$sayi1/$sayi2;
//çarpma  işlemi
$çarpma=$sayi1*$sayi2;
//kalan bulma  işlemi
$kalan=$sayi1%$sayi2;

echo ("$toplam $cıkarma $bölme $çarpma $kalan")
*/




/*

$sayi1=80;
$sayi2=20;
$sayi1=$sayi1+100;
$sayi2+=100;
//yukarda sondan iki işlem aynı işi yapar

echo ("yeni değer $sayi1 - yeni değer $sayi2");
*/





//fonksiyonlar
$sayi3=25;
echo "sayinin karakökü :" .sqrt($sayi3)."<br>"; 
echo "sayinin üssü :" .pow($sayi3,2)."<br>"; 
echo "sayinin mutlak değer :" .abs(-10)."<br>"; 
echo "en küçük sayi :" .min($sayi3,2,10,20,18)."<br>"; 
echo "en büyük sayi :" .max($sayi3,2,10,20,18)."<br>"; 
echo "kelimenin veri tipi :" .gettype($sayi3)."<br>"; 



?>