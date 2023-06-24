<?php  // for.php

// 10回繰り返す
for($i = 0; $i < 10; ++$i) {
	echo "{$i}, ";
}
echo "<br> \n";

//　「１から１０まで」を足す
$total = 0;
for($i = 1; $i <= 10; ++$i) {
	echo "{$i}, ";
	$total = $total + $i;
}
echo "<br> {$total} <br> \n";
