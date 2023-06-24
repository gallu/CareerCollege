<?php  // for.php

// 10回繰り返す
for($i = 0; $i < 10; ++$i) {
    echo "{$i}, ";
}
echo "<br> \n";

// 「１から10まで」を足す
$total = 0; // 「足す」ための入れ物を用意
for($i = 1; $i <= 10; ++$i) {
    echo "{$i}, ";
    $total = $total + $i;
}
echo $total;
