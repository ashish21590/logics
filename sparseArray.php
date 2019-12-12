<?php

function matchingStrings($strings, $queries) {

	$arr = [];

	for ($i=0; $i <count($strings); $i++) { 
			
			if(isset($arr[$strings[$i]]))
			{
				
				$arr[$strings[$i]]++;

			}else{
					$arr[$strings[$i]]=1;  
			}

	}


	// print_r($arr);



	// $value = 0;
	$result= [];
	for ($i=0; $i <count($queries) ; $i++) { 
		
		if(isset($arr[$queries[$i]])){
			array_push($result, $arr[$queries[$i]]);
		// echo $arr[$queries[$i]]."</br>";

	}else{
		array_push($result, 0);
	}

	}

	return $result;

}



$strings = ['aba','baba','aba','xzxb'];

$queries = ['aba','xzxb','ab'];


 print_r(matchingStrings($strings,$queries));