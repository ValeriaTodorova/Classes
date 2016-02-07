<?php

$m=3;
$n=4;


echo "<table border=1>";

for ($i=0; $i<$m ; $i++) {
	echo "<tr>";
	for ($j=0; $j<$n; $j++) { 
		echo "<td>".$i.",".$j."</td>";
	} 
	echo "</tr>";
}
echo "</table>";
