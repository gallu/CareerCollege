<?php   // gacha_3.php
//   https://dev2.m-fr.net/アカウント名/gacha_3.php
require_once( __DIR__ . '/gacha_cards.php');

function gacha($card_list) {
    // 「確率」の合計値を把握する
    $probability_total = 0;
    foreach($card_list  as  $k => $v) {
        $probability_total = $probability_total + $v['probability'];
        //$probability_total += $v['probability'];
    }
//var_dump($probability_total);

    // 「１枚」を選択
    $i = random_int(0, ($probability_total - 1) );
//$i = 99;
//var_dump($i);

    //　「何が選ばれたのか」を判断
    /*
    if ($i < 25) {
        $card = $card_list[0]; // コボルト
    } else if ($i < 50) {
        $card = $card_list[1]; // オーク
    } else if ($i < 70) {
        $card = $card_list[2]; // スライム
    } else if ($i < 85) {
        $card = $card_list[3]; // スケルトン
    } else if ($i < 95) {
        $card = $card_list[4]; // ガーゴイル
    } else if ($i < 99) {
        $card = $card_list[5]; // ジャイアント
    } else if ($i < 100) {
        $card = $card_list[6]; // ドラゴン
    }
    */
    //
    if ($i < (0  +25)) {
        $card = $card_list[0]; // コボルト
    } else if ($i < (25  +25)) {
        $card = $card_list[1]; // オーク
    } else if ($i < (25+25  +20)) {
        $card = $card_list[2]; // スライム
    } else if ($i < (25+25+20  +15)) {
        $card = $card_list[3]; // スケルトン
    } else if ($i < (25+25+20+15  +10)) {
        $card = $card_list[4]; // ガーゴイル
    } else if ($i < (25+25+20+15+10  +4)) {
        $card = $card_list[5]; // ジャイアント
    } else if ($i < (25+25+20+15+10+4  +1)) {
        $card = $card_list[6]; // ドラゴン
    }

    return $card;
}

//　がちゃを引いて表示
/*
$card = gacha($card_list);
var_dump( $card );
*/