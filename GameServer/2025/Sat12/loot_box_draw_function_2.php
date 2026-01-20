<?php  // loot_box_draw_function_2.php

// 百分率までならあり。千分率なら、要検討くらい。
function lootBoxDraw($loot_box_data) {
    // 確率に従ってデータを(偏るように)積み上げる
    $data = [];
    foreach ($loot_box_data as $c) {
        for ($i = 0; $i < $c["probability"]; ++$i) {
            $data[] = $c;
        }
    }
    // var_dump( count($data) );

    // 積み上げたデータから乱択
    $count = count($data);
    $idx = random_int(0, $count-1);
    $card = $data[$idx];

    //
    return $card;
}

