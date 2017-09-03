<?php
$my_var = 'Hello World';
 ?>

<!-- This is Correct Way....
We must echo the variable... -->
 <input type="text" value="<?php echo $my_var ?>">

 <!-- This is Wrong...
 this will produce
 <input type="text" value="">
  -->
 <input type="text" value="<?php $my_var ?>">
