<?php  // float.php

// 浮動小数点数
$f1 = 0.1;
$f2 = 0.2;
$f3 = $f1 + $f2;

if ($f3 === 0.3) {
    echo "ok";
} else {
    echo "ng?";
}
echo "<br>";

printf("f1: %.28f <br>", $f1);
printf("f2: %.28f <br>", $f2);
printf("f3: %.28f <br>", $f3);
printf(".3: %.28f <br>", 0.3);
