<?php  // random.php
declare(strict_types=1);
/*
真の乱数
    再現不可能性
        /dev/random
        /dev/urandom

疑似乱数: seed
    無作為性    (弱い疑似乱数)
    予測不可能性    (強い疑似乱数)
*/
// 真の乱数
$r = random_int(0, 99);
echo "{$r} <br>";

// 強い疑似乱数
$r = mt_rand(0, 99);
echo "{$r} <br>";

// 弱い疑似乱数(だった)
$r = rand(0, 99);
echo "{$r} <br>";

//
mt_srand( time() );
for ($i = 0; $i < 10; ++$i) {
    $r = mt_rand(0, 99);
    echo "{$r}, ";
}
echo "<br>";

//
mt_srand( 1234 ); // 75, 71, 6, 65, 16, 64, 32, 25, 75, 29,
for ($i = 0; $i < 10; ++$i) {
    $r = mt_rand(0, 99);
    echo "{$r}, ";
}
echo "<br>";
