<?php  // shuffle.php

/**
 * シャッフルする
 *
 * 引数: 配列
 * 戻値: シャッフルされた配列
 */
function FYshuffle($cards) {
	// 要素数が n の配列 a をシャッフルする(添字は0からn-1):
    $n = count($cards);
	// echo "n is {$n} <br>";
	// i を 0 から n - 2 まで増加させながら、以下を実行する
	for ($i = 0; $i <= $n-2; ++$i) {
		// echo "{$i} <br>";

        // j に i 以上 n 未満のランダムな整数を代入する
		$j = random_int($i, $n-1);
        // a[j] と a[i]を交換する
		[ $cards[$i], $cards[$j] ] = [ $cards[$j], $cards[$i] ];
	}

	return $cards;
}
