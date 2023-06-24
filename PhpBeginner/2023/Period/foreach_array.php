<?php  // foreach_array.php

$arr = ["aaa", "bbb", "ccc"];
print_r($arr);

foreach($arr as $key => $val) {
	echo "{$key}: {$val} <br>\n";
}
