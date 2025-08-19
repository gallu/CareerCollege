<?php  // if6.php

$hit = random_int(2, 12);
echo "ヒットダイス {$hit} <br>";

if ($hit >= 7) {
    echo "命中した!! <br>";
} elseif ($hit === 2) {
    echo "大失敗ファンブル ?! <br>";
} else {
    echo "はずした orz <br>";
}
