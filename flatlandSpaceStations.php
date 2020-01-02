<?php


function flatlandSpaceStations($n, $c) {

    

    $arr = explode(" ", $c);
    // if($n ==count($arr)){
    //     return 0;
    // }

    sort($arr);
    // echo count($arr); exit;
    $maxDistance = $arr[0];
    // $res = [];
     // Arrays.sort(arr);
 //    int maxDistance = arr[0];
 //    for(int i = 1; i < arr.length; i++){
 //        int distance = (arr[i] - arr[i-1]) / 2;
 //        if(maxDistance < distance) maxDistance = distance;
 //    }
 //    int lastGap = (n-1) - arr[arr.length - 1];
 //    return (lastGap < maxDistance) ? maxDistance : lastGap;
 
    	for($j=1;$j<count($arr);$j++){
    		// echo $arr[$j]."</br>";
    		$distance = floor(($arr[$j]-$arr[$j-1])/2);
    		if($maxDistance <$distance){
    			$maxDistance = $distance;
    		}
    	
	    		
    	}

    	// echo $maxDistance; exit;

    	$lastGap = ($n-1) -count($arr)-1;
    	return ($lastGap<$maxDistance) ? $maxDistance : $lastGap;

    

    	// $min = min($arr[$i+1]-$arr[0],count($arr)-$arr[$i]);
    	// array_push($res,$min); 
    

  
    


}

$n = 20;

// $c = "71 72 0 28 79 4 73 56 78 83 95 26 49 27 91 77 16 20 87 63 33 36 7 23 92 74 80 68 57 62 52 84 50 13 69 39 90 55 17 64 81 22 88 8 46 85 44 96 35 47 89 93 11 75 38 29 86 19 70 42 30 58 82 76 48 54 9";
$c = "13 1 11 10 6";

echo flatlandSpaceStations($n,$c);


 // Arrays.sort(arr);
 //    int maxDistance = arr[0];
 //    for(int i = 1; i < arr.length; i++){
 //        int distance = (arr[i] - arr[i-1]) / 2;
 //        if(maxDistance < distance) maxDistance = distance;
 //    }
 //    int lastGap = (n-1) - arr[arr.length - 1];
 //    return (lastGap < maxDistance) ? maxDistance : lastGap;