<?php 

// $arr = [1, 2, 3, 3];
$arr = [0, 0, 2, 0 ];

function balancedSums($arr) {

		$x = 0;
		$sum = 0;

		foreach ($arr as $val) {
			$sum+=$val;
		}

		foreach ($arr as $y) {
			if(2*$x == $sum - $y){
				return "YES";
			}
			$x = $x + $y;
		}

		return "NO";

		// echo $sum;

}


echo balancedSums($arr);