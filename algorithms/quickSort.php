<?php 

function quickSort($arr,$left,$right){

	if($left>=$right){
		return;
	}

	$pivot = $arr[floor(count($arr)/2)];
	echo "test";
	$index = partition($arr,$left,$right,$pivot);
	echo $index."</br>";
	quickSort($arr,$left,$index-1);
	quickSort($arr,$index,$right);


}


function partition($arr,$left,$right,$pivot){

	
	while($left<=$right){
		while ($arr[$left]<$pivot) {
				$left++;
		}

	

		while ($arr[$right]>$pivot) {
			// echo $arr[$right]."</br>";
				$right--;
		}


			// echo $left."==".$right."--".$pivot."</br>"; 

		// echo "Ashish"; exit;

		if($left<= $right){
			$temp = $arr[$left];
			$arr[$left] = $arr[$right];
			$arr[$right] = $temp;

			$left++;
			$right--;			
		}

		echo $left."----".$right."</br>";

	}

	return $left;
}


$arr = [7,6,84,23,55,33];

$left = 0;
$right = count($arr)-1;

$result = quickSort($arr,$left,$right);

print_r($result);