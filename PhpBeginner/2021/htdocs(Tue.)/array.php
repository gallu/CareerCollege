<?php   // array.php
// https://dev2.m-fr.net/アカウント名/array.php

// 配列を作ってみる
$array = [11, 22, 33, 44];
var_dump( $array );
echo "<br>\n";
var_dump( $array[0] );
echo "<br>\n";

//
$array_2 = [
	'1st',
	'2nd',
	'3rd',
];
var_dump( $array_2 );
echo "<br>\n";
var_dump( $array_2[1] );
echo "<br>\n";

// 配列の要素数を数える
$count_1 = count($array);
$count_2 = count($array_2);
echo "array: {$count_1},   array_2: {$count_2} <br>\n";

// foreachで配列を反復処理する
foreach ($array_2  as  $key => $val) {
	echo "{$key} => {$val} <br>\n";
}

