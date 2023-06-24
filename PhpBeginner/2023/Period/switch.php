<?php  // switch.php

// $num = 2;
$num = "2";

if ($num === 1) {
	echo "num is 1 <br> \n";
} elseif ($num === 2) {
	echo "num is 2 <br> \n";
} elseif ($num === 3) {
	echo "num is 3 <br> \n";
} else {
	echo "num is any <br> \n";
}


switch($num) {
	case 1:
		echo "2) num is 1 <br> \n";
		break;
	case 2:
		echo "2) num is 2 <br> \n";
		break;
	case 3:
		echo "2) num is 3 <br> \n";
		break;
	default:
		echo "2) num is any <br> \n";
		break;
}

var_dump(2 === "2");
var_dump(2 == "2");
