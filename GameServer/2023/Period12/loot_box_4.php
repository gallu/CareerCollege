<?php  // loot_box_4.php

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
    // 確率の合計を確認
    $total = 0;
    foreach($loot_box_set as $_ => $v) {
        $total += $v;
    }
    // var_dump($total);
    //
    $no = random_int(0, $total - 1);
    // var_dump($no);

    // がちゃ処理本体
    $p = 0;
    foreach($loot_box_set as $k => $v) {
        // 確率を積む
        $p += $v;
        // 引いた乱数が「確率以下」なら、引いたカードを決定する
        if ($no < $p) {
            $card_key = $k;
            break;
        }
    }

    return $card_key;
}

$card = lootBoxDraw($loot_box_set);
var_dump($card);
