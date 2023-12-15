<html>
<head>

<style>
  

    td,h1,p{
        text-align: center;
    }
    button{
   
   border-radius: 10px;
   float: left;
   position: relative;
   left: 550px;
}
ul li{
   float: left;
   list-style: none;
   margin-left: 35px;
}
a{
            text-decoration: none;
            color: black;
            float: left;
        }
        .sonuca{
		background-color: green;
        color: white;
	}
	.sonucb{
		background-color:red;
        color: white;
	}
</style>


</head>




<body>



<h1 style="margin-top:70px ;">Sınıf Listesi</h1>
<p>NOT:vizenin %40'ı finalin %60'ı hesaba katılmıştır.</p>
<div style="position: absolute;top: 0px;">
<ul>
              <li> <button><a href="giris.php">GİRİŞ</a></button><br></li>
               <li> <button><a href="istatistik.php"> İSTATİSTİK</a></button><br></li>
               
               <li> <button><a href="delete.php">DELETE</a></button><br></li>
              
                

          </ul>
          </div>
    <?php
error_reporting(0);

    echo "<table border=1 cellspacing=1 cellpadding=1 align=center>";
    echo "<tr><th>AD</th><th>VİZE</th><th>FİNAL</th><th>ORTALAMA</th><th>DURUM</th></tr>";
    $db = new PDO("mysql:host=localhost;dbname=ogrenim;charset=utf8", "root", "");
    $query = $db->query("select * from ogrenciler ", PDO::FETCH_ASSOC);

    foreach ($query as $row)
    {
        $ort=$row["ortalama"];
if($ort>50){
    $durum= "Başarılı";
    $renk="sonuca";
}
else{
    $durum= "Başarısız";
    $renk="sonucb";
}
        echo  "<tr class='<?php echo $renk ?>'><td>".$row["ad"]."</td><td>".$row["vize"]."</td><td>".$row["final"]."</td><td>".$row["ortalama"]."</td><td>".$durum."</td></tr>";


    }

    ?>
    </table>


    
</body>
</html>