<?php

$arr= [2,4,6,8,3];

for ($i=1; $i < count($arr); $i++) { 
    $key = $arr[$i];
    $j=$i-1;

    while($j>=0 && $arr[$j]>$key){
        $arr[$j+1] = $arr[$j];
        $j--;
        echo implode("",$arr)."</br>";
        // print_r($arr);
    }
    $arr[$j + 1] = $key; 
    // print_r($arr);
}

echo implode(" ",$arr);

// print_r($arr);