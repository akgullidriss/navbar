<html>
<head></head>
<body>


<?php
echo "<table border=1 align=center>";

error_reporting(0);

$db = new PDO("mysql:host=localhost;dbname=denemee;charset=utf8" , "root" , "");
$veri=$db->query("select * from dene " , PDO::FETCH_ASSOC);

   foreach ($veri as $row)

echo "<tr><td>$row[id]</td><td>$row[ad]</td><td>$row[soyad]</td><td>$row[yas]</td><td>$row[maas]</td></tr>";


?>
</table>
</body>
</html>