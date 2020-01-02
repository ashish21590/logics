<?php 

function acmTeam($topic) {

	$res = 0;
	$teamCount = 0;
	for ($i=0; $i <count($topic)-1; $i++) { 
		$tempResult = 0;
		for ($j=0; $j < count($topic[$i]); $j++) { 
			
			// echo $topic[$i][$j]."---".$topic[$i+1][$j]."</br>";
			if($topic[$i][$j] == 1 || $topic[$i+1][$j] == 1){
				$tempResult++;
			}
			// echo $topic[$i+1][$j]."</br>";
			
		}

		echo $tempResult."</br>";

		$teamCount = max($tempResult,$teamCount);
		echo $teamCount."</br>";
		if($tempResult > $teamCount ){
			$res++;
		}else{
			$res = 1;
		}

		// echo $tempResult."</br>";
	}


	$myArray = [$res,$teamCount];


	return $myArray;

}

$topic = array(
	array(1,0,1,0,1),
	array(1,1,1,0,0),
	array(1,1,0,1,0),
	array(0,0,1,0,1),
	array(1,1,0,1,0),
);


$result = acmTeam($topic);

print_r($result);