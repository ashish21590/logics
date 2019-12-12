<?php

function beautifulDays($i, $j, $k) {

	$result = 0;
    for($start=$i;$start<=$j;$start++){

    	$number = $start;
    	$newNumber = palindrome($number);
    	$r = ($number-$newNumber)/$k;
		if(is_int($r)){
			$result++;
		}

    }

    return $result;


}

function palindrome($n){
	$originalNumber = $n;
		$newNumber=0;
	while(floor($n)){
		$reminder=($n%10);
		// echo $reminder;
		$newNumber= $newNumber*10+$reminder;
		$n=$n/10;
		// echo $n."</br>";
	}

	return $newNumber;
}

// echo palindrome(231);

echo beautifulDays(20,23,6);

// echo floor(0);