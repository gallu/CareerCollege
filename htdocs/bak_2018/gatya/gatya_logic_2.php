<?php  // gatya_logic_2.php
/*
card_id 1 → 50%
card_id 2 → 30%
card_id 3 → 15%
card_id 4 → 4%
card_id 5 → 1%
 */

// 「合計数」を把握
$total = 50 + 30 + 15 + 4 + 1;

// 乱数を生成
$key = mt_rand(0, $total - 1);
var_dump($key);

// 「どれにヒットするか」を判定
       if ($key < 50) {
    // card_id 1 → 50%
    $card_id = 1;
} else if ($key < (50+30)) {
    // card_id 2 → 30%
    $card_id = 2;
} else if ($key < (50+30+15)) {
    // card_id 3 → 15%
    $card_id = 3;
} else if ($key < (50+30+15+4)) {
    // card_id 4 → 4%
    $card_id = 4;
} else if ($key < (50+30+15+4+1)) {
    // card_id 5 → 1%
    $card_id = 5;
} else {
    // ここには入らないはず！！
    $card_id = -1;
}

var_dump($card_id);
