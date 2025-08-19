<?php  // func12.php
declare(strict_types=1);

function hoge(int $number, float $rate = 1.1, string $name = 'hoge') {
    $r = $number * $rate;
    var_dump($number, $rate, $r, $name);
}

hoge(123, 2.0, 'foo');
echo "<br>";

// hoge();
hoge(456);
echo "<br>";
