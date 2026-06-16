<?php  // if6.php

$height = random_int(100, 160);
$age = random_int(40, 65);
echo "height: {$height}, age:{$age} is ... ";

//
if ( ($height >= 125)&&($age <= 54) ) {
	echo "can ride!! <br>";
} else {
	echo "not ride... <br>";
}

//
if ( ($height < 125)||($age > 54) ) {
	echo "not ride... <br>";
} else {
	echo "can ride!! <br>";
}
