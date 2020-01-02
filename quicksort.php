<?php
$arr = [50, 23, 9, 18, 61, 32];

$low = 0;
$high = count($arr)-1;

quickSort($arr,$low,$high);

print_r($arr);
 function quickSort($arr,$low,$high)
{
            # code...

        if($low<$high){

        // echo "Ashish"; exit;

            $pi = partition($arr, $low, $high);
            // echo $pi; exit;
            quickSort($arr, $low, $pi - 1);  // Before pi
            quickSort($arr, $pi + 1, $high); // After pi

        }

        

}

function partition($arr,$low,$high)
{
    // echo "Ashish"; exit;
    $pivot = $arr[$high];  // selecting last element as pivot
    $i = ($low - 1);  // index of smaller element
 
    for ($j = $low; $j <= $high- 1; $j++)
    {
        // If the current element is smaller than or equal to pivot
        if ($arr[$j] <= $pivot)
        {
            $i++;    // increment index of smaller element
           

            $temp = $arr[$i];
            $arr[$i] = $arr[$j];
            $arr[$j] = $temp;
        }
    }
            // swap($arr[$i + 1], $arr[$high]);

            $temp = $arr[$i + 1];
            $arr[$i + 1] = $arr[$high];
            $arr[$high] = $temp;

    // print_r($arr);/
    return ($i + 1);
}

// function swap($a,$b){
//     $temp = $a;
//     $a = $b;
//     $b = $temp;
// }




print_r($arr);