<?php  // float.php

$f1 = 0.1;
$f2 = 0.2;
$f3 = 0.3;
$f = $f1 + $f2;
//
echo "{$f1} + {$f2} = {$f} <br>";
echo "f3 is {$f3} <br>";

if ($f === $f3) {
    echo "ok<br>";
} else {
    echo "ng<br>";
}

printf("f1: %.28f <br>", $f1);
printf("f2: %.28f <br>", $f2);
printf("f3: %.28f <br>", $f3);
printf("f: %.28f <br>", $f);

//
$ep = 0.0001; // 許容誤差
if ($ep >= abs($f - $f3)) {
    echo "ok<br>";
} else {
    echo "ng<br>";
}
