<?php  // shuffle.php
declare(strict_types=1);

// 要素数が n の配列 a をシャッフルする(添字は0からn-1):
function fyShuffle(array $arr): array {
    $n = count($arr);
    // i を 0 から n - 2 まで増加させながら、以下を実行する
    for($i = 0; $i <= $n - 2; ++$i) {
        // var_dump($i);

        // j に i 以上 n 未満のランダムな整数を代入する
        $j = random_int($i, $n-1);
        // var_dump($j);

        // a[j] と a[i]を交換する
        [$arr[$j], $arr[$i]] = [$arr[$i], $arr[$j]];
    }

    return $arr;
}
/*
$awk = [0, 1, 2, 3, 4, 5, 6, 7, 8, 9];
$awk2 = fyShuffle($awk);
print_r($awk2);
*/

