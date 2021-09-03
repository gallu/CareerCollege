<?php   // while.php
// https://dev2.m-fr.net/アカウント名/while.php

$i = 0;
while($i < 10) {
	echo $i , "<br>\n";
	++$i;

	break;
}

while(false) {
	/*  */
	echo "into false <br>\n";
}
