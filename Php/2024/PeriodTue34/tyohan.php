<?php  // tyohan.php

$i = random_int(1, 6);
$j = random_int(1, 6);

$r = ($i + $j) % 2;

echo "{$i} {$j} の";

if ($r === 0) {
    echo "長!!";
} else {
    echo "半!!";
}

