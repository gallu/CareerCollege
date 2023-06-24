<?php  // switch.php

// $val = 2;
$val = "2";

if ($val === 1) {
    echo "if: val is 1<br>";
} elseif ($val === 2) {
    echo "if: val is 2<br>";
} else {
    echo "if: val is not 1,2 <br>";
}

switch($val) {
    case 1:
        echo "switch: val is 1<br>";
        break;
    case 2:
        echo "switch: val is 2<br>";
        break;
    default:
        echo "switch: val is not 1,2<br>";
        break;
}

$str = match($val) {
    1 => "match: val is 1<br>",
    2 => "match: val is 2<br>",
    default => "match: val is not 1,2<br>",
};
echo $str;






