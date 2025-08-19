<?php  // func7.php

function hoge() {
    $local_j = 321;
    var_dump($global_i); // XXX
    var_dump($local_j);
}

$global_i = 100;
var_dump($global_i);
var_dump($local_j); // XXX

hoge();
