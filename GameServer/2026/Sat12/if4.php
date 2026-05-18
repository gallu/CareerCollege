<?php  // if4.php

$hit = random_int(1, 6) + random_int(1, 6);
echo "dice {$hit} is ... ";

if ($hit >= 8) {
	echo "hit !!";
} else {
	echo "no hit ...";
}
