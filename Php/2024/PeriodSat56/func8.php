<?php  // func8.php
declare(strict_types=1);

function hoge(int $i, string $s, bool $b, array $arr): float {
    var_dump($i, $s, $b, $arr);
    return 1.4142;
}

$r = hoge(123, "str", true, []);
var_dump($r);

// strict_types がなければerrorにならない
$r = hoge("987", 987, "0", []);
var_dump($r);

