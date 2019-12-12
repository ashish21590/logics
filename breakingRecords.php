<?php

// $scores = [3, 4, 21, 36, 10, 28, 35, 5, 24, 42];

$scores = [10, 5, 20, 20, 4, 5, 2, 25, 1
];


// $minCount=;
function breakingRecords($scores) {
$maxCount=0;
$minCount=0;
$max = $scores[0];
$min = $scores[0];
	for ($i=0; $i <count($scores) ; $i++) { 

		if($scores[$i]>$max){
			$max=$scores[$i];
			$maxCount++;
		}
		if($scores[$i]<$min){
			$min=$scores[$i];
			$minCount++;
		}
}


		return $maxCount." ".$minCount;

}



echo breakingRecords($scores);