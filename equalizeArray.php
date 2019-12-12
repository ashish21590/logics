<?php

$arr= [1, 2, 3, 1, 2, 3, 3, 3
];

$memoization = [];

for ($i=0; $i <count($arr) ; $i++) { 
	if(isset($memoization[$arr[$i]])){
		$memoization[$arr[$i]]+=1;;
	}else{
		$memoization[$arr[$i]]=1;
	}
}


$result =0;
foreach ($memoization as $memo) { 
			$result = max($result,$memo);
		}

// echo $result; exit;

$answer = count($arr) - $result;

echo $answer;

print_r($memoization);