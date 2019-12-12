<?php

function bonAppetit($bill, $k, $b) {

	$totalBill= 0;
	for ($i=0; $i < count($k); $i++) { 
		# code...
		if($k[$i]!=$k[$bill]){
			$totalBill+=$k[$i];
		}
	}

	$result = $totalBill/2;
	if($result==$b){
		return "Bon Appetit";
	   // $K[$bill]
	}else{
		return $b-$result;
	}
	

}
$bill= 2;
$k =[2,4,6];
$b=6;
echo bonAppetit($bill,$k,$b);


 