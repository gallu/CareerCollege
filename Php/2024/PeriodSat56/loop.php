<?php  // loop.php

for ($i = 0; $i < 5; ++$i) {
    for ($j = 0; $j < 5; ++$j) {
        if (2 === $j) {
            break 2;
        }
        echo "{$i}-{$j} <br>\n";
    }
}
