<?php   // loop4.php
declare(strict_types=1);

//
for($i = 0; $i < 10; ++$i) {
    if (3 === $i) {
        continue;
    }
    if (6 === $i) {
        break;
    }
    echo "{$i}.";
}
echo "<br>\n";

//
for($i = 0; $i < 10; ++$i) {
    for($j = 0; $j < 10; ++$j) {
        if (5 === $j) {
            break 2;
        }
        if (7 === $j) {
            continue 2;
        }
        echo "{$i}-{$j}.";
    }
    echo "<br>\n";
}

