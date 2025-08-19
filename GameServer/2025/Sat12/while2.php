<?php  // while2.php

function hit() {
    $r = random_int(1, 6) + random_int(1, 6);
    return $r;
}

// $r = hit();
// var_dump($r);

// 「10以上なら命中」で、命中するまで攻撃する
while(hit() < 10) {
    echo "はずれた... <br>";
}
echo "命中した!!";

