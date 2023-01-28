<?php   // loop4.php

for($i = 1; $i <= 9; ++$i) {
    for($j = 1; $j <= 9; ++$j) {
        $k = $i * $j;
        echo "{$i}*{$j}={$k}, ";
    }
    echo "<br>";
}