<?php
// くじ箱を用意する
$kuji_box = array(
    '大吉<img src="http://sksk-sports.up.n.seesaa.net/sksk-sports/image/b96b3bcda957c4bba61c0ee2daf1e366.jpg?d=a1">',
    '中吉<img src="http://lohas.nicoseiga.jp/thumb/1682485i?">',
    '小吉<img src="http://lohas.nicoseiga.jp/thumb/1670725i?">',
    '吉<img src="http://www.cidianwang.com/file/shufa/zhuanshu/dbfb7e98407a9fab.gif">',
    '末吉<img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcQb1UFaR4MvIN5C7QFB5BG4bI702VZRX7y5fagpnDl79yYIhery">',
    '凶<img src="http://lohas.nicoseiga.jp/thumb/1681140i?">',
    '大凶<img src="http://lohas.nicoseiga.jp/thumb/2062648i?1337260338">',
);
// くじ箱から１つの番号を選ぶ
$count = count($kuji_box);
$num = mt_rand(0, $count-1);
// 選んだ番号のところにある紙(文章)を取得
$s = $kuji_box[$num];
//$s = $kuji_box[mt_rand(0, count($kuji_box)-1)];
?>
<!DOCTYPE HTML>
<html lang="ja">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width; initial-scale=1.0; maximum-scale=1.0; user-scalable=1;">
<title>おみくじ</title>
</head>
<body>
あなたの運勢は…<br>
<?php
// 出力
echo $s;
?>
</body>
</html>
