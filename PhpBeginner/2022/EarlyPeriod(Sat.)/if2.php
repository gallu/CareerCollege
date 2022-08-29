<?php   // if2.php

$age = random_int(15, 30);
echo "{$age}歳は...";

if ($age >= 20) {
    echo "成人です";
} else {
    echo "未成年です";
}