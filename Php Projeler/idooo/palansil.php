<?php
include "ayar.php" ;
$id=$_GET["id"];


$verisil = $db->prepare("DELETE FROM alanyetenekler WHERE id=?");
$verisil ->execute([

$id
]);

if($verisil){
    header('Location:palanlist.php');

}
else{
echo "Silme işlemi başarısız";
}
?>