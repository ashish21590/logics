<?php

function formingMagicSquare($s) {

    $answer=[];
    for($i=0;$i<3;$i++){
        for($j=0;$j<3;$j++){
            $answer[$i]+=$s[$i][$j];
        }
    }
// print_r($answer); exit;
    $result=[];
    for($k=0;$k<count($answer);$k++){
        if($answer[$k]<15){
            $result[$k]=abs(15-$answer[$k]);
        }else if($answer[$k]>15){
            $result[$k]=abs($answer[$k]-15);
        }
    }

    return array_sum($result);


}

// 7 6 5
// 7 2 8
// 5 3 4

$arr = array(
array(7, 6, 5 ),
array(7, 2, 8),
array(5, 3, 4 ));
echo formingMagicSquare($arr);