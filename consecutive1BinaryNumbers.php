<?php

$n=5;
$count = 0;
// echo $n; exit;
// $n = decbin($n);
while($n>0){

	// echo ($n<<1); 
 // exit;

    $n = $n & ($n<<10);
    $count++;
}

echo $count;