<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>sonuc</title>
</head>
 
<body >
<p>
  <?php
$v=$_POST['vize'];
$f=$_POST['final'];

 
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
</p>
<table border="2" style="text-align: center;margin:auto;">
  <tr>
    <td colspan="2"> Notların Sonucu</td>
  </tr>
  <tr>
    <td>Vize Notu:</td>
    <td><strong><?php echo $v; ?></strong></td>
  </tr>
  <tr>
    <td>Final Notu:</td>
    <td><strong><?php echo $f; ?></strong></td>
  </tr>
  

  <tr>
    <td>Ortalama:</td>
    <td><strong><?php echo $ortalama; ?></strong></td>
  </tr>
  <tr>
    <td>Sonuç:</td>
    <td><strong><?php echo $sonuc; ?></strong></td>
  </tr>
  <tr>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
  </tr>
</table>

</body>
</html>