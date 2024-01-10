<?php  // blackjack.php
declare(strict_types=1);
require_once __DIR__ . "/blackjack_init.php";

//　山札の残枚数の表示
$deck_num = (new Deck())->count();

// 手札の表示
// XXX 後でメソッドにする(下のunserializeもあわせて）
$hobj = new Hand();
$hands = $hobj->get();
$total = $hobj->calculation();

?>
<?php
    echo "山札($deck_num)<br>"; 
    foreach($hands as $h) {
        echo $h , " ";
    }
    echo "<br>";
    echo "合計: {$total}<br>";
?>
<br>
<a href="./blackjack_draw.php">カードを引く </a><br>
<a href="./blackjack_clear.php">手札を空にする </a><br>
