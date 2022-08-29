<?php   // loop3.php
declare(strict_types=1);
//   https://dev2.m-fr.net/アカウント名/loop3.php

//
while(0 !== ($i = random_int(0, 10))) {
    echo "{$i}.";
}
echo "<br>\n";

//
do {
    $i = random_int(0, 10);
    echo "{$i}.";
} while(0 !== $i);
echo "<br>\n";

//
while(false) {
    echo "enter while<br>\n";
}
//
do {
    echo "enter do-while<br>\n";
} while(false);


