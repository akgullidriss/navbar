
<?php

include("verit.php");
include("function.php");

ob_start();
session_start();

if(isset($_POST['user'])){
    header('location:userindex.php');
}


?>




<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title> | World Of Education
    </title>
    <link rel="shortcut icon" type="image/x-icon" href="img/university.png">
    <meta name="description" content="#">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <!-- Bootstrap core CSS -->
    <link href="dist/css/lib/bootstrap.min.css" type="text/css" rel="stylesheet">
    <!-- Swipe core CSS -->
    <link href="dist/css/swipe.min.css" type="text/css" rel="stylesheet">
    <!-- Favicon -->

</head>

<body class="start">
    <main>
        <div class="layout">
            <!-- Start of Sign In -->
            <div class="main order-md-1">
                <div class="start">
                    <div class="container">
                        <div class="col-md-12">
                            <div class="content">
                                <h1>Eğitim Dünyasına Başla!</h1>
                              
                                <form method="POST">
                                    <div class="form-group">
                                        <input type="email" id="inputEmail" class="form-control" placeholder="Email Address" name="email" required>
                                        <button class="btn icon"><i class="material-icons">mail_outline</i></button>
                                    </div>
                                    <div class="form-group">
                                        <input type="password" id="inputPassword" class="form-control" placeholder="Password" name="password" required>
                                        <button class="btn icon"><i class="material-icons">lock_outline</i></button>
                                    </div>
                                    <button type="submit" class="btn button" name="giris" >Giriş Yap</button>
                                    <div class="callout">
                                        <span>Hesabın Yokmu? <a href="sign-up.php">Kayıt Ol</a></span>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <?php

            if (isset($_POST['giris'])) {
                $eposta = htmlspecialchars($_POST["email"]);

                $password = htmlspecialchars($_POST["password"]);

                if ($eposta and $password) {

                    $sql = "select * from üyeler where eposta=? and sifre=?";
                    $user = $db->prepare($sql);
                    $user->execute([$eposta, $password]);
                    $user = $user->fetch();

                    if ($user) {


                        
                        $_SESSION['user'] = $user['id'];
                        $_SESSION['resim'] = $user['resim'];
                        $_SESSION['cinsiyet'] = $user['cinsiyet'];
                        $_SESSION['blm'] = $user['bolum'];
                        $_SESSION['dogumtarihi'] = $user['dogumtarihi'];
                        header('location:userindex.php');


                    }
                    else{
                        echo '<script type ="text/JavaScript">';  
                        echo 'alert("Böyle Bir kullanıcı yoktur!")';  
                        echo '</script>';
                    }
                }
            }



?>
            <!-- End of Sign In -->
            <!-- Start of Sidebar -->
            <div class="aside order-md-2">
                <div class="container">
                    <div class="col-md-12">
                        <div class="preference">
                            <h2>Merhaba</h2>
                            <p>Kişisel bilgilerinizi girin ve World of Education ile Eğitiminize bugün başlayın.</p>
                            <a href="sign-up.php" class="btn button">Kayıt Ol</a>
                        </div>
                    </div>
                </div>
            </div>
            <!-- End of Sidebar -->
        </div>
        <!-- Layout -->
    </main>
    <!-- Bootstrap core JavaScript
		================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script src="dist/js/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script>
        window.jQuery || document.write('<script src="dist/js/vendor/jquery-slim.min.js"><\/script>')
    </script>
    <script src="dist/js/vendor/popper.min.js"></script>
    <script src="dist/js/bootstrap.min.js"></script>
</body>

</html>