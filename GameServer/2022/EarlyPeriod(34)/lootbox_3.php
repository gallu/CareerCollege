<?php   // lootbox_3.php
require_once("lootbox_set.php");
//
function lootbox($set) {
    // 確率の合計
    $p_total = 100; // XXX いまは決め打ち
    //　乱数の作成
    $no = random_int(0, ($p_total - 1));
//echo "no is {$no} <br>";
    // 判定
    if ($no < (0 + 40)) {
        return $set[0]; // ゴブリン
    } else if ($no < (40 + 30)) {
        return $set[1]; // スケルトン
    } else if ($no < (40 + 30 + 15)) {
        return $set[2]; // グール
    } else if ($no < (40 + 30 + 15 + 10)) {
        return $set[3]; // バンパイア
    } else if ($no < (40 + 30 + 15 + 10 + 4)) {
        return $set[4]; // ジャイアント
    } else if ($no < (40 + 30 + 15 + 10 + 4 + 1)) {
        return $set[5]; // ドラゴン
    } else {
        echo "おかしい！！！";
    }
}
//
$card = lootbox($set);
//var_dump($card["name"]);

