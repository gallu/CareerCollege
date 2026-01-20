<?php  // LootBoxMain_test.php
declare(strict_types=1);

require_once __DIR__ . "/loot_box_data.php";
// require_once __DIR__ . "/LootBoxMain_1.php";
// require_once __DIR__ . "/LootBoxMain_2.php";
// require_once __DIR__ . "/LootBoxMain_3.php";
require_once __DIR__ . "/LootBoxMain_4.php";

$obj = new LootBoxMain();

const LOOP_MAX = 100_000;

$cards = [];
for ($i = 0; $i < LOOP_MAX; ++$i) {
    $cards[] = $obj->draw($loot_box_data);
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
ksort($par); // 名前順にsort
print_r($par);
