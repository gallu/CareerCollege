<?php  // for2.php

$str = "abcdefg";
$len = strlen($str);

for ($i = 0; $i < $len; ++$i) {
	$c = $str[$i];
	echo "{$c} <br>";
}
