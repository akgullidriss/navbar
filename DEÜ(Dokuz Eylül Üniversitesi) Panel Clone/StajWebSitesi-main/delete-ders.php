<?php
include 'config.php';
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);


// İstek gövdesinden verileri alalım
$requestBody = file_get_contents('php://input');
$data = json_decode($requestBody, true);

if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($data['dersprog_id']) && isset($data['gun_id']) && isset($data['saat_id'])) {
    $dersId = $data['dersprog_id'];
    $gunId = $data['gun_id'];
    $saatId = $data['saat_id'];

    // Veritabanında dersi id, gün ve saat bilgilerine göre silme işlemini gerçekleştir
    $deleteQuery = "DELETE FROM ders_kayit WHERE dersprog_id = ? AND gun_id = ? AND saat_id = ?";
    $stmt = $conn->prepare($deleteQuery);
    $stmt->bind_param("iii", $dersId, $gunId, $saatId);

    if ($stmt->execute()) {
        echo 'success';
    } else {
        echo 'error';
    }

    $stmt->close();
} else {
    echo 'error';
}

$conn->close();
?>