<?php
//loop
$n = 4;
$x = 8;

for($i=1;$i<=$n-1;$i++)
{
  $x*=($i+1);
}

echo "Factorial of $n = $x";

//function recursive

function Factorial($n){
   
   if ( $n <= 1){
     return 1;
   }
   else{
     return $n * Factorial($n - 1);
   }
 }
 
 $test = 9;
 echo "Factorial of $test is " . Factorial($test);

?>