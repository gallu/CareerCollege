<?php  // for3.php

for ($i = 0; $i < 10; ++$i) {
    echo $i;
}
echo "<br><br>";

// 四角
for ($i = 0; $i < 5; ++$i) {
    echo "{$i}:";
    for ($j = 0; $j < 10; ++$j) {
        echo $j;
        // echo "*";
    }
    echo "<br>";
}
echo "<br><br>";

//
for ($i = 0; $i < 5; ++$i) {
    for ($j = 0; $j <= $i; ++$j) {
        echo $j;
    }
    echo "<br>";
}
echo "<br><br>";

//
for ($i = 0; $i < 5; ++$i) {
    for ($j = 0; $j < 5; ++$j) {
        if ($i === $j) {
            echo "●";
        } else {
            echo $j;
        }
    }
    echo "<br>";
}
echo "<br><br>";

