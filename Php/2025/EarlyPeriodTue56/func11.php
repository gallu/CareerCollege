<?php  // func11.php
declare(strict_types=1);

function hoge(int $number, string $name, float $rate) {
    var_dump($number, $name, $rate);
}

//
hoge(123, 'name', 3.14);
echo "<br>";

hoge(number: 456, name: 'str', rate: 1.4142);
echo "<br>";

hoge(rate: 6.543, number: 987, name: 'hogera');
echo "<br>";

