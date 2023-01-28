<?php  // WizB.php

require_once('dice.php');

// 通常 5～9 (1d5+4)
$bonus = dice('1d5+4');

// 1d20で１がでたら　+1d5(繰り返し)
while(1 === dice('1d20')) {
    $bonus += dice('1d5');
}

echo "ボーナス: {$bonus}";
