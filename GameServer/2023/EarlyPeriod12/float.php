<?php  // float.php

$f1 = 0.1 + 0.2;
$f2 = 0.3;
echo "{$f1}, {$f2} <br>\n";

var_dump($f1 === $f2);
echo "<br> \n";

printf("%.32f <br>\n", 0.1);
printf("%.32f <br>\n", 0.2);
printf("%.32f <br>\n", 0.3);
printf("%.32f <br>\n", $f1);
printf("%.32f <br>\n", 0.125);

