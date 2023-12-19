<?php  // loot_box_2.php

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
    // 配列を作成する
    $set = [];
    // カードのセットごとにループ処理
    foreach($loot_box_set as $k => $v) {
        // １カードの「確率」回、ループさせる
        for($i = 0; $i < $v; ++$i) {
            $set[] = $k;
        }
    }
    // var_dump($set);
    $no = random_int(0, count($set) - 1);
    $card_key = $set[$no];

    return $card_key;
}

$card = lootBoxDraw($loot_box_set);
var_dump($card);
