<?php
include("config.php");
$ders_ad = $_POST["dersad"];
$bolum_id = $_POST["bolumid"];
$sinif_id = $_POST["sinifid"];
$donem_id = $_POST["donemid"];

$kayit_control_query = "SELECT COUNT(*) FROM dersler WHERE ders_ad = '$ders_ad'";
$kayit_control_result = mysqli_query($conn, $kayit_control_query);
$kayit_control_row = mysqli_fetch_array($kayit_control_result);

$kayit_guncelle_query = "INSERT INTO dersler (ders_ad, bolum_id, sinif_id, donem_id) VALUES ('$ders_ad','$bolum_id','$sinif_id','$donem_id')";

// Kaydı güncelleme sorgusunu çalıştır
$kayit_guncelle_result = mysqli_query($conn, $kayit_guncelle_query);

// Kayıt güncelleme işlemi başarılıysa geri bildirim gönderin
if ($kayit_guncelle_result) {
    echo "Kayıt başarıyla oluşturuldu.";
} else {
    echo "Kayıt oluşturulurken bir hata oluştu.";
}


?>