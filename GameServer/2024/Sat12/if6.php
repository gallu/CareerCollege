<?php  // if6.php

$num_1 = random_int(0, 1);
$num_2 = random_int(0, 1);
var_dump($num_1, $num_2);

if ( $num_1 === 1 && $num_2 === 1 ) {
    echo "両方持ってる!!";
} else {
    echo "足りない orz";
}

