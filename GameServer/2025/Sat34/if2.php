<?php  // if2.php

$dice = random_int(1, 6) + random_int(1, 6);

if (8 <= $dice) {
    echo "命中!!";
} else {
    echo "ミス...";
}
