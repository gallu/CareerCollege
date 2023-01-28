<?php   // loot_box2.php
// ガチャセットの読み込み
require_once("./loot_set.php");
//var_dump($loot_set);

function loot_box($loot_set) {
    // カードを確率分、増やす
    $deck = [];
    foreach($loot_set as $card) {
        for($i = 0; $i < $card["probability"]; ++$i) {
            $deck[] = $card;
        }
    }
//var_dump($deck); exit;

    // 1枚選ぶ
    $max = count($deck) - 1;
    $no = random_int(0, $max);
    $card = $deck[$no];
    //
    return $card;
}
//
//$card = loot_box($loot_set);
//var_dump($card["name"]);
