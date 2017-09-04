<?php
$string = " Hari is a good boy ";
$string_trim = trim($string);
$string_rtrim = rtrim($string);
$string_ltrim = ltrim($string);

echo strlen($string)."<br>".strlen($string_trim)."<br>".strlen($string_rtrim)."<br>".strlen($string_ltrim)."<br>";

echo $string_trim."<br>".$string_rtrim."<br>".$string_rtrim;
 ?>
