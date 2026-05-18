<?php   // func6.php

// 引数の値を変更しても、元の変数の値は変わらない
// 「値渡し」
function func($func_i) {
    $func_i *= 10;
    echo "func_i is {$func_i} <br>\n";
}

$global_i = 10;
func($global_i);

echo "global_i is {$global_i} <br>\n";

/*
function func($num) {
    $num *= 10;
    echo "num is {$num} <br>\n";
}

$num = 10;
func($num);

echo "num is {$num} <br>\n";
*/
