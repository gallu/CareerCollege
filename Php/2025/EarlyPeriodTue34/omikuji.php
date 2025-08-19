<?php  // omikuji.php

function omikuji() {
    $omikuji_box = [
        "大吉",
        "中吉",
        "吉",
        "小吉",
        "末吉",
        "凶",
        "大凶",
    ];

    $cnt = count($omikuji_box);
    $no = random_int(0, $cnt-1);

    return $omikuji_box[$no];
}

//
$r = omikuji();
echo "今日の運勢は {$r} です！";
