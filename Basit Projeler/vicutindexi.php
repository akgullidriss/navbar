<html>
<head>
<title>İNDEX SİSTEMİ</title>
<style>
  input{
        margin-top:5px;
        border-radius: 4px;
        text-align: center;  
     }
     input[type=submit]{
 margin-bottom: 10px;
     }
     form{
            background-color:pink;
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
<h1>Bilgi Giriniz!</h1>
                BOYUNUZ:<br>
                <input type="text" name="boy"><br>
                KİLONUZ:<br>
                <input type="text" name="kilo"><br>
                <input type="submit" name="button" value="HESAPLA"><br>
 <?php
 error_reporting(0);
  $boy =$_GET["boy"];
  $kilo = $_GET["kilo"];

  $kitle = $kilo/($boy*$boy) ; 
  $kitle=round($kitle,2);

  echo "Vücut kitle indexi : ";
  if ($kitle<20)
      echo $kitle ." - Zayıf";
  else if($kitle>=20 && $kitle<=24.9)
      echo $kitle ." - Normal";
  else if ($kitle>=25 && $kitle<=29.9)
      echo $vki ." - Hafif Şişman";
  else if ($kitle>=30 && $kitle<=34.9)
      echo $kitle ." - Şişman";
  else if($kitle>=35 && $kitle<=44.9)
      echo $kitle ." - Sağlık açısından önemli";
  else if($kitle>=45 && $kitle<=49.9)
      echo $kitle ." - Aşırı şişman";
  else if ($kitle>49.9)
      echo $kitle ." - Morbid (Ölümcül Şişman)";
?>
</form>
</body> 
 </html>