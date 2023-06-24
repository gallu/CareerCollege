<?php   // func1.php
declare(strict_types=1);

function add(int|float $num1, int|float $num2): int|float {
    $r = $num1 + $num2;
    // return "string";
    return $r;
}

var_dump( add(10, 20) );
// var_dump( add("abc", 20) );
// var_dump( add("123", 20) );
// var_dump( add(true, 20) );
var_dump( add(3.14, 1.4142) );
