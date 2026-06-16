<?php  // continue.php

$hp = 20;

for ($i = 0; $i <10; ++$i) {
    $dodge = random_int(0, 99);
    if ($dodge < 50) {
        echo "避けた!!!<br>";
        continue;
    }

    $damage = random_int(2, 10);
    $hp = $hp - $damage;
    echo "{$hp} <br>";

    if ($hp <= 0) {
        echo "倒した!! <br>";
        break;
    }
}

echo "fin.";

