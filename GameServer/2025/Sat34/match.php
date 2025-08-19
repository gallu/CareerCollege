<?php  // match.php

// $val = 1;
$val = "2e2";

$r = match($val) {
    1 => "num 1",
    2 => "num 2",
    200 => "num 200",
    default => "num any",
};
echo "{$r}<br> fin.";
