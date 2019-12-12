<?php

function birthday($s, $d, $m) {

$count=0;

	for ($i=0; $i <count($s)-$m+1 ; $i++) { 
		$number=0;
		
				for ($j=0; $j <$m ; $j++) { 

					 // echo $s[$j]."</br>";
					// echo $s[$j]."</br>";
					 $number=$number+ $s[$i+$j];

					 // echo $number."</br>";	
				}

				// echo "Ashihs"."</br>"; 

				// echo $number."</br>";
				// $number+= $s[$j];

		

		// echo $number."</br>";

		if($number==$d){

			$count++;

		}
	}


	return $count;

}


$s = [1, 2, 1, 3, 2];
// $s = [1, 1, 1, 1, 1, 1];
$d=3;$m=2;
echo birthday($s,$d,$m);