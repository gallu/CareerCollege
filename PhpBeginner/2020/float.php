<?php  // float.php
// http://dev2.m-fr.net/XXXX/float.php

$f1 = 0.1 + 0.2;
$f2 = 0.3;
//
if ($f1 == $f2) {
    echo "equal<br>";
} else {
    echo "not equal<br>";
}
//
printf("%.28f<br>", 0.1);
printf("%.28f<br>", 0.2);
printf("%.28f<br>", $f1);
printf("%.28f<br>", $f2);
