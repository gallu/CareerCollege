<?php  // item_use.php
require_once(__DIR__ . "/PC.php");
require_once(__DIR__ . "/items.php");
//require_once(__DIR__ . "/item_function_1.php");
//require_once(__DIR__ . "/item_function_2.php");
require_once(__DIR__ . "/item_function_3.php");

$pc = new PC("きゃらくたぁ");
//$pc->print();

// ダメージを与える
$pc->damageHp(dice("5d6"));
$pc->damageMp(dice("5d6"));
$pc->print();

// 使うアイテムを選ぶ
$item_no = random_int(1, 7);
$item = $items[$item_no];
//var_dump($item);

//echo "{$item["name"]}($item["effect_text"])を使います <br>";
echo $item["name"];
echo "(";
echo $item["effect_text"];
echo ")";
echo " を使います <br>";

// itemを使う
item_function($pc, $item);

//
$pc->print();
