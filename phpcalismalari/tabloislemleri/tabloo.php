<?php
error_reporting(0);

$satır=$_POST["satir"];
$sütun=$_POST["sutun"];
?>

<?php

echo "<table border=1>";

for($i=1;$i<=$satır;$i++){
	
	echo "<tr>";
	
	
	for($j=1;$j<=sütun;$j++){
		
		echo "<td>";
		echo $i.$j;
		echo "</td>";
		
	}
	
	echo "</tr>";
	
	
}

echo "</table>";


?>