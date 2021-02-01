<?php  // if_2.php

$age = mt_rand(10, 30);
echo "{$age}は...";

if ($age >= 20) {
    echo "成人です<br>\n";
} else {
    echo "未成年です<br>\n";
}

//
if (0 === ($age & 1)) {
    echo "で、偶数です<br>\n";
} else {
    echo "で、奇数です<br>\n";
}

