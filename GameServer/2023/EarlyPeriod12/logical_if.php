<?php  // logical_if.php

$height = random_int(100, 170);
$age = random_int(40, 80);

echo "height: {$height}, age:{$age} is ...";

if ( ($height >= 125)&&($age <= 64) ) {
    echo "can ride!! <br>";
} else {
    echo "can not ride orz <br>";
}
