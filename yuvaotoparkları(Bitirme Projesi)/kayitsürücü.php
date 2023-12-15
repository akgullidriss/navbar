<?php
include('verit.php');
ob_start();
?>
<!doctype html>
<html>

<head>
    <meta charset='utf-8'>
    <meta name='viewport' content='width=device-width, initial-scale=1'>
    <title>Yuva - Yoldaş,Ucuz Ve Akıllı</title>
    <link rel="icon" type="image/x-icon" href="images/logoo.png" style="width: 100px;height: 100px;">
    <link href='https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css' rel='stylesheet'>
    <link href='https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css' rel='stylesheet'>
    <script type='text/javascript' src='https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js'></script>
    <style>
         ::-webkit-scrollbar {
            width: 8px;
        }
        /* Track */
        
         ::-webkit-scrollbar-track {
            background: #f1f1f1;
        }
        /* Handle */
        
         ::-webkit-scrollbar-thumb {
            background: #888;
        }
        /* Handle on hover */
        
         ::-webkit-scrollbar-thumb:hover {
            background: #555;
        }
        
        html,
        body {
            height: 100%
        }
        
        body {
            background-color: #6c2bd9;
            background-image: linear-gradient(to right, wheat, #6c2bd9);
            display: grid;
            place-items: center
        }
        
        .card {
            padding: 0px 15px;
            border-radius: 20px
        }
        
        .c1 {
            background-color: #fff2f1;
            border-radius: 20px
        }
        
        a {
            margin: 0px;
            font-size: 13px;
            border-radius: 7px;
            text-decoration: none;
            color: black
        }
        
        a:hover {
            color: #e0726c;
            background-color: #fff2f1
        }
        
        .nav-link {
            padding: 1rem 1.4rem;
            margin: 0rem 0.7rem
        }
        
        .ac {
            font-weight: bold;
            color: #e0726c;
            font-size: 12px
        }
        
        input,
        button {
            width: 96%;
            background-color: #fff2f1;
            border-radius: 8px;
            padding: 8px 17px;
            font-size: 13px;
            border: 1px solid #f5f0ef;
            color: #dccece
        }
        
        input {
            text-decoration: none
        }
        
        .bt {
            background-color: #ff4133;
            border: 1px solid rgb(300, 200, 200)
        }
        
        form {
            margin-top: 70px
        }
        
        form>* {
            margin: 10px 0px
        }
        
        #forgot {
            margin: 0px -60px
        }
        
        #register {
            text-align: center
        }
        
        img {
            background-color: antiquewhite
        }
        
        .wlcm {
            font-size: 30px
        }
        
        .sp1 {
            font-size: 5px
        }
        
        .sp1>span {
            background-color: #f0c3be
        }
    </style>
</head>

<body className='snippet-body'>
    <div class="container-fluid">
        <div class="row justify-content-center">
            <div class="col-12 col-sm-10 col-md-12 col-lg-11 col-xl-10">
                <div class="card d-flex mx-auto my-5">
                    <div class="row">
                        <div class="col-md-5 col-sm-12 col-xs-12 c1 p-5">
                            <div class="row mb-5 m-3">
                                <a href="index.html"> <img src="images/Yuv.png" style="width: 70px;height: 70px;border-radius: 50%;" alt=""> </div><img src="https://img.freepik.com/premium-vector/illustration-cartoon-chereful-young-man-driving-red-car-road_253349-1319.jpg"
                                width="350px" height="200px" style="border-radius: 50px;" class="mx-auto d-flex" alt="Teacher"></a>
                            <div class="row justify-content-center">
                                <div class="w-75 mx-md-5 mx-1 mx-sm-2 mb-5 mt-4 px-sm-5 px-md-2 px-xl-1 px-2">
                                    <h1 class="wlcm">Yuvanıza Hoşgeldiniz!</h1> <span class="sp1"> <span class="px-3 bg-danger rounded-pill"></span> <span class="ml-2 px-1 rounded-circle"></span></span>
                                    </span>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-7 col-sm-12 col-xs-12 c2 px-5 pt-5">
                            <div class="row">
                                <nav class="nav font-weight-500 mb-1 mb-sm-2 mb-lg-5 px-sm-2 px-lg-5"> <a class="nav-link ac" href="kayitsürücü.php">Sürücüler</a> <a class="nav-link " href="kayitotopark.php">Otoparklar</a> </nav>
                            </div>
                            <form method="post"  name="myform"  class="px-5 pb-5" action="">
                                <div class="d-flex"> <img src="images/user.png" height="25px" width="25px" style="border-radius: 50%;" alt="" class="mr-3 mt-2">
                                    <h3 class="font-weight-bold">Sürücü Paneli!</h3>
                                </div>

                                <input type="text" name="ad" placeholder="Ad:">
                                <input type="text" name="soyad" placeholder="Soyad:">
                                <input type="tel" name="tel" placeholder="Telefon No:">
                                <input type="text" name="plaka" placeholder="Plaka No:">                              
                                <input type="submit" class="ac" id="register" value="Kayıt ol" name="kayit">


                            </form>
                            
<?php
error_reporting(0);

   

    // Hata raporlamasını etkinleştirme
    $db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

    // Eklenecek veriler
    $ad=$_POST["ad"];
    $soyad=$_POST["soyad"];
    $tel=$_POST["tel"];
    $plaka=$_POST["plaka"];
if($_POST){


 // SQL sorgusu
    $sql = "INSERT INTO üyelerr(üyead,üyesoyad,üyetel,üyeplaka) VALUES (:ad,:soyad,:tel,:plaka)";
    $stmt = $db->prepare($sql);
    $stmt->bindParam(':ad', $ad);
    $stmt->bindParam(':soyad', $soyad);
    $stmt->bindParam(':tel', $tel);
    $stmt->bindParam(':plaka', $plaka);
    $stmt->execute();
if($stmt){
    echo '<p class="alert alert-success">Kayıt Başarılı OKEY.</p>';
   

} else {
  
    echo '<p class="alert alert-danger">Kayıt Başarısız NO.</p>';
   
}
}
  
?>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <script type='text/javascript' src='https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.bundle.min.js'></script>
    <script type='text/javascript' src='#'></script>
    <script type='text/javascript' src='#'></script>
    <script type='text/javascript' src='#'></script>
    <script type='text/javascript'>
    </script>
    <script type='text/javascript'>
        var myLink = document.querySelector('a[href="#"]');
        myLink.addEventListener('click', function(e) {
            e.preventDefault();
        });
    </script>

</body>

</html>
<?php
ob_end_flush();
?>