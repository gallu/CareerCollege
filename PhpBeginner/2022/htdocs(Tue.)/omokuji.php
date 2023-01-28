<?php   // omokuji.php
//   https://dev2.m-fr.net/アカウント名/omokuji.php
// おみくじの箱を用意
$omikuji_box = [
    "大吉",
    "中吉",
    "吉",
    "小吉",
    "末吉",
    "凶",
    "大凶",
];
//var_dump($omikuji_box);

// おみくじを引く(番号を取得)
$omikuji_max = count($omikuji_box); // おみくじ箱の個数を把握
$omikuji_index_max = $omikuji_max - 1; // 「配列の最大値」は、個数-1
$no = random_int(0, $omikuji_index_max);
//var_dump($no);

// 「引いた番号」に対する紙(文字列)を取得
$omikuji_string = $omikuji_box[ $no ];
//var_dump($omikuji_string);

// 取得した紙を出力
?><!DOCTYPE html>
<html>
  <head>
    <title>おみくじ</title>
  </head>
  <body>
    <h1>おみくじ</h1>
    今日のあなたの運勢は <span style="font-size: 180%;color: #ff0000;">「
    <?php echo htmlspecialchars($omikuji_string, ENT_QUOTES); ?>
    」</span>です！！
  </body>
</html>







