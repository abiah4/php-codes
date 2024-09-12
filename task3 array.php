<?php
	 
	 //remove specific elemnt
	 $myarray = [];
	 $myarray [] = "pink";
	 $myarray [] = "black";
	 $myarray [] = "purple";
	 $myarray [] = "yellow";
	 $myarray [] = "green";
	 
	 print_r ($myarray);
	 
	 unset($myarray[4]);
	 
	 print_r ($myarray);
	 
	 //find wether an array is subset
	 
	 function subset1array($subset , $array){
	   
	   $diff = array_diff($subset , $array);
	   
	   return empty ($diff);
	 }
	 
	 $array2 = [1 , 2 , 3 , 4 , 5];
	 $subset2 = [4 , 5];
	 
	if(subset1array($subset2 , $array2)){
	  echo "The array is subset of the main ";
	}else {
	 echo "The array is NOT subset of the main";
	}
	
	//delete an element 
	
	$x = array(1 , 2 , 3 , 4 , 5);
	
	echo "array\n";
	print_r($x);
	
	$deleteE = array_search(4,$x);
	
	if ($deleteE !== false){
	  unset ($x [$deleteE]);
	  
	  $x = array_values($x);
	}
	
	echo "array after delete element";
	print_r($x);
	 
?>