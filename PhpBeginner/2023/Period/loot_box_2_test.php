<?php  // loot_box_2_test.php

// require_once   __DIR__ . "/loot_box_2.php";
// require_once   __DIR__ . "/loot_box_3.php";
require_once   __DIR__ . "/loot_box_4.php";

$box = [
    "特等" => 1,
    "1等" =>  5,
    "2等" =>  8,
    "3等" => 12,
    "4等" => 15,
    "5等" => 20,
    "6等" => 39,
];

$total = [];
$repeats = 10000;
for($i = 0; $i < $repeats; ++$i) {
    $draw = lottery($box);
    $total[$draw] ??= 0; // warning対策
    $total[$draw] ++;
}
// var_dump($total);

//　sortする
arsort($total);
// var_dump($total);

//　確率を計算する
foreach($total as $k => $v) {
    $r = $v / $repeats * 100;
    echo "{$k}: {$r} <br>\n";
}


