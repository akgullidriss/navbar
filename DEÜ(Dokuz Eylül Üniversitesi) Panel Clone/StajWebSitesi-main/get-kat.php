<?php
include("config.php");
$conn = new mysqli($servername, $username, $password, $dbname);
$conn->set_charset("utf8");

if ($conn->connect_error) {
    die("Veritabanına bağlanılamadı: " . $conn->connect_error);
}

$yerleske_id = $_GET["yerleske_id"];
$blok_id = $_GET["blok_id"];

$sql = "SELECT kat_id, kat_ad FROM yerleske_kat WHERE yerleske_id = '$yerleske_id' AND blok_id = '$blok_id'";
$result = $conn->query($sql);

$katlar = array(); 
while ($row = $result->fetch_assoc()) {
    $kat = array(
        "kat_id" => $row["kat_id"],
        "kat_ad" => $row["kat_ad"]
    );
    array_push($katlar, $kat);
}

echo json_encode($katlar);

$conn->close();

?>