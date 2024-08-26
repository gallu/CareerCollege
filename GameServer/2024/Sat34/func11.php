<?php  // func11.php
declare(strict_types=1);

// 無名関数
$anfn = function(int $i, int $j) {
    return $i * $j;
};
//
var_dump( $anfn(2,4) );
echo "<br> \n";

// アロー関数
$arfn = fn(int $i, int $j) => $i * $j;
var_dump( $arfn(4,6) );
echo "<br> \n";
