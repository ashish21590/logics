<?php


// $arr = array(5, 4, 4, 2, 2, 8);

$arr= [1, 2, 3, 4, 3, 3, 2, 1];

 sort($arr);
 // print_r($arr);
$res = [];
for($i=0;$i<count($arr);$i++){
	$temp = $arr[$i];
	$count = 0;
	if($temp!=0){
	for ($j=0; $j <count($arr) ; $j++) { 
		echo $i."......".$temp."</br>";
		if($temp>0 && $arr[$j]>0){
		 	$arr[$j] = $arr[$j] - $temp; 
		 	$res[$i] = $arr[count($arr)-1];
		 	$count++;
		 	// echo "Ashish".$arr[$j]."</br>";
		 	// print_r($arr);
		 }

	}
$res[$i] = $count;
}
	
	sort($arr); 
}

// print_r($res);


print_r($res);

// 2 2 4 4 5 8
//  0 0 2 2 3 6
//  0 0 0 0 1 4 ,
//  0  0 0 0 0 ,3
