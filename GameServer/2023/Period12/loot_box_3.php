<?php  // loot_box_3.php

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
    //
    $no = random_int(0, 99);
    // var_dump($no);

    //
    if ($no < 27) {
        $card_key = "スライム";
    // } elseif ($no < 51) {
    } elseif ($no < (27 + 24)) {
        $card_key = "ゴブリン";
    // } elseif ($no < 71) {
    } elseif ($no < (27 + 24 + 20)) {
        $card_key = "スケルトン";
    // } elseif ($no < 86) {
    } elseif ($no < (27 + 24 + 20 + 15)) {
        $card_key = "ジャイアント";
    // } elseif ($no < 96) {
    } elseif ($no < (27 + 24 + 20 + 15 + 10)) {
        $card_key = "ナーガ";
    // } elseif ($no < 99) {
    } elseif ($no < (27 + 24 + 20 + 15 + 10 + 3)) {
        $card_key = "エルダーリッチ";
    // } elseif ($no < 100) {
    } elseif ($no < (27 + 24 + 20 + 15 + 10 + 3 + 1)) {
        $card_key = "ドラゴン";
    }

    return $card_key;
}

$card = lootBoxDraw($loot_box_set);
var_dump($card);
