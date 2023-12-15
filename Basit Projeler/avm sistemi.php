<html>
<head>
<title>AVM SİSTEMİ</title>
<style>
  input{
        margin-top:5px;
        border-radius: 10px;
        text-align: center;  
     }
     input[type=submit]{
 margin-bottom: 20px;
     }
     form{
            background-color:wheat;
            width: 400px;
            height: 300px;
            padding-top: 50px;
            margin: auto;
            margin-top: 100px;
            border-radius: 40px;
            text-align: center;
        }
</style>
</head>
<body>
<form action="#" method="GET">
<h1>Ürün Ekleyin!</h1>
                ÜRÜN-KODU:<br>
                <input type="text" name="ürünkodu"><br><br>
                ÜRÜN-FİYATI:<br>
                <input type="text" name="ürünfiyatı"><br>
                <input type="submit" name="button" value="HESAPLA"><br>
<?php
error_reporting(0);
 $kod=$_GET["ürünkodu"];
 $fiyat=$_GET["ürünfiyatı"];
 $kdv=$fiyat*18/100;
 $toplam=$fiyat+$kdv;
 $kargo=$toplam*15/100;
 $ödenecek=$toplam+$kargo;
 echo "Tutar=".$toplam."<br>";
 if($toplam>=100){
        echo "Kargo Bedava!"."<br>";
        echo "Ödenecek toplam tutar=".$toplam."<br>";
 }
else{
 echo "Kargo tutarı:".$kargo."<br>";
echo "Ödenecek toplam tutar=".$ödenecek."<br>";
  }
 ?>
</form>
</body> 
 </html>