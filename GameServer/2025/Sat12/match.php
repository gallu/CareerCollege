<?php  // match.php

$v = 1;
$v = "1";
$v = "2e2";

if ($v === 1) {
    echo "v is 1 <br>";
} elseif ($v === 2) {
    echo "v is 2 <br>";
} elseif ($v === 200) {
    echo "v is 200 <br>";
} else {
    echo "v is any <br>";
}

$s = match($v) {
    1 => "match v is 1 <br>",
    2 => "match v is 2 <br>",
    200 => "match v is 200 <br>",
    default => "match v is any <br>",
};
echo $s;
