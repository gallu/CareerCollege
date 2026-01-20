<?php  // shuffle.php
declare(strict_types=1);

function FYShuffle(array $base): array {
    // https://ja.wikipedia.org/wiki/%E3%83%95%E3%82%A3%E3%83%83%E3%82%B7%E3%83%A3%E3%83%BC%E2%80%93%E3%82%A4%E3%82%A7%E3%83%BC%E3%83%84%E3%81%AE%E3%82%B7%E3%83%A3%E3%83%83%E3%83%95%E3%83%AB
    // 要素数が n の配列 a をシャッフルする(添字は0からn-1):
    $n = count($base);
    // i を 0 から n - 2 まで増加させながら、以下を実行する
    for ($i = 0; $i <= $n-2; ++$i) {
           // j に i 以上 n 未満のランダムな整数を代入する
           $j = random_int($i, $n-1);
           // a[j] と a[i]を交換する
           [ $base[$j], $base[$i] ] = [ $base[$i], $base[$j] ];
    }

    return $base;
}


// $data = [0, 1, 2, 3, 4, 5, 6, 7, 8, 9];
// $s_data = FYShuffle($data);
// print_r($s_data);
