<?php 

function minimumDistances($a) {
    $minValue= PHP_INT_MAX;
    for($i=0;$i<count($a);$i++){
        for($j=$i+1;$j<count($a);$j++){
               if($a[$i]==$a[$j]){
                $minValue = min($minValue,abs($j-$i));   
               }
        }
    }
    
    if($minValue == PHP_INT_MAX){
        return -1;
    }else{
        return $minValue;    
    }
    
    

}


$a  = [7, 1, 3, 4, 1,7];

echo minimumDistances($a); 