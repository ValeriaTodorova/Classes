<?php
//zad10
$x=1;
$n=27;
echo "<ul><li>";
while ($x<=$n) {
	echo $x." ";
	
	if ($x%5==0) {
		echo "</li><li>";
	}
	$x++;
}
echo "</li></ul>";
//zad11
$x=1;
$n=100;
echo "<ul><li>";
while ($x<=$n) {
	echo $x." ";
	
	
	if (($x+1)%10==0) {
		echo "</li><li>";
	}
	$x+=2;
}
echo "</li></ul>";
