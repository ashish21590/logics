<?php
function dayOfProgrammer($year) {


	$normal= 243;
	$leapYear = 244;


 

	if((($year <= 1917) && ($year%4 == 0)) || (($year%400 == 0) || (($year%4 ==0) & ($year%100 != 0)))){
		return $day = 256 -$leapYear; 
	}else if($year==1918){
		return $day= 256+13-243;
	}else{
		return $day = 256-$normal;
	}

	return $day.".09.".$year;

}


echo dayOfProgrammer(1918);

