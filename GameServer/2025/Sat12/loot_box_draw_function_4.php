<?php  // loot_box_draw_function_4.php

// がちゃロジックの本命
function lootBoxDraw($loot_box_data) {
    // 「排出確率」の合計の算出
    $p_total = 0;
    foreach ($loot_box_data as $d) {
        $p_total += $d["probability"];
    }
    // echo "probability total is {$p_total} <br>\n";

    // 排出するカード用の情報を取得
    $p = random_int(0, $p_total-1);
    // echo "p is {$p} <br>\n";

    //
    $probability = 0;
    foreach ($loot_box_data as $k => $d) {
        $probability += $d["probability"];
        // echo "{$k}: {$probability} <br>\n";
        if ($p < $probability) {
            return $d;
        }
    }

    // 本来あり得ないので、エラー的な出力をしておく
    return null;
}