<?php  // loot_box_test.php

// require_once __DIR__ . "/loot_box_1.php";
// require_once __DIR__ . "/loot_box_2.php";
// require_once __DIR__ . "/loot_box_3.php";
require_once __DIR__ . "/loot_box_4.php";

$data = [];
$test_times = 100000;
for($i = 0; $i < $test_times; ++$i) {
    $card = lootBoxDraw($loot_box_set);
    $data[$card] ??= 0; // Warningを消すおまじない
    $data[$card] += 1;
}
// var_dump($data);

// 見やすいようにsort
arsort($data);

echo "<br>\n";
foreach($data as $k => $v) {
    $p = $v / $test_times * 100;
    echo "{$k}: {$p}% <br>\n";
}

