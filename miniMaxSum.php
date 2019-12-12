<?php

$arr = [1, 2, 3, 4, 5];

$sum=0;
$min = $arr[0];
$max = $arr[0];		
foreach ($arr as $value) {

	$min = min($value,$min);

	$max = max($value,$max);

	$sum=$sum+$value;
	

}


echo ($sum-$max).' '.($sum-$min);

// echo ;