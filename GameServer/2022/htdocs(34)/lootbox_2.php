<?php   // lootbox_2.php
require_once("lootbox_set.php");
//
function lootbox($set) {
    //
    $data = [];
    $total = 0;
    foreach($set as $v) {
        // 確率を把握
        $p = $v["probability"];
        // 確率と同じ数だけ、配列に積む
        for($i = 0; $i < $p; ++$i) {
            $data[] = $v;
        }
        // 確率を（ねんのため）合算
        $total += $p;
    }
    //var_dump($total, $data);

    // 1つ選ぶ
    $no = random_int(0, ($total - 1));
    $card = $data[$no];
    
    return $card;
}
//
$card = lootbox($set);
//var_dump($card["name"]);
