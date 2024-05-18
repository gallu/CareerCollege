<?php   // float.php

$f_1 = 0.1;
$f_2 = 0.2;

$f = $f_1 + $f_2;

if (0.3 === $f) {
    echo "等しいよねぇ <br>";
} else {
    echo "なんで違う？ <br>";
}

printf("%.28f <br>", $f_1);
printf("%.28f <br>", $f_2);
printf("%.28f <br>", $f);
printf("%.28f <br>", 0.3);
