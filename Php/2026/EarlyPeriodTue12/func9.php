<?php  // func9.php
declare(strict_types=1);

function add(int $i, int $j): int {
    $total = $i + $j;
    return $total;
}

//
$r = add(12, 34);
echo "add is {$r} <br>\n";

// 第二引数の型がstringなのでNG
// $r = add(12, "ab");
// echo "add is {$r} <br>\n";

$r = add(12, "10e2");
echo "add is {$r} <br>\n";
