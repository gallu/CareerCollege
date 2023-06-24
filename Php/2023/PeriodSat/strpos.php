<?php  // strpos.php

$r = strpos("abcdefg", "a");
var_dump($r);
if (false == $r) {
	echo "なかったよ";
} else {
	echo "あったよ";
}
