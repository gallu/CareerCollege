<?php  // if4.php

$total = random_int(500, 1500);
echo "total {$total} ... ";

if ($total >= 1000) {
	echo "送料無料！！";
} else {
	echo "送料は300円です";
}
