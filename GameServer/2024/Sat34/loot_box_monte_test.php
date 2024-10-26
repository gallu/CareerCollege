<?php  // loot_box_monte_test.php
declare(strict_types=1);
// require_once __DIR__ . "/loot_box_1.php";
// require_once __DIR__ . "/loot_box_2.php";
// require_once __DIR__ . "/loot_box_3.php";
require_once __DIR__ . "/loot_box_4.php";

$lootbox_type_id = 1;
$card_list = getCardList($lootbox_type_id);

$count = [];
$times = 100000;
for ($i = 0; $i < $times; ++$i) {
    $card = choiceLootBox($card_list);
    $name = $card->name;

    $count[$name] ??= 0;
    $count[$name] ++;
}

//
ksort($count);
// var_dump($count);

foreach($count as $k => $v) {
    $p = $v / $times * 100;
    echo "{$k}: {$p} <br> \n";
}

