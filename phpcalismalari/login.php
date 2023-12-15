<?php
/*
//form ekranına yazılan her veriyi direk ekrana yazdırı asağıdaki kod
echo "kullanıcı adı : " .$_POST['username'];
echo "<br>şifre : " .$_POST['password'];
*/

//aşağıdaki kodlarda forma girilen veriyi bir deişkene atadık sonra değişkenlerin içindeki verileri ekrana yazdık
$username=$_POST['username'];
$password=$_POST['password'];

echo $username."<br>".$password;

?>