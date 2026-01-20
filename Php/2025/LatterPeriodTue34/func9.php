<?php  // func9.php

function hoge() {
	$i = 0;
	static $j = 0;
	++$i;
	++$j;
	echo "i is {$i}, j is {$j}<br>";
}

hoge();
hoge();
hoge();
