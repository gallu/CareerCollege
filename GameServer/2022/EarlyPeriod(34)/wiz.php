<?php  // wiz.php
//  https://dev2.m-fr.net/アカウント名/wiz.php

// dice関数を使いたいので取り込む
require_once("dice.php");

// ボーナスは　1d4 + 5
$bonus = dice("1d4") + 5;
//$bonus = dice("1d4+5");

// 5%の確率(1d20で1が出る限り）ボーナスに　1d4　を加える
while(dice("1d20") === 1) {
    // デバッグ用
    echo "*";
    // ボーナスに　1d4　を加える
    $bonus += dice("1d4");
}

//
var_dump($bonus);
