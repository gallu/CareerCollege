<?php  // gatya_logic_1.php
/*
card_id 1 ¨ 50%
card_id 2 ¨ 30%
card_id 3 ¨ 15%
card_id 4 ¨ 4%
card_id 5 ¨ 1%
 */

// ”äŠr“Ir‚Á‚Û‚¢‚â‚è•û
$list = [];
// card_id 1 ¨ 50%
for($i = 0; $i < 50; ++$i) {
    $list[] = 1;
}
// card_id 2 ¨ 30%
for($i = 0; $i < 30; ++$i) {
    $list[] = 2;
}
// card_id 3 ¨ 15%
for($i = 0; $i < 15; ++$i) {
    $list[] = 3;
}
// card_id 4 ¨ 4%
for($i = 0; $i < 4; ++$i) {
    $list[] = 4;
}
// card_id 5 ¨ 1%
$list[] = 5;

//var_dump($list);
$key = array_rand($list);
$card_id = $list[$key];
// $card_id = $list[array_rand($list)];
var_dump($card_id);
