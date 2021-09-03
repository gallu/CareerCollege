<?php   // gacha_2.php
//  https://dev2.m-fr.net/アカウント名/gacha_2.php
require_once( __DIR__ . '/card_list.php');

function gacha($card_list) {
    $bundle = [];
    foreach($card_list as $c) {
        //var_dump( $c['name'], $c['probability'] );
        // 確率数分、積む！！
        for($i = 0; $i < $c['probability']; ++$i) {
            $bundle[] = $c;
        }
    }
    //var_dump($bundle);
    $count = count($bundle);
    $i = random_int(0, $count-1);
    $card = $bundle[$i];
    //
    return $card;
}
/*
$card = gacha($card_list);
var_dump($card);
*/