<?php
include("config.php");
$ders_id = $_POST["dersid"];
$ders_ad = $_POST["dersad"];
$bolum_id = $_POST["bolumid"];
$sinif_id = $_POST["sinifid"];
$donem_id = $_POST["donemid"];


$kayit_guncelle_query = "UPDATE dersler SET bolum_id='$bolum_id', sinif_id='$sinif_id', donem_id='$donem_id'
     WHERE ders_id='$ders_id'";

// Kaydı güncelleme sorgusunu çalıştır
$kayit_guncelle_result = mysqli_query($conn, $kayit_guncelle_query);

// Kayıt güncelleme işlemi başarılıysa geri bildirim gönderin
if ($kayit_guncelle_result) {
    echo "Kayıt başarıyla güncellendi.";
} else {
    echo "Kayıt güncellenirken bir hata oluştu.";
}
?>