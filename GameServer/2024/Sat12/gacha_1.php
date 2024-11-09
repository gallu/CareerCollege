<?php  // gacha_1.php
// https://dev2.m-fr.net/アカウント名/gacha_1.php

require_once __DIR__ . "/gacha_base.php";

function gacha($list) {
    //
    $count = count($list);
    $index = random_int(0, $count - 1);

    return $list[$index];
}

/*
$list = getGachaList();
// var_dump($list);
$card = gacha($list);
var_dump($card);
*/
