<?php  // box_gacha_draw.php

// セッション開始
session_start();
// 残枚数カウント
$num = count($_SESSION["box_gacha"] ?? []);
if (0 >= $num) {
    echo "カードが残ってません";
    exit;
}

// 1枚引く
$card = array_pop($_SESSION["box_gacha"]);

// 引いたカードの表示
echo "name: ", htmlspecialchars($card["name"]), "<br>\n";
echo htmlspecialchars($card["flavor"]), "<br>\n";

?>
<a href="box_gacha_top.php">戻る</a>
