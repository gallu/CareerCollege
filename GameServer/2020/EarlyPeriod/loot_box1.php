<?php  // loot_box1.php
//  http://dev2.m-fr.net/アカウント名/loot_box1.php

// 「全てのカードの確率が均一」のがちゃ
$cards = [
    'スライム',
    'ゴブリン',
    'スケルトン',
    'オーク',
    'マジックユーザ',
    'ドラゴン',
];
//
$card = $cards[ mt_rand(0, count($cards)-1 ) ];
var_dump($card);

