<?php  // break.php
declare(strict_types=1);

// 「数値を指定しての break」の学習
for($i = 0; $i < 10; ++$i) {
    echo "{$i}<br>\n";
    while(true) {
        $rand = random_int(0, 5);
        if (5 === $rand) {
            break 2;
        }
        if (0 === $rand) {
            break;
        }
        echo '.';
    }
    echo "<br>\n";
}
echo "<br>\n fin";
