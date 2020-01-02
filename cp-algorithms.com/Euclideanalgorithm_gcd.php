
<?php 
// PHP program to find GCD  
// of two numbers 
  
// Recursive function to  
// return gcd of a and b 
function gcd($a, $b) 
{ 

	// echo $a."--".$b."</br>";
    // Everything divides 0 
    if($b==0) 
        return $a ; 
  
    return gcd( $b , $a % $b ) ; 
} 
  
// Driver code 
$a = 56 ; 
$b = 98 ; 
  
echo "GCD of $a and $b is ", gcd($a , $b) ; 
  
// This code is contributed by Anivesh Tiwari 
?> 

<!-- step 1

  56 98%56 =42

step 2

  42 56%42 = 14

step 3
 
  14 42%14 = 0
 -->
