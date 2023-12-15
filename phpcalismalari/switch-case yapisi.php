<?php
$gun="carsamba";

switch($gun){
	case "pazartesi" :
	echo "bugün günlerden pazartesi<br>";
	break;
	case "salı" :
	echo "bugün günlerden salı<br>";
	break;
	case "carsamba" :
	echo "bugün günlerden çarşamba<br>";
	break;
	case "persembe" :
	echo "bugün günlerden persembe<br>";
	break;
	default:
	echo "gün belirsiz";
	break;
}

echo "kontrol tamamlandı";

?>