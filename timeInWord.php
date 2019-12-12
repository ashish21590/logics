<?php

function timeInWords($h, $m) {

	$arr= array(1=>"one",2=>"two",3=>"three",4=>"four",5=>"five",6=>"six",7=>"seven",8=>"eight",9=>"nine",10=>"ten",11=>"eleven",12=>"tweleve",13=>"thirteen",14=>"fourteen",15=>"fifteen",16=>"sixteen",17=>"seventeen",18=>"eighteen",19=>"ninteen",20=>"twenty",21=>"twenty",21=>"twenty one",22=>"twenty two",23=>"twenty three",24=>"twenty four",25=>"twenty five",26=>"twenty six",27=>"twenty seven",28=>"twenty eight",29=>"twenty nine");

	// print_r($arr);

	if($m=='0'){
		return $arr[$h]." o' clock";
	}
	if($m==30){
		return "half past ".$arr[$h];
	}
	if($m==15){
		return "quarter past ".$arr[$h];
	}

	if($m==45){
		return "quarter to ".$arr[$h+1];
	}


	if($m!=30 && $m!=15 && $m!=45){
		if($m<30 && $m>1){
			return $arr[$m]." minutes past ".$arr[$h];
		}  else if($m<30 && $m==1){
			return $arr[$m]." minute past ".$arr[$h];
		} else if($m>30){
			return $arr[60-$m]." minutes to ".$arr[$h+1];
		}
	}

}


$h = 5;
$m=1;
echo timeInWords($h,$m);