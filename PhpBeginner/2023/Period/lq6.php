<?php  // lq6.php
/*
問
以下の関数を作成しなさい。

関数名　judge
    引数 $i
    処理　引数　$i が、奇数か偶数か判定する
    戻り値　引数 $iが奇数なら　odd , 偶数なら　even を返す

上述の関数をつかって、2, 6, 13 の判定をして、その結果を出力しなさい。
 */
function judge($i) {
    if ($i % 2 === 0) {
        $r = "even";
    } else {
        $r = "odd";
    }
    return $r;
}

$r = judge(2);
var_dump($r);

$r = judge(6);
var_dump($r);

$r = judge(13);
var_dump($r);
