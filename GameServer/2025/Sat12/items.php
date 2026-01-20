<?php  // items.php
$items = [
    // HP回復系
    [
        "id" => 1001,
        "name" => "ポーション",
        "effect" => "hp:50", // HPを50点回復
        "effect_parts" = [
            [
                "hp" => 50,
            ]
        ],
        "price" => 50,
        "detail" => "HPを少量回復する基本アイテム",
    ],
    [
        "id" => 1002,
        "name" => "ハイポーション",
        "effect" => "hp:200", // HPを200点回復
        "price" => 150,
        "detail" => "HPを中程度回復する上位アイテム",
    ],

    // MP回復系
    [
        "id" => 2001,
        "name" => "エーテル",
        "effect" => "mp:50", // MPを50点回復
        "price" => 200,
        "detail" => "MPを少量回復する魔法用アイテム",
    ],
    [
        "id" => 2002,
        "name" => "ハイエーテル",
        "effect" => "mp:200", // MPを200点回復
        "price" => 500,
        "detail" => "MPを中程度回復する上位魔法アイテム",
    ],

    // 両方回復系
    [
        "id" => 5001,
        "name" => "エリクサー",
        "effect" => "hp:100,mp:100", // HPを100点回復、MPを100点回復
        "price" => 1000,
        "detail" => "HPとMPを半回復する貴重なアイテム",
    ],
    [
        "id" => 5002,
        "name" => "ハイエリクサー",
        "effect" => "hp:500, mp:500", // HPを500点回復、MPを500点回復
        "price" => 3000,
        "detail" => "HPとMPを全回復し、状態異常も治す最上級アイテム",
    ],
];
// print_r($items);
