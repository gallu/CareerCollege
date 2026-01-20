<?php  // switch.php

$i = 200;

if ($i === 0) {
    echo "i is Zero<br>";
} elseif ($i === 1) {
    echo "i is One<br>";
} elseif ($i === "2e2") {
    echo "i is 2e2<br>";
} else {
    echo "i is any<br>";
}

switch ($i) {
    case 0:
        echo "switch: i is Zero<br>";
        break;
    case 1:
        echo "switch: i is One<br>";
        break;
    case "2e2":
        echo "switch: i is 2e2<br>";
        break;
    default:
        echo "switch: i is any<br>";
        break;
}
