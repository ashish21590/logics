<?php

function viralAdvertising($n) {

	$result = 0;
	$r = [];
	for ($i=1; $i<= $n ; $i++) {
			if($i==1){
				$day = floor(5/2);
				$r[1]=$day;
				$result+=$day;

				// print_r($result); exit;
			}else{
				// echo $i; exit;
				$day = floor(3*$r[$i-1]/2);
				$r[$i] = $day;
				$result+=$day;

				// print_r($result); exit;
			}


	}

	return $result;


}

 echo viralAdvertising(3);