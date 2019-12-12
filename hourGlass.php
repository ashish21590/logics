<?php

function hourglassSum($arr) {

if (6 < 3 ){ 
        return -1; 
}
    $max_sum = PHP_INT_MIN; 
    for ($i = 0; $i < (4); $i++) 
    { 
        for ($j = 0; $j < (4); $j++) 
        { 

            $sum = ($arr[$i][$j] + $arr[$i][$j + 1] +  
                    $arr[$i][$j + 2]) +  
                   ($arr[$i + 1][$j + 1]) + 
                   ($arr[$i + 2][$j] +  
                    $arr[$i + 2][$j + 1] +  
                    $arr[$i + 2][$j + 2]); 
  
            
            $max_sum = max($max_sum, $sum); 
        } 
    } 
    return $max_sum; 

}