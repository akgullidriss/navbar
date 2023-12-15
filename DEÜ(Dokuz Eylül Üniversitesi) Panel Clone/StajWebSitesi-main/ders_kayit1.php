<?php
include("config.php");

$dersprogid = $_POST["dersprogid"];
$dersler = $_POST["dersler"];
$uyg_id = $_POST["uygtip"];
$tip_id = $_POST["derstip"];
$yerleske_id = $_POST["yerleske"];
$blok_id = $_POST["yerleskeblok"];
$kat_id = $_POST["yerleskekat"];
$derslik_id = $_POST["yerleskederslik"];
$ak_id = $_POST["akademik"];
$gun_id = $_POST["gun"];
$saatler = $_POST["saat"];


// Seçilen saatleri dizi olarak alın

// Her bir seçili saat için ayrı bir kayıt ekleyin
foreach ($saatler as $saat) {
    // Kayıt kontrolü için ders_kayit tablosunda sorguyu oluştur
    $kayit_kontrol_query = "SELECT COUNT(*) FROM ders_kayit WHERE gun_id = '$gun_id' AND saat_id = '$saat'";

    // Kayıt kontrolü için ders_kayit tablosunda sorguyu çalıştır
    $kayit_kontrol_result = mysqli_query($conn, $kayit_kontrol_query);
    $kayit_kontrol_row = mysqli_fetch_array($kayit_kontrol_result);

    // Aynı saatte başka bir ders kaydı yoksa yeni kaydı ekleyin
    if ($kayit_kontrol_row[0] == 0) {
        // Yeni kaydı ders_kayit tablosuna ekle
        $kayit_ekle_query = "INSERT INTO ders_kayit (dersprog_id, ders_id, uyg_id, tip_id, yerleske_id, blok_id, kat_id, derslik_id, ak_id, gun_id, saat_id) 
                            VALUES ('$dersprogid', '$dersler', '$uyg_id', '$tip_id', '$yerleske_id', '$blok_id', '$kat_id', '$derslik_id', '$ak_id', '$gun_id', '$saat')";

        // Yeni kaydı ders_kayit tablosuna ekleyin
        $kayit_ekle_result = mysqli_query($conn, $kayit_ekle_query);

        // Kayıt ekleme işlemi başarılıysa geri bildirim gönderin
        if ($kayit_ekle_result) {
            echo "Kayıt başarıyla eklendi.";
        } else {
            echo "Kayıt eklenirken bir hata oluştu.";
        }
    } else {
        echo "Seçilen saatte zaten başka bir ders kaydı bulunmaktadır.";
    }
}
?>