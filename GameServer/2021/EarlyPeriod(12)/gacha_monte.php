<?php  // gacha_monte.php
//   https://dev2.m-fr.net/アカウント名/gacha_monte.php
//require_once( __DIR__ . '/gacha_1.php');
//require_once( __DIR__ . '/gacha_2.php');
//require_once( __DIR__ . '/gacha_3.php');
require_once( __DIR__ . '/gacha_4.php');

// モンテカルロ法によるテスト
$monte_num = 10000;
$data = [];
for($i = 0; $i < $monte_num; ++$i) {
    // がちゃを引く
    $card = gacha($card_list);
    $name = $card['name'];
    // カウント
    $data[$name] ??= 0;
    $data[$name] ++;
}
arsort($data);
//var_dump($data);
foreach($data  as  $k => $v) {
    echo "{$k}: " , ($v / $monte_num * 100) , "% <br>\n";
}
