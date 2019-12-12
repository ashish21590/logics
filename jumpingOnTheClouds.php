<?php 

// $c = [0, 0, 1, 0, 0, 1, 0];

// $c = [0, 0, 0, 1, 0, 0];

$c = [0, 0, 1, 0, 0, 1, 0];

// function jumpingOnClouds($c) {
// $minJump=0;
// 	for ($i=0; $i <count($c)-2 ; $i++) { 
		

// 			if($c[$i+1]==0 && $c[$i+2]==0 ){

// 				// echo $c[$i]; exit; 
// 				$minJump=$minJump+1;
// 				$i++;
// 			}else if($c[$i+1]==1 && $c[$i+2]==0){
// 				$minJump=$minJump+2;
// 				$i+=2;
// 			}
// 	}


// 	return $minJump;



// }


function jumpingOnClouds($c) {
$minJump=0;
    $i=0;
    while($i<count($c)-1){
        if($i+2==count($c) || $c[$i+2]==1){
            $i++;
            $minJump++;
        }else{
            $i+=2;
            $minJump++;
        }
    }


    return $minJump;


}

echo jumpingOnClouds($c);



