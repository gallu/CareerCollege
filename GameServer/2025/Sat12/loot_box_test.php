<?php  // loot_box_test.php
// モンテカルロ法をつかった排出確率の確認
require_once __DIR__ . "/loot_box_data.php";
// require_once __DIR__ . "/loot_box_draw_function_1.php";
// require_once __DIR__ . "/loot_box_draw_function_2.php";
// require_once __DIR__ . "/loot_box_draw_function_3.php";
require_once __DIR__ . "/loot_box_draw_function_4.php";

const LOOP_MAX = 100000;

$cards = [];
for ($i = 0; $i < LOOP_MAX; ++$i) {
    $cards[] = lootBoxDraw($loot_box_data);
}
// echo count($cards);

$sum = [];
foreach ($cards as $c) {
    $sum[$c["name"]] ??= 0; // $sum[$c["name"]] = $sum[$c["name"]] ?? 0;
    $sum[$c["name"]] ++;
}
// print_r($sum);

$par = [];
foreach ($sum as $k => $v) {
    $par[$k] = $v / LOOP_MAX * 100;
}
ksort($par); // 名前(key)でsort
print_r($par);

