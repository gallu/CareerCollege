<?php  // break.php

$hp = 20;

for ($i = 0; $i <10; ++$i) {
    $damage = random_int(2, 10);
    $hp = $hp - $damage;
    echo "{$hp} <br>";

    if ($hp <= 0) {
        echo "倒した!! <br>";
        break;
    }
}

echo "fin.";

