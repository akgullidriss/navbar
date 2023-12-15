<?php
error_reporting(0);
include "config.php";
ob_start();
session_start();

$bolum_id = $_SESSION['bolum_id'];

$sql = "SELECT dp.dersprog_id, p.yil_id, d.donem_ad, e.egt_durum, dp.sinif_id, b.bolum_id, b.bolum_ad, s.sube_ad
                            FROM dersprogkayit AS dp
                            INNER JOIN bolum AS b ON dp.bolum_id = b.bolum_id
                            INNER JOIN egt_durum AS e ON dp.egt_id = e.egt_id
                            INNER JOIN subeler AS s ON dp.sube_id = s.sube_id
                            INNER JOIN donem AS d ON dp.donem_id = d.donem_id
                            INNER JOIN parametre AS p ON dp.donem_id = p.donem_id
                            WHERE b.bolum_id = '$bolum_id'
                            ORDER BY p.yil_id ASC";

$result = $conn->query($sql);
echo "<div class='tablemain table-responsive'>";
echo "<table class='table'>";
echo "<thead style='text-align:center;'>
                        <tr>
                            <th scope='col'> Yıl </th>
                            <th scope='col'> Dönem </th>
                            <th scope='col'> Bölüm </th>
                            <th scope='col'> Öğrenim </th>
                            <th scope='col'> Şube </th>
                            <th scope='col'> Sınıf </th>
                            <th colspan='3' scope='col'> İşlemler </th>
                        </tr>
                        </thead>";
echo "<tbody style='text-align:center;'>";
while ($row = $result->fetch_assoc()) {
    echo "<tr>";
    echo "<td>" . $row["yil_id"] . "</td>";
    echo "<td>" . $row["donem_ad"] . "</td>";
    echo "<td>" . $row["bolum_ad"] . "</td>";
    echo "<td>" . $row["egt_durum"] . "</td>";
    echo "<td>" . $row["sube_ad"] . "</td>";
    echo "<td>" . $row["sinif_id"] . "</td>";
    echo "<td><a href='dersolusturyeni.php?dersprog_id=" . $row["dersprog_id"] . "&bolum_ad=" . $row["bolum_ad"] . "&bolum_id=" . $row["bolum_id"] . "&sube_ad=" . $row["sube_ad"] . "&sinif_id=" . $row["sinif_id"] . "&yil_id=" . $row["yil_id"] . "&donem_ad=" . $row["donem_ad"] . "'><input class='btn btn-success' type='button'  value='İşlem Yap'></a></td>";
    echo "<td><button class='btn btn-danger delete-button'  onclick='ProgSil(" . $row["dersprog_id"] . ")'>Sil</button></td>";
    echo "</tr>";
}
echo "</tbody></table>";
echo "</div>";
?>