<?php

if($_POST){
	
	echo "post var <hr> ";

$phone=$_POST['phone'];	
	
	if(!is_numeric($phone)){
		
	echo "telefon numarası hatalı";
	header("Refresh:2");//hatalı girilince 2 saniye sonra form ekranınna döner
	
	}
	else 
	{
		echo "telefon girişi başarılı";
	}
}
else 
	echo "post yok <hr>";

?>

<html>
<head>
</head>
<body>
<form action="" method="POST">

 <input type="text" name="phone" required >
<input type="submit" value="yolla" >



</form>
</body>
</html>

<?php



?>