<?php  // blackjack_end.php
require_once __DIR__ . "/blackjackHandValue.php";
require_once __DIR__ . "/blackjack_handToString.php";

// セッションを開始する
session_start();

// ・ディーラー loop
// 合計が[一定値: 16]以下なら１枚引く
// 合計が[一定値]を超えたらloopから抜ける
while (blackjackHandValue($_SESSION["dealer"]) <= 16) {
    echo "draw <br>\n";
    $_SESSION["dealer"][] = array_pop($_SESSION["cards_shuffled"]);
}
// ・勝敗を判定する
$dealer_num = blackjackHandValue($_SESSION["dealer"]);
$player_num = blackjackHandValue($_SESSION["player"]);

// 手札の表示
handToEcho("ディーラー", $_SESSION["dealer"], $dealer_num);
echo "<br>";
//
handToEcho("プレイヤー", $_SESSION["player"], $player_num);
echo "<br><br>";


if ($dealer_num >= 22) {
    // ディーラーがバストしてたら、負け
    echo "プレイヤーの勝ち！(ディーラーがバスト)<br>\n";
} elseif ($dealer_num === $player_num) {
    // 同点なら引き分け(プッシュ
    echo "引き分け<br>\n";
} elseif ($player_num > $dealer_num) {
    // そうでなければ、点数で勝敗
    echo "プレイヤーの勝ち！<br>\n";
} else {
    echo "プレイヤーの負け<br>\n";
}
?>
<a href="./blackjack_top.php">Topに戻る</a><br>
