<?php  // for3.php

for ($i = 0; $i < 5; ++$i) {
    for ($j = 0; $j < 5; ++$j) {
        echo "* ";
    }
    echo "<br>";
}
echo "<br><br>";

for ($i = 0; $i < 5; ++$i) {
    for ($j = 0; $j <= $i; ++$j) {
        echo "* ";
    }
    echo "<br>";
}


for ($i = 0; $i < 5; ++$i) {
    $k = 5 - $i;
    for ($j = 0; $j < $k; ++$j) {
        echo "* ";
    }
    echo "<br>";
}