<?php  // gacha_4.php
require_once __DIR__ . "/gacha_base.php";

function gacha($list) {
    $probability_total = 0;
    foreach ($list as $k => $v) {
        $probability_total += $v["probability"];
    }
    // var_dump($probability_total);

    // 1つ選択
    $r = random_int(0, $probability_total-1);
    // var_dump($r);

    //
    // echo "<br> \n";
    $p = 0;
    foreach ($list as $k => $v) {
        $p += $v['probability'];
        // echo "{$v['name']}: {$v['probability']} / {$p} <br> \n";
        if ($r < $p) {
            return $v;
        }
    }
    echo "おかしい？？？";
    return null;
}

/*
$list = getGachaList();
// var_dump($list);
$card = gacha($list);
var_dump($card);
*/