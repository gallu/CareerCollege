<?php  // janken_judge.php
// セッションを使う
ob_start();
session_start();

// じゃんけんの手の配列
$gya_array = ["グー", "チョキ", "パー"];

// PLの手を把握する
$pl = (int) $_POST["gya"];

//　コンピュータ側の手を作る
$com = random_int(0, 2);

// var_dump($gya_array[$pl], $gya_array[$com]);

// 勝敗を判断する
$judge = $pl - $com;
$judge = ($pl - $com + 3) % 3;
// var_dump($judge);

// 勝敗の情報を保存する
$_SESSION["janken"] ??= ["draw" => 0, "win" => 0, "lose" => 0];
if ($judge === 0) {
    echo "引き分け";
    $_SESSION["janken"]["draw"] ++;
} elseif ($judge === -1 || $judge === 2) {
    echo "勝ち";
    $_SESSION["janken"]["win"] ++;
} elseif ($judge === -2 || $judge === 1) {
    echo "負け";
    $_SESSION["janken"]["lose"] ++;
}
// var_dump($_SESSION);

// 出力する
echo "<br>";
echo "{$_SESSION["janken"]["win"]}勝
     　{$_SESSION["janken"]["lose"]}負
     　{$_SESSION["janken"]["draw"]}引き分け";






