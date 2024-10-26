<?php  // break2.php

for($i = 0; $i < 10; ++$i) {
	for($j = 0; $j < 10; ++$j) {
		if ($j >= 5) {
			break 2;
		}
		echo "i:{$i}, j;{$j} <br>";
	}
}

$flg = true;
for($i = 0; $i < 10; ++$i) {
	for($j = 0; $j < 10; ++$j) {
		if ($j >= 5) {
			$flg = false;
			break;
		}
		echo "i:{$i}, j;{$j} <br>";
	}
	if (false === $flg) {
		break;
	}
}



