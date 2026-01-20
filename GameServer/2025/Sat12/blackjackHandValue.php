<?php  // blackjackHandValue.php

function blackjackHandValue($hands) {
    $total = 0;
    // rankが2-10は、そのままその数字を使う
    // rankがJ,Q,Kは、10として使う
    // rankがAは、「1または11」として使う    
    $ace_count = 0;
    foreach ($hands as $c) {
        // var_dump($c);
        // echo "<br>\n";
        switch ($c["rank"]) {
            case 'J': case 'Q': case 'K':
                $total += 10;
                break;

            case "2": case "3": case "4":
            case "5": case "6": case "7":
            case "8": case "9": case "10":
                $total += (int)$c["rank"];
                break;

            case "A":
                $total += 11;
                $ace_count ++;
        }
    }
    for ($i = 0; $i < $ace_count; ++$i) {
        if ($total > 21) {
            $total -= 10;
        }
    }

    //
    // var_dump($total);
    // echo "<br>\n";
    return $total;
}
