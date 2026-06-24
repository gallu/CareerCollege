<?php  // func5.php

// 引数がなくて戻り値だけある関数
function hoge() {
    // 戻り値は「１つだけ」
    return "ret value";
}

//
$r = hoge();
var_dump($r);
