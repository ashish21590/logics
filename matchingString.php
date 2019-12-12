<?php

$arr = ['abc','xyz','pqr','abc','xyz','ftp'];
$matchString = ['abc','mtq','xyz','pqr','ftp'];
$dictionary = [];
$result = [];

for ($i=0; $i <count($arr) ; $i++) { 
	
	if(isset($dictionary[$arr[$i]])){
		$dictionary[$arr[$i]] = $dictionary[$arr[$i]]+1;
	}else{
		$dictionary[$arr[$i]] = 1;
	}

}


for ($i=0; $i <count($dictionary) ; $i++) { 		
		if(isset($dictionary[$matchString[$i]])){
			array_push($result,$dictionary[$matchString[$i]]);
		}else{
			array_push($result,0);
		}
}


print_r($result);