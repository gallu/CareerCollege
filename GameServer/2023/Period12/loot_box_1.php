<?php  // loot_box_1.php

// 本当はDBとかから取得する「ガチャの１セット」
$loot_box_set = [
    // カード名 => 確率
    "スライム" => 27,
    "ゴブリン" => 24,
    "スケルトン" => 20,
    "ジャイアント" => 15,
    "ナーガ" => 10,
    "エルダーリッチ" => 3,
    "ドラゴン" => 1,
];

// がちゃを引く
function lootBoxDraw($loot_box_set) {
    // 「keyだけ」を取り出す
    $keys = array_keys($loot_box_set);
    // var_dump($keys);

    $no = random_int(0, count($keys) - 1);
    $card_key = $keys[$no];
    // var_dump($no, $card_key);
    
    return $card_key;
}

$card = lootBoxDraw($loot_box_set);
var_dump($card);
