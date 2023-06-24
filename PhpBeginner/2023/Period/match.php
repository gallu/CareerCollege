<?php  // match.php

$num = 2;
$num = "2";

$str = match($num) {
	1 => "num is 1 <br> \n",
	2 => "num is 2 <br> \n",
	3 => "num is 3 <br> \n",
	default => "num is any <br> \n",
};
echo $str;
