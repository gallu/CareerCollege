<?php  // exchange.php

// 
function exchange($dollar) {
    $rate = 145.42; // 1ドルが何円か？のレート

    // 円の計算
    $yen = $dollar * $rate;
    return $yen;
}

$d = 980;
echo "{$d}ドルは...";
$r = exchange($d);
echo "{$r}円 <br>";

$d = 9.50;
echo "{$d}ドルは...";
$r = exchange($d);
echo "{$r}円 <br>";
