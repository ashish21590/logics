<?php 

$ar =[10, 20, 20, 10, 10, 30, 50, 10, 20];

$memo=[];

for ($i=0; $i <count($ar) ; $i++) { 
		
		if(isset($memo[$ar[$i]])){
			$memo[$ar[$i]]++;
		}else{
			$memo[$ar[$i]]=1;
		}
}

$c=0;

foreach ($memo as $me) {
	if($me%2==0){
		$c+=$me/2;
	}
	else if ($me>1) {
		$n= floor(($me/2));

		$c+=$n;
	}

	
}

echo $c;


print_r($memo);
