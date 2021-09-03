<?php   // while.php
// https://dev2.m-fr.net/アカウント名/while.php
/*
for($i = 0; $i < 5; ++$i) {
	echo "{$i} <br>\n";
}
*/
//
$i = 0;
while($i < 5) {
	echo "{$i} <br>\n";
	++$i;
	
	break;
}
//
while(false) {
	echo "into false <br>\n";
}





