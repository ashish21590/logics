<?php

function getMoneySpent($keyboards, $drives, $b) {
    
    $result=0;
    for ($i=0; $i < count($keyboards); $i++) { 
    	for ($j=0; $j < count($drives) ; $j++) { 
    			
    			if($keyboards[$i]+$drives[$j]<=$b){
    				 $result =max($keyboards[$i]+$drives[$j],$result);
    			}
    	}
    }

     if($result==0){
     	return -1;
     }else{
     	return $result;
     }

}

$keyboards = [3,1];
$drives = [5, 2, 8];
$b = 10;

echo getMoneySpent($keyboards,$drives,$b);