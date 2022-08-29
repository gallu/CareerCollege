<?php   // declare.php
declare(strict_types=1);

function hoge(int $i, int $j) {
    var_dump($i, $j);
}
hoge("0", 10.125);

//
$i = random_int("0", 10.125);
var_dump($i);

