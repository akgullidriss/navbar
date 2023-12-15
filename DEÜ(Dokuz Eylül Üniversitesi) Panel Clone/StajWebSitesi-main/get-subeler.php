<?php
// get-subeler.php

include("config.php");
$bolumid = $_GET["bolumid"];
$sinif = $_GET["sinif"];

$sql = "SELECT sube_id, sube_ad FROM subeler WHERE bolum_id = '$bolumid' AND sinif = '$sinif'";
$result = $conn->query($sql);

$subeler = array();
while ($row = $result->fetch_assoc()) {
    $sube = array(
        "sube_id" => $row["sube_id"],
        "sube_ad" => $row["sube_ad"]
    );
    $subeler[] = $sube;
}

// JSON içeriğini doğru şekilde ayarlayalım ve içeriğin JSON olduğunu belirtelim
header('Content-Type: application/json');
echo json_encode($subeler);

$conn->close();
?>