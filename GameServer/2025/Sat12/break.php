<?php  // break.php

$hp = 20;

// 九頭龍閃
for ($i = 0; $i < 9; ++$i) {
    $damage = random_int(1, 10);
    $hp = $hp - $damage;

    echo "斬撃！ {$damage}: HP {$hp} <br>";

    if ($hp <= 0) {
        break;
    }
}

