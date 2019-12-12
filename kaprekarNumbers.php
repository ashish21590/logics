<?php

//function kaprekarNumbers($p, $q) {
//    
//    
//    $res = [];
////    if($p ==1){
////        array_push($res,1);
////    }
//    for($i=$p;$i<=$q;$i++){
//        echo $i."</br>";
//        $num = $i*$i;
//        echo $num."</br>";
//        echo strlen($num)."</br>";
//        if(strlen($num)>1){
//            $new = substr($num,0,2);
//            $new2 = substr($num,2,strlen($num));
//            print_r($new);
//            $new = $new + $new2;
//            
////            echo $new."</br>";
//            
//            if($i == $new){
//                array_push($res,$i);
//            }
//            
//        }
//    }
//    
//    print_r($res);
//    
//    if(count($res)>0){
//        return $res;
//    }else{
//        return "INVALID RANGE";
//    }
//
//}

 function kaprekarNumbers($p, $q) {
    
    
     $res = [];
     // if($p ==1){
     //     array_push($res,1);
     // }
     for($i=$p;$i<=$q;$i++){
         $num = $i*$i;
 //        echo strlen($num)."</br>";
 //        if(strlen($num)>1){
             $ne = substr($num,0,strlen($num)/2);
             $new1 = substr($num,strlen($num)/2,strlen($num));
         
         // echo $i."----".$ne."....".$new1."</br>";
             // print_r($new);   
             $new =$ne+$new1;            
             if($i == $new){
                 array_push($res,$i);
             }
            
 //        }
     }
    
     // print_r($res);
    
     if(count($res)>0){
          echo implode(" ",$res);
     }else{
         echo "INVALID RANGE";
     }

 }


// kaprekarNumbers(100,300);
kaprekarNumbers(1,100);