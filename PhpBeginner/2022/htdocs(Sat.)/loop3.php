<?php   // loop3.php

for($i = 0; $i < 20; ++$i) {
    echo "{$i}, ";
}
echo "<br>";

for($i = 0; $i < 20; ++$i) {
    if ($i === 10) {
        continue;
    }
    if ($i === 13) {
        break;
    }
    echo "{$i}, ";
}
//
echo "<br>end";