<?php
include 'config.php';

$requestBody = file_get_contents('php://input');
$data = json_decode($requestBody, true);

if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($data['programId'])) {
    $programId = $data['programId'];

    // dersprogkayit tablosundan silme işlemini gerçekleştir
    $deleteQueryDersprogkayit = "DELETE FROM dersprogkayit WHERE dersprog_id = $programId";
    if ($conn->query($deleteQueryDersprogkayit) === TRUE) {
        
        // ders_kayit tablosundan silme işlemini gerçekleştir
        $deleteQueryDersKayit = "DELETE FROM ders_kayit WHERE dersprog_id = $programId";
        if ($conn->query($deleteQueryDersKayit) === TRUE) {
            echo 'success';
        } else {
            echo 'error';
        }
    } else {
        echo 'error';
    }
} else {
    echo 'error';
}

$conn->close();
?>
