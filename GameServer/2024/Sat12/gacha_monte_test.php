<?php  // gacha_monte_test.php

require_once __DIR__ . "/gacha_base.php";
// require_once __DIR__ . "/gacha_1.php";
// require_once __DIR__ . "/gacha_2.php";
// require_once __DIR__ . "/gacha_3.php";
require_once __DIR__ . "/gacha_4.php";

// モンテカルロの実装
$list = getGachaList();

$total = [];
const TIMES = 100000; // 試行回数
for ($i = 0; $i < TIMES; ++$i) {
    $card = gacha($list);
    $total[$card["name"]] ??= 0; // Warning対策
    $total[$card["name"]] ++;
}
// var_dump($total);
ksort($total);

foreach ($total as $k => $v) {
    $p = $v / TIMES * 100;
    echo "{$k}: {$p}% <br>\n";
}
