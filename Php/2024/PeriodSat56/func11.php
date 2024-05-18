<?php  // func11.php
declare(strict_types=1);

// デフォルト引数値
function hoge(int $num, string $str = "def", bool $flg = false) {
    var_dump($num, $str, $flg);
}

function foo(int $num, string $str, bool $flg) {
    var_dump($num, $str, $flg);
}

hoge(123, "str", true);
echo "<br>";

foo(123, "str", true);
echo "<br>";

// foo(123);
// echo "<br>";

hoge(123);
echo "<br>";

hoge(num: 123, flg: true);
echo "<br>";

