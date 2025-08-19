<?php  // func8.php

function hoge() {
    // 使っちゃダメ！！
    var_dump( $GLOBALS['global_i'] );
}

function foo() {
    // なにがあっても死んでも殺しても絶対に使うな！ 使うな！！
    global $global_i;
    var_dump($global_i);
}

$global_i = 123;
hoge();
echo "<br>";
foo();
