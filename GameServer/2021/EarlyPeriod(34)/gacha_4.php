<?php   // gacha_4.php
//  https://dev2.m-fr.net/アカウント名/gacha_3.php
require_once( __DIR__ . '/card_list.php');

function gacha($card_list) {
    // 「確率の合計」を把握する
    $probability_total = 0;
    foreach($card_list  as  $k => $v) {
        $probability_total += $v['probability'];
    }
//var_dump($probability_total);

    // 乱数を作る
    $i = random_int(0, $probability_total - 1);
//var_dump($i);

    // 判定
    $probability = 0;
    foreach($card_list  as  $k => $v) {
        $probability += $v['probability'];
        if ($i < $probability) {
            $card = $v;
            break;
        }
    }
    //
    return $card;
}

// がちゃを引く
$card = gacha($card_list);
//var_dump($card);
