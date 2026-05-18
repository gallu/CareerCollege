<?php  // if2.php

$age = random_int(10, 30);
echo "age {$age} is ...";

if ($age >= 20) {
    echo "成人です <br>";
}

if ($age < 20) {
    echo "未成年です <br>";
}
