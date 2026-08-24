<?php  // change_calc.php
/* おつり計算 */
$money_types = [
    5000,
    2000,
    1000,
    500,
    100,
    50,
    10,
    5,
    1,
];

$change_base = 5670;
$change = []; // 返すおつりの配列

$change_base_tmp = $change_base;
foreach ($money_types as $mt) {
    // echo "{$mt} <br>";
    while ($change_base_tmp >= $mt) {
        $change[$mt] ??= 0;
        $change[$mt]++;
        $change_base_tmp -= $mt;
    }
    if (0 === $change_base_tmp) {
        break;
    }
}
print_r($change);
