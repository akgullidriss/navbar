<?php
include "verit.php" ;
$id=$_GET["id"];


$verisil = $db->prepare("DELETE FROM mesaj WHERE id=?");
$verisil ->execute([

$id
]);

if($verisil){
    header('Location:amesajlar.php');

}
else{
echo "Silme işlemi başarısız";
}
?>