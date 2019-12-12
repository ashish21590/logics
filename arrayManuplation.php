<?php
// error_reporting(0);

$array=array
  (
	  array(2,6,8),
    array(3,5,7),
	  array(1,8,1),
	  array(5,9,15)
  );


  $resultArray=array_fill(0, 12, 0);

  for ($i=0; $i < count($array) ; $i++) { 
  	
  		$a=$array[$i][0];
  		$b=$array[$i][1];
  		$k=$array[$i][2];
  		$resultArray[$a]+=$k;
  		$resultArray[$b+1]-=$k;
  }


// print_r($resultArray); 
  $sum = 0;
  $max = 0; 
  for ($j=0; $j <count($resultArray) ; $j++) { 
  	$sum=$sum+$resultArray[$j];
    // echo $sum."</br>";
     $max = max($sum,$max);  
  	// $max =max($sum);
  }

  echo $max;
   

