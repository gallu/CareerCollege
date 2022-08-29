<?php    // shuffle.php
// フィッシャー–イェーツの改良されたアルゴリズム https://ja.wikipedia.org/wiki/%E3%83%95%E3%82%A3%E3%83%83%E3%82%B7%E3%83%A3%E3%83%BC%E2%80%93%E3%82%A4%E3%82%A7%E3%83%BC%E3%83%84%E3%81%AE%E3%82%B7%E3%83%A3%E3%83%83%E3%83%95%E3%83%AB
$cards = [0,1, 2, 3, 4, 5, 6, 7, 8, 9, 10];

// i を n - 1 から 1 まで減少させながら、以下を実行する
$i = count($cards) - 1;
while($i > 0) {
   // j に 0 以上 i 以下のランダムな整数を代入する
   $j = random_int(0, $i);

   // a[j] と a[i]を交換する
   $awk = $cards[$j];
   $cards[$j] = $cards[$i];
   $cards[$i] = $awk;

    //
    $i -= 1;
}
var_dump($cards);