<?php

$arr = array ();

for ($i=0; $i<100; $i++) {
	$arr[$i] = rand(1,1000);
	echo $arr[$i]." ";
}

$count = count($arr);

echo "Array elements count_" .$count;

//


$temp=array();
$sum=1;


for ($i=0; $i< 90; $i++) {
	 $temp[$i]=rand(1,90);
	 for ($i=0; $i < 90; $i++) { 
	 	$sum+= $temp[$i];
	 }
	 $average=($sum/90);
     echo "<p>".$average."</p>";     
}
