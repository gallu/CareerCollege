<?php   // gacha_3.php
//  https://dev2.m-fr.net/アカウント名/gacha_3.php
require_once( __DIR__ . '/card_list.php');

function gacha($card_list) {
    // 「確率の合計」を把握する
    $probability_total = 100;
    // 乱数を作る
    $i = random_int(0, $probability_total - 1);
    
    if ($i < 20) { // 	['name'=>'スライム',	'probability'=>20, 'offense'=>1, 'defense'=>1],
        $card = $card_list[0];
    } else if ($i < (20 + 20)) { // ['name'=>'コボルト',	'probability'=>20, 'offense'=>2, 'defense'=>2],
        $card = $card_list[1];
    } else if ($i < (20 + 20 + 15)) { // ['name'=>'ゴブリン',	'probability'=>15, 'offense'=>3, 'defense'=>3],
        $card = $card_list[2];
    } else if ($i < (20 + 20 + 15 + 15)) { // ['name'=>'オーク',	'probability'=>15, 'offense'=>4, 'defense'=>4],
        $card = $card_list[3];
    } else if ($i < (20 + 20 + 15 + 15 + 10)) { // ['name'=>'蜘蛛',		'probability'=>10, 'offense'=>5, 'defense'=>5],
        $card = $card_list[4];
    } else {
        $card = ['name' => '???'];
    }

    return $card;
}

$card = gacha($card_list);
//var_dump($card);
