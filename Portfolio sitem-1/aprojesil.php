<?php
include "verit.php" ;
$id=$_GET["id"];


$verisil = $db->prepare("DELETE FROM projeler WHERE id=?");
$verisil ->execute([

$id
]);

if($verisil){
    header('Location:aprojeler.php');

}
else{
echo "Silme işlemi başarısız";
}
?>