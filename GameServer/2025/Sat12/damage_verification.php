<?php  // damage_verification.php

function damage3($attack, $defense) {
    $damage = ($attack / 2) - ($defense / 4);
    $damage = floor($damage); // 端数は切捨て
    if ($damage <= 0) {
        $damage = 0; 
    }
    return $damage;
}

// ダメージの簡単な検証
// for ($attack = 1; $attack <= 50; ++$attack) {
    // for ($defense = 1; $defense <= 50; ++$defense) {
        // $r = damage3($attack, $defense);
        // echo "atk:{$attack}, def:{$defense} = {$r} <br>\n";
    // }
// }

echo "<table border='1'>";
echo "<tr><th>";
for ($i = 1; $i <= 50; ++$i) {
    echo "<th>{$i}";
}
for ($attack = 1; $attack <= 50; ++$attack) {
    echo "<tr><th>atk:{$attack}";
    for ($defense = 1; $defense <= 50; ++$defense) {
        $r = damage3($attack, $defense);
        echo "<td>{$r}";
    }
}

