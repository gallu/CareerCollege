<?php  // while.php

$i = 0;
while($i < 10) {
	echo "{$i}, ";
	++$i;
}
echo "<br> \n";


while(0 !== random_int(0, 10)) {
	echo ".";
}
