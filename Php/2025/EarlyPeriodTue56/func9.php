<?php  // func9.php
declare(strict_types=1);

// 消費税計算(超簡易)
function calTax(int $price): int {
    return (int)floor($price * 1.1);
}

var_dump( calTax(100) );
// var_dump( calTax("abc") );
// var_dump( calTax("100") );
