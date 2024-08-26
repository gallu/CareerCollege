<?php  // func3.php

function hoge() {
    // 非推奨
    $GLOBALS["global_num"] = 321;
}

function foo() {
    // 徹底的に激しく致命的に絶望的に非推奨 使っちゃだめ！絶対！！
    global $global_num;
    $global_num = 999;
}

$global_num = 123;
hoge();
var_dump($global_num);

foo();
var_dump($global_num);

