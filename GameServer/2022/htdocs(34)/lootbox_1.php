<?php  // lootbox_1.php

require_once("lootbox_set.php");

//　基本「ダメ」ながちゃロジック
function lootbox($set) {
    $max = count($set) - 1;
    $no = random_int(0, $max);
    $card = $set[$no];
    //
    return $card;
}
//
/*
$card = lootbox($set);
var_dump($card["name"]);
*/



