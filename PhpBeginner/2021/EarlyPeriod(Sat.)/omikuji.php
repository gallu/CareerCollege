<?php  // omikuji.php
//  https://dev2.m-fr.net/アカウント名/omikuji.php
// くじ箱を用意する
$omikuji_box = [
    '大吉' ,
    '中吉',
    '小吉' ,
    '吉' ,
    '末吉' ,
    '凶' ,
    '大凶' ,
];
//echo  count($omikuji_box);
//exit;

// くじ箱から１つ、棒を引く
$max = count($omikuji_box) - 1;
$omikuji_no = random_int(0, $max);

// 棒の番号に紐づいた紙を取得する
$omikuji_string = $omikuji_box[ $omikuji_no ];

?>
<!doctype html>
<html lang="ja">
<head>
  <meta charset="UTF-8">
  <title>おみくじ</title>
</head>
<body>
今日の運勢は<br>
<?php echo $omikuji_string; ?>
です！！
</body>
</html>




