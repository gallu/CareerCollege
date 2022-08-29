<?php  // float.php

$f_1 = 0.1;
$f_2 = 0.2;
$f_3 = $f_1 + $f_2;
var_dump($f_3);
//
if (0.3 === $f_3) {
    echo "equal<br>";
} else {
    echo "NOT!! equal<br>";
}
//
printf("%f <br>", 0.1);
printf("%f <br>", 0.2);
printf("%f <br>", 0.1 + 0.2);
printf("%f <br>", 0.3);

echo "<br>";
printf("%.28f <br>", 0.1);
printf("%.28f <br>", 0.2);
printf("%.28f <br>", 0.1 + 0.2);
printf("%.28f <br>", 0.3);
