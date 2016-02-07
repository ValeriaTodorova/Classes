<?php
//step1
$Europe=array(
	'Bulgaria' => 'Sofia',
	'Slovenia'=> 'Liubliana',
	'France'=> 'Paris',
	'Russia'=>'Moscou',
	'Serbia'=>'Belgrad'
	);

foreach ($Europe as $key => $value) {
	echo'<p>The capital of'.$key.' is '.$value.'</p>' ;
}

//step2

$friends=array(
	"Peter",
	"Kallin",
	"Maiya",
	"Kamelia",
	"Viktoria"
	);
foreach ($friends as $value) {
	echo "<p>".$value." is my friend</p>";
}
//step3- umnojenie


$numbers=array(1,2,3,4);
$mult=1;
foreach ($numbers as $value) {
	$mult*=$value;	
}
echo"$mult";
