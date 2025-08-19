<?php  // while.php

$i = 0;
while($i < 10) {
    echo "{$i}, ";
    ++$i;
}
echo "<br>";

// やめとけ
$i = 0;
while($i < 10) {
    echo $i++, ", ";
}
echo "<br>";
