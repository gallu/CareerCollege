<?php  // gacha_3.php
require_once __DIR__ . "/gacha_base.php";

function gacha($list) {
    $probability_total = 0;
    foreach ($list as $k => $v) {
        $probability_total += $v["probability"];
    }
    // var_dump($probability_total);

    // 1つ選択
    $r = random_int(0, $probability_total-1);
    // $r = $probability_total-1; // エッジケースの確認用
    // var_dump($r);

    if ($r < 40) {
        return $list[0]; // コボルト
    } elseif ($r < 40+30) {
        return $list[1]; // ゴブリン
    } elseif ($r < 40+30+15) {
        return $list[2]; // オーク
    } elseif ($r < 40+30+15+10) {
        return $list[3]; // グール
    } elseif ($r < 40+30+15+10+4) {
        return $list[4]; // ジャイアント
    } elseif ($r < 40+30+15+10+4+1) {
        return $list[5]; // ドラゴン
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