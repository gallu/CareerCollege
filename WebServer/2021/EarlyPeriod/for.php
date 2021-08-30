<?php  // for.php
declare(strict_types=1);

// 10回loop for版
for($i = 0; $i < 10; ++$i) {
    echo "{$i}, ";
}
echo "<br>\n";

// 10回loop while版
$i = 0;
while($i < 10) {
    echo "{$i}, ";
    ++$i;
}
echo "<br>\n";

// continueの実験
for($i = 0; $i < 10; ++$i) {
    if (0 === ($i % 2)) {
        continue;
    }
    echo "{$i}, ";
}
echo "<br>\n";

// breakの実験
while(true) {
    $i = random_int(0, 50);
    if (0 === $i) {
        break;
    }
    echo '.';
}
echo "<br>\n";







