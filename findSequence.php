<?php

// $string="192021";

$string="123124";

$subString="";

for ($i=1; $i <= ceil((strlen($string)/2)); $i++) { 

	// echo $i."</br>";

	// echo $string[$i]; exit;
			
			 $subString = substr($string,0,$i)."</br>";
			 // echo $subString; exit;
			  $validateString = substr($string,0,$i); 
			 $num = (int) $subString;

			while(strlen($validateString)< strlen($string)) {
				
				 $validateString.= ++$num;

			}

			if($string==$validateString){
				echo "Valid";
			}

}
// echo $validateString;
echo $subString;
