<?php  // lq8.php
/*
問
以下の関数を作成しなさい

関数名: triple
引数: 1つ
処理: 引数の値を３倍する
戻り値: 「引数の値を３倍」にした値

上述の関数をつかったコードを書きなさい。
*/
function triple($i) {
    $r = $i * 3;
    return $r;
}

$r = triple(3);
var_dump($r);
