<?php  // loot_box_1.php
// 「確率」がないからこれだとダメ！！
$box = [
    "特等",
    "1等",
    "2等",
    "3等",
    "4等",
    "5等",
    "6等",
];
// １つ選択する
$max = count($box) - 1;
$no = random_int(0, $max);

$draw = $box[$no];
var_dump($draw);
