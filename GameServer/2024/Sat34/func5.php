<?php  // func5.php
declare(strict_types=1);

function hoge(int $num): int {
    $r = $num * 2;
    return $r;
}

$r = hoge(123);
var_dump($r);

// $r = hoge("abc");
// var_dump($r);

// $r = hoge("321");
// var_dump($r);
