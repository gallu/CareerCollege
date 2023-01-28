<?php  // grammar2.php

$awk = [
    'aaa',
    'key' => 'bbb',
    'ccc',
    'inde' => 'ddd',
];
//var_dump($awk);

$awk[] = 'zzz';
$awk['key2'] = 'value';

foreach($awk as $v) {
    echo "{$v} , ";
}
echo "<br>\n";
//
foreach($awk as $k => $v) {
    echo "{$k}:{$v} , ";
}
echo "<br>\n";

function calTax($i) {
    $tax = (int)($i * 0.1);
    return $tax;
}
//
echo "1000円の税は " , calTax(1000) , "円です<br>\n";
echo "12345円の税は " , calTax(12345) , "円です<br>\n";

