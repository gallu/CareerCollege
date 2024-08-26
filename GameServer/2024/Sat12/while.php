<?php  // while.php

$i = 0;
while ($i < 10) {
    echo "{$i},";
    ++$i;
}
echo "<br>";

$i = 1;
while ($i <= 10) {
    echo "{$i},";
    ++$i;
}
echo "<br>";

// 激しく非推奨
$i = 0;
while (($j = $i++) < 10) {
    echo "{$j},";
}
echo "<br>";
