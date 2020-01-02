<?php

function workbook($n, $k, $arr) {
	$count = 0;
	$page =1;

	
	for($i=0;$i<$n;$i++){
		// echo $arr[$i]."</br>";
		for($j=1;$j<=$arr[$i];$j++){
			if($page==$j){
				// echo $i."--".$j;	
				$count++;	
			} 

			if($j%$k==0 || $j== $arr[$i]){
				echo $j."--".$k."----".$arr[$i]."</br>";
				$page++;
			}
		}
	}


	return $count;


}


$n = 5;
$k = 3;
$arr = [4,2,6,1,10];

echo workbook($n,$k,$arr);