<?php  // func4.php

// 値渡し
function hoge($num) {
    echo "in func <br>";
    $num *= 3;
    echo "in func num is {$num} <br>";
}

$num = 123;
hoge($num);
var_dump($num);
