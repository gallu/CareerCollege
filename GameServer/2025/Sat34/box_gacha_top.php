<?php  // box_gacha_top.php

// セッション開始
session_start();
// 残枚数カウント
$num = count($_SESSION["box_gacha"] ?? []);

?>
・<a href="box_gacha_init.php">ボックスガチャを初期化(リセット)する</a>(<?php echo $num; ?>)<br>
・<a href="box_gacha_draw.php">ボックスガチャを引く</a><br>
