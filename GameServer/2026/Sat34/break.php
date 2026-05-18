<?php  // break.php

for ($i = 0; $i < 10; ++$i) {
    if ($i > 5) {
        echo "break <br>";
        break;
    }
    echo "{$i}, ";
}
echo "<br>";

for ($i = 0; $i < 10; ++$i) {
    if (0 === $i % 2) {
        echo "continue, ";
        continue;
    }
    echo "{$i}, ";
}
echo "<br>";