<?php   // gacha_1.php
//  https://dev2.m-fr.net/アカウント名/gacha_1.php
require_once( __DIR__ . '/card_list.php');
//var_dump($card_list);

// 「カードの束」から１つ選択して
function gacha($card_list) {
    $count = count($card_list);
    $i = random_int(0, $count-1);
    $card = $card_list[$i];
    //
    return $card;
}
/*
// 出力
$card = gacha($card_list);
var_dump($card);
*/

//
$monte_max = 100000;
$data = [];
for($i = 0; $i < $monte_max; ++$i) {
    //
    $card = gacha($card_list);
    $name = $card['name'];
    //
    $data[$name] ??= 0;
    $data[$name] ++;
}
ksort($data);
//var_dump($data);
// 確率の表示
foreach($data as $k => $v) {
	echo "{$k}の確率は " , ($v / $monte_max) * 100 , "% <br>";
}








