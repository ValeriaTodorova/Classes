<?php

$Country=array(
	'Bulgaria' => 'Sofia',
	'Slovenia'=> 'Liubliana',
	'France'=> 'Paris',
	'Russia'=>'Moscou',
	'Serbia'=>'Belgrad'
	);

$Country==$_GET["Country"]
if (!empty($_GET["submit"])) {
	
foreach ($Country as $key => $value) {
   echo'<p>'.$value.' is in'.$key.'</p>' ;
	
}
}




?>