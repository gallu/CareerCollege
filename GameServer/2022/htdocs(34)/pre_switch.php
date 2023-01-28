<?php   // pre_switch.php

$num = random_int(0, 4);
$num = "1";
echo "{$num} is ";

if ($num === 0) {
    echo "Zero";
} else if ($num === 1) {
    echo "numeric 1";
} else if ($num === "1") {
    echo "string 1";
} else if ($num === 2) {
    echo "2nd";
} else {
    echo "any";
}

