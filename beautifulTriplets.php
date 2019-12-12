<?php

function beautifulTriplets($d, $arr) {
    $res=0;
    for($i=0;$i<count($arr);$i++){
        $n1 = array_search($arr[$i]+$d,$arr);
        $n2 = array_search($arr[$i]+2*$d,$arr);
        if($n1 && $n2){
           $res++; 
        }  
    }
    
    
    echo $res;
    
}

$arr = [1, 2, 4, 5, 7, 8, 10];
$d = 3;
beautifulTriplets($d,$arr);