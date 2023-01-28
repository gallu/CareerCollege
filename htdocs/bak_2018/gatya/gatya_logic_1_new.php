<?php  // gatya_logic_1_new.php
/*
card_id 1 → 50%
card_id 2 → 30%
card_id 3 → 15%
card_id 4 → 4%
card_id 5 → 1%
 */

function gatya($param) {
    // 「でっかい全部入りの配列」を作る
    $list = [];
    foreach($param as $card_id => $num) {
        for($i = 0; $i < $num; ++$i) {
            $list[] = $card_id;
        }
    }

    // １つ、取り出す
    $key = array_rand($list);
    $card_id = $list[$key];
    //
    return $card_id;
}

/*
$param = [
    1 => 50,
    2 => 30,
    3 => 15,
    4 => 4,
    5 => 1,
];
//
$card_id = gatya($param);
var_dump($card_id);
*/
