<?php  // func6.php
declare(strict_types=1);

function hoge(int $num, string $str, float $f, bool $b) {
    var_dump($num, $str, $f, $b);
}
//
hoge(123, "str", 3.14, false);
echo "<br>";

hoge(b: true, str: "foo", f: 1.414, num: 333);
echo "<br>";

$params = [
    444,
    "arr",
    1.23,
    false,
];
hoge(...$params);

$params = [
    "b" => true,
    "num" => 555,
    "f" => 9.87,
    "str" => "harr",
];
hoge(...$params);


