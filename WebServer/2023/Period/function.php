<?php  // function.php
declare(strict_types=1);

/**
 * こんなことをする関数
 *
 * @param int|float $i XXXXXXXXXXX
 * @param int|float $f XXXXXXXXXXX 
 * @param string $s XXXXXXXXXXX
 * @return int|float 入力をただ掛けてみた
 */
function test(int|float $i, int|float $f, string $s): int|float {
    var_dump($i, $f, $s);
    return $i * $f;
}

//
// $r = test(123, 3.1415, 'string');
$r = test(123.456, 3, 'string');
var_dump($r);
