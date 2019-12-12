<?php
	
	  function formingMagicSquare($s) {

      $possiblePermutations =  [
            [[8, 1, 6], [3, 5, 7], [4, 9, 2]],
            [[6, 1, 8], [7, 5, 3], [2, 9, 4]],
            [[4, 9, 2], [3, 5, 7], [8, 1, 6]],
            [[2, 9, 4], [7, 5, 3], [6, 1, 8]], 
            [[8, 3, 4], [1, 5, 9], [6, 7, 2]],
            [[4, 3, 8], [9, 5, 1], [2, 7, 6]], 
            [[6, 7, 2], [1, 5, 9], [8, 3, 4]], 
            [[2, 7, 6], [9, 5, 1], [4, 3, 8]],
            ];


        

        $minCost = PHP_INT_MAX;
        for ($permutation = 0; $permutation < 8; $permutation++) 
        {
             $permutationCost = 0;
            for ($i = 0; $i < 3; $i++) 
            {
                for ($j = 0; $j < 3; $j++)
                    // echo $s[$i][$j]."</br>";
                    if(isset($s[$i][$j])){
                    // echo $s[$i][$j]."-----".$possiblePermutations[$permutation][$i][$j]."</br>";
                    $permutationCost += abs($s[$i][$j] - $possiblePermutations[$permutation][$i][$j]);
                     // echo $permutationCost."</br>";
                }
                // echo "</br>";
            }
            $minCost = min($minCost, $permutationCost);

            // echo $minCost."</br>"; 
        }
        return $minCost;
    }

    $arr = array(
array(4, 8, 2 ),
array(4, 5, 7),
array(6, 1, 6 ));
echo formingMagicSquare($arr);