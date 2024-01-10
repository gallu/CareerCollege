<?php  // blackjack_judge.php
ob_start();
session_start();

require_once  __DIR__ . "/blackjack_function.php";

$hand = $_SESSION['hand'] ?? [];
$p_hand = $_SESSION['p_hand'] ?? [];

$total = totalCalculation($hand);
$p_total = totalCalculation($p_hand);
// var_dump($total, $p_total);

/* 勝敗を確認する win / draw / lose */
$outcome = judge($total, $p_total);
?>
<?php
    echo "親の手札:";
    foreach($p_hand as $_ => $v) {
        echo $v["display"] , "　";
    }
    echo "<br>";
    echo "合計:{$p_total} <br>";

    echo "<br>";

    echo "自分の手札:";
    foreach($hand as $_ => $v) {
        echo $v["display"] , "　";
    }
    echo "<br>";
    echo "合計:{$total} <br>";

    if (WIN === $outcome) {
        echo "あなたの勝利です！！<br>";
    } elseif (LOSE === $outcome) {
        echo "負けちゃった orz<br>";
    } else {
        echo "引き分け～<br>";
    }
?>
<a href="./blackjack_clear.php">新しいゲームにする</a><br>
