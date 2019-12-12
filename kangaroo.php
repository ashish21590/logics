<?php

function kangaroo($x1, $v1, $x2, $v2) {

		if($v1>$v2){

		  $REMINDER =  ($x1-$x2)%($v2-$v1);
		  
		  if($REMINDER==0){
		  	return "YES";
		  } 
		}
		  
		 return "NO";
		 

}

// v=d/t;
echo kangaroo(0,2,5,3);