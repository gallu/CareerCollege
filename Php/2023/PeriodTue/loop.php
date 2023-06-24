<?php  // loop.php

for($i = 0; $i < 10; ++$i) {
    echo "{$i},";
}
echo "<br>\n";

$i = random_int(0, 10);
var_dump($i);

while(random_int(0, 10) !== 0) {
    echo ".";
}

