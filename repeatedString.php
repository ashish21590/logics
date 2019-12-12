<?php

// abaabaabaa

$s='aba';
$n=10;


function repeatedString($s, $n) {


$count=0;
    for($i=0; $i<strlen($s); $i++){
        if($s[$i] == 'a')
            $count++;
    }

    // echo $count;

    echo  $div = floor($n/strlen($s));
    echo $reminder = $n%strlen($s);

    $count = $div*$count;

    // echo $count; exit;

    for($i=0; $i<$reminder; $i++){
        if($s[$i] == 'a')
            $count++;
    }

return floor($count);



}


echo repeatedString($s,$n);