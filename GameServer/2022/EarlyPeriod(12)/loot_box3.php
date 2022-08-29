<?php   // loot_box3.php
// ガチャセットの読み込み
require_once("./loot_set.php");
//var_dump($loot_set);

function loot_box($loot_set) {
    // XXX 確率の合計は「100」である、とする
    $probability_total = 100;
    
    // ランダムに１つチョイス
    $no = random_int(0, ($probability_total - 1));
//var_dump($no);

    if ($no < 40) {
        // 0-39までなら、ゴブリン
        return $loot_set[0];
    } else if ($no < (40 + 30)) {
        // 40-69までなら、スケルトン
        return $loot_set[1];
    } else if ($no < (40 + 30 + 15)) {
        // 70-84までなら、ゴーレム
        return $loot_set[2];
    } else if ($no < (40 + 30 + 15 + 10)) {
        // 85-94までなら、ケルベロス
        return $loot_set[3];
    } else if ($no < (40 + 30 + 15 + 10 + 4)) {
        // 95-98までなら、ジャイアント
        return $loot_set[4];
    } else if ($no < (40 + 30 + 15 + 10 + 4 + 1)) {
        // 99-99までなら、ドラゴン
        return $loot_set[5];
    } else {
        // XXX 本来こないはずなのだが？？？
        echo "XXXX ありえない！！！ XXXX";
    }
}
//
//$card = loot_box($loot_set);
//var_dump($card["name"]);
