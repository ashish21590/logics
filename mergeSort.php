<?php 

$arr = [2,1,5,3,4];




function mergeSort($arr){
	$sr = 0; 
	if(count($arr)==1){
		echo "Piyush"."</br>";		
		return $arr;
	}else{

		echo "Ashish"."</br>";

		$mid = floor(count($arr)/2);
		$left = array_slice($arr, 0, $mid);
		$right = array_slice($arr, $mid);
		$left = mergeSort($left);
		$right = mergeSort($right);
		return merge($left, $right);

	}
}



function merge($left, $right){

	echo "Manish"."</br>";

	$res = [];


	// print_r($left);

	// print_r($right);

	while(count($left)> 0 && count($right)>0){
		if($left[0]>$right[0]){
			$res[] = $right[0];
			$right = array_slice($right, 1);
		}else{
			$res[] = $left[0];
			$left = array_slice($left, 1);
		}
	}



	while (count($left)>0) {
		
		$res[] =$left[0];
		$left = array_slice($left, 1);

	}


	while (count($right)>0) {
		
		$res[] =$right[0];
		$right = array_slice($right, 1);

	}

	 // print_r($res); exit;

		return $res;


	}

	$val =  mergeSort($arr);


	print_r($val);



	// echo $sr;