<?php  // func15.php
declare(strict_types=1);

function hoge(callable $func) {
    $r = $func(12, 34);
    echo "r is {$r} <br>\n";
}

hoge(function(int $i, int $j) {
    return $i + $j;
});

hoge(function(int $i, int $j) {
    return $i * $j;
});
