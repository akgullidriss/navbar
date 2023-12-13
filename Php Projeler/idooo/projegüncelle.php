
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
              
                    <h3 class="text-primary mx-3" style="color:black !important;">PROJE-GÜNCELLE</h3>
               
                <div class="d-flex align-items-center ms-0 mb-2" >
                    <div class="position-relative mx-3">
                   <a href="adminpanel.php"> <img  src="img/home.png" alt="" style="width: 30px; height: 30px;"></a>  
                      
                        
                    </div>
                 
                </div>
               
            </nav>
        </div>  






        <table class="table text-start align-middle table-bordered table-hover mb-0">
                            <thead>
                                <tr class="text-white">
                                    
                                    <th >İD</th>
                                    <th >BAŞLIK</th>
                                    <th >AÇIKLAMA</th>
                                    <th >TARİH</th>
                                    <th >RESİM</th>
                                    
                                   
                                </tr>
                            </thead>
                            <tbody>
                              
<?php

$dataList = $db -> prepare("SELECT * FROM projeler ORDER BY id DESC");
$dataList -> execute();
$dataList = $dataList -> fetchALL(PDO::FETCH_ASSOC);

foreach($dataList as $row){
 echo 
                             '<tr>
                                   
                                    <td>'.$row["id"].'</td>
                                    <td>'.$row["baslik"].'</td>
                                    <td>'.kisalt($row["aciklama"],10).'</td>
                                    <td>'.$row["tarih"].'</td>
                                    <td>'.kisalt($row["resim1"],10).'</td>
                                
                                </tr>';
 }
?>
   
                            </tbody>
                        </table>














<div class="container">
<div class="row">
<div class="col-lg-12 mt-5 mb-5">
<?php
if ($_POST) {
    $baslik=htmlspecialchars($_POST["baslik"]);
    $projeicon=htmlspecialchars($_POST["projeicon"]);
    $aciklama=htmlspecialchars($_POST["aciklama"]);
    $aciklama2=htmlspecialchars($_POST["aciklama2"]);
    $aciklama3=htmlspecialchars($_POST["aciklama3"]);
    $resim1=htmlspecialchars($_POST["resim1"]);
    $resim2=htmlspecialchars($_POST["resim2"]);
    $resim3=htmlspecialchars($_POST["resim3"]);
    $video=htmlspecialchars($_POST["video"]);
    $link=permalink($baslik);
    if (empty($baslik) || empty($aciklama) || empty($aciklama2) || empty($aciklama3)   || empty($resim1) || empty($resim2) || empty($resim3) || empty($video) || empty($projeicon)) {
        echo '<p class="alert alert-warning">Boş Alan Var</p>';
    }
    else{
$veriguncelle = $db -> prepare("update projeler SET baslik=?,projeicon=?,aciklama=?,aciklama2=?,aciklama3=?,link=?,video=?,resim1=?,resim2=?,resim3=?");
$veriguncelle ->execute([
$baslik,
$projeicon,
$aciklama,
$aciklama2,
$aciklama3,
$link,
$video,
$resim1,
$resim2,
$resim3


]);
if ($veriguncelle) {
    header('Location:pprojelist.php');
}
else {
    echo 'Kayıt Başarısız NO';
    
}
    }
}

?>
<form action="" method="post"> 

    <strong>Başlık</strong><br>
<input type="text" class="from-control" name="baslik"><br>

<strong>İcon</strong><br>
<input type="text" class="from-control" name="projeicon"><br><br>

<strong>Resim1(url)</strong><br>
<input type="text" class="from-control" name="resim1"><br>

<strong>Açıklama</strong><br>
<textarea name="aciklama" id="" cols="10" rows="10" class="form-control"></textarea><br>


<strong>Resim2(url)</strong><br>
<input type="text" class="from-control" name="resim2"><br>

<strong>Açıklama-2</strong><br>
<textarea name="aciklama2" id="" cols="10" rows="10" class="form-control"></textarea><br>

<strong>Resim3(url)</strong><br>
<input type="text" class="from-control" name="resim3"><br>

<strong>Açıklama-3</strong><br>
<textarea name="aciklama3" id="" cols="10" rows="10" class="form-control"></textarea><br>

<strong>video(url)</strong><br>
<input type="text" class="from-control" name="video"><br><br>

<input type="submit" value="YAYINLA" class="btn btn-dark">


</form>


</div>

</div>

</div>


</body>

</html>