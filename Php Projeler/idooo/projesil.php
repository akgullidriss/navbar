<?php
include "ayar.php" ;
$id=$_GET["id"];


$verisil = $db->prepare("DELETE FROM projeler WHERE id=?");
$verisil ->execute([

$id
]);

if($verisil){
    header('Location:pprojelist.php');

}
else{
echo "Silme işlemi başarısız";
}
?>