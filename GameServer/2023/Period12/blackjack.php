<?php  // blackjack.php
ob_start();
session_start();

require_once  __DIR__ . "/blackjack_function.php";

// var_dump($_SESSION['hand'] ?? []);
$hand = $_SESSION['hand'] ?? [];
$deck = $_SESSION['deck'] ?? [];
$deck_count = count($deck);

// 手札の合計の計算
$total = totalCalculation($hand);

?>
<?php
    echo "山札（{$deck_count})<br>\n";
    foreach($hand as $_ => $v) {
        echo $v["display"] , "　";
    }
    echo "<br>";
    echo "合計:{$total} <br>";
?>
<br><br>
<a href="./blackjack_draw.php">手札を引く</a><br>
<a href="./blackjack_clear.php">手札を空にする</a><br>
