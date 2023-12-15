
<html >
<head>
<title> Not Hesaplama</title>
</head>
<body>
<form action="#" method="GET">
<table border="2" style="text-align: center;margin:auto;">
  <tr><td colspan="2">Notlarınızı Giriniz</td></tr>
  <tr><td>Vize Notu:</td><td><input name="vize" type="text" /></td></tr>
  <tr><td>Final Notu:</td><td><input name="final" type="text" /></td></tr>
  <tr> <td>&nbsp;</td><td><input name="gonder" type="submit" value="Hesapla" /></td></tr>
</table>

  <?php
  error_reporting(0);
  $v=$_GET['vize'];
$f=$_GET['final'];
$ortalama=($v*0.4)+($f*0.6); 
if ($ortalama < 50)
{
$sonuc="Dersten Kaldınız.";
}
else
{
$sonuc="Dersten Geçtiniz.";	
}
 
?>
<br>
<table border="2" style="text-align: center;margin:auto;">
  <tr><td colspan="2"> Notların Sonucu</td> </tr>
  <tr> <td>Vize Notu:</td> <td><strong><?php echo $v; ?></strong></td> </tr>
  <tr> <td>Final Notu:</td> <td><strong><?php echo $f; ?></strong></td> </tr>
  <tr> <td>Ortalama:</td> <td><strong><?php echo $ortalama; ?></strong></td></tr>
  <tr> <td>Sonuç:</td><td><strong><?php echo $sonuc; ?></strong></td> </tr>
  <tr><td>&nbsp;</td><td>&nbsp;</td></tr>
</table> 
</form>
</body>
</html>