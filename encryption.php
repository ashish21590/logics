<?php

function encryption($s) {
        
    $strlen = strlen($s);
    
    $r = floor(sqrt($strlen));
    $c = ceil(sqrt($strlen));
    
    $res = [];
    
    $n = '';
    
    for($i = 0; $i<$c;++$i){
        
        
        for($j=$i;$j<strlen($s);$j+=$c){
            
            echo $j."</br>";
             $n.=$s[$j];
         
        }            
                $n.="\n";
                  
    }
    
    return $n;

}


$s = "haveaniceday";

encryption($s);

//haveaniceday
//
//have
//anic
//eday
//    
//hae and via ecy

//hae-and-via-ecy-ae-nd-ia-cy-e-d-a-y-