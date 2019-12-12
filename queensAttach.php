<?php

function queensAttack($n, $k, $r_q, $c_q, $obstacles) {

	// counting right to the queen
	$count=0;
	// for($i=$r_q;$i<=$r_q;$i++){
	  if($c_q <= $n){
		for ($j=$c_q+1; $j <=$n ; $j++) { 
		 if(validMove($obstacles,$r_q,$j)){
	          $count++;
	      }else{
	          break;
	      }
		}
	}
	// }




	// echo $count;
	// counting left to the queen
	// for($i=$r_q;$i<=$r_q;$i++){
		for ($j=$c_q-1; $j >=1 ; $j--) { 			
		 if(validMove($obstacles,$r_q,$j)){
	          $count++;
	      }else{
	          break;
	      }
		}
	// }
// echo $count; exit;
	// up to the queen.



		if($r_q<$n){
			for ($j=$r_q+1; $j <=$n ; $j++) { 			
			 if(validMove($obstacles,$j,$c_q)){
		          $count++;
		      }else{
		          break;
		      }
			}
		}
// echo $count; exit;
	// down to the queen





		if($r_q>=1){
			for ($j=$r_q-1; $j >=1 ; $j--) { 			
			 if(validMove($obstacles,$j,$c_q)){
		          $count++;
		      }else{
		          break;
		      }
			}
		}






// dia right up
		if($r_q>1 && $c_q<$n){
			for($i=$r_q,$j=$c_q;($i>=2) && ($j<$n-1);$i--,$j++){
				if(validMove($obstacles,$i-1,$j+1)){
		          $count++;
		      }else{
		          break;
		      }	
			}
		}







		// dia right down to queen
		if($r_q<$n && $c_q>1){
			for($i=$r_q,$j=$c_q;($i<=$n-1) && ($j>=2);$i--,$j--){
				if(validMove($obstacles,$i+1,$j-1)){
		          $count++;
		      }else{
		          break;
		      }	
			}
		}


// 5	1(5,1) 2(5,2) 3(5,3) 4(5,4) 5(5,5)
// 4	1(4,1) 2(4,2) q3(4,3) 4(4,4) 5(4,5)
// 3	1(3,1) 2(3,2) 3(3,3) 4(3,4) 5(3,5)
// 2	1(2,1) 2(2,2) 3(2,3) 4(2,4) 5(2,5)
// 1	1(1,1) 2(1,2) 3(1,3) 4(1,4) 5(1,5)
// r   c
// q(4,3)

// 5 5
// 4 2
// 2 3

// echo $count; exit;
		// dia left up 

		if($r_q>=1 && $c_q>=1){
			for($i=$r_q,$j=$c_q;($i<=$n) && ($j>=2);$i--,$j--){
				if(validMove($obstacles,$i+1,$j-1)){
		          $count++;
		      }else{
		          break;
		      }	
			}
		}



		//dialeftdown



		if($r_q<$n && $c_q<$n){
			for($i=$r_q,$j=$c_q;($i<$n-1) && ($j<=$n-1);$i++,$j++){
				if(validMove($obstacles,$i+1,$j+1)){
		          $count++;
		      }else{
		          break;
		      }	
			}
		}



	// 








	return $count;



}



$n = 5;
$k = 3;
$r_q = 4;
$c_q = 3;

$obstacles = array(array(5,5),array(4,2),array(2,3));

echo queensAttack($n, $k, $r_q, $c_q, $obstacles);


// 5	1(5,1) 2(5,2) 3(5,3) 4(5,4) 5(5,5)
// 4	1(4,1) 2(4,2) q3(4,3) 4(4,4) 5(4,5)
// 3	1(3,1) 2(3,2) 3(3,3) 4(3,4) 5(3,5)
// 2	1(2,1) 2(2,2) 3(2,3) 4(2,4) 5(2,5)
// 1	1(1,1) 2(1,2) 3(1,3) 4(1,4) 5(1,5)
// r   c
// q(4,3)


function validMove($obstacles , $row , $column){
    for($i = 0 ; $i < count($obstacles) ; $i++){
        if($obstacles[$i][0] == $row && $obstacles[$i][1] == $column){
            return false;                
        }            
    }
    return true;
}