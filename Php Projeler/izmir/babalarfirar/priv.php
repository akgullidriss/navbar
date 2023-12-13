<?php
error_reporting(0);
include('../baglan.php');
$sorgu1 = $db->query("SELECT * FROM site WHERE id = '1'")->fetch(PDO::FETCH_ASSOC);
?>
<!DOCTYPE html>
<html lang="tr">
<head>
	<meta charset="UTF-8">
    <link href="https://fonts.googleapis.com/css?family=Hind+Madurai&display=swap" rel="stylesheet">
    <link href="https://use.fontawesome.com/releases/v5.0.7/css/all.css" rel="stylesheet">
	<title>Che Panel</title>
    <link rel="icon" type="image/png" href="../files/ico.png">
    <link type="text/css" rel="stylesheet" href="./css/fatal.css">
	<meta name="viewport" content="width=device-width, initial-scale=1">

	<style>
	.table {
		margin-bottom: 0px;
	}
	</style>
</head>

<body><?php if(isset($_GET['sifre'])){ ?>
        <h2><img src="../files/diablo.gif" width="27px"> Şifre değiştir</h2>
    <form action="?sifre" method="post">
    <input type="text" name="pass" class="area" value="<?=$sorgu1['pass']?>"> <button type="submit">Güncelle</button><br><small>Türkçe karakter kullanmayın sıkıntı çıkarabilir</small></form>
    <?php if($_POST['pass']){
    $pass = $_POST['pass'];
$db->query("UPDATE site SET pass = '{$pass}' WHERE id = '1'");
    header('Location:priv.php?sifre');
}  }else{ ?>
    <h2>Özel Sayfa Ayarları</h2>
    <form action="" method="post">
    <textarea name="pp" rows="7" cols="100" class="area"><?=$sorgu1['privpage']?></textarea><br>
    <button type="submit">Güncelle</button></form>
    <?php if($_POST['pp']){
    $pp = $_POST['pp'];
$db->query("UPDATE site SET privpage = '{$pp}' WHERE id = '1'");
    header('Location:priv.php');
} } ?>
    </body>
</html>