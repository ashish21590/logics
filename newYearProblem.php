<?php 

// $arr = [1,2,3,5,4,6,7];

// $arr = [5,1,2, 3, 7, 8, 6, 4];  //3 
// $arr = [1,5,3,2,4];

// $swipe = 0;

// $swipeArray = [];
// for ($i=0; $i <count($arr); $i++) { 

// 		$no = 0;
// 		for ($j=0; $j <count($arr); $j++) { 
					
// 					if($arr[$i]<$arr[$j]){
// 						$temp = $arr[$i];
// 						$arr[$i] = $arr[$j];
// 						$arr[$j] = $temp; 
// 						$no++;
// 						$swipeArray[$i] = $no;
// 						$swipe++;
// 						echo $i."..".$j."</br>";
// 					}
// 		}
// }

//  // print_r($arr);


// print_r($swipeArray);

// echo $swipe;

// $echo "";

// $arr = [ 1, 2, 5, 3, 7, 8, 6,4];

// $value = 0;
// for ($i=1; $i <count($arr) ; $i++) { 
// 	$diff = $arr[$i] - $i;
// 	if($diff>$value){
// 		$value = $diff;

// 	}
// }

// if($value>2){
// 	echo "Too chaotic"."</br>";
// }else{
// 	echo $value."</br>";
// }
// $arr =[2,5,1,3,4];

$arr = [2,1,5,3,4];
// $arr =  [1, 2, 5, 3, 4, 7, 8, 6]; 
// $arr= [2, 5, 1, 3, 4];
$swapCount=0;
$flag = 0;
for ($i=count($arr)-1; $i >= 0 ; $i--) { 
	
	if($arr[$i]!=$i+1){

			if( (($i-1)>=0) && $arr[$i-1] == ($i+1) ){
					    $swapCount++;
						$temp = $arr[$i];
						$arr[$i] = $arr[$i-1];
						$arr[$i-1] = $temp;


			}else if((($i-2)>=0) && $arr[$i-2] ==($i+1)){

				        $swapCount+= 2;
				        
					    $temp = $arr[$i-2];
						$arr[$i-2] = $arr[$i-1];
						$arr[$i-1] = $temp;

						$temp = $arr[$i-1];
						$arr[$i-1] = $arr[$i];
						$arr[$i] = $temp;

			}else if($arr[$i-1]!=($i+1) && $arr[$i-2] !=($i+1)){
			
			echo "To chaotic";
			return;
			// return;
			// return;
			
		}

	}
}

echo $swapCount;



// print_r($arr);