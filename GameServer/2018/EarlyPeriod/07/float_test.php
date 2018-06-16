<?php   // float_test.php

//
$v = 0.1 + 0.2 + 0.3;
printf("%.26f<br>\n", $v);
printf("%.26f<br>\n", 0.6);

if (0.6 === $v) {
    echo "ok\n";
} else {
    echo "ng\n";
}
//
if ( (0.1 + 0.2) === 0.3) {
    echo "ok\n";
} else {
    echo "ng\n";
}

