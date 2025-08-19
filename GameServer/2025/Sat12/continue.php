<?php  // continue.php

for ($i = 0; $i < 10; ++$i) {
    // if ($i % 2 === 0) {
    if (($i & 1) === 0) {
        continue;
    }

    echo "{$i} <br>";
}

