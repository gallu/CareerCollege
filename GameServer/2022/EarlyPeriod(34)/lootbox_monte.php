<?php   // lootbox_monte.php

// テスト対象を読み込み
//require_once("lootbox_1.php");
//require_once("lootbox_2.php");
//require_once("lootbox_3.php");
require_once("lootbox_4.php");

// モンテカルロ法でテスト
$monte_times = 100000;
$total = [];
for($i = 0; $i < $monte_times; ++$i) {
    $card = lootbox($set);
    $total[ $card['name'] ] ??= 0;
    $total[ $card['name'] ] ++;
}
// sortしておく
arsort($total);
//var_dump($total);
foreach($total as $k => $v) {
    // 百分率の計算
    $p = $v / $monte_times * 100;
    echo "{$k}: {$p}% <br>";
}