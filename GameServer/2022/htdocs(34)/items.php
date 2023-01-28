<?php  // items.php

$items = [
    1 => [
        'item_id' => 1,
        'name' => 'ポーション',
        'effect_text' => '1d6のHP回復',
        'effect_function' => 'hp:1d6'
    ],
    2 => [
        'item_id' => 2,
        'name' => 'ハイポーション',
        'effect_text' => '3d6のHP回復',
        'effect_function' => 'hp:3d6'
    ],
    3 => [
        'item_id' => 3,
        'name' => 'フルポーション',
        'effect_text' => 'HP全回復',
        'effect_function' => 'hp:999999'
    ],
    4 => [
        'item_id' => 4,
        'name' => 'エーテル',
        'effect_text' => '1d6のMP回復',
        'effect_function' => 'mp:1d6'
    ],
    5 => [
        'item_id' => 5,
        'name' => 'ハイエーテル',
        'effect_text' => '3d6のMP回復',
        'effect_function' => 'mp:3d6'
    ],
    6 => [
        'item_id' => 6,
        'name' => 'フルエーテル',
        'effect_text' => 'MP全回復',
        'effect_function' => 'mp:99999'
    ],
    7 => [
        'item_id' => 7,
        'name' => 'エリクサー',
        'effect_text' => '1d6のHP回復＋1d6のMP回復',
        'effect_function' => 'HP:1d6 , mp:1d6'
    ],
];
