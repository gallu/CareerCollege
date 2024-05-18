<?php  // float.php

$f1 = 0.1;
$f2 = 0.2;
$f = $f1 + $f2;

if (0.3 === $f) {
    echo "等しい <br>";
} else {
    echo "等しくない？？？ <br>";
}

printf("%.28f <br>", $f1);
printf("%.28f <br>", $f2);
printf("%.28f <br>", $f);
printf("%.28f <br>", 0.3);

echo floor(1) , "<br>";
echo floor(0.1+0.1+0.1+0.1+0.1+0.1+0.1+0.1+0.1+0.1) , "<br>";
printf("%.28f <br>", 0.1+0.1+0.1+0.1+0.1+0.1+0.1+0.1+0.1+0.1);

