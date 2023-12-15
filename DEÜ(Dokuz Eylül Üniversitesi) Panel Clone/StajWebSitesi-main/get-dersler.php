<?php
// get-dersler.php

include("config.php");
$conn = new mysqli($servername, $username, $password, $dbname);
$conn->set_charset("utf8");

if ($conn->connect_error) {
    die("Veritabanına bağlanılamadı: " . $conn->connect_error);
}

$bolumid = $_GET["bolumid"];
$secim = $_GET["secim"];
$subeid = $_GET["subeid"];
$donem = $_GET["donem"];

$sql = "SELECT ders_id, ders_ad FROM dersler WHERE bolum_id = '$bolumid' AND sinif = '$secim' AND donem_id = '$donem'";
$result = $conn->query($sql);

$dersler = array();
while ($row = $result->fetch_assoc()) {
    $ders = array(
        "ders_id" => $row["ders_id"],
        "ders_ad" => $row["ders_ad"]
    );
    array_push($dersler, $ders);
}

echo json_encode($dersler);

$conn->close();
?>
