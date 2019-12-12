<?php 

function pickingNumbers($a) {
    
    $memo=array_fill(0, count($a), 0);

    for ($i=0; $i < count($a); $i++) { 
    	if(isset($memo[$a[$i]])){
    		$memo[$a[$i]]+=1;
    	}else{
    		$memo[$a[$i]]=1;
    	}
    }

    	 // print_r($memo); 
    	$result = PHP_INT_MIN;
    	for ($j=1; $j < count($memo); $j++) { 
    	 		// echo $memo[$j]+$memo[$j-1]."</br>";
    	 		$result= max($result,($memo[$j]+$memo[$j-1]));
    	 	
    	 }


    	 return $result; 
    		
    	
}


// $a=[4, 6, 5, 3, 3, 1];
$a = [1,1,2,2,4,4,5,5,5];

echo pickingNumbers($a);