<?php   // float.php
//  https://dev2.m-fr.net/アカウント名/float.php

$f = 0.1 + 0.2;
if (0.3 === $f) {
    echo "true <br>\n";
} else  {
    echo "false <br>\n";
}
printf("%.32f <br>\n", $f);
printf("%.32f <br>\n", 0.3);
printf("%.32f <br>\n", 0.1);
printf("%.32f <br>\n", 0.2);
