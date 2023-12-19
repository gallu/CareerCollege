<?php  // loot_box_2.php

function lottery($box) {
    $lootbox = [];
    foreach ($box as $k => $v) {
        for($i = 0; $i < $v; ++$i) {
            $lootbox[] = $k;
        }
    }
    // var_dump($lootbox);

    // １つ選択する
    $max = count($lootbox) - 1;
    $no = random_int(0, $max);

    $draw = $lootbox[$no];
    // var_dump($draw);
    
    return $draw;
}

$box = [
    "特等" => 1,
    "1等" =>  5,
    "2等" =>  8,
    "3等" => 12,
    "4等" => 15,
    "5等" => 20,
    "6等" => 39,
];

$draw = lottery($box);
// var_dump($draw);
