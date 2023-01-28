<?php
// 広告一覧を設定
$ad_box = array(
    '<a href="">広告１</a>',
    '<a href="">広告２</a>',
    '<a href="">広告３</a>',
    '<a href="">広告４</a>',
);
// 選んだ番号のところにある紙(文章)を取得
$ad_up = $ad_box[mt_rand(0, count($ad_box)-1)];
$ad_lo = $ad_box[mt_rand(0, count($ad_box)-1)];
?>
<!DOCTYPE HTML>
<html lang="ja">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width; initial-scale=1.0; maximum-scale=1.0; user-scalable=1;">
<title>なんかBlog</title>
</head>
<body>
<?php
// 出力
echo $ad_up;
?>
<hr>
ブログコンテンツブログコンテンツブログコンテンツブログコンテンツ<br>
<hr>
<?php
// 出力
echo $ad_lo;
?>
</body>
</html>
