<?php  // function4.php

// 変数のスコープ

// 関数の宣言
function hoge() {
    $local_j = 123;
    // var_dump($global_i); // 使い方はあるけどやらない(使うな)
    var_dump($local_j);
}

// 変数の作成と使用
$global_i = 10;
var_dump($global_i);
// var_dump($local_j);

// 関数の使用
hoge();
