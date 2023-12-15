<?php
include "verit.php" ;
$id=$_GET["id"];


$verisil = $db->prepare("DELETE FROM alanlar WHERE id=?");
$verisil ->execute([

$id
]);

if($verisil){
    header('Location:aalanlar.php');

}
else{
echo "Silme işlemi başarısız";
}
?>