<?php   // func.php
declare(strict_types=1);

//
//function hoge($i, $s, $f)
//function hoge(int $i, string $s, float $f) : int
//function hoge(int $i, ?string $s, float $f) : int
function hoge(int $i, ?string $s, int|float $f) : int
{
    var_dump( $i, $s, $f );
    return $i * 2;
}

$r = hoge(1, "2nd", 3.14);
var_dump($r);

$r = hoge(1, null, 3.14);
$r = hoge(1, null, 3);

/* */
class Hoge {
}
class Foo extends Hoge {
}
class Bar {
}

//
//function func($obj) {
//function func(Foo $obj) {
function func(Hoge $obj) {
    var_dump($obj);
}
//
func(new Hoge());
func(new Foo());
//func(new Bar());


