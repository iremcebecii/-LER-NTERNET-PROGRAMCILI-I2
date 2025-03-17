<?php 
$json_ben=
	'
	{
	"isim":"irem",
	"soyisim":"cebeci",
	"memleket":"KASTAMONU"
	}
	';
	$veri=json_decode($json_ben);
	echo $veri->isim."<br>".
	$veri->soyisim."<br>".
	$veri->memleket;
	?>
	
	