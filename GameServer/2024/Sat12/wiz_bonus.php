<?php  // wiz_bonus.php
declare(strict_types=1);
require_once  __DIR__ . "/dice.php";

function wizBonus() {
    // キャラクター作成時に与えられるボーナスポイントは、通常 5～9 (1d5+4)です
    $bonus_point = dice("1d5") + 4;
    // 追加
    while(dice("1d20") === 20) {
        $bonus_point += dice("1d5");
    }

    return $bonus_point;
}

for ($i = 0; $i < 10; ++$i) {
    $bonus_point = wizBonus();
    echo "ボーナス値: {$bonus_point} <br>\n";
}
