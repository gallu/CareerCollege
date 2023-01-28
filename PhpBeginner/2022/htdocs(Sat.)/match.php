<?php   // match.php

$i = 2;

$s = match($i) {
    "2" => "string 2nd",
    1 => "1",
    2 => "2nd",
    default => "any",
};
echo  $s ;

