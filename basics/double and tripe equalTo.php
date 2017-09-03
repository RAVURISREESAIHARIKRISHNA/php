<?php
$num = 1;
$var = '1';
if($num == $var){
  echo "==";
}if($num === $var){//Will not Execute
  //Not similar to === in JS
  //Wil compare data types also...
  echo "===";
}
 ?>
