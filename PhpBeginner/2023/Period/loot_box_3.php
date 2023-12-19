<?php  // loot_box_3.php

function lottery($box) {
    // totalを計算
    $total = 0;
    foreach($box as $k => $v) {
        $total += $v;
    }
    // var_dump($total);
    $no = random_int(0, $total - 1);
// $no = 85;
    // var_dump($no);

    //
    if ($no < 39) {
        return "*6等";
    // } elseif ($no < 59) {
    } elseif ($no < (39 + 20)) {
        return "5等";
    // } elseif ($no < 74) {
    } elseif ($no < (39 + 20 + 15)) {
        return "4等";
    // } elseif ($no < 86) {
    } elseif ($no < (39 + 20 + 15 + 12)) {
        return "3等";
    } elseif ($no < (39 + 20 + 15 + 12 + 8)) {
        return "2等";
    } elseif ($no < (39 + 20 + 15 + 12 + 8 + 5)) {
        return "1等";
    } elseif ($no < (39 + 20 + 15 + 12 + 8 + 5 + 1)) {
        return "特等";
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
