<?php


function serviceLane($n, $cases) {

	$min = PHP_INT_MAX;
	// for ($i=0; $i <=3 ; $i++) { 
	// 	$min  = min($n[$i],$min);
	// }

	// return $min;

	// echo count($cases); exit;

	$arr = array();

	for ($i=0; $i <count($cases) ; $i++) { 

		// print_r($cases[$i][0]);
			//  
			$nArray = [];

			// echo $cases[$i][0]."-----".$cases[$i][1]."</br>";
			for ($j=$cases[$i][0]; $j <=$cases[$i][1] ; $j++) { 
				// $min  = min($n[$j],$min);
				array_push($nArray,$n[$j]);
			}

			// print_r($nArray);

			array_push($arr, min($nArray));
	}

	return $arr;

}

$n = [2, 3, 1, 2, 3, 2, 3, 3];

$cases = Array
(
    Array
        (
             0,
            3
        ),
     Array
        (
             4,
             6
        ),
     Array
        (
             6,
             7
        ),
    Array
        (
             3,
             5
        ),
    Array
        (
             0,
             7
        )
);


$q =  serviceLane($n,$cases);

print_r($q);