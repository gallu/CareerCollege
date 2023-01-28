<?php   // op.php

// 比較演算子の確認
var_dump( 1 === 1 );
var_dump( 1 > 1 );
var_dump( 1 >= 1 );
var_dump( 2 > 1 );
var_dump( 1 > 3 );
echo  "<br>\n";

// NULL結合演算子の確認
$awk = [
    'key' => 'val',
];
$s = $awk['key']  ??  'default';
echo  "{$s} <br>\n";
//
$s2 = $awk['no_key']  ??  'default';
echo  "{$s2} <br>\n";
var_dump($s2);
