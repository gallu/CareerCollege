<?php   // pre_switch.php

$i = random_int(0, 3);
$i = "1";
echo "{$i} is ...";

if ($i === 0) {
    echo "Zero";
} else if ($i === 1) {
    echo "1";
} else if ($i === "1") {
    echo "string 1";
} else if ($i === 2) {
    echo "2nd";
} else {
    echo "any";
}

