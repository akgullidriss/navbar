<?php
/*
$fgc = file_get_contents("https://www.deu.edu.tr/");
$parcala = explode('<title>', $fgc);

// "explode" fonksiyonuyla dizi parçalanmış mı kontrol edin
if (isset($parcala[1])) {
    $parcala2 = explode('</title>', $parcala[1]);
    echo $parcala2[0];
} else {
    echo "İstenilen veri bulunamadı.";
}
*/
?>


<?php
// cURL ile oturum açma işlemi
$loginUrl = 'https://meb.gov.tr'; // Oturum açma URL'si
$username = 'idris.akgul@ogr.deu.edu.tr';
$password = '10iA01iA2001';

$ch = curl_init();
curl_setopt($ch, CURLOPT_URL, $loginUrl);
curl_setopt($ch, CURLOPT_POST, 1);
curl_setopt($ch, CURLOPT_POSTFIELDS, http_build_query(array('username' => $username, 'password' => $password)));
curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
curl_setopt($ch, CURLOPT_COOKIEJAR, 'cookie.txt'); // Oturum bilgisini saklamak için çerez dosyası oluşturma
curl_exec($ch);
curl_close($ch);

// Oturum açıldıktan sonra sayfa içeriğini almak için yeni bir istek yapabilirsiniz
$fgc = file_get_contents("https://meb.gov.tr");
preg_match_all("/<li><a href=\"(.*?)\">(.*?)<\/a><\/li>/i", $fgc,$al);

print_r($al);

// Diğer işlemler...
?>
