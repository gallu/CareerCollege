<?php  // switch.php

$num = "2";

if ($num === 1) {
    echo "num is int(1) <br>";
} elseif ($num === 2) {
    echo "num is int(2) <br>";
} else {
    echo "num is else <br>";
}

var_dump(2 === "2"); // 厳格な比較
var_dump(2 == "2");  // あいまいな比較
echo "<br>";

switch ($num) {
    case 1:
        echo "num is int(1) <br>";
        break;
    case 2:
        echo "num is int(2) <br>";
        break;
    default:
        echo "num is else <br>";
        break;
}

$s = match($num) {
    1 => "num is int(1) <br>",
    2 => "num is int(2) <br>",
    "2" => "num is string(2) <br>",
    default => "num is else <br>",
};
echo $s;








