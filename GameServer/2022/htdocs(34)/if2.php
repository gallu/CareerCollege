<?php   // if2.php

$level = random_int(1, 20);
echo "Level {$level} is ... ";

if ($level >= 13) {
    echo "master level !!!";
} else {
    echo "not master";
}