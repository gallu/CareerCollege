<?php  // func10.php
declare(strict_types=1);

// レート計算(超簡易)
function calRate(int|float $price): int {
    return (int)floor($price * 1.1);
}

var_dump( calRate(100) );
var_dump( calRate(100.25) );
