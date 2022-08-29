<?php   // loop3.php

for($i = 0; $i < 10; ++$i) {
	echo $i;
	echo ",";
}
echo "<br>";

for($i = 0; $i < 10; ++$i) {
	if (3 === $i) {
		continue;
	}
	if (7 === $i) {
		break;
	}
	echo $i;
	echo ",";
}
