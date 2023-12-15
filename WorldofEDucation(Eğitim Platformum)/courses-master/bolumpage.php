<?php
ob_start();
session_start();
include("verit.php");
include("function.php");


 
$bolum=@$_GET["bolum"];
$data=$db ->prepare("select * from üyeler where bolum=?");
$data ->execute([

 $bolum

]);
$_data=$data->fetch(PDO::FETCH_ASSOC);


?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?=$_data["bolum"]?></title>
</head>
<body>
    <?php
   echo $_data["bolum"];
    ?>
</body>
</html>