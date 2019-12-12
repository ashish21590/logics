<?php

function designerPdfViewer($h, $word) {
   $width = strlen($word);
    $height = 0;
    
    for($i=0; $i < $width; $i++){
        // echo ord($word[$i])."</br>";
        // echo $h[ord($word[$i])-97]."</br>";
        if($h[ord($word[$i])-97] > $height){
            $height = $h[ord($word[$i])-97];
        }
    }
    
    return $width * $height;
}

$word="zaba";
$h = [1, 3, 1, 3, 1, 4, 1, 3, 2, 5, 5, 5, 5, 5, 5, 5, 5, 5, 5, 5, 5, 5, 5, 5, 5, 7];
echo designerPdfViewer($h,$word);