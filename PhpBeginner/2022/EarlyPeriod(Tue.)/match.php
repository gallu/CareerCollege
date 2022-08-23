<?php   // match.php

$i = random_int(0, 3);
//$i = "1";
var_dump($i);

$v = match($i) {
    0 => "Zero",
    "1" => "string 1",
    1 => "num 1",
    2 => "2nd",
    default => "any",
};
echo $v;
