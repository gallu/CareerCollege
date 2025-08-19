<?php  // func2.php

function hoge() {
    return random_int(0, 99);
}
//
$r = hoge();
var_dump($r);
