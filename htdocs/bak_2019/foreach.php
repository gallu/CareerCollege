<?php  // foreach.php

$awk = [1,2,3,4,5];
//
foreach($awk as $k => $v) {
    echo "{$k}: {$v}<br>\n";
}

//
$awk = [
    'hoge' => 'hhh',
    'foo' => 'fff',
    'bar' => 'bbb',
];
foreach($awk as $k => $v) {
    echo "{$k}: {$v}<br>\n";
}





