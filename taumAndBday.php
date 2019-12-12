<?php

function taumBday($b, $w, $bc, $wc, $z) {
    
    if( ($bc<$wc) && ($z>$bc) && ($z>$wc)){
    	// echo "A";
    	return $b*$bc+$w*$wc;
    } else if ( $bc>($wc+$z) && ($bc != $wc) ){
    	// echo "B";
    	return $b*$bc+$w*($bc+$z);
    }else if(  ($bc<$wc+$z) && ($bc == $wc)){
    	// echo "C";
    	return $b*$bc+$w*$wc;
    } else if(($bc>$wc+$z) && ($bc != $wc)){
    	return $b *($wc+$z) + $w*$wc;
    }else{
    	return $b*$bc+$w*$wc;
    } 

}



$b = 613;
$w = 304;
$bc = 7580;
$wc = 1326;
$z = 6548;

echo taumBday($b,$w,$bc,$wc,$z);