<?php  // function4.php

function hoge() {
    $hoge_i = 999;
    var_dump($hoge_i);

    // var_dump($global_foo);
}
hoge();

$global_foo  = 123;
var_dump($global_foo);

// var_dump($hoge_i);
