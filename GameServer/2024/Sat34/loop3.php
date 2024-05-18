<?php  // loop3.php

for ($i = 0; $i < 10; ++$i) {
    echo "i is {$i} <br>";
    for ($j = 0; $j < 10; ++$j) {
        if ($j > 5) {
            break 2;
        }
        echo "++++ j is {$j} <br>";
    }
}

// やめとけ
$flg = true;
for ($i = 0; $i < 10; ++$i) {
    if ($flg === false) {
        break;
    }
    echo "i is {$i} <br>";
    for ($j = 0; $j < 10; ++$j) {
        if ($j > 5) {
            $flg = false;
            break;
        }
        echo "++++ j is {$j} <br>";
    }
}
