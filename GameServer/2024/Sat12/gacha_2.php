<?php  // gacha_2.php
require_once __DIR__ . "/gacha_base.php";

function gacha($list) {
    // 確率の分だけ配列に積み込む
    $processed_list = [];
    foreach ($list as $k => $v) {
        for ($i = 0; $i < $v["probability"]; ++$i) {
            $processed_list[] = $v;
        }
    }

    // 配列から1つ乱択する
    $count = count($processed_list);
    $index = random_int(0, $count - 1);

    return $processed_list[$index];
}

/*
$list = getGachaList();
// var_dump($list);
$card = gacha($list);
var_dump($card);
*/
