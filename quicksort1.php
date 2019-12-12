<?php
$arr= [4, 5, 3, 7, 2];
$pi = $arr[0];
for($i=1;$i<count($arr);$i++){
    if($arr[$i] < $pi){
    for ($j=$i; $j > 0  ; $j--) { 
        // if($arr[$j]<$arr[$j]  ){
            $temp = $arr[$j];
            $arr[$j] =$arr[$j-1];
            $arr[$j-1] = $temp;
            print_r($arr);
        // }
        }
    }
}



print_r($arr);