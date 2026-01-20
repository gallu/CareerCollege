<?php  // if4.php

$age = random_int(10, 30);
echo "age is {$age}<br>";

if ($age >= 20) {
    echo "成人ですね!!";
} else {
    echo "未成年ですね!!";
}
