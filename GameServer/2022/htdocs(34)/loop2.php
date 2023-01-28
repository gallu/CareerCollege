<?php   // loop2.php
// https://dev2.m-fr.net/アカウント名/loop2.php
//
while(0 !== random_int(0, 1)) {
	echo ".";
}
echo "<br>";

//
do {
	echo ".";
} while(0 !== random_int(0, 1));
echo "<br>";

//
while(false) {
	echo "into while <br>";
}
//
do {
	echo "into do-while <br>";
} while(false);
