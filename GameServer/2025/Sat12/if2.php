<?php  // if2.php

$hit = random_int(2, 12);
echo "ヒットダイス {$hit} <br>";

if ($hit >= 7) {
    echo "命中した!! <br>";
}
