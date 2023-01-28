<?php   // lootbox_4.php
require_once("lootbox_set.php");
//
function lootbox($set) {
    // 確率の合計
    $p_total = 0;
    foreach($set as $k => $v) {
        $p_total += $v['probability'];
    }
    //echo "p_total is {$p_total} <br>";
    //　乱数の作成
    $no = random_int(0, ($p_total - 1));

    // 判定
    $probability = 0;
    foreach($set as $k => $v) {
        $probability += $v['probability'];
        //echo "{$k} => {$v["name"]} / {$probability} <br>";
        if ($no < $probability) {
            return $v;
        }
    }
    // ここには来ないはずだが……
    echo "おかしい！！！";
}
//
$card = lootbox($set);
//var_dump($card["name"]);
