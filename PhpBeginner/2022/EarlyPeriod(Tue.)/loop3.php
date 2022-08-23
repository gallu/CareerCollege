<?php   // loop3.php

//
for($i = 0; $i < 20; ++$i) {
    if (0 === ($i % 5)) {
        continue;
    }
    if (11 === $i) {
        break;
    }
    echo "{$i}.";
}
