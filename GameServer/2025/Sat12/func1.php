<?php  // func1.php
/*
// 関数の宣言(関数を切る)
function 関数名($引数, ...) {
    // 処理
    // 処理
    // 処理
    return $戻り値;
}

// 関数の使用(呼び出し/callする)
$戻り値 = 関数名("引数");
*/

function add($a, $b) {
    $r = $a + $b;
    
    return $r;
}
//
$ret = add(10, 20);
var_dump($ret);
