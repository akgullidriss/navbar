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
                                <a href="index.html"> <img src="images/Yuv.png" style="width: 70px;height: 70px;border-radius: 50%;" alt=""> </div> <img src="https://images.template.net/85586/free-car-parking-illustration-ql7jz.jpg" width="350px" height="200px" style="border-radius: 50px;"
                                class="mx-auto d-flex" alt="Teacher"></a>
                            <div class="row justify-content-center">
                                <div class="w-75 mx-md-5 mx-1 mx-sm-2 mb-5 mt-4 px-sm-5 px-md-2 px-xl-1 px-2">
                                    <h1 class="wlcm">Yuvanıza Hoşgeldiniz!</h1> <span class="sp1"><span class="ml-2 px-1 rounded-circle" ></span> <span class="px-3 bg-danger rounded-pill" style="margin-left: 10px;"></span> </span>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-7 col-sm-12 col-xs-12 c2 px-5 pt-5">
                            <div class="row">
                                <nav class="nav font-weight-500 mb-1 mb-sm-2 mb-lg-5 px-sm-2 px-lg-5"> <a class="nav-link" href="kayıtsürücü.php">Sürücüler</a> <a class="nav-link ac" href="kayıtotopark.php">Otoparklar</a> </nav>
                            </div>
                            <form action="" method="post" name="myform" onsubmit="" class="px-5 pb-5">
                                <div class="d-flex"> <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcTzBWxKrI8EHmexjehCkqgPrs_YCQ9vEq_r5wRT145gqnaAS50af7Ido5BZa27Dkrg_g1I&usqp=CAU" height="30px" width="30px" style="border-radius: 50%;" alt="" class="mr-3 mt-1">
                                    <h3 class="font-weight-bold">Otopark Paneli!</h3>
                                </div>
                                <input type="text" name="ad" placeholder="Otopark Adı:">
                                <input type="text" name="semt" placeholder="Otopark Semti:">
                                <input type="text" name="kod" placeholder="Görevli Kodu:">
                                <input type="password" name="sifre" placeholder="Görevli Şifresi:">
                                <input type="text" name="gora" placeholder="Görevli Adı:">
                                <input type="text" name="gors" placeholder="Görevli Soyadı:">
                                <input type="tel" name="tel" placeholder="Görevli Telefonu:">
                                <input type="text" name="kat" placeholder="Otopark Kat Adedi:">
                                <input type="text" name="bol" placeholder="Otopark Kat Bölüm Adedi:">
                                <input type="submit" class="ac" id="register" value="Kayıt ol">

                            </form>
                            <?php
if ($_POST) {
    $ad=htmlspecialchars($_POST["ad"]);
    $semt=htmlspecialchars($_POST["semt"]);
    $kod=htmlspecialchars($_POST["kod"]);
    $sifre=htmlspecialchars($_POST["sifre"]);
    $gora=htmlspecialchars($_POST["gora"]);
    $gors=htmlspecialchars($_POST["gors"]);
    $tel=htmlspecialchars($_POST["tel"]);
    $kat=htmlspecialchars($_POST["kat"]);
    $bol=htmlspecialchars($_POST["bol"]);
  
    
    
   
    if (empty($ad) || empty($semt) || empty($kod) || empty($sifre) || empty($gora) || empty($gors) || empty($tel) || empty($kat) || empty($bol)) {
        echo '<p class="alert alert-warning">Boş Alan Var</p>';
    }
    else{
$veriekle = $db -> prepare("INSERT INTO otoparklar SET ad=?,semt=?,otopark_kodu=?,otopark_pas=?,görevliad=?,görevlisoyad=?,görevlitel=?,otopark_katadet=?,otopark_katbol=?");
$veriekle ->execute([
$ad,
$semt,
$kod,
$sifre,
$gora,
$gors,
$tel,
$kat,
$bol


]);
if ($veriekle) {
    echo '<p class="alert alert-success">Kayıt Başarılı OKEY.</p>';
    header("REFRESH:2;URL=kayıtotopark.php");
}
else {
    echo '<p class="alert alert-danger">Kayıt Başarısız NO.</p>';
    header("REFRESH:2;URL=kayıtotopark.php");
}
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