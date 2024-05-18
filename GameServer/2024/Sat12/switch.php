<?php  // switch.php

$num = "2";

if (1 === $num) {
    echo "num is int(1) <br>";
} elseif (2 === $num) {
    echo "num is int(2) <br>";
} else {
    echo "num is any <br>";
}

var_dump(2 === $num); // 厳格な比較
var_dump(2 == $num); // 曖昧な比較
echo "<br>";

switch($num) {
    case 1:
        echo "num is int(1) <br>";
        break;
    case 2:
        echo "num is int(2) <br>";
        break;
    default:
        echo "num is any <br>";
        break;
}

$str = match($num) {
    1 => "num is int(1) <br>",
    2 => "num is int(2) <br>",
    default => "num is any <br>",
};
echo $str;
