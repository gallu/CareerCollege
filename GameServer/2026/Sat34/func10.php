<?php  // func10.php
declare(strict_types=1);

// Union型
function add(int|float $i, int|float $j): int|float {
    $r = $i + $j;
    return $r;
}

//
$r = add(123, 456);
echo "r is {$r} <br>";
var_dump($r);
echo "<br>";

$r = add(1.23, 456);
echo "r is {$r} <br>";
var_dump($r);
echo "<br>";
