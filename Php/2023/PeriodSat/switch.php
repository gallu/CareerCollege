<?php  // switch.php

// $num = 2;
$num = "2";

if ($num === 1) {
    echo "if: num is 1<br>";
} elseif ($num === 2) {
    echo "if: num is 2<br>";
} else {
    echo "if: num is not 1,2<br>";
}

switch($num) {
    case 1:
        echo "switch: num is 1<br>";
        break;
    case 2:
        echo "switch: num is 2<br>";
        break;
    default:
        echo "switch: num is not 1,2<br>";
        break;
}

$str = match($num) {
    1 => "match: num is 1<br>",
    2 => "match: num is 2<br>",
    default => "match: num is not 1,2<br>",
};
echo $str;
