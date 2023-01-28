<?php   // func3.php

function 関数名($引数) {
    echo "in function　{$引数} <br>";
    $戻り値 = $引数 * 99;

    return $戻り値;
}
//
$r = 関数名(12);
var_dump( $r );
