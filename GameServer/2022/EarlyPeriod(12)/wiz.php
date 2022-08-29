<?php  // wiz.php

require_once("./dice.php");

// 基本は 1d5+4
$bonus = dice("1d5") + 4;

// 5%の確率(1d20で１が出る)で +1d4 を、繰り返す
while( dice("1d20") === 1 ) {
    //$bonus = $bonus + dice("1d4");
    $bonus += dice("1d4");

    // デバッグ用マーカ
    echo "*";
}

var_dump($bonus);
