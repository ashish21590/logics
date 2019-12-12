<?php
error_reporting(0);
$s = [h,a,c,k,e,r,h,a,p,p,y];
$t = [h,a,c,k,e,r,r,a,n,k];

$newS = [];
$newT = [];

for ($i=0; $i < count($t); $i++) {
	if(!isset($t[$i])){
		$newT[$t[$i]]=1;
	}else{
		$newT[$t[$i]]++;
	}
}


for ($i=0; $i < count($s); $i++) { 
	if(!isset($s[$i])){
		$newS[$s[$i]]=1;
	}else{
		$newS[$s[$i]]++;
	}	
}

$spend = 0;
foreach ($newT as $key => $value) {
	// echo $key;
	// echo $newS[$key]; exit;
		if($newS[$key]>$value){
			$spend+=$newS[$key] - $value;
		}else if($newS[$key]<$value){
			$spend+= $value-$newS[$key];
		}	
}

echo $spend;




print_r($newS);
print_r($newT);
// $count=0;
// for ($i=0; $i < count($s); $i++) { 
// 	 if($s[$i]==$t[$i]){
//         $count++;
//     }
//     else{
//         break;
//     }
// }

// // if(parseInt(l1-count)+parseInt(l2-count)<=k){
// //     if(parseInt(l1)+parseInt(l2)<=k){
// //     return "Yes";
// //     }
// //     else if((k-(parseInt(l1-count)+parseInt(l2-count)))%2==0){
// //         return "Yes";
// //     }
// //     else return "No";
// // }
// // else{
// //     return "No";
// // }


// echo $count;
