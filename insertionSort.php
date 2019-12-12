<?php

$arr = [12, 11, 13, 5, 6];
$n =5;
// $newArray =  [];

    
    for ($i = 1; $i < $n; $i++) 
    { 
        $key = $arr[$i]; //13
        $j = $i-1; //1
        while ($j >= 0 && $arr[$j] > $key) 
        { 
            $arr[$j + 1] = $arr[$j]; 
            $j--; 
        } 

        
          
        $arr[$j + 1] = $key; 

        // print_r($arr);
    } 

    

print_r($arr);