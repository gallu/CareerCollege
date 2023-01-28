<?php  // loop.php

for($i = 0; $i < 10; ++$i) {
	echo $i;
	echo ",";
}
echo "<br>\n";

//
$i = 0;
while($i < 10) {
	echo $i;
	echo ",";
	++$i;
}
echo "<br>\n";

//
while(0 !== random_int(0, 10)) {
	echo ".";
}

