<?php  // item_use.php

require_once __DIR__ . "/items.php";
// require_once __DIR__ . "/dice.php";
//require_once __DIR__ . "/item_use_function_1.php";
require_once __DIR__ . "/item_use_function_2.php";

// PC情報の表示
function printPC($pc) {
    echo "HP: {$pc['hp']}/{$pc['max_hp']} , ";
    echo "MP: {$pc['mp']}/{$pc['max_mp']} <br>";
}

$pc = [
    "max_hp" => 500,
    "hp" => 50,
    "max_mp" => 500,
    "mp" => 50,
];
// print_r($pc);
printPC($pc);

// アイテムを１つ選ぶ
$item_idx = random_int(0, count($items)-1);
$item = $items[$item_idx];
// $item = $items[5]; // XXXXXX log確認用（後で消すこと)
// var_dump($item);

// アイテムを使う
$r = itemUse($pc, $item);
$pc = $r["pc"];
$log = $r["log"];
// print_r($pc); // アイテム使用後
// print_r($log); // アイテム使用後

echo "アイテム「{$item['name']}」を使った！！<br>";
foreach($log as $k => $v) {
    if ($k === "hp") {
        echo " -> HPが {$v} 回復した!!<br>";
    }
    if ($k === "mp") {
        echo " -> MPが {$v} 回復した!!<br>";
    }
}
printPC($pc);
