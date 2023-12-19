<?php  // cookie2.php
ob_start();
require_once(__DIR__ . "/dice.php");

// HPを取り出す
$hp = intval($_COOKIE["hp"] ?? "0");
// var_dump($hp);

// PCがいない(または死亡している)なら、新キャラを作る
if (0 >= $hp) {
    echo "新しい戦士登場!!<br>\n";
    $hp = dice("10d8");
}
// var_dump($hp);
echo "現在HP: {$hp} <br>\n";

// ダメージを食らう
// $hp = $hp - dice("2d6");
$hp -= dice("2d6");
echo "ダメージを食らった。HP: {$hp} <br>\n";

// キャラ(のHP)をCookieにしまう
setcookie("hp", (string)$hp);

ob_end_flush();
