<?php

function climbingLeaderboard($scores, $alice) {

	$rank =array_fill(0, count($scores), 0);
	$rank[0] = 1;

	for ($i=1; $i < count($scores); $i++) { 
			if($scores[$i] == $scores[$i-1] ){
				$rank[$i]=$rank[$i-1];	
			}else{
				$rank[$i]=$rank[$i-1]+1;
			}
			
	}

	// print_r($rank);

	$res = array_fill(0,count($alice), 0);

	for ($j=0; $j < count($alice); $j++) { 
		if($alice[$j] > $scores[0]){
			$res[$j] = 1;
		}else if($alice[$j]<count($scores)-1){
			$res[$j] = $rank[count($scores)-1]+1;
		}else{
			$index = binarySearch($scores,$alice[$j]);
			// echo $index."</br>";
			if(isset($rank[$index])){
				$res[$j]=$rank[$index]; 
			}else{
				$res[$j]=count($rank); 
			}
		}
	}

	return $res;

}

 function binarySearch($scores,$alice)
		{
		$low = 0;
		$hi = count($scores)-1;
		
		

		while ($low<=$hi) {
			$mid = ceil($low+($hi-$low)/2);
			if( $alice==$scores[$mid]){
				return $mid;
			}else if($scores[$mid]< $alice && $alice< $scores[$mid-1]){
				// echo "Ashish".$mid."Ashish";
					return $mid;
			}else if($scores[$mid]>$alice && $alice>=$scores[$mid+1]){
				return $mid+1;
			} else if($scores[$mid]<$alice){
				$hi = $mid-1;
			}else if($scores[$mid]>$alice){
				$low=$mid+1;
			}

		}
		return -1;
	}
	// print_r($rank);



$scores = [100, 90, 90, 80, 75, 60];
$alice = [50, 65, 77, 90, 102];

$r = climbingLeaderboard($scores,$alice);

echo implode(" ", $r);

