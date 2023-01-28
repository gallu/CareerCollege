<?php  // WizB.php

function d($base, $count = 1) {
    $ret = 0;
    for($i = 0; $i < $count; ++$i) {
        $ret += mt_rand(1, $base);
    }
    return $ret;
}
function d5($count = 1) {
    return d(5, $count);
}
function d20($count = 1) {
    return d(20, $count);
}

// 通常 5～9 (1d5+4)
$bonus = d5() + 4;

/*
しかし 1/20 の確率でより高いボーナスポイントが出ることがあります。
具体的には、20面体のダイスを振って、続けて何回「20」を出せたかで基準点を決め、
さらに5面体ダイスの出目を加える
*/
$base_point = 0;
while (20 === d20()) {
    $base_point ++;
}
$bonus += d5($base_point);


echo "ボーナス: {$bonus}<br>\n";
