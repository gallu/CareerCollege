<?php  // blackjack.php
ob_start();
session_start();

require_once  __DIR__ . "/blackjack_function.php";

// var_dump($_SESSION['hand'] ?? []);
$hand = $_SESSION['hand'] ?? [];
$p_hand = $_SESSION['p_hand'] ?? [];
$deck = $_SESSION['deck'] ?? [];
$deck_count = count($deck);

// 手札の合計の計算
$total = totalCalculation($hand);

$p_total = totalCalculation($p_hand);
// var_dump($p_total);


?>
<?php
    echo "山札（{$deck_count})<br>\n";
    echo "親の手札:";
    foreach($p_hand as $k => $v) {
        if (0 === $k) {
            echo $v["display"];
        } else {
            echo "□";
        }
    }
    echo "<br>";
    echo "自分の手札:";
    foreach($hand as $_ => $v) {
        echo $v["display"] , "　";
    }
    echo "<br>";
    echo "合計:{$total} <br>";
?>
<br><br>
<a href="./blackjack_judge.php">勝負する</a><br>
<br>
<a href="./blackjack_draw.php">手札を引く</a><br>
<a href="./blackjack_clear.php">新しいゲームにする</a><br>
