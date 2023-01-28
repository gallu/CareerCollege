<?php   // match.php

$i = random_int(1, 3);
//$i = "1";
var_dump($i);

$s = match($i) {
    1 => "1\n",
    2 => "2nd\n",
    "1" => "string 1\n",
    default => "not 1, not 2\n",
};
//
echo $s;
