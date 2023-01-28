<?php   // if2.php

$age = random_int(15, 25);
echo "{$age} is ... ";

if ($age >= 20) {
    echo "adult";
} else {
    echo "minors";
}
