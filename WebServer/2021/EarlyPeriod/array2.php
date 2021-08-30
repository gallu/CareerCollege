<?php  // array2.php
declare(strict_types=1);

// 配列の加算
$awk1 = [
    1,
    'hoge' => 2,
    'foo' => 2,
    3,
];
$awk2 = [
    11,
    'hoge' => 22,
    'bar' => 222,
    33,
    44,
];
var_dump($awk1, $awk2);

//
$awk_plus = $awk1 + $awk2;
$awk_merge = array_merge($awk1, $awk2);
echo "<br>awk_plus<br>\n";
var_dump($awk_plus);
echo "<br>awk_merge<br>\n";
var_dump($awk_merge);






