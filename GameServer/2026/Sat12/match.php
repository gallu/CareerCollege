<?php  // match.php

$num = 200;
$num = "2e2";

if (100 === $num) {
	echo "num is 100 <br>";
} elseif (200 === $num) {
	echo "num is 200 <br>";
} elseif ("2e2" === $num) {
	echo "num is 2e2 <br>";
} else {
	echo "num is any <br>";
}
// 厳格な比較
$r = match($num) {
	100 => "match num is 100 <br>",
	200 => "match num is 200 <br>",
	"2e2" => "match num is 2e2 <br>",
	default => "match num is any <br>",
};
echo $r;
