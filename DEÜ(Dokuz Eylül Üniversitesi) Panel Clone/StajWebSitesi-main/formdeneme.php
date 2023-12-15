<form id="myForm">
    <h3 style="padding-top:30px;">DERS EKLE</h3>
    <?php
    include("config.php");
    $dersprogid = $_GET["dersprog_id"];
    $bolumid = $_GET["bolum_id"];
    $sinif = $_GET["sinif_id"];

    $sql = "SELECT ders_id, ders_ad FROM dersler WHERE bolum_id = '$bolumid' AND sinif_id = '$sinif' ";
    $result = $conn->query($sql);
    echo "<select onchange='uygac()' style='margin-top:30px;' id='dersler' class='form-select dropdown'><option disabled selected>Ders Seçiniz</option>";
    while ($row = $result->fetch_assoc()) {
        echo "<option value='" . $row["ders_id"] . "'>" . $row["ders_ad"] . "</option>";
    }

    echo "</select>";
    $conn->close();
    ?>

    <select onchange="dersuygac()" disabled style="margin-top:30px;" id="uygtip" class="form-select dropdown">
        <option disabled selected>Uygulama Tipi Seçiniz</option>
        <option value="1">Teorik</option>
        <option value="2">Uygulamalı</option>
    </select>
    <select onchange="yerleskeac()" disabled style="margin-top:30px;" id="derstip" class="form-select dropdown">
        <option disabled selected>Ders İşleniş Tipini Seçiniz</option>
        <option value="1">Yüzyüze</option>
        <option value="2">Uzaktan</option>
    </select>
    <?php
    include("config.php");
    $conn = new mysqli($servername, $username, $password, $dbname);
    $conn->set_charset("utf8");
    if ($conn->connect_error) {
        die("Veritabanına bağlanılamadı: " . $conn->connect_error);
    }
    $sql = "SELECT yerleske_id, yerleske_ad FROM yerleske";
    $result = $conn->query($sql);
    echo "<select disabled  id='yerleske' onchange='blokDurum();blokac();' style='margin-top:30px;margin-bottom:30px;' class='form-select dropdown'><option disabled selected>Yerleşke Seçiniz</option>";

    while ($row = $result->fetch_assoc()) {
        echo "<option value='" . $row["yerleske_id"] . "'>" . $row["yerleske_ad"] . "</option>";
    }
    echo "</select>";
    $conn->close();
    ?>
    <select disabled onchange="katDurum();katac();" style="margin-top:30px;" id="yerleskeblok"
        class="form-select dropdown">
        <option disabled selected>Blok Seçiniz</option>
    </select>
    <select disabled onchange="derslikDurum();derslikac();" style="margin-top:30px;" id="yerleskekat"
        class="form-select dropdown">
        <option disabled selected>Kat Seçiniz</option>
    </select>
    <select disabled onchange="akademiac()" style="margin-top:30px;" id="yerleskederslik" class="form-select dropdown">
        <option disabled selected>Derslik Seçiniz</option>
    </select>
    <?php
    include("config.php");
    $sql = "SELECT ak_id, ak_ad, ak_unvan FROM akademik_per";
    $result = $conn->query($sql);
    echo "<select onchange='gunac()' disabled  id='akademik' style='margin-top:30px;margin-bottom:30px;' class='form-select dropdown'><option disabled selected>Akademik Personel Seçiniz</option>";

    while ($row = $result->fetch_assoc()) {
        echo "<option value='" . $row["ak_id"] . "'>" . $row["ak_unvan"] . " " . $row["ak_ad"] . "</option>";
    }
    echo "</select>";
    $conn->close();
    ?>
    <?php
    include("config.php");
    $conn = new mysqli($servername, $username, $password, $dbname);
    $conn->set_charset("utf8");
    if ($conn->connect_error) {
        die("Veritabanına bağlanılamadı: " . $conn->connect_error);
    }
    $sql = "SELECT gun_id, gun_ad FROM gun";
    $result = $conn->query($sql);
    echo "<select onchange='saatac()' disabled  id='gun' style='margin-top:30px;margin-bottom:30px;' class='form-select dropdown'><option disabled selected>Gün Seçiniz</option>";

    while ($row = $result->fetch_assoc()) {
        echo "<option value='" . $row["gun_id"] . "'>" . $row["gun_ad"] . "</option>";
    }
    echo "</select>";
    $conn->close();
    ?>
    <?php
    include("config.php");
    $conn = new mysqli($servername, $username, $password, $dbname);
    $conn->set_charset("utf8");
    if ($conn->connect_error) {
        die("Veritabanına bağlanılamadı: " . $conn->connect_error);
    }
    $sql = "SELECT saat_id, saatler FROM saat";
    $result = $conn->query($sql);
    echo "<select multiple onchange='btnac()' disabled  id='saat' style='margin-top:30px;margin-bottom:30px;' class='form-select dropdown'>";

    while ($row = $result->fetch_assoc()) {
        echo "<option value='" . $row["saat_id"] . "'>" . $row["saatler"] . "</option>";
    }
    echo "</select>";
    $conn->close();
    ?>

    <input disabled style="margin-bottom:40px;" id="btngnd" disabled class="btn btn-primary" type="submit"
        value="Ders Ekle">
</form>
<script src="dist/js/dersolusturr.js"></script>