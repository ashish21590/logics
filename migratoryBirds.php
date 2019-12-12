<?php

function migratoryBirds($arr) {

	$memo = array_fill(0, 6, 0);
	$result  =1;
	$max = 0;
	foreach ($arr as $value) {
		$memo[$value]++;
		// $max = max($value,$memo[$value]);
	}

		echo $max;
		print_r($memo);


	for ($i=0; $i <=5 ; $i++) { 
// echo $memo[$i]." ".$max."</br

		if($memo[$i]>$max){
			
			$result = $i;
			$max = $memo[$i];
		}
	}
  return $result;

/*
	for ($i=0; $i <count($arr) ; $i++) { 
		if(!isset($arr[$arr[$i]])){
			$memo[$arr[$i]]=1;
			
		}else{
			$memo[$arr[$i]]+=1;
		}
	}

$result=0;
	foreach ($memo as $key=>$value) {
		if($value>$result){
			$result=$key;
		}
	}

	// $memo[3]
	// print_r($memo);
	return $result;


*/

}

$arr = [1, 2, 3, 4, 5, 4, 3, 2, 1, 3, 4];
// $arr = [1, 4, 4, 4, 5, 3];
echo migratoryBirds($arr);