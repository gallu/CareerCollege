<?php  // box_gacha_draw.php
// セッションを開始する
session_start();

// 残枚数の確認
$num = count($_SESSION["box_gacha"] ?? []);
if (0 === $num) {
    echo "カードがありません";
    exit;
}

// 1枚ひく
$card = array_pop($_SESSION['box_gacha']);

// 引いたカードを表示
echo "名前:", htmlspecialchars($card["name"]), "<br>\n";
echo htmlspecialchars($card["flavor_text"]), "<br>\n";

?>
<a href="box_gacha_top.php">戻る</a>
