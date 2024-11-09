<?php  // gacha_monte_test.php

require_once __DIR__ . "/gacha_base.php";
require_once __DIR__ . "/gacha_1.php";

// XXX モンテカルロの実装


$list = getGachaList();
// var_dump($list);
$card = gacha($list);
var_dump($card);
