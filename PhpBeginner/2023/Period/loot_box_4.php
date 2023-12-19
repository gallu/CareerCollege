<?php  // loot_box_4.php

function lottery($box) {
    // totalを計算
    $total = 0;
    foreach($box as $k => $v) {
        $total += $v;
    }
    // var_dump($total);
    $no = random_int(0, $total - 1);
    // var_dump($no);

    $rate = 0;
    foreach ($box as $k => $v) {
        $rate += $v;
        if ($no < $rate) {
            return $k;
        }
    }

    // ここは通らないが念のため
    return "???";
}

$box = [
    "6等" => 39,
    "5等" => 20,
    "4等" => 15,
    "3等" => 12,
    "2等" =>  8,
    "1等" =>  5,
    "特等" => 1,
];

$draw = lottery($box);
// var_dump($draw);
