<?php  // dice_monte_test.php
declare(strict_types=1);

require_once  __DIR__ . "/dice.php";

$count = [];
$times = 100000; // 履行回数
for($i = 0; $i < $times; ++$i) {
    $r = dice("3d6");
    $count[$r] ??= 0;
    $count[$r] ++;
    // var_dump($r);
}

// sortする
ksort($count);

// var_dump($count);
foreach ($count as $k => $v) {
    $p = $v / $times * 100;
    echo "{$k}: {$p}% <br> \n";
}

