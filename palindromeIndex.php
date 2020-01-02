<?php

function palindromeIndex($s) {

    // echo floor(strlen($s)/2); exit;

	for ($i=0; $i <floor(strlen($s)/2); $i++) { 
				
			echo $s[$i]."-----".$s[strlen($s)-$i-1]."---";

			echo "</br>";
			// echo strlen($s)-$i-1;
			// echo "</br>";
		// if($i<)
			if($s[$i]!=$s[strlen($s)-$i-1]){

				if ($i + 1 < strlen($s)) {
				$isValid = checkPalindrome(substr($s,$i+1,strlen($s)-$i));
                // echo $isValid; exit;
				if($isValid!="A"){
					return $i;
				}else{
					return strlen($s)-$i-1;
				}
			}

			}

	}

	return -1;

}


function checkPalindrome($string){

	// echo $string;
    // $yes = true;

	for ($i=0; $i < floor(strlen($string)/2); $i++) { 
		if($string[$i]!=$string[strlen($string)-$i-1]){
			return "A";
		}
	}

	return "B";
}


$s = "prcoitfiptvcxrvoalqmfpnqyhrubxspplrftomfehbbhefmotfrlppsxburhyqnpfmqlaorxcvtpiftiocrp";

echo palindromeIndex($s);