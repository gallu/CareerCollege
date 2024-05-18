<?php  // if5.php

$f1 = 0.1;
$f2 = 0.2;
$f = $f1 + $f2;

if (0.3 === $f) {
    echo "当然の一致";
} else {
    echo "不一致……だと？";
}

echo "<br>";
printf("%.32f <br>", $f1);
printf("%.32f <br>", $f2);
printf("%.32f <br>", $f);
printf("%.32f <br>", 0.3);

