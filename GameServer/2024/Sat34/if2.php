<?php  // if2.php

$d = random_int(1, 6) + random_int(1, 6); // 2d6
echo "{$d} ... ";

if ($d >= 8) {
    echo "命中!!";
} else {
    echo "外れた orz";
}
