<?php   // omikuji.php

// 「おみくじの塊(かたまり)」を用意する
$omikuji_box = [
    '大吉',
    '中吉',
    '吉',
    '小吉',
    '末吉',
    '凶',
    '小凶',
    '中凶',
    '大凶',
];
//var_dump( $omikuji_box );

// おみくじ箱の数を数える
$omikuji_count = count($omikuji_box);
//var_dump( $omikuji_count );

// おみくじを１つ、引く
$draw_no = random_int(0, $omikuji_count - 1);
//var_dump( $draw_no );

// 引いたおみくじの紙(文章)を取得
$draw_string = $omikuji_box[ $draw_no ];
//var_dump( $draw_string );
?>
<html lang="ja">
<head>
  <meta charset="UTF-8">
  <title>おみくじ</title>
</head>
<body>

今日のあなたの運勢は<br>
<b><?php echo $draw_string; ?></b>
<br>です！！

</body>
</html>
