<?php

function angryProfessor($k, $a) {

	$onTimeStudent = 0;

	for ($i=0; $i < count($a); $i++) { 
		
		if($a[$i]<=0){
			$onTimeStudent++;
		}
	}

	if($k>$onTimeStudent){
		return "YES";
	}else{
		return "NO";
	}

}

$a = [0, -1, 2, 1];
$k =2;
echo angryProfessor($k,$a);