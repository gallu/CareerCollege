<?php   // func4.php
declare(strict_types=1);

//
function hoge(int $i) {
    $i *= 10;
    var_dump($i);
}
$i = 10;
hoge($i);
var_dump($i);

//
function foo(int &$i) {
    $i *= 99;
}
$i = 10;
foo($i);
var_dump($i);

