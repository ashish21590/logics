<?php

$arr = [4, 3, 1, 2];

// $arr = [2,3,4,1,5];
// $arr = [1, 3, 5, 2, 4,6, 7  
// ];

/* this dolution is not optimal but a solution

$swaps=0;
for ($i=0; $i <count($arr) ; $i++) { 
		
		for ($j=0; $j <count($arr)-1 ; $j++) { 
				
				if($arr[$j]>$arr[$j+1]){
					$temp=$arr[$j];
					$arr[$j]=$arr[$j+1];
					$arr[$j+1]=$temp;
					$swaps++;
				}
		}
}

// print_r($arr);
echo $swaps;

*/

function minimumSwaps($arr) {


$swaps=0;
$visited=[];

// 4 3 12

for ($i=0; $i <count($arr) ; $i++) { 
        
         $j = $i;
         $cycle = 0;

         while(!isset($visited[$j])){
         	echo "Ashish"."</br>";
             $visited[$j] = 1;
             $j = $arr[$j]-1;
             echo $j."</br>";
             $cycle++; 
         }

         if($cycle!=0){
             $swaps+=$cycle-1;
         }

        
        
}

print_r($visited); 

// print_r($arr);
return  $swaps;

}

echo minimumSwaps($arr); 

