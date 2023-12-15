<?php
include("config.php");
$conn = new mysqli($servername, $username, $password, $dbname);
$conn->set_charset("utf8");

if ($conn->connect_error) {
    die("Veritabanına bağlanılamadı: " . $conn->connect_error);
}

$yerleske_id = $_GET["yerleske_id"];
$blok_id = $_GET["blok_id"];
$kat_id = $_GET["kat_id"];


$sql = "SELECT derslik_id, derslik_ad FROM yerleske_derslik WHERE yerleske_id = '$yerleske_id' AND blok_id = '$blok_id'AND kat_id = '$kat_id'";
$result = $conn->query($sql);

$derslikler = array(); 
while ($row = $result->fetch_assoc()) {
    $derslik = array(
        "derslik_id" => $row["derslik_id"],
        "derslik_ad" => $row["derslik_ad"]
    );
    array_push($derslikler, $derslik);
}

echo json_encode($derslikler);

$conn->close();
?>