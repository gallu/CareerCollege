<?php  // switch.php
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

// 曖昧な比較をしている
switch ($num) {
	case 100:
		echo "switch num is 100 <br>";
		break;
	case 200:
		echo "switch num is 200 <br>";
		break;
	case "2e2":
		echo "switch num is 2e2 <br>";
		break;
	default:
		echo "switch num is any <br>";
		break;
}

