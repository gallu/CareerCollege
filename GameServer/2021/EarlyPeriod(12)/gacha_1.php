<?php   // gacha_1.php
//  https://dev2.m-fr.net/アカウント名/gacha_1.php
require_once( __DIR__ . '/gacha_cards.php');

function gacha($card_list) {
    // 「カードのかたまり」の数をカウント
    $count = count( $card_list );
//var_dump( $count );

    // 乱数で１つをチョイス
    $i = random_int(0, $count-1);
    $card = $card_list[ $i ];
    //
    return $card;
}
//　がちゃを引いて表示
/*
$card = gacha($card_list);
var_dump( $card );
*/









