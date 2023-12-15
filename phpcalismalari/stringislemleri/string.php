<?php
error_reporting(0);
$metin=$_POST[metin];

$s=explode(" ", $metin);
echo $metin."<br>";

echo "Kelime sayisi.....".str_word_count($metin)."<br>";
echo "Cümlenin tersi....".strrev($metin)."<br>";
echo "'o' harfinin cümledeki yeri.:".strpos($metin, "p")."<br>";
echo "Cümlede kelime değişikliği..:".str_replace("bilgisayar", "mekatronik", $metin)."<br>";
echo "Kelime sayısı.....:".count($s)."<br>";
for($i=0;$i<count($s);$i++)
echo $i.".kelime.....: ".$s[$i]."<br>";











?>