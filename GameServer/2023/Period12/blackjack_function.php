<?php  // blackjack_function.php

define("WIN", "win");
define("LOSE", "lose");
define("DRAW", "draw");

/**
 * 勝敗の判定
 */
function judge($total, $p_total) {
    if (21 < $p_total) {
        // 親がバーストしてたら問答無用で子の勝利
        $outcome = WIN;
    } elseif (21 < $total) {
        // 子がバーストしてたら当然負け
        $outcome = LOSE;
    } else {
        // それ以外なら数値勝負
        if ($total > $p_total) {
            // win
            $outcome = WIN;
        } elseif ($total === $p_total) {
            // draw
            $outcome = DRAW;
        } else {
            // lose
            $outcome = LOSE;
        }
    }
    return $outcome;
}

/**
 * (手札の)合計の計算
 */
function totalCalculation($hand) {
    $total = 0;
    $a_counter = false; // Aが出たかどうかのカウンタ
    foreach($hand as $_ => $h) {
        // A 出た？
        if (1 === $h["number"]) {
            $a_counter = true;
        }
        // 合計の計算
        if (10 <= $h["number"]) {
            $total += 10;
        } else {
            $total += $h["number"];
        }
    }
    // AがあるときはAを11として扱うことを検討する
    if (true === $a_counter) {
        // if (($total + 10) <= 21) { // 意味はこれ
        if ($total <= 11) {
            $total += 10;
        }
    }

    return $total;
}

/**
 * トランプを１デッキ分作成する
 */
function getDeck() {
    $deck = [];
    $suit = ["♠", "♣", "<span style='color:red'>♥</span>", "<span style='color:red'>♦</span>"];
    foreach ($suit as $s) {
        for ($i = 1; $i <= 13; ++$i) {
            $d = [];
            $d['number'] = $i; // 数値
            $d['suit'] = $s; // スート
            // 表示
            $is = match($i) {
                1 => "A",
                11 => "J",
                12 => "Q",
                13 => "K",
                default => "{$i}",
            };
            $d['display'] = "{$s}{$is}"; 

            $deck[] = $d;
        }
    }
    return $deck;
}

/**
 * シャッフルする
 */
function FYshuffle($deck) {
    // 要素数が n の配列 a をシャッフルする(添字は0からn-1):
    $n = count($deck);
    // i を 0 から n - 2 まで増加させながら、以下を実行する
    for ($i = 0; $i <= $n-2; ++$i) {
    // var_dump($i);
        // j に i 以上 n 未満のランダムな整数を代入する
        $j = random_int($i, ($n - 1));
        // a[j] と a[i]を交換する
        $wk = $deck[$i];
        $deck[$i] = $deck[$j];
        $deck[$j] = $wk;
    }
    
    return $deck;
}

/**
 * カードを１枚引く
 * デッキがなかったら「デッキを作ってシャッフルして」から引く
 */
function drawCard() {
    if (
            false === isset($_SESSION['deck'])
            || [] === $_SESSION['deck']
       ) {
        $deck = getDeck();
        $deck = FYshuffle($deck);
        // $deck = FYshuffle(getDeck());

        $_SESSION['deck'] = $deck;
    }
    $card = array_pop($_SESSION['deck']);
    
    return $card;
}
