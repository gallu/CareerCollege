<?php   // if.php
// https://dev2.m-fr.net/アカウント名/if.php

//
$r = random_int(0, 99);
echo "{$r}...";

//
if ($r <= 50) {
	echo "成功！！<br>\n";
} else {
	echo "失敗 orz <br>\n";
}
