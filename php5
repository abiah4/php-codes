<?php

//associative array

$capitals = array("KSA"=>"Riyadh",
"Japan"=>"Kyoto",
"South korea"=>"Seoul",
"India"=>"New Delhi");

//$capitals["KSA"] = "Dammam";
//$capitals ["China"] = "Beijang";
//array_pop($capitals
//array_shift($capitals);
//$keys = array_keys($capitals);
//$values = array_values($capitals);
$capitals = array_flip($capitals);

foreach ($capitals as $key => $value){
  echo"{$key} = {$value}";
}

?>