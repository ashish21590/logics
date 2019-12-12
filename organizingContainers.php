<?php

function organizingContainers($container) {

	    $a = 0;
	    $b = 0;

	   $res = [];
	   $ces = [];

    for($i=0;$i<count($container);++$i){
        for($j=0;$j<count($container);++$j){
        	// echo $i."..".$j."</br>";
        	// echo $container[$i][$j]."</br>";
            $a= $a + $container[$j][$i];
            // $b[$j]+/= $container[$j][$i];

    }

     $res[$i] = $a;

    $a = 0;
}

for($i=0;$i<count($container);++$i){
        for($j=0;$j<count($container);++$j){
        	// echo $i."..".$j."</br>";
        	// echo $container[$i][$j]."</br>";
            $b= $b + $container[$i][$j];
            // $b[$j]+/= $container[$j][$i];

    }

     $ces[$i] = $b;

    $b = 0;
}

// echo $a;



//     for($i=0;$i<count($container);$i++){
//         for($j=0;$j<count($container);$j++){
//         	// echo $i."..".$j."</br>";
//         	echo $container[$j][$i]."</br>";
//             $b+= $container[$j][$i];
//             // $b[$j]+= $container[$j][$i];

//     }
    

// }
	
	$yes = "";
	for ($i=0; $i <count($res); $i++) { 
			if($res[$i] !=$ces[$i]){
				$yes ="Impossible";
				break;
			}else{
				$yes = "Possible";
			}
	}

	return $yes;
}

$container = array( array(0,2,1),array(1,1,1),array(2,0,0));
// $container = array( array(1,3,1),array(2,1,2),array(3,3,3));


echo organizingContainers($container);


