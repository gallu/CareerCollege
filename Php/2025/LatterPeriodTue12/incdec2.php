<?php  // incdec2.php

$i = 1;
$j = ++$i * ++$i; // 2 * 3
echo "j is {$j} <br>";


$i = 1;
$j = $i++ * $i++; // 1 * 2
echo "j is {$j} <br>";
