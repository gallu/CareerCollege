<?php   // switch.php

$num = random_int(0, 4);
$num = "1";
echo "{$num} is ";

switch ($num) {
    case 0:
        echo "Zero";
        break;
    case 1:
        echo "numeric 1";
        break;
    case "1":
        echo "string 1";
        break;
    case 2:
        echo "2nd";
        break;
    default :
        echo "any";
        break;
}
