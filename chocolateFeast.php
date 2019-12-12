<?php

function chocolateFeast($n, $c, $m) {

   $t=(int)($n/$c);
        $w=  (int)($n/$c);
        while($w>=$m)
        {
            $t+=$w/$m;
            $w+=1;
        }
       return floor($t);

}

echo chocolateFeast(78711, 514, 63338);