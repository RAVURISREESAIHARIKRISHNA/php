<?php
$arr = array(11=>array(12,13),21=>array(22,23),31=>array(32,33));
foreach($arr as $element => $inner_element){
  echo $element."<br>";//outputs
  // $
  // 21
  // 31
  //To get inner_elements
  foreach($inner_element as $x){
    echo "..$x <br>";
  }
}
 ?>
