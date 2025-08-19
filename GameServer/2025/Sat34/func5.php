<?php  // func5.php
declare(strict_types=1);

function add(int $i, int $j): int {
    $r = $i + $j;
    return $r;
}
//
$r = add(12, 34);
var_dump($r);

// $r = add(12, "hoge");
// var_dump($r);

$r = add(12, "2e2");
var_dump($r);

$r = add(12, 3.14);
var_dump($r);
