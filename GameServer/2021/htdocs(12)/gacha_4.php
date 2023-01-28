<?php   // gacha_4.php
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
//$i = 98;
//var_dump($i);

    // XXXX
    $probability = 0;
    foreach($card_list  as  $k => $v) {
        $probability = $probability + $v['probability'];
        //echo $probability , "<br>\n";
        if ($i < $probability) {
            $card = $v;
            break; // カードがhitしたから処理を抜ける
        }
    }

    //
    return $card;
}
/*
//　がちゃを引いて表示
$card = gacha($card_list);
var_dump( $card );
*/





