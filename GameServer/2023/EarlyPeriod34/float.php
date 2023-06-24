<?php  // float.php

$f1 = 0.1;
$f2 = 0.2;
$f3 = 0.3;

if ($f3 === ($f2 + $f1)) {
    echo "into true<br>";
} else {
    echo "into false<br>";
}

printf("%.28f<br>\n", $f1);
printf("%.28f<br>\n", $f2);
printf("%.28f<br>\n", $f1 + $f2);
printf("%.28f<br>\n", $f3);
