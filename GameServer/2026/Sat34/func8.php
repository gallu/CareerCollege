<?php  // func8.php

function hoge() {
    // 使ってはいけない！！
    var_dump( $GLOBALS["global_v"] );
}

function foo() {
    // 絶対にぜったいに何があっても使ってはいけない！！ ダメ！！
    global $global_v;
    var_dump($global_v);
}

$global_v = 987;
hoge();
foo();
