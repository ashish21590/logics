<?php
error_reporting(0);
$queue = [2,2,4,3];

$sumOfMoney = 4;
$result=[];
$frequency=[];
// array_push($frequency, -1);
for ($i=0; $i <count($queue); $i++) { 
 			
 			$x= $queue[$i];
 			$y = $sumOfMoney-$x;
 			// echo $y; exit;
 			// if($y>=0){
 				$j = $frequency[$y];
 				 // echo $j."</br>"; exit;
 				if(isset($j)){
 					// echo "Ashish"; exit;
 						$result[0] = $j+1;
 						$result[1]= $i+1;

 						// print_r($result); exit;
 						break;
 					}
	 			// }
// print_r($result);
	 				$frequency[$x] = $i;

	 				// print_r($frequency);
 } 

  // print_r($frequency);

echo "</br>";

print_r($result);
