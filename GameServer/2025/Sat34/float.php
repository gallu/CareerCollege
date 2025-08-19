<?php  // float.php

$f1 = 0.1;
$f2 = 0.2;

var_dump( 0.3 === ($f1 + $f2) );
echo "<br>";

printf("%.28f <br>", $f1);
printf("%.28f <br>", $f2);
printf("%.28f <br>", $f1 + $f2);
printf("%.28f <br>", 0.3);
