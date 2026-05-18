<?php  // match.php

$num = 200;

$s = match($num) {
    "2e2" => "num is 2e2 <br>",
    100 => "num is 100 <br>",
    200 => "num is 200 <br>",
    default => "num is any <br>",
};
echo $s;
