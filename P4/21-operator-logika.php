<?php
$a = 10;
$b = 5;

var_dump($a > 0 && $b > 0);
echo "<br>";

var_dump($a > 0 || $b < 0);
echo "<br>";

var_dump(($a > 0) xor ($b < 0));
echo "<br>";

var_dump(!($a < 0));
?>
