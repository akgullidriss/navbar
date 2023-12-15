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
    <link rel="stylesheet" href="dist/css/dersprog2.css" type="text/css" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.css">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.js"></script>
    <script src="dist/js/dersprogg.js"></script>

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
    <div style="" class="content-wrapper">
        <center>
            <div class="row">
                <div class="container-info">
                    <?php
                    error_reporting(0);
                    include "config.php";

                    // Güvenli bir şekilde bolum_id alınması için mysqli_real_escape_string kullanın
                    $bolum_id = mysqli_real_escape_string($conn, $_SESSION['bolum_id']);
                    $donem_id = mysqli_real_escape_string($conn, $_SESSION['donem_id']);

                    // Veritabanından bolum_ad'ı alın
                    $bolum_ad_query = "SELECT bolum_ad FROM bolum WHERE bolum_id = '$bolum_id'";
                    $bolum_ad_result = mysqli_query($conn, $bolum_ad_query);

                    // Veritabanından yil_id ve donem_ad'ı alın
                    $yil_dönem_query = "SELECT p.yil_id, p.donemstart, p.donemend, d.donem_ad FROM parametre p
                                        INNER JOIN donem d ON p.donem_id = d.donem_id
                                        WHERE p.donem_id = '$donem_id'";
                    $yil_dönem_result = mysqli_query($conn, $yil_dönem_query);

                    if ($bolum_ad_result && mysqli_num_rows($bolum_ad_result) > 0 && $yil_dönem_result && mysqli_num_rows($yil_dönem_result) > 0) {
                        $bolum_row = mysqli_fetch_assoc($bolum_ad_result);
                        $yil_dönem_row = mysqli_fetch_assoc($yil_dönem_result);
                        $yil_id = $yil_dönem_row['yil_id'];
                        $donembas = $yil_dönem_row['donemstart'];
                        $donembit = $yil_dönem_row['donemend'];
                        echo "<div class='ortalatest' style='margin:1%;'>";
                        echo "<h5 style ='text-align:left;'><b>" . $bolum_row['bolum_ad'] . "</b> &nbsp / &nbsp <b>" . $yil_dönem_row['donem_ad'] . "</b> &nbsp / &nbsp <b>Başlangıç : </b>" . $donembas . "&nbsp / &nbsp" . "<b>Bitiş : </b>" . $donembit . "</h5>";
                        echo "</div>";
                    } else {
                        echo "Bölüm veya yıl ID bulunamadı veya geçersiz bölüm/yıl ID'si.";
                    }

                    // Veritabanı bağlantısını kapatın
                    mysqli_close($conn);


                    ?>
                </div>


            </div>
            <div class="row">
                <div class="container-main">
                    <form id="dersprogolustur" method="POST" class="was-validated" style="padding: 10px;">
                        <h3 style="padding-top:30px;font-weight:bold;">DERS PROGRAMI OLUŞTUR</h3>
                        <hr style="border:1px solid blue; width: 50%;">
                        <label style="padding-right:35%;">Sınıf Seçiniz :</label><br>
                        <?php
                        include("config.php");
                        $bolum_id = $_SESSION['bolum_id'];
                        $sql = "SELECT lisans_id FROM bolum WHERE bolum_id = '$bolum_id'";
                        $result = $conn->query($sql);
                        echo "<select onchange='subegetir();egtac();' class='form-select sinif dropdown' id='sinif'><option disabled selected>Sınıf Seçiniz</option>";

                        while ($row = $result->fetch_assoc()) {
                            $lisans_id = $row["lisans_id"];

                            for ($i = 1; $i <= $lisans_id; $i++) {
                                echo "<option value='" . $i . "'>" . $i . ". Sınıf</option>";
                            }
                        }
                        echo "</select>";
                        $conn->close();
                        ?><br>
                        <label style="padding-right:15%;">Eğitim Durumunu Seçiniz :</label>
                        <select onchange="subeac();" disabled id="egtdurum" class="form-select dropdown egtdurum">
                            <option disabled selected>Eğitim Durumu Seçiniz</option>
                            <option value="1">Ö.Ö</option>
                            <option value="2">İ.Ö</option>
                            <option value="3">U.Ö</option>
                        </select><br>
                        <label style="padding-right:35%;">Sube Seçiniz :</label>
                        <select onchange="btnac();" disabled id="sube" class="form-select dropdown sube">
                            <option selected>Şube Seçiniz</option>
                        </select><br>
                        <input disabled style="margin:15px;" id="btngnd" class="btn btn-primary" type="submit"
                            value="Program Ekle">
                    </form>
                </div>
                <div id="container-main-2" class="container-main-2">
                    <?php
                    error_reporting(0);
                    include "config.php";

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
                    $conn->close();

                    ?>


                </div>
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
            // Ders Programı Oluştur formunu seçin
            var derprogolusturForm = document.querySelector('#dersprogolustur');

            // Ders Programı Oluştur Form gönderildiğinde
            derprogolusturForm.addEventListener('submit', function (event) {
                event.preventDefault(); // Formun varsayılan davranışını iptal ederek sayfanın yenilenmesini engelleyin
                // Seçilen değerleri alın
                var selectedDonem = <?php echo $_SESSION['donem_id']; ?>;
                var selectedBolum = <?php echo $_SESSION['bolum_id']; ?>;
                var selectedEgt = document.getElementById('egtdurum').value;
                var selectedSinif = document.getElementById('sinif').value;
                var selectedSube = document.getElementById('sube').value;
                var selectedBastarih = formatDate('<?php echo $donembas ?>');
                var selectedBitistarih = formatDate('<?php echo $donembit ?>');

                // Diğer kontrollerin üzerine ek olarak bitiş tarihini kontrol edin
                if (selectedBitistarih <= selectedBastarih) {
                    // Bitiş tarihi başlangıç tarihinden küçük veya eşitse hata mesajı gösterin
                    toastr.error('Bitiş tarihi başlangıç tarihinden büyük olmalıdır.');
                    return; // İşlemi durdurun
                }

                // Kayıt verilerini oluşturun
                var formData = new FormData();
                formData.append('donem', selectedDonem);
                formData.append('bolum', selectedBolum);
                formData.append('egtdurum', selectedEgt);
                formData.append('sinif', selectedSinif);
                formData.append('sube', selectedSube);
                formData.append('bastarih', selectedBastarih);
                formData.append('bitistarih', selectedBitistarih);
                console.log("Donem :" + selectedDonem + " Bolum :" + selectedBolum + "Egt durum :" + selectedEgt + " Sınıf : " + selectedSinif + " Sube :" + selectedSube + " " + selectedBastarih + " " + selectedBitistarih);
                // Verileri kaydetmek için Fetch API'sini kullanın
                fetch('progkayit.php', {
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
                        yenile(formData);
                        console.log(data); // Kayıt işlemi başarılıysa alınan yanıtı gösterin
                        toastr.success('Kayıt işlemi başarıyla tamamlandı.'); // İsteğe bağlı olarak başarılı kayıt mesajını kullanıcıya göstermek için Toastr veya başka bir yöntem kullanabilirsiniz
                    })
                    .catch(function (error) {
                        console.error(error); // Hata durumunda hatayı konsola yazdırın
                        toastr.error('Kayıt işlemi sırasında bir hata oluştu.'); // İsteğe bağlı olarak hata mesajını kullanıcıya göstermek için Toastr veya başka bir yöntem kullanabilirsiniz
                    });
            });
        });
        function yenile(formData) {
            fetch('yeniletest.php', {
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
    <script>
        function subegetir() {
            var sinif_id = document.getElementById("sinif").value;
            var bolum_id = '<?php echo $_SESSION["bolum_id"]; ?>';
            // Şube verilerini veritabanından almak için AJAX veya fetch işlemi yapabilirsiniz.
            // Örneğin:
            fetch("get-subeler.php?bolumid=" + bolum_id + "&sinif=" + sinif_id) // get-subeler.php dosyasını oluşturmanız gerekiyor
                .then(response => response.json())
                .then(data => {
                    var subeSelect = document.getElementById("sube");
                    // Önce mevcut seçenekleri temizleyelim
                    subeSelect.innerHTML = "";

                    // Yeni seçenekleri ekleyelim
                    var defaultOption = document.createElement("option");
                    defaultOption.text = "Şube Seçiniz";
                    defaultOption.disabled = true;
                    subeSelect.appendChild(defaultOption);
                    data.forEach(sube => {
                        var option = document.createElement("option");
                        option.value = sube.sube_id;
                        option.text = sube.sube_ad;
                        subeSelect.appendChild(option);
                    });
                })
                .catch(error => console.error("Hata oluştu:", error));
        }
        function formatDate(dateString) {
            var dateParts = dateString.split('-');
            var year = dateParts[0];
            var month = ('0' + dateParts[1]).slice(-2);
            var day = ('0' + dateParts[2]).slice(-2);

            return year + '-' + month + '-' + day;
        }
    </script>

</body>

</html>