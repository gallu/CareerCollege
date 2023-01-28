<?php   // func4.php

// 値渡し
// XXX だから、呼び元の変数の値は変わらない
function hoge($num) {
    $num = $num * 999;
}
//
$g_num = 100;
hoge($g_num);
var_dump($g_num);
echo "<br><br>";

// 参照渡し(正確には"参照の値渡し")
// XXX 読めたほうがいいけど書かない方がいい
function foo(&$num) {
    $num = $num * 999;
}
//
$g_num = 123;
foo($g_num);
var_dump($g_num);
