<?php

// $arr = [3,1,4,1,5,9,2,6,5,3,5,8,9,7,9,3,2,3,8,4,6,2,6,4,3,3,8,3,2,7,9,5];
$arr = ['6','31415926535897932384626433832795','1','3','10','3','5'];


function user_compare($x, $y)
{
if (strlen($x) < strlen($y))
return 0;
else if (strlen($x) > strlen($y))
return 1;
else
return $x>$y;
}
$array1 =$arr;
usort($array1, 'user_compare');

// echo implode("",$array1r);
print_r($array1);