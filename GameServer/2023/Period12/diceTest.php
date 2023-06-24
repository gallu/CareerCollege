<?php  // diceTest.php

require_once __DIR__ . "/dice.php";

$r = dice("2D6");
var_dump($r); // 2～12の間の乱数が出てくる

$r = dice("2d6");
var_dump($r); // 2～12の間の乱数が出てくる

$r = dice("3d10");
var_dump($r); // 3～30の間の乱数が出てくる

/*
// 今できない記法
$r = dice("d6");

$r = dice("2d6 + 4"); -> dice("2d6") + 4
$r = dice("2d6 + 3d6"); -> dice("2d6") + dice("3d6")

$r = dice("2d6 - 2"); -> dice("2d6") - 2
*/
