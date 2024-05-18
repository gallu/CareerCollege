<?php  // switch.php

$v = "2";

if (1 === $v) {
    echo "v is int(1) <br>";
} elseif (2 === $v) {
    echo "v is int(2) <br>";
} else {
    echo "v is any <br>";
}

switch($v) {
    case 1:
        echo "v is int(1) <br>";
        break;
    case 2:
        echo "v is int(2) <br>";
        break;
    default:
        echo "v is any <br>";
        break;
}

// match
$r = match($v) {
    1 => "v is int(1) <br>",
    2 => "v is int(2) <br>",
    "2" => "v is string(2) <br>",
    default => "v is any <br>",
};
echo $r;













