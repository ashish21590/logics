<?php

// s & t  	7 11
// a b	5 15
// m n	3 2
// apple 	-2 2 1
// orange	5 -6

//     5(apple)  samHouseLocation(7 8 9 10 11)  15(oranges)
 

function countApplesAndOranges($s, $t, $a, $b, $apples, $oranges) {

	$totalApples=0;
	$totalOranges=0;
	for ($i=0; $i <$count($apples) ; $i++) { 
			
			if($a+$apples[$i]>=$s && $a+$apples[$i]<=$t ){
				$totalApples++;
			}
	}

	for ($i=0; $i <$count($oranges) ; $i++) { 
			
			if($b+$oranges[$i]>=$s && $b+$oranges[$i]<=$t ){
				$totalOranges++;
			}
	}


	echo  $totalApples."\n";
	echo  $totalOranges;  

}