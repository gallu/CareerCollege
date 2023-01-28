<?php  // gatya_1.php

$cards = [
	1 => 'スライム',
	2 => 'オーク',
	3 => 'グリフォン',
	4 => 'ドラゴン',
	5 => 'ラストモンスター',
];

//
$key = array_rand($cards);
//
$keys = array_keys($cards);
$key = $keys[ mt_rand(0, count($keys) - 1) ];

//
$val = $cards[$key];
echo "{$val} ({$key}) を取得";
