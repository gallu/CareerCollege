<?php  // item_use.php
// https://dev2.m-fr.net/アカウント名/item_use.php?item_id=10002

require_once __DIR__ . "/DBConnection.php";
require_once __DIR__ . "/Item.php";
require_once __DIR__ . "/PC.php";
// require_once __DIR__ . "/UseItem_1.php";
require_once __DIR__ . "/UseItem_2.php";

// PCの準備
$pc = new PC();
$pc->max_hp = 500;
$pc->max_mp = 500;
$pc->hp = 50;
$pc->mp = 50;

// 使うアイテムの把握
$item_id = strval($_GET["item_id"] ?? "");
// var_dump($item_id);

// アイテム情報の取得
$item = new Item($item_id);
// var_dump($item->datum["name"]);

//
$pc->print();

// アイテムを使う
$use_item = new UseItem();
$log = $use_item->use($pc, $item);

// 簡易のログ出力
echo "「{$item->datum['name']}」を使った！<br>";
// var_dump($log);
foreach ($log as $k => $v) {
    if ($k === "hp") {
        echo " -> HPが{$v}点 回復！！<br>";
    }
    if ($k === "mp") {
        echo " -> MPが{$v}点 回復！！<br>";
    }
}

//
$pc->print();

