<?php

function jumpingOnClouds($c, $k) {
    $e = 100;
    for ($i=$k; $i < count($c); $i=$i+$k) { 
        if($c[$i]==1){
            $e = $e-$k;
        }else{
            $e=$e-1;
        }
    }

    return $e-1;

}

$k = 3;
// $c = [0, 0, 1, 0, 0, 1, 1, 0];
$c = [1, 1, 1, 0, 1,1, 0, 0, 0, 0];

echo jumpingOnClouds($c,$k);