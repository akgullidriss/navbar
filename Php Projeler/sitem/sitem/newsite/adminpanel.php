<?php      include 'ayar.php';
include 'func.php';
 

?>
<html>
<head>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>

</head>
<body>
  <!--
<ul class="nav justify-content-end">
  <li class="nav-item">
    <a class="nav-link active" aria-current="page" href="index.php">Site git</a>
  </li>
  <li class="nav-item">
    <a class="nav-link" href="pbloglist.php">Bloglar</a>
  </li>
  <li class="nav-item">
    <a class="nav-link" href="pblogekle.php">Blog Ekle</a>
  </li>
  <li class="nav-item">
    <a class="nav-link" href="pprojelist.php">Projeler</a>
  </li>
  <li class="nav-item">
    <a class="nav-link" href="pprojeekle.php">Proje Ekle</a>
  </li>

</ul> 
-->
 <!-- Sidebar Start -->
 <div class="sidebar pe-0 pb-1 mx-3 my-3" >
            <nav class="navbar bg-secondary navbar-dark " style="background-color:wheat !important;">
              
            <a href="home.php" style="text-decoration:none;color:white">  
            <h3 class="text-primary mx-3" style="color:black !important;">İdris Akgül</h3></a>
               
                <div class="d-flex align-items-center ms-3 mb-3" >
                    <div class="position-relative">
                      <a href="index.php"><img class="rounded-circle" src="img/idris.jpg" alt="" style="width: 40px; height: 40px;"></a>  
                        <div class="bg-success rounded-circle border border-2 border-white position-absolute end-0 bottom-0 p-1"></div>
                    </div>
                    <div class="ms-3 px-3"  >
                        <h6 class="mb-0 mt-1 ">İDRİS AKGÜL</h6>
                        <span>Admin</span>
                    </div>
                </div>
               
            </nav>
        </div>
        <!-- Sidebar End -->





<div class="container-fluid pt-4 px-4">
                <div class="row g-4">
                   <div class="col-sm-6 col-xl-3" ><a href="pbloglist.php" style="text-decoration:none;color:white"> 
                 
                        <div class="bg-secondary rounded d-flex align-items-center justify-content-between p-4" style="background-color:red !important;">
                        <img class="" src="img/blog.png" alt="" style="width: 70px; height: 70px;">
                            <div class="ms-3">
  <p class="mb-2">Bloglar</p>
                            <?php      include 'ayar.php';

$a= $db->query("SELECT * FROM bloglar");
 $a= $a->rowCount(); 
 
     
           
 

   echo '<h6 class="mb-0">'.$a.' Adet Blog Var.'.'</h6>';
         
         ?>
                              
                                
                            </div>
                        </div></a>
                    </div>
                



                    <div class="col-sm-6 col-xl-3"><a href="pprojelist.php" style="text-decoration:none;color:white"> 
                        <div class="bg-secondary rounded d-flex align-items-center justify-content-between p-4" style="background-color:green !important;">
                        <img class="" src="img/project.png" alt="" style="width: 70px; height: 70px;">
                            <div class="ms-3">
  <p class="mb-2">Projeler</p>
                            <?php      include 'ayar.php';

$a= $db->query("SELECT * FROM projeler");
 $a= $a->rowCount(); 
 
     
           
 

   echo '<h6 class="mb-0">'.$a.' Adet Proje Var.'.'</h6>';
         
         ?>
                              
                                
                            </div>
                        </div></a>
                    </div>


                    <div class="col-sm-6 col-xl-3"><a href="pmesajlist.php" style="text-decoration:none;color:white"> 
                        <div class="bg-secondary rounded d-flex align-items-center justify-content-between p-4" style="background-color:blue !important;">
                        <img class="" src="img/message.png" alt="" style="width: 70px; height: 70px;">
                            <div class="ms-3">
  <p class="mb-2">Mesajlar</p>
                            <?php      include 'ayar.php';

$a= $db->query("SELECT * FROM iletisim");
 $a= $a->rowCount(); 
 
     
           
 

   echo '<h6 class="mb-0">'.$a.' Adet Mesaj Var.'.'</h6>';
         
         ?>
                              
                                
                            </div>
                        </div></a>
                    </div>

                    <div class="col-sm-6 col-xl-3"><a href="pyorumlist.php" style="text-decoration:none;color:white"> 
                        <div class="bg-secondary rounded d-flex align-items-center justify-content-between p-4" style="background-color:orange !important;">
                        <img class="" src="img/comment.png" alt="" style="width: 70px; height: 70px;">
                            <div class="ms-3">
  <p class="mb-2">Yorumlar</p>
                            <?php      include 'ayar.php';

$a= $db->query("SELECT * FROM yorumlar");
 $a= $a->rowCount(); 
 
     
           
 

   echo '<h6 class="mb-0">'.$a.' Adet Yorum Var.'.'</h6>';
         
         ?>
                              
                                
                            </div>
                        </div></a>
                    </div>

                    <div class="col-sm-6 col-xl-3"><a href="pyeteneklist.php" style="text-decoration:none;color:white"> 
                        <div class="bg-secondary rounded d-flex align-items-center justify-content-between p-4" style="background-color:brown !important;">
                        <img class="" src="img/yetenek.png" alt="" style="width: 70px; height: 70px;">
                            <div class="ms-3">
  <p class="mb-2">Yetenekler</p>
                            <?php      include 'ayar.php';

$a= $db->query("SELECT * FROM yetenekler");
 $a= $a->rowCount(); 
 
     
           
 

   echo '<h6 class="mb-0">'.$a.' Adet Yetenek Var.'.'</h6>';
         
         ?>
                              
                                
                            </div>
                        </div></a>
                    </div>

                    <div class="col-sm-6 col-xl-3"><a href="palanlist.php" style="text-decoration:none;color:white"> 
                        <div class="bg-secondary rounded d-flex align-items-center justify-content-between p-4" style="background-color:purple !important;">
                        <img class="" src="img/alan.png" alt="" style="width: 70px; height: 70px;">
                            <div class="ms-3">
  <p class="mb-2">Alanlar</p>
                            <?php      include 'ayar.php';

$a= $db->query("SELECT * FROM alanyetenekler");
 $a= $a->rowCount(); 
 
     
           
 

   echo '<h6 class="mb-0">'.$a.' Adet Alan Var.'.'</h6>';
         
         ?>
                              
                                
                            </div>
                        </div></a>
                    </div>



    


                </div>
            </div>

       
            
            





</body>

</html>