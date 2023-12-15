<html>
<head>

<style>

    td,h1{
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
}

</style>


</head>




<body>
    <div style="position:absolute; top:0px;">
<ul>
              <li> <button><a href="giris.php">GİRİŞ</a></button><br></li>
               <li> <button><a href="siniflist.php">LİSTE</a></button><br></li>
               
               <li> <button><a href="delete.php">DELETE</a></button><br></li>
              
                

          </ul>
          </div>
<h1  style="margin-top:40px ;">VİZELER</h1>
    <?php

echo "<table border=0 cellspacing=10 cellpadding=1 align=center><tr>";
error_reporting(0);
$db = new PDO("mysql:host=localhost;dbname=ogrenim;charset=utf8", "root", "");
$query = $db->query("select * from ogrenciler ORDER BY vize ASC ", PDO::FETCH_ASSOC);
foreach ($query as $row)
{
    echo "<td valign=bottom >".$row["vize"]."<br><img src='vize.png' width=75 height=".$row["vize"]."><br>".$row["ad"]."</td>";
    #valign=bottom ifadesi aşağıdan hizalama yapar
}

?>
</table>
<h1>FİNALLER</h1>
    <?php

echo "<table border=0 cellspacing=10 cellpadding=1 align=center><tr>";
error_reporting(0);
$db = new PDO("mysql:host=localhost;dbname=ogrenim;charset=utf8", "root", "");
$query = $db->query("select * from ogrenciler ORDER BY final ASC ", PDO::FETCH_ASSOC);
foreach ($query as $row)
{
    echo "<td valign=bottom >".$row["final"]."<br><img src='final.jpg' width=75 height=".$row["final"]."><br>".$row["ad"]."</td>";
    #valign=bottom ifadesi aşağıdan hizalama yapar
}

?>
</table>

<h1>ORTALAMALAR</h1>
    <?php

echo "<table border=0 cellspacing=10 cellpadding=1 align=center><tr>";
error_reporting(0);
$db = new PDO("mysql:host=localhost;dbname=ogrenim;charset=utf8", "root", "");
$query = $db->query("select * from ogrenciler ORDER BY ortalama ASC ", PDO::FETCH_ASSOC);
foreach ($query as $row)
{
    echo "<td valign=bottom >".$row["ortalama"]."<br><img src='ortalama.png' width=75 height=".$row["ortalama"]."><br>".$row["ad"]."</td>";
    #valign=bottom ifadesi aşağıdan hizalama yapar
}

?>
</table>







</body>
</html>