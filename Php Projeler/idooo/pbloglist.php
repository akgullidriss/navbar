<?php      include 'ayar.php';
include 'func.php';
 
$link=@$_GET["link"];
$data=$db ->prepare("select * from bloglar where link=?");
$data ->execute([

 $link

]);
$_data=$data->fetch(PDO::FETCH_ASSOC);
?>


<html>
<head>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>

</head>
<body>
<div class="sidebar pe-0 pb-1 mx-3 my-3" >
            <nav class="navbar bg-secondary navbar-dark " style="background-color:wheat !important;">
              
                    <h3 class="text-primary mx-3" style="color:black !important;">BLOGLAR</h3>
               
                <div class="d-flex align-items-center ms-3 mb-2">
                    <div class="position-relative">
                   <a href="pblogekle.php"> <img class="rounded-circle" src="img/plus.png" alt="" style="width: 40px; height: 40px;"></a>  
                      
                        
                    </div>
                    <div class="ms-3 px-3"  >
                        <h6 class="mb-0 mt-1 ">EKLE</h6>
                        
                    </div>
                </div>
               
            </nav>
        </div>




<div class="container-fluid pt-4 px-4">
                <div class="bg-secondary text-center rounded p-4" style="background-color:pink !important;">
                    <div class="d-flex align-items-center justify-content-between mb-4">
                        <h6 class="mb-0">BLOGLAR</h6>
                     
                    </div>
                    <div class="table-responsive">
                        <table class="table text-start align-middle table-bordered table-hover mb-0">
                            <thead>
                                <tr class="text-white">
                                    
                                    <th >İD</th>
                                    <th >BAŞLIK</th>
                                    <th >AÇIKLAMA</th>
                                    <th >TARİH</th>
                                    <th >RESİM</th>
                                    <th ></th>
                                    <th ></th>
                                </tr>
                            </thead>
                            <tbody>
                              
<?php

$dataList = $db -> prepare("SELECT * FROM bloglar ORDER BY id DESC");
$dataList -> execute();
$dataList = $dataList -> fetchALL(PDO::FETCH_ASSOC);

foreach($dataList as $row){
 echo 
                             '<tr>
                                   
                                    <td>'.$row["id"].'</td>
                                    <td>'.$row["baslik"].'</td>
                                    <td>'.kisalt($row["aciklama"],10).'</td>
                                    <td>'.$row["tarih"].'</td>
                                    <td>'.kisalt($row["resim"],10).'</td>
                                    <td style="text-align:center;"><div class="btn-group">
                                    <a href="projegüncelle.php?id='.$row["id"].'" class="btn btn-success">Güncelle</a>
                                    
                                    
                                    
                                    </div></td>
                                    <td style="text-align:center;"><div class="btn-group">
                                    <a href="projesil.php?id='.$row["id"].'" class="btn btn-danger">Sil</a>
                                    
                                    
                                    
                                    </div></td>
                                </tr>';
 }
?>
   
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>



</table>


</div>

</div>

</div>

</body>

</html>