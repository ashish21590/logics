<?php

// function countingSort($arr) {
    $arr = [1,3,7,8,1,1,3];
    // $arr = [4,3,1,2,0];
    $newArray = array_fill(0,count($arr),0);
    $output =array_fill(0,count($arr),0);

    


    for($i=0;$i<count($arr);$i++){
             $newArray[$arr[$i]]++;
    }

    for($i=1;$i<count($newArray);$i++){
        $newArray[$i] = $newArray[$i]+$newArray[$i-1];
    
    }
    for($i = count($arr)-1; $i >= 0; $i--) 
    {  
          $output[ $newArray[$arr[$i]]-1] = $arr[$i];
          $newArray[$arr[$i]]--;
    } 

    












         print_r($output);

// }




