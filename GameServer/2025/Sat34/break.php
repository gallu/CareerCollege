<?php  // break.php

for ($i = 0; $i < 10; ++$i) {
    echo "{$i}, ";

    if ($i > 5) {
        break;
    }
}

echo "<br>";

