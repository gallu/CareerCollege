<?php  // dice_monte_test.php
declare(strict_types=1);
require_once  __DIR__ . "/dice.php";

$target = "3d6";
const TIMES = 100000;

$sum = [];
for ($i = 0; $i < TIMES; ++$i) {
    $r = dice($target);
    $sum[$r] ??= 0; // Warning: Undefined array key を消す
    $sum[$r] ++;
}

ksort($sum);
// print_r($sum);

foreach ($sum as $k => $v) {
    $p = $v / TIMES * 100;
    echo "{$k} : {$p}% <br>";
}
