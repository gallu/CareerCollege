<?php  // func6.php

// 値渡し
function hoge(int $local_i) {
    $local_i += 1000;
    var_dump($local_i);
}

$global_i = 12;
hoge($global_i);
var_dump($global_i);
echo "<br>";

// 参照渡し(参照の値渡し)
function foo(int &$local_i) {
    $local_i += 1000;
    var_dump($local_i);
}

$global_i = 34;
foo($global_i);
var_dump($global_i);
