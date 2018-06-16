<?php   // dice_test.php

require_once('./dice.php');

$av = [];
$count = 100000;
//
for($i = 0; $i < $count; ++$i) {
    $d = dice("3d6");
    @$av[$d] ++;
}
ksort($av);
//var_dump($av);
//
foreach($av  as  $k => $v) {
    $av[$k] = $v  /  $count * 100;
    printf("%d: %.4f%%<br>\n", $k, $av[$k]);
}
//var_dump($av);
