<?php

function circularArrayRotation($a, $k) {
    $newArray = array_fill(0,count($a)-1,0);
    for($i=0;$i<count($a);$i++){
        if($i+$k>count($a)-1){
        	// echo "Ashish".$i."</br>"."";
            $newIndex = $i+$k-count($a);
             // echo $newIndex."</br>";
            $newArray[$newIndex] = $a[$i];
        }else{

        	// echo $i."</br>";

            $newArray[$i+$k] = $a[$i];
        }
    }


    return $newArray;


}


$a = [1, 2, 3, 4, 5];
$k=2;

$arr = circularArrayRotation($a,$k);
print_r($arr);