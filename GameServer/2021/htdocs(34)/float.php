<?php   // float.php

$f = 0.1 + 0.2;
if (0.3 === $f) {
    echo "ok <br>\n";
} else {
    echo "ng??? <br>\n";
}
//
printf("%.32f <br>\n", $f);
printf("%.32f <br>\n", 0.3);

