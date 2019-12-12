<?php

function catAndMouse($x, $y, $z) {

     $catA= abs($z-$x);
     $catB = abs($z-$y);
     if($catA>$catB){
         return "Cat B";
     }else if($catB>$catA){
         return "Cat A";
     }else{
         return "Mouse C";
     }

}

echo catAndMouse(1,2,3);


