<?php  // switch.php

$v = 3;
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

switch ($v) {
    case 1:
        echo "v is 1 <br>";
        break;
    case 2:
        echo "v is 2 <br>";
        break;
    case 200:
        echo "v is 200 <br>";
        break;
    default:
        echo "v is any <br>";
        break;
}

