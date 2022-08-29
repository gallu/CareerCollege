<?php   // loop3.php

for($i = 0; $i < 20; ++$i) {
    if ($i === 15) {
        continue;
    }
    if ($i === 18) {
        break;
    }

    echo "{$i}, ";
}
