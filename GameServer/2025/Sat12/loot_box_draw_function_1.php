<?php  // loot_box_draw_function_1.php

// 「全てのカードが等確率で排出される」から、これはダメ！
function lootBoxDraw($loot_box_data) {
    // 乱択をする
    $loot_box_data_count = count($loot_box_data);
    $idx = random_int(0, $loot_box_data_count-1);
    $card = $loot_box_data[$idx];

    //
    return $card;
}
