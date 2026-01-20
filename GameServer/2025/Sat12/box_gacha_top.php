<?php  // box_gacha_top.php

// セッションを開始する
session_start();

// ボックスガチャの残枚数
$num = count($_SESSION["box_gacha"] ?? []);

?>
<a href="box_gacha_reset.php">ボックスのリセット(設定)</a> (<?php echo $num; ?>)<br>
<a href="box_gacha_draw.php">ボックスからカードを引く</a><br>
