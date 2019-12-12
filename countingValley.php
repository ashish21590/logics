<?php

function countingValleys($n, $s) {

		$alt=0;
		$valCounter=0;

		for ($i=0; $i <strlen($s) ; $i++) { 
					
					if($s[$i]=="U"){
						$alt++;
							if($alt==0){
									$valCounter++;
							}
					}else{
						$alt--;
					}
		}

		return $valCounter;

}

$s = "UDDDUDUU";
echo countingValleys(8,$s);