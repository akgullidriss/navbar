<?php
include("config.php");
$conn = new mysqli($servername, $username, $password, $dbname);
$conn->set_charset("utf8");

if ($conn->connect_error) {
    die("Veritabanına bağlanılamadı: " . $conn->connect_error);
}

$yerleske_id = $_GET["yerleske_id"];

$sql = "SELECT blok_id, blok_ad FROM yerleske_blok WHERE yerleske_id = '$yerleske_id'";
$result = $conn->query($sql);

$bloklar = array(); // Değişiklik: $dersler -> $bloklar
while ($row = $result->fetch_assoc()) {
    $blok = array(
        "blok_id" => $row["blok_id"],
        "blok_ad" => $row["blok_ad"]
    );
    array_push($bloklar, $blok);
}

echo json_encode($bloklar);

$conn->close();
?>