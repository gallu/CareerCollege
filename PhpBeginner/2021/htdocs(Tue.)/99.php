<?php   // 99.php

for($i = 1; $i <= 9; ++$i) {
    echo "{$i}の段 <br>\n";
    for($j = 1; $j <= 9; ++$j) {
        $k = $i * $j;
        echo "{$i} * {$j} = {$k} <br>\n";
    }
    echo "<br>\n";
}

