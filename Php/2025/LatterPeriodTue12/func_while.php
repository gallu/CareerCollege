<?php  // func_while.php

function getRand() {
    $r = random_int(0, 10);
    return $r;
}

$r = getRand();
var_dump($r);

while(getRand() !== 0) {
    echo "*";
}

