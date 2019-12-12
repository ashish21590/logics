<?php

$n = 3; $m=7;  $s = 3;

function saveThePrisoner($n, $m, $s) {
    $r = $m%$n;
    if(($r+$s-1)%$n == 0){
        return $n;
    }else{
    return ($r+$s-1)%$n;
    }
}

echo saveThePrisoner($n,$m,$s);