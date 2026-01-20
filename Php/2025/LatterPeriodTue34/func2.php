<?php  // func2.php

// 値渡し(なので、呼び元の変数は変化しない)
function hoge($i) {
	$i += 100;
	echo "i is {$i} <br>";
}

$global_i = 10;
echo "global_i is {$global_i} <br>";

hoge($global_i);
echo "after global_i is {$global_i} <br>";
