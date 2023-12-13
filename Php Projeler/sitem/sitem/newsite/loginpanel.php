<?php
include 'ayar.php';
include 'func.php'
?>

<html>
<head>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>

</head>
<body>
 
<div class="container-fluid">
            <div class="row h-100 align-items-center justify-content-center" style="min-height: 100vh;">
                <div class="col-12 col-sm-8 col-md-6 col-lg-5 col-xl-4">
                    <div class="bg-secondary rounded p-4 p-sm-5 my-4 mx-3">
                        <div class="d-flex align-items-center justify-content-between mb-3">
                            <a href="index.php" class="">
                                <h3 class="text-primary" style="color:white !important"><i class="fa fa-user-edit me-2"></i>İdris-Akgül</h3>
                            </a>
                            <h3>Sign In</h3>
                        </div>


                        <form action="" method="post"> 
    <strong>Username</strong><br>
<input type="text" class="from-control" name="user"><br><br>
<strong>Şifre</strong><br>
<input type="text" class="from-control" name="sifre"><br><br><br>
<input type="submit" value="Giriş Yap" class="btn btn-dark">


</form>
<?php
 if ($_POST) {
 $user = $_POST["user"];
 $sifre = $_POST["sifre"];


      if ($user=='idrisakgul' && $sifre=='477235')
      {
        echo '<p class="alert alert-success" style="color="green">Giriş Başarılı! Yönlendiriliyorsunuz....</p>';
        header("REFRESH:2;URL=adminpanel.php");
    }
      
      else
      {
        echo '<p class="alert alert-danger" style="color="red">Yanlış Bilgiler Lütfen Tekrar Deneyiniz.</p>';
        header("REFRESH:2;URL=loginpanel.php");
      }
  }

?>
      
                      
         
                        <p class="text-center mb-0" style="color:white">BU GİRİŞ SADECE SİTE SAHİPLERİNE AİTTİR.</p>
                    </div>
                </div>
            </div>
        </div>
    




</body>

</html>