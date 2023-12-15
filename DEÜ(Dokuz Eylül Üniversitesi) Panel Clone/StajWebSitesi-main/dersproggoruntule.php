<?php
include("config.php");
ob_start();
session_start();


// Kullanıcı giriş yapılmamışsa login sayfasına yönlendir
if (!isset($_SESSION['loggedin']) || $_SESSION['loggedin'] !== true) {
    header("Location: login.php");
    exit;
}


if ($_SESSION['tip'] == 'Öğrenci' || $_SESSION['tip'] == 'admin') {
    header("Location: login.php");
    exit;
}

?>


<!DOCTYPE html>
<html lang="en">

<head>
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
    <link rel="stylesheet" href="dist/css/dersprogduzenlee.css" type="text/css" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.css">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.js"></script>
    <script src="dist/js/dersproggoruntulee.js"></script>

</head>

<body class="hold-transition sidebar-mini layout-fixed">
    <div class="wrapper">



        <!-- Navbar -->
        <nav class="main-header navbar navbar-expand navbar-white navbar-light">
            <!-- Left navbar links -->
            <ul class="navbar-nav">
                <li class="nav-item">
                    <a class="nav-link" data-widget="pushmenu" href="#" role="button"><i
                            class="fa-solid fa-ellipsis-vertical"></i></a>
                </li>
                <li>
                    <a class="nav-link" href="javascript:history.back()" role="button">
                        <i class="fa-solid fa-backward"></i>
                    </a>
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
                    <a href="index.php" class="nav-link">
                        <i class="fa-solid fa-house"></i>
                        <p>
                            Ana Sayfa
                        </p>
                    </a>
                </li>
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

                echo "<h3 style='padding:30px;font-weight:bold;'>" . $yil_id . " / " . $donem_ad . " Dönemi / " . $bolum_ad . " / " . $sinif_id . ". Sınıf" . " / " . $sube_ad . " Şubesi" . "</h3>";
                ?>
            </div>
            <div class="container-main">
                <?php
                include "config.php";

                // Günleri çekmek için sorguyu hazırlayın ve çalıştırın
                $gun_sorgusu = "SELECT * FROM gun";
                $gun_sonuclari = $conn->query($gun_sorgusu);

                // Saatleri çekmek için sorguyu hazırlayın ve çalıştırın
                $saat_sorgusu = "SELECT * FROM saat";
                $saat_sonuclari = $conn->query($saat_sorgusu);

                // Ders programı bilgilerini çekmek için sorguyu hazırlayın ve çalıştırın
                $dersprog_id = $_GET['dersprog_id']; // dersprog_id'yi uygun şekilde alın
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
                                        <?php
                                        $ders_sonuclari->data_seek(0); // Ders sonuç setinin başına dönün
                                        while ($ders = $ders_sonuclari->fetch_assoc()) {
                                            if ($ders['gun_id'] == $gun['gun_id'] && $ders['saat_id'] == $saat['saat_id']) {
                                                echo "<span style ='font-weight:bold;'>" . $ders['ders_ad'] . "</span><br>";
                                                echo $ders['uyg_ad'] . " - ";
                                                echo $ders['tip_ad'] . "<br>";
                                                echo $ders['yerleske_ad'] . "<br>";
                                                echo $ders['blok_ad'] . " Blok" . " - ";
                                                echo $ders['kat_ad'] . ". Kat" . " - ";
                                                echo $ders['derslik_ad'] . " Nolu Derslik" . "<br>";
                                                echo "<span style ='font-weight:bold;'>" . $ders['ak_unvan'] . " " . $ders['ak_ad'] . "</span></br>";
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
</body>

</html>