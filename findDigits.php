<?php 

$n = 112;

$count=0;
$num=$n;
while ($n>0) {
	// $newNum = $n;
	$r = $n%10;

	if($r!=0 && ($num%$r)==0){
		$count++;
		
	}

	$n = $n/10;
}

echo $count;