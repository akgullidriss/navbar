<?php
include 'ayar.php';
include 'func.php';
?>

<html>
<head>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>

</head>
<body>
<div class="sidebar pe-0 pb-1 mx-3 my-3" >
            <nav class="navbar bg-secondary navbar-dark " style="background-color:wheat !important;">
              
                    <h3 class="text-primary mx-3" style="color:black !important;">YETENEK-EKLE</h3>
               
                <div class="d-flex align-items-center ms-0 mb-2" >
                    <div class="position-relative mx-3">
                   <a href="adminpanel.php"> <img  src="img/home.png" alt="" style="width: 30px; height: 30px;"></a>  
                      
                        
                    </div>
                 
                </div>
               
            </nav>
        </div>  

<div class="container">
<div class="row">
<div class="col-lg-12 mt-5 mb-5">
<?php
if ($_POST) {
    $ad=htmlspecialchars($_POST["ad"]);
    $oran=htmlspecialchars($_POST["oran"]);
   
    if (empty($ad) || empty($oran)) {
        echo '<p class="alert alert-warning">Boş Alan Var</p>';
    }
    else{
$veriekle = $db -> prepare("INSERT INTO yetenekler SET ad=?,oran=?");
$veriekle ->execute([
$ad,
$oran



]);
if ($veriekle) {
    echo '<p class="alert alert-success">Kayıt Başarılı OKEY.</p>';
    header("REFRESH:2;URL=pyetenekekle.php");
}
else {
    echo '<p class="alert alert-danger">Kayıt Başarısız NO.</p>';
    header("REFRESH:2;URL=pyetenekekle.php");
}
    }
}

?>
<form action="" method="post"> 

    <strong>AD:</strong><br>
<input type="text" class="from-control" name="ad"><br>

<strong>ORAN:</strong><br>
<input type="text" class="from-control" name="oran"><br><br>



<input type="submit" value="YAYINLA" class="btn btn-dark">


</form>


</div>

</div>

</div>


</body>

</html>