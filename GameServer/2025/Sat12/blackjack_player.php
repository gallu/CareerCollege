<?php  // blackjack_player.php
require_once __DIR__ . "/blackjackHandValue.php";
require_once __DIR__ . "/blackjack_handToString.php";

// セッションを開始する
session_start();

// ディーラーのカードを表示
// var_dump($_SESSION["dealer"]);
echo "ディーラー: ";
foreach ($_SESSION["dealer"] as $k => $v) {
    if (0 === $k) {
        // １枚目だけは見せる
        $s = cardToString($v);
        echo "[{$s}] ";
    } else {
        // 2枚目(以降)は伏せる
        echo "[■] ";
    }
}
echo "<br>";

// プレイヤーのカードを表示
// var_dump($_SESSION["player"]);
$num = blackjackHandValue($_SESSION["player"]);
handToEcho("プレイヤー", $_SESSION["player"], $num);
echo "<br><br>";

// プレイヤーのカードの合計が22以上(バスト)なら、即時でプレイヤーの負け
if ($num > 21) {
    //
    echo "バストしました orz <br>\n";
    echo '<a href="./blackjack_top.php">Topに戻る</a><br>';
    exit;
}

?>
<a href="./blackjack_player_draw.php">ヒット(カードを追加で引く)</a><br>
<a href="./blackjack_player_stand.php">スタンド(ここで止める)</a><br>


