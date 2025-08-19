<?php  // Q4.php

// 1から6の乱数(さいころ)を作成して出力する
$r = random_int(1, 6);
echo "{$r} <br>\n";

/*
「1から6の乱数(さいころ)を作成してreturnする」関数を作成しなさい。
関数名は d6 とします。
d6() 関数を使って「１から６の乱数」を取得して、echoで出力しなさい。
 */
function d6() {
    $r = random_int(1, 6);
    return $r;    
    // return random_int(1, 6);
}

$v = d6();
echo "{$v} <br>\n";
