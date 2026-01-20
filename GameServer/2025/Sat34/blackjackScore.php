<?php  // blackjackScore.php

// 得点計算
function blackjackScore(array $cards): int {
    // rankが2-10なら、数字をそのまま使う
    // rankがJ,Q,Kなら、10として扱う
    // rankがAなら、1または11として扱う
    $total = 0;
    $ace_counter = 0;
    foreach ($cards as $c) {
        // var_dump($c->getRank());
        switch ($c->getRank()) {
            case "J": case "Q": case "K":
                $total += 10;
                break;
            case "A":
                $total += 11;
                $ace_counter ++;
                break;
            default:
                $total += (int)$c->getRank();
                break;
        }
    }
    //
    for ($i = 0; $i < $ace_counter; ++$i) {
        if ($total > 21) {
            $total -= 10;
        }
    }

    // echo "<br>\n";
    return $total;
}

