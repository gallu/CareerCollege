<?php   // switch.php

$i = random_int(0, 3);
$i = "1";
echo "{$i} is ...";

switch($i) {
    case 0:
        echo "Zero";
        break;

    case 1:
        echo "1";
        break;

    case "1":
        echo "string 1";
        break;

    case 2:
        echo "2nd";
        break;

    default:
        echo "any";
        break;
}
