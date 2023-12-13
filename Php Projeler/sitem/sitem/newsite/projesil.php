<?php.
include "ayar.php" ;
$id=$_GET["Id"];
$sorgu=mysqli_query("DELETE from projeler where id=?");
if($sorgu){
echo "Başarıyla Silindi.";

}
else{
echo "Silme işlemi başarısız";
}
?>