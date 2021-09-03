<?php   // gacha_monte.php
//  https://dev2.m-fr.net/アカウント名/gacha_monte.php
//require_once( __DIR__ . '/gacha_2.php');
//require_once( __DIR__ . '/gacha_3.php');
require_once( __DIR__ . '/gacha_4.php');

// モンテカルロ法によるテスト
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
//ksort($data);
asort($data);
//var_dump($data);
// 確率の表示
foreach($data as $k => $v) {
	echo "{$k}の確率は " , ($v / $monte_max) * 100 , "% <br>";
}
