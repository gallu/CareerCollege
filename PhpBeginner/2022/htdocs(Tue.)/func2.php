<?php   // func2.php

//
function 関数名() {
    $戻り値 = random_int(0, 10);
    return $戻り値;
}
$r = 関数名();
var_dump( $r );

//
function func2() {
    return [random_int(0, 10), random_int(0, 10)];
}
$r = func2();
var_dump( $r );
