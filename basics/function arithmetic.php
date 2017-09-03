<?php
function add($a , $b){
  return $a+$b;
}
function sub($a , $b){
  return $a-$b;
}
function mul($a , $b){
  return $a*$b;
}
function div($a , $b){
  return $a/$b;//Not Handling Division by zero..Intentionally :D
}
echo add(1,2)."<br>";
echo sub(1,2)."<br>";
echo mul(1,2)."<br>";
echo div(1,2)."<br>";


 ?>
