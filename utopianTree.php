<?php

function utopianTree($n) {

	$h=1;

	for ($i=0; $i < $n; $i++) { 
		if($i%2==0){
			$h*=2;
		}else{
			$h++;
		}
	}

	return $h;

}

$n=4;

echo utopianTree($n);