<?php  // item_use_function_1.php

require_once __DIR__ . "/dice.php";

// 「アイテムを使う」の実装
function itemUse($pc, $item) {
    //
    $log = [];
    //
    switch($item["id"]) {
        case 1001: // "ポーション"
            $v = dice("10d10");
            $pc["hp"] += $v;
            $log["hp"] = $v;
            break;
        case 1002: // "ハイポーション"
            $v = dice("10d20") + 100;
            $pc["hp"] += $v;
            $log["hp"] = $v;
            break;
        case 2001: // エーテル
            $v = dice("10d10");
            $pc["mp"] += $v;
            $log["mp"] = $v;
            break;
        case 2002: // ハイエーテル
            $v = dice("10d20") + 100;
            $pc["mp"] += $v;
            $log["mp"] = $v;
            break;
        case 5001: // エリクサー
            $pc["hp"] += 250;
            $pc["mp"] += 250;
            $log["hp"] = 250;
            $log["mp"] = 250;
            break;
        case 5002: // ハイエリクサー
            $pc["hp"] += 500;
            $pc["mp"] += 500;
            $log["hp"] = 500;
            $log["mp"] = 500;
            break;
    }

    return ["pc" => $pc, "log" => $log];
}

