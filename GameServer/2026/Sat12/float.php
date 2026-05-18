<?php  // float.php

$f1 = 0.1;
$f2 = 0.2;
$f3 = 0.3;
$f12 = $f1 + $f2;

if ($f3 === $f12) {
	echo "into true <br>";
} else {
	echo "into false <br>";
}

printf("%.28f <br>", $f1);
printf("%.28f <br>", $f2);
printf("%.28f <br>", $f3);
printf("%.28f <br>", $f12);

printf("%.28f <br>", 0.1+0.1+0.1+0.1+0.1+0.1+0.1+0.1+0.1+0.1);
