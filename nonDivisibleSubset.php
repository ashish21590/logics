<?php
 
// PHP program to get size of subset whose 
// each pair sum is not divisible by K 

// Returns maximum size of subset with 
// no pair sum divisible by K 
function subsetPairNotDivisibleByK(&$arr, $N, $K) 
{ 
	// Array for storing frequency of 
	// modulo values 
	$f = array_fill(0, $K, NULL); 

	// var_dump($f);

	// Fill frequency array with 
	// values modulo K 
	for ($i = 0; $i < $N; $i++) 
		// echo $arr[$i] % $K;
		// echo "</br>"; 
		$f[$arr[$i] % $K]++;

	print_r($f);

	// if K is even, then update f[K/2] 
	if ($K % 2 == 0) 
		$f[$K / 2] = min($f[$K / 2], 1);
		// echo $f[$K / 2]; exit; 
	print_r($f);
	// Initialize result by minimum of 1 or 
	// count of numbers giving remainder 0 
	$res = min($f[0], 1); 

	// Choose maximum of count of numbers 
	// giving remainder i or K-i 
	for ($i = 1; $i <= $K / 2; $i++) 
		$res += max($f[$i], $f[$K - $i]); 

	return $res; 
} 

// Driver Code 
$arr = array(19, 10, 12, 10, 24,25,22); 
$N = sizeof($arr); 
$K = 4; 
echo subsetPairNotDivisibleByK($arr, $N, $K); 

// This code is contributed by ita_c 
?> 



<!-- $k = 4;
// $s = [1, 7, 2, 4];
$s = [19,10,12,10,24,25,22];

echo nonDivisibleSubset($k,$s); -->