<?php  // rand3.php

function d6() {
    return mt_rand(1, 6);
}

$def = 5;
echo "難易度: {$def}<br>\n";

$success = 0;
for($i = 0; $i < 6; ++$i) {
	//
	$r = d6();
	//
    echo $r;
    echo "<br>\n";
	//
	if ($r >= $def) {
		++ $success;
	}
}

echo "成功度: {$success}<br>\n";







