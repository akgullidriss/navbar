<?php
 include_once "php/config.php";
$id=@$_GET["user_id"];

$sql = "DELETE FROM users WHERE unique_id = $id";

if ($conn->query($sql) === true) {

  $url = "php/logout.php?logout_id=".$id;
  header("Location: ".$url);
  
   
} else {
    echo "Hata oluştu: " . $conn->error;
}






?>