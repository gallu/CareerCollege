<?php   // hash_array.php

// 連想配列(hash配列)の作成
$hash_array = [
	'key_1' => 111,
	'key_2' => 222,
	'key_3' => 333,
];
var_dump( $hash_array );
echo "<br>\n";
var_dump( $hash_array['key_2'] );
echo "<br>\n";
$count = count($hash_array);
echo "hash_array: {$count} <br>\n";
