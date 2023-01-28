<?php   // loop.php
declare(strict_types=1);

for($i = 0; $i < 10; ++$i) {
    echo "{$i}.";
}

echo "<br>\n";
$i = 0;
while($i < 10) {
    echo "{$i}.";
    ++$i;
}

echo "<br>\n";
while(0 !== random_int(0, 10)) {
    echo ".";
}

