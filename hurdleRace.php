<?php

function hurdleRace($k, $height) {
	$max = 0;

	for ($i=0; $i < count($height); $i++) { 
		$max = max($max,$height[$i]);
	}

	$result = abs($k-$max);
	if($k>$max){
		return 0;
	}else{
		return $result;
	}

}

$k=4;
$height=[1, 6, 3, 5, 2];

echo hurdleRace($k,$height);