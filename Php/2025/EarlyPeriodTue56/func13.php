<?php  // func13.php
declare(strict_types=1);

function hoge(int $number = 1, float $rate = 1.1, string $name = 'hoge') {
    var_dump($number, $rate, $name);
}

//
hoge(rate: 3.14);
echo "<br>";

hoge(name: 'foo');
echo "<br>";

hoge(number: 456);
echo "<br>";

