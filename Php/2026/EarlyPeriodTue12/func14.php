<?php  // func14.php
declare(strict_types=1);

// 無名関数
$func = function(int $i, int $j): int {
    return $i + $j;
};
$r = $func(123, 456);
var_dump($r);
echo "<br>";

// アロー関数
$func2 = fn(int $i, int $j): int => $i + $j;
$r = $func2(456, 789);
var_dump($r);
echo "<br>";

