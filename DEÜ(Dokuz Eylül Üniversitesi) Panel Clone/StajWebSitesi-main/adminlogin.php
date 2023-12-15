<?php
include("config.php");
ob_start();
session_start();

?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css" />
    <script src="https://kit.fontawesome.com/f2bf49d1b5.js" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="dist/css/dersekleprog.css" type="text/css" />
    <title>Sorgulama</title>
    <link rel="stylesheet" type="text/css" href="https://cdn.jsdelivr.net/npm/toastify-js/src/toastify.min.css">
    <!-- Google Font: Source Sans Pro -->
    <link rel="stylesheet"
        href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
    <!-- Font Awesome -->
    <link rel="stylesheet" href="plugins/fontawesome-free/css/all.min.css">
    <!-- icheck bootstrap -->
    <link rel="stylesheet" href="plugins/icheck-bootstrap/icheck-bootstrap.min.css">
    <!-- Theme style -->
    <link rel="stylesheet" href="dist/css/adminlte.min.css">
    <script type="text/javascript" src="https://cdn.jsdelivr.net/npm/toastify-js"></script>

</head>

<body class="hold-transition login-page">
    <center>
        <div class="login-box">
            <Img class="logo" src="dist/img/AdminLTELogo.png">
            <div class="card card-outline card-primary">

                <div class="card-header text-center">
                    <b>Dokuz Eylül Üniversitesi</b>
                </div>
                <div class="card-body">
                    <form method="post">
                        <div class="input-group mb-3">
                            <!-- Genişletilmiş e-posta girişi -->
                            <input type="text" class="form-control" id="inputEmail3" name="mail"
                                placeholder="E-mail Giriniz:" style="margin-right: 0px; flex: 1;">
                            <!-- Kısaltılmış uzantı seçenekleri -->
                           
                            <div class="input-group-append">
                                <div class="input-group-text">
                                    <span class="fas fa-envelope"></span>
                                </div>
                            </div>
                        </div>
                        <div class="input-group mb-4">
                            <input type="password" class="form-control" id="passs" name="pass"
                                placeholder="Şifre Giriniz:">
                            <div class="input-group-append">
                                <div class="input-group-text" id="toggleButton">
                                    <span class="fas fa-lock"></span>
                                </div>
                            </div>
                        </div>
                        <input type="submit" name="giris" class="btn btn-primary" value="Giriş Yap"
                            style="margin-bottom: 20px;">
                    </form>


                </div>
                <?php
                error_reporting(0);
                // Check if the form has been submitted
                if(isset($_POST['mail']) && isset($_POST['pass']))
                    $email = $_POST['mail'];
                    $password = $_POST['pass'];
                    $tip = 'admin';
                $sql = "SELECT * FROM admin_table WHERE admin_name = '$email' AND admin_password = '$password'";
                $result = $conn->query($sql);
                $rowCount = $result->num_rows;
                if($rowCount > 0){
                     echo '<script type="text/JavaScript">';
                            echo 'Toastify({
            text: "Giriş Başarılı Yönlendiriliyorsunuz!!",
            duration: 5000,
            gravity: "top",
            position: "right",
            backgroundColor: "green",
            stopOnFocus: true
        }).showToast();';
                echo '</script>';
                            // Giriş başarılı ise oturum değişkenlerini ayarla
                            $row = $result->fetch_assoc();
                            $_SESSION['ak_id'] = $row['ak_id'];
                            $_SESSION['ak_ad'] = $row['ak_ad'];
                           
                            // Admin
                            $_SESSION['ak_id'] = $row['ak_id'];
                            $_SESSION['admin_name'] = $row['admin_name'];
                            
                            $_SESSION['tip'] = $tip;
                            $_SESSION['loggedin'] = true;
                            header("Refresh:2; url=adminpanel.php");
                }
                else {
                    echo '<script type="text/JavaScript">';
                    echo 'Toastify({
                    text: "Giriş Başarısızi..Doğru Bilgilerle Yeniden Deneyiniz...!!",
                    duration: 5000,
                    gravity: "top",
                    position: "right",
                    backgroundColor: "#f39c12",
                    stopOnFocus: true
                }).showToast();';
                    echo '</script>';
                }
                    // Assuming $conn is your database connection object (e.g., created with mysqli_connect)
                    // Make sure you have established a successful database connection before running this code.
                
               /* if($email == 'admin' && $password == '123456' ){
                 
                            echo '<script type="text/JavaScript">';
                            echo 'Toastify({
            text: "Giriş Başarılı Yönlendiriliyorsunuz!!",
            duration: 5000,
            gravity: "top",
            position: "right",
            backgroundColor: "green",
            stopOnFocus: true
        }).showToast();';
                            echo '</script>';
                         
                            $_SESSION['tip'] = $tip;
                            $_SESSION['loggedin'] = true;
                            header("Refresh:2; url=adminpanel.php");
                        }
                    else {
                        echo '<script type="text/JavaScript">';
                        echo 'Toastify({
                        text: "Giriş Başarısızi..Doğru Bilgilerle Yeniden Deneyiniz...!!",
                        duration: 5000,
                        gravity: "top",
                        position: "right",
                        backgroundColor: "#f39c12",
                        stopOnFocus: true
                    }).showToast();';
                        echo '</script>';
                    }
                */
                ?>
                
             
                <!-- jQuery -->
                <script src="../../plugins/jquery/jquery.min.js"></script>
                <!-- Bootstrap 4 -->
                <script src="../../plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
                <!-- AdminLTE App -->
                <script src="../../dist/js/adminlte.min.js"></script>
    </center>
    <script>
        const passwordInput = document.getElementById("passs");
        const toggleButton = document.getElementById("toggleButton");

        toggleButton.addEventListener("click", function () {
            if (passwordInput.type === "password") {
                passwordInput.type = "text";

            } else {
                passwordInput.type = "password";

            }
        });
    </script>
</body>

</html>
<?php
ob_end_flush();
?>