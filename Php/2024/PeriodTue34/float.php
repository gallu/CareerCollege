<?php  // float.php

$f1 = 0.1;
$f2 = 0.2;
$f = $f1 + $f2;

if (0.3 === $f) {
    echo "equal!! <br>";
} else {
    echo "not equal... ??? <br>";
}

printf("f1 %.28f <br>", $f1);
printf("f2 %.28f <br>", $f2);
printf("f  %.28f <br>", $f);
printf("   %.28f <br>", 0.3);
printf("   %.28f <br>", 0.5);
printf("   %.28f <br>", 0.125);
