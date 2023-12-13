<?php
include("verit.php");
include("function.php");
ob_start();
session_start();

if(isset($_POST['user'])){
    header('location:userindex.php');
}
?>


<!DOCTYPE html>
<html lang="en">

<head>

<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.3.0/css/all.min.css">

    <style>
        div.radio-with-Icon {
  display: block;
  margin: 0px;
  padding-bottom: 20px;
}
div.radio-with-Icon p.radioOption-Item {
  display: inline-block;
  width: 100px;
  height: 50px;
  box-sizing: border-box;
  border: none;
  margin: 0px ;
}
div.radio-with-Icon p.radioOption-Item label {
  display: block;
  height: 100%;
  width: 100%;
  padding: 10px;
  border-radius: 10px;
  border: 1px solid #de1831;
  color: #de1831;
  cursor: pointer;
  opacity: .8;
  transition: none;
  font-size: 20px;
  
  text-align: center;
  margin: 0 !important;
}
div.radio-with-Icon p.radioOption-Item label:hover, div.radio-with-Icon p.radioOption-Item label:focus, div.radio-with-Icon p.radioOption-Item label:active {
  opacity: .5;
  background-color: #de1831;
  color: #fff;
  margin: 0 !important;
}
div.radio-with-Icon p.radioOption-Item label::after, div.radio-with-Icon p.radioOption-Item label:after, div.radio-with-Icon p.radioOption-Item label::before, div.radio-with-Icon p.radioOption-Item label:before {
  opacity: 0 !important;
  width: 0 !important;
  height: 0 !important;
  margin: 0 !important;
}
div.radio-with-Icon p.radioOption-Item label i.fa {
  display: block;
  font-size: 50px;
}
div.radio-with-Icon p.radioOption-Item input[type="radio"] {
  opacity: 0 !important;
  width: 0 !important;
  height: 0 !important;
}
div.radio-with-Icon p.radioOption-Item input[type="radio"]:active ~ label {
  opacity: 1;
}
div.radio-with-Icon p.radioOption-Item input[type="radio"]:checked ~ label {
  opacity: 1;
  border: none;
  background-color: #de1831;
  color: #fff;
}
div.radio-with-Icon p.radioOption-Item input[type="radio"]:hover, div.radio-with-Icon p.radioOption-Item input[type="radio"]:focus, div.radio-with-Icon p.radioOption-Item input[type="radio"]:active {
  margin: 0 !important;
}
div.radio-with-Icon p.radioOption-Item input[type="radio"] + label:before, div.radio-with-Icon p.radioOption-Item input[type="radio"] + label:after {
  margin: 0 !important;
}
    </style>
    <meta charset="utf-8">
    <title> | World Of Education
    </title>
    <link rel="shortcut icon" type="image/x-icon" href="img/university.png">
    <meta name="description" content="#">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <!-- Bootstrap core CSS -->
    <link href="dist/css/lib/bootstrap.min.css" type="text/css" rel="stylesheet">
    <!-- Swipe core CSS -->
    <link href="dist/css/swipe.min.css" type="text/css" rel="stylesheet">
    <!-- Favicon -->

</head>

<body class="start">
    <main>
        <div class="layout">
            <!-- Start of Sign Up -->
            <div class="main order-md-2">
                <div class="start">
                    <div class="container">
                        <div class="col-md-12">
                            <div class="content">
                                <h1>Eğitim Dünyasına Kayıt ol!</h1>
                     
                            
                                <form class="signup" method="POST">
                               
                                    <div class="form-parent">
                                  
                                        <div class="form-group">
                                            <input type="text" id="inputName" class="form-control" name="adsoyad" placeholder="Ad-Soyad" required>
                                            <button class="btn icon"><i class="material-icons">person_outline</i></button>
                                        </div>
                                        <div class="form-group">
                                            <input type="email" id="inputEmail" class="form-control" placeholder="E-mail" name="email" required>
                                            <button class="btn icon"><i class="material-icons">mail_outline</i></button>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <input type="password" id="inputPassword" class="form-control" placeholder="Password" name="password" required>
                                        <button class="btn icon"><i class="material-icons">lock_outline</i></button>
                                    </div>
                                    <div class="form-group">
                                    <select name="bölüm" id="konu" class="form-control" >
                                        <option value="">Bölüm Seçin</option>
                                        <option value="19001">ACİL YARDIM VE AFET YÖNETİMİ</option>

<option value="19502">ADLİ BİLİMLER</option>
<option value="19002">ADLİ BİLİŞİM MÜHENDİSLİĞİ</option>
<option value="19003">AĞAÇ İŞLERİ ENDÜSTRİ MÜHENDİSLİĞİ</option>
<option value="10001">AİLE VE TÜKETİCİ BİLİMLERİ</option>
<option value="18002">AKTÜERYA BİLİMLERİ</option>
<option value="10003">ALMAN DİLİ VE EDEBİYATI</option>
<option value="97100">ALMANCA MÜTERCİM VE TERCÜMANLIK</option>
<option value="10004">ALMANCA ÖĞRETMENLİĞİ</option>
<option value="10005">AMERİKAN KÜLTÜRÜ VE EDEBİYATI</option>
<option value="19515">ANTRENÖRLÜK EĞİTİMİ</option>
<option value="10006">ANTROPOLOJİ</option>
<option value="10007">ARAP DİLİ VE EDEBİYATI</option>
<option value="97105">ARAPÇA MÜTERCİM VE TERCÜMANLIK</option>
<option value="10008">ARAPÇA ÖĞRETMENLİĞİ</option>
<option value="10010">ARKEOLOJİ</option>
<option value="10009">ARKEOLOJİ VE SANAT TARİHİ</option>
<option value="19006">ARNAVUT DİLİ VE EDEBİYATI</option>
<option value="10011">ASTRONOMİ VE UZAY BİLİMLERİ</option>
<option value="55554">AYAKKABI TASARIMI VE ÜRETİMİ</option>
<option value="10013">AZERBAYCAN TÜRKÇESİ VE EDEBİYATI</option>
<option value="10801">BAHÇE BİTKİLERİ</option>
<option value="19072">BALIKÇILIK TEKNOLOJİSİ MÜHENDİSLİĞİ</option>
<option value="20007">BANKACILIK</option>
<option value="10015">BANKACILIK VE FİNANS</option>
<option value="18013">BANKACILIK VE SİGORTACILIK</option>
<option value="29002">BASIM TEKNOLOJİLERİ</option>
<option value="10019">BASIN VE YAYIN</option>
<option value="60002">BATI DİLLERİ</option>
<option value="29003">BEDEN EĞİTİMİ VE SPOR ÖĞRETMENLİĞİ</option>
<option value="10020">BESLENME VE DİYETETİK</option>
<option value="55554">BİLGİ GÜVENLİĞİ TEKNOLOJİSİ</option>
<option value="10021">BİLGİ VE BELGE YÖNETİMİ</option>
<option value="10023">BİLGİSAYAR BİLİMLERİ</option>
<option value="10024">BİLGİSAYAR MÜHENDİSLİĞİ</option>
<option value="55554">BİLGİSAYAR TEKNOLOJİSİ VE BİLİŞİM SİSTEMLERİ</option>
<option value="20101">BİLGİSAYAR VE ÖĞRETİM TEKNOLOJİLERİ ÖĞRETMENLİĞİ</option>
<option value="11400">BİLİM TARİHİ</option>
<option value="10027">BİLİŞİM SİSTEMLERİ MÜHENDİSLİĞİ</option>
<option value="10028">BİLİŞİM SİSTEMLERİ VE TEKNOLOJİLERİ</option>
<option value="10802">BİTKİ KORUMA</option>
<option value="11409">BİTKİSEL ÜRETİM VE TEKNOLOJİLERİ</option>
<option value="10029">BİYOKİMYA</option>
<option value="10031">BİYOLOJİ</option>
<option value="10030">BİYOLOJİ ÖĞRETMENLİĞİ</option>
<option value="10032">BİYOMEDİKAL MÜHENDİSLİĞİ</option>
<option value="10033">BİYOMÜHENDİSLİK</option>
<option value="10818">BİYOSİSTEM MÜHENDİSLİĞİ</option>
<option value="11408">BİYOTEKNOLOJİ</option>
<option value="19011">BOŞNAK DİLİ VE EDEBİYATI</option>
<option value="10034">BULGAR DİLİ VE EDEBİYATI</option>
<option value="97147">BULGARCA MÜTERCİM VE TERCÜMANLIK</option>
<option value="10237">CEVHER HAZIRLAMA MÜHENDİSLİĞİ</option>
<option value="10036">COĞRAFYA</option>
<option value="10035">COĞRAFYA ÖĞRETMENLİĞİ</option>
<option value="10037">ÇAĞDAŞ TÜRK LEHÇELERİ VE EDEBİYATLARI</option>
<option value="10038">ÇAĞDAŞ YUNAN DİLİ VE EDEBİYATI</option>
<option value="10039">ÇALIŞMA EKONOMİSİ VE ENDÜSTRİ İLİŞKİLERİ</option>
<option value="19013">ÇERKEZ DİLİ VE KÜLTÜRÜ</option>
<option value="11001">ÇEVİRİBİLİMİ</option>
<option value="10042">ÇEVRE MÜHENDİSLİĞİ</option>
<option value="10043">ÇİN DİLİ VE EDEBİYATI</option>
<option value="97148">ÇİNCE MÜTERCİM VE TERCÜMANLIK</option>
<option value="19073">ÇİZGİ FİLM VE ANİMASYON</option>
<option value="10701">ÇOCUK GELİŞİMİ</option>
<option value="10046">DENİZ ULAŞTIRMA İŞLETME MÜHENDİSLİĞİ</option>
<option value="11106">DENİZCİLİK İŞLETMELERİ YÖNETİMİ</option>
<option value="10047">DERİ MÜHENDİSLİĞİ</option>
<option value="18004">DİJİTAL OYUN TASARIMI</option>
<option value="19015">DİL VE KONUŞMA TERAPİSİ</option>
<option value="19016">DİLBİLİMİ</option>
<option value="10049">DİŞ HEKİMLİĞİ</option>
<option value="60006">DOĞU DİLLERİ</option>
<option value="10247">EBELİK</option>
<option value="10050">ECZACILIK</option>
<option value="99887">EGZERSİZ VE SPOR BİLİMLERİ</option>
<option value="10051">EKONOMETRİ</option>
<option value="10053">EKONOMİ</option>
<option value="10052">EKONOMİ VE FİNANS</option>
<option value="70500">EL SANATLARI</option>
<option value="10055">ELEKTRİK MÜHENDİSLİĞİ</option>
<option value="10056">ELEKTRİK-ELEKTRONİK MÜHENDİSLİĞİ</option>
<option value="10057">ELEKTRONİK MÜHENDİSLİĞİ</option>
<option value="97158">ELEKTRONİK TİCARET VE YÖNETİMİ</option>
<option value="10058">ELEKTRONİK VE HABERLEŞME MÜHENDİSLİĞİ</option>
<option value="10014">EMLAK VE EMLAK YÖNETİMİ</option>
<option value="10059">ENDÜSTRİ MÜHENDİSLİĞİ</option>
<option value="10062">ENDÜSTRİYEL TASARIM</option>
<option value="19018">ENDÜSTRİYEL TASARIM MÜHENDİSLİĞİ</option>
<option value="10160">ENERJİ BİLİMİ VE TEKNOLOJİLERİ</option>
<option value="10063">ENERJİ SİSTEMLERİ MÜHENDİSLİĞİ</option>
<option value="19019">ENERJİ YÖNETİMİ</option>
<option value="11301">ERGOTERAPİ</option>
<option value="70700">ERMENİ DİLİ VE KÜLTÜRÜ</option>
<option value="10065">ESKİ YUNAN DİLİ VE EDEBİYATI</option>
<option value="10066">FARS DİLİ VE EDEBİYATI</option>
<option value="97152">FARSÇA MÜTERCİM VE TERCÜMANLIK</option>
<option value="10068">FELSEFE</option>
<option value="10067">FELSEFE GRUBU ÖĞRETMENLİĞİ</option>
<option value="10069">FEN BİLGİSİ ÖĞRETMENLİĞİ</option>
<option value="19020">FİLM TASARIMI VE YAZARLIĞI</option>
<option value="11401">FİLM TASARIMI VE YÖNETİMİ</option>
<option value="19021">FİLM TASARIMI VE YÖNETMENLİĞİ</option>
<option value="60302">FİNANS VE BANKACILIK</option>
<option value="10074">FİZİK</option>
<option value="10071">FİZİK MÜHENDİSLİĞİ</option>
<option value="10072">FİZİK ÖĞRETMENLİĞİ</option>
<option value="11016">FİZYOTERAPİ VE REHABİLİTASYON</option>
<option value="19550">FOTOĞRAF</option>
<option value="19023">FOTOĞRAF VE VİDEO</option>
<option value="554500">FOTONİK</option>
<option value="10075">FRANSIZ DİLİ VE EDEBİYATI</option>
<option value="97157">FRANSIZCA MÜTERCİM VE TERCÜMANLIK</option>
<option value="10076">FRANSIZCA ÖĞRETMENLİĞİ</option>
<option value="19024">GASTRONOMİ VE MUTFAK SANATLARI</option>
<option value="19075">GAYRİMENKUL GELİŞTİRME VE YÖNETİMİ</option>
<option value="10077">GAZETECİLİK</option>
<option value="10079">GEMİ İNŞAATI VE GEMİ MAKİNELERİ MÜHENDİSLİĞİ</option>
<option value="10080">GEMİ MAKİNELERİ İŞLETME MÜHENDİSLİĞİ</option>
<option value="11017">GEMİ VE DENİZ TEKNOLOJİSİ MÜHENDİSLİĞİ</option>
<option value="11112">GEMİ VE YAT TASARIMI</option>
<option value="10081">GENETİK VE BİYOMÜHENDİSLİK</option>
<option value="19086">GENETİK VE YAŞAM BİLİMLERİ PROGRAMLARI</option>
<option value="10816">GEOMATİK MÜHENDİSLİĞİ</option>
<option value="10705">GERONTOLOJİ</option>
<option value="10082">GIDA MÜHENDİSLİĞİ</option>
<option value="97124">GIDA TEKNOLOJİSİ</option>
<option value="11404">GİRİŞİMCİLİK</option>
<option value="10819">GÖRSEL İLETİŞİM TASARIMI</option>
<option value="19570">GÖRSEL SANATLAR</option>
<option value="60303">GÖRSEL SANATLAR VE İLETİŞİM TASARIMI</option>
<option value="97160">GRAFİK</option>
<option value="60304">GRAFİK TASARIMI</option>
<option value="20820">GÜMRÜK İŞLETME</option>
<option value="10083">GÜRCÜ DİLİ VE EDEBİYATI</option>
<option value="10085">HALKBİLİMİ</option>
<option value="10086">HALKLA İLİŞKİLER VE REKLAMCILIK</option>
<option value="10087">HALKLA İLİŞKİLER VE TANITIM</option>
<option value="10808">HARİTA MÜHENDİSLİĞİ</option>
<option value="19055">HAVACILIK ELEKTRİK VE ELEKTRONİĞİ</option>
<option value="10089">HAVACILIK VE UZAY MÜHENDİSLİĞİ</option>
<option value="19076">HAVACILIK YÖNETİMİ</option>
<option value="70800">HAYVANSAL ÜRETİM VE TEKNOLOJİLERİ</option>
<option value="10248">HEMŞİRELİK</option>
<option value="10091">HİDROJEOLOJİ MÜHENDİSLİĞİ</option>
<option value="10092">HİNDOLOJİ</option>
<option value="10093">HİTİTOLOJİ</option>
<option value="10094">HUKUK</option>
<option value="10095">HUNGAROLOJİ</option>
<option value="11121">İBRANİ DİLİ VE KÜLTÜRÜ</option>
<option value="10097">İÇ MİMARLIK</option>
<option value="10096">İÇ MİMARLIK VE ÇEVRE TASARIMI</option>
<option value="19028">İKTİSADİ VE İDARİ BİLİMLER PROGRAMLARI</option>
<option value="19078">İKTİSADİ VE İDARİ PROGRAMLAR</option>
<option value="10098">İKTİSAT</option>
<option value="20041">İLAHİYAT</option>
<option value="10102">İLETİŞİM</option>
<option value="10099">İLETİŞİM BİLİMLERİ</option>
<option value="10100">İLETİŞİM SANATLARI</option>
<option value="11416">İLETİŞİM TASARIMI VE YÖNETİMİ</option>
<option value="11101">İLETİŞİM VE TASARIMI</option>
<option value="10103">İLKÖĞRETİM MATEMATİK ÖĞRETMENLİĞİ</option>
<option value="10104">İMALAT MÜHENDİSLİĞİ</option>
<option value="10105">İNGİLİZ DİLBİLİMİ</option>
<option value="10106">İNGİLİZ DİLİ VE EDEBİYATI</option>
<option value="60305">İNGİLİZ VE RUS DİLLERİ VE EDEBİYATLARI</option>
<option value="97174">İNGİLİZCE MÜTERCİM VE TERCÜMANLIK</option>
<option value="10108">İNGİLİZCE ÖĞRETMENLİĞİ</option>
<option value="97199">İNGİLİZCE, FRANSIZCA MÜTERCİM VE TERCÜMANLIK</option>
<option value="10256">İNSAN KAYNAKLARI YÖNETİMİ</option>
<option value="10110">İNŞAAT MÜHENDİSLİĞİ</option>
<option value="60316">İSLAM BİLİMLERİ</option>
<option value="97171">İSLAM İKTİSADI VE FİNANS</option>
<option value="21300">İSLAMİ İLİMLER</option>
<option value="10111">İSPANYOL DİLİ VE EDEBİYATI</option>
<option value="10113">İSTATİSTİK</option>
<option value="10112">İSTATİSTİK VE BİLGİSAYAR BİLİMLERİ</option>
<option value="19029">İŞ SAĞLIĞI VE GÜVENLİĞİ</option>
<option value="10117">İŞLETME</option>
<option value="10116">İŞLETME MÜHENDİSLİĞİ</option>
<option value="10119">İTALYAN DİLİ VE EDEBİYATI</option>
<option value="10120">JAPON DİLİ VE EDEBİYATI</option>
<option value="10122">JAPONCA MÜTERCİM VE TERCÜMANLIK</option>
<option value="10121">JAPONCA ÖĞRETMENLİĞİ</option>
<option value="10123">JEOFİZİK MÜHENDİSLİĞİ</option>
<option value="10124">JEOLOJİ MÜHENDİSLİĞİ</option>
<option value="10125">KAMU YÖNETİMİ</option>
<option value="18003">KANATLI HAYVAN YETİŞTİRİCİLİĞİ</option>
<option value="11010">KARŞILAŞTIRMALI EDEBİYAT</option>
<option value="60307">KAZAK DİLİ VE EDEBİYATI</option>
<option value="18008">KENTSEL TASARIM VE PEYZAJ MİMARLIĞI</option>
<option value="10128">KİMYA</option>
<option value="10127">KİMYA MÜHENDİSLİĞİ</option>
<option value="20420">KİMYA ÖĞRETMENLİĞİ</option>
<option value="10129">KİMYA-BİYOLOJİ MÜHENDİSLİĞİ</option>
<option value="10810">KLASİK ARKEOLOJİ</option>
<option value="11412">KONTROL VE OTOMASYON MÜHENDİSLİĞİ</option>
<option value="10132">KORE DİLİ VE EDEBİYATI</option>
<option value="19065">KURGU, SES VE GÖRÜNTÜ YÖNETİMİ</option>
<option value="71100">KUYUMCULUK VE MÜCEVHER TASARIMI</option>
<option value="10703">KÜLTÜR VARLIKLARINI KORUMA VE ONARIM</option>
<option value="19079">KÜLTÜR VE İLETİŞİM BİLİMLERİ</option>
<option value="19032">KÜRESEL SİYASET VE ULUSLARARASI İLİŞKİLER</option>
<option value="11502">KÜRT DİLİ VE EDEBİYATI</option>
<option value="10137">LATİN DİLİ VE EDEBİYATI</option>
<option value="10138">LEH DİLİ VE EDEBİYATI</option>
<option value="10139">LOJİSTİK YÖNETİMİ</option>
<option value="10140">MADEN MÜHENDİSLİĞİ</option>
<option value="10141">MAKİNE MÜHENDİSLİĞİ</option>
<option value="10143">MALİYE</option>
<option value="10144">MALZEME BİLİMİ VE MÜHENDİSLİĞİ</option>
<option value="19034">MALZEME BİLİMİ VE NANOTEKNOLOJİ MÜHENDİSLİĞİ</option>
<option value="19080">MALZEME BİLİMİ VE TEKNOLOJİLERİ</option>
<option value="10148">MATEMATİK</option>
<option value="10146">MATEMATİK MÜHENDİSLİĞİ</option>
<option value="10147">MATEMATİK ÖĞRETMENLİĞİ</option>
<option value="10409">MATEMATİK VE BİLGİSAYAR BİLİMLERİ</option>
<option value="11103">MEDYA VE GÖRSEL SANATLAR</option>
<option value="10151">MEDYA VE İLETİŞİM</option>
<option value="10152">MEKATRONİK MÜHENDİSLİĞİ</option>
<option value="10153">METALURJİ VE MALZEME MÜHENDİSLİĞİ</option>
<option value="10154">METEOROLOJİ MÜHENDİSLİĞİ</option>
<option value="10155">MİMARLIK</option>
<option value="19036">MODA TASARIMI</option>
<option value="10156">MOLEKÜLER BİYOLOJİ VE GENETİK</option>
<option value="19580">MOLEKÜLER BİYOTEKNOLOJİ</option>
<option value="10410">MUHASEBE VE FİNANS YÖNETİMİ</option>
<option value="10904">MÜHENDİSLİK PROGRAMLARI</option>
<option value="10159">MÜHENDİSLİK VE DOĞA BİLİMLERİ PROGRAMLARI</option>
<option value="11013">MÜTERCİM-TERCÜMANLIK</option>
<option value="19037">MÜZECİLİK</option>
<option value="19081">NANOBİLİM VE NANOTEKNOLOJİ</option>
<option value="19038">NANOTEKNOLOJİ MÜHENDİSLİĞİ</option>
<option value="10161">NÜKLEER ENERJİ MÜHENDİSLİĞİ</option>
<option value="11402">ODYOLOJİ</option>
<option value="20062">OKUL ÖNCESİ ÖĞRETMENLİĞİ</option>
<option value="19039">OPTİK VE AKUSTİK MÜHENDİSLİĞİ</option>
<option value="29012">ORGANİK TARIM İŞLETMECİLİĞİ</option>
<option value="10162">ORMAN ENDÜSTRİSİ MÜHENDİSLİĞİ</option>
<option value="10163">ORMAN MÜHENDİSLİĞİ</option>
<option value="19040">ORTEZ VE PROTEZ</option>
<option value="20810">OTEL YÖNETİCİLİĞİ</option>
<option value="10164">OTOMOTİV MÜHENDİSLİĞİ</option>
<option value="20903">ÖZEL EĞİTİM ÖĞRETMENLİĞİ</option>
<option value="10165">PAZARLAMA</option>
<option value="29013">PERFÜZYON</option>
<option value="10166">PETROL VE DOĞALGAZ MÜHENDİSLİĞİ</option>
<option value="10168">PEYZAJ MİMARLIĞI</option>
<option value="11403">PİLOTAJ</option>
<option value="10817">POLİMER MALZEME MÜHENDİSLİĞİ</option>
<option value="55411">POLİTİKA VE EKONOMİ</option>
<option value="10812">PROTOHİSTORYA VE ÖN ASYA ARKEOLOJİSİ</option>
<option value="10169">PSİKOLOJİ</option>
<option value="60308">PSİKOLOJİK DANIŞMANLIK VE REHBERLİK</option>
<option value="60309">PSİKOLOJİK DANIŞMANLIK VE REHBERLİK ÖĞRETMENLİĞİ</option>
<option value="10171">RADYO, TELEVİZYON VE SİNEMA</option>
<option value="11406">RAYLI SİSTEMLER MÜHENDİSLİĞİ</option>
<option value="10172">REHBERLİK VE PSİKOLOJİK DANIŞMANLIK</option>
<option value="10173">REKLAM TASARIMI VE İLETİŞİMİ</option>
<option value="10175">REKLAMCILIK</option>
<option value="19043">REKREASYON</option>
<option value="19044">REKREASYON YÖNETİMİ</option>
<option value="10176">RUS DİLİ VE EDEBİYATI</option>
<option value="60311">RUS DİLİ VE EDEBİYATI ÖĞRETMENLİĞİ</option>
<option value="60313">RUS VE İNGİLİZ DİLLERİ VE EDEBİYATLARI</option>
<option value="97126">RUSÇA MÜTERCİM VE TERCÜMANLIK</option>
<option value="10238">SAĞLIK YÖNETİMİ</option>
<option value="10179">SANAT TARİHİ</option>
<option value="19046">SANAT VE KÜLTÜR YÖNETİMİ</option>
<option value="10180">SANAT VE SOSYAL BİLİMLER PROGRAMLARI</option>
<option value="97143">SERMAYE PİYASASI</option>
<option value="19047">SEYAHAT İŞLETMECİLİĞİ</option>
<option value="11413">SEYAHAT İŞLETMECİLİĞİ VE TURİZM REHBERLİĞİ</option>
<option value="10183">SINIF ÖĞRETMENLİĞİ</option>
<option value="97189">SİGORTACILIK</option>
<option value="19540">SİGORTACILIK VE AKTÜERYA BİLİMLERİ</option>
<option value="10184">SİGORTACILIK VE RİSK YÖNETİMİ</option>
<option value="19048">SİGORTACILIK VE SOSYAL GÜVENLİK</option>
<option value="19049">SİNEMA VE DİJİTAL MEDYA</option>
<option value="10185">SİNEMA VE TELEVİZYON</option>
<option value="10187">SİNOLOJİ</option>
<option value="97191">SİYASAL BİLİMLER</option>
<option value="10191">SİYASET BİLİMİ</option>
<option value="10189">SİYASET BİLİMİ VE KAMU YÖNETİMİ</option>
<option value="10190">SİYASET BİLİMİ VE ULUSLARARASI İLİŞKİLER</option>
<option value="10192">SOSYAL BİLGİLER ÖĞRETMENLİĞİ</option>
<option value="10193">SOSYAL HİZMET</option>
<option value="10195">SOSYOLOJİ</option>
<option value="19051">SPOR YÖNETİCİLİĞİ</option>
<option value="19700">SU BİLİMLERİ VE MÜHENDİSLİĞİ</option>
<option value="10196">SU ÜRÜNLERİ MÜHENDİSLİĞİ</option>
<option value="10197">SÜMEROLOJİ</option>
<option value="19082">SÜRYANİ DİLİ VE EDEBİYATI</option>
<option value="10813">SÜT TEKNOLOJİSİ</option>
<option value="10198">ŞEHİR VE BÖLGE PLANLAMA</option>
<option value="19052">TAKI TASARIMI</option>
<option value="19052">TAKI TASARIMI İMALATI</option>
<option value="29017">TAPU KADASTRO</option>
<option value="10809">TARIM EKONOMİSİ</option>
<option value="10803">TARIM MAKİNELERİ VE TEKNOLOJİLERİ MÜHENDİSLİĞİ</option>
<option value="12233">TARIM TİCARETİ VE İŞLETMECİLİĞİ</option>
<option value="10814">TARIMSAL BİYOTEKNOLOJİ</option>
<option value="19053">TARIMSAL GENETİK MÜHENDİSLİĞİ</option>
<option value="10804">TARIMSAL YAPILAR VE SULAMA</option>
<option value="10201">TARİH</option>
<option value="10200">TARİH ÖĞRETMENLİĞİ</option>
<option value="19054">TARİH ÖNCESİ ARKEOLOJİSİ</option>
<option value="10805">TARLA BİTKİLERİ</option>
<option value="11504">TEKNOLOJİ VE BİLGİ YÖNETİMİ</option>
<option value="10203">TEKSTİL MÜHENDİSLİĞİ</option>
<option value="71900">TEKSTİL TASARIMI</option>
<option value="19066">TEKSTİL VE MODA TASARIMI</option>
<option value="10205">TELEVİZYON HABERCİLİĞİ VE PROGRAMCILIĞI</option>
<option value="10206">TIP</option>
<option value="19067">TIP MÜHENDİSLİĞİ</option>
<option value="19520">TİYATRO ELEŞTİRMENLİĞİ VE DRAMATURJİ</option>
<option value="72000">TOHUM BİLİMİ VE TEKNOLOJİSİ</option>
<option value="10806">TOPRAK BİLİMİ VE BİTKİ BESLEME</option>
<option value="10208">TURİZM İŞLETMECİLİĞİ</option>
<option value="11007">TURİZM REHBERLİĞİ</option>
<option value="20085">TURİZM VE OTEL İŞLETMECİLİĞİ</option>
<option value="10213">TÜRK DİLİ VE EDEBİYATI</option>
<option value="10212">TÜRK DİLİ VE EDEBİYATI ÖĞRETMENLİĞİ</option>
<option value="10214">TÜRK HALKBİLİMİ</option>
<option value="18020">TÜRK İSLAM ARKEOLOJİSİ</option>
<option value="10215">TÜRKÇE ÖĞRETMENLİĞİ</option>
<option value="60018">TÜRKOLOJİ</option>
<option value="20087">TÜTÜN EKSPERLİĞİ</option>
<option value="12344">UÇAK BAKIM VE ONARIM</option>
<option value="20088">UÇAK ELEKTRİK VE ELEKTRONİĞİ</option>
<option value="19056">UÇAK GÖVDE VE MOTOR BAKIMI</option>
<option value="10216">UÇAK MÜHENDİSLİĞİ</option>
<option value="19620">UKRAYNA DİLİ VE EDEBİYATI</option>
<option value="97183">ULUSLARARASI EKONOMİK İLİŞKİLER</option>
<option value="10218">ULUSLARARASI FİNANS</option>
<option value="19059">ULUSLARARASI FİNANS VE BANKACILIK</option>
<option value="11109">ULUSLARARASI GİRİŞİMCİLİK</option>
<option value="10220">ULUSLARARASI İLİŞKİLER</option>
<option value="10602">ULUSLARARASI İŞLETME YÖNETİMİ</option>
<option value="10227">ULUSLARARASI TİCARET</option>
<option value="11415">ULUSLARARASI TİCARET VE FİNANS</option>
<option value="97103">ULUSLARARASI TİCARET VE FİNANSMAN</option>
<option value="10226">ULUSLARARASI TİCARET VE İŞLETMECİLİK</option>
<option value="10824">ULUSLARARASI TİCARET VE LOJİSTİK</option>
<option value="10228">URDU DİLİ VE EDEBİYATI</option>
<option value="19060">UZAY BİLİMLERİ VE TEKNOLOJİLERİ</option>
<option value="10230">UZAY MÜHENDİSLİĞİ</option>
<option value="97146">UZAY VE UYDU MÜHENDİSLİĞİ</option>
<option value="10232">VETERİNERLİK</option>
<option value="19062">YABAN HAYATI EKOLOJİSİ VE YÖNETİMİ</option>
<option value="55400">YAPAY ZEKA MÜHENDİSLİĞİ</option>
<option value="97145">YAPAY ZEKA VE VERİ MÜHENDİSLİĞİ</option>
<option value="12345">YAZILIM GELİŞTİRME</option>
<option value="10233">YAZILIM MÜHENDİSLİĞİ</option>
<option value="10704">YENİ MEDYA</option>
<option value="19084">YENİ MEDYA VE İLETİŞİM</option>
<option value="18019">YEREL YÖNETİMLER</option>
<option value="19064">YİYECEK VE İÇECEK İŞLETMECİLİĞİ</option>
<option value="10054">YÖNETİM BİLİMLERİ PROGRAMLARI</option>
<option value="10234">YÖNETİM BİLİŞİM SİSTEMLERİ</option>
<option value="10235">YUNAN DİLİ VE EDEBİYATI</option>
<option value="19068">ZAZA DİLİ VE EDEBİYATI</option>
<option value="19560">ZİRAAT MÜHENDİSLİĞİ PROGRAMLARI</option>
<option value="10807">ZOOTEKNİ</option>																
                                     </select>
                                        <button class="btn icon"><i class="fa-sharp fa-solid fa-graduation-cap"></i></button>
                                    </div>
                                 








                                    <div class="form-group">
                                    <select name="adres" class="form-control">
    <option value="0" disabled="" selected="">Şehir Seçin</option>
    <option value="Adana">Adana</option>
<option value="Adıyaman">Adıyaman</option>
<option value="Afyonkarahisar">Afyonkarahisar</option>
<option value="Ağrı">Ağrı</option>
<option value="Amasya">Amasya</option>
<option value="Ankara">Ankara</option>
<option value="Antalya">Antalya</option>
<option value="Artvin">Artvin</option>
<option value="Aydın">Aydın</option>
<option value="Balıkesir">Balıkesir</option>
<option value="Bilecik">Bilecik</option>
<option value="Bingöl">Bingöl</option>
<option value="Bitlis">Bitlis</option>
<option value="Bolu">Bolu</option>
<option value="Burdur">Burdur</option>
<option value="Bursa">Bursa</option>
<option value="Çanakkale">Çanakkale</option>
<option value="Çankırı">Çankırı</option>
<option value="Çorum">Çorum</option>
<option value="Denizli">Denizli</option>
<option value="Diyarbakır">Diyarbakır</option>
<option value="Edirne">Edirne</option>
<option value="Elazığ">Elazığ</option>
<option value="Erzincan">Erzincan</option>
<option value="Erzurum">Erzurum</option>
<option value="Eskişehir">Eskişehir</option>
<option value="Gaziantep">Gaziantep</option>
<option value="Giresun">Giresun</option>
<option value="Gümüşhane">Gümüşhane</option>
<option value="Hakkâri">Hakkâri</option>
<option value="Hatay">Hatay</option>
<option value="Isparta">Isparta</option>
<option value="Mersin">Mersin</option>
<option value="İstanbul">İstanbul</option>
<option value="İzmir">İzmir</option>
<option value="Kars">Kars</option>
<option value="Kastamonu">Kastamonu</option>
<option value="Kayseri">Kayseri</option>
<option value="Kırklareli">Kırklareli</option>
<option value="Kırşehir">Kırşehir</option>
<option value="Kocaeli">Kocaeli</option>
<option value="Konya">Konya</option>
<option value="Kütahya">Kütahya</option>
<option value="Malatya">Malatya</option>
<option value="Manisa">Manisa</option>
<option value="Kahramanmaraş">Kahramanmaraş</option>
<option value="Mardin">Mardin</option>
<option value="Muğla">Muğla</option>
<option value="Muş">Muş</option>
<option value="Nevşehir">Nevşehir</option>
<option value="Niğde">Niğde</option>
<option value="Ordu">Ordu</option>
<option value="Rize">Rize</option>
<option value="Sakarya">Sakarya</option>
<option value="Samsun">Samsun</option>
<option value="Siirt">Siirt</option>
<option value="Sinop">Sinop</option>
<option value="Sivas">Sivas</option>
<option value="Tekirdağ">Tekirdağ</option>
<option value="Tokat">Tokat</option>
<option value="Trabzon">Trabzon</option>
<option value="Tunceli">Tunceli</option>
<option value="Şanlıurfa">Şanlıurfa</option>
<option value="Uşak">Uşak</option>
<option value="Van">Van</option>
<option value="Yozgat">Yozgat</option>
<option value="Zonguldak">Zonguldak</option>
<option value="Aksaray">Aksaray</option>
<option value="Bayburt">Bayburt</option>
<option value="Karaman">Karaman</option>
<option value="Kırıkkale">Kırıkkale</option>
<option value="Batman">Batman</option>
<option value="Şırnak">Şırnak</option>
<option value="Bartın">Bartın</option>
<option value="Ardahan">Ardahan</option>
<option value="Iğdır">Iğdır</option>
<option value="Yalova">Yalova</option>
<option value="Karabük">Karabük</option>
<option value="Kilis">Kilis</option>
<option value="Osmaniye">Osmaniye</option>
<option value="Düzce">Düzce</option>
</select>
                                        <button class="btn icon"><i class="fa-solid fa-city"></i></button>
                                    </div>


                                    <div class="form-group">
                                        <input type="date" id="inputdate" class="form-control" placeholder="Doğum Tarihi" name="dt" required >
                                        <button class="btn icon"><i class="fa-solid fa-cake-candles"></i></button>
                                    </div>




                                    <div class="form-group">
                                    <div class="radio-with-Icon">
  <p class="radioOption-Item">
    <input type="radio" name="cinsiyet" id="cinsiyet1" value="bay" class="ng-valid ng-dirty ng-touched ng-empty" aria-invalid="false" >
    <label for="cinsiyet1">
    <i class="fa-solid fa-mars"></i>
      Erkek
    </label>
  </p>

  <p class="radioOption-Item">
    <input type="radio" name="cinsiyet" id="cinsiyet2" value="bayan" class="ng-valid ng-dirty ng-touched ng-empty" aria-invalid="false" >
    <label for="cinsiyet2">
    <i class="fa-solid fa-venus"></i>
     Kadın
    </label>
  </p>


</div>
                                       
                                    </div>












                                    <button type="submit" class="btn button"  name="kayit">Kayıt Ol</button>
                                    <div class="callout">
                                        <span>Hesabın Varmı? <a href="sign-in.php">Giriş Yap</a></span>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <?php

if(isset($_POST['kayit'])){
                $eposta = htmlspecialchars($_POST["email"]);
                $adsoyad = htmlspecialchars($_POST["adsoyad"]);
                $password = htmlspecialchars($_POST["password"]);
                $bölüm = htmlspecialchars($_POST["bölüm"]);
                $cinsiyet = htmlspecialchars($_POST["cinsiyet"]);
                $adres = htmlspecialchars($_POST["adres"]);
                $dt = date('Y-m-d', strtotime($_POST['dt']));

  if($eposta and $adsoyad and $password and $bölüm and $cinsiyet and $adres and $dt){
    $sql = "select * from üyeler where eposta=?";
                        $user = $db->prepare($sql);
                        $user->execute([$eposta]);
                        $user = $user->fetchAll();
                        if(!$user){
                            $sql = "INSERT INTO üyeler SET eposta=?,adsoyad=?,sifre=?,bolum=?,cinsiyet=?,adres=?,dogumtarihi=?";
                            $adduser = $db->prepare($sql);
                           $add= $adduser->execute([$eposta,$adsoyad , $password, $bölüm,$cinsiyet,$adres,$dt]);
                           if($add){
             
                            echo '<script type ="text/JavaScript">';  
                        echo 'alert("Kayıt Başarılı! Aramıza HoşGeldiniz")';  
                        echo '</script>';
                        
                           }
                           else{
                            echo '<script type ="text/JavaScript">';  
                            echo 'alert("Kayıt Başarısız! Aramıza Tekrar Deneyiniz!")';  
                            echo '</script>';
                           
                             
                           }
                        }
                       else{
                        echo '<script type ="text/JavaScript">';  
                        echo 'alert("Bu E-mail Kullanılmaktadır.Giriş yapın yada Başka Bir Email Giriniz!")';  
                        echo '</script>';
                       }




                    }



    
  }



?>
            <!-- End of Sign Up -->
            <!-- Start of Sidebar -->
            <div class="aside order-md-1">
                <div class="container">
                    <div class="col-md-12">
                        <div class="preference">
                            <h2>Hoşgeldiniz!</h2>
                            <p>World of Education Dünyasına Girmek için lütfen kişisel bilgilerinizle Giriş Yapın.</p>
                            <a href="sign-in.php" class="btn button">Giriş Yap</a>
                        </div>
                    </div>
                </div>
            </div>
            <!-- End of Sidebar -->
        </div>
        <!-- Layout -->
    </main>
    <!-- Bootstrap core JavaScript
		================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script src="dist/js/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script>
        window.jQuery || document.write('<script src="dist/js/vendor/jquery-slim.min.js"><\/script>')
    </script>
    <script src="dist/js/vendor/popper.min.js"></script>
    <script src="dist/js/bootstrap.min.js"></script>
</body>


</html>