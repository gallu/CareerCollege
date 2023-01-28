<?php  // float.php

$f = 0.1 + 0.2;
if (0.3 === $f) {
    echo '(0.1 + 0.2) === 0.3';
} else {
    echo '(0.1 + 0.2) !== 0.3 ...???';
}
var_dump($f, 0.3);
echo "<br>\n";
printf("%.32f <br>\n", $f);
printf("%.32f <br>\n", 0.3);
//
$f2 = 0.125 + 0.125;
if (0.25 === $f2) {
    echo "true <br>\n";
} else {
    echo "false <br>\n";
}
printf("%.32f <br>\n", $f2);
printf("%.32f <br>\n", 0.25);



