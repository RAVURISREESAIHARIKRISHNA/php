<?php
$a = 4;
echo $a;//Prints 4
function dummy(){
  global $a;//Making $a global.Without this there is no $a available here...
  echo "dummy() says $a";
}

 ?>
