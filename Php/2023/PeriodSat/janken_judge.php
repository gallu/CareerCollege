<?php  // janken_judge.php
declare(strict_types=1);

// セッションを使う
ob_start();
session_start();

//　プレイヤー(入力）の受け取り
$pl = (int) $_POST["jan"];

//　コンピュータの手を決める
$janken_list = ["グー", "チョキ", "パー"];
$com = random_int(0, 2);

// var_dump($janken_list[$pl], $janken_list[$com]);

// じゃんけんの勝敗の判定
$judge = $pl - $com;
$judge = ($pl - $com + 3) % 3;
if ($judge === 0) {
    $message = "引き分け";
} elseif ($judge === 2 || $judge === -1) {
    $message = "勝ち";
} elseif ($judge === -2 || $judge === 1) {
    $message = "負け";
}

// 勝敗結果の記録
$_SESSION["janken"] ??= ["勝ち" => 0, "負け" => 0, "引き分け" => 0];
$_SESSION["janken"][$message] ++;
// var_dump($_SESSION["janken"]);

//　出力
echo "あなたの手: {$janken_list[$pl]} <br>\n";
echo "コンピュータの手: {$janken_list[$com]} <br>\n";
echo $message , "<br>\n";
echo "{$_SESSION['janken']['勝ち']}勝
      {$_SESSION['janken']['負け']}敗
      {$_SESSION['janken']['引き分け']}引き分け <br>\n";
