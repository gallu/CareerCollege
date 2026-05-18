<?php  // if4.php

$age = random_int(10, 30);
echo "age {$age} is ...";

if ($age >= 20) {
    echo "成人です <br>";
} else {
    echo "未成年です <br>";
}
