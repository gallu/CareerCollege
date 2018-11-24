<?php  // gatya_logic_2_new_test.php

require_once('./gatya_logic_2_new.php');

$param = [
    1 => 50,
    2 => 30,
    3 => 15,
    4 => 4,
    5 => 1,
];

$data = [];
$max = 100000;
for($i = 0; $i < $max; ++$i) {
    $card_id = gatya($param);
    @$data[$card_id] ++;
}
//
ksort($data);
//
foreach($data as $k => $v) {
    echo "{$k} -> ", $v / $max * 100 , "%<br>\n";
}
