<?php  // gacha_2.php
//   https://dev2.m-fr.net/アカウント名/gacha_2.php
require_once( __DIR__ . '/gacha_cards.php');

function gacha($card_list) {
    // 溜める変数を確保
    $data = [];
    // カードを「確率」分、溜める
    foreach($card_list  as  $k => $v) {
//var_dump($k, $v); echo "<br>\n";
        // 「確率」の回数だけloopさせる
        for($i = 0; $i < $v['probability']; ++$i) {
            //echo  $v['name'] , "<br>\n";
            // データを溜める
            $data[] = $v;
        }
    }
//var_dump($data);
    // 「カードのかたまり」の数をカウント
    $count = count( $data );
//var_dump( $count );

    // 乱数で１つをチョイス
    $i = random_int(0, $count-1);
    $card = $data[ $i ];
    //
    return $card;
}

//　がちゃを引いて表示
/*
$card = gacha($card_list);
var_dump( $card );
*/
