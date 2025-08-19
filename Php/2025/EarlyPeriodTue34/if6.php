<?php   // if6.php

$age = random_int(0, 40);
echo "age is {$age} <br>";

if ($age >= 20) {
    echo "成人です。<br>";
} elseif ($age === 19) {
    echo "来年成人式ですね！！<br>";
} else {
    echo "未成年です。<br>";
}

echo "fin.<br>";
