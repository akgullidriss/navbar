<?php
include "verit.php" ;
$id=@$_GET["id"];


$verisil = $db->prepare("DELETE FROM yetenekler WHERE id=?");
$verisil ->execute([

$id
]);

if($verisil){
    header('Location:ayetenekler.php');

}
else{
echo "Silme işlemi başarısız";
}
?>