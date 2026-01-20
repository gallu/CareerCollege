<?php  // nest.php

// ネスト、入れ子構造
for ($i = 1; $i <= 9; ++$i) {
    for ($j = 1; $j <= 9; ++$j) {
        $total = $i * $j;
        echo "{$i}*{$j}={$total}, ";
    }
    echo "<br>";
}
