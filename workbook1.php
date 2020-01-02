<?php

function workbook($n, $k, $arr) {
	$count = 0;

	// if($n==$k){
	// 	return $arr;
	// }
	for($i=1;$i<=max($arr);$i++){
		echo $arr[$i]."</br>";
		// $val = $arr[$i];
		// while($val>0){
		// 	$val-=$k;

		// }

		echo $i."</br>";
	}


	return $count;


}


$n = 5;
$k = 3;
$arr = [4,2,6,1,10];

echo workbook($n,$k,$arr);