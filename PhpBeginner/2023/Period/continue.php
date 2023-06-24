<?php  // continue.php

for($i = 0; $i < 10; ++$i) {
    if ($i === 5) {
        continue;
    }
    echo "{$i}, ";
}
echo "<br> \n";
