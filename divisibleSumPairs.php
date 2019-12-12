<?php

function divisibleSumPairs($n, $k, $arr) {

	$count=0;
	for ($i=0; $i <count($arr) ; $i++) { 
		for ($j=$i+1; $j <count($arr) ; $j++) { 
					
					
				if(($arr[$i]+$arr[$j])%$k==0){
					// echo $arr[$i]+$arr[$j]."</br>";
					$count++;
				}
		}
	}

	return $count;

}


// $arr = [1, 3, 2, 6, 1, 2];
$arr = [1,2,3,4,5,6];
$k=5;
echo divisibleSumPairs(count($arr),$k,$arr);