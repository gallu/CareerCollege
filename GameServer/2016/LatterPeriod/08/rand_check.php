<?php
// rand_check.php
// 「モンテカルロ法」による検証

// データ保存領域確保
$awk = array();
// 100万回ほど乱数を取得してみる
for($i = 0; $i < 1000000; $i ++) {
    //$r = mt_rand(3, 18); // 3-18の幅で乱数を作成
    $r = mt_rand(1, 6) + mt_rand(1, 6) + mt_rand(1, 6);
    @$awk[$r] ++;
}
// 「どの乱数が何回出たか」を出力
ksort($awk);
var_dump($awk);