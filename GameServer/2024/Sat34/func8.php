<?php  // func8.php
declare(strict_types=1);

function hoge(int $num = 0, string $str = "default", float $f = 3.14) {
    var_dump($num, $str, $f);
}
//
hoge();
echo "<br>";

hoge(0, "str");
echo "<br>";

hoge(str: "str2");
echo "<br>";
