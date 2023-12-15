<?php
include("config.php");
$kayitid = $_GET['kayit_id'];
$dersid = $_GET['ders_id'];
ob_start();
session_start();
// Kullanıcı giriş yapılmamışsa login sayfasına yönlendir
if (!isset($_SESSION['loggedin']) || $_SESSION['loggedin'] !== true) {
    header("Location: login.php");
    exit;
}

if ($_SESSION['tip'] == 'Öğrenci' || $_SESSION['tip'] == 'Admin') {
    header("Location: login.php");
    exit;
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <style>
        {
            box-sizing: border-box;
        }

        /* Button used to open the contact form - fixed at the bottom of the page */
        .open-button {
            background-color: #555;
            color: white;
            padding: 16px 20px;
            border: none;
            cursor: pointer;
            opacity: 0.8;

        }

        /* The popup form - hidden by default */
        .form-popup {
            display: none;
            position: fixed;
            bottom: 0;
            right: 15px;
            border: 3px solid #f1f1f1;
            z-index: 9;
        }

        /* Add styles to the form container */
        .form-container {
            max-width: 300px;
            padding: 10px;
            background-color: white;
        }

        /* Full-width input fields */
        .form-container input[type=text],
        .form-container input[type=password] {
            width: 100%;
            padding: 15px;
            margin: 5px 0 22px 0;
            border: none;
            background: #f1f1f1;
        }

        /* When the inputs get focus, do something */
        .form-container input[type=text]:focus,
        .form-container input[type=password]:focus {
            background-color: #ddd;
            outline: none;
        }

        /* Set a style for the submit/login button */
        .form-container .btn {
            background-color: #04AA6D;
            color: white;
            padding: 16px 20px;
            border: none;
            cursor: pointer;
            width: 100%;
            margin-bottom: 10px;
            opacity: 0.8;
        }

        /* Add a red background color to the cancel button */
        .form-container .cancel {
            background-color: red;
        }

        /* Add some hover effects to buttons */
        .form-container .btn:hover,
        .open-button:hover {
            opacity: 1;
        }

        .navbar-nav {
            z-index: 1000;
        }
    </style>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>DOKUZ EYLÜL ÜNİVERSİTESİ</title>

    <!-- Google Font: Source Sans Pro -->
    <link rel="stylesheet"
        href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
    <!-- Font Awesome -->
    <link rel="stylesheet" href="plugins/fontawesome-free/css/all.min.css">
    <!-- Ionicons -->
    <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
    <!-- Tempusdominus Bootstrap 4 -->
    <link rel="stylesheet" href="plugins/tempusdominus-bootstrap-4/css/tempusdominus-bootstrap-4.min.css">
    <!-- iCheck -->
    <link rel="stylesheet" href="plugins/icheck-bootstrap/icheck-bootstrap.min.css">
    <!-- JQVMap -->
    <link rel="stylesheet" href="plugins/jqvmap/jqvmap.min.css">
    <!-- Theme style -->
    <link rel="stylesheet" href="dist/css/adminlte.min.css">
    <!-- overlayScrollbars -->
    <link rel="stylesheet" href="plugins/overlayScrollbars/css/OverlayScrollbars.min.css">
    <!-- Daterange picker -->
    <link rel="stylesheet" href="plugins/daterangepicker/daterangepicker.css">
    <!-- summernote -->
    <link rel="stylesheet" href="plugins/summernote/summernote-bs4.min.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css" />
    <script src="https://kit.fontawesome.com/f2bf49d1b5.js" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="dist/css/dersekle.css" type="text/css" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.css">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.js"></script>
    <script src="dist/js/dersolusturr.js"></script>
</head>

<body class="hold-transition sidebar-mini layout-fixed">
    <div class="wrapper">

        <!-- Navbar -->
        <nav class="main-header navbar navbar-expand navbar-white navbar-light">
            <!-- Left navbar links -->
            <ul class="navbar-nav ">
                <li class="nav-item">
                    <a class="nav-link" data-widget="pushmenu" role="button">
                        <i class="fa-solid fa-ellipsis-vertical"></i>
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="javascript:history.back()" role="button">
                        <i class="fa-solid fa-backward"></i>
                    </a>
                </li>

                <li class="nav-item">

                    <?php
                    ini_set('display_errors', 1);
                    ini_set('display_startup_errors', 1);
                    error_reporting(E_ALL);
                    $dersprog_id = $_GET['dersprog_id'];
                    $bolum_ad = $_GET['bolum_ad'];
                    $sube_ad = $_GET['sube_ad'];
                    $sinif_id = $_GET['sinif_id'];
                    $yil_id = $_GET['yil_id'];
                    $donem_ad = $_GET['donem_ad'];


                    ?>

                </li>


            </ul>

            <!-- Right navbar links -->
            <ul class="navbar-nav ml-auto">
                <!-- Navbar Search -->
                <li class="nav-item">
                    <a class="nav-link" data-widget="fullscreen" href="#" role="button">
                        <i class="fas fa-expand-arrows-alt"></i>
                    </a>
                </li>
            </ul>
        </nav>
        <!-- /.navbar -->

        <?php
        $tip = $_SESSION['tip'];
        $id = $_SESSION['ak_id'];
        if ($tip == 'Akademik Personel') {
            $sql = "SELECT * FROM akademik_per WHERE ak_id = $id";
            $result = $conn->query($sql);
            $sorgu = $result->fetch_all(MYSQLI_ASSOC);
        } else if ($tip == 'Öğrenci') {
            $sql = "SELECT * FROM ogrenci WHERE ak_id = $id";
            $result = $conn->query($sql);
            $sorgu = $result->fetch_all(MYSQLI_ASSOC);
        }



        foreach ($sorgu as $row) {

            echo '
        <!-- Main Sidebar Container -->
        <aside class="main-sidebar sidebar-dark-primary elevation-4">
        <!-- Sidebar -->
        <div class="sidebar">
            <!-- Sidebar user panel (optional) -->
            <div class="user-panel mt-3 pb-3 mb-3 d-flex">
            <div class="image">';

            if ($tip == 'Akademik Personel') {
                echo '  <img src="dist/img/akademik.png" class="img-circle elevation-2" alt="User Image">';
            } else if ($tip == 'Öğrenci') {
                echo '  <img src="dist/img/ogrenci.png" class="img-circle elevation-2" alt="User Image">';
            }

            echo '
                </div>
                <div class="info">
                    <a style="text-decoration: none;
                    " href="#" >' . $row["ak_ad"] . '</a>
                </div>
                </div>';
        }
        ?>

        <!-- SidebarSearch Form -->
        <div class="form-inline">
            <div class="input-group" data-widget="sidebar-search">
                <input class="form-control form-control-sidebar" type="search" placeholder="Search" aria-label="Search">
                <div class="input-group-append">
                    <button class="btn btn-sidebar">
                        <i class="fas fa-search fa-fw"></i>
                    </button>
                </div>
            </div>
        </div>

        <!-- Sidebar Menu -->
        <nav class="mt-2">
            <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
                <li class="nav-header">DERS PROGRAM İŞLEMLERİ</li>
                <li class="nav-item">
                    <a href="dersprog.php" class="nav-link">
                        <i class="fa-solid fa-image"></i>
                        <p>
                            Program Düzenle
                        </p>
                    </a>
                </li>
                <li class="nav-item">
                    <a href="iletisim.php" class="nav-link">
                        <i class="fa-solid fa-phone"></i>
                        <p>
                            İletişim
                        </p>
                    </a>
                </li>
                <li class="nav-item">
                    <a href="logout.php" class="nav-link">
                        <i class="fa-solid fa-right-from-bracket"></i>
                        <p>
                            Çıkış Yap
                        </p>
                    </a>
                </li>
            </ul>
        </nav>
        <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
    </aside>

    <!-- Content Wrapper. Contains page content -->
    <div class="content-wrapper">
        <center>

            <div class="container-main">
                <form id="myForm">
                    <h3 style="padding-top:30px;">DERS DÜZENLE</h3>
                    <?php
                    include("config.php");
                    $dersprogid = $_GET["dersprog_id"];
                    $bolumid = $_GET["bolum_id"];
                    $sinif = $_GET["sinif_id"];
                    $uygad = $_GET["uyg_ad"];
                    $tip = $_GET["tip_ad"];
                    $blokad = $_GET["blok_ad"];
                    $katad = $_GET["kat_ad"];
                    $derslikad = $_GET["derslik_ad"];
                    $akunvan = $_GET["ak_unvan"];
                    $akad = $_GET["ak_ad"];
                    $yerleskead = $_GET["yerleske_ad"];
                    $gunid = $_GET["gun_id"];
                    $gunad = $_GET["gun_ad"];
                    $saatad = $_GET["saatler"];
                    $saatid = $_GET["saat_id"];
                    // $yerleskeid = $_GET["yerleske_id"];
                    
                    ?>
                    <select disabled style="margin-top:30px;" id="kayitid" class="form-select dropdown">
                        <option value="<?php echo $kayitid; ?>">
                            <?php echo $kayitid; ?>
                        </option>

                    </select>
                    <select disabled style="margin-top:30px;" id="dersid" class="form-select dropdown">
                        <option value="<?php echo $dersid; ?>">
                            <?php echo $dersid; ?>
                        </option>

                    </select>

                    <select style="margin-top:30px;" id="uygtip" class="form-select dropdown">
                        <option disabled selected>
                            <?php echo $uygad; ?>
                        </option>
                        <option value="1">Teorik</option>
                        <option value="2">Uygulamalı</option>
                    </select>
                    <select style="margin-top:30px;" id="derstip" class="form-select dropdown">
                        <option disabled selected>
                            <?php echo $tip; ?>
                        </option>
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
                    echo "<select  id='yerleske' onchange='blokDurum();' style='margin-top:30px;margin-bottom:30px;' class='form-select dropdown'><option disabled selected>" . $yerleskead . "</option>";

                    while ($row = $result->fetch_assoc()) {
                        echo "<option value='" . $row["yerleske_id"] . "'>" . $row["yerleske_ad"] . "</option>";
                    }
                    echo "</select>";
                    $conn->close();
                    ?>
                    <select onchange="katDurum();" style="margin-top:30px;" id="yerleskeblok"
                        class="form-select dropdown">
                        <option disabled selected>
                            <?php echo $blokad; ?>
                        </option>
                    </select>
                    <select onchange="derslikDurum();" style="margin-top:30px;" id="yerleskekat"
                        class="form-select dropdown">
                        <option disabled selected>
                            <?php echo $katad; ?>
                        </option>
                    </select>
                    <select style="margin-top:30px;" id="yerleskederslik" class="form-select dropdown">
                        <option disabled selected>
                            <?php echo $derslikad ?>
                        </option>
                    </select>
                    <?php
                    include("config.php");
                    $sql = "SELECT ak_id, ak_ad, ak_unvan FROM akademik_per";
                    $result = $conn->query($sql);
                    echo "<select    id='akademik' style='margin-top:30px;margin-bottom:30px;' class='form-select dropdown'><option disabled selected>" . $akunvan . "" . $akad . "</option>";

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
                    echo "<select    id='gun' style='margin-top:30px;margin-bottom:30px;' class='form-select dropdown'><option disabled selected>" . $gunad . "</option>";

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
                    echo "<select multiple onchange= 'btnac()' id='saat' style='margin-top:30px;margin-bottom:30px;' class='form-select dropdown'>";

                    while ($row = $result->fetch_assoc()) {
                        echo "<option value='" . $row["saat_id"] . "'>" . $row["saatler"] . "</option>";
                    }
                    echo "</select>";
                    $conn->close();
                    ?>
                    <a style="margin-bottom: 40px;">
                        <input id="btngnd" class="btn btn-primary" type="submit" value="Güncelle">
                    </a>



                </form>
                <script src="dist/js/dersolusturr.js"></script>
            </div>


        </center>
    </div>
    </div>

    </div>
    </section>
    <!-- /.content -->
    </div>
    <!-- /.content-wrapper -->
    <footer class="main-footer">
        <strong>Copyright &copy; 2014-2021 <a href="https://adminlte.io">Dokuz Eylül Üniversitesi</a>.</strong>
        All rights reserved.
        <div class="float-right d-none d-sm-inline-block">
            <b>Version</b> 3.2.0
        </div>
    </footer>

    <!-- Control Sidebar -->
    <aside class="control-sidebar control-sidebar-dark">
        <!-- Control sidebar content goes here -->
    </aside>
    <!-- /.control-sidebar -->
    </div>
    <!-- ./wrapper -->

    <!-- jQuery -->
    <script src="plugins/jquery/jquery.min.js"></script>
    <!-- jQuery UI 1.11.4 -->
    <script src="plugins/jquery-ui/jquery-ui.min.js"></script>
    <!-- Resolve conflict in jQuery UI tooltip with Bootstrap tooltip -->
    <script>
        $.widget.bridge('uibutton', $.ui.button)
    </script>
    <!-- Bootstrap 4 -->
    <script src="plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
    <!-- ChartJS -->
    <script src="plugins/chart.js/Chart.min.js"></script>
    <!-- Sparkline -->
    <script src="plugins/sparklines/sparkline.js"></script>
    <!-- JQVMap -->
    <script src="plugins/jqvmap/jquery.vmap.min.js"></script>
    <script src="plugins/jqvmap/maps/jquery.vmap.usa.js"></script>
    <!-- jQuery Knob Chart -->
    <script src="plugins/jquery-knob/jquery.knob.min.js"></script>
    <!-- daterangepicker -->
    <script src="plugins/moment/moment.min.js"></script>
    <script src="plugins/daterangepicker/daterangepicker.js"></script>
    <!-- Tempusdominus Bootstrap 4 -->
    <script src="plugins/tempusdominus-bootstrap-4/js/tempusdominus-bootstrap-4.min.js"></script>
    <!-- Summernote -->
    <script src="plugins/summernote/summernote-bs4.min.js"></script>
    <!-- overlayScrollbars -->
    <script src="plugins/overlayScrollbars/js/jquery.overlayScrollbars.min.js"></script>
    <!-- AdminLTE App -->
    <script src="dist/js/adminlte.js"></script>
    <!-- AdminLTE for demo purposes -->
    <script src="dist/js/demo.js"></script>
    <!-- AdminLTE dashboard demo (This is only for demo purposes) -->
    <script src="dist/js/pages/dashboard.js"></script>
    <script>
        document.addEventListener('DOMContentLoaded', function () {
            // Formu seçin
            var form = document.querySelector('#myForm');

            // Form gönderildiğinde
            form.addEventListener('submit', function (event) {
                event.preventDefault(); // Formun varsayılan davranışını engellemek için
                // Seçilen değerleri alın
                var selecteddersprogid = <?php $dersprogid = $_GET["dersprog_id"];
                echo $dersprogid; ?>;
                var selecteddersid = <?php $dersid = $_GET["ders_id"];
                echo $dersid; ?>;
                var selectedkayitid = <?php $kayitid = $_GET["kayit_id"];
                echo $kayitid; ?>;
                // var selecteddersid = 
                // document.getElementById('dersid').value;
                // var selectedkayitid = document.getElementById('kayitid').value;
                var selecteduytip = document.getElementById('uygtip').value;
                var selectedderstip = document.getElementById('derstip').value;
                var selectedyerleske = document.getElementById('yerleske').value;
                var selectedyerleskeblok = document.getElementById('yerleskeblok').value;
                var selectedyerleskekat = document.getElementById('yerleskekat').value;
                var selectedyerleskederslik = document.getElementById('yerleskederslik').value;
                var selectedakademik = document.getElementById('akademik').value;
                var selectedgun = document.getElementById('gun').value;
                var selectedsaat = document.getElementById('saat').selectedOptions; // Seçilen saatleri alın

                // Seçilen saatleri ayrı ayrı göndermek için dizi oluşturun
                var selectedSaats = [];
                for (var i = 0; i < selectedsaat.length; i++) {
                    selectedSaats.push(selectedsaat[i].value);
                }

                // Kayıt verilerini oluşturun
                var formData = new FormData();
                formData.append('dersid', selecteddersid);
                formData.append('kayitid', selectedkayitid);
                formData.append('dersprogid', selecteddersprogid);
                formData.append('uygtip', selecteduytip);
                formData.append('derstip', selectedderstip);
                formData.append('yerleske', selectedyerleske);
                formData.append('yerleskeblok', selectedyerleskeblok);
                formData.append('yerleskekat', selectedyerleskekat);
                formData.append('yerleskederslik', selectedyerleskederslik);
                formData.append('akademik', selectedakademik);
                formData.append('gun', selectedgun);

                // Seçilen saatleri de dizi olarak ekleyin
                for (var i = 0; i < selectedSaats.length; i++) {
                    formData.append('saat[]', selectedSaats[i]);
                }

                // Verileri kaydetmek için Fetch API'yi kullanın
                fetch('dersupdate.php', {
                    method: 'POST',
                    body: formData
                })
                    .then(function (response) {
                        if (response.ok) {
                            return response.text();
                        } else {
                            throw new Error('Kayıt işlemi başarısız oldu.');
                        }
                    })
                    .then(function (data) {
                        var selecteddersprogid = <?php echo $dersprogid; ?>;
                        yenile(formData, selecteddersprogid);
                        console.log(data); // Kayıt işlemi başarılıysa alınan yanıtı gösterin
                        toastr.success('Güncelleme işlemi başarıyla tamamlandı.'); // Başarılı kayıt mesajını kullanıcıya göstermek için Toastr veya başka bir yöntem kullanabilirsiniz
                        setTimeout(function () {
                            window.history.back();
                        }, 1000);
                    })
                    .catch(function (error) {
                        console.error(error); // Hata durumunda hatayı konsola yazdırın
                        toastr.error('Güncelleme işlemi sırasında bir hata oluştu.'); // Hata mesajını kullanıcıya göstermek için Toastr veya başka bir yöntem kullanabilirsiniz
                    });


            });
        });
        function yenile(formData, dersprog_id) {
            formData.append('dersprog_id', dersprog_id);
            fetch('yenileprogtest.php', {
                method: 'POST',
                body: formData
            })
                .then(function (response) {
                    if (response.ok) {
                        return response.text();
                    } else {
                        throw new Error('Kayıt işlemi başarısız oldu.');
                    }
                })
                .then(function (data) {
                    console.log(data); // Kayıt işlemi başarılıysa alınan yanıtı gösterin
                    var containerMain2 = document.getElementById("container-main-2");
                    if (containerMain2) {
                        containerMain2.innerHTML = data;
                    } else {
                        console.error('ID değeri "container-main-2" olan öğe bulunamadı.');
                    }
                })
                .catch(function (error) {
                    console.error(error); // Hata durumunda hatayı konsola yazdırın
                });
        }


    </script>









</body>

</html>