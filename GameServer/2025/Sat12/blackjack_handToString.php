<?php  // blackjack_handToString.php

// cardの文字列表現
function cardToString($card) {
    return $card["suit"] . $card["rank"];
}

// 手札の文字列表現(出力)
function handToEcho($target, $cards, $cardValue) {
    echo "{$target}: ";
    foreach ($cards as $k => $v) {
        $s = cardToString($v);
        echo "[{$s}] ";
    }
    echo "({$cardValue})";
}
