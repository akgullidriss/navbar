
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
              
                    <h3 class="text-primary mx-3" style="color:black !important;">YETENEK-GÜNCELLE</h3>
               
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
                                    
                              
                                    <th style="text-align:center;">AD</th>
                                    <th style="text-align:center;">ORAN</th>
                                    
                                   
                                </tr>
                            </thead>
                            <tbody>
                              
<?php

$dataList = $db -> prepare("SELECT * FROM alanyetenekler ORDER BY oran asc");
$dataList -> execute();
$dataList = $dataList -> fetchALL(PDO::FETCH_ASSOC);

foreach($dataList as $row){
 echo 
                             '<tr>
                                   
                                   
                                    <td style="text-align:center;">'.$row["ad"].'</td>
                                    <td style="text-align:center;">'.$row["oran"].'</td>
                                    
                                   
                                    
                                </tr>';
 }
?>
   
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>



</table>














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
$veriekle = $db -> prepare("update alanyetenekler SET ad=?,oran=?");
$veriekle ->execute([
$ad,
$oran



]);
if ($veriekle) {
    header('Location:palanlist.php');
}
else {
    echo '<p class="alert alert-danger">Kayıt Başarısız NO.</p>';
    
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