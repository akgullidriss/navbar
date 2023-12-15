<?php
if(isset($_POST['dersler'])){
	$ders=$_POST['dersler'];
	
	echo "ALMAK İSTEDİĞİNİZ DERS : " .$ders;
	
	
}
else
{
	
	echo "veri yok";
	
}


?>

<html>
<head>

<meta charset="utf-8">
</head>
<body>

<form action=""  method="POST">
<h3>almak istediğinişz eğitimi yazıız</h3>
<select name="dersler">
<option value="html">html</option>
<option value="css">css</option>
<option value="php">php</option>
</select>
<input type="submit" value="yolla">

</form>



</body>
</html>