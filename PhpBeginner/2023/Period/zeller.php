<?php   // zeller.php
// https://ja.wikipedia.org/wiki/%E3%83%84%E3%82%A7%E3%83%A9%E3%83%BC%E3%81%AE%E5%85%AC%E5%BC%8F

$y = 2023;
$m = 5;
$d = 9;
echo $y;
echo "/";
echo $m;
echo "/";
echo $d;
echo "<br>";

// 計算する
$h =(
        $y
      + floor($y / 4)
      - floor($y / 100)
      + floor($y / 400)
      + floor((13 * $m + 8) / 5)
      + $d
    ) % 7;

echo $h;
echo "<br>";
echo "0, 1, 2, 3, 4, 5, 6 で、順に日曜日、月曜日、火曜日、水曜日、木曜日、金曜日、土曜日を表す";
