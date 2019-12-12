<?php

/*

int main() {
    long int n;
    cin >> n;
    
    string ar[n];
    
    for(long int i = 0; i < n/2; i++){
        int x;
        cin >> x;
        
        string s;
        cin >> s;
        
        ar[x] = ar[x] + "-" + " ";
        
    }

    
    for(long int i = n/2; i < n; i++){
        int x;
        cin >> x;
        
        string s;
        cin >> s;

        ar[x] = ar[x] + s + " ";
        
    }
    
    
    for(int i = 0; i < n; i++)
        cout << ar[i];

    return 0;
}

*/


// $arr = array(array(0,'a'),array(1,'b'),array(0,'c'),array(1,'d'));
$arr= array(
    array(0,'ab'),
    array(6,'cd'),
    array(0,'ef'),
    array(6,'gh'),
    array(4,'ij'),
    array(0,'ab'),
    array(6,'cd'),
    array(0,'ef'),
    array(6,'gh'),
    array(0,'ij'),
    array(4,'that'),
    array(3,'be'),
    array(0,'to'),
    array(1,'be'),
    array(5,'question'),
    array(1,'or'),
    array(2,'not'),
    array(4,'is'),
    array(2,'to'),
    array(4,'the'));

$result = array_fill(0,count($arr)-1,0);
$output=array_fill(0,count($arr)-1,0);
$r="";

for($i=0;$i<count($arr);$i++){
  $result[$arr[$i][0]]++;      
}

// print_r($result);

for($i=1;$i<count($result);$i++){
    $result[$i] = $result[$i]+$result[$i-1];

}

// print_r($result); exit;

// $output[ $newArray[$arr[$i]]-1] = $arr[$i];
// 2

for($i = count($arr)-1; $i >= 0; $i--) 
{  
    // echo $arr[$i][1]."</br>";
    // echo ($arr[$i][1]-1)."</br>";
    // echo $result[$arr[$i][1]]-1 ."</br>"; exit;
      $output[$result[$arr[$i][0]]-1] = $arr[$i][1];
      $result[$arr[$i][0]]--;
} 
// print_r($result);
print_r($output);
$string= [];
for($i=0;$i<count($arr);$i++){
     $e =  array_search($arr[$i][1],$output);
   echo $e."</br>";
    // echo $output[$arr[$i][1]]."</br>";
    // if($e>=count($arr)/2){

    //     echo $output[$i]."</br>";
    //     echo $output[$i];
    //       $string[$i] = $output[$e];
    // }else{
    //     $string[$i] = '-';
    // }
}


// echo $string;
// print_r($string);

echo implode(" ",$string);