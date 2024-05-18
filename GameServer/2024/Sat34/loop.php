<?php  // loop.php

for ($i = 0; $i < 10; ++$i) {
    if (($i % 2) === 0) {
        continue;
    }
    echo "{$i}, ";
    if (7 <= $i) {
        break;
    }
}
echo "<br>";
