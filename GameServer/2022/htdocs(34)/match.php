<?php   // match.php

$num = random_int(0, 4);
$num = "1";
echo "{$num} is ";

$v = match($num) {
    0 => "Zero",
    1 => "numeric 1",
    "1" => "string 1",
    2 => "2nd",
    default => "any",
};
echo $v;
