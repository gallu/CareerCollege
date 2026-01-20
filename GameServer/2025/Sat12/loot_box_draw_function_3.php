<?php  // loot_box_draw_function_3.php

// 「のちのロジック」を学習するための疑似処理
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

    // 「どのカードが選択されたか？」の確認
    if ($p < 20) {
        // Phoenix  20
        return $loot_box_data[0];
    } elseif ($p < 20 + 18) { // 38
        // Cerberus 18
        return $loot_box_data[1];
    } elseif ($p < 20 + 18 + 15) { // 53
        // Slime King   15
        return $loot_box_data[2];
    } elseif ($p < 20 + 18 + 15 + 14) { // 67
        // Goblin Shaman    14
        return $loot_box_data[3];
    } elseif ($p < 20 + 18 + 15 + 14 + 13) { // 80
        // Mimic    13
        return $loot_box_data[4];
    } elseif ($p < 20 + 18 + 15 + 14 + 13 + 10)  { // 90
        // Griffin  10
        return $loot_box_data[5];
    } elseif ($p < 20 + 18 + 15 + 14 + 13 + 10 + 7) { // 96
        // Dark Elf     7
        return $loot_box_data[6];
    } elseif ($p < 20 + 18 + 15 + 14 + 13 + 10 + 7 + 3) { // 100
        // Dragon Lord  3
        return $loot_box_data[7];
    }

    // 本来あり得ないので、エラー的な出力をしておく
    return null;
}
