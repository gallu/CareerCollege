<?php  // func7.php

function hoge() {
    $local_v = 123;
    var_dump($global_v); // Warning: Undefined variable $global_v in
    var_dump($local_v);
}

$global_v = 987;
var_dump($global_v);
var_dump($local_v); // Warning: Undefined variable $local_v in 

hoge();
