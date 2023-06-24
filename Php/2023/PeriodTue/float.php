<?php  // float.php

$f1 = 0.1;
$f2 = 0.2;
$f3 = 0.3;

if (($f1 + $f2) === $f3) {
    echo "into true <br>\n";
} else {
    echo "into false <br>\n";
}

printf("%.32f <br>\n", $f1);
printf("%.32f <br>\n", $f2);
printf("%.32f <br>\n", $f1 + $f2);
printf("%.32f <br>\n", $f3);
