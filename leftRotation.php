<?php

$a = [1,2,3,4,5];
$d=4; 
$temp = [];

/* my solution but failing 2 test case due to memory issue

for ($i=0; $i <$leftRTimes; $i++) { 
	   $temp[$i] = $a[0];
		for ($j=0; $j <count($a) ; $j++) { 
				 if(($j+1)<count($a)){
				 	// $a[$j] = $arr[0];
				 	// $arr[]
				    $a[$j] = $a[$j+1];

			}
		}

		$a[count($a)-1] = $temp[$i];

		
}

echo implode(" ", $a);

*/
// 1 2 3 4 5   

function rotLeft($a, $d) {

// $a = [1,2,3,4,5];
// $leftRTimes= $d; 
	$n = count($a);
$temp = array_fill(0,$n-1,0);
for ($i=0; $i < $n; $i++) { 
      
      $newIndex = (int) ($i+$n-$d) % $n; 
      echo $newIndex."</br>";
      $temp[$newIndex] = $a[$i];    

     	print_r($temp);
        
}

return $temp;

}

echo implode(" ", rotLeft($a,4));