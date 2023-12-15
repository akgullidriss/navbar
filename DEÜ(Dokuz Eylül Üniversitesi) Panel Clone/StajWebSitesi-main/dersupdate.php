<?php
include("config.php");
$ders_id = $_POST["dersid"];
$kayit_id = $_POST["kayitid"];
$dersprogid = $_POST["dersprogid"];
$uyg_id = $_POST["uygtip"];
$tip_id = $_POST["derstip"];
$yerleske_id = $_POST["yerleske"];
$blok_id = $_POST["yerleskeblok"];
$kat_id = $_POST["yerleskekat"];
$derslik_id = $_POST["yerleskederslik"];
$ak_id = $_POST["akademik"];
$gun_id = $_POST["gun"];
$saatler = $_POST["saat"]; // Assuming you're only updating one saat
foreach ($saatler as $saat) {
    // Kayıt kontrolü için ders_kayit tablosunda sorguyu oluştur
    $kayit_kontrol_query = "SELECT COUNT(*) FROM ders_kayit WHERE gun_id = '$gun_id' AND saat_id = '$saat'";

    // Kayıt kontrolü için ders_kayit tablosunda sorguyu çalıştır
    $kayit_kontrol_result = mysqli_query($conn, $kayit_kontrol_query);
    $kayit_kontrol_row = mysqli_fetch_array($kayit_kontrol_result);
    $kayit_kontrol_query_2 = "SELECT COUNT(*) FROM ders_kayit WHERE gun_id = '$gun_id' AND saat_id = '$saat' AND kayit_id = '$kayit_id'";
    $kayit_kontrol_result_2 = mysqli_query($conn, $kayit_kontrol_query_2);
    $kayit_kontrol_row_2 = mysqli_fetch_array($kayit_kontrol_result_2);
    // Aynı saatte başka bir ders kaydı yoksa yeni kaydı ekleyin
    if ($kayit_kontrol_row[0] == 0 || $kayit_kontrol_row_2[0] == 1) {
        // Yeni kaydı ders_kayit tablosuna ekle
        $kayit_guncelle_query = "UPDATE ders_kayit SET uyg_id='$uyg_id', tip_id='$tip_id', yerleske_id='$yerleske_id',
    blok_id='$blok_id', kat_id='$kat_id', derslik_id='$derslik_id', ak_id='$ak_id', gun_id='$gun_id', saat_id='$saat' WHERE kayit_id='$kayit_id' AND ders_id='$ders_id'";

        // Kaydı güncelleme sorgusunu çalıştır
        $kayit_guncelle_result = mysqli_query($conn, $kayit_guncelle_query);

        // Kayıt güncelleme işlemi başarılıysa geri bildirim gönderin
        if ($kayit_guncelle_result) {
            echo "Kayıt başarıyla güncellendi.";
        } else {
            echo "Kayıt güncellenirken bir hata oluştu.";
        }
    }
}
?>