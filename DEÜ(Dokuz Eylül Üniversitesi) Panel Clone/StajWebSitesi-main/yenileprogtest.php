!
<?php
include "config.php";

// Günleri çekmek için sorguyu hazırlayın ve çalıştırın
$gun_sorgusu = "SELECT * FROM gun";
$gun_sonuclari = $conn->query($gun_sorgusu);

// Saatleri çekmek için sorguyu hazırlayın ve çalıştırın
$saat_sorgusu = "SELECT * FROM saat";
$saat_sonuclari = $conn->query($saat_sorgusu);

// Ders programı bilgilerini çekmek için sorguyu hazırlayın ve çalıştırın
$dersprog_id = $_POST['dersprog_id']; // dersprog_id'yi aldık, artık bu değeri sorguda kullanabiliriz
$ders_sorgusu = "SELECT dk.gun_id, dk.saat_id, d.ders_ad, ut.uyg_ad, dt.tip_ad, y.yerleske_ad, yb.blok_ad, yk.kat_ad, yd.derslik_ad, ap.ak_unvan, ap.ak_ad
                FROM ders_kayit dk
                INNER JOIN dersler d ON dk.ders_id = d.ders_id
                INNER JOIN uyg_tip ut ON dk.uyg_id = ut.uyg_id
                INNER JOIN ders_tip dt ON dk.tip_id = dt.tip_id
                INNER JOIN yerleske y ON dk.yerleske_id = y.yerleske_id
                INNER JOIN yerleske_blok yb ON dk.blok_id = yb.blok_id
                INNER JOIN yerleske_kat yk ON dk.kat_id = yk.kat_id
                INNER JOIN yerleske_derslik yd ON dk.derslik_id = yd.derslik_id
                INNER JOIN akademik_per ap ON dk.ak_id = ap.ak_id
                WHERE dk.dersprog_id = '$dersprog_id'"; // dersprog_id değerini tırnak içinde alın
$ders_sonuclari = $conn->query($ders_sorgusu);
?>
<table class="table table-responsive-xl table-bordered">
    <thead>
        <tr>
            <th scope="col"></th> <!-- Boş köşe hücresi -->
            <?php while ($gun = $gun_sonuclari->fetch_assoc()) { ?>
                <th style="text-align:center;" scope="col">
                    <?php echo $gun['gun_ad']; ?>
                </th> <!-- Günleri başlıklara ekleyin -->
            <?php } ?>
        </tr>
    </thead>
    <tbody>
        <?php while ($saat = $saat_sonuclari->fetch_assoc()) { ?>
            <tr>
                <td>
                    <?php echo $saat['saatler']; ?>
                </td>
                <?php $gun_sonuclari->data_seek(0); // Gün sonuç setinin başına dönün ?>
                <?php while ($gun = $gun_sonuclari->fetch_assoc()) { ?>
                    <td style="text-align:center;">
                        <!-- <a href="#"></a> -->
                        <?php
                        $ders_sonuclari->data_seek(0); // Ders sonuç setinin başına dönün
                        while ($ders = $ders_sonuclari->fetch_assoc()) {
                            if ($ders['gun_id'] == $gun['gun_id'] && $ders['saat_id'] == $saat['saat_id']) {
                                $popupID = "myPopup" . $ders['kayit_id'];
                                ?>

                                <div class="popup" onclick="popupFunction('<?php echo $popupID; ?>')"
                                    style="font-weight: bold; display:block;">
                                    <?php
                                    echo $ders['ders_ad'] . "<br>";

                                    ?>
                                    <?php
                                    echo "<span class='popuptext' id='" . $popupID . "'>";

                                    echo $ders['ders_ad'] . "<br>";
                                    echo $ders['uyg_ad'] . "<br>";
                                    echo $ders['tip_ad'] . "<br>";
                                    echo $ders['yerleske_ad'] . "<br>";
                                    echo $ders['blok_ad'] . " Blok" . " - ";
                                    echo $ders['kat_ad'] . ". Kat" . " - ";
                                    echo $ders['derslik_ad'] . " Nolu Derslik" . "<br>";

                                    echo "<span style ='font-weight:bold;'>" . $ders['ak_unvan'] . " " . $ders['ak_ad'] . "</span></br>";


                                    echo "</span>";

                                    ?>
                                </div>
                                <?php
                                //echo "<button class='btn btn-success ' onclick ='dersDüzenle();' style='margin-right:5px'>Düzenle</button>";
                

                                //<!-- A button to open the popup form -->
                                //<button class="open-button" onclick="openForm()">Open Form</button>
                                ?>


                                <!-- <a href="edit.php?id= //php echo $ders['kayit_id']; ?>">Edit</a> -->
                                <?php
                                echo "<a href='edit.php?kayit_id=" . $ders['kayit_id'] . "&ders_id=" . $ders['ders_id'] . "&dersprog_id=" . $dersprog_id . "&bolum_ad=" . $bolum_ad . "&bolum_id=" . $bolum_id . "&sube_ad=" . $sube_ad . "&sinif_id=" . $sinif_id . "&yil_id=" . $yil_id . "&donem_ad=" . $donem_ad . "'><input class='btn btn-success' type='button'  value='Düzenle'></a>";
                                echo "<button class='btn btn-danger delete-button' onclick ='DersSil(" . $dersprog_id . "," . $gun['gun_id'] . "," . $saat['saat_id'] . ");'>Sil</button>";
                                // Burada ders programını tabloya yerleştirme işlemleri yapılacak
                            }
                        }
                        ?>
                    </td>
                <?php } ?>
            </tr>
        <?php } ?>
    </tbody>
</table>

<?php
// Veritabanı bağlantısını kapatın
$conn->close();
?>
<script>
    function popupFunction(popupID) {

        var popup = document.getElementById(popupID);
        popup.classList.toggle("show");
    }
    function openForm() {
        document.getElementById("myForm").style.display = "block";
    }

    function closeForm() {
        document.getElementById("myForm").style.display = "none";
    }

</script>