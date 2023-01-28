<?php   // loot_box4.php
// ガチャセットの読み込み
require_once("./loot_set.php");
//var_dump($loot_set);

function loot_box($loot_set) {
    // 確率の合計を算出する
    $probability_total = 0;
    foreach($loot_set  as  $card) {
        //$probability_total = $probability_total + $card["probability"];
        $probability_total += $card["probability"];
    }
//var_dump($probability_total);
 
    // ランダムに１つチョイス
    $no = random_int(0, ($probability_total - 1));
//var_dump($no);

    // ランダムに１つチョイス
    $p = 0;
    foreach($loot_set  as  $k => $card) {
        // 確率の把握
        //$p = $p + $card["probability"];
        $p += $card["probability"];
//var_dump($p);
        // 判定
        if ($no < $p) {
            return $loot_set[$k];
        }
    }
    // XXX 本来こないはずなのだが？？？
    echo "XXXX ありえない！！！ XXXX";
    return null;
}
//
//$card = loot_box($loot_set);
//var_dump($card["name"]);

