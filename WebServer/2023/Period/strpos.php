<?php  // strpos.php

// $needle = 'def';
// $needle = 'abc';
$needle = 'xyz';

$r = strpos('abcdefghijkl', $needle);
var_dump($r);
if ($r === false) {
	echo "{$needle}はなかったよ...";
} else {
	echo "{$needle}はあったよ！！";
}
