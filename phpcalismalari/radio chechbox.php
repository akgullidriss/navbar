<?php

if($_POST){
	
	$name=$_POST['name'];
	echo $name."<br>";
	$gender=$_POST['gender'];
	echo $gender."<br>";
	$lessons=$_POST['lessons'];
	
	foreach($lessons as $key => $value){
		
		echo $value."<br>";
		
	}
	
	
}



?>

<html>
<head>

<meta charset="utf-8">
</head>
<body>

<form action=""  method="POST">
<h2>uygula ögren basvuru formu</h2>
<h3>ad soyad</h3>
<input type="text" name="name">
<h3>cinsiyet</h3>
<input type="radio" name="gender" value="bay"> bay
<input type="radio" name="gender" value="bayan"> bayan
<h3>eğitim secimi</h3>
<input type="checkbox" name="lessons[]" value="html">html
<input type="checkbox" name="lessons[]" value="css">css
<input type="checkbox" name="lessons[]" value="php">php
<hr>
<input type="submit" value="yolla">


</form>



</body>
</html>