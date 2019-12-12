<?php
error_reporting(0);
$arrayLength=5;
$array=array
  (
	  array(1,2,100),
	  array(2,5,100),
	  array(3,4,100)
  );
  $resultArray=[0,0,0,0,0];

  for ($i=0; $i <=count($array)-1; $i++) { 
  			
  			// echo $array[$i][0];
  			// echo $array[$i][1];

  			for ($j=$array[$i][0]; $j <=$array[$i][1] ; $j++) { 
  						
  				$resultArray[$j]= $resultArray[$j]+$array[$i][2];
  			}

  }


 $sum = 0;
  $max;
  for ($j=0; $j <count($resultArray) ; $j++) { 
  			
  			if($sum==0){
  				$sum=$resultArray[$j];
  			}else if($sum<$resultArray[$j]){
  				$sum=$resultArray[$j];
  			}

  	// $max =max($sum);
  }


echo $sum;

  // print_r($sum);
