<?php

//task1 - otpechatvame chislata ot 1 do 100i tqhnata suma
$sum = 0;
for($x=1;$x<=100;$x++) {
	echo "$x";
    $sum+=$x;
}
 echo "<p>".$sum."</p>";

//task2
$sum = 0;
for($x=20;$x<=40;$x+=2) {
	echo "$x";
    $sum+=$x;
}
 echo "<p>".$sum."</p>";
//zad3

$x=rand(1,50);
$y=rand(51,100);

echo "<p>".$x."</p>";
echo "<p>".$y."</p>";

for ($i=$x; $i <=$y ; $i++) { 
	echo "$i";
 if ($i%3==0) {
	echo "<p>".$i."</p>";
 } elseif ($i%7==0) {
	echo "<p>".$i."</p>";
 }
}