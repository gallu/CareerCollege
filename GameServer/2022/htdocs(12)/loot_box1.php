<?php   // loot_box1.php

// ガチャセットの読み込み
require_once("./loot_set.php");
//var_dump($loot_set);

function loot_box($loot_set) {
    $max = count($loot_set) - 1;
    $no = random_int(0, $max);
    $card = $loot_set[$no];
    //
    return $card;
}
//
//$card = loot_box($loot_set);
//var_dump($card["name"]);



