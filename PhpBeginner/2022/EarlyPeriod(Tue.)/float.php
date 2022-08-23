<?php   // float.php

$f_1 = 0.1;
$f_2 = 0.2;

//
if (0.3 === ($f_1 + $f_2)) {
    echo "into true <br>";
} else {
    echo "into false <br>";
}

//
printf("%f <br>", 0.1);
printf("%f <br>", 0.2);
printf("%f <br>", 0.1 + 0.2);
printf("%f <br>", 0.3);
//
printf("%.30f <br>", 0.1);
printf("%.30f <br>", 0.2);
printf("%.30f <br>", 0.1 + 0.2);
printf("%.30f <br>", 0.3);





