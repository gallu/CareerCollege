<?php  // if2.php

$num = random_int(1, 10);
echo "{$num} is ... ";

if (5 >= $num) {
    echo "5以下";
}

if (5 < $num) {
    echo "5より大きい";
}

echo "fin.";
