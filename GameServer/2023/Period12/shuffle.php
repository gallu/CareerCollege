<?php // shuffle.php

// $deck = [0, 1, 2, 3, 4, 5, 6, 7, 8, 9];
$deck = [];
$suit = ["♠", "♣", "♥", "♦"];
foreach ($suit as $s) {
    for ($i = 1; $i <= 13; ++$i) {
        $deck[] = "{$s}{$i}";
    }
}

// var_dump($deck);

// shuffle($deck);
// var_dump($deck);

function FYshuffle($deck) {
    // 要素数が n の配列 a をシャッフルする(添字は0からn-1):
    $n = count($deck);
    // i を 0 から n - 2 まで増加させながら、以下を実行する
    for ($i = 0; $i <= $n-2; ++$i) {
    // var_dump($i);
        // j に i 以上 n 未満のランダムな整数を代入する
        $j = random_int($i, ($n - 1));
        // a[j] と a[i]を交換する
        $wk = $deck[$i];
        $deck[$i] = $deck[$j];
        $deck[$j] = $wk;
    }
    
    return $deck;
}
$deck = FYshuffle($deck);
var_dump($deck);
