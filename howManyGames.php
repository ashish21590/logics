<?php

function howManyGames($p, $d, $m, $s) {
    // Return the number of games you can buy
    
  $count = 0;
        while($s>=$p){
            $count++;
            $s -=$p;
            $p = max($p-$d,$m);
            
//            echo $p."----".$s."</br>";
        }
        return $count;
    


}




echo howManyGames(20,3,6,80);