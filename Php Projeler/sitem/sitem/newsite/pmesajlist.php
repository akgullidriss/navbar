<?php      include 'ayar.php';
include 'func.php';
 
$link=@$_GET["link"];
$data=$db ->prepare("select * from projeler where link=?");
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
            <nav class="navbar bg-secondary navbar-dark " >
              
                    <h3 class="text-primary mx-3" style="color:white !important;">İdris Akgül</h3>
               
                <div class="d-flex align-items-center ms-3 mb-3">
                    <div class="position-relative">
                        <img class="rounded-circle" src="img/idris.jpg" alt="" style="width: 40px; height: 40px;">
                        <div class="bg-success rounded-circle border border-2 border-white position-absolute end-0 bottom-0 p-1"></div>
                    </div>
                    <div class="ms-3 px-3"  >
                        <h6 class="mb-0 mt-1 ">İDRİS AKGÜL</h6>
                        <span>Admin</span>
                    </div>
                </div>
               
            </nav>
        </div>


        <div class="container-fluid pt-4 px-4">
                <div class="row g-4">
                    <div class="col-sm-12 col-md-6 col-xl-4">
                        <div class="h-100 bg-secondary rounded p-4">
                            <div class="d-flex align-items-center justify-content-between mb-2">
                                <h6 class="mb-0">Messages</h6>
                                
                            </div>
                
                            <?php

$dataList = $db -> prepare("SELECT * FROM iletisim ORDER BY tarih DESC");
$dataList -> execute();
$dataList = $dataList -> fetchALL(PDO::FETCH_ASSOC);

foreach($dataList as $row){

   echo '<div class="d-flex align-items-center pt-3">
          <img class="rounded-circle flex-shrink-0" src="img/user.png" alt="" style="width: 40px; height: 40px;">
                                <div class="w-100 ms-3">
                                    <div class="d-flex w-100 justify-content-between">
                                      <h6 class="mb-0" style="color:wheat;">'.$row["email"].'</h6>
                                        <small>'.$row["tarih"].'</small>
                                    </div>
                                    <span style="color:white;text-size:5px !important">'.$row["message"].'</span>
                                </div>
                            </div>';
}
?>
                        </div>
                    </div>


</body>

</html>