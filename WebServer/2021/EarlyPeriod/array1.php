<?php   // array1.php
declare(strict_types=1);

$awk = [1, 2, 3, 4, 5];
var_dump($awk);

$hwk = [
    'hoge' => 1,
    'foo' => '2',
    'bar' => true,
];
var_dump($hwk);

//
foreach($awk as $k => $v) {
    echo "{$k}: {$v}<br>\n";
}




